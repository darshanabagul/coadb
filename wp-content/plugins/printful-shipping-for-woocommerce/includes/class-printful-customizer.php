<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class Printful_Customizer {

    /**
     * Initialize the values, hooks and actions
     */
    public static function init()
    {
        $customizer = new self;

        $customizer->hook_actions();
    }

    public function hook_actions()
    {
        // Save customized product as independent cart item data
        add_filter( 'woocommerce_add_cart_item_data', array( $this, 'save_customizer_hash_data_to_cart' ), 10, 1 );
        add_filter( 'woocommerce_cart_item_thumbnail', array( $this, 'change_woocommerce_cart_item_thumbnail' ), 20, 2 );
	    // add property to order
	    add_action('woocommerce_add_order_item_meta', array( $this, 'save_customizer_hash_order_meta' ), 10, 3 );

        add_action( 'wp_ajax_printful_customized_thumb', array( $this, 'printful_customized_thumb' ) );
        add_action( 'wp_ajax_nopriv_printful_customized_thumb', array( $this, 'printful_customized_thumb' ) );
    }

    /**
     * @param $cart_item_data
     * @return mixed
     */
    public function save_customizer_hash_data_to_cart( $cart_item_data ) {
        if ( isset( $_POST['pfc_hash'] ) && ! empty( $_POST['pfc_hash'] ) ) {
            // Set the custom data in the cart item
            $cart_item_data['pfc_hash'] = (string) sanitize_text_field( $_POST['pfc_hash'] );
            // set pending actual image property, so it is not reloaded each time
            $cart_item_data['customizer_image_generated'] = false;

            // Make each item as a unique separated cart item
            $cart_item_data['unique_key'] = md5( microtime().rand() );
        }

        return $cart_item_data;
    }

    public function change_woocommerce_cart_item_thumbnail( $thumbnail, $cart_item )
    {
        if ( $cart_item
             && !empty( $cart_item['pfc_hash'] )
             && empty( $cart_item['customizer_image_generated'] )
        ) {
            $class = 'attachment-shop_thumbnail wp-post-image'; // Default cart thumbnail class.
            $src = esc_url( Printful_Base::get_asset_url() . 'images/loading.gif' );
            // Construct img tag.
            return "<img src='{$src}' class='{$class} pf-image-pending' data-hash='{$cart_item['pfc_hash']}' />";
        } else if ($cart_item
           && !empty( $cart_item['pfc_hash'] )
           && !empty( $cart_item['customizer_image_generated'] )
           && empty( $cart_item['customizer_image_loaded'] )
           && !empty( $cart_item['customizer_image'] )
        ) {
	        $class = 'attachment-shop_thumbnail wp-post-image'; // Default cart thumbnail class.
	        // Construct img tag.
	        return "<img src='{$cart_item['customizer_image']}' class='{$class}' data-hash='{$cart_item['pfc_hash']}' />";
        }

        return $thumbnail;
    }

	/**
	 * @param $itemId
	 * @param $values
	 * @param $key
	 *
	 * @throws Exception
	 */
    public function save_customizer_hash_order_meta( $itemId, $values, $key )
    {
    	if ( isset( $values['pfc_hash'] ) ) {
    		wc_add_order_item_meta( $itemId, 'pfc_hash', $values['pfc_hash'] );
	    }
    }

	/**
	 * @throws PrintfulException
	 * @throws Exception
	 */
    public static function printful_customized_thumb()
    {
    	if ( empty( $_GET['hashes'] ) ) {
    		return;
	    }

	    $client = Printful_Integration::instance()->get_client();
	    $hashes = implode(',', $_GET['hashes']);
	    $response = $client->get('woocommerce/get-hash-images', array(
	    	'hashes' => $hashes
	    ));

	    // global $woocommerce;
	    $items = WC()->cart->get_cart();

	    foreach ($items as $key => $item) {
			if ( isset( $item['pfc_hash'] ) ) {
				foreach ($response as $hash => $image_url) {
					if ($hash !== $item['pfc_hash']) {
						continue;
					}

					WC()->cart->cart_contents[$key]['customizer_image_generated'] = true;
					WC()->cart->cart_contents[$key]['customizer_image'] = $image_url;
					WC()->cart->cart_contents[$key]['customizer_image_loaded'] = false;
				}
			}
	    }

	    WC()->cart->set_session();

	    echo json_encode($response);
	    exit;
    }
}