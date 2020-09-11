<?php
/**
 * kem-local functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kem-local
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'kem_local_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kem_local_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kem-local, use a find and replace
		 * to change 'kem-local' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kem-local', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'header-main-menu' => esc_html__( 'Header-Menu', 'kem-local' ),
				'footer-main-menu' => esc_html__( 'Footer Menu', 'kem-local' ),
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
				'kem_local_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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
endif;
add_action( 'after_setup_theme', 'kem_local_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kem_local_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kem_local_content_width', 640 );
}
add_action( 'after_setup_theme', 'kem_local_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kem_local_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kem-local' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kem-local' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kem_local_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kem_local_scripts() {
	

	wp_enqueue_style( 'kem-local-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'kem-local-slick', get_template_directory_uri() . '/assets/slick/slick.min.css');
	wp_enqueue_style( 'kem-local-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
	wp_enqueue_style( 'kem-local-style-main', get_template_directory_uri() . '/assets/css/style.css');
	wp_style_add_data( 'kem-local-style', 'rtl', 'replace' );

	wp_enqueue_script( 'kem-local-jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'kem-local-slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'kem-local-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kem_local_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/** Sample config additions.
*/
require get_template_directory() . '/inc/sample-config.php';

/** Breadcrumbs additions.
*/
// require get_template_directory() . '/inc/breadcrumb.php';
require get_template_directory() . '/breadcrumbs.php';

/** KEM cofiguration code.
*/

//Function for deleting span for CF7

// define('WPCF7_AUTOP', false );
// add_filter('wpcf7_form_elements', function($content) {
// $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
// return $content;
// });

//filter for deleting "br" and "p" for CF7

add_filter( 'wpcf7_autop_or_not', '__return_false' );

// Adding Post type Slick

function create_slick_post_type() {
    $labels = array(
        'name'                  => _x( 'Slicks', 'Post type general name', 'kem-local' ),
        'singular_name'         => _x( 'Slick', 'Post type singular name', 'kem-local' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'rewrite'            => array( 'slug' => 'slick'),
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
    register_post_type( 'slick', $args );
}
add_action( 'init', 'create_slick_post_type' );

// Adding Post type Services

function create_services_post_type() {
    $labels = array(
        'name'                  => _x( 'Услуги', 'Post type general name', 'kem-local' ),
        'singular_name'         => _x( 'Услуга', 'Post type singular name', 'kem-local' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'rewrite'            => array( 'slug' => 'services'),
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'comments' ),
    );
    register_post_type( 'services', $args );
}
add_action( 'init', 'create_services_post_type' );

//Adding Taxonomy for Services post type

add_action( 'init', 'create_taxonomy_for_services');
function create_taxonomy_for_services() {
	register_taxonomy( 'additional-services', [ 'services' ], [ 
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Доп.Услуги',
			'singular_name'     => 'Доп.Услуга',
			'search_items'      => 'Искать Услугу',
			'all_items'         => 'Все Услуги',
			'view_item '        => 'Смотреть Услугу',
			'parent_item'       => 'Родительская Услугу',
			'parent_item_colon' => 'Родительская Услугу:',
			'edit_item'         => 'Изменить Услугу',
			'update_item'       => 'Обновить Услугу',
			'add_new_item'      => 'Добавить Новую Услугу',
			'new_item_name'     => 'Имя Новой Услугу',
			'menu_name'         => 'Доп.Услуги',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => false,

		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
}
