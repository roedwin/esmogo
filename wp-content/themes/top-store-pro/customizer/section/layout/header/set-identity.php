<?php
/**
 * Register customizer site identity setting.
 *
 * @package     top-store
 * @author      top-store
 * @copyright   Copyright (c) 2019, top-store
 * @since       top-store 1.0.0
 */
/*************************/
/*Site Identity*/
/*************************/
/**
* Option: Retina logo selector
*/
$wp_customize->add_setting('top_store_header_retina_logo', array(
            'default'           => '',
            'type'              => 'option',
            'sanitize_callback' => 'top_store_sanitize_upload',
        )
    );
$wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,'top_store_header_retina_logo', array(
                'section'        => 'title_tagline',
                'priority'       => 8,
                'label'          => __( 'Retina Logo', 'top-store-pro' ),
                'library_filter' => array( 'gif', 'jpg', 'jpeg', 'png', 'ico' ),
            )
        )
    );

$wp_customize->get_section('title_tagline')->priority = 1;
   $wp_customize->add_setting('title_disable', array(
        'default'           => 'enable',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_checkbox',
    ));
$wp_customize->add_control('title_disable', array(
        'label'    => __('Display Site Title', 'top-store-pro'),
        'section'  => 'title_tagline',
        'settings' => 'title_disable',
         'type'       => 'checkbox',
        'choices'    => array(
            'enable' => 'Display Site Title',
        ),
    ));
$wp_customize->get_section('title_tagline')->priority = 1;
$wp_customize->add_setting('tagline_disable', array(
        'default'           => 'enable',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_checkbox',
    ));
$wp_customize->add_control('tagline_disable', array(
        'label'    => __('Display Tagline', 'top-store-pro'),
        'section'  => 'title_tagline',
        'settings' => 'tagline_disable',
         'type'       => 'checkbox',
        'choices'    => array(
            'enable' => 'Display Tagline',
        ),
    )); 
// logo width
if ( class_exists( 'top_store_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'top_store_pro_logo_width', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default' => '225',
                'transport'         => 'postMessage',
                
            ));
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_pro_logo_width', array(
                    'label'       => esc_html__( 'Logo Width', 'top-store-pro' ),
                    'section'     => 'title_tagline',
                    'priority'       => 9,
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 50,
                        'max'  => 600,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
);
}

$wp_customize->add_setting('top_store_site_identity', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_site_identity',
            array(
        'section'    => 'title_tagline',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/top-store-pro/#site-identity',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));