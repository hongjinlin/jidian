<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Set',
	'Site configuration'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Site configuration');


//pages
$tempColumns = array(
    'icon' => array (
        'exclude' => 1,
        'label' => '菜单图标',
        'config' => array (
            'type' => 'input',
            'size' => 5,
            'eval' => 'trim',
            'default' => 'fa-dot-circle-o'
        )
    ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages',$tempColumns,1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages','icon');