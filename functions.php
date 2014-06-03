<?php

add_action( 'wp_enqueue_scripts', 'brand_scripts' );
/**
 * Enqueue child theme Javascript files.
 */
function brand_scripts() {
	wp_enqueue_script( 'jquery.hc-sticky.min.js', get_stylesheet_directory_uri() . '/scripts/jquery.hc-sticky.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'brand.js', get_stylesheet_directory_uri() . '/scripts/brand.js', array( 'jquery' ), false, true );
}

add_action('wp_head','brand_analytics');
/**
 * Add analytics tracking to the header of each page load.
 * Temporary until analytics is handled via spine.
 */
function brand_analytics() {
	?><script id="tracker_agent" src="http://images.wsu.edu/javascripts/tracking/bootstrap_v3.js?gacode=UA-48539105-1&loading=brand&domainName=brand.wsu.edu&id=2" type="text/javascript"></script>
	
	
<?php }

add_action('wp_head','assign_jquery');

function assign_jquery()
{
$output="<script>$=jQuery;</script>";
echo $output;
}