<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

function register_theme_menus(){
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu')
        )
    );
}

add_action('init','register_theme_menus');

function newtheme_theme_scripts(){
    wp_enqueue_style('theme-style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','newtheme_theme_scripts');



function header_widget(){
    register_sidebar(array(
        'name' => 'Header Widget',
        'id' => 'header_widget',
        'description' => 'will displayed in header',
        'before_widget' => '<div class="header_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>'
    ));
}

add_action('widgets_init',"header_widget");

// function custom_move_title_above_featured_image($content) {
//     // Check if we are on a single post and it's our custom post type (replace 'product' with your actual custom post type slug)
//     if (is_single() && get_post_type() === 'product') {
//         $title = get_the_title(); // Get the post title
//         $rating = function_exists('the_ratings') ? the_ratings(null, null, false) : ''; // Get the post rating HTML (assuming WP-PostRatings plugin is used)

//         // Generate the modified content
//         $content = '<h2>' . $title . '</h2>'; // Place the title above the featured image
//         $content .= $rating; // Place the rating below the title and above the featured image
//         $content .= $content; // Place the original post content after the rating and featured image
//     }

//     return $content;
// }
// add_filter('the_content', 'custom_move_title_above_featured_image');

  

?>