<?php
/**
*
* fieldconfig for wordcamp-miami-badges/Settings
*
* @package Wordcamp_Miami_Badges
* @author Myles McNamara myles@smyl.es
* @license GPL-2.0+
* @link http://smyl.es
* @copyright 2014 Myles McNamara
*/


$group = array(
	'label' => __('Settings','wordcamp-miami-badges'),
	'id' => '60981314',
	'master' => 'badge_type',
	'fields' => array(
		'badge_type'	=>	array(
			'label'		=> 	__('Badge Type','wordcamp-miami-badges'),
			'caption'	=>	__('Type of badge to display','wordcamp-miami-badges'),
			'type'		=>	'dropdown',
			'default'	=> 	'*attending||Im Attending,speaking||Im Speaking,sponsor||Im a Proud Sponsor,volunteer||Im a Volunteer',
		),
	),
	'multiple'	=> false,
);

