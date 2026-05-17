<?php
require __DIR__ . '/inc/_config.php';

$page = [
    'title' => 'About Leen Trade Co. | Lebanese & Cameroonian B2B Distribution',
    'desc'  => 'Leen Trade Co. is a Lebanese and Cameroonian B2B import, export, wholesale, and distribution company. Founded in 2014 in Saida, with a regional hub in Douala.',
    'kw'    => 'Leen Trade about, Lebanese B2B distribution, Cameroon import export, Saida Lebanon wholesale supplier',
    'slug'  => '/about',
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
      <a href="index.php<?= $lp ?>" style="color:#94a3b8;text-decoration:none" data-i18n="nav.home"><?= t('nav.home') ?></a> <span style="margin:0 8px;color:#c9a25f">/</span> <span style="color:#fff" data-i18n="page.about.crumb"><?= t('page.about.crumb') ?></span>
    </nav>
    <div class="lt-eyebrow" style="color:#c9a25f" data-i18n="page.about.crumb"><?= t('page.about.crumb') ?></div>
    <h1 style="font-size:2.6rem;font-weight:800;line-height:1.15;margin:0 0 18px 0;color:#fff;letter-spacing:-.02em;max-width:780px" data-i18n="page.about.h1"><?= t('page.about.h1') ?></h1>
    <p style="color:#cbd5e1;font-size:1.02rem;line-height:1.7;margin:0;max-width:680px;font-weight:400" data-i18n="page.about.intro"><?= t('page.about.intro') ?></p>
  </div>
</section>

<!-- ============== OUR STORY ============== -->
<section id="story" class="lt-section" style="background:#fff;padding:96px 40px">
  <div class="lt-reveal" style="max-width:780px;margin:0 auto;text-align:center">
    <div class="lt-eyebrow is-center" data-i18n="story.eyebrow"><?= t('story.eyebrow') ?></div>
    <h2 class="lt-section-title" style="font-size:2.2rem;font-weight:800;line-height:1.2;margin:0 0 24px 0" data-i18n="story.title"><?= t('story.title') ?></h2>
    <p style="color:#4b5563;line-height:1.85;margin:0 0 16px 0;font-size:1rem;font-weight:400" data-i18n="story.p1"><?= t('story.p1') ?></p>
    <p style="color:#4b5563;line-height:1.85;margin:0 0 16px 0;font-size:1rem;font-weight:400" data-i18n="story.p2"><?= t('story.p2') ?></p>
    <p style="color:#4b5563;line-height:1.85;margin:0;font-size:1rem;font-weight:400" data-i18n="story.p3"><?= t('story.p3') ?></p>
  </div>
</section>

<!-- ============== MISSION ============== -->
<section id="mission" class="lt-section" style="background:#f7f8fa;padding:96px 40px">
  <div class="lt-mv-grid" style="max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1fr 1.2fr;gap:60px;align-items:center">
    <div class="lt-reveal">
      <img src="Assets/about/mission.png" alt="Leen Trade mission — supplying B2B packaging and industrial materials" style="width:100%;height:380px;object-fit:cover;border-radius:8px;display:block;box-shadow:0 18px 36px rgba(10,37,64,.14)">
    </div>
    <div class="lt-reveal" data-delay="1">
      <div class="lt-eyebrow" data-i18n="mission.eyebrow"><?= t('mission.eyebrow') ?></div>
      <h2 class="lt-section-title" style="font-size:2.1rem;font-weight:800;line-height:1.2;margin:0 0 20px 0" data-i18n="mission.title"><?= t('mission.title') ?></h2>
      <p style="color:#0a2540;line-height:1.85;font-size:1.04rem;font-weight:500;margin:0;font-family:'Manrope',sans-serif" data-i18n="mission.lead"><?= t('mission.lead') ?></p>
    </div>
  </div>
</section>

<!-- ============== VISION ============== -->
<section id="vision" class="lt-section" style="background:#fff;padding:96px 40px;position:relative;overflow:hidden">
  <div style="position:absolute;top:-200px;right:-200px;width:500px;height:500px;background:radial-gradient(circle,rgba(201,162,95,.08),transparent 70%);border-radius:50%;pointer-events:none"></div>
  <div class="lt-mv-grid lt-mv-flip" style="max-width:1200px;margin:0 auto;display:grid;grid-template-columns:1.2fr 1fr;gap:60px;align-items:center;position:relative;z-index:1">
    <div class="lt-reveal">
      <div class="lt-eyebrow" data-i18n="vision.eyebrow"><?= t('vision.eyebrow') ?></div>
      <h2 class="lt-section-title" style="font-size:2.1rem;font-weight:800;line-height:1.2;margin:0 0 20px 0" data-i18n="vision.title"><?= t('vision.title') ?></h2>
      <p style="color:#0a2540;line-height:1.85;font-size:1.04rem;font-weight:500;margin:0;font-family:'Manrope',sans-serif" data-i18n="vision.lead"><?= t('vision.lead') ?></p>
    </div>
    <div class="lt-reveal" data-delay="1">
      <img src="Assets/about/vision.png" alt="Leen Trade vision — bridging the Mediterranean and Africa via global trade" style="width:100%;height:380px;object-fit:cover;border-radius:8px;display:block;box-shadow:0 18px 36px rgba(10,37,64,.14)">
    </div>
  </div>
</section>

<!-- ============== VALUES ============== -->
<section id="values" class="lt-section" style="background:#f7f8fa;padding:96px 40px">
  <div style="max-width:1200px;margin:0 auto">
    <div class="lt-reveal" style="text-align:center;margin-bottom:46px">
      <div class="lt-eyebrow is-center" data-i18n="values.eyebrow"><?= t('values.eyebrow') ?></div>
      <h2 class="lt-section-title" style="font-size:2.1rem;font-weight:800;margin:0;line-height:1.2" data-i18n="values.title"><?= t('values.title') ?></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(230px,1fr));gap:20px">
      <div class="lt-reveal" data-delay="1" style="background:#fff;border:1px solid #e5e7eb;border-radius:8px;padding:32px 28px;border-top:3px solid #c9a25f">
        <svg class="ic ic-2xl" style="color:#c9a25f;margin-bottom:14px"><use href="#i-shield"/></svg>
        <h3 style="font-size:1.05rem;font-weight:700;margin:0 0 10px 0;color:#0a2540" data-i18n="values.v1.t"><?= t('values.v1.t') ?></h3>
        <p style="font-size:.88rem;color:#4b5563;line-height:1.7;margin:0;font-weight:400" data-i18n="values.v1.d"><?= t('values.v1.d') ?></p>
      </div>
      <div class="lt-reveal" data-delay="2" style="background:#fff;border:1px solid #e5e7eb;border-radius:8px;padding:32px 28px;border-top:3px solid #c9a25f">
        <svg class="ic ic-2xl" style="color:#c9a25f;margin-bottom:14px"><use href="#i-check"/></svg>
        <h3 style="font-size:1.05rem;font-weight:700;margin:0 0 10px 0;color:#0a2540" data-i18n="values.v2.t"><?= t('values.v2.t') ?></h3>
        <p style="font-size:.88rem;color:#4b5563;line-height:1.7;margin:0;font-weight:400" data-i18n="values.v2.d"><?= t('values.v2.d') ?></p>
      </div>
      <div class="lt-reveal" data-delay="3" style="background:#fff;border:1px solid #e5e7eb;border-radius:8px;padding:32px 28px;border-top:3px solid #c9a25f">
        <svg class="ic ic-2xl" style="color:#c9a25f;margin-bottom:14px"><use href="#i-trend"/></svg>
        <h3 style="font-size:1.05rem;font-weight:700;margin:0 0 10px 0;color:#0a2540" data-i18n="values.v3.t"><?= t('values.v3.t') ?></h3>
        <p style="font-size:.88rem;color:#4b5563;line-height:1.7;margin:0;font-weight:400" data-i18n="values.v3.d"><?= t('values.v3.d') ?></p>
      </div>
      <div class="lt-reveal" data-delay="4" style="background:#fff;border:1px solid #e5e7eb;border-radius:8px;padding:32px 28px;border-top:3px solid #c9a25f">
        <svg class="ic ic-2xl" style="color:#c9a25f;margin-bottom:14px"><use href="#i-handshake"/></svg>
        <h3 style="font-size:1.05rem;font-weight:700;margin:0 0 10px 0;color:#0a2540" data-i18n="values.v4.t"><?= t('values.v4.t') ?></h3>
        <p style="font-size:.88rem;color:#4b5563;line-height:1.7;margin:0;font-weight:400" data-i18n="values.v4.d"><?= t('values.v4.d') ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ============== FINAL CTA ============== -->
<section id="cta" class="lt-section" style="background:#0a2540;padding:84px 40px;position:relative;overflow:hidden">
  <div style="position:absolute;top:-150px;right:-150px;width:500px;height:500px;background:radial-gradient(circle,rgba(201,162,95,.14),transparent 70%);border-radius:50%;z-index:0"></div>
  <div style="position:absolute;bottom:-200px;left:-200px;width:500px;height:500px;background:radial-gradient(circle,rgba(201,162,95,.08),transparent 70%);border-radius:50%;z-index:0"></div>
  <div class="lt-reveal" style="max-width:780px;margin:0 auto;text-align:center;position:relative;z-index:1">
    <h2 class="lt-section-title" style="font-size:2rem;font-weight:800;color:#fff;margin:0 0 26px 0;line-height:1.25;letter-spacing:-.02em" data-i18n="about.cta.title"><?= t('about.cta.title') ?></h2>
    <a href="request-quote.php<?= $lp ?>#rfq" class="lt-btn-gold" style="display:inline-flex;align-items:center;gap:10px;padding:16px 34px;border-radius:4px;font-weight:700;font-size:.96rem;text-decoration:none">
      <svg class="ic ic-sm"><use href="#i-envelope"/></svg> <span data-i18n="about.cta.btn"><?= t('about.cta.btn') ?></span> <svg class="ic ic-sm"><use href="#i-arrow-right"/></svg>
    </a>
  </div>
</section>

<?php require __DIR__ . '/inc/_footer.php'; ?>
