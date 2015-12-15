<?php
/**
 * Template Name: Stockists
 *
 */

get_header(); 

if ( have_posts() ) : the_post();  ?>

<div class="container" id="content">

	<div class="row">

		<div class="col-md-12">
			
			<h1><?php the_title(); ?></h1> 

		</div>

	</div>

	<div class="row">

		<div class="col-xs-12 col-md-9">

			<div class="entry-content">

				<?php the_content(); ?>

				<div id="map-canvas"></div>

		<?php
		$two_columns = get_field('two_column_layout');
		$column_1 = get_field('column_1');
		$column_2 = get_field('column_2');

		if ( $two_columns == 'Yes' ) : ?>

			<div class="row">

				<div class="col-md-6">
					<?php echo $column_1; ?>
				</div>

				<div class="col-md-6">
					<?php echo $column_2; ?>
				</div>

			</div>

		<?php endif; ?>

			</div>


		</div>

		<div class="col-xs-12 col-sm-6 col-md-3">

				<?php get_sidebar(); ?>

		</div>


	</div> <!-- // row -->

</div>

<?php endif; ?>

<?php get_footer(); ?>