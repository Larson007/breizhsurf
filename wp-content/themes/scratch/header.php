<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section, header and top navigation areas
 *
 * @package scratch
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <nav class="navbar navbar-expand-md navbar-light bg-white sticky-top main-navbar">

      <div class="navbar-brand">
        <a href="<?php bloginfo('url') ?>/">
          <img class="navbar-brand-logo" src="<?= get_stylesheet_directory_uri() ?>/dist/images/logo.svg" alt="<?= esc_attr(get_bloginfo('name')) ?>">
        </a>
      </div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
		
		  <div id="navbarNav" class="collapse navbar-collapse">
	
        <?php 
        wp_nav_menu( array(
          'theme_location'  => 'primary',
          'depth'	          => 1,
          'container'       => 'div',
          'container_class' => 'main-menu-wrapper mx-auto',
          'menu_class'      => 'navbar-nav main-menu',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
			
        <?php 
        wp_nav_menu( array(
          'theme_location'  => 'social',
          'depth'	          => 1,
          'menu_class'      => 'navbar-nav social-menu',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

      </div><!-- #navbarNav -->

  </nav>

