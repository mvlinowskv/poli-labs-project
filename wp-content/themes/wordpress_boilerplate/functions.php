<?php
/**
 * Crypto functions and definitions
 *
 * @package Crypto
 * @since Crypto 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 900; /* pixels */
 
if ( ! function_exists( 'crypto_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function crypto_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'crypto', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /* HTML5 */
    add_theme_support( 'html5' );

    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    // Register Bootstrap 4 Navigation Walker (https://github.com/wp-bootstrap/wp-bootstrap-navwalker)
    // require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Menu podstawowe', 'crypto' ),
        'secondary' => __('Drugie menu', 'crypto' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif; // crypto_setup
add_action( 'after_setup_theme', 'crypto_setup' );


/** 
* Altering wordpress visual editor
*
**/

function change_TinyMCE( $in ) {
  $in['paste_remove_styles'] = true;

  return $in;
}

add_filter( 'tiny_mce_before_init', 'change_TinyMCE' );


/**
 * Enqueue scripts and styles.
 */
function crypto_scripts() {

    // wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css', 'style' );
    // wp_enqueue_style( 'fontawesome', get_template_directory_uri() .'/css/font-awesome.min.css', 'style' );
    wp_enqueue_style( 'crypto-style', get_template_directory_uri() .'/dist/css/style.min.css', array(), '1.0' );
    // wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0' );
    // wp_enqueue_script( 'crypto-js-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0' );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/dist/js/script.min.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'crypto_scripts' );

//Google Fonts
function google_fonts() {
               wp_register_style('Google Fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');
               wp_enqueue_style( 'Google Fonts');
       }

add_action('wp_print_styles', 'google_fonts');

//Material Icons

function material_icons() {
               wp_register_style('Material Icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
               wp_enqueue_style( 'Material Icons');
       }

add_action('wp_print_styles', 'material_icons');

// WordPress Titles
add_theme_support( 'title-tag' );

// Excerpt length 
function my_excerpt_length($length) {
return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');

// function home_below_hero() {
//   do_action('home_below_hero');
// }

// require_once( __DIR__ . '/inc/wc-breadcrumb.php');
// require_once( __DIR__ . '/inc/wc-unhook.php');


add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		acf_register_block(array(
			'name'				=> 'section-header',
			'title'				=> __('header'),
			'description'		=> __('header.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'common',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'i','header' ),
		));

        acf_register_block(array(
			'name'				=> 'section-boxes',
			'title'				=> __('boxes'),
			'description'		=> __('boxes.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'common',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'i','boxes' ),
		));

        acf_register_block(array(
			'name'				=> 'box-image-text',
			'title'				=> __('box-image-text'),
			'description'		=> __('box-image-text.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'common',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'i','box-image-text' ),
		));

        acf_register_block(array(
			'name'				=> 'box-numbers',
			'title'				=> __('box-numbers'),
			'description'		=> __('box-numbers.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'common',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'i','box-numbers' ),
		));
        
        acf_register_block(array(
			'name'				=> 'box-contact',
			'title'				=> __('box-contact'),
			'description'		=> __('box-contact.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'common',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'i','box-contact' ),
		));

        acf_register_block(array(
			'name'				=> 'doctors',
			'title'				=> __('doctors'),
			'description'		=> __('doctors.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'common',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'i','doctors' ),
		));

        acf_register_block(array(
			'name'				=> 'boxes-animation',
			'title'				=> __('boxes-animation'),
			'description'		=> __('boxes-animation.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'common',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'i','boxes-animation' ),
		));

        acf_register_block(array(
			'name'				=> 'form',
			'title'				=> __('form'),
			'description'		=> __('form.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'common',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'i','form' ),
		));
    }

}



function my_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/inc/template-parts/blocks/{$slug}.php") ) ) {
		include( get_theme_file_path("/inc/template-parts/blocks/{$slug}.php") );
	}
}

//add theme logo

add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	// 'header-text' => array( 'site-title', 'site-description' ),
) );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Footer General Settings',
		'menu_title'	=> 'Footer Settings',
		'menu_slug' 	=> 'footer-general-settings',
	));

}