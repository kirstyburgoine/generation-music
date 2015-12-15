<?php // functions/admin.php

function basetheme_widgets_init() {
	//require get_template_directory() . '/inc/widgets.php';
	//register_widget( 'Twenty_Fourteen_Ephemera_Widget' );


	register_sidebar( array(
		'name'          => __( 'Pages Sidebar', 'basetheme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Sidebar that appears on the right in pages only.', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => __( 'Posts Sidebar', 'basetheme' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Sidebar that appears on the right in pages only.', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Column 1', 'basetheme' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Widget ready area in footer.', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Column 2', 'basetheme' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Widget ready area in footer.', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Column 3', 'basetheme' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Widget ready area in footer.', 'basetheme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'basetheme_widgets_init' );

?>