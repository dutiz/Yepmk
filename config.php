<?php

return [
    'production' => false,
    'baseUrl' => '',
    'values' => [
        [
            'title' => 'Mission',
            'image' => '/assets/images/mission.png',
            'desc' => 'Encouraging youth empowerment and potential fulfillment through different activities',
        ],
        [
            'title' => 'Vision',
            'image' => '/assets/images/vision.png',
            'desc' => 'Intellectually Empowered Youth',
        ],
        [
            'title' => 'Goal',
            'image' => '/assets/images/goal.png',
            'desc' => 'Lorem ipsum dolore sit amet',
        ],
    ],
    'impact' => [
        [
            'number' => '20',
            'title' => 'projects completed',
        ],
        [
            'number' => '120',
            'title' => 'volunteers',
        ],
        [
            'number' => '400',
            'title' => 'events hosted',
        ],
        [
            'number' => '500',
            'title' => 'community time',
        ],
    ],
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
