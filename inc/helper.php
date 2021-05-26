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