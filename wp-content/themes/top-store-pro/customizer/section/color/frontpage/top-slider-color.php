<?php
// BG color
 $wp_customize->add_setting('top_store_top_slider_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_top_slider_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-top-slider-color',
        'settings'   => 'top_store_top_slider_bg_clr',
        'priority'   => 1,
    ) ) 
 );  

 $wp_customize->add_setting('top_store_top_slider_img_ovrly_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_top_slider_img_ovrly_clr', array(
        'label'      => __('Overlay Color', 'top-store-pro' ),
        'section'    => 'top-store-top-slider-color',
        'settings'   => 'top_store_top_slider_img_ovrly_clr',
        'priority'   => 1,
    ) ) 
 );
$wp_customize->add_setting('top_store_top_slider_hd_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_top_slider_hd_clr', array(
        'label'      => __('Heading Color', 'top-store-pro' ),
        'section'    => 'top-store-top-slider-color',
        'settings'   => 'top_store_top_slider_hd_clr',
        'priority' => 2,
    ) ) 
 );

$wp_customize->add_setting('top_store_top_slider_sbhd_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_top_slider_sbhd_clr', array(
        'label'      => __('Sub Heading Color', 'top-store-pro' ),
        'section'    => 'top-store-top-slider-color',
        'settings'   => 'top_store_top_slider_sbhd_clr',
        'priority'   => 3,
    ) ) 
 );

$wp_customize->add_setting('top_store_top_slider_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_top_slider_link_clr', array(
        'label'      => __('Link Color', 'top-store-pro' ),
        'section'    => 'top-store-top-slider-color',
        'settings'   => 'top_store_top_slider_link_clr',
        'priority'   => 4,
    ) ) 
 );
$wp_customize->add_setting('top_store_top_slider_link_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_top_slider_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-top-slider-color',
        'settings'   => 'top_store_top_slider_link_hvr_clr',
        'priority'   => 4,
    ) ) 
 );