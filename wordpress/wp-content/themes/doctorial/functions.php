<?php
/**
 * Doctorial functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Doctorial
 */

if ( ! function_exists( 'doctorial_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function doctorial_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Doctorial, use a find and replace
	 * to change 'doctorial' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'doctorial', get_template_directory() . '/languages' );

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
	add_image_size('doctorial-square-image', 500, 500, true);
	add_image_size('doctorial-full', 1200, 800, true);


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'doctorial' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'doctorial_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	add_theme_support( 'custom-logo' , array(
	 	'header-text' => array( 'site-title', 'site-description' ),
	 	));
	add_theme_support( 'woocommerce' );
		
}
endif;
add_action( 'after_setup_theme', 'doctorial_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function doctorial_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'doctorial_content_width', 640 );
}
add_action( 'after_setup_theme', 'doctorial_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function doctorial_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'doctorial' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'doctorial' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'doctorial' ),
		'id'            => 'doctorial-shop-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'doctorial' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'doctorial' ),
		'id'            => 'doctorial-footer-one',
		'description'   => esc_html__( 'Add widgets here.', 'doctorial' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'doctorial' ),
		'id'            => 'doctorial-footer-two',
		'description'   => esc_html__( 'Add widgets here.', 'doctorial' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'doctorial' ),
		'id'            => 'doctorial-footer-three',
		'description'   => esc_html__( 'Add widgets here.', 'doctorial' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'doctorial' ),
		'id'            => 'doctorial-footer-four',
		'description'   => esc_html__( 'Add widgets here.', 'doctorial' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'doctorial_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function doctorial_scripts() {
	$query_args = array( 
	    'family' => 'Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic|Roboto:400,300,700|Poppins:300,400,600'
	);
	
	wp_enqueue_style( 'doctorial-google-fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ) );

	wp_enqueue_style( 'jquery-bxslider', get_template_directory_uri(). '/css/jquery.bxslider.css' );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/css/font-awesome.css' );

	wp_enqueue_style( 'jquery-fancybox', get_template_directory_uri(). '/css/jquery.fancybox.css' );

	wp_enqueue_style( 'animate', get_template_directory_uri(). '/css/animate.css' );

	wp_enqueue_style( 'doctorial-style', get_stylesheet_uri() );

	wp_enqueue_style( 'doctorial-responsive', get_template_directory_uri(). '/css/responsive.css' );

	wp_enqueue_script('jquery-bxslider-js',get_template_directory_uri().'/js/jquery.bxslider.js', array('jquery'), '4.1.2',true);
	
	wp_enqueue_script('jquery-wow',get_template_directory_uri().'/js/wow.js', array('jquery'), '1.1.2',true);

	wp_enqueue_script('jquery-fancybox',get_template_directory_uri().'/js/jquery.fancybox.js', array('jquery'), '3.1.20',true);

	wp_enqueue_script( 'doctorial-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20170825', true );

	wp_enqueue_script( 'doctorial-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );


	wp_register_script('doctorial-custom',get_template_directory_uri().'/js/custom.js', array('jquery'), '',true);	

	$slider_option = get_theme_mod('doctorial_homepage_slider_option', 0 );
	
	if( $slider_option ){
        $show_pager = esc_attr(get_theme_mod('doctorial_homepage_slider_pager','0') ? "true" : "false");
        $show_controls = esc_attr(get_theme_mod('doctorial_homepage_slider_control','0')  ? "true" : "false");
        $auto_transition = (get_theme_mod('doctorial_homepage_slider_transition_auto', 0 ) == "1") ? "true" : "false";
        $slider_transition = get_theme_mod('doctorial_homepage_slider_transition_type','horizontal');
        $slider_speed = get_theme_mod('doctorial_homepage_slider_transition_speed','1000');
        $slider_pause = get_theme_mod('doctorial_homepage_slider_pause',"5000");

		$doctorial_data_array = array(
			'auto'   => esc_attr($auto_transition),
			'option' => absint($slider_option),
			'mode' => esc_attr($slider_transition),
			'speed' => absint($slider_speed),
			'controls' => esc_attr($show_controls),
			'pause'  => esc_attr( $slider_pause ),
			'pager'  => esc_attr( $show_pager ),
			);
	}
	else{
		$doctorial_data_array = array(
			'option' => absint($slider_option),
		);
	}
	wp_localize_script( 'doctorial-custom', 'doctorial_data', $doctorial_data_array );
	wp_enqueue_script( 'doctorial-custom' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'doctorial_scripts' );

/**
 * Custom Switch control additions.
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

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Customizer Custom additions.
 */
require get_template_directory() . '/inc/doctorial-customizer.php';

/**
 * Custom function additions.
 */
require get_template_directory() . '/inc/doctorial-function.php';

/**
 * Custom Switch control additions.
 */
require get_template_directory() . '/inc/controls/doctorial-custom-switch.php';

/**
 * Custom Switch control additions.
 */
require get_template_directory() . '/inc/doctorial-woo.php';

/**
 * theme information control additions.
 */
require get_template_directory() . '/inc/theme-information.php';




add_action('admin_menu', 'wpso_custom_links_admin_menu');
function wpso_custom_links_admin_menu() {
    global $submenu;
    $submenu['index.php'][] = array( 'contact us', 'read', 'http://localhost/wordpress/wp-admin/admin.php?page=formidable-entries&form=1&frm_action=list&_wpnonce=c1a852555e&_wp_http_referer&paged=1' );

    $submenu['index.php'][] = array( 'refil request', 'read', 'http://localhost/wordpress/wp-admin/admin.php?page=formidable-entries&form=2&frm_action=list&_wpnonce=e7a33ff574&_wp_http_referer&paged=1' );

    $submenu['index.php'][] = array( 'transfer prescription', 'read', 'http://localhost/wordpress/wp-admin/admin.php?page=formidable-entries&form=4&frm_action=list&_wpnonce=71b38e3442&_wp_http_referer&paged=1' );
}