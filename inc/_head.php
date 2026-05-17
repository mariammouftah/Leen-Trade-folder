<?php
/**
 * LEEN TRADE — HTML head partial
 *
 * Each page sets a $page array BEFORE including this file, e.g.:
 *
 *   $page = [
 *     'title'    => 'Home page title',
 *     'desc'     => 'Meta description',
 *     'kw'       => 'comma, separated, keywords',
 *     'slug'     => '/',                          // canonical path
 *     'og_image' => 'Assets/about-company.jpeg',  // optional, defaults to LT_OG_IMAGE
 *     'json_ld'  => '...JSON-LD string...',       // optional, page-specific schema
 *   ];
 *   include 'inc/_head.php';
 */

$_p = $page ?? [];
$title    = $_p['title'] ?? LT_BRAND;
$desc     = $_p['desc']  ?? '';
$kw       = $_p['kw']    ?? '';
$slug     = ltrim($_p['slug'] ?? '/', '/');
$canon    = LT_BASE_URL . $slug;
$og_image = $_p['og_image'] ?? LT_OG_IMAGE;
?>
<!DOCTYPE html>
<html lang="<?= $LANG ?>" dir="<?= $DIR ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#0a2540">
  <title><?= htmlspecialchars($title, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($desc, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>">
  <meta name="keywords" content="<?= htmlspecialchars($kw, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canon, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($title, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($desc, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canon, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>">
  <meta property="og:image" content="<?= htmlspecialchars($og_image, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>">
  <meta property="og:locale" content="<?= $LANG === 'ar' ? 'ar_LB' : 'en_US' ?>">
  <meta property="og:locale:alternate" content="<?= $LANG === 'ar' ? 'en_US' : 'ar_LB' ?>">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($title, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($desc, ENT_QUOTES | ENT_HTML5, 'UTF-8') ?>">

  <link rel="icon" type="image/png" href="<?= LT_FAVICON ?>">
  <link rel="apple-touch-icon" href="<?= LT_FAVICON ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&family=Inter:wght@400;500;600&family=Cairo:wght@500;600;700;800&display=swap" rel="stylesheet">

  <!-- JSON-LD: Organization + LocalBusiness (shared across every page) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "<?= LT_BASE_URL ?>#organization",
        "name": "<?= LT_BRAND ?>",
        "url": "<?= LT_BASE_URL ?>",
        "logo": "<?= LT_BASE_URL . LT_LOGO_DARK ?>",
        "email": "<?= LT_EMAIL ?>",
        "telephone": "<?= LT_PHONE ?>",
        "foundingDate": "2014",
        "areaServed": [
          { "@type": "Country", "name": "Lebanon" },
          { "@type": "Country", "name": "Cameroon" },
          { "@type": "Country", "name": "Egypt" },
          { "@type": "Country", "name": "Jordan" },
          { "@type": "Country", "name": "Saudi Arabia" },
          { "@type": "Country", "name": "Ukraine" }
        ]
      },
      {
        "@type": "LocalBusiness",
        "@id": "<?= LT_BASE_URL ?>#saida",
        "name": "<?= LT_BRAND ?> — Saida Headquarters",
        "telephone": "<?= LT_PHONE ?>",
        "email": "<?= LT_EMAIL ?>",
        "address": { "@type": "PostalAddress", "addressLocality": "Saida", "addressCountry": "LB" },
        "openingHoursSpecification": [{
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "08:00", "closes": "18:00"
        }],
        "parentOrganization": { "@id": "<?= LT_BASE_URL ?>#organization" }
      },
      {
        "@type": "LocalBusiness",
        "@id": "<?= LT_BASE_URL ?>#douala",
        "name": "<?= LT_BRAND ?> — Douala Regional Hub",
        "telephone": "<?= LT_PHONE ?>",
        "address": { "@type": "PostalAddress", "addressLocality": "Douala", "addressCountry": "CM" },
        "parentOrganization": { "@id": "<?= LT_BASE_URL ?>#organization" }
      }<?php if (!empty($_p['json_ld'])): ?>,
      <?= $_p['json_ld'] ?>
      <?php endif; ?>
    ]
  }
  </script>

<?php include __DIR__ . '/_styles.php'; ?>
</head>
<body>

<?php include __DIR__ . '/_sprite.php'; ?>

<div class="leen-site" id="lt-root" dir="<?= $DIR ?>" lang="<?= $LANG ?>">

<a href="#main" class="lt-skip"><?= t('skip') ?></a>
