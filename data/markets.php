<?php
/**
 * LEEN TRADE — Markets data
 *
 * 2 featured hubs (Lebanon, Cameroon) + 4 active markets (Egypt, Jordan, Saudi Arabia, Ukraine)
 */

return [
    'featured' => [
        [
            'code'    => 'lb',
            'name'    => 'Lebanon',
            'role'    => 'Headquarters',
            'flag'    => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Flag_of_Lebanon.svg/60px-Flag_of_Lebanon.svg.png',
            'img'     => 'Assets/market/Lebanon.png',
            'para'    => 'Our founding market and operational base. From Saida, we coordinate procurement, warehousing, delivery, and B2B distribution across Lebanon and nearby Levantine markets.',
            'bullets' => [
                'Food packaging supply for restaurants, supermarkets, and distributors',
                'Disposable products and jumbo rolls for business buyers',
                'Local delivery and stock coordination',
            ],
            'facts'   => [
                ['Operating since', '2014'],
                ['Main office',     'Saida'],
                ['Coverage',        'Lebanon / Levant'],
            ],
        ],
        [
            'code'    => 'cm',
            'name'    => 'Cameroon',
            'role'    => 'Regional Hub',
            'flag'    => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Flag_of_Cameroon.svg/60px-Flag_of_Cameroon.svg.png',
            'img'     => 'Assets/market/Cameroon.png',
            'para'    => 'Our regional hub in Douala supports distribution into Central and West African business corridors, bridging Mediterranean sourcing with growing African B2B demand.',
            'bullets' => [
                'Container-based supply for distributors and converters',
                'Food packaging and disposables for HoReCa buyers',
                'Cross-border distribution across CEMAC and ECOWAS',
            ],
            'facts'   => [
                ['Active since', '2023'],
                ['Main hub',     'Douala'],
                ['Coverage',     'Central & West Africa'],
            ],
        ],
    ],
    'active' => [
        [
            'code'    => 'eg',
            'name'    => 'Egypt',
            'role'    => 'Sourcing Corridor',
            'flag'    => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Egypt.svg/60px-Flag_of_Egypt.svg.png',
            'img'     => 'Assets/market/Eygpt.png',
            'para'    => 'A primary sourcing corridor connecting Egyptian manufacturers to our wholesale buyers across Lebanon, the Levant, and Cameroon.',
            'bullets' => [
                'Wholesale supply for converters and FMCG distributors',
                'Plastic containers, bags, and disposables',
                'Sea-freight container loads from Alexandria',
            ],
            'facts'   => [
                ['Role', 'Sourcing corridor'],
                ['Port', 'Alexandria'],
                ['Mode', 'Sea freight'],
            ],
        ],
        [
            'code'    => 'jo',
            'name'    => 'Jordan',
            'role'    => 'Trade Partner',
            'flag'    => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Flag_of_Jordan.svg/60px-Flag_of_Jordan.svg.png',
            'img'     => 'Assets/market/Jordan.png',
            'para'    => 'A two-way trade corridor for packaging and disposable supply between Lebanon and Jordan, serving HoReCa and B2B operators.',
            'bullets' => [
                'HoReCa-grade packaging and disposables',
                'Food packaging supply for distributors',
                'Bulk orders into Amman and Aqaba',
            ],
            'facts'   => [
                ['Role',   'Trade partner'],
                ['Cities', 'Amman, Aqaba'],
                ['Mode',   'Land freight'],
            ],
        ],
        [
            'code'    => 'sa',
            'name'    => 'Saudi Arabia',
            'role'    => 'Export Market',
            'flag'    => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Flag_of_Saudi_Arabia.svg/60px-Flag_of_Saudi_Arabia.svg.png',
            'img'     => 'Assets/market/Saudi%20Arabia.png',
            'para'    => 'A key export market for bulk packaging, disposables, and industrial materials supplied to Saudi distributors and B2B buyers in major commercial zones.',
            'bullets' => [
                'Bulk packaging for distributors and supermarkets',
                'Industrial materials for converters and factories',
                'Container-load shipments to major commercial zones',
            ],
            'facts'   => [
                ['Role',  'Export market'],
                ['Zones', 'Riyadh, Jeddah, Dammam'],
                ['Mode',  'Sea or land'],
            ],
        ],
        [
            'code'    => 'ua',
            'name'    => 'Ukraine',
            'role'    => 'Sourcing Corridor',
            'flag'    => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Ukraine.svg/60px-Flag_of_Ukraine.svg.png',
            'img'     => 'Assets/market/Ukraine.png',
            'para'    => 'A sourcing corridor for polymer resins, packaging products, and industrial inputs delivered to our regional manufacturing accounts.',
            'bullets' => [
                'Polymer resins and raw industrial inputs',
                'Converted packaging and substrates',
                'Container shipping to Beirut port',
            ],
            'facts'   => [
                ['Role', 'Sourcing corridor'],
                ['Port', 'Beirut'],
                ['Mode', 'Sea freight'],
            ],
        ],
    ],
];
