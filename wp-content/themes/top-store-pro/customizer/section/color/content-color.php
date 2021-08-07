<?php 
// BG color
 $wp_customize->add_setting('top_store_content_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_content_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro'),
        'section'    => 'top-store-page-content-color',
        'settings'   => 'top_store_content_bg_clr',
        'priority'   => 2,
    ) ) 
 );

// H1 color
$wp_customize->add_setting('top_store_content_h1_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_content_h1_clr', array(
        'label'      => __('Heading (H1) Color', 'top-store-pro' ),
        'section'    => 'top-store-page-content-color',
        'settings'   => 'top_store_content_h1_clr',
        'priority' => 3,
    )) 
 ); 
 // H2 color
$wp_customize->add_setting('top_store_content_h2_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_content_h2_clr', array(
        'label'      => __('Heading (H2) Color', 'top-store-pro' ),
        'section'    => 'top-store-page-content-color',
        'settings'   => 'top_store_content_h2_clr',
        'priority'   => 4,
    )) 
 ); 
 // H3 color
$wp_customize->add_setting('top_store_content_h3_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_content_h3_clr', array(
        'label'      => __('Heading (H3) Color', 'top-store-pro' ),
        'section'    => 'top-store-page-content-color',
        'settings'   => 'top_store_content_h3_clr',
        'priority'   => 5,
    )) 
 );
// H4 color
$wp_customize->add_setting('top_store_content_h4_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_content_h4_clr', array(
        'label'      => __('Heading (H4) Color', 'top-store-pro' ),
        'section'    => 'top-store-page-content-color',
        'settings'   => 'top_store_content_h4_clr',
        'priority'   => 5,
    )) 
 );
// H5 color
$wp_customize->add_setting('top_store_content_h5_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_content_h5_clr', array(
        'label'      => __('Heading (H5) Color', 'top-store-pro' ),
        'section'    => 'top-store-page-content-color',
        'settings'   => 'top_store_content_h5_clr',
        'priority'   => 6,
    )) 
 );

// H6 color
$wp_customize->add_setting('top_store_content_h6_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_content_h6_clr', array(
        'label'      => __('Heading (H6) Color', 'top-store-pro' ),
        'section'    => 'top-store-page-content-color',
        'settings'   => 'top_store_content_h6_clr',
        'priority'   => 7,
    )) 
 );

/****************/
//doc link
/****************/
$wp_customize->add_setting('top_store_content_doc_learn_more', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_content_doc_learn_more',
            array(
        'section'     => 'top-store-page-content-color',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/top-store-pro/#content-color',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));