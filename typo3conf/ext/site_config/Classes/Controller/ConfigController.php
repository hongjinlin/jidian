<?php
namespace NGOOS\SiteConfig\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 王者 <it.support@qq.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\common;

/**
 * ConfigController
 */
class ConfigController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
     * init
     */
    public function initializeAction(){
        if(GeneralUtility::_GP('certificate')){

        }
    }

	/**
	 * action Index
	 * @return void
	 */
	public function indexAction() {
        $this->view->assign('hash', uniqid(microtime()));
        $this->view->assignMultiple(array(
            'sitetitle' => $this->getValue('sitetitle', 'sys_template', 'uid=1'),
            'TYPO3_CONF_VARS' => $GLOBALS['TYPO3_CONF_VARS']
        ));
	}

	/**
	 * action Update
	 * @return void
	 */
	public function updateAction() {
        $errorArray = array();

        //logo
        $logoFile = 'fileadmin/templates/frontend/public/images/logo.png';
        if(!empty($_FILES['logo']['tmp_name'])){
            if(is_writeable($logoFile)){
                GeneralUtility::upload_copy_move($_FILES['logo']['tmp_name'], $logoFile);
            }else{
                $errorArray[] = 'Logo文件无写入权限';
            }
        }

        //certificate file
        if(!empty($_FILES['certificate_file']['tmp_name'])) {
            GeneralUtility::upload_copy_move($_FILES['certificate_file']['tmp_name'], 'typo3conf/ext/site_config/Resources/Public/Images/certificate_bg.jpg');
        }
        $GLOBALS['TYPO3_CONF_VARS']['CERTIFICATE'] = $_POST['TYPO3_CONF_VARS']['CERTIFICATE'];
        $this->generateCertificate('张三', '100', 'CERT-DEMO');

        //site title
        $GLOBALS['TYPO3_DB']->exec_UPDATEquery('sys_template', 'uid=1', array('sitetitle'=>GeneralUtility::_GP('sitetitle')));

        //update style
        $customStyleContent = GeneralUtility::getUrl(PATH_site.'fileadmin/templates/frontend/public/css/settings.css');
        foreach ($_POST['TYPO3_CONF_VARS']['STYLE'] as $key=>$val) {
            $customStyleContent = str_replace("###{$key}###", $val, $customStyleContent);
        }
        GeneralUtility::writeFile(PATH_site.'fileadmin/templates/frontend/public/css/custom.css', $customStyleContent);

        //TYPO3_CONF_VARS Config
        if(GeneralUtility::_POST('TYPO3_CONF_VARS')){
            $configurationManager = $this->objectManager->get(\TYPO3\CMS\Core\Configuration\ConfigurationManager::class);
            $configurationManager->updateLocalConfiguration($_POST['TYPO3_CONF_VARS']);
        }

        if(!empty($errorArray)){
            foreach($errorArray as $error){
                $this->addFlashMessage('<script>$(function(){$.notify('.$error.', {"status":"danger"});});</script>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
            }
        }else{
            $this->addFlashMessage('<script>$(function(){$.notify("配置更新成功", {"status":"success"});});</script>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::OK);
        }

        /** @var \TYPO3\CMS\Install\Service\ClearCacheService $clearCacheService */
        //$clearCacheService = $this->objectManager->get(\TYPO3\CMS\Install\Service\ClearCacheService::class);
        //$clearCacheService->clearAll();

        $CacheManager = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Cache\CacheManager::class);
        $CacheManager->flushCachesInGroup('pages');

        $this->redirect('index');
	}


    private function getValue($field, $table, $where){
        $result = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow($field, $table, $where);
        return $result[$field];
    }

    public function generateCertificate($header_name, $money, $cert_number){
        if(!is_dir(PATH_site.'uploads/certificate/')){
            mkdir(PATH_site.'uploads/certificate/', 0777);
        }
        //generate cert file
        $certificateFile = PATH_site.'typo3conf/ext/site_config/Resources/Public/Images/certificate_bg.jpg';
        list($width, $height) = getimagesize($certificateFile);
        $extConf = $GLOBALS['TYPO3_CONF_VARS']['CERTIFICATE'];
        $param = "-resize {$width}x{$height} -font ".PATH_site.\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('site_config')."Resources/Public/Fonts/msyh.ttf -fill black -pointsize 30 -draw 'text {$extConf['header']} \"{$header_name}\" text {$extConf['money']} \"￥{$money}元\" text {$extConf['number']} \"{$cert_number}\" text {$extConf['date']} \"".date("Y年m月d日", time())."\"' -colorspace RGB -quality 80";
        $gifCreator = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Core\Imaging\GraphicalFunctions');
        $gifCreator->init();
        $gifCreator->imageMagickExec($certificateFile, PATH_site.'uploads/certificate/'.$cert_number.'.jpg', $param);
    }

}