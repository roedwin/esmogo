<?php 
$wp_customize->add_setting('top_store_mobile_header_clr', array(
        'default'        => '#fff',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_mobile_header_clr', array(
        'label'      => __('Mobile Header Color', 'top-store-pro' ),
        'section'    => 'top-store-mobile-pan-clr',
        'settings'   => 'top_store_mobile_header_clr',
        'priority'   => 1
    ) ) 
 );

$wp_customize->add_setting('top_store_mobile_hamburger_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_mobile_hamburger_clr', array(
        'label'      => __('Mobile Hamburger Icon & Text Color', 'top-store-pro' ),
        'section'    => 'top-store-mobile-pan-clr',
        'settings'   => 'top_store_mobile_hamburger_clr',
        'priority'   => 1
    ) ) 
 );
// BG color
// background divider
$wp_customize->add_setting('top_store_divide_mobile_pan_hdr_bg', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_divide_mobile_pan_hdr_bg',
            array(
        'section'     => 'top-store-mobile-pan-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Background','top-store-pro' ),
        'priority'    => 1,
)));
 $wp_customize->add_setting('top_store_mobile_pan_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_mobile_pan_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-mobile-pan-clr',
        'settings'   => 'top_store_mobile_pan_bg_clr',
        'priority'   => 2,
    ) ) 
 );  

/*********************/
// Menu Color
/*********************/
//divider
$wp_customize->add_setting('top_store_mobile_pan_menu', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_mobile_pan_menu',
            array(
        'section'     => 'top-store-mobile-pan-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Menu Color','top-store-pro' ),
        'priority'    => 3,
)));
$wp_customize->add_setting('top_store_mobile_pan_menu_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_mobile_pan_menu_link_clr', array(
        'label'      => __('Link Color', 'top-store-pro' ),
        'section'    => 'top-store-mobile-pan-clr',
        'settings'   => 'top_store_mobile_pan_menu_link_clr',
        'priority'   => 4,
    ) ) 
 );

// link hover color
$wp_customize->add_setting('top_store_mobile_pan_menu_link_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_mobile_pan_menu_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-mobile-pan-clr',
        'settings'   => 'top_store_mobile_pan_menu_link_hvr_clr',
        'priority'   => 5,
    ) ) 
 );

//close icon divider
$wp_customize->add_setting('top_store_mobile_pan_menu_close', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_mobile_pan_menu_close',
            array(
        'section'     => 'top-store-mobile-pan-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Close Button','top-store-pro' ),
        'priority'    => 6,
)));

$wp_customize->add_setting('top_store_mobile_pan_close_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_mobile_pan_close_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-mobile-pan-clr',
        'settings'   => 'top_store_mobile_pan_close_bg_clr',
        'priority'   => 7,
    ) ) 
 );  

$wp_customize->add_setting('top_store_mobile_pan_menu_close_icon_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_mobile_pan_menu_close_icon_clr', array(
        'label'      => __('Icon Color', 'top-store-pro' ),
        'section'    => 'top-store-mobile-pan-clr',
        'settings'   => 'top_store_mobile_pan_menu_close_icon_clr',
        'priority'   => 8,
    ) ) 
 );