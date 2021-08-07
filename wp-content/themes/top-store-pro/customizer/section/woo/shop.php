<?php 
/************************/
//Shop product pagination
/************************/
   $wp_customize->add_setting('top_store_pagination', array(
        'default'        => 'num',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_select',
    ));
    $wp_customize->add_control('top_store_pagination', array(
        'settings' => 'top_store_pagination',
        'label'   => __('Post Pagination','top-store-pro'),
        'section' => 'top-store-woo-shop-page',
        'type'    => 'select',
        'choices' => array(
        'num'     => __('Numbered','top-store-pro'),
        'click'   => __('Load More','top-store-pro'), 
        'scroll'  => __('Infinite Scroll','top-store-pro'), 
        )
    ));

  
$wp_customize->add_setting('top_store_pagination_loadmore_btn_text', array(
        'default'           => 'Load More',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_text',
        'transport'         => 'postMessage',
        
    ));
$wp_customize->add_control('top_store_pagination_loadmore_btn_text', array(
        'label'    => __('Load More Text', 'top-store-pro'),
        'section'  => 'top-store-woo-shop-page',
        'settings' => 'top_store_pagination_loadmore_btn_text',
         'type'    => 'text',
    ));
/****************/
// doc link
/****************/
$wp_customize->add_setting('top_store_shop_page_more', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_shop_page_more',
            array(
        'section'     => 'top-store-woo-shop-page',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/top-store-pro/#shop-page',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>  100,
    )));