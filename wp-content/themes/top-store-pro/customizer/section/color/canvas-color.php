<?php 

$wp_customize->add_setting('top_store_canvas_icon_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_canvas_icon_clr', array(
        'label'      => __('Icon Color', 'top-store-pro' ),
        'section'    => 'top-store-canvas-pan-clr',
        'settings'   => 'top_store_canvas_icon_clr',
        'priority'   => 1,
    ) ) 
 );
// BG color
// background divider
$wp_customize->add_setting('top_store_divide_canvas_pan_bg', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_divide_canvas_pan_bg',
            array(
        'section'     => 'top-store-canvas-pan-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Background','top-store-pro' ),
        'priority'    => 2,
)));
 $wp_customize->add_setting('top_store_canvas_pan_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_canvas_pan_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-canvas-pan-clr',
        'settings'   => 'top_store_canvas_pan_bg_clr',
        'priority'   => 2,
    ) ) 
 );  
/*********************/
//Content Color
/*********************/
//divider
$wp_customize->add_setting('top_store_canvas_pan_content', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_canvas_pan_content',
            array(
        'section'     => 'top-store-canvas-pan-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Content Color','top-store-pro' ),
        'priority'    => 3,
)));

$wp_customize->add_setting('top_store_canvas_title_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_canvas_title_clr', array(
        'label'      => __('Title Color', 'top-store-pro' ),
        'section'    => 'top-store-canvas-pan-clr',
        'settings'   => 'top_store_canvas_title_clr',
        'priority'   => 4,
    ) ) 
 );

$wp_customize->add_setting('top_store_canvas_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_canvas_link_clr', array(
        'label'      => __('Link Color', 'top-store-pro' ),
        'section'    => 'top-store-canvas-pan-clr',
        'settings'   => 'top_store_canvas_link_clr',
        'priority'   => 4,
    ) ) 
 );

$wp_customize->add_setting('top_store_canvas_link_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_canvas_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-canvas-pan-clr',
        'settings'   => 'top_store_canvas_link_hvr_clr',
        'priority'   => 4,
    ) ) 
 );
$wp_customize->add_setting('top_store_canvas_content_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_canvas_content_clr', array(
        'label'      => __('Text Color', 'top-store-pro' ),
        'section'    => 'top-store-canvas-pan-clr',
        'settings'   => 'top_store_canvas_content_clr',
        'priority'   => 4,
    ) ) 
 );
//close icon divider
$wp_customize->add_setting('top_store_canvas_close', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_canvas_close',
            array(
        'section'     => 'top-store-canvas-pan-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Close Button','top-store-pro' ),
        'priority'    => 6,
)));

$wp_customize->add_setting('top_store_canvas_close_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_canvas_close_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-canvas-pan-clr',
        'settings'   => 'top_store_canvas_close_bg_clr',
        'priority'   => 7,
    ) ) 
 );  

$wp_customize->add_setting('top_store_canvas_close_icon_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_canvas_close_icon_clr', array(
        'label'      => __('Icon Color', 'top-store-pro' ),
        'section'    => 'top-store-canvas-pan-clr',
        'settings'   => 'top_store_canvas_close_icon_clr',
        'priority'   => 8,
    ) ) 
 );