<?php

return [
    'production' => false,
    'baseUrl' => '',
    'sponsors' => [
        [
            'image' => '/assets/images/komuna.svg',
            'alt' => 'Komuna e Gostivarit',
        ],
        [
            'image' => '/assets/images/usembskopje.svg',
            'alt' => 'US Embassy Skopje',
        ],
        [
            'image' => '/assets/images/peacecorps.svg',
            'alt' => 'Peace Corps',
        ],
        [
            'image' => '/assets/images/usaid.svg',
            'alt' => 'USAID',
        ],
    ],
    'collections' => [
        'projects' => [
            'path' => 'projects/{filename}',
            'extends' => '_layouts.project',
        ],
    ],
];
