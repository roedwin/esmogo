<?php
/**
 * Register customizer panels & sections.
 */
/*************************/
/*WordPress Default Panel*/
/*************************/
$top_store_shop_panel_default = new top_store_WP_Customize_Panel( $wp_customize,'top-store-panel-default', array(
    'priority' => 1,
    'title'    => __( 'WordPress Default', 'top-store-pro' ),
  ));
$wp_customize->add_panel($top_store_shop_panel_default);
$wp_customize->get_section( 'title_tagline' )->panel = 'top-store-panel-default';
$wp_customize->get_section( 'static_front_page' )->panel = 'top-store-panel-default';
$wp_customize->get_section( 'custom_css' )->panel = 'top-store-panel-default';

$wp_customize->add_setting('top_store_home_page_setup', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_home_page_setup',
            array(
        'section'    => 'static_front_page',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/top-store-pro/#homepage-setting',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));
/************************/
// Background option
/************************/
$top_store_shop_bg_option = new  top_store_WP_Customize_Section( $wp_customize, 'top-store-bg-option', array(
    'title' =>  __( 'Background', 'top-store-pro' ),
    'panel' => 'top-store-panel-default',
    'priority' => 10,
  ));
$wp_customize->add_section($top_store_shop_bg_option);

/*************************/
/*Layout Panel*/
/*************************/
$wp_customize->add_panel( 'top-store-panel-layout', array(
				'priority' => 3,
				'title'    => __( 'Layout', 'top-store-pro' ),
) );

// Header
$top_store_section_header_group = new  top_store_WP_Customize_Section( $wp_customize, 'top-store-section-header-group', array(
    'title' =>  __( 'Header', 'top-store-pro' ),
    'panel' => 'top-store-panel-layout',
    'priority' => 2,
  ));
$wp_customize->add_section( $top_store_section_header_group );

// above-header
$top_store_above_header = new  top_store_WP_Customize_Section( $wp_customize, 'top-store-above-header', array(
    'title'    => __( 'Above Header', 'top-store-pro' ),
    'panel'    => 'top-store-panel-layout',
        'section'  => 'top-store-section-header-group',
        'priority' => 3,
  ));
$wp_customize->add_section( $top_store_above_header );
// main-header
$top_store_shop_main_header = new  top_store_WP_Customize_Section( $wp_customize, 'top-store-main-header', array(
    'title'    => __( 'Main Header', 'top-store-pro' ),
    'panel'    => 'top-store-panel-layout',
    'section'  => 'top-store-section-header-group',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_shop_main_header );
// exclude category
$top_store_exclde_cat_header = new  top_store_WP_Customize_Section( $wp_customize, 'top_store_exclde_cat_header', array(
    'title'    => __( 'Exclude Category', 'top-store-pro' ),
    'panel'    => 'top-store-panel-layout',
    'section'  => 'top-store-section-header-group',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_exclde_cat_header );
//blog
$top_store_section_blog_group = new  top_store_WP_Customize_Section( $wp_customize,'top-store-section-blog-group', array(
    'title' =>  __( 'Blog', 'top-store-pro' ),
    'panel' => 'top-store-panel-layout',
    'priority' => 2,
  ));
$wp_customize->add_section($top_store_section_blog_group);

$top_store_section_footer_group = new  top_store_WP_Customize_Section( $wp_customize, 'top-store-section-footer-group', array(
    'title' =>  __( 'Footer', 'top-store-pro' ),
    'panel' => 'top-store-panel-layout',
    'priority' => 3,
  ));
$wp_customize->add_section( $top_store_section_footer_group);
// sidebar
$top_store_section_sidebar_group = new  top_store_WP_Customize_Section( $wp_customize, 'top-store-section-sidebar-group', array(
    'title' =>  __( 'Sidebar', 'top-store-pro' ),
    'panel' => 'top-store-panel-layout',
    'priority' => 3,
  ));
$wp_customize->add_section($top_store_section_sidebar_group);
// Scroll to top
$top_store_move_to_top = new  top_store_WP_Customize_Section( $wp_customize, 'top-store-move-to-top', array(
    'title' =>  __( 'Move To Top', 'top-store-pro' ),
    'panel' => 'top-store-panel-layout',
    'priority' => 3,
  ));
$wp_customize->add_section($top_store_move_to_top);
//above-footer
$top_store_above_footer = new  top_store_WP_Customize_Section( $wp_customize, 'top-store-above-footer',array(
    'title'    => __( 'Above Footer','top-store-pro' ),
    'panel'    => 'top-store-panel-layout',
        'section'  => 'top-store-section-footer-group',
        'priority' => 1,
));
$wp_customize->add_section( $top_store_above_footer);
//widget footer
$top_store_shop_widget_footer = new  top_store_WP_Customize_Section($wp_customize,'top-store-widget-footer', array(
    'title'    => __('Widget Footer','top-store-pro'),
    'panel'    => 'top-store-panel-layout',
    'section'  => 'top-store-section-footer-group',
    'priority' => 5,
));
$wp_customize->add_section( $top_store_shop_widget_footer);
//Bottom footer
$top_store_shop_bottom_footer = new  top_store_WP_Customize_Section($wp_customize,'top-store-bottom-footer', array(
    'title'    => __('Below Footer','top-store-pro'),
    'panel'    => 'top-store-panel-layout',
    'section'  => 'top-store-section-footer-group',
    'priority' => 5,
));
$wp_customize->add_section( $top_store_shop_bottom_footer);

/*************************/
/* Preloader */
/*************************/
$wp_customize->add_section( 'top-store-pre-loader' , array(
    'title'      => __('Preloader','top-store-pro'),
    'priority'   => 30,
) );
/*************************/
/* Social   Icon*/
/*************************/
$top_store_social_header = new top_store_WP_Customize_Section( $wp_customize, 'top-store-social-icon', array(
    'title'    => __( 'Social Icon', 'top-store-pro' ),
    'priority' => 30,
  ));
$wp_customize->add_section( $top_store_social_header );
/*************************/
/* Frontpage Panel */
/*************************/
$wp_customize->add_panel( 'top-store-panel-frontpage', array(
                'priority' => 5,
                'title'    => __( 'Frontpage Sections', 'top-store-pro' ),
) );

$top_store_top_slider_section = new top_store_WP_Customize_Section( $wp_customize, 'top_store_top_slider_section', array(
    'title'    => __( 'Top Slider', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_top_slider_section );

$top_store_category_tab_section = new top_store_WP_Customize_Section( $wp_customize, 'top_store_category_tab_section', array(
    'title'    => __( 'Tabbed Product Carousel', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_category_tab_section );

$top_store_product_slide_section = new top_store_WP_Customize_Section( $wp_customize, 'top_store_product_slide_section', array(
    'title'    => __( 'Product Carousel', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_product_slide_section );

$top_store_cat_slide_section = new top_store_WP_Customize_Section( $wp_customize, 'top_store_cat_slide_section', array(
    'title'    => __( 'Woo Category', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_cat_slide_section );

$top_store_product_slide_list = new top_store_WP_Customize_Section( $wp_customize, 'top_store_product_slide_list', array(
    'title'    => __( 'Product List Carousel', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_product_slide_list );

$top_store_product_big_feature = new top_store_WP_Customize_Section( $wp_customize, 'top_store_product_big_feature', array(
    'title'    => __( 'Big Featured Product', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_product_big_feature );
$top_store_product_cat_list = new top_store_WP_Customize_Section( $wp_customize, 'top_store_product_cat_list', array(
    'title'    => __( 'Tabbed Product List Carousel', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_product_cat_list );
// ribbon
$top_store_ribbon = new top_store_WP_Customize_Section( $wp_customize, 'top_store_ribbon', array(
    'title'    => __( 'Ribbon', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_ribbon );

$top_store_banner = new top_store_WP_Customize_Section( $wp_customize, 'top_store_banner', array(
    'title'    => __( 'Banner', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_banner );

$top_store_brand = new top_store_WP_Customize_Section( $wp_customize, 'top_store_brand', array(
    'title'    => __( 'Brand', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_brand );

$top_store_highlight = new top_store_WP_Customize_Section( $wp_customize, 'top_store_highlight', array(
    'title'    => __( 'Highlight', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_highlight );

$top_store_1_custom_sec = new top_store_WP_Customize_Section( $wp_customize, 'top_store_1_custom_sec', array(
    'title'    => __( 'First Custom Section', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_1_custom_sec );

$top_store_2_custom_sec = new top_store_WP_Customize_Section( $wp_customize, 'top_store_2_custom_sec', array(
    'title'    => __( 'Second Custom Section', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_2_custom_sec );

$top_store_3_custom_sec = new top_store_WP_Customize_Section( $wp_customize, 'top_store_3_custom_sec', array(
    'title'    => __( 'Third Custom Section', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_3_custom_sec );

$top_store_4_custom_sec = new top_store_WP_Customize_Section( $wp_customize, 'top_store_4_custom_sec', array(
    'title'    => __( 'Fourth Custom Section', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_4_custom_sec );

$top_store_5_custom_sec = new top_store_WP_Customize_Section( $wp_customize, 'top_store_5_custom_sec', array(
    'title'    => __( 'Top Custom Section', 'top-store-pro' ),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $top_store_5_custom_sec );

//section ordering
$top_store_section_order = new top_store_WP_Customize_Section($wp_customize,'top-store-section-order', array(
    'title'    => __('Section Ordering', 'top-store-pro'),
    'panel'    => 'top-store-panel-frontpage',
    'priority' => 6,
));
$wp_customize->add_section($top_store_section_order);
/******************/
// Color Option
/******************/
$wp_customize->add_panel( 'top-store-panel-color-background', array(
        'priority' => 22,
        'title'    => __( 'Total Color & BG Options', 'top-store-pro' ),
    ) );
// Section gloab color and background
$wp_customize->add_section('top-store-gloabal-color', array(
    'title'    => __('Global Colors', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'priority' => 1,
));
//header
$top_store_header_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-header-color', array(
    'title'    => __('Header', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'priority' => 1,
));
$wp_customize->add_section( $top_store_header_color );

$top_store_abv_header_clr = new  top_store_WP_Customize_Section($wp_customize,'top-store-abv-header-clr', array(
    'title'    => __('Above Header','top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-header-color',
    'priority' => 1,
));
$wp_customize->add_section( $top_store_abv_header_clr);

$top_store_pro_main_header_clr = new  top_store_WP_Customize_Section($wp_customize,'top-store-main-header-clr', array(
    'title'    => __('Main Header','top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-header-color',
    'priority' => 2,
));
$wp_customize->add_section( $top_store_pro_main_header_clr);

$top_store_below_header_clr = new  top_store_WP_Customize_Section($wp_customize,'top-store-below-header-clr', array(
    'title'    => __('Below Header','top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-header-color',
    'priority' => 1,
));
$wp_customize->add_section( $top_store_below_header_clr);

$top_store_pro_sticky_header_clr = new  top_store_WP_Customize_Section($wp_customize,'top-store-sticky-header-clr', array(
    'title'    => __('Sticky Header','top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-header-color',
    'priority' => 2,
));
$wp_customize->add_section($top_store_pro_sticky_header_clr);


$top_store_mobile_pan_clr = new  top_store_WP_Customize_Section($wp_customize,'top-store-mobile-pan-clr', array(
    'title'    => __('Mobile','top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-header-color',
    'priority' => 2,
));
$wp_customize->add_section($top_store_mobile_pan_clr);

$top_store_canvas_pan_clr = new  top_store_WP_Customize_Section($wp_customize,'top-store-canvas-pan-clr', array(
    'title'    => __('Off Canvas Sidebar','top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-header-color',
    'priority' => 2,
));
$wp_customize->add_section($top_store_canvas_pan_clr);

$top_store_pro_main_header_header_clr = new  top_store_WP_Customize_Section($wp_customize,'top-store-main-header-header-clr', array(
    'title'    => __('Header','top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-main-header-clr',
    'priority' => 2,
));
$wp_customize->add_section($top_store_pro_main_header_header_clr);

// main-menu
$top_store_pro_main_header_menu_clr = new  top_store_WP_Customize_Section($wp_customize,'top-store-main-header-menu-clr', array(
    'title'    => __('Main Menu','top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-main-header-clr',
    'priority' => 2,
));
$wp_customize->add_section($top_store_pro_main_header_menu_clr);
// header search
$top_store_pro_main_header_srch_clr = new  top_store_WP_Customize_Section($wp_customize,'top-store-main-header-srch-clr', array(
    'title'    => __('Search','top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-main-header-clr',
    'priority' => 4,
));
$wp_customize->add_section($top_store_pro_main_header_srch_clr);

$top_store_pro_below_header_header_clr = new  top_store_WP_Customize_Section($wp_customize,'top-store-below-header-header-clr', array(
    'title'    => __('Header','top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-below-header-clr',
    'priority' => 2,
));
$wp_customize->add_section($top_store_pro_below_header_header_clr);

// header category
$top_store_pro_main_header_cat_clr = new  top_store_WP_Customize_Section($wp_customize,'top-store-main-header-cat-clr', array(
    'title'    => __('Category','top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-below-header-clr',
    'priority' => 3,
));
$wp_customize->add_section($top_store_pro_main_header_cat_clr);
/****************/
//Sidebar
/****************/
$top_store_sidebar_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-sidebar-color', array(
    'title'    => __('Primary Sidebar', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'priority' => 1,
));
$wp_customize->add_section( $top_store_sidebar_color );
/****************/
//Secondary Sidebar
/****************/
$top_store_secondary_sidebar_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-secondary-sidebar-color', array(
    'title'    => __('Secondary Sidebar', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'priority' => 1,
));
$wp_customize->add_section( $top_store_secondary_sidebar_color );
/****************/
//footer
/****************/
$top_store_footer_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-footer-color', array(
    'title'    => __('Footer', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'priority' => 1,
));
$wp_customize->add_section( $top_store_footer_color );

$top_store_abv_footer_clr = new  top_store_WP_Customize_Section($wp_customize,'top-store-abv-footer-clr', array(
    'title'    => __('Above Footer','top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-footer-color',
    'priority' => 1,
));
$wp_customize->add_section( $top_store_abv_footer_clr);

$top_store_footer_widget_clr = new  top_store_WP_Customize_Section($wp_customize,'top-store-footer-widget-clr', array(
    'title'    => __('Footer Widget','top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-footer-color',
    'priority' => 2,
));
$wp_customize->add_section($top_store_footer_widget_clr);

$top_store_btm_footer_clr = new  top_store_WP_Customize_Section($wp_customize,'top-store-btm-footer-clr', array(
    'title'    => __('Below Footer','top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-footer-color',
    'priority' => 3,
));
$wp_customize->add_section( $top_store_btm_footer_clr);

/****************/
//Woocommerce color
/****************/
$top_store_woo_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-woo-color', array(
    'title'    => __('Woocommerce', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'priority' => 4,
));
$wp_customize->add_section( $top_store_woo_color );
// product
$top_store_woo_prdct_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-woo-prdct-color', array(
    'title'    => __('Product', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-woo-color',
    'priority' => 1,
));
$wp_customize->add_section( $top_store_woo_prdct_color );

// sale
$top_store_woo_prdct_sale_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-woo-prdct-sale-color', array(
    'title'    => __('Sale Badge', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-woo-color',
    'priority' => 2,
));
$wp_customize->add_section( $top_store_woo_prdct_sale_color );
// single product
$top_store_woo_prdct_single_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-woo-prdct-single-color', array(
    'title'    => __('Single Product', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-woo-color',
    'priority' => 3,
));
$wp_customize->add_section( $top_store_woo_prdct_single_color );

/*************************/
// Frontpage
/*************************/
$top_store_front_page_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-front-page-color', array(
    'title'    => __('Frontpage Sections', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'priority' => 4,
));
$wp_customize->add_section($top_store_front_page_color);

$top_store_top_slider_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-top-slider-color', array(
    'title'    => __('Top Slider', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 1,
));
$wp_customize->add_section($top_store_top_slider_color);

$top_store_cat_slider_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-cat-slider-color', array(
    'title'    => __('Woo Category', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 2,
));
$wp_customize->add_section($top_store_cat_slider_color);

$top_store_product_slider_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-product-slider-color', array(
    'title'    => __('Product Carousel', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 3,
));
$wp_customize->add_section($top_store_product_slider_color);

$top_store_product_cat_slide_tab_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-product-cat-slide-tab-color', array(
    'title'    => __('Tabbed Product Carousel', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 3,
));
$wp_customize->add_section($top_store_product_cat_slide_tab_color);

$top_store_product_list_slide_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-product-list-slide-color', array(
    'title'    => __('Product List Carousel', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 4,
));
$wp_customize->add_section($top_store_product_list_slide_color);

$top_store_product_list_tab_slide_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-product-list-tab-slide-color', array(
    'title'    => __('Tabbed Product List Carousel', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 5,
));
$wp_customize->add_section($top_store_product_list_tab_slide_color);

$top_store_banner_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-banner-color', array(
    'title'    => __('Banner', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($top_store_banner_color);

$top_store_ribbon_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-ribbon-color', array(
    'title'    => __('Ribbon', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($top_store_ribbon_color);

$top_store_brand_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-brand-color', array(
    'title'    => __('Brand', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($top_store_brand_color);

$top_store_highlight_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-highlight-color', array(
    'title'    => __('Highlight', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($top_store_highlight_color);

$top_store_big_featured_color = new  top_store_WP_Customize_Section($wp_customize,'top-store-big-featured-color', array(
    'title'    => __('Big Featured Product', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($top_store_big_featured_color);
/****************/
//custom section
/****************/
$top_store_custom_one_color = new top_store_WP_Customize_Section($wp_customize,'top-store-custom-one-color', array(
    'title'    => __('Custom Section One', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($top_store_custom_one_color);

$top_store_custom_two_color = new top_store_WP_Customize_Section($wp_customize,'top-store-custom-two-color', array(
    'title'    => __('Custom Section Two', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($top_store_custom_two_color);

$top_store_custom_three_color = new top_store_WP_Customize_Section($wp_customize,'top-store-custom-three-color', array(
    'title'    => __('Custom Section Three', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($top_store_custom_three_color);

$top_store_custom_four_color = new top_store_WP_Customize_Section($wp_customize,'top-store-custom-four-color', array(
    'title'    => __('Custom Section Four', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($top_store_custom_four_color);

$top_store_custom_five_color = new top_store_WP_Customize_Section($wp_customize,'top-store-custom-five-color', array(
    'title'    => __('Top Custom Section', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'section'  => 'top-store-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($top_store_custom_five_color);


/*********************/
// Page Content Color
/*********************/
$top_store_custom_page_content_color = new top_store_WP_Customize_Section($wp_customize,'top-store-page-content-color', array(
    'title'    => __('Content Color', 'top-store-pro'),
    'panel'    => 'top-store-panel-color-background',
    'priority' => 2,
));
$wp_customize->add_section($top_store_custom_page_content_color);
/******************/
// Shop Page
/******************/
$top_store_woo_shop = new top_store_WP_Customize_Section( $wp_customize, 'top-store-woo-shop', array(
    'title'    => __( 'Product Style', 'top-store-pro' ),
     'panel'    => 'woocommerce',
     'priority' => 2,
));
$wp_customize->add_section( $top_store_woo_shop );

$top_store_woo_single_product = new top_store_WP_Customize_Section( $wp_customize, 'top-store-woo-single-product', array(
    'title'    => __( 'Single Product', 'top-store-pro' ),
     'panel'    => 'woocommerce',
     'priority' => 3,
));
$wp_customize->add_section($top_store_woo_single_product );

$top_store_woo_cart_page = new top_store_WP_Customize_Section( $wp_customize, 'top-store-woo-cart-page', array(
    'title'    => __( 'Cart Page', 'top-store-pro' ),
     'panel'    => 'woocommerce',
     'priority' => 4,
));
$wp_customize->add_section($top_store_woo_cart_page);

$top_store_woo_shop_page = new top_store_WP_Customize_Section( $wp_customize, 'top-store-woo-shop-page', array(
    'title'    => __( 'Shop Page', 'top-store-pro' ),
     'panel'    => 'woocommerce',
     'priority' => 4,
));
$wp_customize->add_section($top_store_woo_shop_page);

/*************************/
/*Typography Panel*/
/*************************/
$wp_customize->add_panel('top-store-panel-typography', array(
                'priority' => 3,
                'title'    => __('Typography', 'top-store-pro'),
));
$top_store_section_base_typo = new  top_store_WP_Customize_Section($wp_customize, 'top-store-section-base-typo', array(
    'title' =>  __('Base Typography', 'top-store-pro'),
    'panel' => 'top-store-panel-typography',
    'priority' => 2,
));
$wp_customize->add_section($top_store_section_base_typo);
$top_store_section_title_typo = new  top_store_WP_Customize_Section($wp_customize, 'top-store-section-title-typo', array(
    'title' =>  __('Title', 'top-store-pro'),
    'panel' => 'top-store-panel-typography',
    'priority' => 3,
));
$wp_customize->add_section($top_store_section_title_typo);

$top_store_section_content_typo = new  top_store_WP_Customize_Section($wp_customize, 'top-store-section-content-typo', array(
    'title' =>  __('Content', 'top-store-pro'),
    'panel' => 'top-store-panel-typography',
    'priority' => 4,
));
$wp_customize->add_section($top_store_section_content_typo);
/*****************************/
// Template
/*****************************/
$wp_customize->add_panel('top-store-panel-inner-pagetemplate', array(
                'priority' => 4,
                'title'    => __('Inner Page Template ', 'top-store-pro'),
));
// Faq
$top_store_section_faq_templ = new  top_store_WP_Customize_Section($wp_customize, 'top-store-section-faq-templ', array(
    'title' =>  __('Faq', 'top-store-pro'),
    'panel' => 'top-store-panel-inner-pagetemplate',
    'priority' => 2,
));
$wp_customize->add_section($top_store_section_faq_templ);
// Contact
$top_store_section_contact_templ = new  top_store_WP_Customize_Section($wp_customize, 'top-store-section-contact-templ', array(
    'title' =>  __('Contact Us', 'top-store-pro'),
    'panel' => 'top-store-panel-inner-pagetemplate',
    'priority' => 3,
));
$wp_customize->add_section($top_store_section_contact_templ); 