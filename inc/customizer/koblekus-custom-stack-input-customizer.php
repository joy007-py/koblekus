<?php

require_once ABSPATH . WPINC . '/class-wp-customize-control.php';

class Koble_Kus_Custom_Stack_Input_Customizer extends WP_Customize_Control {

    public $type = 'stacked_input';

    public function __construct( $manager, $id, $args = [] )
    {
        parent::__construct( $manager, $id, $args );
    }

    public function enqueue()
    {
        wp_enqueue_style(
            'hero-section-main-css',
            get_template_directory_uri() . '/inc/customizer/css/hero-section-main-css.css'
        );
    }

    public function render_content() {
        ?>
            <div>
                <input type="text" 
                id="<?php echo htmlspecialchars("_customize-input-{$this->id}");?>"
                value="<?php echo $this->value() ?>"
                <?php $this->input_attrs();?>
                <?php $this->link();?>
                >
                <div class="hero-content-col">
                    <h4>Column one</h4>
                    <label>Title</label>
                    <input type="text" name="" value="">
                    <label>Description</label><br>
                    <textarea name="" rows="5" column="5"></textarea>
                </div>
            </div>
        <?php
    }

}