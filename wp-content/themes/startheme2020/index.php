<?php
/**
 * The main template file
 *
 * ...
 *
 * @package WordPress
 * @subpackage Startheme
 * @since 1.0.0
 *
 */

get_header();
?>

<main>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', get_post_type() ); ?>

  <?php endwhile; ?>

  <?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>
    
  <?php endif; ?>

</main>

<?php get_footer() ?>