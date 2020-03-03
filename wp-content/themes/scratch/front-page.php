<?php
/**
 * The main template file
 *
 *
 * @package scratch
 */
$lastspots = get_posts( array(
	'numberposts' => 5,
  'post_type' => 'spot',
  'orderby' => 'rand'
) );

$focuspost = get_posts( array(
	'posts_per_page' => 1,
  'post__in' => get_option( 'sticky_posts' ),
  'ignore_sticky_posts' => 1
) );

get_header(); 
?>

<main>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article <?php post_class(); ?>>
    <header class="entry-header main-header py-5">
      <div class="container">
        <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        <a href="<?= get_post_type_archive_link( 'spot' ); ?>" class="btn btn-outline-light mt-4"><?php _e('Tous les spots', 'scratch'); ?></a>
      </div>
    </header>
    <div class="entry-content container py-5 w-75">
      <?php the_content() ?>
    </div>
  </article>

  <?php endwhile; ?>

  <?php else : ?>
  <div class="container py-5">
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'scratch' ); ?></p>
  </div>
  <?php endif; ?>

</main>

<section class="front-spots container">
  <?php if ( $lastspots ) : ?>
    <div class="front-spots_grid">
      <?php foreach ( $lastspots as $post ) :
          setup_postdata( $post );	

          get_template_part( 'template-parts/content', 'spot' );

      endforeach; 
      wp_reset_postdata(); ?>
    </div>
  <?php endif;?>
  <div class="text-center">
    <a href="<?= get_post_type_archive_link( 'spot' ); ?>" class="btn btn-outline-primary my-5"><?php _e('Tous les spots', 'scratch'); ?></a>
  </div>
</section>

  <?php if ( $focuspost ) : ?>

    <section class="front-sticky-post container my-5 pb-5">
      <?php foreach ( $focuspost as $post ) :
          setup_postdata( $post );	?>

        <article <?php post_class('sticky-post_article row'); ?>>
          <figure class="card-figure mb-0 col-sm-10 col-md-5 offset-sm-1">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb-555', array( 'class' => 'img-fluid' )) ?></a>
          </figure>
          <div class="sticky-post_content py-4 bg-white col-sm-10 offset-sm-1 col-md-5 offset-md-0 ">
            <h2><?php _e('À la une', 'scratch'); ?></h2>
            <h3 class="h4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
          </div>
        </article>

      <?php endforeach; 
      wp_reset_postdata(); ?>
  </section>

<?php endif;?>

<?php get_sidebar('lastposts') ?>

<?php get_footer(); ?>