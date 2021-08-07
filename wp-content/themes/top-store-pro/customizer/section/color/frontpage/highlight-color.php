<?php
// BG color
 $wp_customize->add_setting('top_store_hglght_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_hglght_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-highlight-color',
        'settings'   => 'top_store_hglght_bg_clr',
        'priority'   => 1,
    ) ) 
 );  

$wp_customize->add_setting('top_store_hglght_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_hglght_tle_clr', array(
        'label'      => __('Heading Color', 'top-store-pro' ),
        'section'    => 'top-store-highlight-color',
        'settings'   => 'top_store_hglght_tle_clr',
        'priority' => 2,
    ) ) 
 );

$wp_customize->add_setting('top_store_hglght_desc_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_hglght_desc_clr', array(
        'label'      => __('Sub Heading Color', 'top-store-pro' ),
        'section'    => 'top-store-highlight-color',
        'settings'   => 'top_store_hglght_desc_clr',
        'priority' => 3,
    ) ) 
 );

$wp_customize->add_setting('top_store_hglght_icon_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_hglght_icon_clr', array(
        'label'      => __('Icon Color', 'top-store-pro' ),
        'section'    => 'top-store-highlight-color',
        'settings'   => 'top_store_hglght_icon_clr',
        'priority' => 4,
    ) ) 
 );