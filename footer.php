	<footer class="clearfix">
		<div class="container">
			<div class="row">
				<?php wp_nav_menu(array('theme_location' => 'footer', 'container' => 'nav', 'container_class' => 'col-md-12', 'menu_class' => 'nav nav-footer', 'fallback_cb' => '')); ?>
			</div>
		</div>
		<a href="#logo" class="top"><?php _e("Top", "puv"); ?></a>
	</footer>
	
	<section class="copyright">
		&copy; <?php echo date('Y'); ?> <?php _e("All rights reserved", "puv"); ?>. <a href="<?php bloginfo("url"); ?>"><?php bloginfo("name"); ?></a>
	</section>
	
	<?php wp_footer(); ?>

</body>

</html>