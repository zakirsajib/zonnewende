<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package zonnewende
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>	
	<header class="entry-header">
		<?php if(is_page('contact')):?>
			<h1 class="entry-title"><?php the_field('heading_contact')?></h1>
		<?php else:?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php endif?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'zonnewende' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<?php // If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;?>
	
	
	<footer class="entry-footer">
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
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
	