<div class="col-md-3 first widget-area" role="complementary">

	<aside class="widget">

		<h3 class="widget-title"></h3>

		    <?php
		    wp_nav_menu( 
		        array( 
		        'container' => '',
		        'menu_class' => 'block-list menu',
		        'theme_location' => 'footer-menu-1' 
		        ) 
		    ); ?>


	</aside>

</div>


<div class="col-md-3 second widget-area" role="complementary">

	<?php 
	if ( is_active_sidebar( 'sidebar-3' ) ) : 
		dynamic_sidebar( 'sidebar-3' ); 
	endif; ?>

</div>


<div class="col-md-3 third widget-area" role="complementary">

	<aside class="widget">

		<h3 class="widget-title with-span"></h3>

			<?php
		    wp_nav_menu( 
		        array( 
		            'container' => '',
		            'menu_class' => 'block-list menu',
		            'theme_location' => 'footer-menu-2' 
		        ) 
		    ); ?>

	</aside>

</div>


<div class="col-md-3 fourth widget-area" role="complementary">

	<aside class="widget">

		<h3 class="widget-title"></h3>

		<?php 
		if ( is_active_sidebar( 'sidebar-2' ) ) : 
			dynamic_sidebar( 'sidebar-2' ); 
		endif; ?>

	</aside>



</div>