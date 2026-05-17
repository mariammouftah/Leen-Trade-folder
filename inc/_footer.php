<?php
/**
 * Footer + floating WhatsApp button + scroll-to-top + closing wrappers.
 */
$lp = $LANG === 'ar' ? '?lang=ar' : '';
?>

<!-- ============== FOOTER ============== -->
<footer style="background:#061a30;padding:72px 40px 0;border-top:1px solid rgba(255,255,255,.06)">
  <div style="max-width:1200px;margin:0 auto">
    <div class="lt-footer-grid" style="display:flex;gap:60px;flex-wrap:wrap;padding-bottom:56px">
      <div style="flex:2;min-width:240px">
        <img src="<?= LT_LOGO_LIGHT ?>" alt="<?= LT_BRAND ?>" style="height:48px;width:auto;margin-bottom:22px">
        <p style="font-size:.88rem;color:#94a3b8;line-height:1.85;margin:0 0 24px 0;max-width:340px;font-weight:400"><?= t('footer.about') ?></p>
        <div style="display:flex;flex-direction:column;gap:10px;margin-bottom:22px">
          <a href="tel:<?= LT_PHONE_DIAL ?>" style="color:#cbd5e1;font-size:.9rem;font-weight:600;display:inline-flex;align-items:center;gap:10px;text-decoration:none"><svg class="ic ic-sm" style="color:#c9a25f"><use href="#i-phone"/></svg><?= LT_PHONE ?></a>
          <a href="mailto:<?= LT_EMAIL ?>" style="color:#94a3b8;font-size:.86rem;font-weight:400;display:inline-flex;align-items:center;gap:10px;text-decoration:none"><svg class="ic ic-sm" style="color:#c9a25f"><use href="#i-envelope"/></svg><?= LT_EMAIL ?></a>
        </div>
        <div style="display:flex;gap:8px">
          <a href="#" aria-label="Facebook"  class="lt-social" style="width:38px;height:38px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:4px;display:flex;align-items:center;justify-content:center;color:#94a3b8"><svg class="ic ic-md"><use href="#i-facebook"/></svg></a>
          <a href="#" aria-label="LinkedIn"  class="lt-social" style="width:38px;height:38px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:4px;display:flex;align-items:center;justify-content:center;color:#94a3b8"><svg class="ic ic-md"><use href="#i-linkedin"/></svg></a>
          <a href="#" aria-label="Instagram" class="lt-social" style="width:38px;height:38px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:4px;display:flex;align-items:center;justify-content:center;color:#94a3b8"><svg class="ic ic-md"><use href="#i-instagram"/></svg></a>
          <a href="<?= wa_link() ?>" target="_blank" rel="noopener" aria-label="WhatsApp" class="lt-social" style="width:38px;height:38px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:4px;display:flex;align-items:center;justify-content:center;color:#94a3b8"><svg class="ic ic-md"><use href="#i-whatsapp"/></svg></a>
        </div>
      </div>
      <div style="flex:1;min-width:140px">
        <h4 style="font-size:.78rem;font-weight:700;color:#fff;margin:0 0 22px 0;letter-spacing:.14em;text-transform:uppercase"><?= t('footer.company') ?></h4>
        <ul style="padding:0;margin:0;display:flex;flex-direction:column;gap:13px;list-style:none">
          <li><a href="index.php<?= $lp ?>"        class="lt-footer-link" style="color:#94a3b8;text-decoration:none;font-size:.87rem;font-weight:400"><?= t('nav.home') ?></a></li>
          <li><a href="about.php<?= $lp ?>"        class="lt-footer-link" style="color:#94a3b8;text-decoration:none;font-size:.87rem;font-weight:400"><?= t('nav.about') ?></a></li>
          <li><a href="markets.php<?= $lp ?>"      class="lt-footer-link" style="color:#94a3b8;text-decoration:none;font-size:.87rem;font-weight:400"><?= t('nav.markets') ?></a></li>
          <li><a href="contact.php<?= $lp ?>"      class="lt-footer-link" style="color:#94a3b8;text-decoration:none;font-size:.87rem;font-weight:400"><?= t('nav.contact') ?></a></li>
        </ul>
      </div>
      <div style="flex:1;min-width:160px">
        <h4 style="font-size:.78rem;font-weight:700;color:#fff;margin:0 0 22px 0;letter-spacing:.14em;text-transform:uppercase"><?= t('footer.services') ?></h4>
        <ul style="padding:0;margin:0;display:flex;flex-direction:column;gap:13px;list-style:none">
          <li><a href="services.php<?= $lp ?>" class="lt-footer-link" style="color:#94a3b8;text-decoration:none;font-size:.87rem;font-weight:400"><?= t('svc.t1') ?></a></li>
          <li><a href="services.php<?= $lp ?>" class="lt-footer-link" style="color:#94a3b8;text-decoration:none;font-size:.87rem;font-weight:400"><?= t('svc.t2') ?></a></li>
          <li><a href="services.php<?= $lp ?>" class="lt-footer-link" style="color:#94a3b8;text-decoration:none;font-size:.87rem;font-weight:400"><?= t('svc.t3') ?></a></li>
          <li><a href="services.php<?= $lp ?>" class="lt-footer-link" style="color:#94a3b8;text-decoration:none;font-size:.87rem;font-weight:400"><?= t('svc.t4') ?></a></li>
          <li><a href="services.php<?= $lp ?>" class="lt-footer-link" style="color:#94a3b8;text-decoration:none;font-size:.87rem;font-weight:400"><?= t('svc.t5') ?></a></li>
        </ul>
      </div>
      <div style="flex:1.4;min-width:200px">
        <h4 style="font-size:.78rem;font-weight:700;color:#fff;margin:0 0 22px 0;letter-spacing:.14em;text-transform:uppercase"><?= t('footer.offices') ?></h4>
        <div style="display:flex;flex-direction:column;gap:18px">
          <div>
            <div style="color:#fff;font-size:.86rem;font-weight:600;margin-bottom:4px"><?= t('contact.offices1') ?></div>
            <div style="color:#94a3b8;font-size:.82rem;font-weight:400;line-height:1.65"><?= t('footer.lebDesc') ?></div>
          </div>
          <div>
            <div style="color:#fff;font-size:.86rem;font-weight:600;margin-bottom:4px"><?= t('contact.offices2') ?></div>
            <div style="color:#94a3b8;font-size:.82rem;font-weight:400;line-height:1.65"><?= t('footer.cmrDesc') ?></div>
          </div>
        </div>
      </div>
    </div>
    <div style="border-top:1px solid rgba(255,255,255,.08);padding:26px 0;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:14px">
      <p style="color:#6b7280;font-size:.82rem;margin:0;font-weight:400">&copy; <?= date('Y') ?> <?= LT_BRAND ?> &mdash; <?= t('footer.copy') ?></p>
      <p style="color:#6b7280;font-size:.82rem;margin:0;font-weight:400"><?= t('footer.tag') ?></p>
    </div>
  </div>
</footer>

<!-- ============== FLOATING ACTIONS ============== -->
<a href="<?= wa_link() ?>" target="_blank" rel="noopener" class="lt-fab-wa" aria-label="Chat on WhatsApp">
  <svg class="ic ic-xl"><use href="#i-whatsapp"/></svg>
</a>
<a href="#" class="lt-fab-top" id="lt-fab-top" aria-label="Back to top" onclick="window.scrollTo({top:0,behavior:'smooth'});return false;">
  <svg class="ic ic-md"><use href="#i-arrow-up"/></svg>
</a>

</div><!-- /.leen-site -->

<?php include __DIR__ . '/_scripts.php'; ?>

</body>
</html>
