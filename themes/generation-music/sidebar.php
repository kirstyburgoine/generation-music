<div class="sidebar">



	<?php 


   	// If a page
	if ( is_page() ) :


		if ( is_active_sidebar( 'sidebar-1' ) ) : 
			dynamic_sidebar( 'sidebar-1' ); 
		endif; 

	// else its a post
	else : 

		if ( is_active_sidebar( 'sidebar-2' ) ) : 
			dynamic_sidebar( 'sidebar-2' ); 
		endif; 
		
	endif;

	?>

<div class="seperator"></div>
</div>