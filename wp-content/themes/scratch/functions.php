<?php

/**
 * Theme Configuration
 */

add_action('after_setup_theme', function () {

  //Register Custom Navigation Walker
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

  // Let WordPress manage the document title.
  add_theme_support('title-tag');

  // Post thumbnails
  add_theme_support('post-thumbnails');

  // Register Menu
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'scratch'),
    'social' => __('Social Menu', 'scratch'),
  ));

  // Custom image sizes
  add_image_size('thumb-555', 555, 410, true);
  add_image_size('thumb-1920', 1920, 1080, true);
});

/**
 * Enqueue styles & scripts
 */
add_action('wp_enqueue_scripts', function () {

  wp_enqueue_style('googlefont', '//fonts.googleapis.com/css?family=Roboto:400,700&display=swap');
  wp_enqueue_style('forkawesome', '//cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css');

  wp_enqueue_style('scratch-styles', get_template_directory_uri() . '/dist/css/main.css');

  wp_enqueue_script('jquery');

  wp_enqueue_script('scratch-scripts', get_template_directory_uri() . '/dist/js/main.js', 'jquery', '1.0.0', true);

  wp_localize_script('scratch-scripts', 'WPURLS', array('themeURL' => get_template_directory_uri()));
});

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
  $config = [
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title h3">',
    'after_title'   => '</h2>'
  ];
  register_sidebar([
    'name' => __('Zone pied de page', 'scratch') . ' ' . 1,
    'id'   => 'footer-sidebar-1'
  ] + $config);
  register_sidebar([
    'name' => __('Zone pied de page', 'scratch') . ' ' . 2,
    'id'   => 'footer-sidebar-2'
  ] + $config);
  register_sidebar([
    'name' => __('Zone pied de page', 'scratch') . ' ' . 3,
    'id'   => 'footer-sidebar-3'
  ] + $config);
});
/**
 * Excerpt More link
 */
add_filter('excerpt_length', function ($length) {
  return 36;
}, 999);

add_filter('excerpt_more', function () {
  return '&hellip;<div class="more-link"><a class="btn btn-outline-primary" href="' . get_permalink() . '" >' . __('Lire la suite', 'startheme') . '</a></div>';
});

/**
 * Archive spots filtering
 */
add_action('pre_get_posts', function ($query) {
  // validate
  if (is_admin()) return;

  if (!$query->is_main_query()) return;

  if (is_post_type_archive('spot')) {

    if (isset($_GET['niveau'])) {

      $query->set('meta_key', 'niveau');
      $query->set('meta_query', array(
        array(
          'key'    => 'niveau',
          'value'    => $_GET['niveau'],
          'compare'  => 'IN',
        )
      ));
    }
    // always return
    return;
  }
});

/* Archive title */
add_filter('get_the_archive_title', function ($title)
{
  if (is_category()) {
    if (is_category('8')) {
      $title = __('Les actualités du surf en Bretagne', 'scratch');
    } else {
      $title = single_cat_title(__('Actualités - ', 'scratch'), false);
    }
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_author()) {
    $title = '<span class="vcard">' . get_the_author() . '</span>';
  } elseif (is_post_type_archive()) {
    if (get_post_type() == 'spot') {
      $title = __('Les meilleurs spots de Bretagne', 'scratch');
    } else {
      $title = post_type_archive_title('', false);
    }
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  }

  return $title;
});
