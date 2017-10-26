<?php
/**
 * wp_theme_99papers functions and definitions.
 *
 *
 * @package wp_theme_99papers
 */


require get_template_directory() . '/webmaster/params.php';
$curr_url = parse_url($_SERVER['REQUEST_URI']);
setcookie('rid', $rid, time()+3600*24*30);
$additional_query = "rid=" . $rid;
if (!empty($sid)) $additional_query .=  "&sid=" . $sid;
if (!empty($dsc)) $additional_query .=  "&dsc=" . $dsc;

$paths =Array('/order.html' , '/inquiry.html', '/dashboard.html');
foreach ($paths as $path) {
    if ($curr_url['path'] == $path) {
        if($curr_url['query']){
            wp_redirect( $myURL . $path . '?' . $curr_url['query'] . '&' . $additional_query  );
        }
        else{
            wp_redirect( $myURL . $path . '?' . $additional_query  );
        }
        exit;
    }
}

function do_excerpt($string, $word_limit) {
    $words = explode(' ', $string, ($word_limit + 1));
    if (count($words) > $word_limit)
        array_pop($words);
    echo implode(' ', $words).' ...';
}

/////

if ( ! function_exists( 'wp_theme_99papers_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_theme_99papers_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wp_theme_99papers, use a find and replace
	 * to change 'wp_theme_99papers' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wp_theme_99papers', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'wp_theme_99papers' ),
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
	add_theme_support( 'custom-background', apply_filters( 'wp_theme_99papers_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'wp_theme_99papers_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_theme_99papers_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_theme_99papers_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_theme_99papers_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_theme_99papers_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp_theme_99papers' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp_theme_99papers' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wp_theme_99papers_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function wp_theme_99papers_scripts() {
//	wp_deregister_script( 'jquery' );

	wp_register_script( 'bundle', get_template_directory_uri().'/js/bundle-new.js', array(), NULL, true );
	wp_enqueue_script( 'bundle' );
}

add_action( 'wp_enqueue_scripts', 'wp_theme_99papers_scripts' );
function wp_theme_99papers_disable_feed() {
    wp_die( __('No feeds available, please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
}

add_action('do_feed', 'wp_theme_99papers_disable_feed', 1);
add_action('do_feed_rdf', 'wp_theme_99papers_disable_feed', 1);
add_action('do_feed_rss', 'wp_theme_99papers_disable_feed', 1);
add_action('do_feed_rss2', 'wp_theme_99papers_disable_feed', 1);
add_action('do_feed_atom', 'wp_theme_99papers_disable_feed', 1);

remove_action( 'wp_head', 'wp_theme_99papers_disable_feed', 3 );
remove_action( 'wp_head', 'wp_theme_99papers_disable_feed', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
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

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

