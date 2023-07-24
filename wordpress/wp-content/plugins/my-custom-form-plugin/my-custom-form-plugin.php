<?php
/**
 * Plugin Name: My Custom Form Plugin
 * Description: Creates a custom form in WordPress multiple tries.
 * Version: 1.0
 * Author: creator
 * Author URI: https://creator.com
 */

 function my_custom_form_html() {
    $html = '';

    // Check if the form was submitted
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);

        // Validate form data
        if (!empty($name) && !empty($email)) {
            // Process the form data
            // You can perform actions like saving data to the database, sending emails, etc.
            // Example: Saving to the WordPress database
            $data = array(
                'name' => $name,
                'email' => $email,
            );
            $success = wp_insert_post($data); // Insert a new post with form data
            if ($success) {
                $html .= '<p>Form submitted successfully!</p>';
            } else {
                $html .= '<p>There was an error processing the form.</p>';
            }
        } else {
            $html .= '<p>Please fill in all the required fields.</p>';
        }
    }

    // Display the HTML form
    $html .= '
        <form method="POST" action="' . esc_url($_SERVER['REQUEST_URI']) . '">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <input type="submit" name="submit" value="Submit">
        </form>
    ';

    return $html;
}

function my_custom_form_shortcode() {
    return my_custom_form_html();
}
add_shortcode('my_custom_form', 'my_custom_form_shortcode');
