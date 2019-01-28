<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/sitemap/blueprints/sitemap.yaml',
    'modified' => 1548692786,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'options' => [
                            'type' => 'tab',
                            'fields' => [
                                'sitemap' => [
                                    'type' => 'section',
                                    'title' => 'Sitemap',
                                    'underline' => true,
                                    'fields' => [
                                        'header.sitemap.changefreq' => [
                                            'type' => 'select',
                                            'label' => 'Sitemap change frequency',
                                            'default' => '',
                                            'options' => [
                                                '' => 'Use Global',
                                                'always' => 'Always',
                                                'hourly' => 'Hourly',
                                                'daily' => 'Daily',
                                                'weekly' => 'Weekly',
                                                'monthly' => 'Monthly',
                                                'yearly' => 'Yearly',
                                                'never' => 'Never'
                                            ]
                                        ],
                                        'header.sitemap.priority' => [
                                            'type' => 'select',
                                            'label' => 'Sitemap Priority',
                                            'default' => '',
                                            'options' => [
                                                '' => 'Use Global',
                                                '0.1' => 0.1000000000000000055511151231257827021181583404541015625,
                                                '0.2' => 0.200000000000000011102230246251565404236316680908203125,
                                                '0.3' => 0.299999999999999988897769753748434595763683319091796875,
                                                '0.4' => 0.40000000000000002220446049250313080847263336181640625,
                                                '0.5' => 0.5,
                                                '0.6' => 0.59999999999999997779553950749686919152736663818359375,
                                                '0.7' => 0.6999999999999999555910790149937383830547332763671875,
                                                '0.8' => 0.8000000000000000444089209850062616169452667236328125,
                                                '0.9' => 0.90000000000000002220446049250313080847263336181640625,
                                                '1.0' => 1.0
                                            ],
                                            'validate' => [
                                                'type' => 'float'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
