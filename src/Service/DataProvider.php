<?php

namespace App\Service;

class DataProvider
{
    public function getHomeData(): array
    {
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
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2670',
            ],
            'why' => [
                'title' => 'Pourquoi choisir MNR Partners ?',
                'subtitle' => 'Ce qui nous distingue et vous protège.',
                'items' => [
                    [
                        'icon' => 'lucide:shield-check',
                        'title' => 'Sécuriser votre projet',
                        'description' => 'Une cession claire, professionnelle et optimisée.',
                    ],
                    [
                        'icon' => 'lucide:trending-up',
                        'title' => 'Valorisation optimisée',
                        'description' => 'Analyse approfondie afin de lui attribuer la meilleure valeur.',
                    ],
                    [
                        'icon' => 'lucide:eye-off',
                        'title' => 'Discrétion & confidentialité',
                        'description' => 'Un processus sur-mesure mené avec tact et respect',
                    ],
                    [
                        'icon' => 'lucide:infinity',
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
                        'icon' => 'lucide:factory',
                        'label' => 'Industrie & production',
                    ],
                    [
                        'icon' => 'lucide:store',
                        'label' => 'Commerce & distribution',
                    ],
                    [
                        'icon' => 'lucide:monitor',
                        'label' => 'Technologies & digital',
                    ],
                    [
                        'icon' => 'lucide:hand-helping',
                        'label' => 'Services',
                    ],
                    [
                        'icon' => 'lucide:plus-circle',
                        'label' => 'Santé & bien-être',
                    ],
                    [
                        'icon' => 'lucide:building',
                        'label' => 'Construction & habitat',
                    ],
                ],
            ],
            'process' => [
                'title' => 'Notre approche',
                'subtitle' => 'Un processus d\'acquisition transparent et efficace',
                'steps' => [
                    [
                        'image' => 'https://placehold.co/400',
                        'title' => 'Premier échange',
                        'description' => 'Echange confidentiel et sans engagement.',
                    ],
                    [
                        'image' => 'https://placehold.co/400',
                        'title' => 'Etude & valorisation',
                        'description' => 'Analyse approfondie de votre société.',
                    ],
                    [
                        'image' => 'https://placehold.co/400',
                        'title' => 'Offre & négociation',
                        'description' => 'Proposition transparente et juste.',
                    ],
                    [
                        'image' => 'https://placehold.co/400',
                        'title' => 'Finalisation & accompagnement',
                        'description' => 'Transition fluide et un accompagnement post-cession.',
                    ],
                ],
            ],
        ];
    }
}
