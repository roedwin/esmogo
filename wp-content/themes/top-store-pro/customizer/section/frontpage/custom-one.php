<?php
/**
 * First Custom Section  Customizer Settings
 */
$wp_customize->add_setting( 'top_store_custom_section1_hide',
                array(
                    'default'  => '1',
                    'sanitize_callback' => 'top_store_sanitize_checkbox',
                 ));
$wp_customize->add_control( 'top_store_custom_section1_hide',
                array(
                    'type'        => 'checkbox',
                    'label'       => esc_html__('Disable section', 'top-store-pro'),
                    'priority'   => 1,
                    'section'     => 'top_store_1_custom_sec',
                ));
$wp_customize->add_setting('top_store_custom_1_heading', 
      array(
        'default' => __('First Custom Section', 'top-store-pro'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_text',
        'transport'         => 'postMessage',
));
    $wp_customize->add_control( 'top_store_custom_1_heading', 
    array(
        'label'    => __('First Custom Section', 'top-store-pro'),
        'section'  => 'top_store_1_custom_sec',
         'type'       => 'text',
));

/******************/
//custom section widget
/******************/
if(class_exists('Top_Store_WP_Customize_Control_Radio_Image')){
               $wp_customize->add_setting(
               'top_store_custom_section1_widget_layout', array(
               'default'           => 'cs-1-1',
               'sanitize_callback' => 'top_store_sanitize_radio',
            )
        );
$wp_customize->add_control(
            new  Top_Store_WP_Customize_Control_Radio_Image(
                $wp_customize, 'top_store_custom_section1_widget_layout', array(
                    'label'    => esc_html__( 'Layout','top-store-pro'),
                    'section'  => 'top_store_1_custom_sec',
                    'choices'  => array(
                        'cs-1-1'   => array(
                            'url' => TOP_STORE_CUSTOM_LAYOUT_1,
                        ),
                        'cs-1-2' => array(
                            'url' => TOP_STORE_CUSTOM_LAYOUT_2,
                        ),
                        'cs-1-3' => array(
                            'url' => TOP_STORE_CUSTOM_LAYOUT_3,
                        ),
                        'cs-1-4' => array(
                            'url' => TOP_STORE_FOOTER_WIDGET_LAYOUT_4,
                        ),
                        
                    ),
                )
            )
        );
    } 
/******************************/
/* Widget Redirect
/****************************/
if (class_exists('top_store_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'top_store_custom_section1_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new top_store_Widegt_Redirect(
                $wp_customize, 'top_store_custom_section1_widget_redirect', array(
                    'section'      => 'top_store_1_custom_sec',
                    'button_text'  => esc_html__( 'Go To Widget', 'top-store-pro' ),
                    'button_class' => 'focus-customizer-widget-redirect',  
                )
            )
        );
} 
$wp_customize->add_setting( 'top_store_custom_section1_zero_padding', array(
                'default'               => false,
                'sanitize_callback'     => 'top_store_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_store_custom_section1_zero_padding', array(
                'label'                 => esc_html__('Disable Content Padding', 'top-store-pro'),
                'type'                  => 'checkbox',
                'section'               => 'top_store_1_custom_sec',
                'settings'              => 'top_store_custom_section1_zero_padding',
            ) ) );

  $wp_customize->add_setting('top_store_custom_section_doc', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
  $wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_custom_section_doc',
            array(
        'section'     => 'top_store_1_custom_sec',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/top-store-pro/#custom-section',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));