<?php
/**
*
* fieldconfig for wordcamp-miami-badges/Configuration
*
* @package Wordcamp_Miami_Badges
* @author Myles McNamara myles@smyl.es
* @license GPL-2.0+
* @link http://smyl.es
* @copyright 2014 Myles McNamara
*/


$group = array(
	'label' => __('Configuration','wordcamp-miami-badges'),
	'id' => '60981314',
	'master' => 'badge_type',
	'fields' => array(
		'badge_type'	=>	array(
			'label'		=> 	__('Badge Type','wordcamp-miami-badges'),
			'caption'	=>	__('Badge Type','wordcamp-miami-badges'),
			'type'		=>	'dropdown',
			'default'	=> 	'*attending||Im Attending,speaking||Im Speaking,sponsor||Im a Proud Sponsor,volunteer||Im a Volunteer',
		),
		'alignment'	=>	array(
			'label'		=> 	__('Alignment','wordcamp-miami-badges'),
			'caption'	=>	__('Alignment','wordcamp-miami-badges'),
			'type'		=>	'onoff',
			'default'	=> 	'*none||None,left||Left,center||Center,right||Right',
			'inline'	=> 	true,
		),
	),
	'styles'	=> array(
		'toggles.css',
	),
	'scripts'	=> array(
		'toggles.min.js',
	),
	'multiple'	=> false,
);

