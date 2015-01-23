<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->
        <!-- bxSlider CSS file -->
        
        <link media="screen" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
        <link media="screen" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet">
        <link media="screen" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/fancyBox/source/jquery.fancybox.css?v=2.1.5" rel="stylesheet">        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="header">
            <div class="content-header">
                <a href="<?php bloginfo('url'); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/FG_Logo.png" width="130">
                </a>
                <nav class="nav">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>
                </nav>
            </div>
        </header>
        <div class="content">