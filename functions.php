<?php
/**
 * zonnewende functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package zonnewende
 */

if ( ! function_exists( 'zonnewende_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function zonnewende_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on zonnewende, use a find and replace
	 * to change 'zonnewende' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'zonnewende', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'zonnewende' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'quote',
		'gallery'
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'zonnewende_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'zonnewende_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zonnewende_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zonnewende_content_width', 1170 );
}
add_action( 'after_setup_theme', 'zonnewende_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zonnewende_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'zonnewende' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'zonnewende' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Contact Page Sidebar', 'zonnewende' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'zonnewende' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Maaltijdverzorging Page Sidebar', 'zonnewende' ),
		'id'            => 'maaltijdverzorging-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'zonnewende' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'zonnewende_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function zonnewende_scripts() {
	wp_enqueue_style( 'zonnewende-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
	
	wp_enqueue_style( 'wpcore', get_template_directory_uri() . '/assets/wpcore/wpcore.css');
	
	wp_enqueue_style( 'Maven Pro', '//fonts.googleapis.com/css?family=Maven+Pro:300,400,700');
	
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/animate-css/animate.min.css');
	
	wp_enqueue_style( 'jpreloader', get_template_directory_uri() . '/assets/jpreloader/css/jpreloader.css');
	
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/owl.carousel/assets/owl.carousel.css');
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/magnificPopup/magnific-popup.css');
	
	
	if(is_page('plattegrond')):
	// mapplic jQuery Plugin
	wp_enqueue_style( 'map', get_template_directory_uri() . '/mapplic/css/map.css');
	wp_enqueue_style( 'mapplic', get_template_directory_uri() . '/mapplic/mapplic/mapplic.css');
	endif;
	
	
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css');
	
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css');

	
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), true );
	
	wp_enqueue_script( 'jpreloader', get_template_directory_uri() . '/assets/jpreloader/js/jpreloader.min.js', array('jquery'), '20151215', true );
	
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/owl.carousel/owl.carousel.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/magnificPopup/jquery.magnific-popup.min.js', array('jquery'), '20151215', true);
	
	// mapplic jQuery Plugin
	
	if(is_page('plattegrond')):
	
	wp_enqueue_script( 'hammer', get_template_directory_uri() . '/mapplic/js/hammer.min.js', array('jquery'), '20151215', true);
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/mapplic/js/jquery.easing.js', array('jquery'), '20151215', true);
	wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/mapplic/js/jquery.mousewheel.js', array('jquery'), '20151215', true);

	wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/mapplic/js/smoothscroll.js', array('jquery'), '20151215', true);
	
	wp_enqueue_script( 'mapplic', get_template_directory_uri() . '/mapplic/mapplic/mapplic.js', array('jquery'), '20151215', true);
	
	endif;
	
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/zonnewende.js', array('jquery'), '20151215', true );
	
	wp_enqueue_script( 'zonnewende-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'zonnewende-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zonnewende_scripts' );


/**
 * Add SVG capabilities
 */
function wpcontent_svg_mime_type( $mimes = array() ) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );


/**
 * This function modifies the main WordPress query to remove pages from search results.
 *
 * @param object $query  The original query
 * @return object $query The amended query.
 */
add_filter( 'pre_get_posts', 'tgm_io_exclude_pages' );

function tgm_io_exclude_pages( $query ) {
	
    if ( $query->is_search ) {
	$query->set( 'post_type', 'post' );
    }
    
    return $query;
    
}




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/custom-css.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/**
 * Load wp-bootstrap-navwalker file.
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 * Load plattegrondmap map file.
 */
//require get_template_directory() . '/inc/plattegrondmap.php';
