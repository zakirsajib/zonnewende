<?php
	/*Template Name: Home*/
get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();?>
				
				<?php //echo do_shortcode('[layerslider id="5"]');?>
				
				<?php get_template_part( 'template-parts/home', 'slideshow' ); ?>
				<?php get_template_part( 'template-parts/home', 'cta' ); ?>
				<?php get_template_part( 'template-parts/home', 'third' ); ?>
				<?php get_template_part( 'template-parts/home', 'twocolumns' ); ?>
				<?php get_template_part( 'template-parts/home', 'carousel' ); ?>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer()?>