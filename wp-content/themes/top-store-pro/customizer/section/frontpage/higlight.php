<?php 
$wp_customize->add_setting( 'top_store_disable_highlight_sec', array(
                'default'               => false,
                'sanitize_callback'     => 'top_store_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_store_disable_highlight_sec', array(
                'label'                 => esc_html__('Disable Section', 'top-store-pro'),
                'type'                  => 'checkbox',
                'section'               => 'top_store_highlight',
                'settings'              => 'top_store_disable_highlight_sec',
            ) ) );

// section heading
// $wp_customize->add_setting('top_store_hglgt_heading', array(
//         'default' => __('Highlight Feature','top-store-pro'),
//         'capability'        => 'edit_theme_options',
//         'sanitize_callback' => 'top_store_sanitize_text',
//         'transport'         => 'postMessage',
// ));
// $wp_customize->add_control( 'top_store_hglgt_heading', array(
//         'label'    => __('Section Heading', 'top-store-pro'),
//         'section'  => 'top_store_highlight',
//          'type'       => 'text',
// ));

//Highlight Content Via Repeater
      if ( class_exists( 'Top_Store_Repeater' ) ) {
            $wp_customize->add_setting(
        'top_store_pro_highlight_content', array(
        'sanitize_callback' => 'Top_Store_Repeater_sanitize',  
        'default'           => top_store_Defaults_Models::instance()->get_feature_default(),
                )
            );

            $wp_customize->add_control(
                new Top_Store_Repeater(
                    $wp_customize, 'top_store_pro_highlight_content', array(
                        'label'                                => esc_html__( 'Highlight Content', 'top-store-pro' ),
                        'section'                              => 'top_store_highlight',
                        'priority'                             => 15,
                        'add_field_label'                      => esc_html__( 'Add new Feature', 'top-store-pro' ),
                        'item_name'                            => esc_html__( 'Feature', 'top-store-pro' ),
                        
                        'customizer_repeater_title_control'    => true, 
                        'customizer_repeater_color_control'		=>	false, 
                        'customizer_repeater_color2_control' 	=> false,
                        'customizer_repeater_icon_control'	   => true,
                        'customizer_repeater_subtitle_control' => true, 

                        'customizer_repeater_text_control'    => false,  

                        'customizer_repeater_image_control'    => false,  
                        'customizer_repeater_link_control'     => false,
                        'customizer_repeater_repeater_control' => false,  
                                         
                        
                    ),'top_store_Ship_Repeater'
                )
            );
        }


  $wp_customize->add_setting('top_store_highlight_doc', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
  $wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_highlight_doc',
            array(
        'section'     => 'top_store_highlight',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/top-store-pro/#highlight-section',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));