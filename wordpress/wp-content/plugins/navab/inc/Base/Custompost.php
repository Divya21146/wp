<?php
/**
 * @package navab
 */
namespace Inc\Base;

class Custompost{

    public $plugin;

    function custom_post(){

        $this->plugin=plugin_basename( __FILE__ );
                
        add_action('init', array($this, 'custom_post_type'));
    }
        
}