<?php
defined('TYPO3_MODE') or die();


/*
$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['teaser']['config']['cols'] = 60;
$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['bodytext']['config']['cols'] = 60;
*/


$ll = 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:';

$ll_tx_news_metarchivesdata = 'LLL:EXT:news_metarchivesdata/Resources/Private/Language/locallang.xlf:';
$ll_ttc_tx_news_metarchivesdata = 'LLL:EXT:news_metarchivesdata/Resources/Private/Language/locallang_ttc.xlf:';
$ll_db_tx_news_metarchivesdata = 'LLL:EXT:news_metarchivesdata/Resources/Private/Language/locallang_db.xlf:';


$tmp_metarchivesdata = array(
        
    'tx_news_metarchivesdata_subtitle' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_subtitle',
        'config' => [
            'type' => 'input',
            'size' => 40,
        ]
    ],
    'tx_news_metarchivesdata_recordtype' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_recordtype',
        'config' => [
            'type' => 'radio',
            'default' => '',
            'items' => [
                [$ll_db_tx_news_metarchivesdata . 'tx_news_domain_model_news.recordtype.I.0', 0],
                [$ll_db_tx_news_metarchivesdata . 'tx_news_domain_model_news.recordtype.I.1', 1],
                [$ll_db_tx_news_metarchivesdata . 'tx_news_domain_model_news.recordtype.I.2', 2],
                [$ll_db_tx_news_metarchivesdata . 'tx_news_domain_model_news.recordtype.I.3', 3],
            ],
        ]

    ],
    'tx_news_metarchivesdata_recordcollection' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_recordcollection',
        'config' => [
            'type' => 'radio',
            'default' => '',
            'items' => [
                [$ll_db_tx_news_metarchivesdata . 'tx_news_domain_model_news.recordcollection.I.0', 0],
                [$ll_db_tx_news_metarchivesdata . 'tx_news_domain_model_news.recordcollection.I.1', 1],
                [$ll_db_tx_news_metarchivesdata . 'tx_news_domain_model_news.recordcollection.I.2', 2],
            ],
        ]
    ],
    'tx_news_metarchivesdata_recordquarter' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_recordquarter',
        'config' => [
            'type' => 'radio',
            'default' => '',
            'items' => [
                ['Q1', 'Q1'],
                ['Q2', 'Q2'],
                ['Q3', 'Q3'],
                ['Q4', 'Q4'],
                ['Q5', 'Q5'],
                ['Q6', 'Q6'],
                ['Q7', 'Q7'],
                ['Q8', 'Q8'],
            ],
        ]
    ],
    'tx_news_metarchivesdata_recordsubprojects' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_recordsubprojects',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => [
                ['A1', 'A1'],                
                ['A2', 'A2'],                
                ['B1', 'B1'],                
                ['B2', 'B2'],                
                ['C1', 'C1'],                
                ['C2', 'C2'],
            ],
        ]
    ],
    'tx_news_metarchivesdata_recordmanager' => [
        'exclude' => false,
        'label' => $ll_tx_news_metarchivesdata . 'tx_news_domain_model_news.tx_news_metarchivesdata_recordmanager',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => [
                ['UF', 'UF'],                
                ['WL', 'WL'],                
                ['PF', 'PF'],                
                ['DD', 'DD'],                
                ['MF', 'MF'],                
                ['… (alle Teammitglieder)', 'alle Teamitglieder'],
            ],
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
            --palette--;;paletteHidden,
            --palette--;;paletteAccess,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended,'
];







\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $tmp_metarchivesdata);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
 'tx_news_domain_model_news',
 'paletteCollection',
 'tx_news_metarchivesdata_recordcollection,--linebreak--'
);    
    
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
 'tx_news_domain_model_news',
 'paletteTimeframe',
 'tx_news_metarchivesdata_recordquarter'
);    
        
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
 'tx_news_domain_model_news',
 'paletteSubproject',
 'tx_news_metarchivesdata_recordsubprojects'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
 'tx_news_domain_model_news',
 'paletteManager',
 'tx_news_metarchivesdata_recordmanager,--linebreak--,notes'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news', 
    'tx_news_metarchivesdata_subtitle', 
    '', 
    'after:title'
);
    
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news', 
    '--div--;'. $ll_ttc_tx_news_metarchivesdata .'tx_news_domain_model_news.tabs.DDB,tx_news_metarchivesdata_recordtype'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    '--palette--;;paletteCollection,--palette--;;paletteTimeframe,--palette--;;paletteSubproject,--palette--;;paletteManager',
    '',
    'after:tx_news_metarchivesdata_recordtype'
);







