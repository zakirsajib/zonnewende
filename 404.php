<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package zonnewende
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'zonnewende' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					
					<div class="col-md-8">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'zonnewende' ); ?></p>
				</div>
				<div class="col-md-4 error-sidebar">
					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts','', 'before_title=<h4 class="widget-title">&after_title=</h4>' );

						// Only show the widget if site has multiple categories.
						if ( zonnewende_categorized_blog() ) :
					?>

					<div class="widget widget_categories">
						<h4 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'zonnewende' ); ?></h4>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php
						endif;

				the_widget( 'WP_Widget_Archives', 'dropdown=0', "before_title=<h4 class='widget-title'>&after_title=</h4>" );

				the_widget( 'WP_Widget_Tag_Cloud', '', 'before_title=<h4 class="widget-title">&after_title=</h4>' );
					?>
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
