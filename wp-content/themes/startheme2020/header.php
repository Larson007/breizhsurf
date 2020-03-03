<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section, header and top navigation areas
 *
 * @package startheme
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <nav class="navbar navbar-expand-md navbar-light bg-white sticky-top main-navbar">

    <div class="container">

      <div class="navbar-brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?= esc_attr__('Back to home page', 'startheme') ?>" class="logo-link"><img src="<?= get_template_directory_uri() . '/dist/images/logo.svg' ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo  navbar-brand-logo"></a>
      </div><!-- .navbar-brand -->

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only"><?php _e('Menu', 'startheme') ?></span>
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="main-nav collapse navbar-collapse">
        <?php 
        wp_nav_menu( array(
          'theme_location'  => 'primary',
          'container'       => 'div',
          'container_class' => 'main-menu-wrapper mx-auto',
          'menu_class'      => 'navbar-nav main-menu',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        wp_nav_menu( array(
          'theme_location'  => 'social',
          'menu_class'      => 'navbar-nav social-menu',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ));
        ?>
      </div>

    </div>

  </nav>


