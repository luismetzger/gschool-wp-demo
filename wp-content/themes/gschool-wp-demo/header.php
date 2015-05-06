<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package gSchool WP Demo
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gschool-wp-demo' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="row">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <img id="header-logo" src="<?php bloginfo('template_directory'); ?>/images/cd-logo.svg" alt="Your Image Description Here" />
</a>

		<div id="cd-nav">
		<a href="#0" class="menu-toggle cd-nav-trigger" aria-controls="primary-menu" aria-expanded="false">Menu<span></span><?php _e( 'Primary Menu', 'gschool-wp-demo' ); ?></a>

		<nav id="cd-main-nav"  class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
	</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		
		
