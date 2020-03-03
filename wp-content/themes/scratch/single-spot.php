<?php
/**
 * The main template file
 *
 *
 * @package scratch
 */

get_header(); 
?>

<main>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <?php 
  $niveau = get_field_object('niveau');
  $informations = get_field_object('informations');
  $acces = get_field_object('acces');
  $carte = get_field('carte');
  
  ?>
  <!-- <pre>
    <?php //print_r($carte) ?>
  </pre> -->

  <article <?php post_class(); ?>>
    <header class="entry-header main-header py-5"
      style="background-image: url(<?php the_post_thumbnail_url('thumb-1920') ?>);">
      <div class="container">
        <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
      </div>
    </header>


    <div class="spot-content bg-light py-5">
      <div class="container">
        <div class="row">
          <div class="entry-content col-md-8 col-md-10">
            <?php the_content() ?>
          </div>
          <div class="spot-niveau col-6 col-sm-4 col-lg-2">
            <div class="bg-white py-3 px-4">
              <h3><?= $niveau['label'] ?></h3>
              <?php foreach($niveau['choices'] as $key => $choice): ?>
                <?php if($key<=$niveau['value']): ?>
                <?php $img = 'planche-1.svg' ?>
                <?php else : ?>
                <?php $img = 'planche-2.svg' ?>
                <?php endif; ?>
                <img src="<?= get_template_directory_uri() ?>/dist/images/<?= $img ?>" alt="">
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <section class="spot-infos my-5">
        <h2><?= $informations['label'] ?></h2>
        <?= $informations['value'] ?>
      </section>

      <section class="spot-acces my-5">
        <h2><?= $acces['label'] ?></h2>
        <div class="spot-acces_content">
          <div class="spot-carte">
            <div id="spotMap" data-lat="<?php the_field('latitude') ?>" data-lon="<?php the_field('longitude') ?>" data-title="<?php esc_attr(the_title()) ?>"></div>
            <!-- <img class="img-fluid" src="<?php //echo $carte['sizes']['large'] ?>" /> -->
          </div>
          <div class="bg-light p-4">
            <?= $acces['value'] ?>
            <div class="spot-gps">
              <h3>GPS</h3>
              <p><?php the_field('latitude') ?>, <?php the_field('longitude') ?></p>
            </div>
          </div>
        </div>
        
      </section>

    </div>

  </article>

  <?php endwhile; ?>

  <?php else : ?>
  <div class="container py-5">
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'scratch' ); ?></p>
  </div>
  <?php endif; ?>

</main>

<?php get_sidebar('lastspots') ?>

<?php get_footer(); ?>