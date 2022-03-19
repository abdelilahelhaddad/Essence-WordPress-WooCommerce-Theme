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

}
add_action( 'customize_register', 'essence_customizer' );