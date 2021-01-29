<?php
defined('TYPO3_MODE') || die();

(function () {

	// extend the sorting options of the news extension in TYPO3
	// Labels go to overrides > locallang_be.xlf
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['orderByNews'] .= ',tx_news_metarchivesdata_subtitle,tx_news_metarchivesdata_recordtype,tx_news_metarchivesdata_recordquarter,tx_news_metarchivesdata_recordsubprojects,tx_news_metarchivesdata_recordmanager';
})();