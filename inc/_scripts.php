<?php
/**
 * Client-side scripts — reveals, counters, sticky nav, mobile menu, RFQ form.
 * Language is server-rendered (PHP), so no i18n dictionary needed here.
 */
?>
<script>
(function(){
  var root = document.querySelector('.leen-site');
  if (!root) return;

  // ===================== REVEAL ON SCROLL =====================
  var reveals = root.querySelectorAll('.lt-reveal:not(.is-visible)');
  if ('IntersectionObserver' in window && reveals.length) {
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(e){
        if (e.isIntersecting) { e.target.classList.add('is-visible'); io.unobserve(e.target); }
      });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });
    reveals.forEach(function(el){ io.observe(el); });
  } else { reveals.forEach(function(el){ el.classList.add('is-visible'); }); }

  // ===================== COUNTERS =====================
  var counters = root.querySelectorAll('.lt-count');
  function animateCount(el){
    var target = parseInt(el.getAttribute('data-target'), 10) || 0;
    var format = el.getAttribute('data-format');
    var duration = 1400;
    var start = performance.now();
    function tick(now){
      var p = Math.min(1, (now - start) / duration);
      var eased = 1 - Math.pow(1 - p, 3);
      var val = Math.floor(target * eased);
      el.textContent = (format === 'thousand' && val >= 1000) ? val.toLocaleString('en-US') : val;
      if (p < 1) requestAnimationFrame(tick);
      else el.textContent = format === 'thousand' ? target.toLocaleString('en-US') : target;
    }
    requestAnimationFrame(tick);
  }
  if ('IntersectionObserver' in window && counters.length) {
    var io2 = new IntersectionObserver(function(entries){
      entries.forEach(function(e){ if (e.isIntersecting) { animateCount(e.target); io2.unobserve(e.target); } });
    }, { threshold: 0.4 });
    counters.forEach(function(el){ io2.observe(el); });
  } else { counters.forEach(function(el){ animateCount(el); }); }

  // ===================== STICKY NAV + SCROLL-TOP =====================
  var nav = document.getElementById('lt-nav');
  var fabTop = document.getElementById('lt-fab-top');
  var lastY = -1;
  function onScroll(){
    var y = window.scrollY || window.pageYOffset;
    if (y === lastY) return;
    lastY = y;
    if (nav) nav.classList.toggle('is-scrolled', y > 16);
    if (fabTop) fabTop.classList.toggle('is-visible', y > 600);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // ===================== MOBILE MENU =====================
  var mobileLinks = document.querySelectorAll('#lt-mobile-menu a');
  var toggle = document.getElementById('lt-mobile-toggle');
  mobileLinks.forEach(function(a){
    a.addEventListener('click', function(){ if (toggle) toggle.checked = false; });
  });
  if (toggle) {
    toggle.addEventListener('change', function(){
      document.body.style.overflow = toggle.checked ? 'hidden' : '';
    });
  }

  // ===================== RFQ FORM =====================
  function buildRfqBody(){
    var f = document.getElementById('lt-rfq-form');
    if (!f) return '';
    var get = function(id){ var el = document.getElementById(id); return el ? (el.value || '').trim() : ''; };
    return [
      'Name: ' + get('rfq-name'),
      'Company: ' + get('rfq-company'),
      'Email: ' + get('rfq-email'),
      'Phone: ' + get('rfq-phone'),
      'Country: ' + get('rfq-country'),
      'Category: ' + get('rfq-category'),
      'Quantity: ' + get('rfq-quantity'),
      'Destination: ' + get('rfq-destination'),
      '',
      'Details:',
      get('rfq-notes')
    ].join('\n');
  }
  function validateRfq(){
    var required = ['rfq-name','rfq-company','rfq-email','rfq-phone','rfq-country','rfq-category'];
    for (var i=0;i<required.length;i++){
      var el = document.getElementById(required[i]);
      if (!el || !(el.value || '').trim()) {
        if (el) { el.focus(); el.style.borderColor = '#dc2626'; setTimeout(function(e){ e.style.borderColor=''; }, 2000, el); }
        return false;
      }
    }
    return true;
  }
  var rfqForm = document.getElementById('lt-rfq-form');
  if (rfqForm) {
    rfqForm.addEventListener('submit', function(e){
      e.preventDefault();
      if (!validateRfq()) return;
      var subject = encodeURIComponent('RFQ — ' + (document.getElementById('rfq-company').value || 'New enquiry'));
      var body = encodeURIComponent(buildRfqBody());
      window.location.href = 'mailto:<?= LT_EMAIL ?>?subject=' + subject + '&body=' + body;
    });
  }
  var rfqWa = document.getElementById('lt-rfq-wa');
  if (rfqWa) {
    rfqWa.addEventListener('click', function(){
      if (!validateRfq()) return;
      var text = encodeURIComponent('Hello LEEN TRADE, I would like to request a quotation:\n\n' + buildRfqBody());
      window.open('https://wa.me/<?= substr(LT_PHONE_DIAL, 1) ?>?text=' + text, '_blank', 'noopener');
    });
  }
})();
</script>
