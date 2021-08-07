<?php
/**
 * Category Section Customizer Settings
 */
$wp_customize->add_setting( 'top_store_disable_feature_product_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'top_store_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_store_disable_feature_product_sec', array(
                'label'                 => esc_html__('Disable Section', 'top-store-pro'),
                'type'                  => 'checkbox',
                'section'               => 'top_store_product_big_feature',
                'settings'              => 'top_store_disable_feature_product_sec',
            ) ) );
// section heading
$wp_customize->add_setting('top_store_feature_product_heading', array(
        'default' => __('Big Featured Slider','top-store-pro'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'top_store_feature_product_heading', array(
        'label'    => __('Section Heading', 'top-store-pro'),
        'section'  => 'top_store_product_big_feature',
         'type'       => 'text',
));
//= Choose All Category  =   
    if (class_exists( 'top_store_Customize_Control_Checkbox_Multiple')) {
   $wp_customize->add_setting('top_store_feature_product_tab_list', array(
        'default'           => '',
        'sanitize_callback' => 'top_store_checkbox_explode'
    ));
    $wp_customize->add_control(new top_store_Customize_Control_Checkbox_Multiple(
            $wp_customize,'top_store_feature_product_tab_list', array(
        'settings'=> 'top_store_feature_product_tab_list',
        'label'   => __( 'Choose Categories To Show', 'top-store-pro' ),
        'section' => 'top_store_product_big_feature',
        'choices' => top_store_get_category_list(array('taxonomy' =>'product_cat'),false),
        ) 
    ));

}  
$wp_customize->add_setting('top_store_feature_product_optn', array(
        'default'        => 'recent',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_select',
    ));
$wp_customize->add_control( 'top_store_feature_product_optn', array(
        'settings' => 'top_store_feature_product_optn',
        'label'   => __('Choose Option','top-store-pro'),
        'section' => 'top_store_product_big_feature',
        'type'    => 'select',
        'choices'    => array(
        'recent'     => __('Recent','top-store-pro'),
        'featured'   => __('Featured','top-store-pro'),
        'random'     => __('Random','top-store-pro'),
            
        ),
    ));

// Add an option to disable the logo.
  $wp_customize->add_setting( 'top_store_feature_product_slider_optn', array(
    'default'           => false,
    'sanitize_callback' => 'top_store_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new top_store_Toggle_Control( $wp_customize, 'top_store_feature_product_slider_optn', array(
    'label'       => esc_html__( 'Slide Auto Play', 'top-store-pro' ),
    'section'     => 'top_store_product_big_feature',
    'type'        => 'toggle',
    'settings'    => 'top_store_feature_product_slider_optn',
  ) ) );
  $wp_customize->add_setting('top_store_feature_product_slider_speed', array(
        'default' =>'3000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_number',
    ));
  $wp_customize->add_control( 'top_store_feature_product_slider_speed', array(
            'label'       => __('Speed', 'top-store-pro'),
            'description' =>__('Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000','top-store-pro'),
            'section'     => 'top_store_product_big_feature',
            'type'        => 'number',
  ));
$wp_customize->add_setting( 'top_store_feature_product_slider_zero_padding', array(
                'default'               => false,
                'sanitize_callback'     => 'top_store_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_store_feature_product_slider_zero_padding', array(
                'label'                 => esc_html__('Disable Content Padding', 'top-store-pro'),
                'type'                  => 'checkbox',
                'section'               => 'top_store_product_big_feature',
                'settings'              => 'top_store_feature_product_slider_zero_padding',
            ) ) );
$wp_customize->add_setting('top_store_feature_product_slider_note', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_feature_product_slider_note',
            array(
        'section'     => 'top_store_product_big_feature',
        'type'        => 'custom_message',
        'description' => esc_html__( 'To display Big Image Product first set the Featured Product, then it will show Featured Product in your section.','top-store-pro'),
        'priority'   =>100,
    )));


$wp_customize->add_setting('top_store_feature_product_slider_doc', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_feature_product_slider_doc',
            array(
        'section'     => 'top_store_product_big_feature',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/top-store-pro/#big-featured',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));