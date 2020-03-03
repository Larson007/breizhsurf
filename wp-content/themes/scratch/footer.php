<?php
/**
 * The template for displaying the footer.
 *
 * @package scratch
 */
?>
	<footer class="footer bg-dark text-white pt-5 pb-3">
		<div class="container">
			<div class="row">
        <div class="col-sm-6 col-md-4">
          <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
        </div>
        <div class="col-sm-6 col-md-4">
          <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
        </div>
        <div class="col-sm-12 col-md-4">
          <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
        </div>
			</div>
			<p class="copy"><a href="<?php bloginfo('url') ?>/">&copy; <?php bloginfo('name') ?> <?= date('Y') ?></a></p>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>