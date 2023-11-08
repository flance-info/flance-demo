<?php
include_once 'inc/helpers.php';

function enqueue_custom_styles() {

		// Enqueue your custom styles
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/styles/style.css', array(), '1.0', 'all' );
	// You can enqueue additional styles from the "assets" folder
	wp_enqueue_style( 'another-style', get_template_directory_uri() . '/assets/styles/another.css', array(), '1.0', 'all' );
	// Add more styles as needed

	wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );


function enqueue_stm_custom_styles() {

    // Enqueue your custom styles
    wp_enqueue_style('stm_zoom_main-css', get_template_directory_uri() . '/assets/cssfile/main.css', array(), '1.0', 'all');
    wp_enqueue_style('stm-font-awesome-min-css', get_template_directory_uri() . '/assets/cssfile/font-awesome.min.css', array(), '1.0', 'all');
   // wp_enqueue_style('twen-style-css', get_template_directory_uri() . '/assets/cssfile/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_stm_custom_styles');

function flance_time_link(){

}

function flance_edit_link(){

}

function flance_posted_on()	{

}


function enable_excerpts() {
    add_post_type_support( 'post', 'excerpt' );
	 add_post_type_support('page', 'excerpt');
}
add_action('init', 'enable_excerpts');