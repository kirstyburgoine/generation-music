<?php
defined('ABSPATH') or die("No script kiddies please!");

/**
 * Plugin Name: KB - Options
 * Description: Options and homepage custom fields so that they are not lost if the theme is changed..
 * Version: 1.0
 * Author: Kirsty Burgoine
 * Author URI: http://www.kirstyburgoine.co.uk
 */

// --------------------------------------------------------------------------------------
// --------------------------------------------------------------------------------------
// Global Options for each site

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_global-options',
		'title' => 'Global Options',
		'fields' => array (
			array (
				'key' => 'field_5379d94800ccd',
				'label' => 'Company Number',
				'name' => 'company_number',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			
			array (
				'key' => 'field_53416af0a8635',
				'label' => 'Copyright Notice',
				'name' => 'copyright_notice',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53416af0a8639',
				'label' => 'Contact Telephone',
				'name' => 'contact_telephone',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5341663f4e85c',
				'label' => 'Contact Email',
				'name' => 'contact_email',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5341662f4e85c',
				'label' => 'Address',
				'name' => 'contact_address',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5341654e4e853',
				'label' => 'Facebook Page',
				'name' => 'facebook_page',
				'type' => 'text',
				'instructions' => 'Full url for the account including http://',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_534165b44e854',
				'label' => 'Twitter Account',
				'name' => 'twitter_account',
				'type' => 'text',
				'instructions' => 'Full url for the account including http://',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_534155b44e854',
				'label' => 'LinkedIn Account',
				'name' => 'linkedin_account',
				'type' => 'text',
				'instructions' => 'Full url for the account including http://',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_534165da4e856',
				'label' => 'Pinterest Account',
				'name' => 'pinterest_account',
				'type' => 'text',
				'instructions' => 'Full url for the account including http://',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_534165da4e346',
				'label' => 'Instagram Account',
				'name' => 'instagram_account',
				'type' => 'text',
				'instructions' => 'Full url for the account including http://',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_534165f44e858',
				'label' => 'YouTube Account',
				'name' => 'youtube_account',
				'type' => 'text',
				'instructions' => 'Full url for the account including http://',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5341682b5f14c',
				'label' => 'Vimeo Account',
				'name' => 'vimeo_account',
				'type' => 'text',
				'instructions' => 'Full url for the account including http://',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_534166174e85a',
				'label' => 'Google+ Page',
				'name' => 'googleplus_page',
				'type' => 'text',
				'instructions' => 'Full url for the account including http://',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}






?>