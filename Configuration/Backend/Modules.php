<?php


/**
 * Definitions for modules provided by EXT:examples
 */

use BokuNo\ThemeCreator\Controller\ThemeController;

return [
  'yabt' => [
      'parent' => 'site',
      'position' => "bottom",
      'access' => 'admin',
      'workspaces' => '*',
      'labels' => 'LLL:EXT:theme_creator/Resources/Private/Language/Theme.xlf',
      'extensionName' => 'YetAnotherBootstrapTemplate',
      'routes' => [
        '_default' => [
          'target' => ThemeController::class
        ]
      ],
  ],

];
