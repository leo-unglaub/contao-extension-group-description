<?php


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_member_group']['palettes']['default'] = str_replace
(
	',name;',
	',name,description;',
	$GLOBALS['TL_DCA']['tl_member_group']['palettes']['default']
);


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_member_group']['fields']['description'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_member_group']['description'],
	'sql'			=> 'text NULL',
	'inputType'		=> 'textarea',
	'search'		=> true,
	'exclude'		=> true,
	'eval'			=> array
	(
		'tl_class'	=> 'long',
	),
);
