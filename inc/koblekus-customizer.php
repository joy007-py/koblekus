<?php

/**
 * Theme customizer options
 */

add_action('customize_register', 'koblekus_customizer');
function koblekus_customizer( $wp_customize ) {

    $wp_customize->add_panel( 'koble_kus_theme_options', array(
            'priority' => 1,
            'title' => 'Theme Options',
            'description' => 'Modify theme options'
        )
    );

    footer_section_customizer( $wp_customize );
}


/**
 * Footer section
 */
function footer_section_customizer( $wp_customize ) {
   
    $wp_customize->add_section( 'koble_kus_footer_section',  array(
            'title' => 'Footer Section',
            'priority' => 3,
            'panel' => 'koble_kus_theme_options',
        ) 
    );

    $wp_customize->add_setting( 'koble_kus_footer_copyright', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ) 
    );

    $wp_customize->add_control( 'koble_kus_footer_copyright', array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'koble_kus_footer_section',
        'label'       => 'Copyright text',
        'description' => 'Text put here will be outputted in the footer copyright section'
        ) 
    );
}