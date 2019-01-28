<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/plugins/shortcode-assets/blueprints.yaml',
    'modified' => 1548692562,
    'data' => [
        'name' => 'Shortcode Assets',
        'version' => '1.0.2',
        'description' => 'Easily add page-level CSS and JS assets via shortcode tags',
        'icon' => 'plug',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-shortcode-assets',
        'keywords' => 'grav, plugin, etc',
        'bugs' => 'https://github.com/getgrav/grav-plugin-shortcode-assets/issues',
        'docs' => 'https://github.com/getgrav/grav-plugin-shortcode-assets/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'shortcode-core'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
