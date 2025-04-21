<?php
defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

(static function (string $extensionKey) {
    // Require 3rd-party libraries, in case TYPO3 does not run in composer mode
    if (!Environment::isComposerMode()) {
        $pharFileName =
            ExtensionManagementUtility::extPath($extensionKey) .
            'Libraries/phpoffice-phpspreadsheet.phar';

        if (is_file($pharFileName)) {
            @include 'phar://' . $pharFileName . '/vendor/autoload.php';
        }
    }
})('base_excel');
