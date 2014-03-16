<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
	
</head>

<body <?php body_class("no-js"); ?>>

	<header>
		<div class="container">
			<div class="row">
				<section class="logo col-md-7 col-sm-6">
					<a href="<?php bloginfo("url"); ?>" title="<?php bloginfo("name"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/logo.png" alt="<?php _e("PopupVenue", 'puv'); ?>" width="229" height="62"></a>
					<span class="beta">beta</span>
				</section>
				<nav class="member col-md-5 col-sm-6 hidden-xs">
					<?php if( is_user_logged_in() ) : ?>
						<?php get_template_part('partials/nav', 'logged-in'); ?>
					<?php else : ?>
						<?php get_template_part('partials/nav', 'logged-out'); ?>
					<?php endif; ?>
				</nav>
			</div>
		</div>
	</header>
	
	<?php get_template_part('partials/nav', 'bar'); ?>
