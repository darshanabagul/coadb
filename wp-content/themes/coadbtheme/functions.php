<?php

function coadb_script_enquire()
{
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array());
	wp_enqueue_style('font', get_template_directory_uri() . '/css/font.css', array(),'all');
	wp_enqueue_style('customestyle', get_template_directory_uri() . '/css/home.css', array(),'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array());
	wp_enqueue_style('load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', array());

	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true);	
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);	
	wp_enqueue_script('wowjs', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true);	
}
add_action('wp_enqueue_scripts', 'coadb_script_enquire');

function coadb_theme_setup()
{
	add_theme_support('menus');
	register_nav_menu('primary','Primary Header Navigation');
	register_nav_menu('secondary','Footer Header Navigation');
}
add_action('init', 'coadb_theme_setup');

/*
===========================================
			Include Walker File
===========================================
*/
//require get_template_directory() . '/inc/walker.php';



?>