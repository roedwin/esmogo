<?php
$wp_customize->add_setting('top_store_woo_single_title_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_woo_single_title_clr', array(
        'label'      => __('Title Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-single-color',
        'settings'   => 'top_store_woo_single_title_clr',
        'priority'   => 1,
    ) ) 
 );

$wp_customize->add_setting('top_store_woo_single_rating_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_woo_single_rating_clr', array(
        'label'      => __('Rating Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-single-color',
        'settings'   => 'top_store_woo_single_rating_clr',
        'priority'   => 2,
    ) ) 
 );

$wp_customize->add_setting('top_store_woo_single_price_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_woo_single_price_clr', array(
        'label'      => __('Price Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-single-color',
        'settings'   => 'top_store_woo_single_price_clr',
        'priority'   => 3,
    ) ) 
 );

$wp_customize->add_setting('top_store_woo_single_txt_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_woo_single_txt_clr', array(
        'label'      => __('Content Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-single-color',
        'settings'   => 'top_store_woo_single_txt_clr',
        'priority'   => 3,
    ) ) 
 );

 $wp_customize->add_setting('top_store_woo_single_bg_clr', array(
        'default'           => '#fff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_single_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-single-color',
        'settings'   => 'top_store_woo_single_bg_clr',
        'priority'   => 4,
    )
    ) );

$wp_customize->add_setting('top_store_woo_single_link_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_woo_single_link_clr', array(
        'label'      => __('Link Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-single-color',
        'settings'   => 'top_store_woo_single_link_clr',
        'priority'   => 5,
    ) ) 
 );
