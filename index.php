<?php
require __DIR__ . '/inc/_config.php';

$page = [
    'title' => 'Leen Trade Co. | Wholesale Packaging Supplier in Lebanon',
    'desc'  => 'Leen Trade Co. supplies wholesale food packaging, disposable products, jumbo rolls, and industrial materials across Lebanon, Cameroon, and export markets. Request a B2B quote today.',
    'kw'    => 'wholesale food packaging supplier Lebanon, B2B distribution company Lebanon, import export company Lebanon Cameroon',
    'slug'  => '/',
];
$lp = $LANG === 'ar' ? '?lang=ar' : '';

require __DIR__ . '/inc/_head.php';
require __DIR__ . '/inc/_header.php';
?>

<!-- ============== HERO ============== -->
<section id="lt-hero" class="lt-hero-section" style="position:relative;min-height:560px;overflow:hidden;background:#0a2540;display:flex;align-items:center">
  <img src="Assets/hero-cargo-ship.png" alt="Leen Trade warehouse and B2B distribution team supplying wholesale food packaging and industrial materials in Lebanon and Cameroon" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:.5">
  <div style="position:absolute;inset:0;background:linear-gradient(90deg,rgba(10,37,64,.96) 0%,rgba(10,37,64,.85) 40%,rgba(10,37,64,.45) 75%,rgba(10,37,64,.2) 100%)"></div>

  <div style="position:relative;z-index:2;max-width:1200px;margin:0 auto;padding:90px 40px;width:100%">
    <div class="lt-hero-text" style="max-width:720px">
      <div class="lt-reveal is-visible" style="display:inline-flex;align-items:center;gap:10px;background:rgba(201,162,95,.12);color:#c9a25f;padding:8px 16px;border-radius:2px;font-size:.74rem;font-weight:600;margin-bottom:30px;border:1px solid rgba(201,162,95,.35);letter-spacing:.12em;text-transform:uppercase">
        <span style="width:6px;height:6px;border-radius:50%;background:#c9a25f;box-shadow:0 0 0 3px rgba(201,162,95,.25)"></span>
        <span data-i18n="hero.badge"><?= t('hero.badge') ?></span>
      </div>
      <h1 class="lt-hero-title lt-reveal is-visible" data-delay="1" style="font-size:3.4rem;font-weight:800;line-height:1.1;color:#fff;margin:0 0 22px 0;letter-spacing:-.025em">
        <span data-i18n="hero.title1"><?= t('hero.title1') ?></span>
      </h1>
      <p class="lt-reveal is-visible" data-delay="2" style="font-size:1.08rem;color:#cbd5e1;line-height:1.75;margin:0 0 36px 0;max-width:600px;font-weight:400">
        <span data-i18n="hero.lead"><?= t('hero.lead') ?></span>
      </p>
      <div class="lt-reveal is-visible" data-delay="3" style="display:flex;gap:14px;flex-wrap:wrap;align-items:center">
        <a href="request-quote.php<?= $lp ?>#rfq" class="lt-btn-gold" style="display:inline-flex;align-items:center;gap:10px;padding:16px 32px;border-radius:4px;font-weight:700;font-size:.96rem;text-decoration:none">
          <span data-i18n="hero.cta1"><?= t('hero.cta1') ?></span> <svg class="ic ic-sm"><use href="#i-arrow-right"/></svg>
        </a>
        <a href="products.php<?= $lp ?>" class="lt-btn-ghost" style="display:inline-flex;align-items:center;gap:10px;padding:16px 30px;border-radius:4px;font-weight:600;font-size:.94rem;text-decoration:none">
          <span data-i18n="hero.cta2"><?= t('hero.cta2') ?></span>
        </a>
      </div>

    </div>
  </div>

  <a href="#quick-about" class="lt-scroll-cue" aria-label="Scroll to content">
    <span data-i18n="hero.scroll"><?= t('hero.scroll') ?></span>
    <svg class="ic ic-md"><use href="#i-arrow-down"/></svg>
  </a>
</section>

<!-- ============== QUICK ABOUT ============== -->
<section id="quick-about" class="lt-section" style="background:#fff;padding:90px 40px">
  <div class="lt-qa-grid" style="max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1fr 1.1fr;gap:60px;align-items:center">
    <div class="lt-reveal">
      <img src="Assets/home-about.png" alt="Leen Trade — Lebanese & Cameroonian B2B wholesale and distribution company" style="width:100%;height:380px;object-fit:cover;border-radius:8px;display:block;box-shadow:0 18px 36px rgba(10,37,64,.14)">
    </div>
    <div class="lt-reveal" data-delay="1">
      <div class="lt-eyebrow" data-i18n="qabout.eyebrow"><?= t('qabout.eyebrow') ?></div>
      <h2 class="lt-section-title" style="font-size:2.1rem;font-weight:800;line-height:1.2;margin:0 0 20px 0" data-i18n="qabout.title"><?= t('qabout.title') ?></h2>
      <p style="font-size:1.04rem;line-height:1.75;color:#4b5563;font-weight:400;margin:0 0 24px 0" data-i18n="qabout.lead"><?= t('qabout.lead') ?></p>
      <a href="about.php<?= $lp ?>" style="display:inline-flex;align-items:center;gap:10px;color:#0a2540;font-weight:700;font-size:.9rem;text-decoration:none;border-bottom:2px solid #c9a25f;padding-bottom:3px" data-i18n="qabout.cta">Read our story <svg class="ic ic-sm" style="color:#c9a25f"><use href="#i-arrow-right"/></svg></a>
    </div>
  </div>
</section>

<!-- ============== TRUST NUMBERS ============== -->
<section id="trust" class="lt-section" style="background:linear-gradient(135deg,#0a2540 0%,#1a3554 100%);color:#fff;padding:64px 40px;position:relative;overflow:hidden">
  <div style="position:absolute;top:-100px;right:-100px;width:400px;height:400px;background:radial-gradient(circle,rgba(201,162,95,.12),transparent 70%);border-radius:50%;pointer-events:none"></div>
  <div style="max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(4,1fr);gap:36px;position:relative;z-index:1" class="lt-trust-grid">
    <div class="lt-reveal" data-delay="1" style="text-align:center">
      <div class="display" style="font-size:2.6rem;font-weight:800;line-height:1;color:#fff"><span class="lt-count" data-target="10">0</span><span style="color:#c9a25f">+</span></div>
      <div style="font-size:.78rem;color:#94a3b8;margin-top:8px;letter-spacing:.1em;text-transform:uppercase" data-i18n="trust.t1"><?= t('trust.t1') ?></div>
    </div>
    <div class="lt-reveal" data-delay="2" style="text-align:center">
      <div class="display" style="font-size:2.6rem;font-weight:800;line-height:1;color:#fff"><span class="lt-count" data-target="6">0</span></div>
      <div style="font-size:.78rem;color:#94a3b8;margin-top:8px;letter-spacing:.1em;text-transform:uppercase" data-i18n="trust.t2"><?= t('trust.t2') ?></div>
    </div>
    <div class="lt-reveal" data-delay="3" style="text-align:center">
      <div class="display" style="font-size:2.6rem;font-weight:800;line-height:1;color:#fff"><span class="lt-count" data-target="800" data-format="thousand">0</span><span style="color:#c9a25f">+</span></div>
      <div style="font-size:.78rem;color:#94a3b8;margin-top:8px;letter-spacing:.1em;text-transform:uppercase" data-i18n="trust.t3"><?= t('trust.t3') ?></div>
    </div>
    <div class="lt-reveal" data-delay="4" style="text-align:center">
      <div class="display" style="font-size:2.6rem;font-weight:800;line-height:1;color:#fff"><span class="lt-count" data-target="2400" data-format="thousand">0</span><span style="color:#c9a25f">+</span></div>
      <div style="font-size:.78rem;color:#94a3b8;margin-top:8px;letter-spacing:.1em;text-transform:uppercase" data-i18n="trust.t4"><?= t('trust.t4') ?></div>
    </div>
  </div>
</section>

<!-- ============== PRODUCT CATEGORIES ============== -->
<section id="products" class="lt-section" style="background:#f7f8fa;padding:96px 40px">
  <div class="lt-qa-grid" style="max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1.1fr 1fr;gap:60px;align-items:center">
    <div class="lt-reveal">
      <div class="lt-eyebrow" data-i18n="prod.eyebrow"><?= t('prod.eyebrow') ?></div>
      <h2 class="lt-section-title" style="font-size:2.1rem;font-weight:800;margin:0 0 18px 0;line-height:1.2" data-i18n="prod.title"><?= t('prod.title') ?></h2>
      <p style="color:#4b5563;font-size:1rem;line-height:1.7;margin:0 0 36px 0;font-weight:400" data-i18n="prod.lead"><?= t('prod.lead') ?></p>
      <ul style="list-style:none;padding:0;margin:0 0 48px 0;display:grid;grid-template-columns:1fr 1fr;gap:14px 24px">
        <li style="display:flex;align-items:center;gap:12px;font-size:.96rem;color:#0a2540;font-weight:600"><svg class="ic ic-md" style="color:#0a2540;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="prod.c1"><?= t('prod.c1') ?></span></li>
        <li style="display:flex;align-items:center;gap:12px;font-size:.96rem;color:#0a2540;font-weight:600"><svg class="ic ic-md" style="color:#0a2540;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="prod.c2"><?= t('prod.c2') ?></span></li>
        <li style="display:flex;align-items:center;gap:12px;font-size:.96rem;color:#0a2540;font-weight:600"><svg class="ic ic-md" style="color:#0a2540;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="prod.c3"><?= t('prod.c3') ?></span></li>
        <li style="display:flex;align-items:center;gap:12px;font-size:.96rem;color:#0a2540;font-weight:600"><svg class="ic ic-md" style="color:#0a2540;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="prod.c4"><?= t('prod.c4') ?></span></li>
      </ul>
      <a href="products.php<?= $lp ?>" style="display:inline-flex;align-items:center;gap:10px;color:#0a2540;font-weight:700;font-size:.9rem;text-decoration:none;border-bottom:2px solid #c9a25f;padding-bottom:3px" data-i18n="prod.explore">Explore Products <svg class="ic ic-sm" style="color:#c9a25f"><use href="#i-arrow-right"/></svg></a>
    </div>
    <div class="lt-reveal" data-delay="1">
      <img src="Assets/home-product-categories.png" alt="Leen Trade product categories — food packaging, disposables, jumbo rolls, industrial materials" style="width:100%;height:420px;object-fit:cover;border-radius:8px;display:block;box-shadow:0 18px 36px rgba(10,37,64,.14)">
    </div>
  </div>
</section>

<!-- ============== SERVICES ============== -->
<section id="services" class="lt-section" style="background:#fff;padding:96px 40px">
  <div style="max-width:1200px;margin:0 auto">
    <div class="lt-reveal" style="text-align:center;margin-bottom:46px">
      <div class="lt-eyebrow is-center" data-i18n="svc.eyebrow"><?= t('svc.eyebrow') ?></div>
      <h2 class="lt-section-title" style="font-size:2.2rem;font-weight:800;margin:0;line-height:1.2" data-i18n="svc.title"><?= t('svc.title') ?></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:18px">
      <div class="lt-svc-card lt-reveal" data-delay="1" style="background:#fff;border:1px solid #e5e7eb;border-radius:8px;padding:30px 26px;border-top:3px solid #c9a25f">
        <svg class="ic ic-2xl" style="color:#c9a25f;margin-bottom:14px"><use href="#i-globe"/></svg>
        <h3 style="font-size:1.05rem;font-weight:700;margin:0 0 8px 0;color:#0a2540" data-i18n="svc.s1.t"><?= t('svc.s1.t') ?></h3>
        <p style="font-size:.86rem;color:#4b5563;line-height:1.65;margin:0;font-weight:400" data-i18n="svc.s1.d"><?= t('svc.s1.d') ?></p>
      </div>
      <div class="lt-svc-card lt-reveal" data-delay="2" style="background:#fff;border:1px solid #e5e7eb;border-radius:8px;padding:30px 26px;border-top:3px solid #c9a25f">
        <svg class="ic ic-2xl" style="color:#c9a25f;margin-bottom:14px"><use href="#i-boxes"/></svg>
        <h3 style="font-size:1.05rem;font-weight:700;margin:0 0 8px 0;color:#0a2540" data-i18n="svc.s2.t"><?= t('svc.s2.t') ?></h3>
        <p style="font-size:.86rem;color:#4b5563;line-height:1.65;margin:0;font-weight:400" data-i18n="svc.s2.d"><?= t('svc.s2.d') ?></p>
      </div>
      <div class="lt-svc-card lt-reveal" data-delay="3" style="background:#fff;border:1px solid #e5e7eb;border-radius:8px;padding:30px 26px;border-top:3px solid #c9a25f">
        <svg class="ic ic-2xl" style="color:#c9a25f;margin-bottom:14px"><use href="#i-ship"/></svg>
        <h3 style="font-size:1.05rem;font-weight:700;margin:0 0 8px 0;color:#0a2540" data-i18n="svc.s3.t"><?= t('svc.s3.t') ?></h3>
        <p style="font-size:.86rem;color:#4b5563;line-height:1.65;margin:0;font-weight:400" data-i18n="svc.s3.d"><?= t('svc.s3.d') ?></p>
      </div>
      <div class="lt-svc-card lt-reveal" data-delay="4" style="background:#fff;border:1px solid #e5e7eb;border-radius:8px;padding:30px 26px;border-top:3px solid #c9a25f">
        <svg class="ic ic-2xl" style="color:#c9a25f;margin-bottom:14px"><use href="#i-warehouse"/></svg>
        <h3 style="font-size:1.05rem;font-weight:700;margin:0 0 8px 0;color:#0a2540" data-i18n="svc.s4.t"><?= t('svc.s4.t') ?></h3>
        <p style="font-size:.86rem;color:#4b5563;line-height:1.65;margin:0;font-weight:400" data-i18n="svc.s4.d"><?= t('svc.s4.d') ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ============== MARKETS ============== -->
<section id="markets" class="lt-section" style="background:#f7f8fa;padding:96px 40px">
  <div style="max-width:1200px;margin:0 auto">
    <div class="lt-reveal" style="text-align:center;margin-bottom:42px">
      <div class="lt-eyebrow is-center" data-i18n="mkt.eyebrow"><?= t('mkt.eyebrow') ?></div>
      <h2 class="lt-section-title" style="font-size:2.2rem;font-weight:800;margin:0;line-height:1.2" data-i18n="mkt.title"><?= t('mkt.title') ?></h2>
    </div>
    <a href="markets.php<?= $lp ?>" class="lt-reveal" style="display:block;max-width:1200px;margin:0 auto;text-decoration:none">
      <img src="Assets/where-we-operate-map.png" alt="Map showing Leen Trade markets across Lebanon, Cameroon, Egypt, Jordan, Saudi Arabia, and Ukraine" style="width:100%;height:auto;display:block;border-radius:10px">
    </a>
  </div>
</section>

<!-- ============== WHY BUYERS CHOOSE US ============== -->
<section id="why" class="lt-section" style="background:#fff;padding:96px 40px">
  <div style="max-width:1200px;margin:0 auto">
    <div class="lt-reveal" style="text-align:center;margin-bottom:46px">
      <div class="lt-eyebrow is-center" data-i18n="why.eyebrow"><?= t('why.eyebrow') ?></div>
      <h2 class="lt-section-title" style="font-size:2.2rem;font-weight:800;margin:0;line-height:1.2" data-i18n="why.title"><?= t('why.title') ?></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:22px">
      <div class="lt-reveal" data-delay="1" style="background:#fafbfc;border:1px solid #e5e7eb;border-radius:8px;padding:34px 28px;border-left:3px solid #c9a25f">
        <div style="font-size:1.6rem;font-weight:800;color:#c9a25f;font-family:'Manrope',sans-serif;margin-bottom:10px">01</div>
        <h3 style="font-size:1.1rem;font-weight:700;margin:0 0 10px 0;color:#0a2540" data-i18n="why.r1.t"><?= t('why.r1.t') ?></h3>
        <p style="font-size:.92rem;color:#4b5563;line-height:1.7;margin:0;font-weight:400" data-i18n="why.r1.d"><?= t('why.r1.d') ?></p>
      </div>
      <div class="lt-reveal" data-delay="2" style="background:#fafbfc;border:1px solid #e5e7eb;border-radius:8px;padding:34px 28px;border-left:3px solid #c9a25f">
        <div style="font-size:1.6rem;font-weight:800;color:#c9a25f;font-family:'Manrope',sans-serif;margin-bottom:10px">02</div>
        <h3 style="font-size:1.1rem;font-weight:700;margin:0 0 10px 0;color:#0a2540" data-i18n="why.r2.t"><?= t('why.r2.t') ?></h3>
        <p style="font-size:.92rem;color:#4b5563;line-height:1.7;margin:0;font-weight:400" data-i18n="why.r2.d"><?= t('why.r2.d') ?></p>
      </div>
      <div class="lt-reveal" data-delay="3" style="background:#fafbfc;border:1px solid #e5e7eb;border-radius:8px;padding:34px 28px;border-left:3px solid #c9a25f">
        <div style="font-size:1.6rem;font-weight:800;color:#c9a25f;font-family:'Manrope',sans-serif;margin-bottom:10px">03</div>
        <h3 style="font-size:1.1rem;font-weight:700;margin:0 0 10px 0;color:#0a2540" data-i18n="why.r3.t"><?= t('why.r3.t') ?></h3>
        <p style="font-size:.92rem;color:#4b5563;line-height:1.7;margin:0;font-weight:400" data-i18n="why.r3.d"><?= t('why.r3.d') ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ============== FINAL CTA ============== -->
<section id="cta" class="lt-section" style="background:#0a2540;padding:96px 40px;position:relative;overflow:hidden">
  <video autoplay muted loop playsinline preload="auto" poster="Assets/about-company.jpeg" aria-hidden="true" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;z-index:0">
    <source src="Assets/contact-background.mp4" type="video/mp4">
  </video>
  <div style="position:absolute;inset:0;background:linear-gradient(135deg,rgba(10,37,64,.94) 0%,rgba(10,37,64,.88) 50%,rgba(26,53,84,.82) 100%);z-index:1"></div>
  <div style="position:absolute;top:-150px;right:-150px;width:500px;height:500px;background:radial-gradient(circle,rgba(201,162,95,.14),transparent 70%);border-radius:50%;z-index:2"></div>

  <div class="lt-reveal" style="max-width:780px;margin:0 auto;text-align:center;position:relative;z-index:3">
    <div class="lt-eyebrow is-center" style="color:#c9a25f" data-i18n="cta.eyebrow"><?= t('cta.eyebrow') ?></div>
    <h2 class="lt-section-title" style="font-size:2.4rem;font-weight:800;color:#fff;margin:0 0 18px 0;line-height:1.2;letter-spacing:-.02em" data-i18n="cta.title"><?= t('cta.title') ?></h2>
    <p style="color:#cbd5e1;font-size:1rem;margin:0 auto 34px;line-height:1.7;max-width:560px;font-weight:400" data-i18n="cta.lead"><?= t('cta.lead') ?></p>
    <div style="display:flex;justify-content:center;gap:14px;flex-wrap:wrap">
      <a href="request-quote.php<?= $lp ?>#rfq" class="lt-btn-gold" style="display:inline-flex;align-items:center;gap:10px;padding:16px 32px;border-radius:4px;font-weight:700;font-size:.96rem;text-decoration:none">
        <svg class="ic ic-sm"><use href="#i-envelope"/></svg> <span data-i18n="cta.btn1"><?= t('cta.btn1') ?></span> <svg class="ic ic-sm"><use href="#i-arrow-right"/></svg>
      </a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/_footer.php'; ?>
