<?php


/**
 * Definitions for modules provided by EXT:examples
 */

use BokuNo\ThemeCreator\Controller\ThemeController;

return [
  'themeCreator' => [
      'parent' => 'site',
      'position' => "bottom",
      'access' => 'admin',
      'workspaces' => '*',
      'labels' => 'LLL:EXT:theme_creator/Resources/Private/Language/Theme.xlf',
      'extensionName' => 'ThemeCreator',
      'controllerActions' => [
        ThemeController::class => [
            'list', 'new','create', 'edit', 'update','delete'
        ],
    ],
  ],

];
