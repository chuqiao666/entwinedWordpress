<?php


  // Theme Style
add_action( 'wp_enqueue_scripts', 'enqueue_myNewTheme_styles' );



function enqueue_myNewTheme_styles() {

		wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri() . '/css/includes/bootstrap.css', array(), '1.1', 'all');

		wp_enqueue_style('myNewTheme-style', get_stylesheet_directory_uri() . '/css/style.css', array(), '1.1', 'all');
		
		// wp_enqueue_script('jquery', get_template_directory_uri() . '/js/includes/jquery3_3_1.js');

	
}
function enqueue_jquery(){
	wp_enqueue_script('jquery', get_template_directory_uri() .'/js/includes/jquery3_3_1.js' );
}
add_action('wp_enqueue_scripts', 'enqueue_jquery');

function torque_enqueue_javascript1() { 
	wp_enqueue_script( 'banner_images', get_template_directory_uri() . '/js/blocks/banner_images.js'); 
}
add_action( 'wp_enqueue_scripts', 'torque_enqueue_javascript1' );

function torque_enqueue_javascript2() { 
    wp_enqueue_script( 'logo_uploader', get_template_directory_uri() . '/js/blocks/logo_uploader.js'); 
}
add_action( 'wp_enqueue_scripts', 'torque_enqueue_javascript2' );

function torque_enqueue_javascript3() { 
	wp_enqueue_script( 'wp_header', get_template_directory_uri() . '/js/blocks/wp-header.js'); 
}
add_action( 'wp_enqueue_scripts', 'torque_enqueue_javascript3' );



	function register_main_menus() {
		register_nav_menus(
			array(
				'main_menu' => __( 'top'),
				'footer_menu' => __('footer_menu')
			 )
		 );
	}

	function register_footer_menus() {
		register_nav_menus(
			array(
				'footer_menu' => __('footer_menu')
			 )
		 );
	}

	add_action( 'init', 'register_main_menus' );
	add_action( 'init', 'register_footer_menus' );

	add_theme_support("menus");
	//Register an ACF option tab
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(
		array(
		    'page_title' => 'Theme General Settings', 
		    'menu_title' => 'website Settings', 
		    'menu_slug' => 'theme-general-settings', 
		    'capability' => 'edit_posts', 
		    'redirect' => false
		)
	);
}



?>