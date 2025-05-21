<?php
/*
Plugin Name: SCM E-Commerce Engine
Description: Core plugin file for the SCM E-Commerce system.
Version: 0.3.6
 * GitHub Plugin URI: 3JsandaK/scm-ecommerce-engine
 * GitHub Branch: main
*/
defined('ABSPATH') or die('No script kiddies please!');

// Register the menu
add_action('admin_menu', function() {
    add_menu_page('SCM E-Commerce', 'SCM E-Commerce', 'manage_options', 'scm-ecommerce', function() {
        echo '<div class="wrap"><h1>SCM E-Commerce Admin</h1><p>This is the admin overview page placeholder.</p></div>';
    }, 'dashicons-store');
    add_submenu_page('scm-ecommerce', 'Products', 'Products', 'manage_options', 'edit.php?post_type=scm_product');
});

// Register Custom Post Type
add_action('init', function() {
    register_post_type('scm_product', array(
        'labels' => array(
            'name' => __('Products'),
            'singular_name' => __('Product')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    ));
});
