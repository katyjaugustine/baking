<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package baking
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'baking' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding" style="text-align:center;">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/>
		</div>
		
		<div class="byCharity">
		    <img src="<?php echo get_template_directory_uri(); ?>/images/artisan.png"/>
		</div>
		
        <nav id="site-navigation" class="main-navigation" role="navigation">
		    <div id="main-menu">
                <button class="menu-toggle"><?php _e( 'Primary Menu', 'baking' ); ?></button>
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                <div style="clear: both"></div>
		    </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
