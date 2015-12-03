<?php if ( get_header_image() ) : ?>
    <div id="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
        </a>
    </div>
<?php endif; ?>

 <header id="masthead" class="site-header" role="banner">

    <nav id="primary-navigation" class="site-navigation primary-navigatio navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">

              <button type="button" class="navbar-toggle ss-icon ss-standard " data-toggle="collapse" data-target=".navbar-collapse">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              
                </button>
              
            </div>

            <a class="screen-reader-text skip-link access" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
            
            <div class="navbar-collapse collapse">
            <?php
            wp_nav_menu( 
                array( 
                'container' => 'false',
                'menu_class' => 'nav navbar-nav',
                'theme_location' => 'primary' 
                ) 
            ); ?>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="logo-container">

            <h1 class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Go back to the homepage" rel="home"><?php bloginfo('name');?></a>
            </h1>

        </div>


    </div>

</div> <!-- Closes Header -->