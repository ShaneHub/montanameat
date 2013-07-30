<?php
/**
 * The Header for our theme.
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
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body><!-- style="background-image:url(<?php echo esc_url(bloginfo('template_url')); ?>/images/grassback.bmp)" -->
<div id="page" class="hfeed site">
   <div id="blackboard">
   		<div id="tophead">
        	<a href="<?php echo esc_url(home_url('/')); ?>"><img id="masthead" src="<?php echo esc_url(bloginfo('template_url')); ?>/images/masthead.png" /></a>
            <!-- <a href="<?php echo esc_url(home_url('/')); ?>"><img id="logo" src="<?php echo esc_url(bloginfo('template_url')); ?>/images/logo.png" /></a> -->
            
             <div id="animal-nav">
                <ul class="animal-icons">
                    <li><a href="<?php echo esc_url( home_url() ); ?>/beef" alt="beef"><img src="<?php echo esc_url(bloginfo('template_url')); ?>/images/icon-beef.png" /></a></li>
                    <li><a href="<?php echo esc_url( home_url() ); ?>/lamb" alt="lamb"><img src="<?php echo esc_url(bloginfo('template_url')); ?>/images/icon-lamb.png" /></a></li>
                    <li><a href="<?php echo esc_url( home_url() ); ?>/pork" alt="pork"><img src="<?php echo esc_url(bloginfo('template_url')); ?>/images/icon-pig.png" /></a></li>
                </ul>
            </div>
        
        </div>
        
        <div id="bottom-grass">
        	<img src="<?php echo esc_url(bloginfo('template_url')); ?>/images/grass.png">
        </div>
        
        
		<!--	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>  -->
            
            

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav>   <!--#site-navigation -->
        
       

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>

	<div id="main" class="wrapper">
    	<img id="papertop" src="<?php echo esc_url(bloginfo('template_url')); ?>/images/butcherpaperTOP.png" />