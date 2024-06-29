<?php
//Logo
function theme_customizer_settings($wp_customize)
    {
    // Logo Section
    $wp_customize->add_section('theme_logo_section', array(
        'title' => esc_html__('Header Logo', 'gcinigeria'),
        'priority' => 20,
    ));

    $wp_customize->add_setting('theme_logo', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'theme_logo', array(
        'label' => esc_html__('Upload Header Logo', 'gcinigeria'),
        'section' => 'theme_logo_section',
        'settings' => 'theme_logo',
        'flex_width' => true,
        'flex_height' => true,
    )));


    // Footer Logo Section
    $wp_customize->add_section('footer_logo_section', array(
        'title' => esc_html__('Footer Logo', 'gcinigeria'),
        'priority' => 21,
    ));

    $wp_customize->add_setting('footer_logo', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'footer_logo', array(
        'label' => esc_html__('Upload Footer Logo', 'gcinigeria'),
        'section' => 'footer_logo_section',
        'settings' => 'footer_logo',
        'flex_width' => true,
        'flex_height' => true,
    )));


    // Donate Button
    $wp_customize->add_section('online_giving_section', array(
        'title' => __('Online Giving Button', 'gcinigeria-wp'),
        'priority' => 22,
    ));
    $wp_customize->add_setting('online_giving_enabled', array(
        'default' => false,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    $wp_customize->add_control('online_giving_enabled', array(
        'type' => 'checkbox',
        'label' => __('Enable Online Giving Button', 'gcinigeria-wp'),
        'section' => 'online_giving_section',
    ));
    $wp_customize->add_setting('online_giving_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('online_giving_link', array(
        'type' => 'text',
        'label' => __('Online Giving Button Link', 'gcinigeria-wp'),
        'section' => 'online_giving_section',
    ));

    // Add section for the content background image
    $wp_customize->add_section('background_image_section', array(
        'title' => __('Content Header Image', 'gcinigeria-wp'),
        'priority' => 23,
    ));

    // Add setting for the background image
    $wp_customize->add_setting('background_image_setting', array(
        'default' => get_template_directory_uri() . '/assets/img/banner1.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Add control for the background image setting
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_image_control', array(
        'label' => __('Upload Content Header Image', 'gcinigeria-wp'),
        'section' => 'background_image_section',
        'settings' => 'background_image_setting',
    )));



    // Slider Settings
    for ($i = 1; $i <= 3; $i++) {
        $section_priority = 24 + $i;

        // Section for Slide Settings
        $wp_customize->add_section('slider_settings_' . $i, array(
            'title' => __('Slide ' . $i . ' Settings', 'gcinigeria-wp'),
            'priority' => $section_priority,
        ));

        // Background Image Setting
        $wp_customize->add_setting('slider_bg_image_' . $i, array(
            'default' => get_template_directory_uri() . '/img/banner' . $i . '.jpg',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slider_bg_image_' . $i, array(
            'label' => __('Background Image', 'gcinigeria-wp'),
            'section' => 'slider_settings_' . $i,
            'settings' => 'slider_bg_image_' . $i,
        )));

        // H1 Text Setting
        $wp_customize->add_setting('slider_h1_text_' . $i, array(
            'default' => 'Slide ' . $i,
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('slider_h1_text_' . $i, array(
            'label' => __('Title', 'gcinigeria-wp'),
            'section' => 'slider_settings_' . $i,
            'type' => 'text',
        ));

        // P Text Setting
        $wp_customize->add_setting('slider_p_text_' . $i, array(
            'default' => 'Description for Slide ' . $i,
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('slider_p_text_' . $i, array(
            'label' => __('Description', 'gcinigeria-wp'),
            'section' => 'slider_settings_' . $i,
            'type' => 'textarea',
        ));

        // Button 1 Text Setting
        $wp_customize->add_setting('slider_button_1_text_' . $i, array(
            'default' => 'Learn More',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('slider_button_1_text_' . $i, array(
            'label' => __('Button 1 Text', 'gcinigeria-wp'),
            'section' => 'slider_settings_' . $i,
            'type' => 'text',
        ));

        // Button 2 Text Setting
        $wp_customize->add_setting('slider_button_2_text_' . $i, array(
            'default' => 'Become a member',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('slider_button_2_text_' . $i, array(
            'label' => __('Button 2 Text', 'gcinigeria-wp'),
            'section' => 'slider_settings_' . $i,
            'type' => 'text',
        ));

        // Button 1 Link Setting
        $wp_customize->add_setting('slider_button_1_link_' . $i, array(
            'default' => '#', // Default link is '#'
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control('slider_button_1_link_' . $i, array(
            'label' => __('Button 1 Link', 'gcinigeria-wp'),
            'section' => 'slider_settings_' . $i,
            'type' => 'url',
        ));

        // Button 2 Link Setting
        $wp_customize->add_setting('slider_button_2_link_' . $i, array(
            'default' => '#', // Default link is '#'
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control('slider_button_2_link_' . $i, array(
            'label' => __('Button 2 Link', 'gcinigeria-wp'),
            'section' => 'slider_settings_' . $i,
            'type' => 'url',
        ));
        }


    }

add_action('customize_register', 'theme_customizer_settings');