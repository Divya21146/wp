<?php

/**
 * @package navab
 */
namespace Inc\Api\Callbacks;

use \Inc\Base\BaseController;

class AdminCallbacks extends BaseController{
   public function adminDashboard(){
    
    return require_once("$this->plugin_path/templates/admin.php");

   } 

   public function navabOptionsGroup($input){
    return $input;
   }

   public function navabAdminSection(){
    echo "hello! It's a section";
   }

   public function navabTextExample(){
    $value = esc_attr( get_option('text_example'));
    echo '<input type="text" class="regular-text" name="text_example" value="text_example" placeholder="Write something here!">';
   }
}