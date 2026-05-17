<?php
/**
 * LEEN TRADE — Product catalog
 *
 * Structure: 4 categories, each with N product cards.
 * Each product has:
 *   - title_key, desc_key  → looked up via t()
 *   - tag                  → small label shown on the card (English; technical/standard term, kept as-is)
 *   - icon                 → SVG sprite id (#i-...)
 *   - img                  → image path (URL-encoded if it contains spaces / &)
 *   - chips                → 3 technical spec chips (kept English — units/acronyms)
 *
 * To add/remove/reorder a product: edit this file. The products.php page
 * loops over this array — no template changes needed.
 */

return [
    [
        'num'       => '01',
        'name_key'  => 'prod.cat01.h2',
        'intro_key' => 'prod.cat01.intro',
        'label_key' => 'prod.cat01.label',
        'bg'        => '#f7f8fa',
        'items'     => [
            ['title_key' => 'prod.s01.t', 'desc_key' => 'prod.s01.d', 'tag' => 'PET / PP',   'icon' => 'i-box',      'img' => 'Assets/products/CATEGORY%2001/Food%20containers%20%26%20trays.png',  'chips' => ['120ml – 2L', 'Lid included', 'Microwave-safe']],
            ['title_key' => 'prod.s02.t', 'desc_key' => 'prod.s02.d', 'tag' => 'Kraft',      'icon' => 'i-box',      'img' => 'Assets/products/CATEGORY%2001/Kraft%20%26%20greaseproof%20bags.png', 'chips' => ['80–120 GSM', 'FSC-certified', 'Print-ready']],
            ['title_key' => 'prod.s03.t', 'desc_key' => 'prod.s03.d', 'tag' => 'Films',      'icon' => 'i-boxes',    'img' => 'Assets/products/CATEGORY%2001/Cling%20%26%20lidding%20films.png',    'chips' => ['9–25 μm', 'Slot specs', 'Food contact']],
            ['title_key' => 'prod.s04.t', 'desc_key' => 'prod.s04.d', 'tag' => 'Custom',     'icon' => 'i-box',      'img' => 'Assets/products/CATEGORY%2001/Corrugated%20%26%20printed%20boxes.png','chips' => ['3-ply / 5-ply', 'Up to 4-colour', 'MOQ 1,000']],
            ['title_key' => 'prod.s05.t', 'desc_key' => 'prod.s05.d', 'tag' => 'Foil',       'icon' => 'i-box',      'img' => 'Assets/products/CATEGORY%2001/Aluminium%20containers.png',           'chips' => ['250ml – 4L', 'Lid options', 'Oven-safe']],
        ],
    ],
    [
        'num'       => '02',
        'name_key'  => 'prod.cat02.h2',
        'intro_key' => 'prod.cat02.intro',
        'label_key' => 'prod.cat02.label',
        'bg'        => '#fff',
        'items'     => [
            ['title_key' => 'prod.s06.t', 'desc_key' => 'prod.s06.d', 'tag' => 'Paper / PE',     'icon' => 'i-utensils', 'img' => 'Assets/products/CATEGORY%2002/Paper%20hot%20%26%20cold%20cups.png',     'chips' => ['4oz – 22oz', 'Lid match', 'HoReCa grade']],
            ['title_key' => 'prod.s07.t', 'desc_key' => 'prod.s07.d', 'tag' => 'Wooden / PLA',   'icon' => 'i-utensils', 'img' => 'Assets/products/CATEGORY%2002/Cutlery%20sets.png',                       'chips' => ['Bulk packs', 'FSC wood', 'Heat-resistant']],
            ['title_key' => 'prod.s08.t', 'desc_key' => 'prod.s08.d', 'tag' => 'Paper',          'icon' => 'i-box',      'img' => 'Assets/products/CATEGORY%2002/Napkins%20%26%20serviettes.png',           'chips' => ['16gsm – 32gsm', 'Dispenser pack', 'FSC']],
            ['title_key' => 'prod.s09.t', 'desc_key' => 'prod.s09.d', 'tag' => 'Paper / PLA',    'icon' => 'i-utensils', 'img' => 'Assets/products/CATEGORY%2002/Straws.png',                               'chips' => ['6mm – 12mm', 'Custom print', 'EU directive compliant']],
            ['title_key' => 'prod.s10.t', 'desc_key' => 'prod.s10.d', 'tag' => 'Nitrile / Vinyl','icon' => 'i-shield',   'img' => 'Assets/products/CATEGORY%2002/Food-handling%20gloves.png',               'chips' => ['S – XL', 'Food-safe', 'AQL 1.5']],
            ['title_key' => 'prod.s11.t', 'desc_key' => 'prod.s11.d', 'tag' => 'PP / Paper',     'icon' => 'i-utensils', 'img' => 'Assets/products/CATEGORY%2002/Plates%20%26%20bowls.png',                 'chips' => ['6" – 12"', 'Single-use', 'Stack-pack']],
        ],
    ],
    [
        'num'       => '03',
        'name_key'  => 'prod.cat03.h2',
        'intro_key' => 'prod.cat03.intro',
        'label_key' => 'prod.cat03.label',
        'bg'        => '#f7f8fa',
        'items'     => [
            ['title_key' => 'prod.s12.t', 'desc_key' => 'prod.s12.d', 'tag' => 'Tissue',       'icon' => 'i-boxes', 'img' => 'Assets/products/CATEGORY%2003/Tissue%20parent%20reels.png',          'chips' => ['13 – 22 GSM', 'Up to 2.7m wide', 'Mill-direct']],
            ['title_key' => 'prod.s13.t', 'desc_key' => 'prod.s13.d', 'tag' => 'Kraft / MG',   'icon' => 'i-boxes', 'img' => 'Assets/products/CATEGORY%2003/Kraft%20%26%20MG%20paper.png',         'chips' => ['35 – 120 GSM', 'Food contact', 'FSC']],
            ['title_key' => 'prod.s14.t', 'desc_key' => 'prod.s14.d', 'tag' => 'Aluminium',    'icon' => 'i-boxes', 'img' => 'Assets/products/CATEGORY%2003/Aluminium%20foil%20reels.png',         'chips' => ['9 – 30 μm', 'Up to 600mm', 'Food-safe']],
            ['title_key' => 'prod.s15.t', 'desc_key' => 'prod.s15.d', 'tag' => 'LDPE',         'icon' => 'i-boxes', 'img' => 'Assets/products/CATEGORY%2003/Stretch%20%26%20shrink%20film.png',   'chips' => ['15 – 35 μm', 'Black / clear', 'Pre-stretched']],
            ['title_key' => 'prod.s16.t', 'desc_key' => 'prod.s16.d', 'tag' => 'Liner',        'icon' => 'i-boxes', 'img' => 'Assets/products/CATEGORY%2003/Greaseproof%20%26%20baking%20paper.png','chips' => ['35 – 60 GSM', '220°C rated', 'Mill-direct']],
            ['title_key' => 'prod.s17.t', 'desc_key' => 'prod.s17.d', 'tag' => 'Carton board', 'icon' => 'i-box',   'img' => 'Assets/products/CATEGORY%2003/Folding%20boxboard.png',                'chips' => ['200 – 400 GSM', 'Food-grade', 'Reel or sheet']],
        ],
    ],
    [
        'num'       => '04',
        'name_key'  => 'prod.cat04.h2',
        'intro_key' => 'prod.cat04.intro',
        'label_key' => 'prod.cat04.label',
        'bg'        => '#fff',
        'items'     => [
            ['title_key' => 'prod.s18.t', 'desc_key' => 'prod.s18.d', 'tag' => 'Resins',     'icon' => 'i-factory', 'img' => 'Assets/products/CATEGORY%2004/Polymer%20resins.png',          'chips' => ['FCM-compliant', 'MSDS on file', 'Bulk only']],
            ['title_key' => 'prod.s19.t', 'desc_key' => 'prod.s19.d', 'tag' => 'Inks',       'icon' => 'i-factory', 'img' => 'Assets/products/CATEGORY%2004/Flexo%20%26%20gravure%20inks.png','chips' => ['Pantone match', 'Food-safe range', 'Bulk drum']],
            ['title_key' => 'prod.s20.t', 'desc_key' => 'prod.s20.d', 'tag' => 'Adhesives',  'icon' => 'i-factory', 'img' => 'Assets/products/CATEGORY%2004/Lamination%20adhesives.png',    'chips' => ['FDA-compliant', 'Retort-grade', '1-tonne IBC']],
            ['title_key' => 'prod.s21.t', 'desc_key' => 'prod.s21.d', 'tag' => 'Wax',        'icon' => 'i-factory', 'img' => 'Assets/products/CATEGORY%2004/Paraffin%20%26%20specialty%20wax.png','chips' => ['Slab / pastilles', 'Food-grade', 'FOB / CIF']],
            ['title_key' => 'prod.s22.t', 'desc_key' => 'prod.s22.d', 'tag' => 'Chemicals',  'icon' => 'i-factory', 'img' => 'Assets/products/CATEGORY%2004/Basic%20chemicals.png',         'chips' => ['25kg / 1MT', 'COA on lot', 'Bulk only']],
            ['title_key' => 'prod.s23.t', 'desc_key' => 'prod.s23.d', 'tag' => 'Consumables','icon' => 'i-factory', 'img' => 'Assets/products/CATEGORY%2004/Converting%20consumables.png',  'chips' => ['OEM-grade', 'On-call stock', 'Container loads']],
        ],
    ],
];
