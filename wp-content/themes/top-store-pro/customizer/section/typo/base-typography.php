<?php 
$wp_customize->add_setting('top_store_body_fontfamily', array(
                'sanitize_callback' => 'sanitize_text_field',
                'default'           => top_store_get_option('top_store_body_fontfamily'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_body_fontfamily', array(
                    'label'       => esc_html__( 'Font Family', 'top-store-pro' ),
                    'name'        => 'top_store_body_fontfamily',
                    'section'     => 'top-store-section-base-typo',
                    'type'        => 'opnshp-font-family',
					'connect'     => 'top_store_body_fontweight',
                    'ast_inherit' => __( 'Default System Font', 'top-store-pro' ),
                    
                )
        )
);
$wp_customize->add_setting(
            'top_store_body_fontweight', array(
                'sanitize_callback' => 'top_store_sanitize_font_weight',
                'default'           => top_store_get_option('top_store_body_fontweight'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_body_fontweight', array(
                    'label'       => esc_html__( 'Font Weight', 'top-store-pro' ),
                    'name'        =>'top_store_body_fontweight',
                    'section'     => 'top-store-section-base-typo',
                    'type'        => 'opnshp-font-weight',
					'connect'     => 'top_store_body_fontfamily',
                    'ast_inherit' => __( 'Default', 'top-store-pro' ),
                )
        )
);
//Text-transform
$wp_customize->add_setting('top_store_body_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'top_store_body_text_transform', array(
        'settings' => 'top_store_body_text_transform',
        'label'    => __('Text Transform','top-store-pro'),
        'section'  => 'top-store-section-base-typo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'top-store-pro' ),
        'none'       => __( 'None', 'top-store-pro' ),
        'capitalize' => __( 'Capitalize', 'top-store-pro' ),
        'uppercase'  => __( 'Uppercase', 'top-store-pro' ),
        'lowercase'  => __( 'Lowercase', 'top-store-pro' ),    
        ),
));
/*******************/
// font-size
/*******************/
if ( class_exists( 'top_store_WP_Customizer_Range_Value_Control' ) ){
$wp_customize->add_setting(
            'top_store_body_font_size', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '13',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_body_font_size', array(
                    'label'       => esc_html__( 'Font-Size', 'top-store-pro' ),
                    'section'     => 'top-store-section-base-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
// font line-height
$wp_customize->add_setting(
            'top_store_body_font_line_height', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '21',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize,'top_store_body_font_line_height', array(
                    'label'       => esc_html__( 'Line-Height', 'top-store-pro' ),
                    'section'     => 'top-store-section-base-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 50,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
// font letter spacing
$wp_customize->add_setting(
                'top_store_body_font_letter_spacing', array(
                'sanitize_callback' => 'top_store_sanitize_range_value',
                'default'           => '0.8',
                'transport'         => 'postMessage',
            )
        );
$wp_customize->add_control(
            new top_store_WP_Customizer_Range_Value_Control(
                $wp_customize, 'top_store_body_font_letter_spacing', array(
                    'label'       => esc_html__( 'Letter-Spacing', 'top-store-pro' ),
                    'section'     => 'top-store-section-base-typo',
                    'type'        => 'range-value',
                    'input_attr'  => array(
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ),
                    'media_query' => true,
                    'sum_type'    => true,
                )
        )
    );
}