<?php

$generalLanguageFile =
  "EXT:core/Resources/Private/Language/locallang_general.xlf";
$lll = "LLL:EXT:theme_creator/Resources/Private/Language/locallang_db.xlf:";

return [
  "ctrl" => [
    "title" => $lll . "tx_themecreator_domain_model_theme_fonts",
    "label" => "sans_serif",
    "iconfile" => "EXT:theme_creator/Resources/Public/Icons/tx_themecreator_domain_model_theme.svg",
    "rootLevel" => 1,
  ],
  "types" => [
    "1" => [
      "showitem" => "theme, sans_serif, monospace, size, weight, color, background_color, link_color, hover_color"
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
    "sans_serif" => [
      "l10n_mode" => "exclude",
      "label" => $lll . "tx_themecreator_domain_model_theme_fonts.sans_serif",
      'config' => [
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim',
        'default' => ''
      ],
    ],
    "monospace" => [
      "l10n_mode" => "exclude",
      "label" => $lll . "tx_themecreator_domain_model_theme_fonts.monospace",
      'config' => [
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim',
        'default' => ''
      ],
    ],
    "size" => [
      "l10n_mode" => "exclude",
      "label" => $lll . "tx_themecreator_domain_model_theme_fonts.size",
      'config' => [
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim',
        'default' => ''
      ],
    ],
    "weight" => [
      "l10n_mode" => "exclude",
      "label" => $lll . "tx_themecreator_domain_model_theme_fonts.weight",
      'config' => [
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim',
        'default' => ''
      ],
    ],
    "color" => [
      "l10n_mode" => "exclude",
      "label" => $lll . "tx_themecreator_domain_model_theme_fonts.color",
      'config' => [
        'type' => 'input',
        'renderType' => 'colorpicker',
        'size' => 10,
      ],
    ],
    "background_color" => [
      "l10n_mode" => "exclude",
      "label" => $lll . "tx_themecreator_domain_model_theme_fonts.background_color",
      'config' => [
        'type' => 'input',
        'renderType' => 'colorpicker',
        'size' => 10,
      ],
    ],
    "link_color" => [
      "l10n_mode" => "exclude",
      "label" => $lll . "tx_themecreator_domain_model_theme_fonts.link_color",
      'config' => [
        'type' => 'input',
        'renderType' => 'colorpicker',
        'size' => 10,
      ],
    ],
    "hover_color" => [
      "l10n_mode" => "exclude",
      "label" => $lll . "tx_themecreator_domain_model_theme_fonts.hover_color",
      'config' => [
        'type' => 'input',
        'renderType' => 'colorpicker',
        'size' => 10,
      ],
    ]
  ]
];

