<?php
require_once __DIR__ . '/lib/ga.php';

Kirby::plugin('jenstornell/ga', [
    'options' => [
        'id' => false,
        'active' => true,
        'debug' => false,
        'blacklist' => ['127.0.0.1', '::1']
    ],
    'snippets' => [
        'ga' => __DIR__ . '/snippets/ga.php'
    ]
]);