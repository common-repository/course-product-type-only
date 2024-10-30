<?php

/**
 * @link              https://in.cleova.com/
 * @since             1.0
 * @package           course-product-type-only
 *
 * @wordpress-plugin
 * Plugin Name:       Course Product Type Only
 * Plugin URI:        https://in.cleova.com/course-product-type-only
 * Description:       This plugin is used to remove choices on product types when edit product on WooCommerce except Course product type (from LearnDash WooCommerce Integration Plugin)
 * Version:           3.0
 * Author:            DICKY IBROHIM
 * Author URI:        https://in.cleova.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       course-product-type-only
 */

add_filter( 'product_type_selector', 'courseproducttypeonly' );
function courseproducttypeonly( $product_types ){
	if( isset($product_types['simple']) ) {    
		unset( $product_types['simple'] );
	}
	if( isset($product_types['grouped']) ) {    
		unset( $product_types['grouped'] );
	}
	if( isset($product_types['external']) ) {    
		unset( $product_types['external'] );
	}
	if( isset($product_types['variable']) ) { 
		unset( $product_types['variable'] );
	}
	if( isset($product_types['virtual']) ) {    
		unset( $product_types[ 'virtual' ] );
	}
	if( isset($product_types['downloadable']) ) {    
	unset( $product_types[ 'downloadable' ] );
	}
	return $product_types;
}