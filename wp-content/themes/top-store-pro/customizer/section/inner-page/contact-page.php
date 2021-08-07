<?php
 $wp_customize->add_setting('top_store_contact_shortcode', array(
            'default'           => '[lead-form form-id=1 title=Contact Us]',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'top_store_sanitize_textarea'
         ));
  $wp_customize->add_control('top_store_contact_shortcode', array(
            'label'    => __('Contact Us Shortcode', 'top-store-pro'),
            'description' =>__('Lead Form Builder Plugin Shortcode Insert.','top-store-pro'),
            'section'  => 'top-store-section-contact-templ',
            'settings' => 'top_store_contact_shortcode',
            'type'       => 'textarea',
 ));


 $wp_customize->add_setting('top_store_contact_address1', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_text',
        'transport'         => 'postMessage',
));
    $wp_customize->add_control( 'top_store_contact_address1', array(
        'label'    => __('Address', 'top-store-pro'),
        'section'  => 'top-store-section-contact-templ',
         'type'    => 'textarea',
));

$wp_customize->add_setting('top_store_contact_address2', array(
        'default' => '212-938-3621, 917-204-2105 ',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_textarea',
        'transport'         => 'postMessage',
));
    $wp_customize->add_control( 'top_store_contact_address2', array(
        'label'    => __('Mobile Number', 'top-store-pro'),
        'section'  => 'top-store-section-contact-templ',
         'type'    => 'textarea',
));
$wp_customize->add_setting('top_store_contact_support', array(
        'default' => 'support@domain.com',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_text',
        'transport'         => 'postMessage',
));
    $wp_customize->add_control( 'top_store_contact_support', array(
        'label'    => __('Email', 'top-store-pro'),
        'section'  => 'top-store-section-contact-templ',
         'type'    => 'text',
));


  $wp_customize->add_setting('top_store_contact_hours', array(
        'default' => 'Everyday 9:00-17:00',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_text',
        'transport'         => 'postMessage',
));
    $wp_customize->add_control( 'top_store_contact_hours', array(
        'label'    => __('Working Hours', 'top-store-pro'),
        'section'  => 'top-store-section-contact-templ',
         'type'       => 'text',
));
 $wp_customize->add_setting('top_store_map_addrs', array(
        'default' => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_textarea_html',
        'transport'         => 'postMessage',
));
    $wp_customize->add_control( 'top_store_map_addrs', array(
        'label'    => __('Address', 'top-store-pro'),
        'section'  => 'top-store-section-contact-templ',
         'type'    => 'textarea',
));

     if ( class_exists( 'Top_Store_Customize_Control_Tabs' ) ) {

      $wp_customize->add_setting(
               'top_store_contact_tab', array(
               'sanitize_callback' => 'sanitize_text_field',
       ));

    $wp_customize->add_control(
               new Top_Store_Customize_Control_Tabs(
                   $wp_customize, 'top_store_contact_tab', array(
                       'section' => 'top-store-section-contact-templ',
                       'tabs'    => array(
                           'general'    => array(
                            'nicename' => esc_html__( 'Settings', 'top-store-pro' ),
                            'controls' => array(
                                   'top_store_contact_shortcode',
                                   
                                   'top_store_contact_address1',
                                   'top_store_contact_address2',
                                   'top_store_contact_support',
                                   'top_store_contact_hours',
                                   'top_store_map_addrs',
                                   'top_store_contact_doc',
                               ),
                           ),
                           'style' => array(
                           'nicename' => esc_html__( 'Color & Bg', 'top-store-pro' ),
                           'controls' => array(
                                   
                                 'top_store_contact_background_color',
                                 'top_store_contact_txt_color',
                                

                               ),
                           ),
                       ),
                   )
               )
     );
}

// Color Option For Contact Section
   $wp_customize->add_setting('top_store_contact_background_color', array(
       'default'           => '',
       'capability'        => 'edit_theme_options',
       'sanitize_callback' => 'top_store_sanitize_color',
       'transport'         => 'postMessage',
   ));
$wp_customize->add_control(
   new Top_Store_Customizer_Color_Control($wp_customize,'top_store_contact_background_color', array(
       'label'      => __('Background Color', 'top-store-pro' ),
       'section'    => 'top-store-section-contact-templ',
   ) )
);

$wp_customize->add_setting('top_store_contact_txt_color', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'top_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'top_store_contact_txt_color', array(
        'label'      => __('Text Color', 'top-store-pro' ),
        'section'    => 'top-store-section-contact-templ',
        'settings'   => 'top_store_contact_txt_color',
    ) ) 
 );

$wp_customize->add_setting('top_store_contact_doc', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_contact_doc',
            array(
        'section'     => 'top-store-section-contact-templ',
        'type'        => 'doc-link',
        'url'         => 'https://themehunk.com/docs/top-store-pro/#contact-page',
        'description' => esc_html__( 'To know more go with this', 'top-store-pro' ),
        'priority'   =>100,
    )));