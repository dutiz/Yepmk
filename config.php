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
            'image' => '/assets/images/sponsors/komuna.jpg',
            'image_lg' => '/assets/images/sponsors/komuna@2x.jpg',
            'alt' => 'Komuna e Gostivarit',
        ],
        [
            'image' => '/assets/images/sponsors/usembskopje.jpg',
            'image_lg' => '/assets/images/sponsors/usembskopje@2x.jpg',
            'alt' => 'US Embassy Skopje',
        ],
        [
            'image' => '/assets/images/sponsors/peacecorps.jpg',
            'image_lg' => '/assets/images/sponsors/peacecorps@2x.jpg',
            'alt' => 'Peace Corps',
        ],
        [
            'image' => '/assets/images/sponsors/usaid.jpg',
            'image_lg' => '/assets/images/sponsors/usaid@2x.jpg',
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
