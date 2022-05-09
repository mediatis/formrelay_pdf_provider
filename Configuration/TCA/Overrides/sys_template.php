<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'formrelay_pdf_provider',
    'Configuration/TypoScript',
    'FormRelay PDF Data Provider'
);
