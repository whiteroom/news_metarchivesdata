<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'whiteroom extended news data',
    'description' => 'Extend news by metarchives data',
    'category' => 'fe',
    'author' => 'Daniel Schoeneck',
    'author_email' => '',
    'shy' => '',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'module' => '',
    'state' => 'beta',
    'internal' => '',
    'modify_tables' => 'tx_news_domain_model_news',
    'clearCacheOnLoad' => true,
    'lockType' => '',
    'author_company' => 'whiteroom.ch',
    'version' => '8.5.0',
    'constraints' => array(
        'depends' => array(
            'php' => '7.2.0-7.4.99',
            'typo3' => '9.5.0-10.4.99',
            'news' => '7.3.0-8.5.99',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
    'suggests' => array(),
);