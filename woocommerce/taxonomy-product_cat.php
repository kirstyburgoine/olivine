<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template.
 *
 * Override this template by copying it to yourtheme/woocommerce/taxonomy-product_cat.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

	$term = get_queried_object()->term_id;
   	$termid = get_term($term, 'product_cat' );

   	//echo $termid;

   	// If the lookbooks category get different layout with myboards and no filters
	if ( $termid->parent == '24' ) :
		wc_get_template( 'lookbook-product.php' );

		// else treat these pages as standard shop archives
	else : 
		wc_get_template( 'archive-product.php' );
	endif;
