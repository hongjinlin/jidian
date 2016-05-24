<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'NGOOS.' . $_EXTKEY,
	'Set',
	array(
		'Config' => 'index,update',
		
	),
	// non-cacheable actions
	array(
		'Config' => 'index,update',
		
	)
);