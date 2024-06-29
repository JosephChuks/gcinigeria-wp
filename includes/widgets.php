<?php
function featured_media()
    {
    register_sidebar(array(
        'name' => esc_html__('Featured media', 'gcnigeria-wp'),
        'id' => 'featured_media',
        'description' => esc_html__('Add Featured media', 'gcnigeria-wp'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    }
add_action('widgets_init', 'featured_media');

function footer_one()
    {
    register_sidebar(array(
        'name' => esc_html__('Footer one', 'gcnigeria-wp'),
        'id' => 'footer_one',
        'description' => esc_html__('Add Footer one', 'gcnigeria-wp'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    }
add_action('widgets_init', 'footer_one');

function footer_two_up()
    {
    register_sidebar(array(
        'name' => esc_html__('Footer two up', 'gcnigeria-wp'),
        'id' => 'footer_two_up',
        'description' => esc_html__('Add Footer two up', 'gcnigeria-wp'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer__header">',
        'after_title' => '</h3>',
    ));
    }
add_action('widgets_init', 'footer_two_up');

function footer_two_down()
    {
    register_sidebar(array(
        'name' => esc_html__('Footer two down', 'gcnigeria-wp'),
        'id' => 'footer_two_down',
        'description' => esc_html__('Add Footer two down', 'gcnigeria-wp'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer__header">',
        'after_title' => '</h3>',
    ));
    }
add_action('widgets_init', 'footer_two_down');

function footer_three_down()
    {
    register_sidebar(array(
        'name' => esc_html__('Footer three down', 'gcnigeria-wp'),
        'id' => 'footer_three_down',
        'description' => esc_html__('Add Footer three down', 'gcnigeria-wp'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer__header">',
        'after_title' => '</h3>',
    ));
    }
add_action('widgets_init', 'footer_three_down');

function footer_three_up()
    {
    register_sidebar(array(
        'name' => esc_html__('Footer three up', 'gcnigeria-wp'),
        'id' => 'footer_three_up',
        'description' => esc_html__('Add Footer three up', 'gcnigeria-wp'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer__header">',
        'after_title' => '</h3>',
    ));
    }
add_action('widgets_init', 'footer_three_up');