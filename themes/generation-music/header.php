<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="shortcut icon" type="image/ico" href="favicon.png" />
        <link rel="shortcut icon" href="favicon.png"> 
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <link href="<?php bloginfo('template_directory'); ?>/assets/css/style.min.css" rel="stylesheet" type="text/css" media="all"/>

      
        <?php echo $typekit = get_field('typekit', 'options'); ?>

        <!--Shims-->
        <!--[if lt IE 9]>
            <script src="<?php bloginfo('template_directory'); ?>/assets/js/html5shiv.min.js"></script>
            <script src="<?php bloginfo('template_directory'); ?>/assets/js/respond.min.js"></script>


        <!- - Web App-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">


        <?php wp_head(); ?>

    </head>
<?php 
####################################################################################################
#################################################################################################### ?>

<body <?php body_class(); ?>>


<?php 
get_template_part('includes/content', 'header-content'); ?>

<div id="wrapper" class="content">