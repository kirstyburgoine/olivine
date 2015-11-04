<?php // functions/admin.php

function basetheme_widgets_init() {
	//require get_template_directory() . '/inc/widgets.php';
	//register_widget( 'Twenty_Fourteen_Ephemera_Widget' );


	register_sidebar( array(
		'name'          => __( 'Content Sidebar', 'basetheme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Sidebar that appears on the right in pages only.', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 1', 'basetheme' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears in the footer section in Column 1 - Row one, column one.', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 2 - Top', 'basetheme' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section in Column 2 - Row one, column one.', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 2 - Top', 'basetheme' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears in the footer section in Column 2 - Row one, column two.', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title opacity-zero">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 2 - Top', 'basetheme' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Appears in the footer section in Column 2 - Row one, column three.', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title opacity-zero">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 2 - Bottom', 'basetheme' ),
		'id'            => 'sidebar-6',
		'description'   => __( 'Appears in the footer section in Column 2 - Row two, column one.', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 2 - Bottom', 'basetheme' ),
		'id'            => 'sidebar-7',
		'description'   => __( 'Appears in the footer section in Column 2 - Row two, column two.', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 2 - Bottom', 'basetheme' ),
		'id'            => 'sidebar-8',
		'description'   => __( 'Appears in the footer section in Column 2 - Row two, column three.', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title opacity-zero">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 3', 'basetheme' ),
		'id'            => 'sidebar-9',
		'description'   => __( 'Appears in the footer section in Column 3 - Row two.', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => __( 'Products Sidebar', 'basetheme' ),
		'id'            => 'sidebar-10',
		'description'   => __( 'Sidebar that appears on the left of the main products page. Originally used to filter products', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Lookbooks / Pages Sidebar', 'basetheme' ),
		'id'            => 'sidebar-11',
		'description'   => __( 'Sidebar that appears on the right of the lookbooks product category archives and standard pages. Originally used to show Our Boards', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Product Categories Header Widget', 'basetheme' ),
		'id'            => 'sidebar-12',
		'description'   => __( 'Widget in header area on product category pages. Originally used to show Get Our Design Team Involved', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s header-widget mobile-display-none">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title display-none">',
		'after_title'   => '</h3>',
	) );



}
add_action( 'widgets_init', 'basetheme_widgets_init' );

?>