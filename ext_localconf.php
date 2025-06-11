<?php
defined('TYPO3') or die();

call_user_func(function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Pepgallery',
        'Gallery',
        [
            \Gmbit\Pepgallery\Controller\GalleryController::class => 'list,show',
        ],
        [
            \Gmbit\Pepgallery\Controller\GalleryController::class => 'list,show',
        ]
    );
});


