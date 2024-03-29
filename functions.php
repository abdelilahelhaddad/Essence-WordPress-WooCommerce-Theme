<?php

/**
 * essence functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package essence
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
function essence_setup()
{

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

	/*
		* Enable support for WooCommerce.
		*/
	add_theme_support('woocommerce', array(
		'thumbnail_image_width' => 300,
		'single_image_width'    => 400,

		'product_grid'          => array(
			'default_rows'    => 3,
			'min_rows'        => 2,
			'max_rows'        => 6,
			'default_columns' => 3,
			'min_columns'     => 3,
			'max_columns'     => 3,
		),
	));

	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');

	/* Insert big images without breaking content area*/

	if (!isset($content_width)) {
		$content_width = 600;
	}

	/**
	 * Enqueue WP Bootstrap Navwalker library (responsive menu).
	 */
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

	/**
	 * Customizer additions.
	 */
	require get_template_directory() . '/inc/customizer.php';

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'essence_main_menu' 	=> esc_html__('Essence Main Menu', 'essence'),
			'essence_footer_menu' 	=> esc_html__('Essence Footer Menu', 'essence'),
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
			'essence_custom_background_args',
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

	add_theme_support('post-thumbnails');
	add_image_size('essence-hero-section', 1920, 770, array('center', 'right'));
}
add_action('after_setup_theme', 'essence_setup');

/*
	Add Footer and Subscribtion Widgets
*/

function essence_widgets()
{
	register_sidebar(array(
		'name'          => esc_html__('Footer Sidebar', 'essence'),
		'id'            => 'essence-sidebar-footer',
		'description'   => esc_html__('Drag and drop your widgets here.', 'essence'),
		'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar(array(
		'name'          => esc_html__('Subscribtion Widget', 'essence'),
		'id'            => 'essence-widget-footer',
		'description'   => esc_html__('Drag and drop your widgets here.', 'essence'),
		'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	));
	register_sidebar(array(
		'name'					=> esc_html__('Essence Shop Sidebar', 'essence'),
		'id'						=> 'essence-shop-sidebar',
		'description'   => esc_html__('Drag and drop your widgets here.', 'essence'),
		'before_widget' => '<div id="%1$s" class="widget %2$s shop_sidebar_area mb-50">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title mb-30">',
		'after_title'   => '</h6>',
	));
}
add_action('widgets_init', 'essence_widgets');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function essence_content_width()
{
	$GLOBALS['content_width'] = apply_filters('essence_content_width', 640);
}
add_action('after_setup_theme', 'essence_content_width', 0);

/**
 * Enqueue scripts and styles.
 */
function essence_scripts()
{
	wp_enqueue_style('core-style', get_template_directory_uri() . '/css/core-style.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('classy-nav', get_template_directory_uri() . '/css/classy-nav.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/css/jquery-ui.min.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('nice-select', get_template_directory_uri() . '/css/nice-select.css', array(), _S_VERSION, 'all');
	wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), _S_VERSION, 'all');

	wp_enqueue_script('jquery224', get_template_directory_uri() . '/js/jquery/jquery-2.2.4.min.js', array(), '2.2.4', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery224'), '4.1.0', true);
	wp_enqueue_script('popper-js', get_template_directory_uri() . '/js/popper.min.js', array(), '', true);
	wp_enqueue_script('classy-nav-js', get_template_directory_uri() . '/js/classy-nav.min.js', array(), '', true);
	wp_enqueue_script('active-js', get_template_directory_uri() . '/js/active.js', array(), '', true);
	wp_enqueue_script('map-active-js', get_template_directory_uri() . '/js/map-active.js', array(), '', true);
	wp_enqueue_script('plugins-js', get_template_directory_uri() . '/js/plugins.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'essence_scripts');

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Show cart contents / total Ajax
 */
add_filter('woocommerce_add_to_cart_fragments', 'essence_woocommerce_header_add_to_cart_fragment');

function essence_woocommerce_header_add_to_cart_fragment($fragments)
{
	global $woocommerce;

	ob_start();

?>
	<span class="cart-item"><?php echo esc_html(WC()->cart->get_cart_contents_count()); ?></span>
<?php
	$fragments['span.cart-item'] = ob_get_clean();
	return $fragments;
}
