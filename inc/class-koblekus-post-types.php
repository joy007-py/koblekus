<?php


if( !class_exists( 'Koble_Kus_Post_Types' ) ) {
    class Koble_Kus_Post_Types
    {
        public function __construct()
        {
            add_action( 'init', array( $this, 'register_post_type' ) );
            add_filter( 'enter_title_here', array( $this, 'custom_title' ), 11, 2);
        }

        /**
         * Change label according to post type
         * 
         * @param string $title
         * @param WP_Post $post
         * 
         * @return string
         */
        public function custom_title( $title, $post ) {
            
            $post_type_data = $this->get_post_types();

            $required_post_types = array_keys( $post_type_data );

            if( in_array( $post->post_type, $required_post_types ) ) {
                $title = $post_type_data[$post->post_type]['add_title'];
            }

            return $title;
        }
    
        /**
         * Register our custom post types
         */
        public function register_post_type() {
    
            foreach( $this->get_post_types() as $key => $post_type ) {
                register_post_type( $key, array(
                        'labels'             => $this->set_post_labels( $post_type ),
                        'public'             => false,
                        'publicly_queryable' => true,
                        'show_ui'            => true,
                        'show_in_menu'       => true,
                        'query_var'          => true,
                        'capability_type'    => 'post',
                        'has_archive'        => false,
                        'hierarchical'       => false,
                        'menu_position'      => null,
                        'supports'           => $post_type['supports']
                    ) 
                );
            }
        }
    
        /**
         * Custom post types
         * 
         * @return array
         */
        private function get_post_types() {
            return array(
                'service' => array(
                    'name' => 'Services',
                    'singular_name' => 'Service',
                    'add_title' => 'Enter service title',
                    'supports' => array( 'title', 'excerpt')
                ),
                'testimonial' => array(
                    'name' => 'Testimonials',
                    'singular_name' => 'Testimonial',
                    'add_title' => 'Enter Author name',
                    'supports' => array( 'title', 'excerpt')
                )
            );
        }
    
        /**
         * Set custom post type labes
         * 
         * @param array $arr
         * @return array
         */
        private function set_post_labels( $arr ) {
            
            return array(
                'name'                  => $arr['singular_name'],
                'singular_name'         =>  $arr['name'],
                'menu_name'             =>  $arr['singular_name'],
                'name_admin_bar'        => $arr['name'],
                'add_new'               => 'Add New',
                'add_new_item'          => $arr['name'],
                'new_item'              => $arr['name'],
                'edit_item'             => $arr['name'],
                'view_item'             =>$arr['name'],
                'all_items'             => $arr['singular_name'],
                'search_items'          => $arr['singular_name'],
                'parent_item_colon'     => $arr['singular_name'],
                'not_found'             =>$arr['singular_name'],
                'not_found_in_trash'    => $arr['singular_name'],
                'featured_image'        =>  $arr['name'],
                'set_featured_image'    =>'Set cover image',
                'remove_featured_image' => 'Remove cover image',
                'use_featured_image'    => 'Use as cover image',
                'archives'              =>  $arr['name'],
                'insert_into_item'      => $arr['name'],
                'uploaded_to_this_item' => $arr['name'],
                'filter_items_list'     => $arr['singular_name'],
                'items_list_navigation' =>$arr['singular_name'],
                'items_list'            => $arr['singular_name']
            );
        }
    }
    
    new Koble_Kus_Post_Types();
}

