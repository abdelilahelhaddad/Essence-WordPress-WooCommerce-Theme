<?php 
/**
 * Fany Lab Theme Customizer
 *
 * @package Essence
 */

function essence_customizer( $wp_customize ){

	// Social Media Section

	$wp_customize->add_section( 
		'sec_Social_Media', array(
			'title' 		=> __( 'Social Media Settings', 'essence'),
			'description' 	=> __( 'Social Media Links', 'essence' )
		)
	);

			// Field 1 - Facebook Text Box
			$wp_customize->add_setting(
				'set_facebook', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_facebook', array(
					'label' 		=> __( 'Facebook', 'essence' ),
					'description' 	=> __( 'Please, add your Facebook Link here', 'essence' ),
					'section' 		=> 'sec_Social_Media',
					'type' 			=> 'text'
				)
			);

						// Field 2 - Instagram Text Box
						$wp_customize->add_setting(
							'set_instagram', array(
								'type' 				=> 'theme_mod',
								'default' 			=> '',
								'sanitize_callback' => 'sanitize_text_field'
							)
						);
			
						$wp_customize->add_control(
							'set_instagram', array(
								'label' 		=> __( 'Instagram', 'essence' ),
								'description' 	=> __( 'Please, add your Instagram Link here', 'essence' ),
								'section' 		=> 'sec_Social_Media',
								'type' 			=> 'text'
							)
						);

						// Field 3 - Twitter Text Box
						$wp_customize->add_setting(
							'set_twitter', array(
								'type' 				=> 'theme_mod',
								'default' 			=> '',
								'sanitize_callback' => 'sanitize_text_field'
							)
						);
			
						$wp_customize->add_control(
							'set_twitter', array(
								'label' 		=> __( 'Twitter', 'essence' ),
								'description' 	=> __( 'Please, add your Twitter Link here', 'essence' ),
								'section' 		=> 'sec_Social_Media',
								'type' 			=> 'text'
							)
						);

						// Field 4 - Pinterest Text Box
						$wp_customize->add_setting(
							'set_pinterest', array(
								'type' 				=> 'theme_mod',
								'default' 			=> '',
								'sanitize_callback' => 'sanitize_text_field'
							)
						);
			
						$wp_customize->add_control(
							'set_pinterest', array(
								'label' 		=> __( 'Pinterest', 'essence' ),
								'description' 	=> __( 'Please, add your Pinterest Link here', 'essence' ),
								'section' 		=> 'sec_Social_Media',
								'type' 			=> 'text'
							)
						);

						// Field 5 - Youtube Text Box
						$wp_customize->add_setting(
							'set_youtube', array(
								'type' 				=> 'theme_mod',
								'default' 			=> '',
								'sanitize_callback' => 'sanitize_text_field'
							)
						);
			
						$wp_customize->add_control(
							'set_youtube', array(
								'label' 		=> __( 'Youtube', 'essence' ),
								'description' 	=> __( 'Please, add your Youtube Link here', 'essence' ),
								'section' 		=> 'sec_Social_Media',
								'type' 			=> 'text'
							)
						);

/************************************************************************************************/
	// Hero Section Section

	$wp_customize->add_section( 
		'sec_hero_section', array(
			'title' 		=> __( 'Hero Section Settings', 'essence'),
			'description' 	=> __( 'Hero Section Section', 'essence' )
		)
	);

			// Field 1 - Hero Section
			$wp_customize->add_setting(
				'set_hero_section', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);

			$wp_customize->add_control(
				'set_hero_section', array(
					'label' 		=> __( 'Set Hero Section', 'essence' ),
					'description' 	=> __( 'Set Hero Section', 'essence' ),
					'section' 		=> 'sec_hero_section',
					'type' 			=> 'dropdown-pages'
				)
			);

			// Field 2 - Hero Section Button Text
			$wp_customize->add_setting(
				'set_button_hero_section', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_button_hero_section', array(
					'label' 		=> __( 'Button Text for Hero Section', 'essence' ),
					'description' 	=> __( 'Button Text for Hero Section', 'essence' ),
					'section' 		=> 'sec_hero_section',
					'type' 			=> 'text'
				)
			);

			// Field 3 - Hero Section Button URL
			$wp_customize->add_setting(
				'set_button_url_hero_section', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_button_url_hero_section', array(
					'label' 		=> __( 'URL for Hero Section', 'essence' ),
					'description' 	=> __( 'URL for Hero Section', 'essence' ),
					'section' 		=> 'sec_hero_section',
					'type' 			=> 'url'
				)
			);

}
add_action( 'customize_register', 'essence_customizer' );