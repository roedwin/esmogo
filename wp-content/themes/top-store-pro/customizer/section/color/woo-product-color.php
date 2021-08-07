<?php 
 $wp_customize->add_setting('top_store_woo_prdct_box_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_box_bg_clr', array(
        'label'      => __('Product Background', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-color',
        'settings'   => 'top_store_woo_prdct_box_bg_clr',
        'priority'   => 1,
    ) ) 
 ); 

// title
 $wp_customize->add_setting('top_store_woo_prdct_tle_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_tle_clr', array(
        'label'      => __('Title', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-color',
        'settings'   => 'top_store_woo_prdct_tle_clr',
        'priority'   => 2,
    ) ) 
 ); 

//rating
$wp_customize->add_setting('top_store_woo_prdct_rat_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_rat_clr', array(
        'label'      => __('Rating', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-color',
        'settings'   => 'top_store_woo_prdct_rat_clr',
        'priority'   => 3,
    ) ) 
 ); 

//price
$wp_customize->add_setting('top_store_woo_prdct_price_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_price_clr', array(
        'label'      => __('Price', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-color',
        'settings'   => 'top_store_woo_prdct_price_clr',
        'priority'   => 4,
    ) ) 
 ); 

//quick-view-color
$wp_customize->add_setting('top_store_divide_icon_clr', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_divide_icon_clr',
            array(
        'section'     => 'top-store-woo-prdct-color',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Icons','top-store-pro' ),
        'priority'    => 5,
)));

$wp_customize->add_setting('top_store_woo_prdct_icon_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_icon_bg_clr', array(
        'label'      => __('Icon Background', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-color',
        'settings'   => 'top_store_woo_prdct_icon_bg_clr',
        'priority'   => 6,
    ) ) 
 ); 

$wp_customize->add_setting('top_store_woo_prdct_icon_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_icon_clr', array(
        'label'      => __('Icon Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-color',
        'settings'   => 'top_store_woo_prdct_icon_clr',
        'priority'   => 7,
    ) ) 
 ); 

$wp_customize->add_setting('top_store_woo_prdct_icon_hvr_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_icon_hvr_clr', array(
        'label'      => __('Icon Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-color',
        'settings'   => 'top_store_woo_prdct_icon_hvr_clr',
        'priority'   => 7,
    ) ) 
 ); 

//add-to-cart-btn-color
$wp_customize->add_setting('top_store_divide_addtocartbtn_clr', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_divide_addtocartbtn_clr',
            array(
        'section'     => 'top-store-woo-prdct-color',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Add To Cart Button','top-store-pro' ),
        'priority'    => 8,
)));
$wp_customize->add_setting('top_store_woo_prdct_crt_btn_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_crt_btn_bg_clr', array(
        'label'      => __('Button BG Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-color',
        'settings'   => 'top_store_woo_prdct_crt_btn_bg_clr',
        'priority'   => 9,
    ) ) 
 ); 
$wp_customize->add_setting('top_store_woo_prdct_crt_btn_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_crt_btn_clr', array(
        'label'      => __('Button Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-color',
        'settings'   => 'top_store_woo_prdct_crt_btn_clr',
        'priority'   => 9,
    ) ) 
 ); 
$wp_customize->add_setting('top_store_woo_prdct_crt_btn_bg_hvr_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_crt_btn_bg_hvr_clr', array(
        'label'      => __('Button BG Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-color',
        'settings'   => 'top_store_woo_prdct_crt_btn_bg_hvr_clr',
        'priority'   => 9,
    ) ) 
 ); 
$wp_customize->add_setting('top_store_woo_prdct_crt_btn_hvr_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_crt_btn_hvr_clr', array(
        'label'      => __('Button Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-color',
        'settings'   => 'top_store_woo_prdct_crt_btn_hvr_clr',
        'priority'   => 9,
    ) ) 
 ); 

//wishlist-compare-color
$wp_customize->add_setting('top_store_divide_wishlist_compare_clr', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_divide_wishlist_compare_clr',
            array(
        'section'     => 'top-store-woo-prdct-color',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Tooltip','top-store-pro' ),
        'priority'    => 10,
)));

$wp_customize->add_setting('top_store_woo_prdct_tooltip_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_tooltip_bg_clr', array(
        'label'      => __('Tooltip Bg Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-color',
        'settings'   => 'top_store_woo_prdct_tooltip_bg_clr',
        'priority'   => 11,
    ) ) 
 );

$wp_customize->add_setting('top_store_woo_prdct_tooltip_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_tooltip_clr', array(
        'label'      => __('Tooltip Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-color',
        'settings'   => 'top_store_woo_prdct_tooltip_clr',
        'priority'   => 12,
    ) ) 
 );

//Sale Badge
$wp_customize->add_setting('top_store_woo_prdct_sale_badge_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_sale_badge_bg_clr', array(
        'label'      => __('Background', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-sale-color',
        'settings'   => 'top_store_woo_prdct_sale_badge_bg_clr',
        'priority'   => 1,
    ) ) 
 );
$wp_customize->add_setting('top_store_woo_prdct_sale_badge_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_woo_prdct_sale_badge_clr', array(
        'label'      => __('Color', 'top-store-pro' ),
        'section'    => 'top-store-woo-prdct-sale-color',
        'settings'   => 'top_store_woo_prdct_sale_badge_clr',
        'priority'   => 2,
    ) ) 
 );

/****************/
//doc link
/****************/
$wp_customize->add_setting('top_store_product_clr_doc_learn_more', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_product_clr_doc_learn_more',
            array(
        'section'     => 'top-store-woo-prdct-color',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/top-store-pro/#woo-color',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));