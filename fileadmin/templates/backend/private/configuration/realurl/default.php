<?php
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = array (
    '_DEFAULT' => array (
        'init' => array (
            'enableCHashCache' => TRUE,
            'appendMissingSlash' => 'ifNotFile',
            'enableUrlDecodeCache' => TRUE,
            'enableUrlEncodeCache' => TRUE,
            'emptyUrlReturnValue' => \TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('TYPO3_SITE_URL'),
        ),
        'pagePath' => array (
            'type' => 'user',
            'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
            'spaceCharacter' => '-',
            'languageGetVar' => 'L',
            'rootpage_id' => 1
        ),
        'redirects' => array (
        ),
        'preVars' => array (
            '0' => array (
                'GETvar' => 'no_cache',
                'valueMap' => array (
                    'nc' => '1',
                ),
                'noMatch' => 'bypass'
            ),
            '1' => array (
                'GETvar' => 'L',
                'valueMap' => array (
                    'en' => '1',
                ),
                'noMatch' => 'bypass',
            ),
        ),
        'fixedPostVars' => array (
        ),
        'postVarSets' => array (
            '_DEFAULT' => array (
                'page' => array(
                    array(
                        'GETvar' => 'page',
                    ),
                ),
                'news-page' => array(
                    array(
                        'GETvar' => 'tx_news_pi1[@widget_0][currentPage]'
                    )
                ),
                'news-id' => array(
                    array(
                        'GETvar' => 'tx_news_pi1[news]',
                        /*'lookUpTable' => array(
                            'table' => 'tx_news_domain_model_news',
                            'id_field' => 'uid',
                            'alias_field' => 'title',
                            'maxLength' => 50,
                            'useUniqueCache' => 1,
                            'addWhereClause' => ' AND deleted=0',
                            'languageGetVar' => 'L',
                            'languageExceptionUids' => '',
                            'languageField' => 'sys_language_uid',
                            'transOrigPointerField' => 'l10n_parent'
                        )*/
                    )
                ),
                'project' => array(
                    array(
                        'GETvar' => 'tx_donate_donate[action]'
                    ),
                    array(
                        'GETvar' => 'tx_donate_donate[projects]'
                    )
                ),
            ),
        ),
        'fileName' => array (
            'defaultToHTMLsuffixOnPrev' => false,
			'index' => array(
    			'rss.xml' => array(
    					'keyValues' => array(
    						'type' => 100,
    					)
    				),
    			)
        ),
    )
);