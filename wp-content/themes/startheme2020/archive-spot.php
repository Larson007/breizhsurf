<?php
/**
 * The template for displaying archive pages
 *
 *
 * @package WordPress
 * @subpackage Startheme
 * @since 1.0.0
 *
 */

get_header();
?>

<main>

  <?php if (have_posts()) : ?>

    <section class="archive-section">

      <header class="main-header py-5">

        <div class="container">

          <h1 class="page-title"><?php the_archive_title(); ?></h1>

        </div>

      </header>

      <div class="container py-5">

        <div class="row no-gutters mb-4">

          <?php while (have_posts()) : the_post(); ?>

            <div class="col-md-6 col-lg-4">

              <?php get_template_part( 'template-parts/content-archive', get_post_type() ); ?>

            </div>

          <?php endwhile; ?>

        </div><!-- .row -->

        <?php the_posts_pagination(); ?>

      </div><!-- .container -->
    
    </section>

  <?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>
    
  <?php endif; ?>

</main>

<?php get_sidebar('lastnews') ?>

<?php get_footer() ?>