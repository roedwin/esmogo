<?php 
 if ( class_exists( 'Top_Store_Repeater' ) ) {
            $wp_customize->add_setting(
        'top_store_faq_content', array(
        'sanitize_callback' => 'Top_Store_Repeater_sanitize',  
        'default'           => top_store_Defaults_Models::instance()->get_faq_default(),
                )
            );

            $wp_customize->add_control(
                new Top_Store_Repeater(
                    $wp_customize, 'top_store_faq_content', array(
                        'label'                                => esc_html__( 'Faq Content', 'top-store-pro' ),
                        'section'                              => 'top-store-section-faq-templ',
                        'priority'                             => 15,
                        'add_field_label'                      => esc_html__( 'Add new Faq', 'top-store-pro' ),
                        'item_name'                            => esc_html__( 'Faq', 'top-store-pro' ),
                        
                        'customizer_repeater_title_control'    => true,   
                        'customizer_repeater_subtitle_control'    => false, 

                        'customizer_repeater_text_control'    => true,  

                        'customizer_repeater_image_control'    => false,  
                        'customizer_repeater_link_control'     => false,
                        'customizer_repeater_repeater_control' => false,  
                                         
                        
                    ),'Topstore_Faq_Repeater'
                )
            );
        }
 if ( class_exists( 'Top_Store_Customize_Control_Tabs' ) ) {

      $wp_customize->add_setting(
               'top_store_faq_tab', array(
               'sanitize_callback' => 'sanitize_text_field',
       ));

    $wp_customize->add_control(
               new Top_Store_Customize_Control_Tabs(
                   $wp_customize, 'top_store_faq_tab', array(
                       'section' => 'top-store-section-faq-templ',
                       'tabs'    => array(
                           'general'    => array(
                            'nicename' => esc_html__( 'Settings', 'top-store-pro' ),
                            'controls' => array(
                                   'top_store_faq_content',
                                   'top_store_faq_doc',
                               ),
                           ),
                           'style' => array(
                           'nicename' => esc_html__( 'Color & Bg', 'top-store-pro' ),
                           'controls' => array(
                                   
                                 'top_store_faq_background_color',
                                 'top_store_faq_title_color',
                                 'top_store_faq_text_color',
                                 'top_store_faq_text_color',
                                 'top_store_faq_title_bg_color',
                                 'top_store_faq_symbol_color'

                               ),
                           ),
                       ),
                   )
               )
     );
}


// Color Option For Contact Section
   $wp_customize->add_setting('top_store_faq_background_color', array(
       'default'           => '',
       'capability'        => 'edit_theme_options',
       'sanitize_callback' => 'top_store_sanitize_color',
       'transport'         => 'postMessage',
   ));
$wp_customize->add_control(
   new Top_Store_Customizer_Color_Control($wp_customize,'top_store_faq_background_color', array(
       'label'      => __('Background Color', 'top-store-pro' ),
       'section'    => 'top-store-section-faq-templ',
   ) )
);


$wp_customize->add_setting('top_store_faq_title_color', array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage',
));
$wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'top_store_faq_title_color', array(
            'label'      => __('Faq Heading Color', 'top-store-pro' ),
            'section'    => 'top-store-section-faq-templ',
) ) );

$wp_customize->add_setting('top_store_faq_text_color', array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage',
));
$wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'top_store_faq_text_color', array(
            'label'      => __('Faq Description Color', 'top-store-pro' ),
            'section'    => 'top-store-section-faq-templ',
) ) );

 $wp_customize->add_setting('top_store_faq_title_bg_color', array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage',
));
    $wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'top_store_faq_title_bg_color', array(
            'label'      => __('Faq Heading Background Color', 'top-store-pro' ),
            'section'    => 'top-store-section-faq-templ',
) ) );

    $wp_customize->add_setting('top_store_faq_symbol_color', array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage',
));
    $wp_customize->add_control( 
            new WP_Customize_Color_Control($wp_customize,'top_store_faq_symbol_color', array(
            'label'      => __('Faq Symbol Color', 'top-store-pro' ),
            'section'    => 'top-store-section-faq-templ',
) ) );

    $wp_customize->add_setting('top_store_faq_doc', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_faq_doc',
            array(
        'section'     => 'top-store-section-faq-templ',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/top-store-pro/#faq-page',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));