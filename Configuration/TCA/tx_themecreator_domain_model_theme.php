<?php

$generalLanguageFile =
  "EXT:core/Resources/Private/Language/locallang_general.xlf";
$lll = "LLL:EXT:theme_creator/Resources/Private/Language/locallang_db.xlf:";

return [
  "ctrl" => [
    "title" => $lll . "tx_themecreator_domain_model_theme",
    "label" => "name",
    "iconfile" => "EXT:theme_creator/Resources/Public/Icons/tx_themecreator_domain_model_theme.svg",
    "rootLevel" => 1,
  ],
  "types" => [
    "1" => [
      "showitem" => "title,description,sectionstyles,buttonstyles,font"
    ]
  ],
  "columns" => [
    "title" => [
      'l10n_mode' => 'exclude',
      'label' => $lll . "tx_themecreator_domain_model_theme.title",
      'config' => [
          'type' => 'input',
          'size' => 30,
          'eval' => 'trim,required',
          'default' => ''
      ],
    ],
    "description" => [
      'l10n_mode' => 'exclude',
      'label' => $lll . "tx_themecreator_domain_model_theme.description",
      'config' => [
          'type' => 'text',
          "enableRichtext" => true,
          'cols' => 40,
          'rows' => 15,
          'eval' => 'trim',
          'default' => ''
      ],
    ],
    "buttonstyles" => [
      "label" => $lll . "tx_themecreator_domain_model_theme.buttonstyles",
      "config" => [
        "type" => "inline",
        "foreign_table" => "tx_themecreator_domain_model_theme_buttonstyles",
        "foreign_field" => "theme",
        "foreign_sortby" => "sorting",
        "maxitems" => 9999,
        "appearance" => [
          "collapseAll" => 1,
          "expandSingle" => 1,
          "useSortable" => 1,
          "enabledControls" => [
            "dragdrop" => 1,
          ],
        ],
      ],
    ],
    "sectionstyles" => [
      "label" => $lll . "tx_themecreator_domain_model_theme.sectionstyles",
      "config" => [
        "type" => "inline",
        "foreign_table" => "tx_themecreator_domain_model_theme_sectionstyles",
        "foreign_field" => "theme",
        "foreign_sortby" => "sorting",
        "maxitems" => 9999,
        "appearance" => [
          "collapseAll" => 1,
          "expandSingle" => 1,
          "useSortable" => 1,
          "enabledControls" => [
            "dragdrop" => 1,
          ],
        ],
      ],
    ],
    "font" => [
      "label" => $lll . "tx_themecreator_domain_model_theme.font",
      "config" => [
        "type" => "inline",
        "foreign_table" => "tx_themecreator_domain_model_theme_fonts",
        "foreign_field" => "theme",
        "foreign_sortby" => "sorting",
        "maxitems" => 9999,
        "appearance" => [
          "collapseAll" => 1,
          "expandSingle" => 1,
          "useSortable" => 1,
          "enabledControls" => [
            "dragdrop" => 1,
          ],
        ],
      ],
    ],
  ]
];
