<?php

function getData(): array {
    return [
        'title' => 'Hello World',
        'menu' => [
            'why' => 'Pourquoi vendre ?',
            'activities' => 'Secteurs d’activité',
            'process' => 'Processus',
        ],
        'hero' => [
            'title' => 'MNR Partners, votre agrégateur d\'entreprises.',
            'description' => 'Vendez votre société en toute confiance à un partenaire solide et fiable.',
            'image' => 'https://images.unsplash.com/photo-1462899006636-339e08d1844e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzF8fGNpdHl8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&q=60&w=900',
        ],
        'why' => [
            'title' => 'Pourquoi choisir MNR Partners ?',
            'subtitle' => 'Ce qui nous distingue et vous protège.',
            'items' => [
                [
                    'icon' => 'shield-check',
                    'title' => 'Sécuriser votre projet',
                    'description' => 'Une cession claire, professionnelle et optimisée.',
                ],
                [
                    'icon' => 'trending-up',
                    'title' => 'Valorisation optimisée',
                    'description' => 'Analyse approfondie afin de lui attribuer la meilleure valeur.',
                ],
                [
                    'icon' => 'eye-off',
                    'title' => 'Discrétion & confidentialité',
                    'description' => 'Un processus sur-mesure mené avec tact et respect',
                ],
                [
                    'icon' => 'infinity',
                    'title' => 'Pérennité assurée',
                    'description' => 'Intégration au sein d\'une structure stable, garantissant une transition durable.',
                ],
            ],
        ],
        'sectors' => [
            'title' => 'Nos secteurs cibles',
            'subtitle' => 'MNR Partners s\'intéresse à différents domaines d\'activité.',
            'items' => [
                [
                    'icon' => 'factory',
                    'label' => 'Industrie & production',
                ],
                [
                    'icon' => 'store',
                    'label' => 'Commerce & distribution',
                ],
                [
                    'icon' => 'monitor',
                    'label' => 'Technologies & digital',
                ],
                [
                    'icon' => 'hand-helping',
                    'label' => 'Services',
                ],
                [
                    'icon' => 'plus-circle',
                    'label' => 'Santé & bien-être',
                ],
                [
                    'icon' => 'building',
                    'label' => 'Construction & habitat',
                ],
            ],
        ],
        'process' => [
            'title' => 'Notre approche',
            'subtitle' => 'Un processus d\'acquisition transparent et efficace',
            'steps' => [
                [
                    'image' => 'https://picsum.dev/static/' . rand(1, 1000) . '/200/150',
                    'title' => 'Premier échange',
                    'description' => 'Echange confidentiel et sans engagement.',
                ],
                [
                    'image' => 'https://picsum.dev/static/' . rand(1, 1000) . '/200/150',
                    'title' => 'Etude & valorisation',
                    'description' => 'Analyse approfondie de votre société.',
                ],
                [
                    'image' => 'https://picsum.dev/static/' . rand(1, 1000) . '/200/150',
                    'title' => 'Offre & négociation',
                    'description' => 'Proposition transparente et juste.',
                ],
                [
                    'image' => 'https://picsum.dev/static/' . rand(1, 1000) . '/200/150',
                    'title' => 'Finalisation & accompagnement',
                    'description' => 'Transition fluide et un accompagnement post-cession.',
                ],
            ],
        ],
    ];
}
