<?php
//General Section
if ( ! class_exists( 'WooCommerce' ) ){
    return;
}
// product animation
$wp_customize->add_setting('top_store_woo_product_animation', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_select',
    ));
$wp_customize->add_control( 'top_store_woo_product_animation', array(
        'settings'=> 'top_store_woo_product_animation',
        'label'   => __('Product Image Hover Style','top-store-pro'),
        'section' => 'top-store-woo-shop',
        'type'    => 'select',
        'choices'    => array(
        'none'            => __('None','top-store-pro'),
        'zoom'            => __('Zoom','top-store-pro'),
        'swap'            => __('Fade Swap','top-store-pro'),
        'slide'            => __('Slide Swap','top-store-pro'),         
        ),
    ));
/*******************/
//Quick view
/*******************/
$wp_customize->add_setting('top_store_woo_quickview_enable', array(
                'default'               => true,
                'sanitize_callback'     => 'top_store_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize,'top_store_woo_quickview_enable', array(
                'label'         => esc_html__('Enable Quick View.', 'top-store-pro'),
                'type'          => 'checkbox',
                'section'       => 'top-store-woo-shop',
                'settings'      => 'top_store_woo_quickview_enable',
            ) ) );

$wp_customize->add_setting('top_store_prd_shw_no', array(
            'default'           =>'20',
            'capability'        =>'edit_theme_options',
            'sanitize_callback' =>'top_store_sanitize_number',
        )
    );
    $wp_customize->add_control('top_store_prd_shw_no', array(
            'type'        => 'number',
            'section'     => 'top-store-woo-shop',
            'label'       => __('No. of product to show in Front Page', 'top-store' ),
            'input_attrs' => array(
                'min'  => 10,
                'step' => 1,
                'max'  => 1000,
            ),
        )
    );
/****************/
// doc link
/****************/
$wp_customize->add_setting('top_store_product_style_link_more', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_product_style_link_more',
            array(
        'section'     => 'top-store-woo-shop',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/top-store-pro/#style-product',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));