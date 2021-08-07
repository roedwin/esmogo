<?php
// BG color
 $wp_customize->add_setting('top_store_rbn_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_rbn_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-ribbon-color',
        'settings'   => 'top_store_rbn_bg_clr',
        'priority'   => 1,
    ) ) 
 );  

$wp_customize->add_setting('top_store_rbn_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_rbn_tle_clr', array(
        'label'      => __('Heading Color', 'top-store-pro' ),
        'section'    => 'top-store-ribbon-color',
        'settings'   => 'top_store_rbn_tle_clr',
        'priority' => 2,
    ) ) 
 );
$wp_customize->add_setting('top_store_rbn_btn_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_rbn_btn_bg_clr', array(
        'label'      => __('Button Background Color', 'top-store-pro' ),
        'section'    => 'top-store-ribbon-color',
        'settings'   => 'top_store_rbn_btn_bg_clr',
        'priority'   => 4,
    ) ) 
 );  

$wp_customize->add_setting('top_store_rbn_btn_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_rbn_btn_txt_clr', array(
        'label'      => __('Text Color', 'top-store-pro' ),
        'section'    => 'top-store-ribbon-color',
        'settings'   => 'top_store_rbn_btn_txt_clr',
        'priority' => 4,
    ) ) 
 );