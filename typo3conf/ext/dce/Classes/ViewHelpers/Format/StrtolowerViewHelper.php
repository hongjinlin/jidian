<?php
namespace ArminVieweg\Dce\ViewHelpers\Format;

/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2012-2015 Armin Ruediger Vieweg <armin@v.ieweg.de>
 */

/**
 * Convert a string to lower chars
 *
 * @package ArminVieweg\Dce
 */
class StrtolowerViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * Performs strtolower on given subject
     *
     * @param string $subject to perform strtolower
     * @return string lowered string
     */
    public function render($subject = null)
    {
        if ($subject === null) {
            $subject = $this->renderChildren();
        }
        return strtolower($subject);
    }
}
