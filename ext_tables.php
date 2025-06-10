<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_pepgallery_domain_model_gallery',
    []
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToInsertRecords('tx_pepgallery_domain_model_gallery');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pepgallery_domain_model_gallery');