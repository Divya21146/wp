<?php

/**
 * @package navab
 */
namespace Inc\Base;

use \Inc\Base\BaseController;
 
 class Enqueue extends BaseController{

    public function register(){
        add_action( 'admin_enqueue_scripts', array($this, 'enqueue') );

    }
    function enqueue(){
        //enqueue all our scripts
        wp_enqueue_style( 'mypluginstyle', $this->plugin_url .'assests/mystyle.css');
        wp_enqueue_script( 'mypluginscripts', $this->plugin_url .'assests/myscript.js');
        
    }
}
