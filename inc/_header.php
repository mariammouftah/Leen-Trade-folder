<?php
/**
 * Top utility bar + sticky nav + mobile menu (with close button + lang toggle).
 * The current page is auto-highlighted in the nav via current_page().
 */
$_cur = current_page(); // 'home', 'about', 'services', etc.
function nav_class(string $page): string {
    global $_cur;
    return $page === $_cur ? 'lt-nav-link is-active' : 'lt-nav-link';
}
function nav_style(string $page): string {
    global $_cur;
    $is_active = $page === $_cur;
    $color  = $is_active ? '#0a2540' : '#4b5563';
    $weight = $is_active ? '600' : '500';
    return "text-decoration:none;color:$color;font-weight:$weight;font-size:.92rem";
}
?>

<!-- ============== TOP UTILITY BAR ============== -->
<div class="lt-topbar" style="background:#0a2540;color:#cbd5e1;font-size:.78rem;padding:9px 40px;border-bottom:1px solid rgba(255,255,255,.08)">
  <div class="lt-topbar-inner" style="max-width:1200px;margin:0 auto;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px">
    <div style="display:flex;gap:24px;align-items:center;flex-wrap:wrap">
      <a href="tel:<?= LT_PHONE_DIAL ?>" style="color:inherit;text-decoration:none;display:inline-flex;align-items:center;gap:8px"><svg class="ic ic-sm" style="color:#c9a25f"><use href="#i-phone"/></svg> <?= LT_PHONE ?></a>
      <a href="mailto:<?= LT_EMAIL ?>" style="color:inherit;text-decoration:none;display:inline-flex;align-items:center;gap:8px"><svg class="ic ic-sm" style="color:#c9a25f"><use href="#i-envelope"/></svg> <?= LT_EMAIL ?></a>
      <span class="lt-topbar-meta" style="display:inline-flex;align-items:center;gap:8px"><svg class="ic ic-sm" style="color:#c9a25f"><use href="#i-pin"/></svg> <?= t('topbar.cities') ?></span>
    </div>
    <div style="display:flex;gap:14px;align-items:center">
      <span class="lt-topbar-meta" style="font-size:.72rem;letter-spacing:.05em;display:inline-flex;align-items:center;gap:6px"><svg class="ic ic-xs" style="color:#c9a25f"><use href="#i-clock"/></svg><?= t('topbar.hours') ?></span>
      <span class="lt-topbar-meta" style="opacity:.4">|</span>
      <div class="lt-lang" role="group" aria-label="Language">
        <a href="<?= htmlspecialchars(lang_url('en')) ?>"><button type="button" data-lang="en" class="<?= $LANG === 'en' ? 'is-active' : '' ?>">EN</button></a>
        <a href="<?= htmlspecialchars(lang_url('ar')) ?>"><button type="button" data-lang="ar" class="<?= $LANG === 'ar' ? 'is-active' : '' ?>">عربي</button></a>
      </div>
    </div>
  </div>
</div>

<!-- ============== NAVIGATION ============== -->
<input type="checkbox" id="lt-mobile-toggle" class="lt-mobile-toggle" aria-label="Toggle navigation">
<div class="lt-nav" id="lt-nav" style="border-bottom:1px solid #e5e7eb;position:sticky;top:0;z-index:1000">
  <div class="lt-nav-inner" style="max-width:1200px;margin:0 auto;padding:0 40px;height:82px;display:flex;align-items:center;justify-content:space-between;transition:height .3s ease">
    <a href="index.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>" style="text-decoration:none;display:flex;align-items:center" aria-label="<?= LT_BRAND ?> home">
      <img class="lt-nav-logo" src="<?= LT_LOGO_DARK ?>" alt="<?= LT_BRAND ?>" style="height:44px;width:auto;transition:height .3s ease">
    </a>
    <ul class="lt-nav-desktop" style="display:flex;gap:2.2rem;padding:0;margin:0;list-style:none">
      <li><a href="index.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>"        class="<?= nav_class('home') ?>"     data-target="home"     style="<?= nav_style('home') ?>"><?= t('nav.home') ?></a></li>
      <li><a href="about.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>"        class="<?= nav_class('about') ?>"    data-target="about"    style="<?= nav_style('about') ?>"><?= t('nav.about') ?></a></li>
      <li><a href="services.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>"     class="<?= nav_class('services') ?>" data-target="services" style="<?= nav_style('services') ?>"><?= t('nav.services') ?></a></li>
      <li><a href="products.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>"     class="<?= nav_class('products') ?>" data-target="products" style="<?= nav_style('products') ?>"><?= t('nav.products') ?></a></li>
      <li><a href="markets.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>"      class="<?= nav_class('markets') ?>"  data-target="markets"  style="<?= nav_style('markets') ?>"><?= t('nav.markets') ?></a></li>
      <li><a href="contact.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>"      class="<?= nav_class('contact') ?>"  data-target="contact"  style="<?= nav_style('contact') ?>"><?= t('nav.contact') ?></a></li>
    </ul>
    <a href="request-quote.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>#rfq" class="lt-btn-gold lt-nav-cta-desktop" style="padding:12px 24px;border-radius:4px;font-weight:600;font-size:.86rem;text-decoration:none;display:inline-flex;align-items:center;gap:8px">
      <svg class="ic ic-sm"><use href="#i-envelope"/></svg> <?= t('cta.rfq') ?> <svg class="ic ic-xs"><use href="#i-arrow-right"/></svg>
    </a>
    <label for="lt-mobile-toggle" class="lt-burger" aria-label="Open menu" tabindex="0">
      <svg class="ic ic-xl ic-menu"><use href="#i-menu"/></svg>
      <svg class="ic ic-xl ic-close"><use href="#i-close"/></svg>
    </label>
  </div>
</div>

<!-- Mobile menu -->
<div class="lt-mobile-menu" id="lt-mobile-menu">
  <label for="lt-mobile-toggle" class="lt-mobile-close" aria-label="Close menu" tabindex="0">
    <svg class="ic ic-xl"><use href="#i-close"/></svg>
  </label>
  <ul>
    <li><a href="index.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>"><?= t('nav.home') ?></a></li>
    <li><a href="about.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>"><?= t('nav.about') ?></a></li>
    <li><a href="services.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>"><?= t('nav.services') ?></a></li>
    <li><a href="products.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>"><?= t('nav.products') ?></a></li>
    <li><a href="markets.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>"><?= t('nav.markets') ?></a></li>
    <li><a href="contact.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>"><?= t('nav.contact') ?></a></li>
  </ul>
  <a href="request-quote.php<?= $LANG === 'ar' ? '?lang=ar' : '' ?>#rfq" class="lt-btn-gold" style="display:inline-flex;align-items:center;gap:10px;padding:14px 28px;border-radius:4px;font-weight:600;font-size:.92rem;text-decoration:none">
    <svg class="ic ic-sm"><use href="#i-envelope"/></svg> <?= t('cta.rfq') ?>
  </a>
  <div class="lt-mobile-meta">
    <a href="tel:<?= LT_PHONE_DIAL ?>" style="display:inline-flex;align-items:center;gap:10px"><svg class="ic ic-md" style="color:#c9a25f"><use href="#i-phone"/></svg><?= LT_PHONE ?></a>
    <a href="mailto:<?= LT_EMAIL ?>" style="display:inline-flex;align-items:center;gap:10px"><svg class="ic ic-md" style="color:#c9a25f"><use href="#i-envelope"/></svg><?= LT_EMAIL ?></a>
    <div style="display:inline-flex;align-items:center;gap:10px"><svg class="ic ic-md" style="color:#c9a25f"><use href="#i-pin"/></svg><?= t('topbar.cities') ?></div>
  </div>
  <div class="lt-mobile-lang">
    <div class="lt-lang" role="group" aria-label="Language">
      <a href="<?= htmlspecialchars(lang_url('en')) ?>"><button type="button" data-lang="en" class="<?= $LANG === 'en' ? 'is-active' : '' ?>">EN</button></a>
      <a href="<?= htmlspecialchars(lang_url('ar')) ?>"><button type="button" data-lang="ar" class="<?= $LANG === 'ar' ? 'is-active' : '' ?>">عربي</button></a>
    </div>
  </div>
</div>
