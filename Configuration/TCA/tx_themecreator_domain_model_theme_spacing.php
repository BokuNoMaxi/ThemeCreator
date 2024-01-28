<?php

$generalLanguageFile =
  "EXT:core/Resources/Private/Language/locallang_general.xlf";
$lll = "LLL:EXT:theme_creator/Resources/Private/Language/locallang_db.xlf:";

return [
  'ctrl' => [
    'title' => $lll . 'tx_themecreator_domain_model_theme_spacing',
    'label' => 'type',
    'iconfile' => 'EXT:theme_creator/Resources/Public/Icons/tx_themecreator_domain_model_theme_spacing.svg',
    "rootLevel" => 1,

  ],

  'types' => [
    '1' => ['showitem' => 'type,top,right,bottom,left,horizontal,vertical,sectionstyles'],
  ],
  'columns' => [
    'type' => [
      'l10n_mode' => 'exclude',
      'label' => $lll . 'tx_themecreator_domain_model_theme_spacing.type',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          [$lll . 'tx_themecreator_domain_model_theme_spacing.type.0', 0],
          [$lll . 'tx_themecreator_domain_model_theme_spacing.type.1', 1],
          [$lll . 'tx_themecreator_domain_model_theme_spacing.type.2', 2],
        ],
      ]
    ],
    'top' => [
      'l10n_mode' => 'exclude',
      'label' => $lll . 'tx_themecreator_domain_model_theme_spacing.top',
      'config' => [
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim',
        'default' => ''
      ],
    ],
    'right' => [
      'l10n_mode' => 'exclude',
      'label' => $lll . 'tx_themecreator_domain_model_theme_spacing.right',
      'config' => [
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim',
        'default' => ''
      ],
    ],
    'bottom' => [
      'l10n_mode' => 'exclude',
      'label' => $lll . 'tx_themecreator_domain_model_theme_spacing.bottom',
      'config' => [
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim',
        'default' => ''
      ],
    ],
    'left' => [
      'l10n_mode' => 'exclude',
      'label' => $lll . 'tx_themecreator_domain_model_theme_spacing.left',
      'config' => [
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim',
        'default' => ''
      ],
    ],
    'horizontal' => [
      'l10n_mode' => 'exclude',
      'label' => $lll . 'tx_themecreator_domain_model_theme_spacing.horizontal',
      'config' => [
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim',
        'default' => ''
      ],
    ],
    'vertical' => [
      'l10n_mode' => 'exclude',
      'label' => $lll . 'tx_themecreator_domain_model_theme_spacing.vertical',
      'config' => [
        'type' => 'input',
        'size' => 30,
        'eval' => 'trim',
        'default' => ''
      ],
    ],
    'sectionstyles' => [
      'l10n_mode' => 'exclude',
      'label' => $lll . 'tx_themecreator_domain_model_theme_spacing.sectionstyles',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectMultipleSideBySide',
        'foreign_table' => 'tx_themecreator_domain_model_theme_sectionstyles',
        'MM' => 'tx_themecreator_theme_sectionstyles_spacing_mm',
        'MM_opposite_field' => 'spacings',
        'MM_match_fields' => [
          'tablenames' => 'tx_themecreator_domain_model_theme_spacing',
        ],
        'minitems' => 0,
        'maxitems' => 9999,
        'default' => 0,
      ],
    ],
  ],
];
