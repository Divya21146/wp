<?php
/*
Plugin Name: Fireworks Widget
Description: Display a button to trigger a fireworks animation.
Version: 1.0
Author: Your Name
*/

// Register the widget
function fireworks_widget_register() {
    register_widget('Fireworks_Widget');
}
add_action('widgets_init', 'fireworks_widget_register');

// Fireworks widget class
class Fireworks_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'fireworks_widget',
            'Fireworks Widget',
            array('description' => 'Display a button to trigger fireworks animation.')
        );
    }

    // Front-end display of widget
    public function widget($args, $instance) {
        echo $args['before_widget'];
        ?>
        <div class="fireworks-widget">
            <button id="fireworks-button">Start Fireworks</button>
            <div class="fireworks"></div>
        </div>
        <?php
        echo $args['after_widget'];
    }
}


