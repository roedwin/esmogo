<?php
// BG color
 $wp_customize->add_setting('top_store_ftrd_prdct_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_ftrd_prdct_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-big-featured-color',
        'settings'   => 'top_store_ftrd_prdct_bg_clr',
        'priority'   => 1,
    ) ) 
 );  


$wp_customize->add_setting('top_store_ftrd_prdct_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_ftrd_prdct_tle_clr', array(
        'label'      => __('Heading Color', 'top-store-pro' ),
        'section'    => 'top-store-big-featured-color',
        'settings'   => 'top_store_ftrd_prdct_tle_clr',
        'priority' => 2,
    ) ) 
 );

$wp_customize->add_setting('top_store_ftrd_prdct_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_ftrd_prdct_link_clr', array(
        'label'      => __('Link Color', 'top-store-pro' ),
        'section'    => 'top-store-big-featured-color',
        'settings'   => 'top_store_ftrd_prdct_link_clr',
        'priority' => 2,
    ) ) 
 );

$wp_customize->add_setting('top_store_ftrd_prdct_link_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_ftrd_prdct_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-big-featured-color',
        'settings'   => 'top_store_ftrd_prdct_link_hvr_clr',
        'priority' => 2,
    ) ) 
 );