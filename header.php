<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPMODEVSTARTER
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- WP Header -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead">
		<div id=""class="site-header">
			<div class="branding">
				<a target="_blank" href="https://renteradar.no/?utm_source=renteradarblogg&utm_medium=logo&utm_campaign=referral"><img loading="lazy" src="/wp-content/themes/renteradar-blogg/assets/img/logo.svg" alt="Renteradar logo"></a>
			</div>
			<button
				id="menu-toggle-mobile"
				type=""
				aria-expanded="flase"
				aria-label="Mobile menu toggle button"
				onClick="toggleMobileMenu()"></button>
			<nav>
				<?php wp_nav_menu(array('menu_id' => 'main_menu', 'menu_class' => 'navbar-nav', 'theme_location'=> 'Hovedmeny'));?>
			</nav>
		</div><!-- .site-header -->
	</header><!-- #masthead -->

	<main>
		<div id="content" class="site-content">