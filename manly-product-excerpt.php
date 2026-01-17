<?php
/**
 * Plugin Name: Manly Product Ebay Excerpt
 * Plugin URI: 
 * Description: Overrides the excerpt for WooCommerce products with eBay condition description from WP-Lister.
 * Version: 1.1
 * Author: Manly Electronics
 * Author URI: https://manlyelectronics.com.au
 * License: GPL2
 */

// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue the JavaScript and localize the meta value
add_action('wp_enqueue_scripts', 'manly_product_excerpt_enqueue_meta_script');

function manly_product_excerpt_enqueue_meta_script() {
    if (is_product()) { // Only load on single product pages
        global $post;
        $meta_value = get_post_meta($post->ID, '_ebay_condition_description', true);
        
        wp_enqueue_script(
            'manly-product-excerpt-js',
            plugins_url('manly-product-excerpt.js', __FILE__),
            array('jquery'),
            '1.2',
            true
        );

        // Localize the meta value for use in JavaScript
        wp_localize_script(
            'manly-product-excerpt-js',
            'manlyProductExcerptData',
            array('metaValue' => $meta_value)
        );
    }
}
