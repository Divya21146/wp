<?php

/**
 * Trigger this file on Plugin uninstall
 * 
 * @package navab
 */

 if(! defined('WP_UNINSTALL_PLUGIN')){
    die;
 }

 //clear database that stored data

 $books = get_posts( array('post_type' => 'books', 'numberposts' => -1) );

 foreach ($books as $book) {
    wp_delete_post($book->ID, true);
 }


//Access the db via sql
// global $wbdb;
// $wbdb->query("DELETE FROM wp_posts WHERE post_type = 'books'");
// $wbdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)");
// $wbdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)");
