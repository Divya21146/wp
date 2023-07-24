<?php
/*
Plugin Name: My Loader Widget
Description: Display a loader animation on the page when it starts loading.
Version: 1.0
Author: Your Name
*/

// Register the widget
function my_loader_widget_register() {
    register_widget('My_Loader_Widget');
}
add_action('widgets_init', 'my_loader_widget_register');

// Loader widget class
class My_Loader_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
            'my_loader_widget',
            'My Loader Widget',
            array('description' => 'Display a loader animation on page load.')
        );
    }

    // Front-end display of widget
    public function widget($args, $instance) {
        echo $args['before_widget'];
        ?>
        <div class="my-loader-widget">
            <div class="loader"></div>
        </div>
        <?php
        echo $args['after_widget'];
    }
}

// Enqueue widget CSS
function my_loader_widget_enqueue_scripts() {
    wp_enqueue_style('my-loader-widget-css', plugins_url('css/loader.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'my_loader_widget_enqueue_scripts');