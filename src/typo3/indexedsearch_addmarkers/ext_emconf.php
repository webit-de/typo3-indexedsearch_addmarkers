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
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-6.2.99',
			'indexed_search' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>