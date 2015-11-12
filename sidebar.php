<div class="sidebar">



	<?php 
	$term = get_queried_object()->term_id;
   	$termid = get_term($term, 'product_cat' );

   	//echo $termid;

   	// If the lookbooks category or is a page
	if ( $termid->parent == '24' || is_buddypress() || is_page() ) :
		
		if ( is_active_sidebar( 'sidebar-11' ) ) : 
			dynamic_sidebar( 'sidebar-11' ); 
		endif; 

	// else if its the main products section
	elseif ( is_shop() ) : 

		if ( is_active_sidebar( 'sidebar-10' ) ) : 
			dynamic_sidebar( 'sidebar-10' ); 
		endif; 

	else : 

		if ( is_active_sidebar( 'sidebar-1' ) ) : 
			dynamic_sidebar( 'sidebar-1' ); 
		endif; 
		
	endif;

	?>

<div class="seperator"></div>
</div>