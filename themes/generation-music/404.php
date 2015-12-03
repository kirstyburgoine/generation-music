<?php
/**
 * The main page template file
 * 
 */

get_header(); 

query_posts('page_id=23528');
if ( have_posts() ) : the_post();  ?>


<div class="container pt">

	<div class="grid">


		<div class="grid__item palm-one-whole lap-one-whole three-quarters">

			
			<h1><?php the_title(); ?></h1> 

			<?php the_content(); ?>

		</div><!--

		--><div class="grid__item palm-one-whole lap-one-whole one-quarter">

				<?php get_sidebar(); ?>

		</div>


	</div> <!-- // Grid -->

</div>

<?php endif; ?>

<?php get_footer(); ?>