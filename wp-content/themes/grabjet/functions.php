<?php
/**
 * wpmice functions and definitions
 *
 * @package GrabJet
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'wpmice_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wpmice_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wpmice, use a find and replace
	 * to change 'wpmice' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wpmice', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wpmice' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wpmice_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );
}
endif; // wpmice_setup
add_action( 'after_setup_theme', 'wpmice_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wpmice_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wpmice' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'wpmice_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wpmice_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
	
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '', true );
	
	wp_enqueue_style( 'wpmice-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wpmice-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'wpmice-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpmice_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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



function grabjet_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'grabjet_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'grabjet_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'm1' ),
        'section'  => 'title_tagline',
        'settings' => 'grabjet_logo',
    ) ) );
}
add_action( 'customize_register', 'grabjet_customize_register' );

function theme_footer_customizer($wp_customize){
	$wp_customize->add_section('footer_setting_section', array(
	  'title'          => 'Footer Section'
 	));

	$wp_customize->add_setting('footer_copyright', array(
 		'default' => 'Copyright '. date('Y'),
 	));
	
	$wp_customize->add_control('footer_copyright', array(
	 	'label'   => 'Copyright Text Here:',
		'section' => 'footer_setting_section',
	 	'type'    => 'text',
	));
}
add_action('customize_register', 'theme_footer_customizer');

function theme_header_customizer($wp_customize){
	$wp_customize->add_section('header_setting_section', array(
	  'title'          => 'Header Section'
 	));

	$wp_customize->add_setting('header_jet_img', array(
 		'default' => '',
 	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_jet_img', array(
        'label'    => 'Upload Jet Image',
        'section'  => 'header_setting_section',
        'settings' => 'header_jet_img',
    ) ) );  

	$wp_customize->add_setting('clouds_img', array(
 		'default' => '',
 	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'clouds_img', array(
        'label'    => 'Upload Clouds Image',
        'section'  => 'header_setting_section',
        'settings' => 'clouds_img',
    ) ) );   
}
add_action('customize_register', 'theme_header_customizer');

$logo = get_theme_mod( 'grabjet_logo' );
$header_jet_img = get_theme_mod( 'header_jet_img' );
$footer_copyright = get_theme_mod( 'footer_copyright' );
$clouds_img = get_theme_mod( 'clouds_img' );