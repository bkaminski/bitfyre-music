<?php get_header(); ?>
	
	<div class="container">
		<div class="main-content pt-5">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1 class="text-white text-uppercase"><?php the_title(); ?></h1>

				<?php the_content(); ?>

			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
