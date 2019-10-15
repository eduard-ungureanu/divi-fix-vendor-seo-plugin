<?php
/**
* Plugin Name: Divi Fix Vendor Seo Plugin
* Plugin URI: https://divi.tech/
* Description: A quick fix for the WCMp Vendor SEO and Analytics 3rd party plugin
* Version: 1.0.1
* Author: Ungureanu Eduard
* Author URI: https://divi.tech/
**/

defined( 'ABSPATH' ) or exit;

add_action( 'plugins_loaded', 'plugin_prefix_woocommerce_check' );
	function plugin_prefix_woocommerce_check() {
		if ( function_exists( 'is_woocommerce' ) ) { 
			global $product;
			if (is_product()) {
				var_dump($product->ID);
		}
		}   
		else {
			return;
		}   
}