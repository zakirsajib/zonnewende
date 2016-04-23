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
			<nav class="navbar" role="navigation">
				<div class="container">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#zonnewende-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <?php $header_logo = get_theme_mod('header_logo');
					      if($header_logo):?>
						  	<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo esc_html($header_logo)?>" alt="<?php bloginfo( 'name' ); ?>"></a>
						  	<?php else:?>
						  		<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/assets/images/logo-zonnewende.jpg" alt="<?php bloginfo( 'name' ); ?>"></a>
						  	<?php endif?>
				    </div><!-- .navbar-header -->

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
			                //'walker'            => new wp_bootstrap_navwalker())
			            ));
			        ?>
		    
		    	</div><!-- .container -->
			</nav><!-- .navbar -->
		</header><!-- #masthead -->
	<div id="content" class="site-content">
