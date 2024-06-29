<?php
function register_pastors_post_type()
    {
    $labels = array(
        'name' => __('Pastors', 'gcinigeria-wp'),
        'singular_name' => __('Pastor', 'gcinigeria-wp'),
        'add_new' => __('Add New Pastor', 'gcinigeria-wp'),
        'add_new_item' => __('Add New Pastor', 'gcinigeria-wp'),
        'edit_item' => __('Edit Pastor', 'gcinigeria-wp'),
        'new_item' => __('New Pastor', 'gcinigeria-wp'),
        'view_item' => __('View Pastor', 'gcinigeria-wp'),
        'view_items' => __('View Pastors', 'gcinigeria-wp'),
        'search_items' => __('Search Pastors', 'gcinigeria-wp'),
        'not_found' => __('No pastors found', 'gcinigeria-wp'),
        'not_found_in_trash' => __('No pastors found in trash', 'gcinigeria-wp'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-businessperson',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('pastors', $args);
    }

add_action('init', 'register_pastors_post_type');

