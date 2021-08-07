<?php 
// BG color
 $wp_customize->add_setting('top_store_custom_two_bg_color', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_custom_two_bg_color', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-custom-two-color',
        'settings'   => 'top_store_custom_two_bg_color',
        'priority'   => 1,
    ) ) 
 );  
$wp_customize->add_setting('top_store_custom_two_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_custom_two_tle_clr', array(
        'label'      => __('Heading Color', 'top-store-pro' ),
        'section'    => 'top-store-custom-two-color',
        'settings'   => 'top_store_custom_two_tle_clr',
        'priority'   => 2,
    ) ) 
 );