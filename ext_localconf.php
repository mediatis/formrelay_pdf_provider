<?php

if (!defined('TYPO3')) {
    die('Access denied.');
}

(function () {
    // relay initalization
    \Mediatis\Formrelay\Utility\RegistrationUtility::registerInitialization(\Mediatis\FormrelayPdfProvider\Initialization::class);
})();
