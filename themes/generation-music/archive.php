<?php
/* 
 * Main blog Archive
 

 	$category = get_categories();
	$cat = get_query_var('cat');

	if ($category) {
	$top = get_category_parents($category[0], false, ',');
	$cat_top = explode(",", $top);
	$cat_id = get_cat_id($cat_top[0]);
	}
	
	$cat_title = get_cat_name($cat_id);
	$current_title = get_cat_name($cat);

*/


get_header(); ?>

<div class="container" id="content">

	<div class="row">

		<div class="col-xs-12 col-md-9">



				<header class="page-header">

					<h1>
			                    
					<?php 
					if ( is_category() ) : 

						single_cat_title(); 

					elseif ( is_tag() ) : ?>
						Posts Tagged <strong><?php single_tag_title(); ?></strong>
					
					<?php 
					elseif ( is_day() ) : ?>
						<?php printf( __( 'Daily Archives: %s', 'parentheme' ), '<strong>' . get_the_date() . '</strong>' ); ?>
						
					<?php elseif ( is_month() ) : ?>
						<?php printf( __( 'Monthly Archives: %s', 'parentheme' ), '<strong>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'parentheme' ) ) . '</strong>' ); ?>
											
					<?php elseif ( is_year() ) : ?>
						<?php printf( __( 'Yearly Archives: %s', 'parentheme' ), '<strong>' . get_the_date( _x( 'Y', 'yearly archives date format', 'parentheme' ) ) . '</strong>' ); ?>
											
					<?php else : ?>
						<?php _e( '<strong>All Items</strong>', 'parentheme' ); ?>
					<?php endif; ?>
					
					</h1>

				</header>

				<?php
				$category_description = category_description();
				if ( ! empty( $category_description ) )
				echo apply_filters( 'category_archive_meta', '<div class="description">' . $category_description . '</div>' ); ?>

				<?php 
					//
					while ( have_posts() ) : the_post(); 

						get_template_part( 'includes/content', 'archive' );

					endwhile;

					wpbeginner_numeric_posts_nav();  ?>

		</div>

		<div class="col-xs-12 col-md-3">

			<?php get_sidebar(); ?>

		</div>



	</div> <!-- // row -->

</div>



<?php get_footer(); ?>