# LEEN TRADE — PHP Multi-Page Site

The site is now PHP-driven on Bluehost. Shared head/header/footer/scripts, server-rendered translations, and data-driven catalogs.

## Folder structure

```
Leen Trade/
├── index.php              ← Home
├── about.php              ← About / Story / Mission / Vision / Values
├── services.php           ← Timeline of 6 services
├── products.php           ← 4 categories, 23 products
├── markets.php            ← 6 countries (2 hubs + 4 corridors)
├── request-quote.php      ← Unified contact form + map
├── contact.php            ← Identical content to request-quote
│
├── inc/                   ← Shared partials (do NOT delete)
│   ├── _config.php        ← Phone, email, brand, language detection
│   ├── _i18n.php          ← t() translation function
│   ├── _head.php          ← <head> with meta + OG + JSON-LD
│   ├── _sprite.php        ← SVG icon sprite
│   ├── _styles.php        ← All CSS
│   ├── _header.php        ← Top bar + nav + mobile menu
│   ├── _footer.php        ← Footer + WhatsApp FAB
│   └── _scripts.php       ← JS (reveals, counters, RFQ form)
│
├── lang/                  ← Translation dictionaries
│   ├── en.php             ← 274 English keys
│   └── ar.php             ← 301 Arabic keys
│
├── data/                  ← Catalog data
│   ├── products.php       ← Product categories + items
│   └── markets.php        ← Country cards
│
├── Assets/                ← Images, video, logo, favicon
└── .htaccess              ← URL routing + caching + security
```

## How it works

### Single source of truth for everything
- Phone number, email, brand → edit `inc/_config.php`
- Translations → edit `lang/en.php` or `lang/ar.php`
- Nav links / footer → edit `inc/_header.php` or `inc/_footer.php`
- Brand colors / CSS → edit `inc/_styles.php`

Edit once, every page picks it up automatically.

### Server-side language switching
- URL: `index.php?lang=ar` renders the page in Arabic at the server
- Language choice persists for 1 year via cookie
- The EN/AR toggle in the top bar (desktop) and mobile menu both work as links — they reload the page in the chosen language
- Better for SEO: Google sees real Arabic content (not JS-injected)

### Data-driven catalog
- Add/edit/remove products → edit `data/products.php`
- Add/edit/remove country cards → edit `data/markets.php`
- No HTML changes needed

## Upload to Bluehost

1. **Compress the project** into a `.zip` locally (skip `.git`, `.html` backups, `.claude`)
2. **Bluehost → File Manager → public_html/**
3. **Upload the zip → Extract here**
4. **Visit your domain** — Bluehost auto-serves `index.php`

### Required Bluehost settings
- PHP version: **7.4 or higher** (most Bluehost plans default to PHP 8.x)
- mod_rewrite: **enabled** (default on shared hosting)
- The `.htaccess` file enables clean URLs (`/about` instead of `/about.php`)

### After upload
- Visit `yourdomain.com` → home page
- Visit `yourdomain.com/about` → about page (clean URL via .htaccess)
- Visit `yourdomain.com/?lang=ar` → Arabic version

## Local testing (optional)

You need PHP installed. On Windows:
```bash
cd "C:\Users\user\Downloads\Leen Trade"
php -S localhost:8080
```
Then visit `http://localhost:8080/`

## Cleanup

The 7 `.html` files are still in the folder as backups. Once you've verified the PHP versions work on Bluehost, you can delete them. The PHP version is the new source of truth.

## Common edits

### Change the phone number site-wide
Edit `inc/_config.php`:
```php
const LT_PHONE       = '+961 71 231 843';
const LT_PHONE_DIAL  = '+96171231843';
```

### Add a new product
Edit `data/products.php`. Find the category, append a new array:
```php
['title_key' => 'prod.s24.t', 'desc_key' => 'prod.s24.d', 'tag' => 'NewTag', 'icon' => 'i-box',
 'img' => 'Assets/products/CATEGORY%2001/new.png', 'chips' => ['spec1', 'spec2', 'spec3']],
```
Then add the translations to `lang/en.php` and `lang/ar.php`:
```php
'prod.s24.t' => 'New Product Name',
'prod.s24.d' => 'Description...',
```

### Change a translation
Open `lang/en.php` or `lang/ar.php`, find the key, change the value. Reload.

### Add a new nav link
Edit `inc/_header.php`. Add a new `<li>` in both the desktop nav (`.lt-nav-desktop`) and the mobile menu (`#lt-mobile-menu ul`).

## Backups
The original `.html` files are preserved as `*.html` alongside the new `.php` files. To revert, delete the `.php` files and the `inc/`, `lang/`, `data/` folders.
