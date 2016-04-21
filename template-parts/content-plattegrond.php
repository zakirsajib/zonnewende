<?php
/**
 * Template part for displaying page content in Plattegrond page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package zonnewende
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	
	<div class="col-md-8">
	
	<header class="entry-header">
		<?php if(is_page('contact')):?>
			<h1 class="entry-title"><?php the_field('heading_contact')?></h1>
		<?php else:?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php endif?>
	</header><!-- .entry-header -->
	</div>
	
	<div class="entry-content">
		<?php
			
			echo '<div class="col-md-8">';
			the_content();
			echo '</div>';?>
			
			<div class="clearfix"></div>
			<!-- Map -->
			<div class="container">
				<div class="row">
					<div id="mapplic"></div>
				</div>
			</div>
		<?php wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'zonnewende' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<?php // If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;?>
	
	<div class="clearfix"></div>
	<footer class="entry-footer">
		<div class="col-md-12">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'zonnewende' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
	