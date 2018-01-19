<?php
/**
 * tvoja-krajina functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tvoja-krajina
 */

if ( ! function_exists( 'tvoja_krajina_2018_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tvoja_krajina_2018_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tvoja-krajina, use a find and replace
		 * to change 'tvoja-krajina-2018' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tvoja-krajina-2018', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		// add_theme_support( 'automatic-feed-links' );

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
			'menu-1' => esc_html__( 'Primary', 'tvoja-krajina-2018' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'tvoja_krajina_2018_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'tvoja_krajina_2018_setup' );

/**
 * Enqueue scripts and styles.
 */
function tvoja_krajina_2018_scripts() {

	wp_enqueue_style( 'slick-styles', get_template_directory_uri() . '/libs/slick/slick.css');
	wp_enqueue_style( 'optiscroll-styles', get_template_directory_uri() . '/libs/optiscroll/optiscroll.css');


	wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/style.css' , false, filemtime(get_stylesheet_directory() . '/css/style.css'));

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );



	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/libs/slick/slick.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'marquee-js', get_template_directory_uri() . '/libs/marquee/marquee.js', array('jquery'), null, true );
	wp_enqueue_script( 'optiscroll-js', get_template_directory_uri() . '/libs/optiscroll/jquery.optiscroll.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/core.js', array('jquery'), null, true );

}
add_action( 'wp_enqueue_scripts', 'tvoja_krajina_2018_scripts');

/**
 * Remove emoji
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/**
 *  Customize wp-admin login form logo
 */
function wp_login_logo() { ?>
<style type="text/css">
#login h1 a, .login h1 a {
	width: 233px;
	height: 37px;
	background-image: url(/wp-content/uploads/2017/12/logo_header.png);
	background-size: contain;
}
</style>
<?php }
add_action( 'login_enqueue_scripts', 'wp_login_logo' );

/**
 * Remove default menu items
 */
function remove_default_menu_items() {
    remove_menu_page( 'edit-comments.php' );          //Comments
    remove_menu_page( 'edit.php' );                   //Posts
}
add_action('admin_menu','remove_default_menu_items');

/**
* Load template part
*/
function load_template_part($template_name, $part_name=null) {
	ob_start();
	get_template_part('template-parts/'.$template_name, $part_name);
	$var = ob_get_contents();
	ob_end_clean();
	echo $var;
}

/**
* Customizer options live preview
*/
function _action_theme_wp_print_styles() {
	if (!defined('FW')) return;

	echo '<style type="text/css">';

	$intro_bg = fw_get_db_customizer_option('intro-bg');
	if ($intro_bg) {
		echo '.intro { '
		. 'background-image: url( '. esc_html($intro_bg['url']) .' ); '
		. '}';
	}

	$subintro_bg = fw_get_db_customizer_option('subintro-bg');
	if ($intro_bg) {
		echo '.sub-intro { '
		. 'background-image: url( '. esc_html($subintro_bg['url']) .' ); '
		. '}';
	}

	echo '</style>';
}
add_action('wp_head', '_action_theme_wp_print_styles');
