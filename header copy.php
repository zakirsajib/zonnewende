<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zonnewende
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'zonnewende' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-3 hidden-xs hidden-sm hiddem-md">
					<div class="site-branding ">
						<?php
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri()?>/assets/images/logo-zonnewende.jpg" alt="Groepsaccommodatie Zonnewende"></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri()?>/assets/images/logo-zonnewende.jpg" alt="Groepsaccommodatie Zonnewende"></a></p>
						<?php
						endif;
			
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>
					</div><!-- .site-branding -->
				</div><!-- .col-md-4-->
	
				<div class="col-md-9">
					<nav class="navbar" role="navigation">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#zonnewende-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand visible-xs visible-sm" href="<?php echo home_url(); ?>">
					                <img src="<?php echo get_template_directory_uri()?>/assets/images/logo-zonnewende.jpg" alt="Groepsaccommodatie Zonnewende">
					            </a>
					    </div>

				        <?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary',
				                'depth'             => 2,
				                'container'         => 'div',
				                'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'zonnewende-navbar-collapse-1',
				                'menu_class'        => 'nav navbar-nav',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker())
				            );
				        ?>
				    </nav>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
