<?php
// General Setup
function chromasites_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_editor_style( 'editor-style.css', 'assets/css/chroma-theme.min.css' );
	register_nav_menus( array(
		'primary' => 'Primary Menu',
		'mobile' => 'Mobile Menu'
	) );
}
add_action( 'after_setup_theme', 'chromasites_setup' );

// Bootstrap Navigation Integration
require_once('wp_bootstrap_navwalker.php');

// Widgets & Sidebars
function chromasites_custom_sidebars() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'chromasites' ),
		'id' => 'page-widget-area',
		'description' => __( 'These widgets will appear on any page or post with a sidebar.', 'chromasites' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Blog Sidebar', 'chromasites' ),
		'id' => 'blog-widget-area',
		'description' => __( 'These widgets will appear below the page widgets on blog posts and archives.', 'chromasites' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'chromasites_custom_sidebars' );

// Add Chroma Sites Standard Javascript & CSS Styles
function load_cs_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script(
		'jquery.bootstrap.js',
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
		'jquery',
		'3.3.2',
		true
	);
	wp_enqueue_script(
		'chroma-theme.js',
		get_template_directory_uri() . '/assets/js/chroma-theme.min.js',
		'jquery',
		'3.2.0',
		true
	);
	wp_enqueue_style(
		'bootstrap.css',
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css',
		array(),
		'3.3.2'
	);
	wp_enqueue_style(
		'chroma-theme.css',
		get_template_directory_uri() . '/assets/css/chroma-theme.css',
		array(),
		'3.1'
	);
	wp_enqueue_style(
		'font-awesome.css',
		'//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
		array(),
		'4.3.0'
	);
	wp_enqueue_style(
		'chromasites-style',
		 get_stylesheet_uri(),
		 'chroma-theme.css'
	);
}
add_action( 'wp_enqueue_scripts', 'load_cs_scripts' );

// Header Cleanup
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'start_post_rel_link', 10, 0 );
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
}
add_action('init', 'removeHeadLinks');

// Chroma Sites Login Logo
function chromasites_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/images/chromasites-login-logo.png) !important; }
    </style>';
}
add_action('login_head', 'chromasites_login_logo');

// Conditional Subpage Function
function is_subpage( $page = null ) {
    global $post;
    if ( ! is_page() )
        return false;
    if ( ! isset( $post->post_parent ) OR $post->post_parent <= 0 )
        return false;
    if ( ! isset( $page ) ) {
        return true;
    } else {
        if ( is_int( $page ) ) {
            if ( $post->post_parent == $page )
                return true;
        } else if ( is_string( $page ) ) {
            $parent = get_ancestors( $post->ID, 'page' );
            if ( empty( $parent ) )
                return false;
            $parent = get_post( $parent[0] );
            if ( $parent->post_name == $page )
                return true;
        }
        return false;
    }
}

// Display Specific Page Content Within a Template
function display_page_content ($page_id) {
  $post = get_page($page_id);
  $content = apply_filters('the_content', $post->post_content);
  echo $content;
}

// Cleaner Gallery Support
add_theme_support( 'cleaner-gallery' );

// Add Toolbar Menus
function custom_toolbar() {
	global $wp_admin_bar;
	$args = array(
		'id'     => 'chromasites_link',
		'title'  => __( 'ChromaSites.com', 'text_domain' ),
		'href'   => 'http://www.chromasites.com',
		'meta'   => array(
			'target'   => '_blank',
			'title'    => 'Go to the Chroma Sites website',
		),
	);
	$wp_admin_bar->add_menu( $args );
}
add_action( 'wp_before_admin_bar_render', 'custom_toolbar', 999 );

// Customizer Options
function chromasites_theme_customizer( $wp_customize ) {    
    // Layout Chooser
    $wp_customize->add_section( 'chromasites_layout_section' , array(
        'title'       => __( 'Layout & Logo', 'chromasites_setup' ),
        'priority'    => 35,
        'description' => 'Choose your preferred design layout.',
    ) );
    $wp_customize->add_setting( 'cs_layout' );
    $wp_customize->add_control( 'cs_layout', array(
        'type' => 'radio',
        'label'    => __( 'Choose a Layout Style', 'chromasites_setup' ),
        'section'  => 'chromasites_layout_section',
        'settings' => 'cs_layout',
        'choices'    => array(
            'walltowall' => 'Wall-to-Wall',
            'centerstage' => 'Center Stage',
            'letterhead' => 'Letterhead',
            'compact' => 'Compact',
        ),
    ) );
    function is_compact_layout() {
        return get_theme_mod('cs_layout') == 'compact';
    }
    $wp_customize->add_setting( 'cs_fixed_menu' );
    $wp_customize->add_control( 'cs_fixed_menu', array(
        'type' => 'checkbox',
        'label'    => __( 'Fix navbar to top.', 'chromasites_setup' ),
        'section'  => 'chromasites_layout_section',
        'settings' => 'cs_fixed_menu',
        'active_callback' => 'is_compact_layout',
    ) );
    
    // Navigation Style
    $wp_customize->add_setting( 'cs_nav_style' );
    $wp_customize->add_control( 'cs_nav_style', array(
        'type' => 'radio',
        'label'    => __( 'Choose a Navigation Style', 'chromasites_setup' ),
        'section'  => 'chromasites_layout_section',
        'settings' => 'cs_nav_style',
        'choices'    => array(
            'text-nav' => 'Plain Text',
            'bar-nav' => 'Bar Navigation',
            'button-nav' => 'Button Navigation',
        ),
    ) );
    
    // Logo Uploader & Text Logo
    $wp_customize->add_setting( 'chromasites_upload_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'chromasites_upload_logo', array(
        'label'    => __( 'Logo', 'chromasites_setup' ),
        'section'  => 'chromasites_layout_section',
        'settings' => 'chromasites_upload_logo',
    ) ) );
    $wp_customize->add_setting( 'chromasites_use_text_logo' );
    $wp_customize->add_control( 'chromasites_use_text_logo', array(
        'type' => 'checkbox',
        'label'    => __( 'Use text as your logo instead of an image.', 'chromasites_setup' ),
        'section'  => 'chromasites_layout_section',
        'settings' => 'chromasites_use_text_logo',
    ) );

	// Disable Blog
    $wp_customize->add_section( 'chromasites_blogging_section' , array(
        'title'       => __( 'Blogging', 'chromasites_setup' ),
        'priority'    => 47,
        'description' => 'Disable all blogging features within the admin area.',
    ) );
    $wp_customize->add_setting( 'chromasites_hide_blog_features' );
    $wp_customize->add_control( 'chromasites_hide_blog_features', array(
        'type' => 'checkbox',
        'label'    => __( 'Hide all blogging features.', 'chromasites_setup' ),
        'section'  => 'chromasites_blogging_section',
        'settings' => 'chromasites_hide_blog_features',
    ) );
    
	// Enable File Editor
    $wp_customize->add_section( 'chromasites_file_editor_section' , array(
        'title'       => __( 'File Editor', 'chromasites_setup' ),
        'priority'    => 50,
        'description' => 'Check this box to allow in browser editing of themes and plugins. Please do not change this setting unless you know what you are doing. Making modifications of this type can break your website.',
    ) );
    $wp_customize->add_setting( 'chromasites_allow_file_editor' );
    $wp_customize->add_control( 'chromasites_allow_file_editor', array(
        'type' => 'checkbox',
        'label'    => __( 'Allow file editing.', 'chromasites_setup' ),
        'section'  => 'chromasites_file_editor_section',
        'settings' => 'chromasites_allow_file_editor',
    ) );
}
add_action('customize_register', 'chromasites_theme_customizer');

// Choose which logo to use
function site_logo() {
	if ( get_theme_mod( 'chromasites_use_text_logo' ) == 'checked') :
		echo '<span class="text-logo">'; echo bloginfo( 'name' ); echo '</span>';
	elseif ( get_theme_mod( 'chromasites_upload_logo' ) ) :
		echo '<img itemprop="logo" src="'; echo esc_url( get_theme_mod( 'chromasites_upload_logo' ) ); echo '" alt="'; echo bloginfo('name'); echo '"/>';
	else :
		echo '<img src="' . get_stylesheet_directory_uri() . '/images/chromasites-wp-logo.png" />';
	endif;
}

// Function to Hide Blogging Features in Admin
if( get_theme_mod( 'chromasites_hide_blog_features' ) == 'checked') {
	function chromasites_hide_blog_menus () {
		if ( function_exists( 'remove_menu_page' ) ) {
			remove_menu_page('edit-comments.php');
			remove_menu_page('edit.php');
		} else {
			unset( $GLOBALS['menu'][25] );
		}
	}
	add_action( 'admin_menu', 'chromasites_hide_blog_menus' );
}

// Function to Disable File Editing in Admin
if( get_theme_mod( 'chromasites_allow_file_editor' ) != 'checked') {
	define('DISALLOW_FILE_EDIT',true);
}

// Load Chroma Sites Theme Options, Layouts and Settings Pages
get_template_part( 'custom-theme-settings' );