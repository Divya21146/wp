<?php

/**
 * @package navab
 */
namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingApi;
use \Inc\Api\Callbacks\AdminCallbacks;

 
 class Admin extends BaseController{

    public $settings;

    public $callbacks;

    public $pages = array();

    public $subpages = array();

    public function register(){

      // add_action('init', array($this, 'custom_post_type'));

      $this->settings = new SettingApi();

      $this->callbacks = new AdminCallbacks();

      $this->setPages();

      $this->setSubPages();     
      
      $this->setSettings();  
      $this->setSections();  
      $this->setFields();  

      $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addsubpages($this->subpages)->register();
    }

    public function setPages(){
      $this->pages = array(
        array(  
            'page_title' =>'Navab Plugin',
            'menu_title' =>'Navab', 
            'capability' =>'manage_options', 
            'menu_slug' =>'navab_plugin',
            'callback' =>array($this->callbacks, 'adminDashboard'),
            'icon_url' =>'dashicons-store',
            'position' =>110
          )
      );
    }

    public function setSubPages(){

      $this->subpages = array(
        array(
            'parent_slug' => 'navab_plugin',
            'page_title' => 'Custom Post Types',
            'menu_title' => 'CPT',
            'capability' => 'manage_options',
            'menu_slug' => 'navab_cpt',
            'callback' => function(){ echo '<h1>CPT Manager</h1>';}
        ),
        array(
          'parent_slug' => 'navab_plugin',
          'page_title' => 'Custom Taxonomy',
          'menu_title' => 'Taxonomies',
          'capability' => 'manage_options',
          'menu_slug' => 'navab_taxonomies',
          'callback' => function(){ echo '<h1>Taxonomies Manager</h1>';}
        ),
        array(
          'parent_slug' => 'navab_plugin',
          'page_title' => 'Custom Widgets',
          'menu_title' => 'Widgets',
          'capability' => 'manage_options',
          'menu_slug' => 'navab_widgets',
          'callback' => function(){ echo '<h1>Widgets Manager</h1>';}
      )
    );
    }

    public function setSettings(){
      $args = array(
        array(
        'option_group' => 'navab_options_group',
        'option_name' => 'text_example',
        'callback' => array( $this->callbacks, 'navabOptionsGroup')
      )
        );

        $this->settings->setSettings($args);
    }

    public function setSections(){
      $args = array(
        array(
        'id' => 'navab_admin_index',
        'title' => 'Settings',
        'callback' => array( $this->callbacks, 'navabAdminSection'),
        'page' => 'navab_plugin'
      )
        );

        $this->settings->setSections($args);
    }

    public function setFields(){
      $args = array(
        array(
        'id' => 'text_example',
        'title' => 'Text Example',
        'callback' => array( $this->callbacks, 'navabTextExample'),
        'page' => 'navab_plugin',
        'section' => 'navab_admin_index',
        'args' => array(
          'label_for' => 'text_example', 
          'class' => 'example-class'
        )
      )
        );

        $this->settings->setFields($args);
    }

  //   function custom_post_type(){ 
  //     register_post_type('books', ['public' => true, 'label' => 'books', 'supports' => array('title', 'editor', 'thumbnail')]);
  // }  
  
 }