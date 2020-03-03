
<?php
/**
 * The last posts sidebar displayed before the footer.
 *
 * @package scratch
 */

$lastspots = get_posts( array(
	'numberposts' => 2,
  'post_type' => 'spot',
  'orderby' => 'rand'
) );
?>

<section class="sidebar-lastspots-aside">

    <h2 class="sidebar-title mb-4">Spots</h2>

    <?php if ( $lastspots ) : ?>
        <?php foreach ( $lastspots as $post ) :
            setup_postdata( $post );	

            get_template_part( 'template-parts/content', 'spot' );

        endforeach; 
        wp_reset_postdata(); ?>
    <?php endif;?>

    <div class="text-center">
        <a href="<?= get_post_type_archive_link( 'spot' ); ?>" class="btn btn-outline-primary mt-4"><?php _e('Tous les spots', 'scratch'); ?></a>
    </div>

</section>