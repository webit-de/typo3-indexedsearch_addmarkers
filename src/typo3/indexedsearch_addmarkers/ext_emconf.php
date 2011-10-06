<?php

########################################################################
# Extension Manager/Repository config file for ext "indexedsearch_addmarkers".
#
# Auto generated 23-07-2010 18:59
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Add markers to indexed_search',
	'description' => 'Add some custom markers to indexed_search search results (necessary if a website has several languages, but the administrator want\'s to avoid having several templates just to localize some strings).',
	'category' => 'fe',
	'author' => 'Dan Untenzu',
	'author_email' => 'untenzu@webit.de',
	'shy' => '',
	'dependencies' => 'indexed_search',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'indexed_search' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:9:"ChangeLog";s:4:"8270";s:10:"README.txt";s:4:"ee2d";s:12:"ext_icon.gif";s:4:"cb15";s:17:"ext_localconf.php";s:4:"2cb5";s:14:"doc/readme.txt";s:4:"1834";s:89:"hooks/class.tx_indexedsearchaddmarkers_indexedsearch_prepareResultRowTemplateDataHook.php";s:4:"e77a";}',
	'suggests' => array(
	),
);

?>