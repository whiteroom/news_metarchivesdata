<?php
defined('TYPO3_MODE') or die();

// SLUG extended
$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['path_segment']['config']['generatorOptions']['fields'] =  ['tx_news_metarchivesdata_artist','title'];


/*
$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['teaser']['config']['cols'] = 60;
$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['bodytext']['config']['cols'] = 60;
*/


$ll = 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:';

$ll_tx_news_metarchivesdata = 'LLL:EXT:news_metarchivesdata/Resources/Private/Language/locallang.xlf:';
$ll_ttc_tx_news_metarchivesdata = 'LLL:EXT:news_metarchivesdata/Resources/Private/Language/locallang_ttc.xlf:';
$ll_db_tx_news_metarchivesdata = 'LLL:EXT:news_metarchivesdata/Resources/Private/Language/locallang_db.xlf:';


$tmp_metarchivesdata = array(

    'tx_news_metarchivesdata_uid' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_uid',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'nospace,int,unique',
        ]
    ],
        
    'tx_news_metarchivesdata_title' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_title',
        'config' => [
            'type' => 'input',
            'size' => 40,
        ]
    ],
    
    'tx_news_metarchivesdata_title_alternative' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_title_alternative',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ]
    ],
    'tx_news_metarchivesdata_artist' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_artist',
        'config' => [
            'type' => 'input',
            'size' => 60,
            'eval' => 'trim',
        ]
    ],
    'tx_news_metarchivesdata_artist_index' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_artist_index',
        'config' => [
            'type' => 'input',
            'size' => 5,
            'eval' => 'nospace,int,unique',
        ],
    ],
    'tx_news_metarchivesdata_artist_name' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_artist_name',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ]
    ],
    'tx_news_metarchivesdata_artist_vorname' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_artist_vorname',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ]
    ],
    'tx_news_metarchivesdata_auflage' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_auflage',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ]
    ],
    'tx_news_metarchivesdata_format' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_format',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ]
    ],
    'tx_news_metarchivesdata_jahr' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_jahr',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ]
    ],
    'tx_news_metarchivesdata_technik' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_technik',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ]
    ],
    'tx_news_metarchivesdata_codezeile' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_codezeile',
        'config' => [
            'type' => 'input',
            'size' => 40,
            'eval' => 'nospace,alphanum_x,lower,unique',
        ],
    ],
    'tx_news_metarchivesdata_recordtext' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_recordtext',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['', ''],
                [$ll_db_tx_news_metarchivesdata . 'tx_news_domain_model_news.type.I.0', 'Edition der Galerie'],
                [$ll_db_tx_news_metarchivesdata . 'tx_news_domain_model_news.type.I.1', 'Eigentum des Künstlers'],
                [$ll_db_tx_news_metarchivesdata . 'tx_news_domain_model_news.type.I.2', 'Werk im Besitz der Galerie'],
                [$ll_db_tx_news_metarchivesdata . 'tx_news_domain_model_news.type.I.3', 'Eigentum Kunden'],
                [$ll_db_tx_news_metarchivesdata . 'tx_news_domain_model_news.type.I.4', 'Eigentum Hans Schoeneck'],
                [$ll_db_tx_news_metarchivesdata . 'tx_news_domain_model_news.type.I.5', 'Eigentum Beat Schoeneck'],
            ],
            'fieldWizard' => [
                'selectIcons' => [
                    'disabled' => false,
                ],
            ],
            'size' => 1,
            'maxitems' => 1,
        ]
    ],
    'tx_news_metarchivesdata_recordcode' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_recordcode',
        'config' => [
            'type' => 'input',
            'size' => 5,
            'eval' => 'nospace,upper,alphanum',
        ],
    ],
    'tx_news_metarchivesdata_erfassung' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_erfassung',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim',
        ],
    ],
    'tx_news_metarchivesdata_geprueft' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_geprueft',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim',
        ],
    ],    
    'tx_news_metarchivesdata_disponibel' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_disponibel',
        'config' => [
            'type' => 'check',
            'default' => 1,
        ]
    ],
    'tx_news_metarchivesdata_technikcode' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_technikcode',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'nospace,alphanum',
        ],
    ],
    'tx_news_metarchivesdata_verkauft' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_verkauft',
        'config' => [
            'type' => 'check',
            'default' => 0,
        ]
    ],
    'tx_news_metarchivesdata_standort' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_standort',
        'config' => [
            'type' => 'input',
            'size' => 60,
        ]
    ],
    'tx_news_metarchivesdata_verkaeufer' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_verkaeufer',
        'config' => [
            'type' => 'input',
            'size' => 30,
        ]
    ],
    'tx_news_metarchivesdata_verkaeufernummer' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_verkaeufernummer',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'int',
        ],
    ],
    'tx_news_metarchivesdata_einkaufspreis' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_einkaufspreis',
        'config' => [
            'type' => 'input',
            'size' => 5,
            'eval' => 'double2',
        ],
    ],
    'tx_news_metarchivesdata_verkaufspreis' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_verkaufspreis',
        'config' => [
            'type' => 'input',
            'size' => 5,
            'eval' => 'double2',
        ],
    ],
    'tx_news_metarchivesdata_rahmenpreis' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_rahmenpreis',
        'config' => [
            'type' => 'input',
            'size' => 5,
            'eval' => 'double2',
        ],
    ],
    'tx_news_metarchivesdata_totalpreis' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_totalpreis',
        'config' => [
            'type' => 'input',
            'size' => 5,
            'eval' => 'double2',
        ],
    ],
    'tx_news_metarchivesdata_notes' => [
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_notes',
        'config' => [
            'type' => 'text',
            'rows' => 10,
            'cols' => 48,
        ]
    ],
    'tx_news_metarchivesdata_import' => [
        'exclude' => true,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_import',
        'config' => [
            'type' => 'check',
            'default' => 1,
        ]
    ],
);


$GLOBALS['TCA']['tx_news_domain_model_news']['types']['0'] = [
    'showitem' => '
            --palette--;;paletteCore,title,--palette--;;paletteSlug,teaser,bodytext,
            --palette--;;paletteDate,
        --div--;' . $ll . 'tx_news_domain_model_news.content_elements,
            content_elements,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
            fal_media,fal_related_files,
        --div--;' . $ll . 'tx_news_domain_model_news.tabs.relations,
            categories,tags,related_links,
            related,related_from,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,
            --palette--;' . $ll . 'tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;paletteLanguage,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            notes,
            --palette--;;paletteHidden,
            --palette--;;paletteAccess,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended,'
];







\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tmp_metarchivesdata);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
 'tx_news_domain_model_news',
 'paletteArtwork',
 'tx_news_metarchivesdata_title_alternative,--linebreak--,tx_news_metarchivesdata_auflage,tx_news_metarchivesdata_format,tx_news_metarchivesdata_jahr,--linebreak--,tx_news_metarchivesdata_technik,tx_news_metarchivesdata_technikcode,tx_news_metarchivesdata_disponibel,tx_news_metarchivesdata_verkauft'
);    
    
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
 'tx_news_domain_model_news',
 'paletteArtist',
 'tx_news_metarchivesdata_artist,tx_news_metarchivesdata_artist_index,--linebreak--,tx_news_metarchivesdata_artist_vorname,tx_news_metarchivesdata_artist_name'
);    
        
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
 'tx_news_domain_model_news',
 'paletteCharacteristic',
 'tx_news_metarchivesdata_standort,tx_news_metarchivesdata_geprueft,tx_news_metarchivesdata_erfassung,,--linebreak--,tx_news_metarchivesdata_codezeile'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
 'tx_news_domain_model_news',
 'paletteProperty',
 'tx_news_metarchivesdata_recordtext,tx_news_metarchivesdata_recordcode,--linebreak--,tx_news_metarchivesdata_verkaeufer,tx_news_metarchivesdata_verkaeufernummer,--linebreak--,tx_news_metarchivesdata_einkaufspreis,tx_news_metarchivesdata_verkaufspreis,tx_news_metarchivesdata_rahmenpreis,tx_news_metarchivesdata_totalpreis'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
 'tx_news_domain_model_news',
 'paletteNotes',
 'tx_news_metarchivesdata_notes,--linebreak--,tx_news_metarchivesdata_import'
);



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news', 
    'tx_news_metarchivesdata_uid', 
    '', 
    'before:title'
);
    
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news', 
    '--div--;'. $ll_ttc_tx_news_metarchivesdata .'tx_news_domain_model_news.tabs.DDB,tx_news_metarchivesdata_subtitle'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    '--palette--;;paletteArtwork,--palette--;;paletteArtist,--palette--;;paletteCharacteristic,--palette--;;paletteProperty,,--palette--;;paletteNotes',
    '',
    'after:tx_news_metarchivesdata_title'
);







