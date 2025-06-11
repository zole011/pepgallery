<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Pepgallery',
    'description' => 'Simple gallery extension',
    'category' => 'plugin',
    'author' => 'Gmbit',
    'author_email' => 'info@gmbit.com',
    'state' => 'beta',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-13.4.99',
        ],
    ],
];