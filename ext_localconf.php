<?php
if (!defined ('TYPO3_MODE')) { die ('Access denied.'); }

// Register Hooks
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['indexed_search']['pi1_hooks']['prepareResultRowTemplateData_postProc'] = 'EXT:indexedsearch_addmarkers/hooks/class.tx_indexedsearchaddmarkers_indexedsearch_prepareResultRowTemplateDataHook.php:tx_indexedsearchaddmarkers_indexedsearch_prepareResultRowTemplateDataHook';
?>