<?php

return [
    [
        'title'  => 'about',
        'href'   => '#about',
        'scroll' => 'about',
    ],

    [
        'title'  => 'roadmap',
        'href'   => '#roadmap',
        'scroll' => 'roadmap',
    ],

    [
        'title'  => 'team',
        'href'   => '#team',
        'scroll' => 'team',
    ],

    [
        'title'  => 'faq',
        'href'   => '#faq',
        'scroll' => 'faq',
    ],

    [
        'title'    => 'documents',
        'href'     => '#',
        'children' => [
            0 => [
                'title'  => 'whitepaper',
                'href'   => '/documents/whitepaper.pdf',
                'target' => '_blank',
            ],

            1 => [
                'title'  => 'another-document',
                'href'   => '/documents/whitepaper.pdf',
                'target' => '_blank',
            ]
        ],
    ],

    [
        'title'    => 'more',
        'href'     => '#',
        'children' => [
            0 => [
                'title'  => 'mission',
                'href'   => '#mission',
                'scroll' => 'mission',
            ],

            1 => [
                'title'  => 'facts',
                'href'   => '#numbers',
                'scroll' => 'numbers',
            ],

            2 => [
                'title'  => 'token-allocation',
                'href'   => '#token-allocation',
                'scroll' => 'token-allocation',
            ],

            3 => [
                'title'  => 'ico',
                'href'   => '#ico',
                'scroll' => 'ico',
            ],

            4 => [
                'title'  => 'advisors',
                'href'   => '#advisors',
                'scroll' => 'advisors',
            ]
        ],
    ],
];
