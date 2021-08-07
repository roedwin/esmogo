<?php
$wp_customize->add_setting('top_store_product_slide_hd_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_product_slide_hd_clr', array(
        'label'      => __('Heading Color', 'top-store-pro' ),
        'section'    => 'top-store-product-list-slide-color',
        'settings'   => 'top_store_product_slide_hd_clr',
        'priority' => 1,
    ) ) 
 );
// BG color
 $wp_customize->add_setting('top_store_product_slide_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_product_slide_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-product-list-slide-color',
        'settings'   => 'top_store_product_slide_bg_clr',
        'priority'   => 2,
    ) ) 
 );