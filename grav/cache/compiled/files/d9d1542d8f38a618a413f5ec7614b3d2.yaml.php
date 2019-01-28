<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/arashsaffari/Datein/Web Server/htdocs/html5_bootstrap/grav/user/config/plugins/email.yaml',
    'modified' => 1548716916,
    'data' => [
        'enabled' => true,
        'from' => 'arash@saffari.com',
        'to' => 'arash@saffari.com',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.googlemail.com',
                'port' => 587,
                'encryption' => 'tls',
                'user' => 'arash@saffari.com',
                'password' => '80%wait'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
