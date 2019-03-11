<?php

function coadb_script_enquire()
{
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array());
	wp_enqueue_style('font', get_template_directory_uri() . '/css/font.css', array(),'all');
	wp_enqueue_style('customestyle', get_template_directory_uri() . '/css/home.css', array(),'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array());
	wp_enqueue_style('inner-layout', get_template_directory_uri() . '/css/inner-layout.css', array());
	wp_enqueue_style('load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', array());

	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true);	
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);	
	wp_enqueue_script('wowjs', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true);	
}
add_action('wp_enqueue_scripts', 'coadb_script_enquire');

function coadb_theme_setup()
{
	add_theme_support('menus');
	register_nav_menu('home','Home Header Navigation'); //home page menu(merch,about,contact us, learning center)
	register_nav_menu('surname','Surname Menu Navigation'); //surname details menu(Gallery info, purchase jpg, buy merchendize, which coat of page)
	register_nav_menu('other','Other Menu Navigation'); //other pages menu
	register_nav_menu('social','Social Menu Navigation');// social links menu
	register_nav_menu('footer','Footer Menu Navigation'); //footer menu
}
add_action('init', 'coadb_theme_setup');
//do_action( 'get_header', $name );

function coadb_theme_widgets_init()
{
	register_sidebar(array(
		'name' => 'Level Up New Widget Area',
		'id' => 'level up new widget area',
		'before_widgets' => '<aside>',
		'after_widgets' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
}
add_action('widgets_init', 'coadb_theme_widgets_init');

/*
===========================================
		Activate custom settings
===========================================
*/

function cptui_register_my_cpts_surnames() {
	/**
	 * Post Type: Surnames.
	 */
	$labels = array(
		"name" => __( "Surnames", "custom-post-type-ui" ),
		"singular_name" => __( "Surname", "custom-post-type-ui" ),
		"menu_name" => _x('Surname', 'admin menu'),
		"name_admin_bar" => _x('Surname', 'admin bar'),
		"add_new" => _x('Add New', 'add new'),
		"add_new_item" => __('Add New Surname'),
		"new_item" => __('New Surname'),
		"edit_item" => __('Edit Surname'),
		"view_item" => __('View Surname'),
		"all_items" => __('All Surname'),
		"search_items" => __('Search Surname'),
		"not_found" => __('No Surname found.'),
	);

	$args = array(
		"supports" => array( "title", "editor", "thumbnail", "comments", "author", "excerpt" ),
		'labels' => $labels,
		'public' => true,
		'query_var' => true,
		"rewrite" => array( "slug" => "surnames", "with_front" => true ),
		'has_archive' => false,
		'hierarchical' => false
	);
	register_post_type( "surnames", $args );
}

add_action( 'init', 'cptui_register_my_cpts_surnames' );

function find_coat_of_arms() {
	global $wp;
	$current_slug = add_query_arg( array(), $wp->request );
    $link_array = explode('/',$current_slug);
    $page = end($link_array);
    //$path = get_template_directory_uri() .'/processed_images/dolan/';
    
    $uploads = wp_upload_dir();
    if ($dir = opendir($uploads['basedir'].'/processed_images')) {
		$folders = array();
		while (false !== ($file = readdir($dir))) {
			if ($file != "." && $file != "..") {
				$folders[] = $file; 
			}
		}
		closedir($dir);
	}
	if (!empty($folders)) {
		$images = array();
		$all_images = array();
		if (in_array($page, $folders)) {
			if ($dir = opendir($uploads['basedir'].'/processed_images/'.$page)) {
				while (false !== ($file = readdir($dir))) {
					if ($file != "." && $file != "..") {
						$images[] = $page.'/'.$file; 						
					}
				}
				closedir($dir);
			}
		}
	}

	if (!empty($images)) {
    	$coat_of_arms['images'] = array_chunk($images, 6);
	}
    return $coat_of_arms;
}


/*
===========================================
			Include Walker File
===========================================
*/
//require get_template_directory() . '/inc/walker.php';

?>