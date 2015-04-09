<?php

add_action( 'wp_enqueue_scripts', 'brand_scripts' );
/**
 * Enqueue child theme Javascript files.
 */
function brand_scripts() {
	wp_enqueue_script( 'jquery.hc-sticky.min.js', get_stylesheet_directory_uri() . '/scripts/jquery.hc-sticky.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'skrollr.js', get_stylesheet_directory_uri() . '/scripts/skrollr.min.js' );
	wp_enqueue_script( 'brand.js', get_stylesheet_directory_uri() . '/scripts/brand.js', array( 'jquery' ), false, true );
}

add_action('wp_head','assign_jquery');
function assign_jquery() {
	echo '<script> $=jQuery;</script>';
}