<header>
	<nav class="navbar navbar-expand-lg fixed-top pt-5">
		<div class="container-fluid">
			<button class="navbar-toggler rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#dmiNav" aria-controls="dmiNav" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars fa-2x"></i>
			</button>
			<div class="collapse navbar-collapse text-uppercase font-weight-bold" id="dmiNav">
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => '',
					'container_class'   => '',
					'container_id'      => '',
					'menu_class'        => 'navbar-nav mx-auto',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				)); ?>
				
			</div>
		</div>
	</nav>
</header>