<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:payment/Resources/Private/Language/locallang_db.xlf:tx_payment_domain_model_pay',
		'label' => 'money',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'money,name,email,telephone,comment,module,datauid,title,url,ordernumber,payment,certnumber,spreadshareuserid,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('payment') . 'Resources/Public/Icons/tx_payment_domain_model_pay.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, money, name, email, telephone, comment, module, datauid, title, url, ordernumber, payment, certnumber, spreadshareuserid',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, money, name, email, telephone, comment, module, datauid, title, url, ordernumber, payment, certnumber, spreadshareuserid, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
        'crdate' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.creationDate',
            'config' => array(
                'type' => 'input',
                'size' => 5,
                'eval' => 'date',
                'checkbox' => 1,
                'default' => time()
            ),
        ),
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_payment_domain_model_pay',
				'foreign_table_where' => 'AND tx_payment_domain_model_pay.pid=###CURRENT_PID### AND tx_payment_domain_model_pay.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'money' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:payment/Resources/Private/Language/locallang_db.xlf:tx_payment_domain_model_pay.money',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2,required'
			)
		),
		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:payment/Resources/Private/Language/locallang_db.xlf:tx_payment_domain_model_pay.name',
			'config' => array(
                'type' => 'input',
                'size' => 30,
				'eval' => 'trim'
			)
		),
		'email' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:payment/Resources/Private/Language/locallang_db.xlf:tx_payment_domain_model_pay.email',
			'config' => array(
                'type' => 'input',
                'size' => 30,
				'eval' => 'trim'
			)
		),
		'telephone' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:payment/Resources/Private/Language/locallang_db.xlf:tx_payment_domain_model_pay.telephone',
			'config' => array(
                'type' => 'input',
                'size' => 30,
				'eval' => 'trim'
			)
		),
		'comment' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:payment/Resources/Private/Language/locallang_db.xlf:tx_payment_domain_model_pay.comment',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'module' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:payment/Resources/Private/Language/locallang_db.xlf:tx_payment_domain_model_pay.module',
			'config' => array(
                'type' => 'input',
                'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:payment/Resources/Private/Language/locallang_db.xlf:tx_payment_domain_model_pay.title',
			'config' => array(
                'type' => 'input',
                'size' => 30,
				'eval' => 'trim'
			)
		),
		'datauid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:payment/Resources/Private/Language/locallang_db.xlf:tx_payment_domain_model_pay.datauid',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'url' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:payment/Resources/Private/Language/locallang_db.xlf:tx_payment_domain_model_pay.url',
			'config' => array(
                'type' => 'input',
                'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'ordernumber' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:payment/Resources/Private/Language/locallang_db.xlf:tx_payment_domain_model_pay.ordernumber',
			'config' => array(
                'type' => 'input',
                'size' => 30,
				'eval' => 'trim'
			)
		),
		'payment' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:payment/Resources/Private/Language/locallang_db.xlf:tx_payment_domain_model_pay.payment',
			'config' => array(
                'type' => 'input',
                'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'certnumber' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:payment/Resources/Private/Language/locallang_db.xlf:tx_payment_domain_model_pay.certnumber',
			'config' => array(
                'type' => 'input',
                'size' => 30,
				'eval' => 'trim'
			)
		),
		'spreadshareuserid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:payment/Resources/Private/Language/locallang_db.xlf:tx_payment_domain_model_pay.spreadshareuserid',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		
	),
);