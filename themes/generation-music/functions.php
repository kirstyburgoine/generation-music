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

	add_image_size('carousel-image', 700, 700, TRUE);
	add_image_size('home-image', 350, 350, TRUE);
	add_image_size('basetheme-full-width', 1038, 576, true );



	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'basetheme' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'basetheme' ),
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






// ----------------------
// Enqueue scripts and styles for the front end.
//
function basetheme_scripts() {
		
	if ( !is_admin() ) {


		// Setup stylesheets in header
		wp_enqueue_style( 'ss-social-circle', get_template_directory_uri() . '/assets/fonts/ss-social-circle.min.css', array() );
		wp_enqueue_style( 'ss-standard', get_template_directory_uri() . '/assets/fonts/ss-standard.min.css', array() );


		// Setup jQuery
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js');
	    wp_enqueue_script( 'jquery' );


		wp_register_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.min.js', array('jquery' ), null, true );	
		wp_register_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery' ), null, true );		
		wp_register_script('scroll', get_template_directory_uri().'/assets/js/scrollTo.min.js', array('jquery' ), null, true );
		//wp_register_script('infinite', get_template_directory_uri().'/assets/js/jquery.infinitescroll.min.js', array('jquery' ), null, true );
		//wp_register_script('flexslider', get_template_directory_uri().'/assets/js/jquery.flexslider.min.js', array('jquery' ), null, true );
		wp_register_script('vids', get_template_directory_uri().'/assets/js/jquery.fitvids.min.js', array('jquery' ), null, true );
		//wp_register_script('qtip', get_template_directory_uri().'/assets/js/jquery.qtip.min.js', array('jquery' ), null, true );
		//wp_register_script('reveal', get_template_directory_uri().'/assets/js/jquery.reveal.min.js', array('jquery' ), null, true );
		//wp_register_script('slicknav', get_template_directory_uri().'/assets/js/jquery.slicknav.min.js', array('jquery' ), null, true );
		wp_register_script('custom', get_template_directory_uri().'/assets/js/custom.min.js', array ( 'jquery' ), null, true );
		
		
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'bootstrap' );
		wp_enqueue_script( 'scroll' );
		//wp_enqueue_script( 'infinite' );
		//wp_enqueue_script( 'flexslider' );
		wp_enqueue_script( 'vids' );
		//wp_enqueue_script( 'qtip' );
		//wp_enqueue_script( 'reveal' );
		//wp_enqueue_script( 'slicknav' );
		wp_enqueue_script( 'custom' );
			
	}

}
add_action('wp_enqueue_scripts', 'basetheme_scripts');

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