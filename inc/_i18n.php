<?php
/**
 * LEEN TRADE — i18n helpers
 *
 *   t('hero.title1')              → translated string (HTML-safe)
 *   t('hero.title1', true)        → raw (no escaping; use only for trusted markup)
 *   tr('hero.title1', 'fallback') → like t() with custom fallback if key missing
 */

global $LT_T;
$LT_T = [];

function load_lang(string $lang): void {
    global $LT_T;
    $file = __DIR__ . '/../lang/' . $lang . '.php';
    if (is_file($file)) {
        $LT_T = require $file;
    }
}

function t(string $key, bool $raw = false): string {
    global $LT_T;
    $value = $LT_T[$key] ?? $key;
    return $raw ? $value : htmlspecialchars($value, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

function tr(string $key, string $fallback = ''): string {
    global $LT_T;
    return $LT_T[$key] ?? $fallback ?: $key;
}

function has_t(string $key): bool {
    global $LT_T;
    return array_key_exists($key, $LT_T);
}
