<?php

/**
 * vgp-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vgp-theme
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vgp_theme_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on vgp-theme, use a find and replace
		* to change 'vgp_theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('vgp_theme', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'vgp_theme'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'vgp_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'vgp_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vgp_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('vgp_theme_content_width', 640);
}
add_action('after_setup_theme', 'vgp_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vgp_theme_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'vgp_theme'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'vgp_theme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'vgp_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function vgp_theme_scripts()
{
	wp_enqueue_style('style', get_stylesheet_uri(), array(), _S_VERSION);

	if (is_single()) {
		wp_enqueue_style('single', get_template_directory_uri() . '/single.css', [], _S_VERSION);
	}

	wp_enqueue_script('vgp_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	// Responsive embeds script.
	wp_enqueue_script(
		'wmodal',
		get_template_directory_uri() . '/assets/js/wmodal.js',
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	// Responsive embeds script.
	wp_enqueue_script(
		'woffcanvas',
		get_template_directory_uri() . '/assets/js/woffcanvas.js',
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	// Responsive embeds script.
	wp_enqueue_script(
		'wswiper',
		get_template_directory_uri() . '/assets/js/wswiper.js',
		array(),
		wp_get_theme()->get('Version'),
		true
	);
}
add_action('wp_enqueue_scripts', 'vgp_theme_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

function get_custom_icon($blog_id = 0)
{
	return sprintf(
		'<a href="%1$s" class="custom-icon-link" rel="home"%2$s>%3$s</a>',
		esc_url(home_url('/')),
		'',
		"<img src='" . esc_url(get_template_directory_uri()) . '/assets/images/icon.png' . "' />"
	);

	// /**
	//  * Filters the custom logo output.
	//  *
	//  * @since 4.5.0
	//  * @since 4.6.0 Added the `$blog_id` parameter.
	//  *
	//  * @param string $html    Custom logo HTML output.
	//  * @param int    $blog_id ID of the blog to get the custom logo for.
	//  */
	// return apply_filters('get_custom_icon', $html, $blog_id);
}

function the_custom_icon($blog_id = 0)
{
	echo get_custom_icon($blog_id);
}
