<?php

$generalLanguageFile =
  "EXT:core/Resources/Private/Language/locallang_general.xlf";
$lll = "LLL:EXT:theme_creator/Resources/Private/Language/locallang_db.xlf:";

return [
  "ctrl" => [
    "title" => $lll . "tx_themecreator_domain_model_theme_buttonstyles",
    "label" => "class_name",
    "iconfile" => "EXT:theme_creator/Resources/Public/Icons/tx_themecreator_domain_model_theme.svg",
    "rootLevel" => 1,
  ],

  "types" => [
    "1" => [
      "showitem" => "theme, class_name, background_color, color,hover_background_color,hover_color, border_color, hover_border_color"
    ]
  ],
  "columns" => [
    "theme" => [
      'l10n_mode' => 'exclude',
      'label' => $lll . "tx_themecreator_domain_model_theme_buttonstyles.theme",
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'foreign_table' => 'tx_themecreator_domain_model_theme',
        'minitems' => 0,
        'maxitems' => 1,
        'default' => 0,
      ],
    ],
    "class_name" => [
      'l10n_mode' => 'exclude',
      'label' => $lll . "tx_themecreator_domain_model_theme_buttonstyles.class_name",
      'config' => [
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim,required',
        'default' => ''
      ],
    ],
    "background_color" => [
      'l10n_mode' => 'exclude',
      'label' => $lll . "tx_themecreator_domain_model_theme_buttonstyles.background_color",
      'config' => [
        'type' => 'input',
        'renderType' => 'colorpicker',
        'size' => 10,
      ],
    ],
    "color" => [
      'l10n_mode' => 'exclude',
      'label' => $lll . "tx_themecreator_domain_model_theme_buttonstyles.color",
      'config' => [
        'type' => 'input',
        'renderType' => 'colorpicker',
        'size' => 10,
      ],
    ],
    "hover_background_color" => [
      'l10n_mode' => 'exclude',
      'label' => $lll . "tx_themecreator_domain_model_theme_buttonstyles.hover_background_color",
      'config' => [
        'type' => 'input',
        'renderType' => 'colorpicker',
        'size' => 10,
      ],
    ],
    "hover_color" => [
      'l10n_mode' => 'exclude',
      'label' => $lll . "tx_themecreator_domain_model_theme_buttonstyles.hover_color",
      'config' => [
        'type' => 'input',
        'renderType' => 'colorpicker',
        'size' => 10,
      ],
    ],
    "border_color" => [
      'l10n_mode' => 'exclude',
      'label' => $lll . "tx_themecreator_domain_model_theme_buttonstyles.border_color",
      'config' => [
        'type' => 'input',
        'renderType' => 'colorpicker',
        'size' => 10,
      ],
    ],
    "hover_border_color" => [
      'l10n_mode' => 'exclude',
      'label' => $lll . "tx_themecreator_domain_model_theme_buttonstyles.hover_border_color",
      'config' => [
        'type' => 'input',
        'renderType' => 'colorpicker',
        'size' => 10,
      ],
    ]
  ],
];
