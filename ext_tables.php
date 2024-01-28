<?php
defined("TYPO3") || die();

(static function () {
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
    "tx_themecreator_domain_model_theme"
  );
})();
