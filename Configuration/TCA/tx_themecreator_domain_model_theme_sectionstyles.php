<?php

$generalLanguageFile =
  "EXT:core/Resources/Private/Language/locallang_general.xlf";
$lll = "LLL:EXT:theme_creator/Resources/Private/Language/locallang_db.xlf:";

return [
  "ctrl" => [
    "title" => $lll . "tx_themecreator_domain_model_theme_sectionstyles",
    "label" => "container",
    "iconfile" => "EXT:theme_creator/Resources/Public/Icons/tx_themecreator_domain_model_theme.svg",
    "rootLevel" => 1,
  ],
  "types" => [
    "1" => [
      "showitem" => "theme, container, spacings"
    ]
  ],
  "columns" => [
    "theme" => [
      "l10n_mode" => "exclude",
      "label" => $lll . "tx_themecreator_domain_model_theme_sectionstyles.theme",
      "config" => [
        "type" => "select",
        "renderType" => "selectSingle",
        "foreign_table" => "tx_themecreator_domain_model_theme",
        "minitems" => 0,
        "maxitems" => 1,
        "default" => 0,
      ],
    ],
    "container" => [
      "l10n_mode" => "exclude",
      "label" => $lll . "tx_themecreator_domain_model_theme_sectionstyles.container",
      'config' => [
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim,required',
        'default' => ''
      ],
    ],
    "spacings" => [
      "l10n_mode" => "exclude",
      "label" => $lll . "tx_themecreator_domain_model_theme_sectionstyles.spacings",
      "config" => [
        "type" => "select",
        "renderType" => "selectMultipleSideBySide",
        "foreign_table" => "tx_themecreator_domain_model_theme_spacing",
        "MM" => "tx_themecreator_theme_sectionstyles_spacing_mm",
        "MM_opposite_field" => "sectionstyles",
        "MM_match_fields" => [
          "tablenames" => "tx_themecreator_domain_model_theme_sectionstyles",
        ],
        "minitems" => 0,
        "maxitems" => 9999,
        "default" => 0,
      ],
    ],
  ]
];
