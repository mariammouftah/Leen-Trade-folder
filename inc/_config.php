<?php
/**
 * LEEN TRADE — Site-wide configuration
 *
 * Single source of truth for company info, contact details, and the active
 * language. Edit values here and every page picks them up automatically.
 */

// ===== Company info =====
const LT_BRAND       = 'Leen Trade Co.';
const LT_PHONE       = '+961 71 231 843';
const LT_PHONE_DIAL  = '+96171231843';  // tel: / wa.me format
const LT_EMAIL       = 'info@leentrade.co';
const LT_WA_PREFILL  = "Hello Leen Trade, I'd like to enquire about";

// ===== URLs =====
const LT_BASE_URL    = 'https://leentrade.co/';
const LT_OG_IMAGE    = 'https://leentrade.co/Assets/about-company.jpeg';

// ===== Asset paths =====
const LT_LOGO_DARK   = 'Assets/logo-dark.png';
const LT_LOGO_LIGHT  = 'Assets/logo-light.png';
const LT_FAVICON     = 'Assets/favicon.png';

// ===== Language detection =====
// Priority: ?lang=ar URL param > lt-lang cookie > 'en'
$_lang_raw = $_GET['lang'] ?? $_COOKIE['lt-lang'] ?? 'en';
$LANG = in_array($_lang_raw, ['en', 'ar'], true) ? $_lang_raw : 'en';
$DIR  = ($LANG === 'ar') ? 'rtl' : 'ltr';

// Persist the choice (1-year cookie)
if (!headers_sent()) {
    setcookie('lt-lang', $LANG, [
        'expires'  => time() + 31536000,
        'path'     => '/',
        'samesite' => 'Lax',
    ]);
}

// Load the language dictionary
require_once __DIR__ . '/_i18n.php';
load_lang($LANG);

// ===== Helpers =====

/**
 * Build a wa.me link with the standard prefill text.
 */
function wa_link(string $extra = ''): string {
    $text = LT_WA_PREFILL . ($extra ? ' ' . $extra : '');
    return 'https://wa.me/' . substr(LT_PHONE_DIAL, 1) . '?text=' . rawurlencode($text);
}

/**
 * Switch the current URL to a different language.
 * Used by the EN/AR toggle buttons in the header.
 */
function lang_url(string $to_lang): string {
    $uri   = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
    $query = $_GET;
    $query['lang'] = $to_lang;
    return $uri . '?' . http_build_query($query);
}

/**
 * Current page slug (used for active nav highlighting).
 * 'index.php' / '/' → 'home'
 * 'about.php'       → 'about'
 */
function current_page(): string {
    $script = basename($_SERVER['SCRIPT_NAME'] ?? '');
    $slug   = preg_replace('/\\.php$/', '', $script);
    return ($slug === 'index' || $slug === '') ? 'home' : $slug;
}
