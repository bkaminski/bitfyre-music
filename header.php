<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav class="navbar navbar-expand-lg" style="background:transparent;">
	<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
		
	</a>
	<button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#bitfyreNav" aria-controls="bitfyreNav" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fas fa-bars fa-2x text-white"></i>
	</button>
	<div class="collapse navbar-collapse text-uppercase font-weight-bold" id="bitfyreNav">
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => '',
			'container_class'   => '',
			'container_id'      => '',
			'menu_class'        => 'navbar-nav ml-auto',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		)); ?>
		
	</div>
</nav>
