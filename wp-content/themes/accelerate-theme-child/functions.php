<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

// Add custom post types 

function create_custom_post_types() {
	register_post_type( 'case_studies', 		// gives custom post type a unique name //
		array(									// array ath defines a bunch of settings for new post type //
			'labels' => array(
				'name' => __('Case Studies'),	// human readable name seen in dashboard //
				'singular_name' => __('Case Study'),	// human readable name for singular post //
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'case-studies'),	// name used in the URLs for these posts //
			)
		);
		register_post_type( 'services', 		// gives custom post type a unique name //
		array(									// array ath defines a bunch of settings for new post type //
			'labels' => array(
				'name' => __('Services'),	// human readable name seen in dashboard //
				'singular_name' => __('Service'),	// human readable name for singular post //
			),
			'public' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'services'),	// name used in the URLs for these posts //
			)
		);
	}

add_action('init', 'create_custom_post_types');
