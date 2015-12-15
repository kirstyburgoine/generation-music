<div class="row content-footer">
	<div class="col-md-4 first widget-area" role="complementary">


			<?php 
			if ( is_active_sidebar( 'sidebar-3' ) ) : 
				dynamic_sidebar( 'sidebar-3' ); 
			endif; ?>


	</div>


	<div class="col-md-4 second widget-area" role="complementary">

		<?php 
		if ( is_active_sidebar( 'sidebar-4' ) ) : 
			dynamic_sidebar( 'sidebar-4' ); 
		endif; ?>

	</div>


	<div class="col-md-4 third widget-area" role="complementary">

			<?php 
			if ( is_active_sidebar( 'sidebar-5' ) ) : 
				dynamic_sidebar( 'sidebar-5' ); 
			endif; ?>

	</div>
</div>