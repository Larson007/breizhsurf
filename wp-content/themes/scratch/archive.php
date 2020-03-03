<?php
/**
 * The template for displaying archive pages
 *
 *
 * @package scratch
 */

get_header(); 
?>

<header class="entry-header main-header py-5">
  <div class="container">
    <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
  </div>
</header>

<div class="container py-5">

  <div class="row flex-md-row-reverse">

    <aside class="col aside-categories mb-4">
      <div class="bg-light p-3">
        <ul>
        <?php wp_list_categories( array(
            'child_of' => 8,
            'title_li' => '<h3>' . __( 'Categories' ) . '</h3>',
        ) ); ?> 
        </ul>
        <a href="<?= get_term_link(8) ?>"><?php _e( 'All news', 'scratch' ) ?></a>
      </div>
    </aside>

    <main class="col-md-8 col-lg-9">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article <?php post_class('mb-4 pb-4 border-bottom border-light'); ?>>
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="row">
          <div class="col-lg-5">
            <figure class="card-figure mb-3 mb-lg-0">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb-555', array( 'class' => 'img-fluid article-lastposts-img' )) ?></a>
            </figure>            
          </div>
          <div class="entry-archive_content col-lg-7">
            <a href="<?php the_permalink(); ?>"><?php the_title( '<h2 class="entry-title h3">', '</h2>' ); ?></a>
            <?php the_excerpt() ?>
          </div>
        </div>
        <?php else : ?>
          <div class="entry-archive_content">
            <a href="<?php the_permalink(); ?>"><?php the_title( '<h2 class="entry-title h3">', '</h2>' ); ?></a>
            <?php the_excerpt() ?>
          </div>
        <?php endif; ?>
      </article>

      <?php endwhile; ?>

      <?php the_posts_pagination(); ?>

      <?php else : ?>
      <div class="container py-5">
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'scratch' ); ?></p>
      </div>
      <?php endif; ?>

    </main>

  </div>

</div>

<?php get_footer(); ?>