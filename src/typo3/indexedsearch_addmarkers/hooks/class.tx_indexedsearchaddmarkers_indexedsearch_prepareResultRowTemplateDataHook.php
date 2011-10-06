<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Dan Untenzu <untenzu@webit.de>
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
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */

class tx_indexedsearchaddmarkers_indexedsearch_prepareResultRowTemplateDataHook extends tslib_pibase {

	/**
	 * Add some custom markers to indexed_search - here: additional markers for each row of the search result
	 *
	 * @param array &$hookParams	Parameters give by the source extension -> currently 'markerArray' with all already existing markers and 'event' with all fields of the current row
	 * @return array	$tmplContent Marker array
	 * @access public
	 */
	function prepareResultRowTemplateData_postProc($tmplContent, $row, $headerOnly) {
		$this->cObj = t3lib_div::makeInstance('tslib_cObj'); // local cObj.

		$this->conf = $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_indexedsearchaddmarkers.'];

		$this->conf['view'] = 'row';
		// pass row to TypoScript (use as »field = item_title« e.g.)
		$this->cObj->data = $row;

		$this->getCustomMarkers($tmplContent);

		return $tmplContent;
	}

	function getCustomMarkers(&$markerArray) {
		// build custom markers in TypoScript ->  plugin.tx_indexedsearchaddmarkers.row.markers.[markername] = TEXT
		foreach($this->conf[$this->conf['view'] . 'View.']['markers.'] as $marker => $name) {
			// only use cObject name (foo), not config (foo.)
			if(!strstr($marker, '.')) {
				// replace marker ###FOO### with type given in $name (.markers.foo = TEXT) and config indentified by $marker (.markers.foo.value = bar)
				// 2010-07-23 -> dont use ###-scheme, since indexed_search converts the array a while later
				//$markerArray['###' . strtoupper($marker) . '###'] = $this->cObj->cObjGetSingle(
				//	$name, $this->conf[$this->conf['view'] . 'View.']['markers.'][$marker . '.']
				//);
				$markerArray[$marker] = $this->cObj->cObjGetSingle(
					$name, $this->conf[$this->conf['view'] . 'View.']['markers.'][$marker . '.']
				);
			}
		}
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/indexedsearch_addmarkers/hooks/class.tx_indexedsearchaddmarkers_indexedsearch_prepareResultRowTemplateDataHook.php'])    {
    include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/indexedsearch_addmarkers/hooks/class.tx_indexedsearchaddmarkers_indexedsearch_prepareResultRowTemplateDataHook.php']);
}
?>