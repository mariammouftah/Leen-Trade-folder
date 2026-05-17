<?php
require __DIR__ . '/inc/_config.php';

$page = [
    'title' => 'Lebanon & Cameroon Trade Operations | Leen Trade Markets',
    'desc'  => 'Lebanon & Cameroon import, export and distribution operations. Sourcing corridors from Egypt, Jordan, Saudi Arabia, and Ukraine.',
    'kw'    => 'Lebanon Cameroon trade, import export company Lebanon Cameroon, regional trade corridors Levant',
    'slug'  => '/markets',
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
      <a href="index.php<?= $lp ?>" style="color:#94a3b8;text-decoration:none" data-i18n="nav.home"><?= t('nav.home') ?></a> <span style="margin:0 8px;color:#c9a25f">/</span> <span style="color:#fff" data-i18n="page.markets.crumb"><?= t('page.markets.crumb') ?></span>
    </nav>
    <div class="lt-eyebrow" style="color:#c9a25f" data-i18n="page.markets.crumb"><?= t('page.markets.crumb') ?></div>
    <h1 style="font-size:2.6rem;font-weight:800;line-height:1.15;margin:0 0 18px 0;color:#fff;letter-spacing:-.02em;max-width:780px" data-i18n="page.markets.h1"><?= t('page.markets.h1') ?></h1>
    <p style="color:#cbd5e1;font-size:1.02rem;line-height:1.7;margin:0;max-width:680px;font-weight:400" data-i18n="page.markets.intro"><?= t('page.markets.intro') ?></p>
  </div>
</section>

<!-- ============== FEATURED HUBS ============== -->
<section id="featured-hubs" class="lt-section" style="background:#f7f8fa;padding:80px 40px">
  <div style="max-width:1200px;margin:0 auto">
    <div class="lt-reveal" style="margin-bottom:30px">
      <div class="lt-eyebrow" data-i18n="mkt.featured.eyebrow"><?= t('mkt.featured.eyebrow') ?></div>
      <h2 class="lt-section-title" style="font-size:1.9rem;font-weight:800;margin:0;line-height:1.2" data-i18n="mkt.featured.title"><?= t('mkt.featured.title') ?></h2>
    </div>
  <div class="lt-mkt-row lt-reveal lt-mkt-featured" data-mkt="lb">
    <div class="lt-mkt-img" style="background: linear-gradient(135deg, #1a3554 0%, #0a2540 100%);">
      <img src="Assets/market/Lebanon.png" alt="Leen Trade warehouse and distribution operation in Saida, Lebanon" loading="lazy" onerror="this.style.display='none'">
      <div class="lt-mkt-flag">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/60px-Flag_of_Lebanon.svg.png" alt="Lebanon flag">
      </div>
    </div>
    <div class="lt-mkt-body">
      <div style="display:flex;align-items:center;gap:14px;flex-wrap:wrap;margin-bottom:10px">
        <h3 style="font-size:2rem;font-weight:800;margin:0;color:var(--lt-navy);font-family:'Manrope',sans-serif;line-height:1.1">Lebanon</h3>
        <span style="background:var(--lt-gold);color:var(--lt-navy);font-size:.66rem;font-weight:800;letter-spacing:.14em;padding:5px 10px;border-radius:2px;text-transform:uppercase">Headquarters</span>
      </div>
      <p style="color:#4b5563;line-height:1.75;font-size:.96rem;margin:0 0 16px 0;font-weight:400">Our founding market and operational base. From Saida, we coordinate procurement, warehousing, delivery, and B2B distribution across Lebanon and nearby Levantine markets.</p>
      <ul style="list-style:none;padding:0;margin:0 0 18px 0">
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.lb.b1"><?= t('mkt.lb.b1') ?></span></li>
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.lb.b2"><?= t('mkt.lb.b2') ?></span></li>
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.lb.b3"><?= t('mkt.lb.b3') ?></span></li>
      </ul>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:14px;padding-top:16px;border-top:1px solid var(--lt-line)" class="lt-mkt-facts">
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.lb.f1l"><?= t('mkt.lb.f1l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.lb.f1v"><?= t('mkt.lb.f1v') ?></div></div>
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.lb.f2l"><?= t('mkt.lb.f2l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.lb.f2v"><?= t('mkt.lb.f2v') ?></div></div>
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.lb.f3l"><?= t('mkt.lb.f3l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.lb.f3v"><?= t('mkt.lb.f3v') ?></div></div>
      </div>
    </div>
  </div>

  <div class="lt-mkt-row lt-reveal lt-mkt-featured" data-mkt="cm">
    <div class="lt-mkt-img" style="background: linear-gradient(135deg, #0a2540 0%, #1a3554 100%);">
      <img src="Assets/market/Cameroon.png" alt="Leen Trade regional hub in Douala, Cameroon, supporting Central & West African distribution" loading="lazy" onerror="this.style.display='none'">
      <div class="lt-mkt-flag">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Flag_of_Cameroon.svg/60px-Flag_of_Cameroon.svg.png" alt="Cameroon flag">
      </div>
    </div>
    <div class="lt-mkt-body">
      <div style="display:flex;align-items:center;gap:14px;flex-wrap:wrap;margin-bottom:10px">
        <h3 style="font-size:2rem;font-weight:800;margin:0;color:var(--lt-navy);font-family:'Manrope',sans-serif;line-height:1.1">Cameroon</h3>
        <span style="background:var(--lt-gold);color:var(--lt-navy);font-size:.66rem;font-weight:800;letter-spacing:.14em;padding:5px 10px;border-radius:2px;text-transform:uppercase">Regional Hub</span>
      </div>
      <p style="color:#4b5563;line-height:1.75;font-size:.96rem;margin:0 0 16px 0;font-weight:400">Our regional hub in Douala supports distribution into Central and West African business corridors, bridging Mediterranean sourcing with growing African B2B demand.</p>
      <ul style="list-style:none;padding:0;margin:0 0 18px 0">
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.cm.b1"><?= t('mkt.cm.b1') ?></span></li>
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.cm.b2"><?= t('mkt.cm.b2') ?></span></li>
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.cm.b3"><?= t('mkt.cm.b3') ?></span></li>
      </ul>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:14px;padding-top:16px;border-top:1px solid var(--lt-line)" class="lt-mkt-facts">
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.cm.f1l"><?= t('mkt.cm.f1l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.cm.f1v"><?= t('mkt.cm.f1v') ?></div></div>
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.cm.f2l"><?= t('mkt.cm.f2l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.cm.f2v"><?= t('mkt.cm.f2v') ?></div></div>
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.cm.f3l"><?= t('mkt.cm.f3l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.cm.f3v"><?= t('mkt.cm.f3v') ?></div></div>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- ============== ACTIVE MARKETS ============== -->
<section id="active-markets" class="lt-section" style="background:#fff;padding:80px 40px">
  <div style="max-width:1200px;margin:0 auto">
    <div class="lt-reveal" style="margin-bottom:30px">
      <div class="lt-eyebrow" data-i18n="mkt.active.eyebrow"><?= t('mkt.active.eyebrow') ?></div>
      <h2 class="lt-section-title" style="font-size:1.9rem;font-weight:800;margin:0;line-height:1.2" data-i18n="mkt.active.title"><?= t('mkt.active.title') ?></h2>
    </div>
  <div class="lt-mkt-row lt-reveal" data-mkt="eg">
    <div class="lt-mkt-img" style="background: linear-gradient(135deg, #1a3554 0%, #0a2540 100%);">
      <img src="Assets/market/Eygpt.png" alt="Egypt sourcing corridor — Leen Trade imports food packaging and plastics from Egyptian manufacturers" loading="lazy" onerror="this.style.display='none'">
      <div class="lt-mkt-flag">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/60px-Flag_of_Egypt.svg.png" alt="Egypt flag">
      </div>
    </div>
    <div class="lt-mkt-body">
      <div style="display:flex;align-items:center;gap:14px;flex-wrap:wrap;margin-bottom:10px">
        <h3 style="font-size:1.6rem;font-weight:800;margin:0;color:var(--lt-navy);font-family:'Manrope',sans-serif;line-height:1.1">Egypt</h3>
        <span style="background:rgba(201,162,95,.12);color:var(--lt-gold);font-size:.66rem;font-weight:800;letter-spacing:.14em;padding:5px 10px;border-radius:2px;text-transform:uppercase">Sourcing Corridor</span>
      </div>
      <p style="color:#4b5563;line-height:1.75;font-size:.96rem;margin:0 0 16px 0;font-weight:400">A primary sourcing corridor connecting Egyptian manufacturers to our wholesale buyers across Lebanon, the Levant, and Cameroon.</p>
      <ul style="list-style:none;padding:0;margin:0 0 18px 0">
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.eg.b1"><?= t('mkt.eg.b1') ?></span></li>
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.eg.b2"><?= t('mkt.eg.b2') ?></span></li>
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.eg.b3"><?= t('mkt.eg.b3') ?></span></li>
      </ul>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:14px;padding-top:16px;border-top:1px solid var(--lt-line)" class="lt-mkt-facts">
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.eg.f1l"><?= t('mkt.eg.f1l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.eg.f1v"><?= t('mkt.eg.f1v') ?></div></div>
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.eg.f2l"><?= t('mkt.eg.f2l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.eg.f2v"><?= t('mkt.eg.f2v') ?></div></div>
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.eg.f3l"><?= t('mkt.eg.f3l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.eg.f3v"><?= t('mkt.eg.f3v') ?></div></div>
      </div>
    </div>
  </div>

  <div class="lt-mkt-row lt-reveal" data-mkt="jo">
    <div class="lt-mkt-img" style="background: linear-gradient(135deg, #1a3554 0%, #0a2540 100%);">
      <img src="Assets/market/Jordan.png" alt="Jordan trade partner — Leen Trade HoReCa packaging and food trade across Lebanon-Jordan" loading="lazy" onerror="this.style.display='none'">
      <div class="lt-mkt-flag">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/60px-Flag_of_Jordan.svg.png" alt="Jordan flag">
      </div>
    </div>
    <div class="lt-mkt-body">
      <div style="display:flex;align-items:center;gap:14px;flex-wrap:wrap;margin-bottom:10px">
        <h3 style="font-size:1.6rem;font-weight:800;margin:0;color:var(--lt-navy);font-family:'Manrope',sans-serif;line-height:1.1">Jordan</h3>
        <span style="background:rgba(201,162,95,.12);color:var(--lt-gold);font-size:.66rem;font-weight:800;letter-spacing:.14em;padding:5px 10px;border-radius:2px;text-transform:uppercase">Trade Partner</span>
      </div>
      <p style="color:#4b5563;line-height:1.75;font-size:.96rem;margin:0 0 16px 0;font-weight:400">A two-way trade corridor for packaging and disposable supply between Lebanon and Jordan, serving HoReCa and B2B operators.</p>
      <ul style="list-style:none;padding:0;margin:0 0 18px 0">
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.jo.b1"><?= t('mkt.jo.b1') ?></span></li>
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.jo.b2"><?= t('mkt.jo.b2') ?></span></li>
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.jo.b3"><?= t('mkt.jo.b3') ?></span></li>
      </ul>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:14px;padding-top:16px;border-top:1px solid var(--lt-line)" class="lt-mkt-facts">
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.jo.f1l"><?= t('mkt.jo.f1l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.jo.f1v"><?= t('mkt.jo.f1v') ?></div></div>
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.jo.f2l"><?= t('mkt.jo.f2l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.jo.f2v"><?= t('mkt.jo.f2v') ?></div></div>
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.jo.f3l"><?= t('mkt.jo.f3l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.jo.f3v"><?= t('mkt.jo.f3v') ?></div></div>
      </div>
    </div>
  </div>

  <div class="lt-mkt-row lt-reveal" data-mkt="sa">
    <div class="lt-mkt-img" style="background: linear-gradient(135deg, #1a3554 0%, #0a2540 100%);">
      <img src="Assets/market/Saudi%20Arabia.png" alt="Saudi Arabia export market — Leen Trade bulk packaging and industrial supply for B2B buyers" loading="lazy" onerror="this.style.display='none'">
      <div class="lt-mkt-flag">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/60px-Flag_of_Saudi_Arabia.svg.png" alt="Saudi Arabia flag">
      </div>
    </div>
    <div class="lt-mkt-body">
      <div style="display:flex;align-items:center;gap:14px;flex-wrap:wrap;margin-bottom:10px">
        <h3 style="font-size:1.6rem;font-weight:800;margin:0;color:var(--lt-navy);font-family:'Manrope',sans-serif;line-height:1.1">Saudi Arabia</h3>
        <span style="background:rgba(201,162,95,.12);color:var(--lt-gold);font-size:.66rem;font-weight:800;letter-spacing:.14em;padding:5px 10px;border-radius:2px;text-transform:uppercase">Export Market</span>
      </div>
      <p style="color:#4b5563;line-height:1.75;font-size:.96rem;margin:0 0 16px 0;font-weight:400">A key export market for bulk packaging, disposables, and industrial materials supplied to Saudi distributors and B2B buyers in major commercial zones.</p>
      <ul style="list-style:none;padding:0;margin:0 0 18px 0">
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.sa.b1"><?= t('mkt.sa.b1') ?></span></li>
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.sa.b2"><?= t('mkt.sa.b2') ?></span></li>
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.sa.b3"><?= t('mkt.sa.b3') ?></span></li>
      </ul>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:14px;padding-top:16px;border-top:1px solid var(--lt-line)" class="lt-mkt-facts">
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.sa.f1l"><?= t('mkt.sa.f1l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.sa.f1v"><?= t('mkt.sa.f1v') ?></div></div>
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.sa.f2l"><?= t('mkt.sa.f2l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.sa.f2v"><?= t('mkt.sa.f2v') ?></div></div>
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.sa.f3l"><?= t('mkt.sa.f3l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.sa.f3v"><?= t('mkt.sa.f3v') ?></div></div>
      </div>
    </div>
  </div>

  <div class="lt-mkt-row lt-reveal" data-mkt="ua">
    <div class="lt-mkt-img" style="background: linear-gradient(135deg, #1a3554 0%, #0a2540 100%);">
      <img src="Assets/market/Ukraine.png" alt="Ukraine sourcing corridor — Leen Trade imports polymer resins, packaging products and industrial inputs" loading="lazy" onerror="this.style.display='none'">
      <div class="lt-mkt-flag">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Ukraine.svg/60px-Flag_of_Ukraine.svg.png" alt="Ukraine flag">
      </div>
    </div>
    <div class="lt-mkt-body">
      <div style="display:flex;align-items:center;gap:14px;flex-wrap:wrap;margin-bottom:10px">
        <h3 style="font-size:1.6rem;font-weight:800;margin:0;color:var(--lt-navy);font-family:'Manrope',sans-serif;line-height:1.1">Ukraine</h3>
        <span style="background:rgba(201,162,95,.12);color:var(--lt-gold);font-size:.66rem;font-weight:800;letter-spacing:.14em;padding:5px 10px;border-radius:2px;text-transform:uppercase">Sourcing Corridor</span>
      </div>
      <p style="color:#4b5563;line-height:1.75;font-size:.96rem;margin:0 0 16px 0;font-weight:400">A sourcing corridor for polymer resins, packaging products, and industrial inputs delivered to our regional manufacturing accounts.</p>
      <ul style="list-style:none;padding:0;margin:0 0 18px 0">
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.ua.b1"><?= t('mkt.ua.b1') ?></span></li>
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.ua.b2"><?= t('mkt.ua.b2') ?></span></li>
          <li style="display:flex;gap:10px;align-items:flex-start;font-size:.9rem;color:#4b5563;line-height:1.6;padding:6px 0"><svg class="ic ic-sm" style="color:#c9a25f;margin-top:5px;flex-shrink:0"><use href="#i-check"/></svg><span data-i18n="mkt.ua.b3"><?= t('mkt.ua.b3') ?></span></li>
      </ul>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:14px;padding-top:16px;border-top:1px solid var(--lt-line)" class="lt-mkt-facts">
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.ua.f1l"><?= t('mkt.ua.f1l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.ua.f1v"><?= t('mkt.ua.f1v') ?></div></div>
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.ua.f2l"><?= t('mkt.ua.f2l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.ua.f2v"><?= t('mkt.ua.f2v') ?></div></div>
            <div><div style="font-size:.66rem;color:#6b7280;letter-spacing:.14em;text-transform:uppercase;font-weight:700;margin-bottom:4px" data-i18n="mkt.ua.f3l"><?= t('mkt.ua.f3l') ?></div><div style="font-size:.92rem;color:var(--lt-navy);font-weight:700" data-i18n="mkt.ua.f3v"><?= t('mkt.ua.f3v') ?></div></div>
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
    <div class="lt-eyebrow is-center" style="color:#c9a25f" data-i18n="mkt.cta.eyebrow"><?= t('mkt.cta.eyebrow') ?></div>
    <h2 class="lt-section-title" style="font-size:2rem;font-weight:800;color:#fff;margin:0 0 18px 0;line-height:1.25;letter-spacing:-.02em" data-i18n="mkt.cta.title"><?= t('mkt.cta.title') ?></h2>
    <p style="color:#cbd5e1;font-size:1rem;line-height:1.7;margin:0 auto 30px;max-width:560px;font-weight:400" data-i18n="mkt.cta.lead"><?= t('mkt.cta.lead') ?></p>
    <a href="request-quote.php<?= $lp ?>#rfq" class="lt-btn-gold" style="display:inline-flex;align-items:center;gap:10px;padding:16px 34px;border-radius:4px;font-weight:700;font-size:.96rem;text-decoration:none">
      <svg class="ic ic-sm"><use href="#i-envelope"/></svg> <span data-i18n="mkt.cta.btn"><?= t('mkt.cta.btn') ?></span> <svg class="ic ic-sm"><use href="#i-arrow-right"/></svg>
    </a>
  </div>
</section>

<?php require __DIR__ . '/inc/_footer.php'; ?>
