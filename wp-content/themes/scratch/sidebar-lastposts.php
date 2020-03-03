<?php
/**
 * The last posts sidebar displayed before the footer.
 *
 * @package scratch
 */
$exclude = is_front_page() ? get_option( 'sticky_posts' ) : [get_the_ID()];
$lastposts = get_posts( array(
	'numberposts' => 5,
  'category_name' => 'actualite',
  'orderby' => 'rand',
  'exclude' => $exclude
) );
?>

<section class="sidebar-lastposts bg-light py-5">
  <div class="container">

    <div class="sidebar-header d-flex flex-wrap justify-content-between align-items-start ">
      <h2 class="sidebar-title"><?php _e('Dernières actualités', 'scratch'); ?></h2>
      <a href="<?= get_category_link( get_cat_ID( 'actualite' ) ) ?>" class="btn btn-outline-primary"><?php _e('Toutes les actualités', 'scratch'); ?></a>
    </div>

    <?php if ( $lastposts ) : ?>
      <div class="carousel-posts owl-carousel px-sm-4 mt-5 mt-sm-4">
        <?php foreach ( $lastposts as $post ) :
            setup_postdata( $post ); ?>	
            <article <?php post_class('card border-0'); ?>>
              <figure class="card-figure mb-0">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb-555', array( 'class' => 'img-fluid card-img-top' )) ?></a>
              </figure>
              <div class="card-body">
                <h3 class="card-title h4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
              </div>
            </article>
        <?php
        endforeach; 
        wp_reset_postdata(); ?>
      </div>
    <?php endif;?>
    

  </div>
</section>