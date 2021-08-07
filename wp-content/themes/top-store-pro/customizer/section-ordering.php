<?php
/**
 * Section ordering settings
 */
    $wp_customize->add_setting('_sorting', array(
        'default'        =>array(
                                                    'topslider',
                                                    'categoryslider',
                                                    'productslider',
                                                    'tabproduct',
                                                    'productlist',
                                                    'tabproductlist',
                                                    'banner',
                                                     'ribbon',
                                                    'brand',
                                                    'highlight',
                                                    'featureproduct',
                                                    'customone',
                                                    'customtwo',
                                                    'customthree',
                                                    'customfour',
                    ),
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_checkbox_explode'
    ));

    $wp_customize->add_control(new top_store_Customize_Sort_List(
         $wp_customize,'_sorting', array(
        'settings' => '_sorting',
        'label'   => __( 'Section Ordering', 'top-store-pro' ),
        'section' => 'top-store-section-order',
        'choices' => array(
        		'topslider'        => __( 'Top Slider','top-store-pro' ),
                'categoryslider'   => __( 'Woo Category','top-store-pro' ),
                'productslider'    => __( 'Product Carousel','top-store-pro' ),
                'tabproduct'       => __( 'Tabbed Product Carousel','top-store-pro' ),
                'productlist'      => __( 'Product List Carousel','top-store-pro' ),
                'tabproductlist'   => __( 'Tabbed Product List Carousel','top-store-pro' ),
                'banner'           => __( 'Banner','top-store-pro' ),
                'ribbon'           => __( 'Ribbon','top-store-pro' ),
                'brand'            => __( 'Brand','top-store-pro'),                    
                'highlight'        => __( 'Highlight','top-store-pro' ),
                'featureproduct'   => __( 'Big Featured Product','top-store-pro' ), 
                'customone'        => __( 'First Custom Section','top-store-pro' ),
                'customtwo'        => __( 'Second Custom Section','top-store-pro' ),  
                'customthree'      => __( 'Third Custom Section','top-store-pro' ),
                'customfour'       => __( 'Fourth Custom Section','top-store-pro' ),   
            )
        ) 
    )
);  

    $wp_customize->add_setting('top_store_section_ordering_doc', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
    $wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_section_ordering_doc',
            array(
        'section'     => 'top-store-section-order',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/top-store-pro/#section-ordering',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));
/*********************/
// Sticky Sidebar
/********************/
 $wp_customize->add_setting( 'top_store_sticky_sidebar', array(
    'default'           => false,
    'sanitize_callback' => 'top_store_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new top_store_Toggle_Control( $wp_customize, 'top_store_sticky_sidebar', array(
    'label'       => esc_html__( 'Sticky Sidebar', 'top-store-pro' ),
    'section'     => 'top-store-section-sidebar-group',
    'type'        => 'toggle',
    'settings'    => 'top_store_sticky_sidebar',
  ) ) );

  $wp_customize->add_setting('top_store_sidebar_front_option', array(
        'default'        => 'active-sidebar',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_select',
    ));
$wp_customize->add_control( 'top_store_sidebar_front_option', array(
        'settings' => 'top_store_sidebar_front_option',
        'label'    => __('Front Page','top-store-pro'),
        'section'  => 'top-store-section-sidebar-group',
        'type'     => 'select',
        'choices'    => array(
        'active-sidebar' => __('Active Both Sidebar','top-store-pro'),
        'no-sidebar' => __('No Sidebar','top-store-pro'),
        'disable-left-sidebar'  => __('Disable Left Sidebar','top-store-pro'),
        'disable-right-sidebar' => __('Disable Right Sidebar','top-store-pro'),
        ),
    ));

$wp_customize->add_setting('top_store_sidebar_ineternal_option', array(
        'default'        => 'active-sidebar',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_select',
    ));
$wp_customize->add_control( 'top_store_sidebar_ineternal_option', array(
        'settings' => 'top_store_sidebar_ineternal_option',
        'label'    => __('Internal Pages','top-store-pro'),
        'section'  => 'top-store-section-sidebar-group',
        'type'     => 'select',
        'choices'    => array(
        'active-sidebar' => __('Active Both Sidebar','top-store-pro'),
        'no-sidebar' => __('No Sidebar','top-store-pro'),
        'disable-left-sidebar'  => __('Disable Left Sidebar','top-store-pro'),
        'disable-right-sidebar' => __('Disable Right Sidebar','top-store-pro'),
        ),
    ));
// shop pages
$wp_customize->add_setting('top_store_sidebar_shp_pge_option', array(
        'default'        => 'internal-sidebar',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_select',
    ));
$wp_customize->add_control( 'top_store_sidebar_shp_pge_option', array(
        'settings' => 'top_store_sidebar_shp_pge_option',
        'label'    => __('Shop Page & Product Category Page','top-store-pro'),
        'section'  => 'top-store-section-sidebar-group',
        'type'     => 'select',
        'choices'    => array(
        'internal-sidebar' => __('Same as Internal Pages','top-store-pro'),
        'active-sidebar' => __('Active Both Sidebar','top-store-pro'),
        'no-sidebar' => __('No Sidebar','top-store-pro'),
        'disable-left-sidebar'  => __('Disable Left Sidebar','top-store-pro'),
        'disable-right-sidebar' => __('Disable Right Sidebar','top-store-pro'),
        ),
    ));

/****************/
//doc link
/****************/
$wp_customize->add_setting('top_store_sticky_sidebar_learn_more', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_sticky_sidebar_learn_more',
            array(
        'section'    => 'top-store-section-sidebar-group',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/top-store-pro/#sticky-sidebar',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));
/*********************/
// Move To Top
/********************/
 $wp_customize->add_setting( 'top_store_move_to_top', array(
    'default'           => false,
    'sanitize_callback' => 'top_store_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new top_store_Toggle_Control( $wp_customize, 'top_store_move_to_top', array(
    'label'       => esc_html__( 'Enable', 'top-store-pro' ),
    'section'     => 'top-store-move-to-top',
    'type'        => 'toggle',
    'settings'    => 'top_store_move_to_top',
  ) ) );

  // BG color
 $wp_customize->add_setting('top_store_move_to_top_bg_clr', array(
        'default'           => '#141415',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_move_to_top_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-move-to-top',
        'settings'   => 'top_store_move_to_top_bg_clr',
    ) ) 
 );  

$wp_customize->add_setting('top_store_move_to_top_icon_clr', array(
        'default'        => '#fff',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_move_to_top_icon_clr', array(
        'label'      => __('Icon Color', 'top-store-pro' ),
        'section'    => 'top-store-move-to-top',
        'settings'   => 'top_store_move_to_top_icon_clr',
    ) ) 
 );

/****************/
//doc link
/****************/
$wp_customize->add_setting('top_store_movetotop_learn_more', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_movetotop_learn_more',
            array(
        'section'    => 'top-store-move-to-top',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/top-store-pro/#back-top',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));