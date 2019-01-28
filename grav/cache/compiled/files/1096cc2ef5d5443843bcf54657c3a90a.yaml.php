<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/themes/webrevo_theme/blueprints.yaml',
    'modified' => 1548636846,
    'data' => [
        'name' => 'Webrevo Theme',
        'version' => '0.0.1',
        'description' => '',
        'icon' => '',
        'author' => [
            'name' => 'Arash Saffari.com',
            'email' => 'arash@Saffari.com',
            'url' => 'http://webrevo.de'
        ],
        'homepage' => 'http://webrevo.de',
        'demo' => NULL,
        'keywords' => 'webrevo, theme, core, modern, fast, responsive, html5, css3, bootstrap 4, jQuery',
        'bugs' => NULL,
        'license' => NULL,
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
