<?php 
/******************/
// Sticky Header
/******************/
// background divider
$wp_customize->add_setting('top_store_divide_sticky_hdr_bg', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_divide_sticky_hdr_bg',
            array(
        'section'     => 'top-store-sticky-header-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Background','top-store-pro' ),
        'priority'    => 1,
)));
// BG color
 $wp_customize->add_setting('top_store_sticky_hdr_bg_clr', array(
        'default'           => '#fff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_sticky_hdr_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-sticky-header-clr',
        'settings'   => 'top_store_sticky_hdr_bg_clr',
        'priority'   => 2,
    ) ) 
 );  


    $wp_customize->add_setting( 'top_store_pro_sticky_header_background_image_url', array(
        'sanitize_callback' => 'esc_url',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_sticky_header_background_image_id', array(
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_sticky_header_background_repeat', array(
        'default' => 'no-repeat',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_sticky_header_background_size', array(
        'default' => 'auto',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_sticky_header_background_attach', array(
        'default' => 'scroll',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_sticky_header_background_position', array(
        'default' => 'center center',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    // Registers example_background control
    $wp_customize->add_control(
        new Top_Store_Customize_Custom_Background_Control(
            $wp_customize,
            'top_store_pro_sticky_header_background_image',
            array(
                'label'     => esc_html__( 'Background Image', 'top-store-pro' ),
                'section'   => 'top-store-sticky-header-clr',
                'priority'   => 2,
                'settings'    => array(
                    'image_url' => 'top_store_pro_sticky_header_background_image_url',
                    'image_id' => 'top_store_pro_sticky_header_background_image_id',
                    'repeat' => 'top_store_pro_sticky_header_background_repeat', // Use false to hide the field
                    'size' => 'top_store_pro_sticky_header_background_size',
                    'position' => 'top_store_pro_sticky_header_background_position',
                    'attach' => 'top_store_pro_sticky_header_background_attach'
                )
            )
        )
    );

    //divider
$wp_customize->add_setting('top_store_pro_sticky_header_sitetitle', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_pro_sticky_header_sitetitle',
            array(
        'section'     => 'top-store-sticky-header-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Site Title','top-store-pro' ),
        'priority'    => 3,
)));

// title color
$wp_customize->add_setting('top_store_pro_sticky_header_sitetitle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_sticky_header_sitetitle_clr', array(
        'label'      => __('Title Color', 'top-store-pro' ),
        'section'    => 'top-store-sticky-header-clr',
        'settings'   => 'top_store_pro_sticky_header_sitetitle_clr',
        'priority' => 4,
    ) ) 
 );
// title hover color
$wp_customize->add_setting('top_store_pro_sticky_header_sitetitle_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_sticky_header_sitetitle_hvr_clr', array(
        'label'      => __('Title Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-sticky-header-clr',
        'settings'   => 'top_store_pro_sticky_header_sitetitle_hvr_clr',
        'priority' => 5,
    ) ) 
 );

// tagline color
$wp_customize->add_setting('top_store_pro_sticky_header_sitetagline_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_sticky_header_sitetagline_clr', array(
        'label'      => __('Tagline Color', 'top-store-pro' ),
        'section'    => 'top-store-sticky-header-clr',
        'settings'   => 'top_store_pro_sticky_header_sitetagline_clr',
        'priority' =>6,
    ) ) 
 );
/*********************/
// Menu Color
/*********************/
//divider
$wp_customize->add_setting('top_store_pro_sticky_header_menu_color', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_pro_sticky_header_menu_color',
            array(
        'section'     => 'top-store-sticky-header-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Menu Color','top-store-pro' ),
        'priority'    => 7,
)));
$wp_customize->add_setting('top_store_pro_sticky_header_menu_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_sticky_header_menu_link_clr', array(
        'label'      => __('Link Color', 'top-store-pro' ),
        'section'    => 'top-store-sticky-header-clr',
        'settings'   => 'top_store_pro_sticky_header_menu_link_clr',
        'priority'   => 8,
    ) ) 
 );

// link hover color
$wp_customize->add_setting('top_store_pro_sticky_header_menu_link_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_sticky_header_menu_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-sticky-header-clr',
        'settings'   => 'top_store_pro_sticky_header_menu_link_hvr_clr',
        'priority'   => 9,
    ) ) 
 );
/********************/
//Main Header SubMenu
/********************/
//divider
$wp_customize->add_setting('top_store_pro_sticky_header_sbmenu_color', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_pro_sticky_header_sbmenu_color',
            array(
        'section'     => 'top-store-sticky-header-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Sub Menu Color','top-store-pro' ),
        'priority'    => 10,
)));
// background color
$wp_customize->add_setting('top_store_pro_sticky_header_sbmenu_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_pro_sticky_header_sbmenu_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-sticky-header-clr',
        'settings'   => 'top_store_pro_sticky_header_sbmenu_bg_clr',
        'priority'   => 11,
    ) ) 
 );

// link color
$wp_customize->add_setting('top_store_pro_sticky_header_sbmenu_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_sticky_header_sbmenu_link_clr', array(
        'label'      => __('Link Color', 'top-store-pro' ),
        'section'    => 'top-store-sticky-header-clr',
        'settings'   => 'top_store_pro_sticky_header_sbmenu_link_clr',
        'priority'   => 12,
    ) ) 
 );
// link hover color
$wp_customize->add_setting('top_store_pro_sticky_header_sbmenu_link_hvr_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_sticky_header_sbmenu_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-sticky-header-clr',
        'settings'   => 'top_store_pro_sticky_header_sbmenu_link_hvr_clr',
        'priority'   => 13,
    ) ) 
 );
// link/text bg hvr color
$wp_customize->add_setting('top_store_pro_sticky_header_sbmenu_link_hvr_bg_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_pro_sticky_header_sbmenu_link_hvr_bg_clr', array(
        'label'      => __('Link Background Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-sticky-header-clr',
        'settings'   => 'top_store_pro_sticky_header_sbmenu_link_hvr_bg_clr',
        'priority'   => 14,
    ) ) 
 );

//divider
$wp_customize->add_setting('top_store_pro_sticky_header_icon_color', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_pro_sticky_header_icon_color',
            array(
        'section'     => 'top-store-sticky-header-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Sticky Icon Color','top-store-pro' ),
        'priority'    => 15,
)));
// ICON BG color
//  $wp_customize->add_setting('top_store_sticky_hdr_icon_bg_clr', array(
//         'default'           => '',
//         'capability'        => 'edit_theme_options',
//         'sanitize_callback' => 'top_store_sanitize_color',
//         'transport'         => 'postMessage',
//     ));
// $wp_customize->add_control( 
//     new Top_Store_Customizer_Color_Control($wp_customize,'top_store_sticky_hdr_icon_bg_clr', array(
//         'label'      => __('Icon Background Color', 'top-store-pro' ),
//         'section'    => 'top-store-sticky-header-clr',
//         'settings'   => 'top_store_sticky_hdr_icon_bg_clr',
//         'priority'   => 16,
//     ) ) 
//  );
// icon color
$wp_customize->add_setting('top_store_sticky_icon_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_sticky_icon_clr', array(
        'label'      => __('Icon', 'top-store-pro' ),
        'section'    => 'top-store-sticky-header-clr',
        'settings'   => 'top_store_sticky_icon_clr',
        'priority'   => 17,
    ) ) 
 );