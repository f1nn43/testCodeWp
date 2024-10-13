<?php
/**
 * testCodeWp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package testCodeWp
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function testcodewp_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on testCodeWp, use a find and replace
		* to change 'testcodewp' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'testcodewp', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'testcodewp' ),
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
			'testcodewp_custom_background_args',
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
add_action( 'after_setup_theme', 'testcodewp_setup' );


function mytheme_customize_register( $wp_customize ) {
	/*
	Добавляем секцию в настройки темы
	*/
	$wp_customize->add_section(
		// ID
		'data_site_section',
		// Arguments array
		array(
			'title' => 'Данные в меню',
			'capability' => 'edit_theme_options',
			'description' => "Укажите данные, которые будут отображаться в меню"
		)
	);
	/*
	Добавляем поле телефона site_telephone
	*/
	$wp_customize->add_setting(
		// ID
		'site_telephone',
		// Arguments array
		array(
			'default' => '',
			'type' => 'option'
		)
	);
	$wp_customize->add_control(
		// ID
		'site_telephone_control',
		// Arguments array
		array(
			'type' => 'text',
			'label' => "Текст с телефоном",
			'section' => 'data_site_section',
			// This last one must match setting ID from above
			'settings' => 'site_telephone'
		)
	);
	/*
	Добавляем поле контактных данных
	*/
	$wp_customize->add_setting(
		// ID
		'theme_contacttext',
		// Arguments array
		array(
			'default' => '',
			'type' => 'option'
		)
	);
	$wp_customize->add_control(
		// ID
		'theme_contacttext_control',
		// Arguments array
		array(
			'type' => 'text',
			'label' => "Текст с контактной информацией",
			'section' => 'data_site_section',
			// This last one must match setting ID from above
			'settings' => 'theme_contacttext'
		)
	);
	

	}
	add_action( 'customize_register', 'mytheme_customize_register' );

	add_action( 'customize_register', 'my_customize_register', 11 );

function my_customize_register( WP_Customize_Manager $wp_customize ){
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_panel('widgets');
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function testcodewp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'testcodewp_content_width', 640 );
}
add_action( 'after_setup_theme', 'testcodewp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function testcodewp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'testcodewp' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'testcodewp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'testcodewp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function testcodewp_scripts() {
	wp_enqueue_style( 'testcodewp-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'testcodewp-swiperStyle', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'testcodewp-styleClasses', get_template_directory_uri() . '/styles/style.css', array(), _S_VERSION );
	wp_style_add_data( 'testcodewp-style', 'rtl', 'replace' );

	wp_enqueue_script( 'testcodewp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'testcodewp-js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'testcodewp-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'testcodewp_scripts' );

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
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

