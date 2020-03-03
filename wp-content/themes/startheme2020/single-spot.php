<?php
/**
 * The template file for displaying single spots
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

    <?php endwhile; 
        endif; ?>

</main>

<?php get_sidebar('spots'); ?>

<?php get_footer() ?>