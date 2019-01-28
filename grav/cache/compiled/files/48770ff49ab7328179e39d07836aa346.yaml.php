<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/config/site.yaml',
    'modified' => 1548692819,
    'data' => [
        'title' => 'Grav',
        'default_lang' => 'de',
        'author' => [
            'name' => 'Joe Bloggs',
            'email' => 'joe@example.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
