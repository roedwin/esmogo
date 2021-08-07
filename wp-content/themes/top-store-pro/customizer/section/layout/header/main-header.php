<?php
// main header
// choose col layout
if(class_exists('Top_Store_WP_Customize_Control_Radio_Image')){
        $wp_customize->add_setting(
            'top_store_pro_main_header_layout', array(
                'default'           => 'mhdrfour',
                'sanitize_callback' => 'top_store_sanitize_radio',
            )
        );
$wp_customize->add_control(
            new Top_Store_WP_Customize_Control_Radio_Image(
                $wp_customize, 'top_store_pro_main_header_layout', array(
                    'label'    => esc_html__( 'Header Layout', 'top-store-pro' ),
                    'section'  => 'top-store-main-header',
                    'choices'  => array(
                        'mhdrfour' => array(
                            'url' => TOP_STORE_MAIN_HEADER_LAYOUT_FOUR,
                        ),
                        'mhdrfive' => array(
                            'url' => TOP_STORE_MAIN_HEADER_LAYOUT_FIVE,
                        ),
                        'mhdrsix' => array(
                            'url' => TOP_STORE_MAIN_HEADER_LAYOUT_SIX,
                        ),
                        'mhdrseven' => array(
                            'url' => TOP_STORE_MAIN_HEADER_LAYOUT_SEVEN,
                        ),
                                     
                    ),
                )
            )
        );
} 
/***********************************/  
// menu alignment
/***********************************/ 
$wp_customize->add_setting('top_store_menu_alignment', array(
                'default'               => 'left',
                'sanitize_callback'     => 'top_store_sanitize_select',
            ) );
$wp_customize->add_control( new top_store_Customizer_Buttonset_Control( $wp_customize, 'top_store_menu_alignment', array(
                'label'                 => esc_html__( 'Menu Alignment', 'top-store-pro' ),
                'section'               => 'top-store-main-header',
                'settings'              => 'top_store_menu_alignment',
                'choices'               => array(
                    'left'              => esc_html__( 'Left', 'top-store-pro' ),
                    'center'        => esc_html__( 'center', 'top-store-pro' ),
                    'right'             => esc_html__( 'Right', 'top-store-pro' ),
                ),
        ) ) );
//Main menu option
$wp_customize->add_setting('top_store_pro_main_header_option', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_select',
    ));
$wp_customize->add_control( 'top_store_pro_main_header_option', array(
        'settings' => 'top_store_pro_main_header_option',
        'label'    => __('Column 1','top-store-pro'),
        'section'  => 'top-store-main-header',
        'type'     => 'select',
        'choices'    => array(
        'none'       => __('None','top-store-pro'),
        'button'     => __('Button','top-store-pro'),
        'callto'     => __('Call-To','top-store-pro'),
        'widget'     => __('Widget','top-store-pro'),     
        ),
    ));
//**************/
// BUTTON TEXT //
//**************/
$wp_customize->add_setting('top_store_main_hdr_btn_txt', array(
        'default' => __('Button Text','top-store-pro'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'top_store_main_hdr_btn_txt', array(
        'label'    => __('Button Text', 'top-store-pro'),
        'section'  => 'top-store-main-header',
         'type'    => 'text',
));

$wp_customize->add_setting('top_store_main_hdr_btn_lnk', array(
        'default' => __('#','top-store-pro'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_text',
        
));
$wp_customize->add_control( 'top_store_main_hdr_btn_lnk', array(
        'label'    => __('Button Link', 'top-store-pro'),
        'section'  => 'top-store-main-header',
         'type'    => 'text',
));
/*****************/
// Call-to
/*****************/
$wp_customize->add_setting('top_store_main_hdr_calto_txt', array(
        'default' => __('Call To','top-store-pro'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'top_store_main_hdr_calto_txt', array(
        'label'    => __('Call To Text', 'top-store-pro'),
        'section'  => 'top-store-main-header',
         'type'    => 'text',
));

$wp_customize->add_setting('top_store_main_hdr_calto_nub', array(
        'default' => __('+1800090098','top-store-pro'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'top_store_main_hdr_calto_nub', array(
        'label'    => __('Call To Number', 'top-store-pro'),
        'section'  => 'top-store-main-header',
         'type'    => 'text',
));
// col1 widget redirection
if (class_exists('top_store_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'top_store_pro_main_header_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new top_store_Widegt_Redirect(
                $wp_customize, 'top_store_pro_main_header_widget_redirect', array(
                    'section'      => 'top-store-main-header',
                    'button_text'  => esc_html__( 'Go To Widget', 'top-store-pro' ),
                    'button_class' => 'focus-customizer-widget-redirect',  
                )
            )
        );
} 
/***********************************/  
// menu alignment
/***********************************/ 
$wp_customize->add_setting('top_store_mobile_menu_open', array(
                'default'               => 'left',
                'sanitize_callback'     => 'top_store_sanitize_select',
            ) );
$wp_customize->add_control( new top_store_Customizer_Buttonset_Control( $wp_customize, 'top_store_mobile_menu_open', array(
                'label'                 => esc_html__( 'Mobile Menu', 'top-store-pro' ),
                'section'               => 'top-store-main-header',
                'settings'              => 'top_store_mobile_menu_open',
                'choices'               => array(
                    'left'              => esc_html__( 'Left', 'top-store-pro' ),
                    'overcenter'        => esc_html__( 'center', 'top-store-pro' ),
                    'right'             => esc_html__( 'Right', 'top-store-pro' ),
                ),
        ) ) );
/***********************************/  
// Off Canvas Sidebar
/***********************************/ 
$wp_customize->add_setting('top_store_canvas_alignment', array(
        'default'        => 'cnv-none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_select',
    ));
$wp_customize->add_control( 'top_store_canvas_alignment', array(
        'settings' => 'top_store_canvas_alignment',
        'label'    => __('Off Canvas Sidebar','top-store-pro'),
        'section'  => 'top-store-main-header',
        'type'     => 'select',
        'choices'    => array(
        'cnv-none'          => __('None','top-store-pro'),
        'bfr-logo'      => __('Before logo','top-store-pro'),
        'aftr-logo'     => __('After logo','top-store-pro'),
        ),
    ));


/***********************************/  
// Sticky Header
/***********************************/ 
  $wp_customize->add_setting( 'top_store_pro_sticky_header', array(
    'default'           => false,
    'sanitize_callback' => 'top_store_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new top_store_Toggle_Control( $wp_customize, 'top_store_pro_sticky_header', array(
    'label'       => esc_html__( 'Sticky Header', 'top-store-pro' ),
    'section'     => 'top-store-main-header',
    'type'        => 'toggle',
    'settings'    => 'top_store_pro_sticky_header',
  ) ) );
  $wp_customize->add_setting( 'top_store_pro_sticky_header_disable_mobile', array(
    'default'           => false,
    'sanitize_callback' => 'top_store_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new top_store_Toggle_Control( $wp_customize, 'top_store_pro_sticky_header_disable_mobile', array(
    'label'       => esc_html__( 'Sticky Header Disable in Mobile', 'top-store-pro' ),
    'section'     => 'top-store-main-header',
    'type'        => 'toggle',
    'settings'    => 'top_store_pro_sticky_header_disable_mobile',
  ) ) );

  $wp_customize->add_setting('top_store_pro_sticky_header_effect', array(
        'default'        => 'scrldwmn',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_select',
    ));
$wp_customize->add_control( 'top_store_pro_sticky_header_effect', array(
        'settings' => 'top_store_pro_sticky_header_effect',
        'label'    => __('Sticky Header Effect','top-store-pro'),
        'section'  => 'top-store-main-header',
        'type'     => 'select',
        'choices'    => array(
        'scrltop'     => __('Effect One','top-store-pro'),
        'scrldwmn'    => __('Effect Two','top-store-pro'),
        ),
    ));
/******************/
// Disable in Mobile
/******************/
$wp_customize->add_setting( 'top_store_whislist_mobile_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'top_store_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_store_whislist_mobile_disable', array(
                'label'                 => esc_html__('Check to disable wishlist icon in mobile device', 'top-store-pro'),
                'type'                  => 'checkbox',
                'section'               => 'top-store-main-header',
                'settings'              => 'top_store_whislist_mobile_disable',
                'priority'   => 10,
            ) ) );

$wp_customize->add_setting( 'top_store_pro_account_mobile_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'top_store_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_store_pro_account_mobile_disable', array(
                'label'                 => esc_html__('Check to disable account icon in mobile device', 'top-store-pro'),
                'type'                  => 'checkbox',
                'section'               => 'top-store-main-header',
                'settings'              => 'top_store_pro_account_mobile_disable',
                'priority'   => 12,
            ) ) );

$wp_customize->add_setting( 'top_store_cart_mobile_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'top_store_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_store_cart_mobile_disable', array(
                'label'                 => esc_html__('Check to disable cart icon in mobile device', 'top-store-pro'),
                'type'                  => 'checkbox',
                'section'               => 'top-store-main-header',
                'settings'              => 'top_store_cart_mobile_disable',
                'priority'   => 13,
            ) ) );
// exclude header category
function top_store_get_category_id($arr='',$all=true){
    $cats = array();
    foreach ( get_categories($arr) as $categories => $category ){
       
        $cats[$category->term_id] = $category->name;
     }
     return $cats;
  }

   $wp_customize->add_setting('top_store_exclde_category', array(
        'default'           => '',
        'sanitize_callback' => 'top_store_checkbox_explode'
    ));
    $wp_customize->add_control(new top_store_Customize_Control_Checkbox_Multiple(
            $wp_customize,'top_store_exclde_category', array(
        'settings'=> 'top_store_exclde_category',
        'label'   => __( 'Choose Categories To Exclude', 'top-store-pro' ),
        'section' => 'top_store_exclde_cat_header',
        'choices' => top_store_get_category_id(array('taxonomy' =>'product_cat'),true),
        ) 
    )); 
/****************/
//doc link
/****************/
$wp_customize->add_setting('top_store_pro_main_header_doc_learn_more', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_pro_main_header_doc_learn_more',
            array(
        'section'    => 'top-store-main-header',
        'type'      => 'doc-link',
        'url'       => 'https://themehunk.com/docs/top-store-pro/#main-header',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));