<?php get_header() ?>

<?php
    /**
     * Home page hero section
     */
    get_template_part('template-parts/content/content', 'hero', array(
        'services' => get_custom_post_data( 'service' )
    ));
?>

<?php
    /**
     * Home page video section
     */
    get_template_part('template-parts/content/content', 'video') 
?>

<?php 
    /**
     * Home page testimonial section
     */
    get_template_part('template-parts/content/content', 'testimonial', array(
        'testimonials' => get_custom_post_data( 'testimonial', 4 )
    )) 
?>

<?php get_footer() ?>