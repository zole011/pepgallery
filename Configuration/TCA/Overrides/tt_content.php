<?php

defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'Gallery Plugin', // Naziv koji se prikazuje u listi
        'pepgallery_gallery', // Plugin signature
        'EXT:pepgallery/Resources/Public/Icons/gallery.svg' // Ikonica (opciono)
    ],
    'list_type',
    'pepgallery'
);
