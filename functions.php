<?php
if ( ! function_exists( 'basetheme_setup' ) ) :

function basetheme_setup() {

	load_theme_textdomain( 'basetheme', get_template_directory() . '/languages' );

	//----------------
	// THEME SUPPORT STUFF
	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

/*
	add_theme_support( 'infinite-scroll', array(
		'type' => 'click',
	    'container' => '.products',
	    'footer' => 'page',
	) );
*/
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 672, 372, true );
	//add_theme_support('menus');


	//----------------
	// THUMBNAIL SIZES

	add_image_size('carousel-image', 1170, 665, TRUE);
	add_image_size('home-image-landscape', 555, 354, TRUE);
	add_image_size('home-image-portrait', 555, 720, TRUE);



	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'basetheme' ),
		'utility'   => __( 'Utility menu', 'basetheme' ),
	) );

	//----------------------
	// Switch default core markup for search form, comment form, and comments
	// to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	
}
endif; // basetheme_setup
add_action( 'after_setup_theme', 'basetheme_setup' );


require_once('wp_bootstrap_navwalker.php');



// ----------------------
// Enqueue scripts and styles for the front end.
//
function basetheme_scripts() {
		
	if ( !is_admin() ) {


		// Setup stylesheets in header
		wp_enqueue_style( 'ss-social-circle', get_template_directory_uri() . '/assets/fonts/ss-social-regular.min.css', array() );
		wp_enqueue_style( 'ss-standard', get_template_directory_uri() . '/assets/fonts/ss-standard.min.css', array() );
		wp_enqueue_style( 'open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,400italic');


		// Setup jQuery
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
	    wp_enqueue_script( 'jquery' );


		wp_register_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.min.js', array('jquery' ), null, true );	
		wp_register_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery' ), null, true );		
		wp_register_script('scroll', get_template_directory_uri().'/assets/js/scrollTo.min.js', array('jquery' ), null, true );
		wp_register_script('cycle', get_template_directory_uri().'/assets/js/masonry.js', array('jquery' ), null, true );
		wp_register_script('infinite', get_template_directory_uri().'/assets/js/infinite-scroll.min.js', array('jquery' ), null, true );
		wp_register_script('fancybox', get_template_directory_uri().'/assets/js/jquery.fancybox.pack.min.js', array('jquery' ), null, true );
		wp_register_script('vids', get_template_directory_uri().'/assets/js/jquery.fitvids.min.js', array('jquery' ), null, true );
		//wp_register_script('qtip', get_template_directory_uri().'/assets/js/jquery.qtip.min.js', array('jquery' ), null, true );
		//wp_register_script('reveal', get_template_directory_uri().'/assets/js/jquery.reveal.min.js', array('jquery' ), null, true );
		//wp_register_script('slicknav', get_template_directory_uri().'/assets/js/jquery.slicknav.min.js', array('jquery' ), null, true );
		wp_register_script('custom', get_template_directory_uri().'/assets/js/custom.min.js', array ( 'jquery' ), null, true );
		
		
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'bootstrap' );
		wp_enqueue_script( 'scroll' );
		//wp_enqueue_script( 'masonry' );
		//wp_enqueue_script( 'infinite' );
		//wp_enqueue_script( 'fancybox' );
		wp_enqueue_script( 'vids' );
		//wp_enqueue_script( 'qtip' );
		//wp_enqueue_script( 'reveal' );
		//wp_enqueue_script( 'slicknav' );
		wp_enqueue_script( 'custom' );
			
	}

}
add_action('wp_enqueue_scripts', 'basetheme_scripts');



//-----------------
// PAGINATION

function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

// -----------------------------------------------------------------------------
// -----------------------------------------------------------------------------


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}



	if(function_exists('woocommerce_new_styles')){
        $default_colors = get_option('woocommerce_frontend_css_colors');
        /*
        Defaults are: 
        [primary] => #ad74a2
        [secondary] => #f7f6f7
        [highlight] => #85ad74
        [content_bg] => #ffffff
        [subtext] => #777777 
        */
        if(!$default_colors || !$default_colors['primary'] || $default_colors['primary'] == '#ad74a2'){
            update_option('woocommerce_frontend_css_colors',array(
                'primary' => '#a38530', 
                'secondary' => '#fddc8f', 
                'highlight' => '#a38530',
                'content_bg' => '#ffffff',
                'subtext' => '#777777',
            ));
            woocommerce_new_styles();
        }
    }



// -----------------------------------------------------------------------------
// -----------------------------------------------------------------------------
/* Shopping cart functions */
function vc_woocommerce_cart_dropdown() {
	global $woocommerce;
	$cart_subtotal = $woocommerce->cart->get_cart_subtotal();
	$link = $woocommerce->cart->get_cart_url();
	$cart_items_count = $woocommerce->cart->cart_contents_count;

	$output = "";
	$output .= "<ul class='cart_dropdown'><li class='cart_dropdown_first'>";
	$output .= "<a class='cart_dropdown_link' href='".$link."'><span>".__('Shopping Bag', 'vc')."</span> <span class='count'>(".$cart_items_count.")</span></a><!--<span class='cart_subtotal'>".$cart_subtotal."</span>-->";
	$output .= "<div class='dropdown_widget dropdown_widget_cart'>";
	$output .= '<div class="widget_shopping_cart_content"></div>';
	$output .= "</div>";
	$output .= "</li></ul>";

	echo $output;
}
add_action( 'vc_cart', 'vc_woocommerce_cart_dropdown' );

// -----------------------------------------------------------------------------

function vc_woocommerce_header_cart_fragments( $fragments ) {
	global $woocommerce;

	$cart_subtotal    = $woocommerce->cart->get_cart_subtotal();
	$link             = $woocommerce->cart->get_cart_url();
	$cart_items_count = $woocommerce->cart->cart_contents_count;

	ob_start(); ?>

	<a class='cart_dropdown_link' href='<?php echo $link; ?>'><span><?php _e('Basket', 'vc') ?></span> <span class='count'>(<?php echo $cart_items_count; ?>)</span></a>

	<?php //echo $woocommerce->cart->cart_contents_count; ?>

	<?php

	$fragments['a.cart_dropdown_link'] = ob_get_clean();

	return $fragments;
}

add_filter('add_to_cart_fragments', 'vc_woocommerce_header_cart_fragments');


// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

// Display 12 products per page. Goes in functions.php
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );



// Change wishlist button labels to reflect boards instead
function edit_browse_wishlist_label() {
	return 'Browse Boards';
}
add_filter( 'yith-wcwl-browse-wishlist-label', 'edit_browse_wishlist_label' );



// Add 'Ref: ' to SKUs
function ref_woocommerce_get_sku( $sku, $instance ) {

    if ( ! is_admin() ) {
        $sku = "Ref: " . $sku;
    }
    return $sku;
}

add_filter( 'woocommerce_get_sku', 'ref_woocommerce_get_sku', 10, 2 );

/** to change the position of excerpt **/
remove_action('woocommerce_single_product_summary', 'woocommerce_get_sku', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_get_sku', 6 );


remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);


// Disable Reviews tab

add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );

function wcs_woo_remove_reviews_tab($tabs) {
	unset($tabs['reviews']);
	return $tabs;
}




//-----------------
// SHORT CODES

	function hr() {
		return '<hr />';
	}
	add_shortcode("hr", "hr");	

	function br() {
		return '<div class="seprator"></div>';
	}
	add_shortcode("br", "br");	

	function nbsp() {
		return '<p>&nbsp;</p>';
	}
	add_shortcode("nbsp", "nbsp");	

	function faq_shortcode( $atts, $content = null ) {
	   return '<div class="faq-container">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('faq', 'faq_shortcode');	

	function btn_shortcode( $atts, $content = null ) {
		extract( shortcode_atts( array(
	    	"href" => 'http://'
	  	), $atts));
		return '<a href="'.$href.'" class="btn">'.$content.'</a>';
	}

	add_shortcode('btn', 'btn_shortcode');	


//--------------
// INCLUDES


// bury groups of functionality within the functions/ directory
// loader.php will include all .php files from within

require_once('functions/loader.php');

?>