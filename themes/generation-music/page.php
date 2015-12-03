<?php
/**
 * The main page template file
 *
 */

get_header(); 

if ( have_posts() ) : the_post();  ?>

<div class="container">

	<div class="row">

		<div class="col-md-12">
			
			<h1><?php the_title(); ?></h1> 

		</div>

	</div>

	<div class="row">

		<div class="col-xs-12 col-md-8">

			<?php the_content(); ?>

		</div>

		<div class="col-xs-12 col-sm-6 col-md-4">

				<?php get_sidebar(); ?>

		</div>


	</div> <!-- // row -->

</div>

<?php endif; ?>

<?php get_footer(); ?>