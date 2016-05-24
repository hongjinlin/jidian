<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'NGOOS.' . $_EXTKEY,
	'Pay',
	array(
		'Pay' => 'list, show, new, create, edit, update, delete, success, search, certificate',
		
	),
	// non-cacheable actions
	array(
		'Pay' => 'new, create, edit, update, delete, success, search, certificate',
		
	)
);
