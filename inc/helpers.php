<?php

function custom_logo_customizer_settings( $wp_customize ) {
	$wp_customize->add_section( 'custom_logo_section', array(
		'title'    => 'Plugin Logo',
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
add_action( 'customize_register', 'site_logo_customizer_settings' );

function site_logo_customizer_settings( $wp_customize ) {
	$wp_customize->add_section( 'site_logo_section', array(
		'title'    => 'Site Logo',
		'priority' => 30,
	) );
	$wp_customize->add_setting( 'site_logo_setting', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_logo_control', array(
		'label'    => 'Upload a site logo',
		'section'  => 'site_logo_section',
		'settings' => 'site_logo_setting',
	) ) );
}
add_action( 'customize_register', 'custom_logo_customizer_settings' );


http://woo-multi-product.local/wp-content/themes/flance-demo/assets/images/site-logo.png

function customizer_theme_links($wp_customize) {
    // Create a section for the theme links
    $wp_customize->add_section('theme_links', array(
        'title' => 'Theme Links',
        'priority' => 30,
    ));

    // Add settings and controls for Lite Version and Pro Version links
    $wp_customize->add_setting('lite_version_link', array(
        'default' => 'https://wordpress.org/plugins/flance-add-multiple-products-order-form-for-woocommerce/',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_setting('pro_version_link', array(
        'default' =>  get_site_url().'/flance-pro-add-multiple-products-order-form-for-woocommerce/',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('lite_version_link', array(
        'label' => 'Lite Version Link',
        'section' => 'theme_links',
        'type' => 'text',
    ));

    $wp_customize->add_control('pro_version_link', array(
        'label' => 'Pro Version Link',
        'section' => 'theme_links',
        'type' => 'text',
    ));
}
add_action('customize_register', 'customizer_theme_links');
