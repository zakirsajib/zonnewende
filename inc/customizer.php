<?php
/**
 * zonnewende Theme Customizer.
 *
 * @package zonnewende
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function zonnewende_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// Remove Existing sections
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('background_image');
	
	// Remove Existing panels
	$wp_customize->remove_panel('widgets');
	
	// Remove Existing controls
	$wp_customize->remove_control('header_textcolor');
	$wp_customize->remove_control('background_color');
	
	// Custom Panel, section and controls
	
	// Add footer panel
	$wp_customize->add_panel( 'panel_footer', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Footer', 'zonnewende' ),
	    'description' => __( 'Description of what this panel does.', 'zonnewende' ),
	) );
	
	// Footer section Address
	$wp_customize->add_section( 'section_address', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Address', 'zonnewende' ),
	    'description' => '',
	    'panel' => 'panel_footer',
	) );
	
	// Footer Address control
	$wp_customize->add_setting( 'footer_address', array(
		'default' => '',
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'transport' => '',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( 'footer_address', array(
	    'type' => 'textarea',
	    'priority' => 10,
	    'section' => 'section_address',
	    'label' => __( 'Address', 'zonnewende' ),
	    'description' => 'Address of establishment',
	) );
	// Footer section Background Image
	$wp_customize->add_section( 'section_bg_footer', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Background Image', 'zonnewende' ),
	    'description' => '',
	    'panel' => 'panel_footer',
	) );
	$wp_customize->add_setting( 'background_img_footer', 
		array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,'background_img_footer',
	        array(
	            'label' => 'Background Image Upload',
	            'section' => 'section_bg_footer',
	            'settings' => 'background_img_footer',
	            'description' => 'Recommended Size: 435 x 289 pixels',
	        )
	    )
	);
	
	// Add Logo on Customizer's existing section 'title_tagline'
	$wp_customize->add_setting( 'header_logo', 
		array(
			'default' => '',
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize,'header_logo',
	        array(
	            'label' => 'Logo Upload',
	            'section' => 'title_tagline',
	            'settings' => 'header_logo',
	            'description' => 'Recommended Size: 299 x 95 pixels',
	        )
	    )
	);

	

}
add_action( 'customize_register', 'zonnewende_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function zonnewende_customize_preview_js() {
	wp_enqueue_script( 'zonnewende_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'zonnewende_customize_preview_js' );
