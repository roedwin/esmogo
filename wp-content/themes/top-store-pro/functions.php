<?php
/**
 * Top Store functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Top Store
 * @since 1.0.0
 */
/**
 * Theme functions and definitions
 */
if ( ! function_exists( 'top_store_pro_setup' ) ) :
define( 'TOP_STORE_THEME_VERSION','1.0.0');
define( 'TOP_STORE_THEME_DIR', get_template_directory() . '/' );
define( 'TOP_STORE_THEME_URI', get_template_directory_uri() . '/' );
define( 'TOP_STORE_THEME_SETTINGS', 'top-store-settings' );
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_top_store_pro_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function top_store_pro_setup(){
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'top-store-pro', get_template_directory() . '/languages' );
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
		add_theme_support( 'woocommerce' );
	
		// Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style-editor.css' );
        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		/**
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		// Add support for Custom Header.
		add_theme_support( 'custom-header', 

			apply_filters( 'top_store_custom_header_args', array(
				'default-image' => '',
				'flex-height'   => true,
				'header-text'   => false,
				'video'          => false,
		) 


		) );
		// Add support for Custom Background.
        if(get_theme_mod('top_store_color_scheme','opn-light')=='opn-dark'){
        $args = array(
	    'default-color' => '2f2f2f',
        );
        }else{
        $args = array(
	    'default-color' => 'f1f1f1',
        );	
        }
        add_theme_support( 'custom-background',$args );
        
        $GLOBALS['content_width'] = apply_filters( 'top_store_content_width', 640 );
        add_theme_support( 'woocommerce', array(
                                                 'thumbnail_image_width' => 320,
                                             ) );
         // Recommend plugins
        add_theme_support( 'recommend-plugins', array(
            'woocommerce' => array(
                'name' => esc_html__( 'Woocommerce', 'top-store-pro' ),
                'active_filename' => 'woocommerce/woocommerce.php',
            ),
             'yith-woocommerce-wishlist' => array(
                 'name' => esc_html__( 'YITH WooCommerce Wishlist', 'top-store-pro' ),
                 'active_filename' => 'yith-woocommerce-wishlist/init.php',
             ),
              'yith-woocommerce-compare' => array(
                 'name' => esc_html__( 'YITH WooCommerce Compare', 'top-store-pro' ),
                 'active_filename' => 'yith-woocommerce-compare/init.php',
             ),
            'lead-form-builder' => array(
                'name' => esc_html__( 'Lead Form Builder', 'top-store-pro' ),
                'active_filename' => 'lead-form-builder/lead-form-builder.php',
            ),
            'wp-popup-builder' => array(
                'name' => esc_html__( 'WP Popup Builder – Popup Forms & Newsletter', 'top-store-pro' ),
                'active_filename' => 'wp-popup-builder/wp-popup-builder.php',
            ),
            
            'one-click-demo-import' => array(
                'name' => esc_html__( 'One Click Demo Import', 'top-store-pro' ),
                'active_filename' => 'one-click-demo-import/one-click-demo-import.php',
            ),
        ) );
	}
endif;
add_action( 'after_setup_theme', 'top_store_pro_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 */
/**
 * Register widget area.
 */
function top_store_pro_widgets_init(){
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'top-store-pro' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here to appear in your primary sidebar.', 'top-store-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="top-store-widget-content">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Secondary Sidebar', 'top-store-pro' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here to appear in your secondary sidebar.', 'top-store-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="top-store-widget-content">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Above Header First Widget', 'top-store-pro' ),
		'id'            => 'top-header-widget-col1',
		'description'   => esc_html__( 'Add widgets here to appear in top header.', 'top-store-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Above Header Second Widget', 'top-store-pro' ),
		'id'            => 'top-header-widget-col2',
		'description'   => esc_html__( 'Add widgets here to appear in top header.', 'top-store-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Above Header Third Widget', 'top-store-pro' ),
		'id'            => 'top-header-widget-col3',
		'description'   => esc_html__( 'Add widgets here to appear in top header.', 'top-store-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar(array(
		'name'          => esc_html__( 'Main Header Widget', 'top-store-pro' ),
		'id'            => 'main-header-widget',
		'description'   => esc_html__( 'Add widgets here to appear in main header.', 'top-store-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar(array(
		'name'          => esc_html__( 'Footer Top First Widget', 'top-store-pro' ),
		'id'            => 'footer-top-first',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'top-store-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Top Second Widget', 'top-store-pro' ),
		'id'            => 'footer-top-second',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'top-store-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Top Third Widget', 'top-store-pro' ),
		'id'            => 'footer-top-third',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'top-store-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Below First Widget', 'top-store-pro' ),
		'id'            => 'footer-below-first',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'top-store-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Below Second Widget', 'top-store-pro' ),
		'id'            => 'footer-below-second',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'top-store-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name'          => esc_html__( 'Footer Below Third Widget', 'top-store-pro' ),
		'id'            => 'footer-below-third',
		'description'   => esc_html__( 'Add widgets here to appear in top footer.', 'top-store-pro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	for ( $i = 1; $i <= 4; $i++ ){
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'Footer Widget Area %d', 'top-store-pro' ), $i ),
			'id'            => 'footer-' . $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
	for ( $i = 1; $i <= 4; $i++ ){
	//Widgets for First Custom Section
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'First Custom Section Widget Area %d', 'top-store-pro' ), $i ),
			'id'            => 'first-customsec-' . $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	//Widgets for Second Custom Section
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'Second Custom Section Widget Area %d', 'top-store-pro' ), $i ),
			'id'            => 'second-customsec-' . $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	//Widgets for Third Custom Section
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'Third Custom Section Widget Area %d', 'top-store-pro' ), $i ),
			'id'            => 'third-customsec-' . $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	//Widgets for Four Custom Section
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'Fourth Custom Section Widget Area %d', 'top-store-pro' ), $i ),
			'id'            => 'four-customsec-' . $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	
	}
	//Widgets for Five Custom Section
	for ( $i = 1; $i <= 3; $i++ ){
		register_sidebar( array(
			'name'          => sprintf( esc_html__( 'Top Custom Section Widget Area %d', 'top-store-pro' ), $i ),
			'id'            => 'five-customsec-' . $i,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'top_store_pro_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function top_store_pro_scripts(){
	// enqueue css
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	wp_enqueue_style( 'font-awesome', TOP_STORE_THEME_URI . '/third-party/fonts/font-awesome/css/font-awesome.css', '', TOP_STORE_THEME_VERSION );
	wp_enqueue_style( 'animate', TOP_STORE_THEME_URI . '/css/animate.css','',TOP_STORE_THEME_VERSION);
	wp_enqueue_style( 'owl.carousel-css', TOP_STORE_THEME_URI . '/css/owl.carousel.css','',TOP_STORE_THEME_VERSION);
	wp_enqueue_style( 'top-store-menu', TOP_STORE_THEME_URI . '/css/top-store-menu.css','',TOP_STORE_THEME_VERSION);
	wp_enqueue_style( 'top-store-style', get_stylesheet_uri(), array(), TOP_STORE_THEME_VERSION );
	wp_add_inline_style('top-store-style', top_store_custom_style());
	wp_add_inline_style('top-store-style', top_store_typography_style());
    //enqueue js
    wp_enqueue_script("jquery-effects-core",array( 'jquery' ));
    wp_enqueue_script( 'jquery-ui-autocomplete',array( 'jquery' ),'',true );
    wp_enqueue_script('imagesloaded');
    wp_enqueue_script('top-store-menu-js', TOP_STORE_THEME_URI .'/js/top-store-menu.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script('jssor.slider-js', TOP_STORE_THEME_URI .'/js/jssor.slider.min.js', array( 'jquery' ), '1.0.1', true );
    wp_enqueue_script('owl.carousel-js', TOP_STORE_THEME_URI .'/js/owl.carousel.js', array( 'jquery' ), '1.0.1', true );
    wp_enqueue_script('sticky-sidebar-js', TOP_STORE_THEME_URI .'/js/sticky-sidebar.js', array( 'jquery' ), '1.0.1', true );
    wp_enqueue_script('top-store-accordian-menu-js', TOP_STORE_THEME_URI .'/js/top-store-accordian-menu.js', array( 'jquery' ), TOP_STORE_THEME_VERSION , true );

    wp_enqueue_script('accordion-js', TOP_STORE_THEME_URI .'/js/accordion.js', array( 'jquery' ), '1.0.1', true );
    // wp_enqueue_script('numscroller-js', TOP_STORE_THEME_URI .'/js/numscroller.js', array( 'jquery' ), '1.0.1', true );
    wp_enqueue_script( 'top-store-custom-js', TOP_STORE_THEME_URI .'/js/top-store-custom.js', array( 'jquery' ), TOP_STORE_THEME_VERSION , true );
     $topstorelocalize = array(
				'top_store_top_slider_optn' => get_theme_mod('top_store_top_slider_optn',false),
				'top_store_move_to_top_optn' => get_theme_mod('top_store_move_to_top',false),
				'top_store_pro_sticky_header_effect' => get_theme_mod('top_store_pro_sticky_header_effect','scrldwmn'),
				'top_store_top_slider_speed' => get_theme_mod('top_store_top_slider_speed','3000'),
				'top_store_sidebar_front_option' => get_theme_mod('top_store_sidebar_front_option','active-sidebar'),
				'top_store_tooltip_compare' => __('Compare','top-store-pro'),
				'top_store_tooltip_quikview' => __('Quickview','top-store-pro'),
				'top_store_tooltip_wishlist' => __('Wishlist','top-store-pro'),
			);
    wp_localize_script( 'top-store-custom-js', 'top_store',  $topstorelocalize);
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'top_store_pro_scripts' );
/********************************************************/
// Adding Dashicons in WordPress Front-end
/********************************************************/
add_action( 'wp_enqueue_scripts', 'top_store_pro_load_dashicons_front_end' );
function top_store_pro_load_dashicons_front_end(){
  wp_enqueue_style( 'dashicons' );
}

/**
 * Load init.
 */
require_once trailingslashit(TOP_STORE_THEME_DIR).'inc/init.php';
require_once( get_template_directory() . '/import/themehunk.php' );

//custom function conditional check for blog page
function top_store_pro_is_blog (){
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}
// Disable a plugin on activation of a theme.
add_action('after_switch_theme','top_store_pro_disable_plugins');
function top_store_pro_disable_plugins(){
    include_once(ABSPATH.'wp-admin/includes/plugin.php');
    $current_theme = wp_get_theme();
    $current_theme_name = $current_theme->Name;

    if($current_theme_name == 'Top Store Pro'){
        if ( is_plugin_active('hunk-companion/hunk-companion.php') ) {
            deactivate_plugins('hunk-companion/hunk-companion.php');    
        }
    }
}