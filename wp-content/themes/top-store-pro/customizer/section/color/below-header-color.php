<?php
/******************/
//Below Header
/******************/
// BG color
 $wp_customize->add_setting('top_store_below_hd_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_below_hd_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-below-header-header-clr',
        'settings'   => 'top_store_below_hd_bg_clr',
        'priority'   => 1,
    ) ) 
 );  

// Registers abv_header_background settings
    $wp_customize->add_setting( 'top_store_pro_below_header_background_image_url', array(
        'sanitize_callback' => 'esc_url',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_below_header_background_image_id', array(
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_below_header_background_repeat', array(
        'default' => 'no-repeat',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_below_header_background_size', array(
        'default' => 'auto',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_below_header_background_attach', array(
        'default' => 'scroll',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_below_header_background_position', array(
        'default' => 'center center',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    // Registers example_background control
    $wp_customize->add_control(
        new Top_Store_Customize_Custom_Background_Control(
            $wp_customize,
            'top_store_pro_below_header_background_image',
            array(
                'label'     => esc_html__( 'Background Image', 'top-store-pro' ),
                'section'   => 'top-store-below-header-header-clr',
                'priority'   => 2,
                'settings'    => array(
                    'image_url' => 'top_store_pro_below_header_background_image_url',
                    'image_id' => 'top_store_pro_below_header_background_image_id',
                    'repeat' => 'top_store_pro_below_header_background_repeat', // Use false to hide the field
                    'size' => 'top_store_pro_below_header_background_size',
                    'position' => 'top_store_pro_below_header_background_position',
                    'attach' => 'top_store_pro_below_header_background_attach'
                )
            )
        )
    );
    // below content header
$wp_customize->add_setting('top_store_divide_below_hdr_content', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_divide_below_hdr_content',
            array(
        'section'     => 'top-store-below-header-header-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Below Header Content','top-store-pro' ),
        'priority'    => 3,
)));

$wp_customize->add_setting('top_store_below_content_icon_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_below_content_icon_clr', array(
        'label'      => __('Icon Color', 'top-store-pro' ),
        'section'    => 'top-store-below-header-header-clr',
        'settings'   => 'top_store_below_content_icon_clr',
        'priority' => 4,
    ) ) 
 );

$wp_customize->add_setting('top_store_below_content_icon_bg_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_below_content_icon_bg_clr', array(
        'label'      => __('Icon Bg Color', 'top-store-pro' ),
        'section'    => 'top-store-below-header-header-clr',
        'settings'   => 'top_store_below_content_icon_bg_clr',
        'priority' => 4,
    ) ) 
 );

$wp_customize->add_setting('top_store_below_content_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_below_content_txt_clr', array(
        'label'      => __('Text Color', 'top-store-pro' ),
        'section'    => 'top-store-below-header-header-clr',
        'settings'   => 'top_store_below_content_txt_clr',
        'priority' => 5,
    ) ) 
 );
$wp_customize->add_setting('top_store_below_content_link_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_below_content_link_clr', array(
        'label'      => __('Link Color', 'top-store-pro' ),
        'section'    => 'top-store-below-header-header-clr',
        'settings'   => 'top_store_below_content_link_clr',
        'priority'   => 6,
    ) ) 
 );
$wp_customize->add_setting('top_store_below_content_link_hvr_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_below_content_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-below-header-header-clr',
        'settings'   => 'top_store_below_content_link_hvr_clr',
        'priority'   => 7,
    ) ) 
 );

$wp_customize->add_setting('top_store_below_button_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_below_button_clr', array(
        'label'      => __('Button Text Color', 'top-store-pro' ),
        'section'    => 'top-store-below-header-header-clr',
        'settings'   => 'top_store_below_button_clr',
        'priority' => 8,
    ) ) 
 );

$wp_customize->add_setting('top_store_below_button_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_below_button_hvr_clr', array(
        'label'      => __('Button Text Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-below-header-header-clr',
        'settings'   => 'top_store_below_button_hvr_clr',
        'priority' => 9,
    ) ) 
 );

$wp_customize->add_setting('top_store_below_button_bg', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_below_button_bg', array(
        'label'      => __('Button Bg Color', 'top-store-pro' ),
        'section'    => 'top-store-below-header-header-clr',
        'settings'   => 'top_store_below_button_bg',
        'priority' => 10,
    ) ) 
 );

$wp_customize->add_setting('top_store_below_button_bg_hvr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_below_button_bg_hvr', array(
        'label'      => __('Button Bg Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-below-header-header-clr',
        'settings'   => 'top_store_below_button_bg_hvr',
        'priority' => 11,
    ) ) 
 );

/****************/
//doc link
/****************/
$wp_customize->add_setting('top_store_below_hrd_doc_learn_more', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_below_hrd_doc_learn_more',
            array(
        'section'     => 'top-store-below-header-clr',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/top-store-pro/#header-color',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));