<?php

define( 'KOLBEKUSSOFT_THEME_VERSION', '1.0.0' );
define( 'KOLBEKUSSOFT_THEME_DIR', get_stylesheet_directory() );
define( 'KOLBEKUSSOFT_THEME_URI', get_stylesheet_directory_uri() );

/**
 * Regiser css and js
 */
require_once KOLBEKUSSOFT_THEME_DIR . '/inc/class-koblekus-register-assets.php';

/**
 * Register sidebars
 */
require_once KOLBEKUSSOFT_THEME_DIR . '/inc/class-koblekus-sidebar.php';

/**
 * Register post types
 */
require_once KOLBEKUSSOFT_THEME_DIR . '/inc/class-koblekus-post-types.php';

/**
 * Load our nav walker
 */
require_once KOLBEKUSSOFT_THEME_DIR . '/inc/nav-walker/class-koblekus-header-nav-walker.php';
require_once KOLBEKUSSOFT_THEME_DIR . '/inc/nav-walker/class-koblekus-footer-nav-walker.php';

/**
 * Theme customizer class
 */
require_once KOLBEKUSSOFT_THEME_DIR . '/inc/koblekus-customizer.php';

/**
 * Helper
 */
require_once KOLBEKUSSOFT_THEME_DIR . '/inc/helper.php';

add_theme_support( 'custom-header', array(
        'width'           => 91,
        'height'          => 60,
        'header-text'     => false,
        'flex-width'      => true,
        'flex-height'     => true,
    )
);

add_theme_support( 'post-thumbnails');

add_action( 'init', 'register_koblekus_menus' );
function register_koblekus_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}