<?php
require __DIR__ . '/inc/_config.php';

$page = [
    'title' => 'B2B Wholesale Services | Leen Trade Lebanon',
    'desc'  => 'Services built around your business: wholesale supply, bulk order fulfillment, delivery across Lebanon, warehouse pickup, restocking support, and quote assistance.',
    'kw'    => 'B2B wholesale services Lebanon, bulk order fulfillment, delivery Lebanon, warehouse pickup Saida',
    'slug'  => '/services',
];
$lp = $LANG === 'ar' ? '?lang=ar' : '';

require __DIR__ . '/inc/_head.php';
require __DIR__ . '/inc/_header.php';
?>

<!-- ============== PAGE HEADER ============== -->
<section class="lt-page-header" style="position:relative;background:linear-gradient(135deg,#0a2540 0%,#1a3554 100%);color:#fff;padding:80px 40px;overflow:hidden">
  <div style="position:absolute;top:-100px;right:-100px;width:400px;height:400px;background:radial-gradient(circle,rgba(201,162,95,.14),transparent 70%);border-radius:50%;pointer-events:none"></div>
  <div style="position:absolute;bottom:-150px;left:-100px;width:400px;height:400px;background:radial-gradient(circle,rgba(201,162,95,.08),transparent 70%);border-radius:50%;pointer-events:none"></div>
  <div style="max-width:1200px;margin:0 auto;position:relative;z-index:1">
    <nav aria-label="Breadcrumb" style="font-size:.78rem;color:#94a3b8;margin-bottom:20px">
      <a href="index.php<?= $lp ?>" style="color:#94a3b8;text-decoration:none" data-i18n="nav.home"><?= t('nav.home') ?></a> <span style="margin:0 8px;color:#c9a25f">/</span> <span style="color:#fff" data-i18n="page.services.crumb"><?= t('page.services.crumb') ?></span>
    </nav>
    <div class="lt-eyebrow" style="color:#c9a25f" data-i18n="page.services.crumb"><?= t('page.services.crumb') ?></div>
    <h1 style="font-size:2.6rem;font-weight:800;line-height:1.15;margin:0 0 18px 0;color:#fff;letter-spacing:-.02em;max-width:780px" data-i18n="page.services.h1"><?= t('page.services.h1') ?></h1>
    <p style="color:#cbd5e1;font-size:1.02rem;line-height:1.7;margin:0;max-width:680px;font-weight:400" data-i18n="page.services.intro"><?= t('page.services.intro') ?></p>
  </div>
</section>

<!-- ============== SERVICES (TIMELINE) ============== -->
<section id="services" class="lt-section" style="background:#fff;padding:96px 40px">
  <div style="max-width:1200px;margin:0 auto">
    <div class="lt-reveal" style="text-align:center;margin-bottom:60px">
      <div class="lt-eyebrow is-center" data-i18n="svc.eyebrow"><?= t('svc.eyebrow') ?></div>
      <h2 class="lt-section-title" style="font-size:2.2rem;font-weight:800;margin:0 0 14px 0;line-height:1.2" data-i18n="svc.title"><?= t('svc.title') ?></h2>
      <p style="color:#4b5563;font-size:1rem;line-height:1.7;max-width:680px;margin:0 auto;font-weight:400" data-i18n="svc.lead"><?= t('svc.lead') ?></p>
    </div>

    <div class="lt-timeline">
      <div class="lt-tl-step">
        <div class="lt-tl-content lt-reveal" data-delay="1">
          <div class="lt-tl-num">01</div>
          <h3 class="lt-tl-title" data-i18n="svc.t1"><?= t('svc.t1') ?></h3>
          <p class="lt-tl-desc" data-i18n="svc.d1"><?= t('svc.d1') ?></p>
        </div>
        <div class="lt-tl-marker" aria-hidden="true"><span></span></div>
        <div class="lt-tl-image lt-reveal" data-delay="1">
          <div class="lt-tl-img-wrap" data-no-photo>
            <div class="lt-tl-img-placeholder">
              <span class="tag">Wholesale</span>
              <svg class="icon"><use href="#i-handshake"/></svg>
            </div>
            <img src="Assets/services/Service-1.png" alt="B2B Wholesale Supply — Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
          </div>
        </div>
      </div>

      <div class="lt-tl-step">
        <div class="lt-tl-content lt-reveal" data-delay="2">
          <div class="lt-tl-num">02</div>
          <h3 class="lt-tl-title" data-i18n="svc.t2"><?= t('svc.t2') ?></h3>
          <p class="lt-tl-desc" data-i18n="svc.d2"><?= t('svc.d2') ?></p>
        </div>
        <div class="lt-tl-marker" aria-hidden="true"><span></span></div>
        <div class="lt-tl-image lt-reveal" data-delay="2">
          <div class="lt-tl-img-wrap" data-no-photo>
            <div class="lt-tl-img-placeholder">
              <span class="tag">Distribution</span>
              <svg class="icon"><use href="#i-truck"/></svg>
            </div>
            <img src="Assets/services/Service-2.png" alt="Distribution Services — Leen Trade" loading="lazy" class="lt-fit-contain" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
          </div>
        </div>
      </div>

      <div class="lt-tl-step">
        <div class="lt-tl-content lt-reveal" data-delay="3">
          <div class="lt-tl-num">03</div>
          <h3 class="lt-tl-title" data-i18n="svc.t3"><?= t('svc.t3') ?></h3>
          <p class="lt-tl-desc" data-i18n="svc.d3"><?= t('svc.d3') ?></p>
        </div>
        <div class="lt-tl-marker" aria-hidden="true"><span></span></div>
        <div class="lt-tl-image lt-reveal" data-delay="3">
          <div class="lt-tl-img-wrap" data-no-photo>
            <div class="lt-tl-img-placeholder">
              <span class="tag">Logistics</span>
              <svg class="icon"><use href="#i-ship"/></svg>
            </div>
            <img src="Assets/services/Service-3.png" alt="Logistics & Shipping — Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
          </div>
        </div>
      </div>

      <div class="lt-tl-step">
        <div class="lt-tl-content lt-reveal" data-delay="1">
          <div class="lt-tl-num">04</div>
          <h3 class="lt-tl-title" data-i18n="svc.t4"><?= t('svc.t4') ?></h3>
          <p class="lt-tl-desc" data-i18n="svc.d4"><?= t('svc.d4') ?></p>
        </div>
        <div class="lt-tl-marker" aria-hidden="true"><span></span></div>
        <div class="lt-tl-image lt-reveal" data-delay="1">
          <div class="lt-tl-img-wrap" data-no-photo>
            <div class="lt-tl-img-placeholder">
              <span class="tag">Industrial</span>
              <svg class="icon"><use href="#i-factory"/></svg>
            </div>
            <img src="Assets/services/Service-4.png" alt="Packaging & Industrial — Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
          </div>
        </div>
      </div>

      <div class="lt-tl-step">
        <div class="lt-tl-content lt-reveal" data-delay="2">
          <div class="lt-tl-num">05</div>
          <h3 class="lt-tl-title" data-i18n="svc.t5"><?= t('svc.t5') ?></h3>
          <p class="lt-tl-desc" data-i18n="svc.d5"><?= t('svc.d5') ?></p>
        </div>
        <div class="lt-tl-marker" aria-hidden="true"><span></span></div>
        <div class="lt-tl-image lt-reveal" data-delay="2">
          <div class="lt-tl-img-wrap" data-no-photo>
            <div class="lt-tl-img-placeholder">
              <span class="tag">Restocking</span>
              <svg class="icon"><use href="#i-clock"/></svg>
            </div>
            <img src="Assets/services/Service-5.png" alt="Regular Restocking Support — Leen Trade" loading="lazy" class="lt-fit-contain" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
          </div>
        </div>
      </div>

      <div class="lt-tl-step">
        <div class="lt-tl-content lt-reveal" data-delay="3">
          <div class="lt-tl-num">06</div>
          <h3 class="lt-tl-title" data-i18n="svc.t6"><?= t('svc.t6') ?></h3>
          <p class="lt-tl-desc" data-i18n="svc.d6"><?= t('svc.d6') ?></p>
        </div>
        <div class="lt-tl-marker" aria-hidden="true"><span></span></div>
        <div class="lt-tl-image lt-reveal" data-delay="3">
          <div class="lt-tl-img-wrap" data-no-photo>
            <div class="lt-tl-img-placeholder">
              <span class="tag">Support</span>
              <svg class="icon"><use href="#i-headset"/></svg>
            </div>
            <img src="Assets/services/Service-6.png" alt="Quote & Order Support — Leen Trade" loading="lazy" class="lt-fit-contain" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============== FINAL CTA ============== -->
<section id="cta" class="lt-section" style="background:#0a2540;padding:84px 40px;position:relative;overflow:hidden">
  <div style="position:absolute;top:-150px;right:-150px;width:500px;height:500px;background:radial-gradient(circle,rgba(201,162,95,.14),transparent 70%);border-radius:50%;z-index:0"></div>
  <div style="position:absolute;bottom:-200px;left:-200px;width:500px;height:500px;background:radial-gradient(circle,rgba(201,162,95,.08),transparent 70%);border-radius:50%;z-index:0"></div>
  <div class="lt-reveal" style="max-width:780px;margin:0 auto;text-align:center;position:relative;z-index:1">
    <div class="lt-eyebrow is-center" style="color:#c9a25f" data-i18n="svc.cta.eyebrow"><?= t('svc.cta.eyebrow') ?></div>
    <h2 class="lt-section-title" style="font-size:2rem;font-weight:800;color:#fff;margin:0 0 18px 0;line-height:1.25;letter-spacing:-.02em" data-i18n="svc.cta.title"><?= t('svc.cta.title') ?></h2>
    <p style="color:#cbd5e1;font-size:1rem;line-height:1.7;margin:0 auto 30px;max-width:560px;font-weight:400" data-i18n="svc.cta.lead"><?= t('svc.cta.lead') ?></p>
    <a href="request-quote.php<?= $lp ?>#rfq" class="lt-btn-gold" style="display:inline-flex;align-items:center;gap:10px;padding:16px 34px;border-radius:4px;font-weight:700;font-size:.96rem;text-decoration:none">
      <svg class="ic ic-sm"><use href="#i-envelope"/></svg> <span data-i18n="svc.cta.btn"><?= t('svc.cta.btn') ?></span> <svg class="ic ic-sm"><use href="#i-arrow-right"/></svg>
    </a>
  </div>
</section>

<?php require __DIR__ . '/inc/_footer.php'; ?>
