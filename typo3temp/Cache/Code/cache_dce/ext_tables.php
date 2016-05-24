<?php

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
	0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce_long',
	1 => '--div--'
);



	///////////////////////////////////////////////////// uid: 13 ///
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ArminVieweg.dce',
	'dceuid13',
	'文字+视频'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid13'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid13'] = '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet0><ROOT><TCEforms><sheetTitle>LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab</sheetTitle></TCEforms><type>array</type><el><settings.title><TCEforms><label>标题</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></settings.title><settings.url><TCEforms><label>视频地址[mp4]</label><config><type>input</type><size>30</size><eval>trim,required</eval><default></default><wizards type="array"><link type="array"><type>popup</type><title>LLL:EXT:cms/locallang_ttc.xml:media.browseUrlTitle</title><icon>link_popup.gif</icon><module type="array"><name>wizard_element_browser</name><urlParameters type="array"><mode>wizard</mode><act>file|url</act></urlParameters></module><params type="array"><blindLinkOptions>page,folder,mail,spec</blindLinkOptions><allowedExtensions>mov,mpg,mp4,m4a,m4v,ogg,ogv,swf,webm</allowedExtensions></params><JSopenParams>height=300,width=500,status=0,menubar=0,scrollbars=1</JSopenParams></link></wizards></config></TCEforms></settings.url><settings.previewurl><TCEforms><label>视频预览图</label><config><type>input</type><size>30</size><eval>trim,required</eval><default></default><wizards type="array"><link type="array"><type>popup</type><title>LLL:EXT:cms/locallang_ttc.xml:media.browseUrlTitle</title><icon>link_popup.gif</icon><module type="array"><name>wizard_element_browser</name><urlParameters type="array"><mode>wizard</mode><act>file|url</act></urlParameters></module><params type="array"><blindLinkOptions>page,folder,mail,spec</blindLinkOptions><allowedExtensions>jpg,jpeg,png,gif</allowedExtensions></params><JSopenParams>height=300,width=500,status=0,menubar=0,scrollbars=1</JSopenParams></link></wizards></config></TCEforms></settings.previewurl><settings.description><TCEforms><label>描述[可为空]</label><config><type>text</type><rows>5</rows><cols>30</cols><eval>trim</eval></config><defaultExtras>richtext[]:rte_transform[mode=ts_css]</defaultExtras></TCEforms></settings.description></el></ROOT></sheet0></sheets></T3DataStructure>';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid13']['showitem'] = 'CType,--palette--;;dce_palette_13,pi_flexform; ;,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_13']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_13']['showitem'] = 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, hidden';



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.dce.elements.dce_dceuid13 {
	    icon = EXT:frontend/Resources/Public/Icons/ContentElementWizard/regular_text
	    title = 文字+视频
	    description = 
	    tt_content_defValues {
	        CType = dce_dceuid13
	    }
	}
	    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_dceuid13)
');




	///////////////////////////////////////////////////// uid: 12 ///
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ArminVieweg.dce',
	'dceuid12',
	'百度地图'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid12'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid12'] = '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet0><ROOT><TCEforms><sheetTitle>LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab</sheetTitle></TCEforms><type>array</type><el><settings.module><TCEforms><label>百度地图</label><config><type>none</type><size>5</size><default>百度地图</default></config></TCEforms></settings.module><settings.addresses><title>地址数据</title><tx_templavoila><title>地址数据</title></tx_templavoila><section>1</section><type>array</type><el><container_addresses><type>array</type><title>地址</title><tx_templavoila><title>地址</title></tx_templavoila><el><title><TCEforms><label>标题</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></title><description><TCEforms><label>描述</label><config><type>text</type><rows>5</rows><cols>30</cols><eval>trim,required</eval></config></TCEforms></description><address><TCEforms><label>详细地址</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></address></el></container_addresses></el></settings.addresses></el></ROOT></sheet0></sheets></T3DataStructure>';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid12']['showitem'] = 'CType,--palette--;;dce_palette_12,pi_flexform; ;,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_12']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_12']['showitem'] = 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, hidden';



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.dce.elements.dce_dceuid12 {
	    icon = EXT:frontend/Resources/Public/Icons/ContentElementWizard/regular_text
	    title = 百度地图
	    description = 
	    tt_content_defValues {
	        CType = dce_dceuid12
	    }
	}
	    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_dceuid12)
');




	///////////////////////////////////////////////////// uid: 11 ///
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ArminVieweg.dce',
	'dceuid11',
	'SERVICE'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid11'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid11'] = '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet0><ROOT><TCEforms><sheetTitle>LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab</sheetTitle></TCEforms><type>array</type><el><settings.service><TCEforms><label>服务</label><config><type>none</type><size>5</size><default>服务SERVICE</default></config></TCEforms></settings.service><settings.list><title>列表</title><tx_templavoila><title>列表</title></tx_templavoila><section>1</section><type>array</type><el><container_list><type>array</type><title>名称</title><tx_templavoila><title>名称</title></tx_templavoila><el><title><TCEforms><label>标题</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></title><link><TCEforms><label>链接</label><config><type>input</type><size>30</size><eval>trim</eval><softref>typolink,typolink_tag,images,url</softref><wizards><_PADDING>2</_PADDING><link><type>popup</type><title>Link</title><module><name>wizard_element_browser</name><urlParameters><mode>wizard</mode></urlParameters></module><icon>link_popup.gif</icon><script>browse_links.php?mode=wizard</script><params><!--<blindLinkOptions>page,file,folder,url,spec</blindLinkOptions>--></params><JSopenParams>height=500,width=500,status=0,menubar=0,scrollbars=1</JSopenParams></link></wizards></config></TCEforms></link></el></container_list></el></settings.list></el></ROOT></sheet0></sheets></T3DataStructure>';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid11']['showitem'] = 'CType,--palette--;;dce_palette_11,pi_flexform; ;,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_11']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_11']['showitem'] = 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, hidden';



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.dce.elements.dce_dceuid11 {
	    icon = EXT:frontend/Resources/Public/Icons/ContentElementWizard/regular_text
	    title = SERVICE
	    description = 
	    tt_content_defValues {
	        CType = dce_dceuid11
	    }
	}
	    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_dceuid11)
');




	///////////////////////////////////////////////////// uid: 10 ///
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ArminVieweg.dce',
	'dceuid10',
	'联系我们'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid10'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid10'] = '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet0><ROOT><TCEforms><sheetTitle>LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab</sheetTitle></TCEforms><type>array</type><el><settings.title><TCEforms><label>标题</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></settings.title><settings.link><TCEforms><label>链接</label><config><type>input</type><size>30</size><eval>trim</eval><softref>typolink,typolink_tag,images,url</softref><wizards><_PADDING>2</_PADDING><link><type>popup</type><title>Link</title><module><name>wizard_element_browser</name><urlParameters><mode>wizard</mode></urlParameters></module><icon>link_popup.gif</icon><script>browse_links.php?mode=wizard</script><params><!--<blindLinkOptions>page,file,folder,url,spec</blindLinkOptions>--></params><JSopenParams>height=500,width=500,status=0,menubar=0,scrollbars=1</JSopenParams></link></wizards></config></TCEforms></settings.link><settings.linktext><TCEforms><label>链接文字</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></settings.linktext></el></ROOT></sheet0></sheets></T3DataStructure>';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid10']['showitem'] = 'CType,--palette--;;dce_palette_10,pi_flexform; ;,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_10']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_10']['showitem'] = 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, hidden';



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.dce.elements.dce_dceuid10 {
	    icon = EXT:frontend/Resources/Public/Icons/ContentElementWizard/mailform
	    title = 联系我们
	    description = 
	    tt_content_defValues {
	        CType = dce_dceuid10
	    }
	}
	    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_dceuid10)
');




	///////////////////////////////////////////////////// uid: 9 ///
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ArminVieweg.dce',
	'dceuid9',
	'团队列表'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid9'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid9'] = '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet0><ROOT><TCEforms><sheetTitle>LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab</sheetTitle></TCEforms><type>array</type><el><settings.title><TCEforms><label>标题</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></settings.title><settings.teamlist><title>团队列表</title><tx_templavoila><title>团队列表</title></tx_templavoila><section>1</section><type>array</type><el><container_teamlist><type>array</type><title>员工</title><tx_templavoila><title>员工</title></tx_templavoila><el><image><TCEforms><label>照片</label><config><type>group</type><internal_type>file</internal_type><allowed>jpg,jpeg,png,gif</allowed><size>1</size><minitems>0</minitems><maxitems>1</maxitems><uploadfolder>uploads/pics</uploadfolder><show_thumbs>1</show_thumbs></config></TCEforms></image><job><TCEforms><label>职位</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></job><name><TCEforms><label>姓名</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></name><description><TCEforms><label>简介</label><config><type>text</type><rows>5</rows><cols>30</cols><eval>trim,required</eval></config></TCEforms></description></el></container_teamlist></el></settings.teamlist></el></ROOT></sheet0></sheets></T3DataStructure>';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid9']['showitem'] = 'CType,--palette--;;dce_palette_9,pi_flexform; ;,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_9']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_9']['showitem'] = 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, hidden';



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.dce.elements.dce_dceuid9 {
	    icon = EXT:frontend/Resources/Public/Icons/ContentElementWizard/regular_text
	    title = 团队列表
	    description = 
	    tt_content_defValues {
	        CType = dce_dceuid9
	    }
	}
	    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_dceuid9)
');




	///////////////////////////////////////////////////// uid: 8 ///
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ArminVieweg.dce',
	'dceuid8',
	'历史事件'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid8'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid8'] = '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet0><ROOT><TCEforms><sheetTitle>LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab</sheetTitle></TCEforms><type>array</type><el><settings.title><TCEforms><label>标题</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></settings.title><settings.historylist><title>事件列表</title><tx_templavoila><title>事件列表</title></tx_templavoila><section>1</section><type>array</type><el><container_historylist><type>array</type><title>事件</title><tx_templavoila><title>事件</title></tx_templavoila><el><date><TCEforms><label>日期</label><config><type>input</type><size>30</size><eval>date,required</eval></config></TCEforms></date><description><TCEforms><label>描述</label><config><type>input</type><size>30</size><eval>trim,required</eval><max>40</max></config></TCEforms></description></el></container_historylist></el></settings.historylist></el></ROOT></sheet0></sheets></T3DataStructure>';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid8']['showitem'] = 'CType,--palette--;;dce_palette_8,pi_flexform; ;,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_8']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_8']['showitem'] = 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, hidden';



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.dce.elements.dce_dceuid8 {
	    icon = EXT:frontend/Resources/Public/Icons/ContentElementWizard/regular_text
	    title = 历史事件
	    description = 
	    tt_content_defValues {
	        CType = dce_dceuid8
	    }
	}
	    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_dceuid8)
');




	///////////////////////////////////////////////////// uid: 7 ///
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ArminVieweg.dce',
	'dceuid7',
	'文字（两栏）'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid7'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid7'] = '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet0><ROOT><TCEforms><sheetTitle>LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab</sheetTitle></TCEforms><type>array</type><el><settings.leftcontent><TCEforms><label>左侧内容</label><config><type>text</type><rows>5</rows><cols>30</cols><eval>trim,required</eval></config><defaultExtras>richtext[]:rte_transform[mode=ts_css]</defaultExtras></TCEforms></settings.leftcontent><settings.rightcontent><TCEforms><label>右侧内容</label><config><type>text</type><rows>5</rows><cols>30</cols><eval>trim,required</eval></config><defaultExtras>richtext[]:rte_transform[mode=ts_css]</defaultExtras></TCEforms></settings.rightcontent></el></ROOT></sheet0></sheets></T3DataStructure>';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid7']['showitem'] = 'CType,--palette--;;dce_palette_7,pi_flexform; ;,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_7']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_7']['showitem'] = 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, hidden';



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.dce.elements.dce_dceuid7 {
	    icon = EXT:frontend/Resources/Public/Icons/ContentElementWizard/text_image_below
	    title = 文字（两栏）
	    description = 
	    tt_content_defValues {
	        CType = dce_dceuid7
	    }
	}
	    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_dceuid7)
');




	///////////////////////////////////////////////////// uid: 6 ///
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ArminVieweg.dce',
	'dceuid6',
	'文字（通栏）'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid6'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid6'] = '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet0><ROOT><TCEforms><sheetTitle>LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab</sheetTitle></TCEforms><type>array</type><el><settings.content><TCEforms><label>内容</label><config><type>text</type><rows>5</rows><cols>30</cols><eval>trim,required</eval></config><defaultExtras>richtext[]:rte_transform[mode=ts_css]</defaultExtras></TCEforms></settings.content></el></ROOT></sheet0></sheets></T3DataStructure>';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid6']['showitem'] = 'CType,--palette--;;dce_palette_6,pi_flexform; ;,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_6']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_6']['showitem'] = 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, hidden';



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.dce.elements.dce_dceuid6 {
	    icon = EXT:frontend/Resources/Public/Icons/ContentElementWizard/text_image_right
	    title = 文字（通栏）
	    description = 
	    tt_content_defValues {
	        CType = dce_dceuid6
	    }
	}
	    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_dceuid6)
');




	///////////////////////////////////////////////////// uid: 5 ///
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ArminVieweg.dce',
	'dceuid5',
	'图片库'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid5'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid5'] = '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet0><ROOT><TCEforms><sheetTitle>LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab</sheetTitle></TCEforms><type>array</type><el><settings.headline><TCEforms><label>标题</label><config><type>input</type><size>30</size><eval>trim</eval></config></TCEforms></settings.headline><settings.categories><title>分类</title><tx_templavoila><title>分类</title></tx_templavoila><section>1</section><type>array</type><el><container_categories><type>array</type><title>分类</title><tx_templavoila><title>分类</title></tx_templavoila><el><title><TCEforms><label>标题</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></title><category><TCEforms><label>类别</label><config><type>select</type><foreign_table>sys_category</foreign_table><foreign_table_where>and sys_category.deleted=0 and sys_category.pid=###CURRENT_PID###</foreign_table_where><renderMode>checkbox</renderMode><treeConfig><parentField>parent</parentField><appearance><maxLevels>99</maxLevels><expandAll>TRUE</expandAll><showHeader>TRUE</showHeader></appearance></treeConfig><size>5</size><minitems>0</minitems><maxitems>99</maxitems></config></TCEforms></category></el></container_categories></el></settings.categories><settings.products><title>图片列表</title><tx_templavoila><title>图片列表</title></tx_templavoila><section>1</section><type>array</type><el><container_products><type>array</type><title>图片</title><tx_templavoila><title>图片</title></tx_templavoila><el><image><TCEforms><label>图片</label><config><type>group</type><internal_type>file</internal_type><allowed>jpg,jpeg,png,gif</allowed><size>1</size><minitems>0</minitems><maxitems>1</maxitems><uploadfolder>uploads/pics</uploadfolder><show_thumbs>1</show_thumbs></config></TCEforms></image><title><TCEforms><label>标题</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></title><link><TCEforms><label>链接</label><config><type>input</type><size>30</size><eval>trim</eval><softref>typolink,typolink_tag,images,url</softref><wizards><_PADDING>2</_PADDING><link><type>popup</type><title>Link</title><module><name>wizard_element_browser</name><urlParameters><mode>wizard</mode></urlParameters></module><icon>link_popup.gif</icon><script>browse_links.php?mode=wizard</script><params><!--<blindLinkOptions>page,file,folder,url,spec</blindLinkOptions>--></params><JSopenParams>height=500,width=500,status=0,menubar=0,scrollbars=1</JSopenParams></link></wizards></config></TCEforms></link><category><TCEforms><label>分类</label><config><type>select</type><foreign_table>sys_category</foreign_table><foreign_table_where>and sys_category.deleted=0 and sys_category.pid=###CURRENT_PID###</foreign_table_where><size>1</size><minitems>0</minitems><maxitems>1</maxitems></config></TCEforms></category></el></container_products></el></settings.products></el></ROOT></sheet0></sheets></T3DataStructure>';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid5']['showitem'] = 'CType,--palette--;;dce_palette_5,pi_flexform; ;,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_5']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_5']['showitem'] = 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, hidden';



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.dce.elements.dce_dceuid5 {
	    icon = EXT:frontend/Resources/Public/Icons/ContentElementWizard/regular_text
	    title = 图片库
	    description = 
	    tt_content_defValues {
	        CType = dce_dceuid5
	    }
	}
	    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_dceuid5)
');




	///////////////////////////////////////////////////// uid: 4 ///
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ArminVieweg.dce',
	'dceuid4',
	'合作伙伴'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid4'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid4'] = '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet0><ROOT><TCEforms><sheetTitle>LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab</sheetTitle></TCEforms><type>array</type><el><settings.title><TCEforms><label>标题</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></settings.title><settings.subtitle><TCEforms><label>副标题</label><config><type>input</type><size>30</size><eval>trim</eval></config></TCEforms></settings.subtitle><settings.partnerlist><title>伙伴列表</title><tx_templavoila><title>伙伴列表</title></tx_templavoila><section>1</section><type>array</type><el><container_partnerlist><type>array</type><title>伙伴</title><tx_templavoila><title>伙伴</title></tx_templavoila><el><image><TCEforms><label>图片</label><config><type>group</type><internal_type>file</internal_type><allowed>jpg,jpeg,png,gif</allowed><size>1</size><minitems>0</minitems><maxitems>1</maxitems><uploadfolder>uploads/pics</uploadfolder><show_thumbs>1</show_thumbs></config></TCEforms></image><name><TCEforms><label>名称</label><config><type>input</type><size>30</size><eval>trim</eval></config></TCEforms></name><description><TCEforms><label>描述</label><config><type>text</type><rows>5</rows><cols>30</cols><eval>trim,required</eval></config></TCEforms></description><link><TCEforms><label>链接</label><config><type>input</type><size>30</size><eval>trim</eval><softref>typolink,typolink_tag,images,url</softref><wizards><_PADDING>2</_PADDING><link><type>popup</type><title>Link</title><module><name>wizard_element_browser</name><urlParameters><mode>wizard</mode></urlParameters></module><icon>link_popup.gif</icon><script>browse_links.php?mode=wizard</script><params><!--<blindLinkOptions>page,file,folder,url,spec</blindLinkOptions>--></params><JSopenParams>height=500,width=500,status=0,menubar=0,scrollbars=1</JSopenParams></link></wizards></config></TCEforms></link></el></container_partnerlist></el></settings.partnerlist></el></ROOT></sheet0></sheets></T3DataStructure>';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid4']['showitem'] = 'CType,--palette--;;dce_palette_4,pi_flexform; ;,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_4']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_4']['showitem'] = 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, hidden';



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.dce.elements.dce_dceuid4 {
	    icon = EXT:frontend/Resources/Public/Icons/ContentElementWizard/regular_text
	    title = 合作伙伴
	    description = 
	    tt_content_defValues {
	        CType = dce_dceuid4
	    }
	}
	    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_dceuid4)
');




	///////////////////////////////////////////////////// uid: 3 ///
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ArminVieweg.dce',
	'dceuid3',
	'BOX (统计)'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid3'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid3'] = '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet0><ROOT><TCEforms><sheetTitle>LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab</sheetTitle></TCEforms><type>array</type><el><settings.title><TCEforms><label>标题</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></settings.title><settings.data><title>条目</title><tx_templavoila><title>条目</title></tx_templavoila><section>1</section><type>array</type><el><container_data><type>array</type><title>条目</title><tx_templavoila><title>条目</title></tx_templavoila><el><number><TCEforms><label>数量</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></number><name><TCEforms><label>名称</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></name></el></container_data></el></settings.data></el></ROOT></sheet0></sheets></T3DataStructure>';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid3']['showitem'] = 'CType,--palette--;;dce_palette_3,pi_flexform; ;,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_3']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_3']['showitem'] = 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, hidden';



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.dce.elements.dce_dceuid3 {
	    icon = EXT:frontend/Resources/Public/Icons/ContentElementWizard/regular_text
	    title = BOX (统计)
	    description = 
	    tt_content_defValues {
	        CType = dce_dceuid3
	    }
	}
	    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_dceuid3)
');




	///////////////////////////////////////////////////// uid: 2 ///
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ArminVieweg.dce',
	'dceuid2',
	'文字+图片'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid2'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid2'] = '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet0><ROOT><TCEforms><sheetTitle>LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab</sheetTitle></TCEforms><type>array</type><el><settings.style><TCEforms><label>显示方式</label><config><type>select</type><items type=\'array\'><numIndex index=\'0\' type=\'array\'><numIndex index=\'0\'>图片左侧, 文字右侧</numIndex><numIndex index=\'1\'>0</numIndex></numIndex><numIndex index=\'1\' type=\'array\'><numIndex index=\'0\'>图片右侧, 文字左侧</numIndex><numIndex index=\'1\'>1</numIndex></numIndex></items><size>1</size><minitems>1</minitems><maxitems>1</maxitems></config><!-- <onChange>reload</onChange> --></TCEforms></settings.style><settings.image><TCEforms><label>图片</label><config><type>group</type><internal_type>file</internal_type><allowed>jpg,jpeg,png,gif</allowed><size>1</size><minitems>0</minitems><maxitems>1</maxitems><uploadfolder>uploads/pics</uploadfolder><show_thumbs>1</show_thumbs></config></TCEforms></settings.image><settings.title><TCEforms><label>标题</label><config><type>input</type><size>30</size><eval>trim,required</eval></config></TCEforms></settings.title><settings.subtitle><TCEforms><label>副标题</label><config><type>text</type><rows>5</rows><cols>30</cols><eval>trim,required</eval></config></TCEforms></settings.subtitle><settings.link><TCEforms><label>链接</label><config><type>input</type><size>30</size><eval>trim</eval><softref>typolink,typolink_tag,images,url</softref><wizards><_PADDING>2</_PADDING><link><type>popup</type><title>Link</title><module><name>wizard_element_browser</name><urlParameters><mode>wizard</mode></urlParameters></module><icon>link_popup.gif</icon><script>browse_links.php?mode=wizard</script><params><!--<blindLinkOptions>page,file,folder,url,spec</blindLinkOptions>--></params><JSopenParams>height=500,width=500,status=0,menubar=0,scrollbars=1</JSopenParams></link></wizards></config></TCEforms></settings.link><settings.linktext><TCEforms><label>链接文字</label><config><type>input</type><size>30</size><eval>trim</eval><default>更多</default></config></TCEforms></settings.linktext><settings.linktarget><TCEforms><label>链接打开方式</label><config><type>select</type><items type=\'array\'><numIndex index=\'0\' type=\'array\'><numIndex index=\'0\'>当前窗口打开</numIndex><numIndex index=\'1\'>_self</numIndex></numIndex><numIndex index=\'1\' type=\'array\'><numIndex index=\'0\'>新窗口打开</numIndex><numIndex index=\'1\'>_blank</numIndex></numIndex></items><size>1</size><minitems>0</minitems><maxitems>1</maxitems></config></TCEforms></settings.linktarget></el></ROOT></sheet0></sheets></T3DataStructure>';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid2']['showitem'] = 'CType,--palette--;;dce_palette_2,pi_flexform; ;,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_2']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_2']['showitem'] = 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, hidden';



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.dce.elements.dce_dceuid2 {
	    icon = EXT:frontend/Resources/Public/Icons/ContentElementWizard/regular_text
	    title = 文字+图片
	    description = 
	    tt_content_defValues {
	        CType = dce_dceuid2
	    }
	}
	    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_dceuid2)
');




	///////////////////////////////////////////////////// uid: 1 ///
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'ArminVieweg.dce',
	'dceuid1',
	'Banner'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dce_dceuid1'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',dce_dceuid1'] = '<T3DataStructure><meta><langDisable>1</langDisable><langDatabaseOverlay>1</langDatabaseOverlay></meta><sheets><sheet0><ROOT><TCEforms><sheetTitle>LLL:EXT:dce/Resources/Private/Language/locallang.xml:generaltab</sheetTitle></TCEforms><type>array</type><el><settings.style><TCEforms><label>显示模式</label><config><type>select</type><items type=\'array\'><numIndex index=\'1\' type=\'array\'><numIndex index=\'0\'>背景图片</numIndex><numIndex index=\'1\'>1</numIndex></numIndex><numIndex index=\'0\' type=\'array\'><numIndex index=\'0\'>滑动图片</numIndex><numIndex index=\'1\'>0</numIndex></numIndex></items><size>1</size><minitems>1</minitems><maxitems>1</maxitems></config><onChange>reload</onChange></TCEforms></settings.style><settings.images><title>列表</title><tx_templavoila><title>列表</title></tx_templavoila><section>1</section><type>array</type><el><container_images><type>array</type><title>图片</title><tx_templavoila><title>图片</title></tx_templavoila><el><image><TCEforms><label>图片</label><config><type>group</type><internal_type>file</internal_type><allowed>jpg,jpeg,png,gif</allowed><size>1</size><minitems>0</minitems><maxitems>1</maxitems><uploadfolder>uploads/pics</uploadfolder><show_thumbs>1</show_thumbs></config></TCEforms></image><video><TCEforms><label>视频</label><config><type>group</type><internal_type>file</internal_type><allowed>mp4</allowed><size>1</size><minitems>0</minitems><maxitems>1</maxitems><uploadfolder>uploads/pics</uploadfolder><show_thumbs>1</show_thumbs></config></TCEforms></video><link><TCEforms><label>链接</label><config><type>input</type><size>30</size><eval>trim</eval><softref>typolink,typolink_tag,images,url</softref><wizards><_PADDING>2</_PADDING><link><type>popup</type><title>Link</title><module><name>wizard_element_browser</name><urlParameters><mode>wizard</mode></urlParameters></module><icon>link_popup.gif</icon><script>browse_links.php?mode=wizard</script><params><!--<blindLinkOptions>page,file,folder,url,spec</blindLinkOptions>--></params><JSopenParams>height=500,width=500,status=0,menubar=0,scrollbars=1</JSopenParams></link></wizards></config></TCEforms></link><description><TCEforms><label>描述</label><config><type>text</type><rows>5</rows><cols>30</cols><eval>trim,required</eval></config><defaultExtras>richtext[]:rte_transform[mode=ts_css]</defaultExtras></TCEforms></description></el></container_images></el></settings.images></el></ROOT></sheet0></sheets></T3DataStructure>';
$GLOBALS['TCA']['tt_content']['types']['dce_dceuid1']['showitem'] = 'CType,--palette--;;dce_palette_1,pi_flexform; ;,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.extended';

	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_1']['canNotCollapse'] = true;
	$GLOBALS['TCA']['tt_content']['palettes']['dce_palette_1']['showitem'] = 'sys_language_uid, l18n_parent, colPos, spaceBefore, spaceAfter, section_frame, hidden';



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.dce.elements.dce_dceuid1 {
	    icon = EXT:frontend/Resources/Public/Icons/ContentElementWizard/table
	    title = Banner
	    description = 
	    tt_content_defValues {
	        CType = dce_dceuid1
	    }
	}
	    mod.wizards.newContentElement.wizardItems.dce.show := addToList(dce_dceuid1)
');




// global definitions
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
	0 => 'LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce.miscellaneous',
	1 => '--div--'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('mod.wizards.newContentElement.wizardItems.dce.header = LLL:EXT:dce/Resources/Private/Language/locallang_db.xml:tx_dce_domain_model_dce_long');
