<?php

function coadb_script_enquire()
{
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array());
	wp_enqueue_style('font', get_template_directory_uri() . '/css/font.css', array(),'all');
	wp_enqueue_style('customestyle', get_template_directory_uri() . '/css/home.css', array(),'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/style.css', array(),'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array());
	wp_enqueue_style('inner-layout', get_template_directory_uri() . '/css/inner-layout.css', array());
	wp_enqueue_style('load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', array());
	wp_enqueue_style('magnific', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css', array());

	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true);	
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);	
	wp_enqueue_script('wowjs', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true);	
	wp_enqueue_script('magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js', array());	
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
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 140, 140, true );
}
add_action('init', 'coadb_theme_setup');

function theme_enqueue_scripts() {
	// Enqueue jQuery UI and autocomplete
	wp_enqueue_script( 'jquery-ui-core' );
    wp_enqueue_script( 'jquery-ui-autocomplete' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

function theme_autocomplete_dropdown_shortcode( $atts ) {
	return '<input type="text" name="autocomplete" id="autocomplete" value="" placeholder="Search by typing product name..." />';
}
add_shortcode( 'autocomplete', 'theme_autocomplete_dropdown_shortcode' );

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

function cptui_register_my_cpts_glossary() {
	/**
	 * Post Type: Surnames.
	 */
	$labels = array(
		"name" => __( "Glossary", "custom-post-type-ui" ),
		"singular_name" => __( "Glossary", "custom-post-type-ui" ),
		"menu_name" => _x('Glossary', 'admin menu'),
		"name_admin_bar" => _x('Glossary', 'admin bar'),
		"add_new" => _x('Add New', 'add new'),
		"add_new_item" => __('Add New Glossary'),
		"new_item" => __('New Glossary'),
		"edit_item" => __('Edit Glossary'),
		"view_item" => __('View Glossary'),
		"all_items" => __('All Glossary'),
		"search_items" => __('Search Glossary'),
		"not_found" => __('No Glossary found.'),
	);

	$args = array(
		"supports" => array( "title", "editor", "thumbnail", "comments", "author", "excerpt" ),
		'labels' => $labels,
		'public' => true,
		'query_var' => true,
		"rewrite" => array( "slug" => "glossary", "with_front" => true ),
		'has_archive' => false,
		'hierarchical' => false,
		'taxonomies' => array( 'category' ),
	);
	register_post_type( "glossary", $args );
}

add_action( 'init', 'cptui_register_my_cpts_glossary' );

function cptui_register_my_cpts_faq() {
	/**
	 * Post Type: Surnames.
	 */
	$labels = array(
		"name" => __( "FAQ", "custom-post-type-ui" ),
		"singular_name" => __( "FAQ", "custom-post-type-ui" ),
		"menu_name" => _x('FAQ', 'admin menu'),
		"name_admin_bar" => _x('FAQ', 'admin bar'),
		"add_new" => _x('Add New', 'add new'),
		"add_new_item" => __('Add New FAQ'),
		"new_item" => __('New FAQ'),
		"edit_item" => __('Edit FAQ'),
		"view_item" => __('View FAQ'),
		"all_items" => __('All FAQ'),
		"search_items" => __('Search FAQ'),
		"not_found" => __('No FAQ found.'),
	);

	$args = array(
		"supports" => array( "title", "editor", "thumbnail", "comments", "author", "excerpt" ),
		'labels' => $labels,
		'public' => true,
		'query_var' => true,
		"rewrite" => array( "slug" => "faq", "with_front" => true ),
		'has_archive' => false,
		'hierarchical' => false,
		'taxonomies' => array( 'category' ),
	);
	register_post_type( "faq", $args );
}

add_action( 'init', 'cptui_register_my_cpts_faq' );

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

function get_all_FAQ() {
	$faqs= query_posts(array(
	   'post_type' => 'faq',
	   'orderby'=> 'title', 
	   'order' => 'ASC',
	   'taxonomy' => 'category',
	));
}

function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}
 
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

/*
===========================================
			Include Walker File
===========================================
*/
//require get_template_directory() . '/inc/walker.php';

class Description_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth, $args)
    {
       $classes = empty($item->classes) ? array () : (array) $item->classes;
        $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        !empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';
        $output .= "<a id='menu-item-$item->ID' $class_names>";
        $attributes  = '';
        !empty( $item->attr_title ) and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
        !empty( $item->target ) and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
        !empty( $item->xfn ) and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
        !empty( $item->url ) and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $item_output = $args->before
        . "<a $attributes>"
        . $args->has_children->link_before
        . $title
        . '</a></a>'
        . $args->link_after
        . $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
    if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
?>