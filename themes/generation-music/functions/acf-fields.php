<?php // functions/acf-fields.php


 //**********
// FUNCTIONS

// various functions, often providing specific, more detailed
// control than the standard advance custom fields functions

if ( ! function_exists('get_field_labels') ) {

	$field_choices = NULL;

	function get_field_labels($field_name = NULL) {

		global $field_choices;

		if ( $field_choices !== NULL ) {
			return $field_choices[$field_name];
		}

		$field_groups = new query_loop(array(
			'post_type' => 'acf',
			'posts_per_page' => -1,
		));

		foreach ( $field_groups as $post ) {

			$fields = apply_filters('acf/field_group/get_fields', array(), get_the_ID());

			foreach ( $fields as $field ) {
				$field_choices[$field['name']] = $field['choices'];
			}

		}

		if ( $field_name !== NULL ) {
			return $field_choices[$field_name];
		}

		return $field_choices;

	}

}

if ( ! function_exists('get_field_label') ) {

	function get_field_label($field_name) {

		$field_objects = get_field_objects();

		$values = get_field($field_name);

		if ( is_array($values) ) {

			foreach ( $values as $key => $value ) {
				$values[$key] = $field_objects[$field_name]['choices'][$value];
			}

		} else {
			$values = $field_objects[$field_name]['choices'][$values];
		}

		return $values;

	}

}

if ( ! function_exists('the_field_label') ) {

	function the_field_label($field_name) {
		echo get_field_label($field_name);
	}

}


// we can turn the ACF plugin(s) into 'lite' mode by
// setting the following constant in the config

// define( 'ACF_LITE', true );

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
				'key' => 'field_53b2bd5b8d39d',
				'label' => 'Address',
				'name' => 'address',
				'type' => 'text',
				'instructions' => 'Usedin the footer to comply with SagePay',
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
