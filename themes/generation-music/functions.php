<?php
if ( ! function_exists( 'basetheme_setup' ) ) :

function basetheme_setup() {

	load_theme_textdomain( 'basetheme', get_template_directory() . '/languages' );

	//----------------
	// THEME SUPPORT STUFF
	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 672, 372, true );
	//add_theme_support('menus');


	//----------------
	// THUMBNAIL SIZES

	add_image_size('banner-image', 400, 300, TRUE);
	add_image_size('page-icon', 120, 90, False);
	add_image_size('home-image', 350, 330, true );



	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'basetheme' ),
		'secondary' => __( 'Secondary menu in footer', 'basetheme' ),
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
		wp_enqueue_style( 'ss-social-circle', get_template_directory_uri() . '/assets/fonts/ss-social-circle.min.css', array() );
		wp_enqueue_style( 'ss-standard', get_template_directory_uri() . '/assets/fonts/ss-standard.min.css', array() );
		wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Raleway:300,500,600,700', array() );
		


		// Setup jQuery
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
	    wp_enqueue_script( 'jquery' );


		wp_register_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.min.js', array('jquery' ), null, true );	
		wp_register_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery' ), null, true );		
		wp_register_script('scroll', get_template_directory_uri().'/assets/js/scrollTo.min.js', array('jquery' ), null, true );
		wp_register_script('carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery' ), null, true );
		wp_register_script('gridrotator', get_template_directory_uri().'/assets/js/jquery.gridrotator.min.js', array('jquery' ), null, true );
		wp_register_script('vids', get_template_directory_uri().'/assets/js/jquery.fitvids.min.js', array('jquery' ), null, true );
		//wp_register_script('qtip', get_template_directory_uri().'/assets/js/jquery.qtip.min.js', array('jquery' ), null, true );
		//wp_register_script('reveal', get_template_directory_uri().'/assets/js/jquery.reveal.min.js', array('jquery' ), null, true );
		//wp_register_script('slicknav', get_template_directory_uri().'/assets/js/jquery.slicknav.min.js', array('jquery' ), null, true );
		wp_register_script('custom', get_template_directory_uri().'/assets/js/custom.min.js', array ( 'jquery' ), null, true );
		
		
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'bootstrap' );
		wp_enqueue_script( 'scroll' );
		wp_enqueue_script( 'carousel' );
		wp_enqueue_script( 'gridrotator' );
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

//-----------------
// SHORT CODES

	function hr() {
		return '<hr />';
	}
	add_shortcode("hr", "hr");	

	function faq_shortcode( $atts, $content = null ) {
	   return '<div class="faq-container">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('faq', 'faq_shortcode');	


//--------------
// INCLUDES


// bury groups of functionality within the functions/ directory
// loader.php will include all .php files from within

require_once('functions/loader.php');

?>