<?php // functions/admin.php

function basetheme_widgets_init() {
	//require get_template_directory() . '/inc/widgets.php';
	//register_widget( 'Twenty_Fourteen_Ephemera_Widget' );


	register_sidebar( array(
		'name'          => __( 'Content Sidebar', 'vinylclock' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Sidebar that appears on the right in pages only.', 'vinylclock' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 2', 'vinylclock' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears in the footer section of the site in column 4 - Initially used for Exciting Stuff.', 'vinylclock' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area 1', 'vinylclock' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section of the site in column 2 - Initially used for Staff Pics.', 'vinylclock' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


}
add_action( 'widgets_init', 'basetheme_widgets_init' );

?>