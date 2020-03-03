<?php
/**
 * The last posts sidebar displayed before footer
 * 
 * @package startheme
 */

 $lastspots = get_posts( array(
  'numberposts' => 3,
  'post_type' => 'spot',
  'orderby' => 'rand',
  'exclude' => get_the_ID()
 ));
?>

<section class="sidebar-lastspots bg-light py-5">

  <div class="container">

    <header class="sidebar-header d-flex flex-wrap justify-content-between align-items-start">
      <h2 class="sidebar-title"><?php _e('Autres spots', 'startheme') ?></h2>
      <a href="<?= get_post_type_archive_link( 'spot' ); ?>" class="btn btn-outline-primary"><?php _e('Tous les spots', 'startheme') ?></a>
    </header>

    <?php if ( $lastspots ) : ?>

      <div class="row no-gutters">

        <?php foreach ( $lastspots as $post ) : 
            setup_postdata( $post ); ?>

          <div class="col-md-6 col-lg-4">

            <?php get_template_part( 'template-parts/content-archive', get_post_type() ); ?>

          </div>

        <?php endforeach;
            wp_reset_postdata(); ?>

      </div>

    <?php endif; ?>

  </div>

</section>