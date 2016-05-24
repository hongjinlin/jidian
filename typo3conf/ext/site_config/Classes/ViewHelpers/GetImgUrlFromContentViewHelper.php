<?php
namespace Ngoos\ViewHelpers;
    /***************************************************************
     *  Copyright notice
     *
     *  (c) 2013 Frans Saris <frans@beech.it>
     *  All rights reserved
     *
     *  This script is part of the TYPO3 project. The TYPO3 project is
     *  free software; you can redistribute it and/or modify
     *  it under the terms of the GNU General Public License as published by
     *  the Free Software Foundation; either version 2 of the License, or
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

/**
 * ViewHelper for image
 */
class GetImgUrlFromContentViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * Go through all given classes which implement the mediainterface
     * and use the proper ones to render the media element
     *
     * @param string $content
     * @return string
     */
    public function render($content) {
        preg_match("/\<img\ src\=[\"\'](.*?)[\"\']/is", $content, $matches);
        if(isset($matches[1])){
            return $matches[1];
        }else{
            return '';
        }
    }

}
