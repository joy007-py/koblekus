<?php

/**
 * Theme customizer options
 */

add_action('customize_register', 'koblekus_customizer');
function koblekus_customizer( $wp_customize ) {

    $wp_customize->add_panel( 'koble_kus_theme_options', array(
            'priority' => 1,
            'title' => 'Homepage Sections',
            'description' => 'Modify home page section'
        )
    );

    header_section_customizer( $wp_customize );
    footer_section_customizer( $wp_customize );
}

/**
 * Header section
 */
function header_section_customizer( $wp_customize ) {
    
    $wp_customize->add_section( 'koble_kus_header_section',  array(
        'title' => 'Header Section',
        'priority' => 1,
        'panel' => 'koble_kus_theme_options',
        ) 
    );

    $wp_customize->add_setting( 'koble_kus_header_hero_text', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ) 
    );

    $wp_customize->add_control( 'koble_kus_header_hero_text', array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'koble_kus_header_section',
        'label'       => 'Title',
        'description' => 'Text put here will be outputted in the header hero title'
        ) 
    );

    $wp_customize->add_setting('koble_kus_header_background_image', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
        )
    );
    
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'koble_kus_header_background_image', array(
        'section' => 'koble_kus_header_section',
        'label' => 'Background hero image',
        'mime_type' => 'image'
    )));

    $wp_customize->add_setting( 'koble_kus_hero_section_content', array(
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control(  new Koble_Kus_Custom_Stack_Input_Customizer( $wp_customize, 'koble_kus_hero_section_content', array(
        'label' => 'Hero section content',
        'description' => '',
        'section' => 'koble_kus_header_section',
    ) ) );
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