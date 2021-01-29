<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'news_metarchivesdata';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="DIR:EXT:news_metarchivesdata/Configuration/TSconfig/Ext/News" extensions="t3s">');



# allow custom translations for tx_news 
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:news/Resources/Private/Language/locallang_be.xlf'][] = 'EXT:news_metarchivesdata/Resources/Private/Language/Overrides/News/de.locallang_be.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:news/Resources/Private/Language/locallang_csh_flexforms.xlf'][] = 'EXT:news_metarchivesdata/Resources/Private/Language/Overrides/News/de.locallang_csh_flexforms.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:news/Resources/Private/Language/locallang_db.xlf'][] = 'EXT:news_metarchivesdata/Resources/Private/Language/Overrides/News/de.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:news/Resources/Private/Language/locallang_modadministration.xlf'][] = 'EXT:news_metarchivesdata/Resources/Private/Language/Overrides/News/de.locallang_modadministration.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:news/Resources/Private/Language/locallang.xlf'][] = 'EXT:news_metarchivesdata/Resources/Private/Language/Overrides/News/de.locallang.xlf';

