<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package zonnewende
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
					<?php
					while ( have_posts() ) : the_post();?>
						<?php get_template_part( 'template-parts/featured', 'image' );?>
						<div class="container">
							<div class="row">
								<?php get_template_part( 'template-parts/breadcrumb');?>
								
								<?php if(is_page('sponsorprojecten')):?>
									<?php get_template_part( 'template-parts/content', 'full' );?>
								<?php elseif(is_page('plattegrond')):?>
									<?php get_template_part( 'template-parts/content', 'plattegrond' );?>
								<?php else:?>
									<?php get_template_part( 'template-parts/content', 'page' );
								endif;
		
		
					endwhile; // End of the loop.
					
					if(!is_page(array('sponsorprojecten','plattegrond'))):
						get_sidebar(); 
					endif?>
						</div>
							</div>
					<?php if(is_page('contact')):?>
					<?php $google_map = get_field('google_map_shortcode')?>
						<?php echo do_shortcode($google_map)?>
					<?php endif?>
				
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
