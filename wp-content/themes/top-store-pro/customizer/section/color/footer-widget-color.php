<?php

// background divider
$wp_customize->add_setting('top_store_divide_footer_bg', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_divide_footer_bg',
         array(
        'section'     => 'top-store-footer-widget-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Background','top-store-pro' ),
        'priority'    => 1,
)));
// BG color
 $wp_customize->add_setting('top_store_footer_wgt_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_footer_wgt_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-footer-widget-clr',
        'settings'   => 'top_store_footer_wgt_bg_clr',
        'priority'   => 2,
    ) ) 
 ); 
   // Registers top_store_footer background settings
    $wp_customize->add_setting( 'top_store_footer_wgt_background_image_url', array(
        'sanitize_callback' => 'esc_url',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_footer_wgt_background_image_id', array(
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_footer_wgt_background_repeat', array(
        'default' => 'no-repeat',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_footer_wgt_background_size', array(
        'default' => 'auto',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_footer_wgt_background_attach', array(
        'default' => 'scroll',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_footer_wgt_background_position', array(
        'default' => 'center center',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );
    // Registers example_background control
    $wp_customize->add_control(
        new Top_Store_Customize_Custom_Background_Control(
            $wp_customize,
            'top_store_footer_wgt_background_image',
            array(
                'label'     => esc_html__( 'Background Image', 'top-store-pro' ),
                'section'   => 'top-store-footer-widget-clr',
                'priority'   => 2,
                'settings'    => array(
                    'image_url' => 'top_store_footer_wgt_background_image_url',
                    'image_id' => 'top_store_footer_wgt_background_image_id',
                    'repeat' => 'top_store_footer_wgt_background_repeat', // Use false to hide the field
                    'size' => 'top_store_footer_wgt_background_size',
                    'position' => 'top_store_footer_wgt_background_position',
                    'attach' => 'top_store_footer_wgt_background_attach'
                )
            )
        )
    );
    // content divider
$wp_customize->add_setting('top_store_divide_footer_cnt', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_divide_footer_cnt',
         array(
        'section'     => 'top-store-footer-widget-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Content','top-store-pro' ),
        'priority'    => 3,
)));
$wp_customize->add_setting('top_store_footer_wgt_tle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_footer_wgt_tle_clr', array(
        'label'      => __('Widget Title Color', 'top-store-pro' ),
        'section'    => 'top-store-footer-widget-clr',
        'settings'   => 'top_store_footer_wgt_tle_clr',
        'priority' => 3,
    ) ) 
 );

$wp_customize->add_setting('top_store_footer_wgt_text_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_footer_wgt_text_clr', array(
        'label'      => __('Text Color', 'top-store-pro' ),
        'section'    => 'top-store-footer-widget-clr',
        'settings'   => 'top_store_footer_wgt_text_clr',
        'priority' => 4,
    ) ) 
 );

$wp_customize->add_setting('top_store_footer_wgt_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_footer_wgt_link_clr', array(
        'label'      => __('Link Color', 'top-store-pro' ),
        'section'    => 'top-store-footer-widget-clr',
        'settings'   => 'top_store_footer_wgt_link_clr',
        'priority' => 5,
    ) ) 
 );
$wp_customize->add_setting('top_store_footer_wgt_link_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_footer_wgt_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-footer-widget-clr',
        'settings'   => 'top_store_footer_wgt_link_hvr_clr',
        'priority' => 6,
    ) ) 
 );

/****************/
//doc link
/****************/
$wp_customize->add_setting('top_store_footer_widget_doc_learn_more', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_footer_widget_doc_learn_more',
            array(
        'section'     => 'top-store-footer-widget-clr',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/top-store-pro/#footer-color',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));