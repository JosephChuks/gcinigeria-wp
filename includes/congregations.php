<?php
function register_congregations_post_type()
    {
    $labels = array(
        'name' => __('Congregations', 'gcinigeria-wp'),
        'singular_name' => __('Congregation', 'gcinigeria-wp'),
        'add_new' => __('Add New Congregation', 'gcinigeria-wp'),
        'add_new_item' => __('Add New Congregation', 'gcinigeria-wp'),
        'edit_item' => __('Edit Congregation', 'gcinigeria-wp'),
        'new_item' => __('New Congregation', 'gcinigeria-wp'),
        'view_item' => __('View Congregation', 'gcinigeria-wp'),
        'view_items' => __('View Congregations', 'gcinigeria-wp'),
        'search_items' => __('Search Congregations', 'gcinigeria-wp'),
        'not_found' => __('No congregations found', 'gcinigeria-wp'),
        'not_found_in_trash' => __('No congregations found in trash', 'gcinigeria-wp'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('congregations', $args);
    }

add_action('init', 'register_congregations_post_type');

