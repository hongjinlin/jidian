<?php

namespace SGalinski\Lfeditor\Utility;

/***************************************************************
 *  Copyright notice
 *
 *  (c) sgalinski Internet Services (http://www.sgalinski.de)
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

use Exception;
use TYPO3\CMS\Core\Charset\CharsetConverter;
use TYPO3\CMS\Core\Configuration\ConfigurationManager;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\VersionNumberUtility;

/**
 * includes special typo3 methods
 */
class Typo3Lib {
	const pathLocalExt = 'typo3conf/ext/';

	const pathGlobalExt = 'typo3/ext/';

	const pathSysExt = 'typo3/sysext/';

	const pathL10n = 'typo3conf/l10n/';

	/**
	 * checks the file location type
	 *
	 * @param string $file
	 * @return string
	 */
	public static function checkFileLocation($file) {
		if (strpos($file, Typo3Lib::pathLocalExt) !== FALSE) {
			return 'local';
		} elseif (strpos($file, Typo3Lib::pathGlobalExt) !== FALSE) {
			return 'global';
		} elseif (strpos($file, Typo3Lib::pathSysExt) !== FALSE) {
			return 'system';
		} elseif (strpos($file, Typo3Lib::pathL10n) !== FALSE) {
			return 'l10n';
		} else {
			return '';
		}
	}

	/**
	 * converts an absolute or relative typo3 style (EXT:) file path
	 *
	 * @throws Exception raised, if the conversion fails
	 * @param string $file absolute file or an typo3 relative file (EXT:)
	 * @param boolean $mode generate to relative(false) or absolute file
	 * @return string converted file path
	 */
	public static function transTypo3File($file, $mode) {
		$extType['local'] = Typo3Lib::pathLocalExt;
		$extType['global'] = Typo3Lib::pathGlobalExt;
		$extType['system'] = Typo3Lib::pathSysExt;

		// relative to absolute
		if ($mode) {
			if (strpos($file, 'EXT:') === FALSE) {
				throw new Exception('no typo3 relative path "' . $file . '"');
			}

			$cleanFile = SgLib::trimPath('EXT:', $file);
			foreach ($extType as $type) {
				$path = Typo3Lib::fixFilePath(PATH_site . '/' . $type . '/' . $cleanFile);
				if (is_dir(dirname($path))) {
					return $path;
				}
			}

			throw new Exception('cant convert typo3 relative file "' . $file . '"');
		} else // absolute to relative
		{
			foreach ($extType as $type) {
				if (strpos($file, $type) === FALSE) {
					continue;
				}

				return 'EXT:' . SgLib::trimPath($type, SgLib::trimPath(PATH_site, $file));
			}

			throw new Exception('cant convert absolute file "' . $file . '"');
		}
	}

	/**
	 * generates portable file paths
	 *
	 * @param string $file file
	 * @return string fixed file
	 */
	public static function fixFilePath($file) {
		return GeneralUtility::fixWindowsFilePath(str_replace('//', '/', $file));
	}

	/**
	 * decodes or encodes all values in the given language array to utf-8
	 *
	 * @param array $localLang language content array
	 * @param boolean $mode to utf-8 (true) or to original charset (false)
	 * @param array $ignoreKeys language keys to ignore
	 * @return array decoded or encoded language content array
	 */
	public static function utf8($localLang, $mode, $ignoreKeys) {
		// check
		if (!is_array($localLang) || !count($localLang)) {
			return $localLang;
		}

		// get charset object
		/** @var $csConvObj CharsetConverter */
		$csConvObj = & $GLOBALS['LANG']->csConvObj;

		// loop all possible languages
		foreach ($localLang as $langKey => $convContent) {
			if (!is_array($convContent) || !count($convContent) || in_array($langKey, $ignoreKeys)) {
				continue;
			}

			$origCharset = $csConvObj->parse_charset(
				$csConvObj->charSetArray[$langKey] ?
					$csConvObj->charSetArray[$langKey] : 'iso-8859-1'
			);

			if ($csConvObj->charSetArray[$langKey] == 'utf-8') {
				continue;
			}

			foreach ($convContent as $labelKey => $value) {
				if ($mode) {
					$localLang[$langKey][$labelKey] = $csConvObj->utf8_encode($value, $origCharset);
				} else {
					$localLang[$langKey][$labelKey] = $csConvObj->utf8_decode($value, $origCharset);
				}
			}
		}

		return $localLang;
	}

	/**
	 * Returns true if the TYPO3 backend is UTF-8 ready.
	 *
	 * @static
	 * @return bool
	 */
	public static function isTypo3BackendInUtf8Mode() {
		$isInUtf8Mode = FALSE;
		$isTypo347 = (VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) >= 4007000);
		if ($GLOBALS['TYPO3_CONF_VARS']['BE']['forceCharset'] === 'utf-8' || $isTypo347) {
			$isInUtf8Mode = TRUE;
		}

		return $isInUtf8Mode;
	}

	/**
	 * Adds configuration line to AdditionalConfiguration.php.
	 *
	 * @param string $configLine line to be added.
	 * @return void
	 */
	public static function writeLineToAdditionalConfiguration($configLine) {
		/** @var ConfigurationManager $configurationManager */
		$configurationManager = GeneralUtility::makeInstance('TYPO3\CMS\Core\Configuration\ConfigurationManager');
		$additionalConfigurationFilePath = $configurationManager->getAdditionalConfigurationFileLocation();
		SgLib::appendToPHPFile($additionalConfigurationFilePath, $configLine);
	}
}

?>