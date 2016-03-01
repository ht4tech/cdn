<?php
/**
 * General Settings
 *
 * Register General section, settings and controls for Theme Customizer
 *
 * @package Tortuga
 */


/**
 * Adds all general settings to the Customizer
 *
 * @param object $wp_customize / Customizer Object
 */
function tortuga_customize_register_general_settings( $wp_customize ) {

	// Add Section for Theme Options
	$wp_customize->add_section( 'tortuga_section_general', array(
        'title'    => esc_html__( 'General Settings', 'tortuga' ),
        'priority' => 10,
		'panel' => 'tortuga_options_panel' 
		)
	);
	
	// Add Settings and Controls for Layout
	$wp_customize->add_setting( 'tortuga_theme_options[layout]', array(
        'default'           => 'right-sidebar',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'tortuga_sanitize_select'
		)
	);
    $wp_customize->add_control( 'tortuga_theme_options[layout]', array(
        'label'    => esc_html__( 'Theme Layout', 'tortuga' ),
        'section'  => 'tortuga_section_general',
        'settings' => 'tortuga_theme_options[layout]',
        'type'     => 'radio',
		'priority' => 1,
        'choices'  => array(
            'left-sidebar' => esc_html__( 'Left Sidebar', 'tortuga' ),
            'right-sidebar' => esc_html__( 'Right Sidebar', 'tortuga' )
			)
		)
	);
	
	// Add Homepage Title
	$wp_customize->add_setting( 'tortuga_theme_options[homepage_title]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'wp_kses_post'
		)
	);
    $wp_customize->add_control( 'tortuga_theme_options[homepage_title]', array(
        'label'    => esc_html__( 'Home Page Title', 'tortuga' ),
        'section'  => 'tortuga_section_general',
        'settings' => 'tortuga_theme_options[homepage_title]',
        'type'     => 'text',
		'priority' => 3
		)
	);
	
	// Add Homepage Title
	$wp_customize->add_setting( 'tortuga_theme_options[homepage_description]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'wp_kses_post'
		)
	);
    $wp_customize->add_control( 'tortuga_theme_options[homepage_description]', array(
        'label'    => esc_html__( 'Home Page Description', 'tortuga' ),
        'section'  => 'tortuga_section_general',
        'settings' => 'tortuga_theme_options[homepage_description]',
        'type'     => 'textarea',
		'priority' => 4
		)
	);
	
}
add_action( 'customize_register', 'tortuga_customize_register_general_settings' );