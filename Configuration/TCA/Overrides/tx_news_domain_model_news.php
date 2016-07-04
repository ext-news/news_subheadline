<?php
defined('TYPO3_MODE') or die();

$fields = array(
    'tx_news_subheadline' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:news_subheadline/Resources/Private/Language/locallang.xlf:tx_news_domain_model_news.tx_news_subheadline',
        'config' => array(
            'type' => 'input',
            'size' => 30,
        )
    )
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'tx_news_subheadline', '', 'after:title');

