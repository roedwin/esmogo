<?php 
/******************/
//Main Header
/******************/
// background divider
$wp_customize->add_setting('top_store_divide_main_hdr_bg', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_divide_main_hdr_bg',
            array(
        'section'     => 'top-store-main-header-header-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Background','top-store-pro' ),
        'priority'    => 1,
)));
// BG color
 $wp_customize->add_setting('top_store_main_hd_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_main_hd_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-header-clr',
        'settings'   => 'top_store_main_hd_bg_clr',
        'priority'   => 2,
    ) ) 
 );  

// Registers abv_header_background settings
    $wp_customize->add_setting( 'top_store_pro_main_header_background_image_url', array(
        'sanitize_callback' => 'esc_url',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_main_header_background_image_id', array(
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_main_header_background_repeat', array(
        'default' => 'no-repeat',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_main_header_background_size', array(
        'default' => 'auto',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_main_header_background_attach', array(
        'default' => 'scroll',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_setting( 'top_store_pro_main_header_background_position', array(
        'default' => 'center center',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    // Registers example_background control
    $wp_customize->add_control(
        new Top_Store_Customize_Custom_Background_Control(
            $wp_customize,
            'top_store_pro_main_header_background_image',
            array(
                'label'     => esc_html__( 'Background Image', 'top-store-pro' ),
                'section'   => 'top-store-main-header-header-clr',
                'priority'   => 2,
                'settings'    => array(
                    'image_url' => 'top_store_pro_main_header_background_image_url',
                    'image_id' => 'top_store_pro_main_header_background_image_id',
                    'repeat' => 'top_store_pro_main_header_background_repeat', // Use false to hide the field
                    'size' => 'top_store_pro_main_header_background_size',
                    'position' => 'top_store_pro_main_header_background_position',
                    'attach' => 'top_store_pro_main_header_background_attach'
                )
            )
        )
    );
//divider
$wp_customize->add_setting('top_store_pro_main_header_sitetitle', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_pro_main_header_sitetitle',
            array(
        'section'     => 'top-store-main-header-header-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Site Title','top-store-pro' ),
        'priority'    => 3,
)));

// title color
$wp_customize->add_setting('top_store_pro_main_header_sitetitle_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_main_header_sitetitle_clr', array(
        'label'      => __('Title Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-header-clr',
        'settings'   => 'top_store_pro_main_header_sitetitle_clr',
        'priority' => 4,
    ) ) 
 );
// title hover color
$wp_customize->add_setting('top_store_pro_main_header_sitetitle_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_main_header_sitetitle_hvr_clr', array(
        'label'      => __('Title Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-header-clr',
        'settings'   => 'top_store_pro_main_header_sitetitle_hvr_clr',
        'priority' => 5,
    ) ) 
 );

// tagline color
$wp_customize->add_setting('top_store_pro_main_header_sitetagline_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_main_header_sitetagline_clr', array(
        'label'      => __('Tagline Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-header-clr',
        'settings'   => 'top_store_pro_main_header_sitetagline_clr',
        'priority' =>6,
    ) ) 
 );

// content text
$wp_customize->add_setting('top_store_divide_main_hdr_content', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_divide_main_hdr_content',
            array(
        'section'     => 'top-store-main-header-header-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Main Header Content','top-store-pro' ),
        'priority'    => 8,
)));

$wp_customize->add_setting('top_store_main_content_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_main_content_txt_clr', array(
        'label'      => __('Small Text Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-header-clr',
        'settings'   => 'top_store_main_content_txt_clr',
        'priority' => 11,
    ) ) 
 );

$wp_customize->add_setting('top_store_main_content_link_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_main_content_link_clr', array(
        'label'      => __('Link & Icon Color ', 'top-store-pro' ),
        'section'    => 'top-store-main-header-header-clr',
        'settings'   => 'top_store_main_content_link_clr',
        'priority'   => 12,
    ) ) 
 );

/*********************/
// Menu Color
/*********************/
//divider
$wp_customize->add_setting('top_store_pro_main_header_menu_color', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_pro_main_header_menu_color',
            array(
        'section'     => 'top-store-main-header-menu-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Menu Color','top-store-pro' ),
        'priority'    => 2,
)));
$wp_customize->add_setting('top_store_pro_main_header_menu_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_main_header_menu_link_clr', array(
        'label'      => __('Link Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-menu-clr',
        'settings'   => 'top_store_pro_main_header_menu_link_clr',
        'priority'   => 3,
    ) ) 
 );

// link hover color
$wp_customize->add_setting('top_store_pro_main_header_menu_link_hvr_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_main_header_menu_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-menu-clr',
        'settings'   => 'top_store_pro_main_header_menu_link_hvr_clr',
        'priority'   => 4,
    ) ) 
 );

/********************/
//Main Header SubMenu
/********************/
//divider
$wp_customize->add_setting('top_store_pro_main_header_sbmenu_color', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_pro_main_header_sbmenu_color',
            array(
        'section'     => 'top-store-main-header-menu-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Sub Menu Color','top-store-pro' ),
        'priority'    => 6,
)));
// background color
$wp_customize->add_setting('top_store_pro_main_header_sbmenu_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_pro_main_header_sbmenu_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-menu-clr',
        'settings'   => 'top_store_pro_main_header_sbmenu_bg_clr',
        'priority'   => 7,
    ) ) 
 );

// link color
$wp_customize->add_setting('top_store_pro_main_header_sbmenu_link_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_main_header_sbmenu_link_clr', array(
        'label'      => __('Link Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-menu-clr',
        'settings'   => 'top_store_pro_main_header_sbmenu_link_clr',
        'priority'   => 8,
    ) ) 
 );
// link hover color
$wp_customize->add_setting('top_store_pro_main_header_sbmenu_link_hvr_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_main_header_sbmenu_link_hvr_clr', array(
        'label'      => __('Link Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-menu-clr',
        'settings'   => 'top_store_pro_main_header_sbmenu_link_hvr_clr',
        'priority'   => 9,
    ) ) 
 );
// link/text bg hvr color
$wp_customize->add_setting('top_store_pro_main_header_sbmenu_link_hvr_bg_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_pro_main_header_sbmenu_link_hvr_bg_clr', array(
        'label'      => __('Link Background Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-menu-clr',
        'settings'   => 'top_store_pro_main_header_sbmenu_link_hvr_bg_clr',
        'priority'   => 10,
    ) ) 
 );

/**********************/
// category
/**********************/
// background color
$wp_customize->add_setting('top_store_pro_main_header_cat_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_pro_main_header_cat_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-cat-clr',
        'settings'   => 'top_store_pro_main_header_cat_bg_clr',
        'priority'   => 7,
    ) ) 
 );
$wp_customize->add_setting('top_store_pro_main_header_cat_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_main_header_cat_clr', array(
        'label'      => __('Text & Icon Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-cat-clr',
        'settings'   => 'top_store_pro_main_header_cat_clr',
        'priority'   => 8,
    ) ) 
 );

$wp_customize->add_setting('top_store_pro_main_header_cat_dropdwn_color', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_pro_main_header_cat_dropdwn_color',
            array(
        'section'     => 'top-store-main-header-cat-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Drop Down','top-store-pro' ),
        'priority'    => 9,
)));
// background color
$wp_customize->add_setting('top_store_pro_main_header_cat_drp_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_pro_main_header_cat_drp_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-cat-clr',
        'settings'   => 'top_store_pro_main_header_cat_drp_bg_clr',
        'priority'   => 10,
    ) ) 
 );
$wp_customize->add_setting('top_store_pro_main_header_cat_drp_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_main_header_cat_drp_clr', array(
        'label'      => __('Text Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-cat-clr',
        'settings'   => 'top_store_pro_main_header_cat_drp_clr',
        'priority'   => 11,
    ) ) 
 );

$wp_customize->add_setting('top_store_pro_main_header_cat_drp_hvr_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_main_header_cat_drp_hvr_clr', array(
        'label'      => __('Text Hover Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-cat-clr',
        'settings'   => 'top_store_pro_main_header_cat_drp_hvr_clr',
        'priority'   => 12,
    ) ) 
 );

/**********************/
// Search
/**********************/
// background color
$wp_customize->add_setting('top_store_pro_main_header_srch_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_pro_main_header_srch_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-srch-clr',
        'settings'   => 'top_store_pro_main_header_srch_bg_clr',
        'priority'   => 1,
    ) ) 
 );

$wp_customize->add_setting('top_store_pro_main_header_srch_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_main_header_srch_clr', array(
        'label'      => __('Text Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-srch-clr',
        'settings'   => 'top_store_pro_main_header_srch_clr',
        'priority'   => 2,
    ) ) 
 );

$wp_customize->add_setting('top_store_pro_main_header_srch_btn', array(
        'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control( new top_store_Misc_Control( $wp_customize, 'top_store_pro_main_header_srch_btn',
            array(
        'section'     => 'top-store-main-header-srch-clr',
        'type'        => 'custom_message',
        'description' => wp_kses_post('Button','top-store-pro' ),
        'priority'    => 3,
)));

$wp_customize->add_setting('top_store_pro_main_header_srch_btn_bg_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Top_Store_Customizer_Color_Control($wp_customize,'top_store_pro_main_header_srch_btn_bg_clr', array(
        'label'      => __('Background Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-srch-clr',
        'settings'   => 'top_store_pro_main_header_srch_btn_bg_clr',
        'priority'   => 4,
    ) ) 
 );

$wp_customize->add_setting('top_store_pro_main_header_srch_btn_clr', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_pro_main_header_srch_btn_clr', array(
        'label'      => __('Icon Color', 'top-store-pro' ),
        'section'    => 'top-store-main-header-srch-clr',
        'settings'   => 'top_store_pro_main_header_srch_btn_clr',
        'priority'   => 5,
    ) ) 
 );