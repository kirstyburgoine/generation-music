<?php
/**
 * The main page template file
 *
 */

get_header(); ?>

<div class="container" id="content">

	<div class="row">

		<div class="col-xs-12 col-md-9">

			<?php 
			if ( have_posts() ) : the_post();  ?>

			<header class="page-header">

				<h1>
		    		                
				<?php the_title(); ?>

				</h1>

			</header>

			<div class="entry-content">
			<?php 
			//---------------------------------------------------------------------------
			//---------------------------------------------------------------------------
			// If events show the event date above the copy
				if ( in_category('3') ) : ?>
				
					<p class="meta">				

						<?php
						$date = get_field('event_date');
						// $date = 19881123 (23/11/1988)

						// extract Y,M,D
						$y = substr($date, 0, 4);
						$m = substr($date, 4, 2);
						$d = substr($date, 6, 2);

						// create UNIX
						$time = strtotime("{$d}-{$m}-{$y}");

						if ( $time ) :
						?>
						<span class="ss-icon ss-standard">date</span>						
						<?php echo date( 'l jS F Y', $time ); 
						endif; ?>

					</p>
						
				<?php
					endif; ?>

				<?php the_content(); ?>

				
			<?php 
			//---------------------------------------------------------------------------
			//---------------------------------------------------------------------------
			// If news show the publish date below the copy
				if ( in_category('2') ) :  ?>

					<p class="meta mt">
						 <?php
							/* translators: used between list items, there is a space after the comma */
							$post_dated = get_the_time('jS F Y');
							$categories_list = get_the_category_list( __( ', ', 'parenttheme' ) );
							$categories = str_replace('rel="category tag"', '', $categories_list);

							/* translators: used between list items, there is a space after the comma */
							$tag_list = get_the_tag_list( '', __( ', ', 'parenttheme' ) );
							if ( '' != $tag_list ) {
								$utility_text = __( 'Posted in %1$s and tagged %2$s on %7$s', 'parenttheme' );
							} elseif ( '' != $categories_list ) {
								$utility_text = __( 'Posted in %1$s on %7$s', 'parenttheme' );
							} else {
								$utility_text = __( 'Posted on %7$s', 'parenttheme' );
							} ?>

						<span class="date-posted">

							<?php
							printf(
								$utility_text,
								$categories,
								$tag_list,
								esc_url( get_permalink() ),
								the_title_attribute( 'echo=0' ),
								get_the_author(),
								esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
								$post_dated
							);
						?>
						</span>
					</p>
				                
				<?php endif; ?>


			</div>

				<nav id="quick-links-single">
                            
		            <h3 class="assistive-text"><?php _e( 'Post navigation', 'parenttheme' ); ?></h3>
		                                    
		            <span class="post-previous"><?php previous_post_link( '%link', __( '<strong><span class="meta-nav">&larr;</span> Previous</strong><br /><span class="prev-title">%title</span>', TRUE) ); ?></span>
		        	<span class="post-next"><?php next_post_link( '%link', __( '<strong>Next <span class="meta-nav">&rarr;</span></strong><br /><span class="next-title">%title</span>', TRUE ) ); ?></span>
		                                    
		        	<div class="seperator"></div>
		                                    
		     	</nav><!-- #nav-single -->   

				<?php comments_template( '', true ); 

			else : ?>

					<header class="page-header">
						<h1>Private Content</h1> 
					</header>

					<div class="entry-content">

						<p>We're very sorry but you must be logged in to view this content. If you are having difficulties please contact us on:</p>

					</div> 

				<?php
			// Closes if private content	
			endif; ?>
		
		</div>

		<div class="col-xs-12 col-md-3">

			<?php get_sidebar(); ?>

		</div>


	</div> <!-- // row -->

</div>

<?php get_footer(); ?>