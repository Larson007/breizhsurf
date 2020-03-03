<?php
/**
 * Template part for displaying spots in archive pages
 *
 *
 * @package WordPress
 * @subpackage Startheme
 * @since 1.0.0
 */

?>

<article <?php post_class('card-spot'); ?>>

  <figure class="card-figure mb-0">
    <a href="<?php the_permalink(); ?>" title="<?php _e( 'Lire la suite', 'startheme' ) ?>">
      <?php the_post_thumbnail('thumb-medium', array('class'=>'img-fluid')); ?>
      <h3 class="entry-title"><?php the_title(); ?></h3>
    </a>
  </figure>

</article>