<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Theme Creator',
    'description' => 'Create a theme for yet another bootstrap template',
    'category' => 'module',
    'author' => 'Markus Ketterer',
    'author_email' => '4tmestorage@myqnapcloud.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
