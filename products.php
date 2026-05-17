<?php
require __DIR__ . '/inc/_config.php';

$page = [
    'title' => 'Wholesale Food Packaging, Disposables & Industrial Supplies | Leen Trade Products',
    'desc'  => 'Wholesale food packaging, disposable products, jumbo rolls, and industrial materials. 24+ product lines across four categories. Stock and custom-printed.',
    'kw'    => 'jumbo rolls wholesale Lebanon, pizza boxes wholesale, sauce cups supplier, disposable products wholesale',
    'slug'  => '/products',
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
      <a href="index.php<?= $lp ?>" style="color:#94a3b8;text-decoration:none" data-i18n="nav.home"><?= t('nav.home') ?></a> <span style="margin:0 8px;color:#c9a25f">/</span> <span style="color:#fff" data-i18n="page.products.crumb"><?= t('page.products.crumb') ?></span>
    </nav>
    <div class="lt-eyebrow" style="color:#c9a25f" data-i18n="page.products.crumb"><?= t('page.products.crumb') ?></div>
    <h1 style="font-size:2.6rem;font-weight:800;line-height:1.15;margin:0 0 18px 0;color:#fff;letter-spacing:-.02em;max-width:780px" data-i18n="page.products.h1"><?= t('page.products.h1') ?></h1>
    <p style="color:#cbd5e1;font-size:1.02rem;line-height:1.7;margin:0;max-width:720px;font-weight:400" data-i18n="page.products.intro"><?= t('page.products.intro') ?></p>
  </div>
</section>

<!-- ============== CATEGORY 01 — FOOD PACKAGING ============== -->
<section id="cat-01" class="lt-section" style="background:#f7f8fa;padding:96px 40px">
  <div style="max-width:1200px;margin:0 auto">
    <div class="lt-reveal" style="margin-bottom:42px">
      <div style="display:flex;align-items:baseline;gap:18px;flex-wrap:wrap;margin-bottom:10px">
        <span style="font-size:.72rem;font-weight:700;color:#c9a25f;letter-spacing:.22em" data-i18n="prod.cat01.label"><?= t('prod.cat01.label') ?></span>
        <h2 class="lt-section-title" style="font-size:2rem;font-weight:800;margin:0;line-height:1.2;color:#0a2540" data-i18n="prod.cat01.h2"><?= t('prod.cat01.h2') ?></h2>
      </div>
      <p style="color:#4b5563;font-size:1rem;line-height:1.7;max-width:780px;margin:0;font-weight:400" data-i18n="prod.cat01.intro"><?= t('prod.cat01.intro') ?></p>
    </div>

    <div class="lt-products-grid">

      <div class="lt-spec-card lt-reveal" data-delay="1">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">PET / PP</div>
            <svg class="icon"><use href="#i-box"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2001/Food%20containers%20%26%20trays.png" alt="Food containers & trays — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s01.t"><?= t('prod.s01.t') ?></h3>
          <p data-i18n="prod.s01.d"><?= t('prod.s01.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">120ml – 2L</span>
            <span class="lt-spec-chip">Lid included</span>
            <span class="lt-spec-chip">Microwave-safe</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="2">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Kraft</div>
            <svg class="icon"><use href="#i-box"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2001/Kraft%20%26%20greaseproof%20bags.png" alt="Kraft & greaseproof bags — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s02.t"><?= t('prod.s02.t') ?></h3>
          <p data-i18n="prod.s02.d"><?= t('prod.s02.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">80–120 GSM</span>
            <span class="lt-spec-chip">FSC-certified</span>
            <span class="lt-spec-chip">Print-ready</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="3">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Films</div>
            <svg class="icon"><use href="#i-boxes"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2001/Cling%20%26%20lidding%20films.png" alt="Cling & lidding films — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s03.t"><?= t('prod.s03.t') ?></h3>
          <p data-i18n="prod.s03.d"><?= t('prod.s03.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">9–25 μm</span>
            <span class="lt-spec-chip">Slot specs</span>
            <span class="lt-spec-chip">Food contact</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="1">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Custom</div>
            <svg class="icon"><use href="#i-box"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2001/Corrugated%20%26%20printed%20boxes.png" alt="Corrugated & printed boxes — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s04.t"><?= t('prod.s04.t') ?></h3>
          <p data-i18n="prod.s04.d"><?= t('prod.s04.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">3-ply / 5-ply</span>
            <span class="lt-spec-chip">Up to 4-colour</span>
            <span class="lt-spec-chip">MOQ 1,000</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="2">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Foil</div>
            <svg class="icon"><use href="#i-box"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2001/Aluminium%20containers.png" alt="Aluminium containers — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s05.t"><?= t('prod.s05.t') ?></h3>
          <p data-i18n="prod.s05.d"><?= t('prod.s05.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">250ml – 4L</span>
            <span class="lt-spec-chip">Lid options</span>
            <span class="lt-spec-chip">Oven-safe</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============== CATEGORY 02 — DISPOSABLE PRODUCTS ============== -->
<section id="cat-02" class="lt-section" style="background:#fff;padding:96px 40px">
  <div style="max-width:1200px;margin:0 auto">
    <div class="lt-reveal" style="margin-bottom:42px">
      <div style="display:flex;align-items:baseline;gap:18px;flex-wrap:wrap;margin-bottom:10px">
        <span style="font-size:.72rem;font-weight:700;color:#c9a25f;letter-spacing:.22em" data-i18n="prod.cat02.label"><?= t('prod.cat02.label') ?></span>
        <h2 class="lt-section-title" style="font-size:2rem;font-weight:800;margin:0;line-height:1.2;color:#0a2540" data-i18n="prod.cat02.h2"><?= t('prod.cat02.h2') ?></h2>
      </div>
      <p style="color:#4b5563;font-size:1rem;line-height:1.7;max-width:780px;margin:0;font-weight:400" data-i18n="prod.cat02.intro"><?= t('prod.cat02.intro') ?></p>
    </div>

    <div class="lt-products-grid">

      <div class="lt-spec-card lt-reveal" data-delay="1">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Paper / PE</div>
            <svg class="icon"><use href="#i-utensils"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2002/Paper%20hot%20%26%20cold%20cups.png" alt="Paper hot & cold cups — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s06.t"><?= t('prod.s06.t') ?></h3>
          <p data-i18n="prod.s06.d"><?= t('prod.s06.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">4oz – 22oz</span>
            <span class="lt-spec-chip">Lid match</span>
            <span class="lt-spec-chip">HoReCa grade</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="2">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Wooden / PLA</div>
            <svg class="icon"><use href="#i-utensils"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2002/Cutlery%20sets.png" alt="Cutlery sets — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s07.t"><?= t('prod.s07.t') ?></h3>
          <p data-i18n="prod.s07.d"><?= t('prod.s07.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">Bulk packs</span>
            <span class="lt-spec-chip">FSC wood</span>
            <span class="lt-spec-chip">Heat-resistant</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="3">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Paper</div>
            <svg class="icon"><use href="#i-box"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2002/Napkins%20%26%20serviettes.png" alt="Napkins & serviettes — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s08.t"><?= t('prod.s08.t') ?></h3>
          <p data-i18n="prod.s08.d"><?= t('prod.s08.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">16gsm – 32gsm</span>
            <span class="lt-spec-chip">Dispenser pack</span>
            <span class="lt-spec-chip">FSC</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="1">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Paper / PLA</div>
            <svg class="icon"><use href="#i-utensils"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2002/Straws.png" alt="Straws — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s09.t"><?= t('prod.s09.t') ?></h3>
          <p data-i18n="prod.s09.d"><?= t('prod.s09.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">6mm – 12mm</span>
            <span class="lt-spec-chip">Custom print</span>
            <span class="lt-spec-chip">EU directive compliant</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="2">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Nitrile / Vinyl</div>
            <svg class="icon"><use href="#i-shield"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2002/Gloves.png" alt="Food-handling gloves — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s10.t"><?= t('prod.s10.t') ?></h3>
          <p data-i18n="prod.s10.d"><?= t('prod.s10.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">S – XL</span>
            <span class="lt-spec-chip">Food-safe</span>
            <span class="lt-spec-chip">AQL 1.5</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="3">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">PP / Paper</div>
            <svg class="icon"><use href="#i-utensils"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2002/Plates%20%26%20bowls.png" alt="Plates & bowls — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s11.t"><?= t('prod.s11.t') ?></h3>
          <p data-i18n="prod.s11.d"><?= t('prod.s11.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">6" – 12"</span>
            <span class="lt-spec-chip">Single-use</span>
            <span class="lt-spec-chip">Stack-pack</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============== CATEGORY 03 — JUMBO ROLLS ============== -->
<section id="cat-03" class="lt-section" style="background:#f7f8fa;padding:96px 40px">
  <div style="max-width:1200px;margin:0 auto">
    <div class="lt-reveal" style="margin-bottom:42px">
      <div style="display:flex;align-items:baseline;gap:18px;flex-wrap:wrap;margin-bottom:10px">
        <span style="font-size:.72rem;font-weight:700;color:#c9a25f;letter-spacing:.22em" data-i18n="prod.cat03.label"><?= t('prod.cat03.label') ?></span>
        <h2 class="lt-section-title" style="font-size:2rem;font-weight:800;margin:0;line-height:1.2;color:#0a2540" data-i18n="prod.cat03.h2"><?= t('prod.cat03.h2') ?></h2>
      </div>
      <p style="color:#4b5563;font-size:1rem;line-height:1.7;max-width:780px;margin:0;font-weight:400" data-i18n="prod.cat03.intro"><?= t('prod.cat03.intro') ?></p>
    </div>

    <div class="lt-products-grid">

      <div class="lt-spec-card lt-reveal" data-delay="1">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Tissue</div>
            <svg class="icon"><use href="#i-boxes"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2003/Tissue%20parent%20reels.png" alt="Tissue parent reels — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s12.t"><?= t('prod.s12.t') ?></h3>
          <p data-i18n="prod.s12.d"><?= t('prod.s12.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">13 – 22 GSM</span>
            <span class="lt-spec-chip">Up to 2.7m wide</span>
            <span class="lt-spec-chip">Mill-direct</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="2">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Kraft / MG</div>
            <svg class="icon"><use href="#i-boxes"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2003/Kraft%20%26%20MG%20paper.png" alt="Kraft & MG paper — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s13.t"><?= t('prod.s13.t') ?></h3>
          <p data-i18n="prod.s13.d"><?= t('prod.s13.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">35 – 120 GSM</span>
            <span class="lt-spec-chip">Food contact</span>
            <span class="lt-spec-chip">FSC</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="3">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Aluminium</div>
            <svg class="icon"><use href="#i-boxes"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2003/Aluminium%20foil%20reels.png" alt="Aluminium foil reels — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s14.t"><?= t('prod.s14.t') ?></h3>
          <p data-i18n="prod.s14.d"><?= t('prod.s14.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">9 – 30 μm</span>
            <span class="lt-spec-chip">Up to 600mm</span>
            <span class="lt-spec-chip">Food-safe</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="1">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">LDPE</div>
            <svg class="icon"><use href="#i-boxes"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2003/Stretch%20%26%20shrink%20film.png" alt="Stretch & shrink film — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s15.t"><?= t('prod.s15.t') ?></h3>
          <p data-i18n="prod.s15.d"><?= t('prod.s15.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">15 – 35 μm</span>
            <span class="lt-spec-chip">Black / clear</span>
            <span class="lt-spec-chip">Pre-stretched</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="2">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Liner</div>
            <svg class="icon"><use href="#i-boxes"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2003/Greaseproof%20%26%20baking%20paper.png" alt="Greaseproof & baking paper — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s16.t"><?= t('prod.s16.t') ?></h3>
          <p data-i18n="prod.s16.d"><?= t('prod.s16.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">35 – 60 GSM</span>
            <span class="lt-spec-chip">220°C rated</span>
            <span class="lt-spec-chip">Mill-direct</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="3">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Carton board</div>
            <svg class="icon"><use href="#i-box"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2003/Folding%20boxboard.png" alt="Folding boxboard — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s17.t"><?= t('prod.s17.t') ?></h3>
          <p data-i18n="prod.s17.d"><?= t('prod.s17.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">200 – 400 GSM</span>
            <span class="lt-spec-chip">Food-grade</span>
            <span class="lt-spec-chip">Reel or sheet</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============== CATEGORY 04 — INDUSTRIAL MATERIALS ============== -->
<section id="cat-04" class="lt-section" style="background:#fff;padding:96px 40px">
  <div style="max-width:1200px;margin:0 auto">
    <div class="lt-reveal" style="margin-bottom:42px">
      <div style="display:flex;align-items:baseline;gap:18px;flex-wrap:wrap;margin-bottom:10px">
        <span style="font-size:.72rem;font-weight:700;color:#c9a25f;letter-spacing:.22em" data-i18n="prod.cat04.label"><?= t('prod.cat04.label') ?></span>
        <h2 class="lt-section-title" style="font-size:2rem;font-weight:800;margin:0;line-height:1.2;color:#0a2540" data-i18n="prod.cat04.h2"><?= t('prod.cat04.h2') ?></h2>
      </div>
      <p style="color:#4b5563;font-size:1rem;line-height:1.7;max-width:780px;margin:0;font-weight:400" data-i18n="prod.cat04.intro"><?= t('prod.cat04.intro') ?></p>
    </div>

    <div class="lt-products-grid">

      <div class="lt-spec-card lt-reveal" data-delay="1">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Resins</div>
            <svg class="icon"><use href="#i-factory"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2004/Polymer%20resins.png" alt="Polymer resins — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s18.t"><?= t('prod.s18.t') ?></h3>
          <p data-i18n="prod.s18.d"><?= t('prod.s18.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">FCM-compliant</span>
            <span class="lt-spec-chip">MSDS on file</span>
            <span class="lt-spec-chip">Bulk only</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="2">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Inks</div>
            <svg class="icon"><use href="#i-factory"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2004/Flexo%20%26%20gravure%20inks.png" alt="Flexo & gravure inks — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s19.t"><?= t('prod.s19.t') ?></h3>
          <p data-i18n="prod.s19.d"><?= t('prod.s19.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">Pantone match</span>
            <span class="lt-spec-chip">Food-safe range</span>
            <span class="lt-spec-chip">Bulk drum</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="3">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Adhesives</div>
            <svg class="icon"><use href="#i-factory"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2004/Lamination%20adhesives.png" alt="Lamination adhesives — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s20.t"><?= t('prod.s20.t') ?></h3>
          <p data-i18n="prod.s20.d"><?= t('prod.s20.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">FDA-compliant</span>
            <span class="lt-spec-chip">Retort-grade</span>
            <span class="lt-spec-chip">1-tonne IBC</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="1">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Wax</div>
            <svg class="icon"><use href="#i-factory"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2004/Paraffin%20%26%20specialty%20wax.png" alt="Paraffin & specialty wax — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s21.t"><?= t('prod.s21.t') ?></h3>
          <p data-i18n="prod.s21.d"><?= t('prod.s21.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">Slab / pastilles</span>
            <span class="lt-spec-chip">Food-grade</span>
            <span class="lt-spec-chip">FOB / CIF</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="2">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Chemicals</div>
            <svg class="icon"><use href="#i-factory"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2004/Basic%20chemicals.png" alt="Basic chemicals — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s22.t"><?= t('prod.s22.t') ?></h3>
          <p data-i18n="prod.s22.d"><?= t('prod.s22.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">25kg / 1MT</span>
            <span class="lt-spec-chip">COA on lot</span>
            <span class="lt-spec-chip">Bulk only</span>
          </div>
        </div>
      </div>

      <div class="lt-spec-card lt-reveal" data-delay="3">
        <div class="lt-spec-img" data-no-photo>
          <div class="lt-spec-placeholder">
            <div class="tag">Consumables</div>
            <svg class="icon"><use href="#i-factory"/></svg>
          </div>
          <img src="Assets/products/CATEGORY%2004/Converting%20consumables.png" alt="Converting consumables — wholesale supply by Leen Trade" loading="lazy" onerror="this.parentNode.removeAttribute('data-no-photo');this.style.display='none'">
        </div>
        <div class="lt-spec-body">
          <h3 data-i18n="prod.s23.t"><?= t('prod.s23.t') ?></h3>
          <p data-i18n="prod.s23.d"><?= t('prod.s23.d') ?></p>
          <div class="lt-spec-chips">
            <span class="lt-spec-chip">OEM-grade</span>
            <span class="lt-spec-chip">On-call stock</span>
            <span class="lt-spec-chip">Container loads</span>
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
    <div class="lt-eyebrow is-center" style="color:#c9a25f">Get Started</div>
    <h2 class="lt-section-title" style="font-size:2rem;font-weight:800;color:#fff;margin:0 0 18px 0;line-height:1.25;letter-spacing:-.02em">
      Found what you need? Let&rsquo;s talk volumes.
    </h2>
    <p style="color:#cbd5e1;font-size:1rem;line-height:1.7;margin:0 auto 30px;max-width:560px;font-weight:400">
      Share your product list, quantities, and destination. We&rsquo;ll come back with pricing and availability.
    </p>
    <a href="request-quote.php<?= $lp ?>#rfq" class="lt-btn-gold" style="display:inline-flex;align-items:center;gap:10px;padding:16px 34px;border-radius:4px;font-weight:700;font-size:.96rem;text-decoration:none">
      <svg class="ic ic-sm"><use href="#i-envelope"/></svg> Request a Quote <svg class="ic ic-sm"><use href="#i-arrow-right"/></svg>
    </a>
  </div>
</section>

<?php require __DIR__ . '/inc/_footer.php'; ?>
