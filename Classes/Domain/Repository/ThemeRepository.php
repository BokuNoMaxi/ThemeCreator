<?php
namespace BokuNo\ThemeCreator\Domain\Repository;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

class ThemeRepository extends Repository
{
  // Themes backend module should have global access to data
  public function initializeObject(): void
  {
      $querySettings = GeneralUtility::makeInstance(
          Typo3QuerySettings::class
      );
      $querySettings->setRespectStoragePage(false);
      $this->setDefaultQuerySettings($querySettings);
  }
}
