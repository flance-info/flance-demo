<?php

function custom_logo_customizer_settings( $wp_customize ) {
	$wp_customize->add_section( 'custom_logo_section', array(
		'title'    => 'Site Logo',
		'priority' => 30,
	) );
	$wp_customize->add_setting( 'custom_logo_setting', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_logo_control', array(
		'label'    => 'Upload a custom logo',
		'section'  => 'custom_logo_section',
		'settings' => 'custom_logo_setting',
	) ) );
}

add_action( 'customize_register', 'custom_logo_customizer_settings' );
