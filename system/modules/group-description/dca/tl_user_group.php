<?php


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_user_group']['palettes']['default'] = str_replace
(
	',name;',
	',name,description;',
	$GLOBALS['TL_DCA']['tl_user_group']['palettes']['default']
);


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_user_group']['fields']['description'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_user_group']['description'],
	'sql'			=> 'text NULL',
	'inputType'		=> 'textarea',
	'exclude'		=> true,
	'search'		=> true,
	'eval'			=> array
	(
		'tl_class'	=> 'long',
	),
);
