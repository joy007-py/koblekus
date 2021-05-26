<?php


if( !class_exists( 'Koble_Kus_RegisterAssets ') ) {
    
    class Koble_Kus_RegisterAssets 
    {
        public function __construct() {
            add_action( 'wp_enqueue_scripts', array( $this, 'registerCss' ) );
            add_action( 'wp_enqueue_scripts', array( $this, 'registerJs' ) );
        }
    
        public function registerJs() {
            foreach( $this->getJsFiles() as $js ) {
                wp_enqueue_script( 
                    $this->generateFileName( $js ) , 
                    $js,
                    [],
                    false,
                    true
                );
            }
        }
    
        public function registerCss() {
            foreach( $this->getCssFiles() as $css ) {
                wp_enqueue_style( $this->generateFileName( $css ) , $css );
            }
        }
        
        /**
         * Get file name
         * 
         * @param string $file_path
         * @return string
         */
        public function generateFileName( $file_path ) {
            return pathinfo( $file_path,  PATHINFO_FILENAME );
        }
    
        /**
         * Get theme css files
         * 
         * @return array
         */
        public function getCssFiles() {
    
            return apply_filters( 
                'kolbekus_theme_css_file', 
                    array(
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/bootstrap/css/bootstrap.min.css',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/icofont/icofont.min.css',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/boxicons/css/boxicons.min.css',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/remixicon/remixicon.css',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/venobox/venobox.css',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/aos/aos.css',
                    KOLBEKUSSOFT_THEME_URI . '/assets/css/style.css'
                ) 
            );
        }

        /**
         * Get theme js files
         * 
         * @return array
         */
        public function getJsFiles() {

            return apply_filters(
                'kolbekus_theme_js_file',
                array(
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/jquery/jquery.min.js',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/jquery.easing/jquery.easing.min.js',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/php-email-form/validate.js',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/waypoints/jquery.waypoints.min.js',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/counterup/counterup.min.js',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/venobox/venobox.min.js',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/owl.carousel/owl.carousel.min.js',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/isotope-layout/isotope.pkgd.min.js',
                    KOLBEKUSSOFT_THEME_URI . '/assets/vendor/aos/aos.js',
                    KOLBEKUSSOFT_THEME_URI . '/assets/js/main.js'
                )
            );
        }
    }
    
    new Koble_Kus_RegisterAssets();
}

