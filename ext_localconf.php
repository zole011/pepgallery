<?php
defined('TYPO3') or die();

call_user_func(function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Gmbit.Pepgallery',
        'Gallery',
        [
            \Gmbit\Pepgallery\Controller\GalleryController::class => 'list,show',
        ],
        // non-cacheable actions
        [
            \Gmbit\Pepgallery\Controller\GalleryController::class => 'list,show',
        ]
    );
});