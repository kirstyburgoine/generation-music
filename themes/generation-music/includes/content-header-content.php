<header id="masthead" class="site-header" role="banner">

<?php 
if ( is_home() || is_page('4') ) :
    // Don't display header banner on homepage as have gridrotator instead
else :
    get_template_part('includes/content','banners');

endif; ?>

<div class="site-banner fixed-header">

    <div class="container">

        <div class="logo-container">

            <h1 class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Go back to the homepage" rel="home"><?php bloginfo('name');?></a>
            </h1>

        </div>

        <?php 
        $contact_email = get_field('contact_email', 'options');
        $contact_telephone = get_field('contact_telephone', 'options');
        ?>
        <a class="screen-reader-text skip-link access" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>

        <ul class="nav navbar-nav utility site-navigation mobile-display-none">
            <?php if ($contact_telephone) : ?><li><a href="call:<?php echo $contact_telephone; ?>"><span class="ss-icon ss-phone"></span> <?php echo $contact_telephone; ?></a></li><?php endif; ?>
            <?php if ($contact_email) : ?><li><a href="mailto:<?php echo $contact_email; ?>"><span class="ss-icon ss-mail"></span> <?php echo $contact_email; ?></a></li><?php endif; ?>            
        </ul>

        <ul class="mobile-contact desktop-display-none">
             <?php if ($contact_telephone) : ?><li><a href="call:<?php echo $contact_telephone; ?>"><span class="ss-icon ss-phone"></span></a></li><?php endif; ?>
            <?php if ($contact_email) : ?><li><a href="mailto:<?php echo $contact_email; ?>"><span class="ss-icon ss-mail"></span></a></li><?php endif; ?>          
        </ul>

        <nav id="primary-navigation" class="site-navigation primary-navigation mobile-display-none" role="navigation">

        
            <?php
            wp_nav_menu( 
                array( 
                'menu' => 'top_menu',
                'depth' => 2,
                'container' => 'false',
                'menu_class' => 'nav navbar-nav',
                'theme_location' => 'primary',
                'walker' => new wp_bootstrap_navwalker()
                ) 
            ); ?>

       

        </nav>

    </div>

</div> <?php // Closes site-banner ?>

<?php 
if ( is_home() || is_page('4') ) :
    // Don't display header banner on homepage as have gridrotator instead
else :

    $page_icon = get_field ('page_icon'); 

    if ( $page_icon ) : ?>

    <div class="page-icon mobile-display-none">

        <div class="container">

            <div class="icon-container">
                <img src="<?php echo $page_icon['sizes']['page-icon']; ?>" alt="<?php echo $page_icon['alt']; ?>" />
            </div>

        </div>

    </div>
    <?php 
    else : 
        
        $page_icon = get_field ('page_icon','options'); 

        if ( $page_icon ) : ?>

        <div class="page-icon mobile-display-none">

            <div class="container">

                <div class="icon-container">
                    <img src="<?php echo $page_icon['sizes']['page-icon']; ?>" alt="<?php echo $page_icon['alt']; ?>" />
                </div>

            </div>

        </div>

    <?php
        endif;

    endif; 

endif;?>

</header> <!-- Closes Header -->