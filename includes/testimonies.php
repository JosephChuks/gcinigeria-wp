<?php
function register_testimonies_post_type()
    {
    $labels = array(
        'name' => __('Testimonies', 'gcinigeria-wp'),
        'singular_name' => __('Testimony', 'gcinigeria-wp'),
        'add_new' => __('Add New Testimony', 'gcinigeria-wp'),
        'add_new_item' => __('Add New Testimony', 'gcinigeria-wp'),
        'edit_item' => __('Edit Testimony', 'gcinigeria-wp'),
        'new_item' => __('New Testimony', 'gcinigeria-wp'),
        'view_item' => __('View Testimony', 'gcinigeria-wp'),
        'view_items' => __('View Testimonies', 'gcinigeria-wp'),
        'search_items' => __('Search Testimonies', 'gcinigeria-wp'),
        'not_found' => __('No testimonies found', 'gcinigeria-wp'),
        'not_found_in_trash' => __('No testimonies found in trash', 'gcinigeria-wp'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-testimonial',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('testimonies', $args);
    }

add_action('init', 'register_testimonies_post_type');

