<?php 
//h1
$wp_customize->add_setting('top_store_h1', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_h1',
            array(
        'section'    => 'top-store-section-content-typo',
        'type'      => 'custom_message',
        'description'       => esc_html__( 'Heading 1', 'top-store-pro' ),
        'priority'   =>1,
    )));


$wp_customize->add_setting('top_store_h1_fontfamily', array(
                'sanitize_callback' => 'sanitize_text_field',
                'default'           => top_store_get_option('top_store_h1_fontfamily'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_h1_fontfamily', array(
                    'label'       => esc_html__( 'Font Family', 'top-store-pro' ),
                    'name'        => 'top_store_h1_fontfamily',
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'opnshp-font-family',
					'connect'     => 'top_store_h1_fontweight',
                    'ast_inherit' => __( 'Default System Font', 'top-store-pro' ),
                    'priority'   =>2,
                    
                )
        )
);
$wp_customize->add_setting(
            'top_store_h1_fontweight', array(
                'sanitize_callback' => 'top_store_sanitize_font_weight',
                'default'           => top_store_get_option('top_store_h1_fontweight'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_h1_fontweight', array(
                    'label'       => esc_html__( 'Font Weight', 'top-store-pro' ),
                    'name'        =>'top_store_h1_fontweight',
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'opnshp-font-weight',
					'connect'     => 'top_store_h1_fontfamily',
                    'ast_inherit' => __( 'Default', 'top-store-pro' ),
                     'priority'   =>3,
                )
        )
);
//Text-transform
$wp_customize->add_setting('top_store_h1_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'top_store_h1_text_transform', array(
        'settings' => 'top_store_h1_text_transform',
        'label'    => __('Text Transform','top-store-pro'),
        'section'  => 'top-store-section-content-typo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'top-store-pro' ),
        'none'       => __( 'None', 'top-store-pro' ),
        'capitalize' => __( 'Capitalize', 'top-store-pro' ),
        'uppercase'  => __( 'Uppercase', 'top-store-pro' ),
        'lowercase'  => __( 'Lowercase', 'top-store-pro' ),    
        ),
         'priority'   =>4,
));

/*******************/
// font-size
/*******************/
if ( class_exists( 'top_store_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'top_store_h1_font_size', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '24',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_h1_font_size', array(
                    'label'       => esc_html__( 'Font-Size', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                     'priority'   =>5,
                )
        )
    );
// font line-height
$wp_customize->add_setting(
            'top_store_h1_font_line_height', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '38',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize,'top_store_h1_font_line_height', array(
                    'label'       => esc_html__( 'Line-Height', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 50,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                    'priority'   =>6,
                )
        )
    );
// font letter spacing
$wp_customize->add_setting(
                'top_store_h1_font_letter_spacing', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '0.8',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_h1_font_letter_spacing', array(
                    'label'       => esc_html__( 'Letter-Spacing', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                     'priority'   =>7,
                )
        )
    );
}

//h2
$wp_customize->add_setting('top_store_h2', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_h2',
            array(
        'section'    => 'top-store-section-content-typo',
        'type'      => 'custom_message',
        'description'       => esc_html__( 'Heading 2', 'top-store-pro' ),
        'priority'   =>8,
    )));


$wp_customize->add_setting('top_store_h2_fontfamily', array(
                'sanitize_callback' => 'sanitize_text_field',
                'default'           => top_store_get_option('top_store_h2_fontfamily'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_h2_fontfamily', array(
                    'label'       => esc_html__( 'Font Family', 'top-store-pro' ),
                    'name'        => 'top_store_h2_fontfamily',
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'opnshp-font-family',
                    'connect'     => 'top_store_h2_fontweight',
                    'ast_inherit' => __( 'Default System Font', 'top-store-pro' ),
                    'priority'   =>9,
                    
                )
        )
);
$wp_customize->add_setting(
            'top_store_h2_fontweight', array(
                'sanitize_callback' => 'top_store_sanitize_font_weight',
                'default'           => top_store_get_option('top_store_h2_fontweight'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_h2_fontweight', array(
                    'label'       => esc_html__( 'Font Weight', 'top-store-pro' ),
                    'name'        =>'top_store_h2_fontweight',
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'opnshp-font-weight',
                    'connect'     => 'top_store_h2_fontfamily',
                    'ast_inherit' => __( 'Default', 'top-store-pro' ),
                     'priority'   =>10,
                )
        )
);
//Text-transform
$wp_customize->add_setting('top_store_h2_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'top_store_h2_text_transform', array(
        'settings' => 'top_store_h2_text_transform',
        'label'    => __('Text Transform','top-store-pro'),
        'section'  => 'top-store-section-content-typo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'top-store-pro' ),
        'none'       => __( 'None', 'top-store-pro' ),
        'capitalize' => __( 'Capitalize', 'top-store-pro' ),
        'uppercase'  => __( 'Uppercase', 'top-store-pro' ),
        'lowercase'  => __( 'Lowercase', 'top-store-pro' ),    
        ),
         'priority'   =>11,
));

/*******************/
// font-size
/*******************/
if ( class_exists( 'top_store_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'top_store_h2_font_size', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '22',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_h2_font_size', array(
                    'label'       => esc_html__( 'Font-Size', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                     'priority'   =>12,
                )
        )
    );
// font line-height
$wp_customize->add_setting(
            'top_store_h2_font_line_height', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '35',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize,'top_store_h2_font_line_height', array(
                    'label'       => esc_html__( 'Line-Height', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 50,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                    'priority'   =>13,
                )
        )
    );
// font letter spacing
$wp_customize->add_setting(
                'top_store_h2_font_letter_spacing', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '0.8',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_h2_font_letter_spacing', array(
                    'label'       => esc_html__( 'Letter-Spacing', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                     'priority'   =>14,
                )
        )
    );
}
//h3
$wp_customize->add_setting('top_store_h3', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_h3',
            array(
        'section'    => 'top-store-section-content-typo',
        'type'      => 'custom_message',
        'description'       => esc_html__( 'Heading 3', 'top-store-pro' ),
        'priority'   =>15,
    )));


$wp_customize->add_setting('top_store_h3_fontfamily', array(
                'sanitize_callback' => 'sanitize_text_field',
                'default'           => top_store_get_option('top_store_h3_fontfamily'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_h3_fontfamily', array(
                    'label'       => esc_html__( 'Font Family', 'top-store-pro' ),
                    'name'        => 'top_store_h3_fontfamily',
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'opnshp-font-family',
                    'connect'     => 'top_store_h3_fontweight',
                    'ast_inherit' => __( 'Default System Font', 'top-store-pro' ),
                    'priority'   =>16,
                    
                )
        )
);
$wp_customize->add_setting(
            'top_store_h3_fontweight', array(
                'sanitize_callback' => 'top_store_sanitize_font_weight',
                'default'           => top_store_get_option('top_store_h3_fontweight'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_h3_fontweight', array(
                    'label'       => esc_html__( 'Font Weight', 'top-store-pro' ),
                    'name'        =>'top_store_h3_fontweight',
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'opnshp-font-weight',
                    'connect'     => 'top_store_h3_fontfamily',
                    'ast_inherit' => __( 'Default', 'top-store-pro' ),
                     'priority'   =>17,
                )
        )
);
//Text-transform
$wp_customize->add_setting('top_store_h3_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'top_store_h3_text_transform', array(
        'settings' => 'top_store_h3_text_transform',
        'label'    => __('Text Transform','top-store-pro'),
        'section'  => 'top-store-section-content-typo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'top-store-pro' ),
        'none'       => __( 'None', 'top-store-pro' ),
        'capitalize' => __( 'Capitalize', 'top-store-pro' ),
        'uppercase'  => __( 'Uppercase', 'top-store-pro' ),
        'lowercase'  => __( 'Lowercase', 'top-store-pro' ),    
        ),
         'priority'   =>18,
));

/*******************/
// font-size
/*******************/
if ( class_exists( 'top_store_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'top_store_h3_font_size', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '20',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_h3_font_size', array(
                    'label'       => esc_html__( 'Font-Size', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                     'priority'   =>19,
                )
        )
    );
// font line-height
$wp_customize->add_setting(
            'top_store_h3_font_line_height', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '32',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize,'top_store_h3_font_line_height', array(
                    'label'       => esc_html__( 'Line-Height', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 50,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                    'priority'   =>20,
                )
        )
    );
// font letter spacing
$wp_customize->add_setting(
                'top_store_h3_font_letter_spacing', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '0.8',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_h3_font_letter_spacing', array(
                    'label'       => esc_html__( 'Letter-Spacing', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                     'priority'   =>21,
                )
        )
    );
}
//h4
$wp_customize->add_setting('top_store_h4', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_h4',
            array(
        'section'    => 'top-store-section-content-typo',
        'type'      => 'custom_message',
        'description'       => esc_html__( 'Heading 4', 'top-store-pro' ),
        'priority'   =>22,
    )));


$wp_customize->add_setting('top_store_h4_fontfamily', array(
                'sanitize_callback' => 'sanitize_text_field',
                'default'           => top_store_get_option('top_store_h4_fontfamily'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_h4_fontfamily', array(
                    'label'       => esc_html__( 'Font Family', 'top-store-pro' ),
                    'name'        => 'top_store_h4_fontfamily',
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'opnshp-font-family',
                    'connect'     => 'top_store_h4_fontweight',
                    'ast_inherit' => __( 'Default System Font', 'top-store-pro' ),
                    'priority'   =>23,
                    
                )
        )
);
$wp_customize->add_setting(
            'top_store_h4_fontweight', array(
                'sanitize_callback' => 'top_store_sanitize_font_weight',
                'default'           => top_store_get_option('top_store_h4_fontweight'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_h4_fontweight', array(
                    'label'       => esc_html__( 'Font Weight', 'top-store-pro' ),
                    'name'        =>'top_store_h4_fontweight',
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'opnshp-font-weight',
                    'connect'     => 'top_store_h4_fontfamily',
                    'ast_inherit' => __( 'Default', 'top-store-pro' ),
                     'priority'   =>24,
                )
        )
);
//Text-transform
$wp_customize->add_setting('top_store_h4_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'top_store_h4_text_transform', array(
        'settings' => 'top_store_h4_text_transform',
        'label'    => __('Text Transform','top-store-pro'),
        'section'  => 'top-store-section-content-typo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'top-store-pro' ),
        'none'       => __( 'None', 'top-store-pro' ),
        'capitalize' => __( 'Capitalize', 'top-store-pro' ),
        'uppercase'  => __( 'Uppercase', 'top-store-pro' ),
        'lowercase'  => __( 'Lowercase', 'top-store-pro' ),    
        ),
         'priority'   =>25,
));

/*******************/
// font-size
/*******************/
if ( class_exists( 'top_store_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'top_store_h4_font_size', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '18',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_h4_font_size', array(
                    'label'       => esc_html__( 'Font-Size', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                    'priority'   =>26,
                )
        )
    );
// font line-height
$wp_customize->add_setting(
            'top_store_h4_font_line_height', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '29',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize,'top_store_h4_font_line_height', array(
                    'label'       => esc_html__( 'Line-Height', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 50,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                    'priority'   =>27,
                )
        )
    );
// font letter spacing
$wp_customize->add_setting(
                'top_store_h4_font_letter_spacing', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '0.8',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_h4_font_letter_spacing', array(
                    'label'       => esc_html__( 'Letter-Spacing', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                     'priority'   =>28,
                )
        )
    );
}
//h5
$wp_customize->add_setting('top_store_h5', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_h5',
            array(
        'section'    => 'top-store-section-content-typo',
        'type'      => 'custom_message',
        'description'       => esc_html__( 'Heading 5', 'top-store-pro' ),
        'priority'   =>29,
    )));
$wp_customize->add_setting('top_store_h5_fontfamily', array(
                'sanitize_callback' => 'sanitize_text_field',
                'default'           => top_store_get_option('top_store_h5_fontfamily'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_h5_fontfamily', array(
                    'label'       => esc_html__( 'Font Family', 'top-store-pro' ),
                    'name'        => 'top_store_h5_fontfamily',
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'opnshp-font-family',
                    'connect'     => 'top_store_h5_fontweight',
                    'ast_inherit' => __( 'Default System Font', 'top-store-pro' ),
                    'priority'    => 30,
                    
                )
        )
);
$wp_customize->add_setting(
            'top_store_h5_fontweight', array(
                'sanitize_callback' => 'top_store_sanitize_font_weight',
                'default'           => top_store_get_option('top_store_h5_fontweight'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_h5_fontweight', array(
                    'label'       => esc_html__( 'Font Weight', 'top-store-pro' ),
                    'name'        =>'top_store_h5_fontweight',
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'opnshp-font-weight',
                    'connect'     => 'top_store_h5_fontfamily',
                    'ast_inherit' => __( 'Default', 'top-store-pro' ),
                     'priority'   =>31,
                )
        )
);
//Text-transform
$wp_customize->add_setting('top_store_h5_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'top_store_h5_text_transform', array(
        'settings' => 'top_store_h5_text_transform',
        'label'    => __('Text Transform','top-store-pro'),
        'section'  => 'top-store-section-content-typo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'top-store-pro' ),
        'none'       => __( 'None', 'top-store-pro' ),
        'capitalize' => __( 'Capitalize', 'top-store-pro' ),
        'uppercase'  => __( 'Uppercase', 'top-store-pro' ),
        'lowercase'  => __( 'Lowercase', 'top-store-pro' ),    
        ),
         'priority'   =>32,
));

/*******************/
// font-size
/*******************/
if ( class_exists( 'top_store_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'top_store_h5_font_size', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '17',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_h5_font_size', array(
                    'label'       => esc_html__( 'Font-Size', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                    'priority'   =>33,
                )
        )
    );
// font line-height
$wp_customize->add_setting(
            'top_store_h5_font_line_height', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '27',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize,'top_store_h5_font_line_height', array(
                    'label'       => esc_html__( 'Line-Height', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 50,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                    'priority'   =>34,
                )
        )
    );
// font letter spacing
$wp_customize->add_setting(
                'top_store_h5_font_letter_spacing', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '0.8',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_h5_font_letter_spacing', array(
                    'label'       => esc_html__( 'Letter-Spacing', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                     'priority'   =>35,
                )
        )
    );
}

//h6
$wp_customize->add_setting('top_store_h6', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_h6',
            array(
        'section'    => 'top-store-section-content-typo',
        'type'      => 'custom_message',
        'description'       => esc_html__( 'Heading 6', 'top-store-pro' ),
        'priority'   =>36,
    )));
$wp_customize->add_setting('top_store_h6_fontfamily', array(
                'sanitize_callback' => 'sanitize_text_field',
                'default'           => top_store_get_option('top_store_h6_fontfamily'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_h6_fontfamily', array(
                    'label'       => esc_html__( 'Font Family', 'top-store-pro' ),
                    'name'        => 'top_store_h6_fontfamily',
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'opnshp-font-family',
                    'connect'     => 'top_store_h6_fontweight',
                    'ast_inherit' => __( 'Default System Font', 'top-store-pro' ),
                    'priority'    => 37,
                    
                )
        )
);
$wp_customize->add_setting(
            'top_store_h6_fontweight', array(
                'sanitize_callback' => 'top_store_sanitize_font_weight',
                'default'           => top_store_get_option('top_store_h6_fontweight'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_h6_fontweight', array(
                    'label'       => esc_html__( 'Font Weight', 'top-store-pro' ),
                    'name'        =>'top_store_h6_fontweight',
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'opnshp-font-weight',
                    'connect'     => 'top_store_h6_fontfamily',
                    'ast_inherit' => __( 'Default', 'top-store-pro' ),
                     'priority'   =>38,
                )
        )
);
//Text-transform
$wp_customize->add_setting('top_store_h6_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'top_store_h6_text_transform', array(
        'settings' => 'top_store_h6_text_transform',
        'label'    => __('Text Transform','top-store-pro'),
        'section'  => 'top-store-section-content-typo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'top-store-pro' ),
        'none'       => __( 'None', 'top-store-pro' ),
        'capitalize' => __( 'Capitalize', 'top-store-pro' ),
        'uppercase'  => __( 'Uppercase', 'top-store-pro' ),
        'lowercase'  => __( 'Lowercase', 'top-store-pro' ),    
        ),
         'priority'   =>39,
));

/*******************/
// font-size
/*******************/
if ( class_exists( 'top_store_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'top_store_h6_font_size', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '16',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_h6_font_size', array(
                    'label'       => esc_html__( 'Font-Size', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                    'priority'   =>40,
                )
        )
    );
// font line-height
$wp_customize->add_setting(
            'top_store_h6_font_line_height', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '25',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize,'top_store_h6_font_line_height', array(
                    'label'       => esc_html__( 'Line-Height', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 50,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                    'priority'   =>41,
                )
        )
    );
// font letter spacing
$wp_customize->add_setting(
                'top_store_h6_font_letter_spacing', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '0.8',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_h6_font_letter_spacing', array(
                    'label'       => esc_html__( 'Letter-Spacing', 'top-store-pro' ),
                    'section'     => 'top-store-section-content-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                     'priority'   =>42,
                )
        )
    );
}