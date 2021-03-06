<?php
namespace ArminVieweg\Dce\ViewHelpers\Be;

/*  | This extension is part of the TYPO3 project. The TYPO3 project is
 *  | free software and is licensed under GNU General Public License.
 *  |
 *  | (c) 2012-2015 Armin Ruediger Vieweg <armin@v.ieweg.de>
 */

/**
 * Gets the current version of DCE as int
 *
 * @package ArminVieweg\Dce
 * @see \TYPO3\CMS\Core\Utility\VersionNumberUtility
 */
class ExtensionIsInstalledViewHelper extends \TYPO3\CMS\Fluid\ViewHelpers\Be\AbstractBackendViewHelper
{

    /**
     * Returns TRUE if given extension is installed. Otherwise returns FALSE.
     *
     * @param string $key Extension key to check for
     * @return bool
     */
    public function render($key)
    {
        return \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded($key);
    }
}
