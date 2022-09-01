<?php
/**
 * Rowland-Clone functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rowland-Clone
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
function rowland_clone_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Rowland-Clone, use a find and replace
		* to change 'rowland-clone' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'rowland-clone', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'rowland-clone' ),
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
			'rowland_clone_custom_background_args',
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
add_action( 'after_setup_theme', 'rowland_clone_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rowland_clone_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rowland_clone_content_width', 640 );
}
add_action( 'after_setup_theme', 'rowland_clone_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rowland_clone_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rowland-clone' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rowland-clone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rowland_clone_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rowland_clone_scripts() {
	wp_enqueue_style( 'rowland-clone-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'rowland-clone-style', 'rtl', 'replace' );
	wp_enqueue_style( 'Rowland-new-main', '/wp-content/themes/rowland-clone/builds/development/css/style.css', array(), _S_VERSION );
    	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);    
	wp_enqueue_script( 'rowland-clone-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'custom-js', '/wp-content/themes/rowland-clone/builds/development/js/custom.js', array(), null, true ); 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rowland_clone_scripts' );

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


// Adding custiom headers
function additional_securityheaders( $headers ) {

    $headers['Referrer-Policy']             = 'no-referrer';
    $headers['X-Content-Type-Options']      = 'nosniff';
    $headers['X-XSS-Protection']            = '1; mode=block';
    $headers['Permissions-Policy']          = 'fullscreen=(self "NEED--TO--CHANGE--TO--SITE--URL"), geolocation=*, camera=()';
    $headers['X-Frame-Options']             = "SAMEORIGIN";
    $headers ['Strict-Transport-Security']  = "max-age=31536000";
  
  return $headers;
}
add_filter( 'wp_headers', 'additional_securityheaders' );

// disable API endpoints to harden site
add_filter('rest_endpoints', function( $endpoints ) {

    foreach( $endpoints as $route => $endpoint ){
        if( 0 === stripos( $route, '/wp/' ) ){
            unset( $endpoints[ $route ] );
        }
    }

    return $endpoints;
});

// Batch Change Canonical URLs to overwrite Pantheon dev urls
function change_canonical($url) {
    global $post;
         return 'https://NEED--TO--CHANGE--TO--SITE--URL' . $post->post_name;
    
}
add_filter( 'wpseo_canonical', 'change_canonical' ); 

// Change OG:url to over write Pantheon dev urls
add_filter( 'wpseo_opengraph_url', 'my_opengraph_url' );

function my_opengraph_url( $url ) {
    global $post;
        return 'https://NEED--TO--CHANGE--TO--SITE--URL/' . $post->post_name;
}

/** Create Theme Options pages for ACF fields to live on in menu */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page( array(
		'page_title'  => 'Theme Options',
		'menu_title'  => 'Theme Options',
		'menu_slug'   => 'theme-options',
		'capability'  => 'edit_posts',
		'parent_slug' => '',
		'position'    => false
	)); 
	acf_add_options_sub_page( array(
		'page_title'  => 'Theme Header Settings',
		'menu_title'  => 'Header',
		'parent_slug' => 'theme-options',
	) );
	acf_add_options_sub_page( array(
		'page_title'  => 'Theme Footer Settings',
		'menu_title'  => 'Footer',
		'parent_slug' => 'theme-options',
	) );
}

/*********************** Remove Post from admin menu ***********************/

function post_remove ()      //creating functions post_remove for removing menu item
{ 
   remove_menu_page('edit.php');
}

add_action('admin_menu', 'post_remove');   //adding action for triggering function call

/*********************** Add Super Menu ***********************/
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'Super-menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

// Disable WP Users REST API for non-authenticated users (allows anyone to see username list at /wp-json/wp/v2/users)
add_filter( 'rest_authentication_errors', function( $result ) {
	if ( true === $result || is_wp_error( $result ) ) {
		return $result;
	}

	if ( ! is_user_logged_in() ) {
		return new WP_Error(
			'rest_not_logged_in',
			__( 'You are not currently logged in.' ),
			array( 'status' => 401 )
		);
	}

	return $result;
});

// Adding custiom headers
function additional_securityheaders( $headers ) {
    $headers['Referrer-Policy']             = 'no-referrer';
    $headers['X-Content-Type-Options']      = 'nosniff';
    $headers['X-XSS-Protection']            = '1; mode=block';
    $headers['Permissions-Policy']          = 'fullscreen=(self "https://***Update with site url****"), geolocation=*, camera=()';
    $headers['X-Frame-Options']             = "SAMEORIGIN";
    $headers ['Strict-Transport-Security']  = "max-age=31536000";
  return $headers;
}
add_filter( 'wp_headers', 'additional_securityheaders' );