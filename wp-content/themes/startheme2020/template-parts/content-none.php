<?php
/**
 * Template part for displaying posts
 *
 *
 * @package WordPress
 * @subpackage Startheme
 * @since 1.0.0
 */

?>

<section class="no-results not-found">

  <div class="container py-5">

    <h1 class="page-title entry-title"><?php _e('Aucun résultat trouvé.', 'startheme') ?></h1>

    <div class="entry-content">  
      <p><?php _e( 'Il semble que nous ne trouvions pas ce que vous recherchez. Peut-être que la recherche peut aider.', 'startheme' ); ?></p>
      <?php get_search_form(); ?>   
    </div>

  </div><!-- .container -->

</section>