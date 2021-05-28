<?php

/**
 * Get header background image
 * 
 * @return string
 */
function get_hero_background_image() {
    $id = get_theme_mod( 'koble_kus_header_background_image' );

    return wp_get_attachment_image_url( $id );
}

/**
 * Header fallback menu notice
 */
function koble_kus_header_menu_notice() {
    echo 'Header menu will appear here';
}

/**
 * Footer fallback menu notice
 */
function koble_kus_footer_menu_notice() {
    echo 'Footer menu will appear here';
}

/**
 * Get post data
 * 
 * @param string $post_type
 * @param init $limit
 * 
 * @return Wp_Query
 */
function get_custom_post_data( $post_type, $limit = 3 ) {

    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => $limit
    );

    $posts = new WP_Query( $args );

    return $posts;
}