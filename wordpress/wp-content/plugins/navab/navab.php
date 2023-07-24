<?php

/** 

*@package navab
 * Plugin Name: Navab
 * Plugin URI: http://navab.com/plugin
 * Description: This plugin is for a trial.
 * Version: 1.0
 * Author: Navabrind
 * Author URI: https://navabrindsol.com/
 */



// If this file is called directly, abort!!!
defined ('ABSPATH') or die('Hey you can\'t acces this file.');

//Require once the Composer Autoload
if (file_exists(dirname(__FILE__).'/vendor/autoload.php')) {
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

use Inc\Base\Activate;
use Inc\Base\Deactivate;


//the code that run during plugin activation
function activate_navab_plugin(){
    Activate::activate();
}

//the code that run during plugin deactivation
function deactivate_navab_plugin(){
    Deactivate::deactivate();
}

register_activation_hook( __FILE__, 'activate_navab_plugin');
register_deactivation_hook( __FILE__, 'deactivate_navab_plugin');

if (class_exists('Inc\\Init')){
    Inc\Init::register_services();
}
