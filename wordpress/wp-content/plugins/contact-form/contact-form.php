<?php
/**
 * Plugin Name: Contact Form
 * Description: Adding a very simple contact form to your website.
 * Version: 1.0
 * Author: Name
 * Author URI: http://author.com
 * Text Domain: contact-form
 */


 defined ('ABSPATH') or die('Hey you can\'t acces this file.');

 class ContactForm{

    public function __construct(){
        add_action( 'init', array($this, 'create_custom_post_type'));
    
        add_action( 'wp_enqueue_scripts', array($this, 'load_assets') );

        add_shortcode( 'contact-form', array($this, 'load_shortcode') );
    
    }
    public function create_custom_post_type(){
        
        $args = array(

                'public' => true,
                'has_archive' => true,
                'supports' => array('title'),
                'exclude_from_search' => true,
                'publicity_queryable' => false,
                'capability' => 'manage_options',
                'labels' => array(
                    'name' => 'Contact Form',
                    'singular_name' => 'Contact Form Entry',

                ),

                'menu_icon' => 'dashicons-media-text'
            );

            register_post_type('contact-form', $args);
    }
    
    public function load_assets(){
        wp_enqueue_style( 'contact-form', plugin_dir_url( __FILE__ ) . 'css/contact-form.css', array(), 1, 'all');
        wp_enqueue_script( 'contact-form', plugin_dir_url( __FILE__ ) . 'js/contact-form.js', array('jquery'), 1, true );
    }
    

    public function load_shortcode()
    {?>
<div>


    <h1>Send us an email</h1>
    <p>Please fill the below form</p>
    <div class="contact-form">
        <form id="contact-form__form">

            <input name="name" type="text" placeholder="Name"><br><br>

            <input name="email" type="email" placeholder="Email"><br><br>

            <input name="phone" type="tel" placeholder="Phone"><br><br>

            <textarea name="message" placeholder="Type your message"></textarea><br><br>

            <button type="submit">Send message</button>

        </form>

    </div>
</div>

<?php 
        }

        
 }
 
 

 new ContactForm;