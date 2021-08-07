<?php 
/******************/
//Above Header
/******************/
// BG color
 $wp_customize->add_setting('top_store_above_hd_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_above_hd_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-abv-header-clr',
        'settings'   => 'top_store_above_hd_bg_clr',
        'priority'   => 2,
    ) ) 
 );  

    // above content header
$wp_customize->add_setting('top_store_divide_abv_hdr_content', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_divide_abv_hdr_content',
            array(
        'section'     => 'top-store-abv-header-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Above Header Content','top-store-pro' ),
        'priority'    => 14,
)));

$wp_customize->add_setting('top_store_abv_content_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_abv_content_txt_clr', array(
        'label'      => __('Text Color', 'top-store-pro' ),
        'section'    => 'top-store-abv-header-clr',
        'settings'   => 'top_store_abv_content_txt_clr',
        'priority' => 15,
    ) ) 
 );
$wp_customize->add_setting('top_store_abv_content_link_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_abv_content_link_clr', array(
        'label'      => __('Link Color', 'top-store-pro' ),
        'section'    => 'top-store-abv-header-clr',
        'settings'   => 'top_store_abv_content_link_clr',
        'priority'   => 16,
    ) ) 
 );
$wp_customize->add_setting('top_store_abv_content_link_hvr_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_abv_content_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-abv-header-clr',
        'settings'   => 'top_store_abv_content_link_hvr_clr',
        'priority'   => 17,
    ) ) 
 );

/****************/
//doc link
/****************/
$wp_customize->add_setting('top_store_abv_hrd_doc_learn_more', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_abv_hrd_doc_learn_more',
            array(
        'section'     => 'top-store-abv-header-clr',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/top-store-pro/#header-color',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));