<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

return [
    'gallery' => [
        'extensionName' => 'Pepgallery',
        'pluginName' => 'Gallery',
        'title' => 'Gallery Plugin',
        'description' => 'Displays a list of galleries',
        'controllerActions' => [
            'Gallery' => 'list,show',
        ],
        'pluginType' => 'list',
        'cacheableActions' => [
            'Gallery' => 'list,show',
        ],
    ],
];
