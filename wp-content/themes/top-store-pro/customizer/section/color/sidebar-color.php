<?php
// background divider
$wp_customize->add_setting('top_store_divide_sidebar_bg', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_divide_sidebar_bg',
            array(
        'section'     => 'top-store-sidebar-color',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Background','top-store-pro' ),
        'priority'    => 1,
)));
// BG color
 $wp_customize->add_setting('top_store_sidebar_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_sidebar_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-sidebar-color',
        'settings'   => 'top_store_sidebar_bg_clr',
        'priority'   => 2,
    ) ) 
 ); 

$wp_customize->add_setting('top_store_sidebar_wdgt_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_sidebar_wdgt_tle_clr', array(
        'label'      => __('Widget Title Color', 'top-store-pro' ),
        'section'    => 'top-store-sidebar-color',
        'settings'   => 'top_store_sidebar_wdgt_tle_clr',
        'priority' => 3,
    ) ) 
 );

$wp_customize->add_setting('top_store_sidebar_wdgt_text_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_sidebar_wdgt_text_clr', array(
        'label'      => __('Text Color', 'top-store-pro' ),
        'section'    => 'top-store-sidebar-color',
        'settings'   => 'top_store_sidebar_wdgt_text_clr',
        'priority' => 4,
    ) ) 
 );

$wp_customize->add_setting('top_store_sidebar_wdgt_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_sidebar_wdgt_link_clr', array(
        'label'      => __('Link Color', 'top-store-pro' ),
        'section'    => 'top-store-sidebar-color',
        'settings'   => 'top_store_sidebar_wdgt_link_clr',
        'priority' => 5,
    ) ) 
 );
$wp_customize->add_setting('top_store_sidebar_wdgt_link_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_sidebar_wdgt_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-sidebar-color',
        'settings'   => 'top_store_sidebar_wdgt_link_hvr_clr',
        'priority' => 6,
    ) ) 
 );
/****************/
//doc link
/****************/
$wp_customize->add_setting('top_store_sidebar_clr_doc_learn_more', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_sidebar_clr_doc_learn_more',
            array(
        'section'     => 'top-store-sidebar-color',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/top-store-pro/#primary-color',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));