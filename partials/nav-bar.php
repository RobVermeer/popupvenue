<section class="nav-bar hidden-xs">
	<div class="container">
		<div class="row">
			<?php wp_nav_menu(array('theme_location' => 'header', 'container' => 'nav', 'container_class' => 'col-md-8', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => '')); ?>
			<?php get_search_form(); ?>
		</div>
	</div>
</section>
