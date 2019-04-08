<?php

function coadb_script_enquire()
{
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array());
	wp_enqueue_style('font', get_template_directory_uri() . '/css/font.css', array(),'all');
	wp_enqueue_style('customestyle', get_template_directory_uri() . '/css/home.css', array(),'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/style.css', array(),'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array());
	wp_enqueue_style('inner-layout', get_template_directory_uri() . '/css/inner-layout.css', array());
	wp_enqueue_style('islick', get_template_directory_uri() . '/css/slick.css', array());
	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array());
	wp_enqueue_style('myslick', get_template_directory_uri() . '/css/myslick.css', array());
	wp_enqueue_style('load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', array());
	wp_enqueue_style('magnific', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css', array());

	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true);	
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);	
	wp_enqueue_script('wowjs', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true);	
	wp_enqueue_script('magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js', array());	
	wp_enqueue_script('jquery-2.2.0', 'https://code.jquery.com/jquery-2.2.0.min.js', array());	
	wp_enqueue_script('slickjs', get_template_directory_uri() . '/js/slick.js', array(), '1.0.0', true);	
	
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

function find_coat_of_arms($items = 6) {
	global $wp;
	//$path = get_template_directory_uri() .'/processed_images/dolan/';
    if (!empty($_GET['surname'])) {
    	$page = $_GET['surname'];
    } else {
    	$current_slug = add_query_arg( array(), $wp->request );
    	$link_array = explode('/',$current_slug);
    	$page = end($link_array);
    }
    $page = str_replace("-family-crest-coat-of-arms-and-name-history", "", $page);
    $coat_of_arms['page_slug'] = $page;

    $uploads = wp_upload_dir();

    //s3_url = https://s3.us-east-2.amazonaws.com/bucket.coadb/; 

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
    	$coat_of_arms['images'] = array_chunk($images, $items);
	}
	
    return $coat_of_arms;
}

function get_all_surnames() {
	$surnames= query_posts(array(
	   'post_type' => 'surnames',
	   'orderby'=> 'title', 
	   'order' => 'ASC',
	   'posts_per_page' => 1000
	));
	$result = array();
	foreach ($surnames as $item) {
	    $firstLetter = substr($item->surname, 0, 1);
	    $result[$firstLetter][] = $item;
	}
	//array_multisort($result, SORT_DESC, $surnames);  //sort array according to alphabetically
	//echo '<pre>';
	//print_r($result);
	//echo '</pre>';
	return $result;
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
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
       $classes = empty($item->classes) ? array () : (array) $item->classes;
        $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        !empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';
       // $output .= "<a id='menu-item-$item->ID' $class_names>";
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
        . '</a>'
        . $args->link_after
        . $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}


add_action('wp_ajax_save_custom_data', 'save_custom_data');
add_action('wp_ajax_nopriv_save_custom_data', 'save_custom_data');

function save_custom_data()
{
    session_start();
    $coat_of_arm_img = $_POST['coat_of_arm_img']; //coat of arm img 
    $product_id = $_POST['product_id']; //Product ID    
    $_SESSION['user_custom_datas'] = $coat_of_arm_img;
    
    $quantity = 1; //Or it can be some userinputted quantity
    if( WC()->cart->add_to_cart( $product_id, $quantity )) {
        global $woocommerce;
        $cart_url = $woocommerce->cart->get_cart_url();
        $output = array('success' => 1, 'msg' =>'Added the product to your cart', 'cart_url' => $cart_url );
    } else {
        $output = array('success' => 0, 'msg' => 'Something went wrong, please try again');
    }
    $output = array('success' => 1, 'msg' =>'Added the product to your cart', 'cart_url' => $cart_url );
    wp_die(json_encode($output));
}

add_filter('woocommerce_add_cart_item_data','wdm_add_item_data',1,10);
function wdm_add_item_data($cart_item_data, $product_id) {
	global $woocommerce;
	session_start();	
    $new_value = array();
    $new_value['_custom_options'] = $_SESSION['user_custom_datas'];//$_POST['custom_options'];
    unset($_SESSION['user_custom_datas']);
    if(empty($cart_item_data)) {
        return $new_value;
    } else {
        return array_merge($cart_item_data, $new_value);
    }
}

add_filter('woocommerce_get_cart_item_from_session', 'wdm_get_cart_items_from_session', 1, 3 );
function wdm_get_cart_items_from_session($item,$values,$key) {
    if (array_key_exists( '_custom_options', $values ) ) {
        $item['_custom_options'] = $values['_custom_options'];
    }
    return $item;
}

add_filter('woocommerce_cart_item_name','add_usr_custom_session',1,3);
function add_usr_custom_session($product_name, $values, $cart_item_key ) {
	$return_string = $product_name;
	if($values['data']->get_name() == 'Digital JPG Image') {
		$description = clean($values['_custom_options']);
		$return_string = $product_name . "<br />" . ucfirst($description);
	}
	return $return_string;
}
/*
function custom_new_product_image( $_product_img, $cart_item, $cart_item_key ) {
	$a = $cart_item['data']->get_image();
	if($cart_item['data']->get_name() == 'Digital JPG Image') {
    	$a = '<img src="'.get_site_url().'/wp-content/uploads/processed_images/'.$cart_item['_custom_options'].'" />';
    }
    return $a;
}
add_filter( 'woocommerce_cart_item_thumbnail', 'custom_new_product_image', 10, 3 );
*/

function custom_new_product_image( $_product_img, $cart_item, $cart_item_key ) {
	if ($cart_item['data']->get_name()) {
		$folderName = explode('-', $cart_item['data']->get_name());
		$folderName = $folderName[0];
		$imgName = $cart_item['data']->get_name().'.png';
	}
    $a      =   '<img src="https://s3.us-east-2.amazonaws.com/bucket.coadb/'.$folderName.'/shop-images/'.$imgName.'" />';
    return $a;
}

add_filter( 'woocommerce_cart_item_thumbnail', 'custom_new_product_image', 10, 3 );

add_action('woocommerce_add_order_item_meta','wdm_add_values_to_order_item_meta',1,2);
function wdm_add_values_to_order_item_meta($item_id, $values) {
    global $woocommerce,$wpdb;
    define('TOKEN_DIR', 'tokens');
    //wc_add_order_item_meta($item_id,'JPG Details','<a href="'.get_site_url().'/wp-content/uploads/processed_images/'.$values['_custom_options'].'"> Download </a>'.$values['_custom_options']);
    $fid = base64_encode($values['data']->get_name());
    $key = uniqid(time().'-key',TRUE);
    if(!is_dir(TOKEN_DIR)) {
        mkdir(TOKEN_DIR);
        $file = fopen(TOKEN_DIR.'/.htaccess','w');
        fwrite($file,"Order allow,deny\nDeny from all");
        fclose($file);
    }
    
    // Write the key to the keys list
    $file = fopen(TOKEN_DIR.'/keys','a');
    fwrite($file, "{$key}\n");
    fclose($file);

    if(!empty($values['data']->get_name())) {
    	wc_add_order_item_meta($item_id,'JPG Details','<a href="'.get_site_url().'/download?fid='.$fid.'&key='.$key.'"> Download </a>'.$values['data']->get_name());
    }
    //wc_add_order_item_meta($item_id,'customer_image',$values['_custom_options']['another_example_field']);
}

function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

   return preg_replace('/[^A-Za-z0-9\-]/', ' - ', $string); // Removes special chars.
}

/*
//add product title on shop page of woocommerce
add_action('woocommerce_shop_loop_item_title', 'coadb_wc_loop_product_title',10);
function coadb_wc_loop_product_title() {
	echo '<p class="info">'. get_the_title() .'</p>';
}

//add image to product on shop page of woocommerce
add_action('woocommerce_before_shop_loop_item_title', 'coadb_wc_loop_product_thumbnail', 10);
function coadb_wc_loop_product_thumbnail() { ?>
	<div class="image-box">
  		<?php woocommerce_template_loop_product_thumbnail(); ?>
  	</div>
<?php }

//add price to product on shop page of woocommerce
add_action('woocommerce_after_shop_loop_item_title', 'coadb_wc_loop_price', 10);
function coadb_wc_loop_price() { 
	woocommerce_template_loop_price();
}

//add to cart button to product on shop page of woocommerce
add_action('woocommerce_after_shop_loop_item', 'coadb_wc_loop_add_to_cart');
function coadb_wc_loop_add_to_cart() {
	woocommerce_template_loop_add_to_cart();
}

//add rating to product on shop page of woocommerce
add_action('woocommerce_after_shop_loop_item_title', 'coadb_wc_loop_rating');
function coadb_wc_loop_rating() {
	woocommerce_template_loop_rating();
}

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
*/

/**
 * Ensure cart contents update when products are added to the cart via AJAX
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );
function my_header_add_to_cart_fragment( $fragments ) {
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
        <?php            
    }
        ?></a><?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
    if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

function my_upload_dir($upload) {
  $upload['path']   =  $upload['basedir'] . $upload['subdir'];
  $upload['url']    =  $upload['baseurl'] . $upload['subdir'];
  return $upload;
}
function redirect_to_home() {
  if(!is_admin() && is_page('2')) {
    wp_redirect(get_home_url());
    exit();
  }
}
add_action('template_redirect', 'redirect_to_home');


