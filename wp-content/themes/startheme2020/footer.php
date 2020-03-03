<?php
/**
 * The Footer for our theme.
 *
 * ...
 *
 * @package startheme
 *
 */
?>

<footer class="page-footer bg-dark text-white pt-5 pb-3">

  <div class="container">

    <div class="row">

      <div class="footer-col col-sm-12 col-lg-4 pb-3 pb-lg-0">
        <?php dynamic_sidebar('footer-sidebar-1') ?>
      </div>

      <div class="footer-col col-sm-6 col-lg-4 pb-3 pb-lg-0">
        <?php dynamic_sidebar('footer-sidebar-2') ?>
      </div>

      <div class="footer-col col-sm-6 col-lg-4 pb-3 pb-lg-0">
        <?php dynamic_sidebar('footer-sidebar-3') ?>
      </div>

    </div><!-- .row -->

    <nav class="nav-footer d-flex flex-wrap justify-content-center mt-3">
      <p class="copyright mr-3">&copy; <a href="<?= home_url('/') ?>"><?php bloginfo('name') ?> <?= date('Y') ?></a></p>
      <?php if (has_nav_menu('footer_navigation'))
        wp_nav_menu([
          'theme_location' => 'footer_navigation', 
          'menu_class' => 'nav'
          ])
      ?>
    </nav>

  </div><!-- .container-fluid -->

</footer><!-- .page-footer -->

<?php wp_footer(); ?>

</body>
</html>