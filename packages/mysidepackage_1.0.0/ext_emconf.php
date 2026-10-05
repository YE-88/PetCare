<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'MySidePackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HtlRennweg\\Mysidepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Sujing',
    'author_email' => '2030@htl.rennweg.at',
    'author_company' => 'Htl rennweg',
    'version' => '1.0.0',
];
