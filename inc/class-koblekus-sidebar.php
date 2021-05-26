<?php

if( !class_exists( 'Kolbe_Kus_Sidebar' ) ) {

    class Kolbe_Kus_Sidebar
    {
        public function __construct()
        {
            add_action( 'widgets_init', array( $this, 'register_sidebar' ) );
        }
        
        /**
         * Register our sidebars
         */
        public function register_sidebar() {
            
            $sidebars = apply_filters( 'kolbe_kus_sidebars', 
                array(
                    array(
                        'name'          => __( 'Footer Sidebar One', 'kolbekussoft' ),
                        'id'            => 'footer-sidebar-one',
                        'description'   => __( 'Footer left most widget', 'kolbekussoft' ),
                        'before_widget' => '<div id="%1$s" class="col-lg-4 col-md-6 footer-contact %2$s">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h4>',
                        'after_title'   => '</h4>',
                    ),
                    array(
                        'name'          => __( 'Footer Sidebar Two', 'kolbekussoft' ),
                        'id'            => 'footer-sidebar-two',
                        'description'   => __( 'Footer right most widget', 'kolbekussoft' ),
                        'before_widget' => '<div id="%1$s" class="col-lg-4 col-md-6 footer-links %2$s">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h4>',
                        'after_title'   => '</h4>',
                    )
                )
            );

            if( empty( $sidebars ) ) {
                return;
            }

            foreach( $sidebars as $sidebar ) {
                register_sidebar( $sidebar );
            }
        }
    }   

    new Kolbe_Kus_Sidebar();
}