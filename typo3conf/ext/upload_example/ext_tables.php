<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Piexample',
	'Upload Example'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Example Extension');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_uploadexample_domain_model_example', 'EXT:upload_example/Resources/Private/Language/locallang_csh_tx_uploadexample_domain_model_example.xlf');

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