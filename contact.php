<?php
require __DIR__ . '/inc/_config.php';

$page = [
    'title' => 'Contact Leen Trade Co. | +961 71 231 843 | Saida, Lebanon',
    'desc'  => 'Contact Leen Trade Co. — phone +961 71 231 843, email info@leentrade.co. Headquarters in Saida, Lebanon and regional hub in Douala, Cameroon.',
    'kw'    => 'contact Leen Trade, packaging supplier Lebanon contact',
    'slug'  => '/contact',
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
      <a href="index.php<?= $lp ?>" style="color:#94a3b8;text-decoration:none" data-i18n="nav.home"><?= t('nav.home') ?></a> <span style="margin:0 8px;color:#c9a25f">/</span> <span style="color:#fff" data-i18n="page.contact.crumb"><?= t('page.contact.crumb') ?></span>
    </nav>
    <div class="lt-eyebrow" style="color:#c9a25f" data-i18n="page.contact.crumb"><?= t('page.contact.crumb') ?></div>
    <h1 style="font-size:2.6rem;font-weight:800;line-height:1.15;margin:0 0 18px 0;color:#fff;letter-spacing:-.02em;max-width:780px" data-i18n="page.contact.h1"><?= t('page.contact.h1') ?></h1>
    <p style="color:#cbd5e1;font-size:1.02rem;line-height:1.7;margin:0;max-width:680px;font-weight:400" data-i18n="page.contact.intro"><?= t('page.contact.intro') ?></p>
  </div>
</section>

<!-- ============== CONTACT INFO BOX ============== -->
<section id="contact-info" class="lt-section" style="background:#fff;padding:64px 40px">
  <div style="max-width:1200px;margin:0 auto">
    <div class="lt-contact-box lt-reveal">
      <a href="tel:+96171231843" class="lt-contact-card-v2">
        <div class="icon-wrap"><svg class="ic ic-lg"><use href="#i-phone"/></svg></div>
        <div class="label" data-i18n="contact.phoneLabel"><?= t('contact.phoneLabel') ?></div>
        <div class="value">+961 71 231 843</div>
        <div class="note" data-i18n="topbar.hours"><?= t('topbar.hours') ?></div>
      </a>
      <a href="https://wa.me/96171231843" target="_blank" rel="noopener" class="lt-contact-card-v2">
        <div class="icon-wrap" style="background:rgba(37,211,102,.12);color:#25D366"><svg class="ic ic-lg"><use href="#i-whatsapp"/></svg></div>
        <div class="label" data-i18n="contact.waLabel"><?= t('contact.waLabel') ?></div>
        <div class="value">+961 71 231 843</div>
        <div class="note" data-i18n="contact.waNote"><?= t('contact.waNote') ?></div>
      </a>
      <a href="mailto:info@leentrade.co" class="lt-contact-card-v2">
        <div class="icon-wrap"><svg class="ic ic-lg"><use href="#i-envelope"/></svg></div>
        <div class="label" data-i18n="contact.emailLabel"><?= t('contact.emailLabel') ?></div>
        <div class="value">info@leentrade.co</div>
        <div class="note" data-i18n="contact.emailNote"><?= t('contact.emailNote') ?></div>
      </a>
      <div class="lt-contact-card-v2" style="cursor:default">
        <div class="icon-wrap"><svg class="ic ic-lg"><use href="#i-pin"/></svg></div>
        <div class="label" data-i18n="contact.officeLabel"><?= t('contact.officeLabel') ?></div>
        <div class="value" data-i18n="contact.offices1"><?= t('contact.offices1') ?></div>
        <div class="value" data-i18n="contact.offices2"><?= t('contact.offices2') ?></div>
      </div>
    </div>
  </div>
</section>

<!-- ============== FORM + LOCATION ============== -->
<section id="form-location" class="lt-section" style="background:#f7f8fa;padding:80px 40px">
  <div style="max-width:1200px;margin:0 auto">
    <div class="lt-form-location-grid">

      <!-- LEFT: RFQ FORM -->
      <div id="rfq" class="lt-reveal">
        <form id="lt-rfq-form" style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;padding:32px 30px;box-shadow:var(--lt-shadow-sm)">
          <div style="background:linear-gradient(135deg, rgba(201,162,95,.08), rgba(201,162,95,.02));border-left:3px solid #c9a25f;padding:13px 16px;border-radius:4px;margin-bottom:22px;font-size:.84rem;line-height:1.6;color:#0a2540" data-i18n="rfq.helper">
            <strong>For faster pricing</strong>, include product size, quantity, material, delivery city, and whether you need plain or custom-printed packaging.
          </div>
          <div class="lt-form-grid">
            <div class="lt-field">
              <label for="rfq-name" data-i18n="rfq.f.name"><?= t('rfq.f.name') ?></label>
              <input type="text" id="rfq-name" name="name" required aria-required="true">
            </div>
            <div class="lt-field">
              <label for="rfq-company" data-i18n="rfq.f.company"><?= t('rfq.f.company') ?></label>
              <input type="text" id="rfq-company" name="company" required aria-required="true">
            </div>
            <div class="lt-field">
              <label for="rfq-email" data-i18n="rfq.f.email"><?= t('rfq.f.email') ?></label>
              <input type="email" id="rfq-email" name="email" required aria-required="true">
            </div>
            <div class="lt-field">
              <label for="rfq-phone" data-i18n="rfq.f.phone"><?= t('rfq.f.phone') ?></label>
              <input type="tel" id="rfq-phone" name="phone" required aria-required="true">
            </div>
            <div class="lt-field">
              <label for="rfq-country" data-i18n="rfq.f.country"><?= t('rfq.f.country') ?></label>
              <input type="text" id="rfq-country" name="country" required aria-required="true">
            </div>
            <div class="lt-field">
              <label for="rfq-category" data-i18n="rfq.f.category"><?= t('rfq.f.category') ?></label>
              <select id="rfq-category" name="category" required aria-required="true">
                <option value="" data-i18n="rfq.f.select"><?= t('rfq.f.select') ?></option>
                <option value="Food Packaging">Food Packaging</option>
                <option value="Disposable Products">Disposable Products</option>
                <option value="Jumbo Rolls">Jumbo Rolls</option>
                <option value="Industrial Materials">Industrial Materials</option>
                <option value="Export / Container Load">Export / Container Load</option>
                <option value="Mixed / Multiple">Mixed / Multiple</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="lt-field">
              <label for="rfq-quantity" data-i18n="rfq.f.qty"><?= t('rfq.f.qty') ?></label>
              <input type="text" id="rfq-quantity" name="quantity" placeholder="e.g. 5,000 units / 1 container">
            </div>
            <div class="lt-field">
              <label for="rfq-destination" data-i18n="rfq.f.dest"><?= t('rfq.f.dest') ?></label>
              <input type="text" id="rfq-destination" name="destination" placeholder="City, Country">
            </div>
            <div class="lt-field lt-field-full">
              <label for="rfq-notes" data-i18n="rfq.f.notes"><?= t('rfq.f.notes') ?></label>
              <textarea id="rfq-notes" name="notes" placeholder="Sizes, grammage, customisation, delivery timing, etc."></textarea>
            </div>
          </div>

          <div style="margin-top:24px">
            <button type="submit" class="lt-btn-gold" style="display:inline-flex;align-items:center;gap:10px;padding:15px 30px;border-radius:4px;font-weight:700;font-size:.94rem;border:0;cursor:pointer">
              <svg class="ic ic-sm"><use href="#i-envelope"/></svg> <span data-i18n="rfq.submit"><?= t('rfq.submit') ?></span> <svg class="ic ic-xs"><use href="#i-arrow-right"/></svg>
            </button>
            <div style="display:flex;justify-content:space-between;align-items:center;gap:18px;flex-wrap:wrap;margin-top:16px;padding-top:16px;border-top:1px solid var(--lt-line)">
              <div class="lt-form-note" data-i18n="rfq.note"><?= t('rfq.note') ?></div>
              <button type="button" id="lt-rfq-wa" style="background:transparent;border:0;cursor:pointer;font-family:inherit;display:inline-flex;align-items:center;gap:8px;color:#0a2540;font-size:.84rem;font-weight:600;text-decoration:none;padding:6px 0">
                <svg class="ic ic-md" style="color:#25D366"><use href="#i-whatsapp"/></svg>
                <span data-i18n="rfq.wa"><?= t('rfq.wa') ?></span>
                <svg class="ic ic-xs"><use href="#i-arrow-right"/></svg>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- RIGHT: LOCATION -->
      <div id="location" class="lt-reveal" data-delay="1">
        <div class="lt-location-card">
          <iframe class="lt-location-map" src="https://www.google.com/maps?q=Saida+Lebanon&output=embed&z=13" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Leen Trade — Saida, Lebanon office location"></iframe>
          <div class="lt-location-details">
            <div class="lt-location-office">
              <div class="flag-tile"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/60px-Flag_of_Lebanon.svg.png" alt="Lebanon flag"></div>
              <div>
                <div class="o-name" data-i18n="loc.lb.name"><?= t('loc.lb.name') ?></div>
                <div class="o-role" data-i18n="loc.lb.role"><?= t('loc.lb.role') ?></div>
                <div class="o-meta" data-i18n="loc.lb.meta">Mon–Fri · 08:00–18:00<br>Walk-in pickup available from our warehouse / store in Ghaziyeh or Saida.</div>
              </div>
            </div>
            <div class="lt-location-office">
              <div class="flag-tile"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Flag_of_Cameroon.svg/60px-Flag_of_Cameroon.svg.png" alt="Cameroon flag"></div>
              <div>
                <div class="o-name" data-i18n="loc.cm.name"><?= t('loc.cm.name') ?></div>
                <div class="o-role" data-i18n="loc.cm.role"><?= t('loc.cm.role') ?></div>
                <div class="o-meta" data-i18n="loc.cm.meta"><?= t('loc.cm.meta') ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/_footer.php'; ?>
