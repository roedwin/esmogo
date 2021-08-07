<?php
// BG color
 $wp_customize->add_setting('top_store_banner_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_banner_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-banner-color',
        'settings'   => 'top_store_banner_bg_clr',
        'priority'   => 1,
    ) ) 
 );  