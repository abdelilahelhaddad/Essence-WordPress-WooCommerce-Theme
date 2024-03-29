<?php

/**
 * Fany Lab Theme Customizer
 *
 * @package Essence
 */

function essence_customizer($wp_customize)
{

	// Social Media Section

	$wp_customize->add_section(
		'sec_Social_Media',
		array(
			'title' 		=> __('Social Media Settings', 'essence'),
			'description' 	=> __('Social Media Links', 'essence')
		)
	);

	// Field 1 - Facebook Text Box
	$wp_customize->add_setting(
		'set_facebook',
		array(
			'type' 				=> 'theme_mod',
			'default' 			=> '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_facebook',
		array(
			'label' 		=> __('Facebook', 'essence'),
			'description' 	=> __('Please, add your Facebook Link here', 'essence'),
			'section' 		=> 'sec_Social_Media',
			'type' 			=> 'text'
		)
	);

	// Field 2 - Instagram Text Box
	$wp_customize->add_setting(
		'set_instagram',
		array(
			'type' 				=> 'theme_mod',
			'default' 			=> '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_instagram',
		array(
			'label' 		=> __('Instagram', 'essence'),
			'description' 	=> __('Please, add your Instagram Link here', 'essence'),
			'section' 		=> 'sec_Social_Media',
			'type' 			=> 'text'
		)
	);

	// Field 3 - Twitter Text Box
	$wp_customize->add_setting(
		'set_twitter',
		array(
			'type' 				=> 'theme_mod',
			'default' 			=> '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_twitter',
		array(
			'label' 		=> __('Twitter', 'essence'),
			'description' 	=> __('Please, add your Twitter Link here', 'essence'),
			'section' 		=> 'sec_Social_Media',
			'type' 			=> 'text'
		)
	);

	// Field 4 - Pinterest Text Box
	$wp_customize->add_setting(
		'set_pinterest',
		array(
			'type' 				=> 'theme_mod',
			'default' 			=> '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_pinterest',
		array(
			'label' 		=> __('Pinterest', 'essence'),
			'description' 	=> __('Please, add your Pinterest Link here', 'essence'),
			'section' 		=> 'sec_Social_Media',
			'type' 			=> 'text'
		)
	);

	// Field 5 - Youtube Text Box
	$wp_customize->add_setting(
		'set_youtube',
		array(
			'type' 				=> 'theme_mod',
			'default' 			=> '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_youtube',
		array(
			'label' 		=> __('Youtube', 'essence'),
			'description' 	=> __('Please, add your Youtube Link here', 'essence'),
			'section' 		=> 'sec_Social_Media',
			'type' 			=> 'text'
		)
	);

	/************************************************************************************************/
	// Hero Section Section

	$wp_customize->add_section(
		'sec_hero_section',
		array(
			'title' 		=> __('Hero Section Settings', 'essence'),
			'description' 	=> __('Hero Section Section', 'essence')
		)
	);

	// Field 1 - Hero Section
	$wp_customize->add_setting(
		'set_hero_section',
		array(
			'type' 				=> 'theme_mod',
			'default' 			=> '',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_hero_section',
		array(
			'label' 		=> __('Set Hero Section', 'essence'),
			'description' 	=> __('Set Hero Section', 'essence'),
			'section' 		=> 'sec_hero_section',
			'type' 			=> 'dropdown-pages'
		)
	);

	// Field 2 - Hero Section Button Text
	$wp_customize->add_setting(
		'set_button_hero_section',
		array(
			'type' 				=> 'theme_mod',
			'default' 			=> '',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'set_button_hero_section',
		array(
			'label' 		=> __('Button Text for Hero Section', 'essence'),
			'description' 	=> __('Button Text for Hero Section', 'essence'),
			'section' 		=> 'sec_hero_section',
			'type' 			=> 'text'
		)
	);

	// Field 3 - Hero Section Button URL
	$wp_customize->add_setting(
		'set_button_url_hero_section',
		array(
			'type' 				=> 'theme_mod',
			'default' 			=> '',
			'sanitize_callback' => 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'set_button_url_hero_section',
		array(
			'label' 		=> __('URL for Hero Section', 'essence'),
			'description' 	=> __('URL for Hero Section', 'essence'),
			'section' 		=> 'sec_hero_section',
			'type' 			=> 'url'
		)
	);

	/*---------------------------------------------------------------------------------------*/
	// Popular Products Settings

	$wp_customize->add_section(
		'sec_popular_products',
		array(
			'title' 		=> __('Popular Products Settings', 'essence'),
			'description' 	=> __('Popular Products Section', 'essence')
		)
	);

	// We're gonna show the following options if WooCommerce is active
	if (class_exists('WooCommerce')) :

		// Field 1 - Popular Products Title
		$wp_customize->add_setting(
			'set_popular_title',
			array(
				'type' 				=> 'theme_mod',
				'default' 			=> '',
				'sanitize_callback' => 'sanitize_text_field'
			)
		);

		$wp_customize->add_control(
			'set_popular_title',
			array(
				'label' 		=> __('Popular Products Title', 'essence'),
				'description' 	=> __('Popular Products Title', 'essence'),
				'section' 		=> 'sec_popular_products',
				'type' 			=> 'text'
			)
		);

		// Field 2 - Popular Products Limit
		$wp_customize->add_setting(
			'set_popular_max_num',
			array(
				'type' 				=> 'theme_mod',
				'default' 			=> '',
				'sanitize_callback' => 'absint'
			)
		);

		$wp_customize->add_control(
			'set_popular_max_num',
			array(
				'label' 		=> __('Popular Products Max Number', 'essence'),
				'description' 	=> __('Popular Products Max Number', 'essence'),
				'section' 		=> 'sec_popular_products',
				'type' 			=> 'number'
			)
		);

		// Field 3 - Popular Products Columns
		$wp_customize->add_setting(
			'set_popular_max_col',
			array(
				'type' 				=> 'theme_mod',
				'default' 			=> '',
				'sanitize_callback' => 'absint'
			)
		);

		$wp_customize->add_control(
			'set_popular_max_col',
			array(
				'label' 		=> __('Popular Products Max Columns', 'essence'),
				'description' 	=> __('Popular Products Max Columns', 'essence'),
				'section' 		=> 'sec_popular_products',
				'type' 			=> 'number'
			)
		);
	endif; // End Class Exists WooCommerce

	/*---------------------------------------------------------------------------------------*/
	//Special Deal
	$wp_customize->add_section(
		'sec_week_deal',
		array(
			'title' 		=> __('Special Deal Settings', 'essence'),
			'description' 	=> __('Special Deal Section', 'essence')
		)
	);
	// We're gonna show the following options if WooCommerce is active
	if (class_exists('WooCommerce')) :
		// Field 1 - Special Deal Checkbox
		$wp_customize->add_setting(
			'set_deal_show',
			array(
				'type' 				=> 'theme_mod',
				'default' 			=> '',
				'sanitize_callback' => 'essence_sanitize_checkbox' //See below
			)
		);

		$wp_customize->add_control(
			'set_deal_show',
			array(
				'label' 	=> __('Show the Special Deal?', 'essence'),
				'section' 	=> 'sec_week_deal',
				'type' 		=> 'checkbox'
			)
		);

		// Field 2 - Special Deal Product ID
		$wp_customize->add_setting(
			'set_deal',
			array(
				'type'               => 'theme_mod',
				'default'            => '',
				'sanitize_callback'  => 'absint',
				'validate_callback'  => 'essence_validate_sale_price'
			)
		);

		// Checks if the selected product has a sale price. If not, displays a warning
		function essence_validate_sale_price($validity, $product)
		{
			$sale_validation = get_post_meta($product, '_sale_price', true);
			if (empty($sale_validation)) :
				/* translators: 1: product ID number */
				$validity->add('sale_price_not_set', sprintf(__('Please Add Sale Price - Product ID: %1$s', 'essence'), $product));
			endif;
			return $validity;
		}

		$wp_customize->add_control(
			'set_deal',
			array(
				'label'        => __('Special Deal Product ID', 'essence'),
				'description'  => __('Product ID to Display', 'essence'),
				'section'      => 'sec_week_deal',
				'type'         => 'number'
			)
		);

	endif; // End Class Exists WooCommerce
}
add_action('customize_register', 'essence_customizer');


function essence_sanitize_checkbox($checked)
{
	//returns true if checkbox is checked
	return ((isset($checked) && true == $checked) ? true : false);
}
