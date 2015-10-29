<div class="sidebar">



	<?php 
	$term = get_queried_object()->term_id;
   	$termid = get_term($term, 'product_cat' );

   	//echo $termid;

	if ( $termid->parent == '24') :
		
		if ( is_active_sidebar( 'sidebar-11' ) ) : 
			dynamic_sidebar( 'sidebar-11' ); 
		endif; 

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