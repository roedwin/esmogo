<?php 
$wp_customize->add_setting('top_store_title_fontfamily', array(
                'sanitize_callback' => 'sanitize_text_field',
                'default'           => top_store_get_option('top_store_title_fontfamily'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_title_fontfamily', array(
                    'label'       => esc_html__( 'font family', 'top-store-pro' ),
                    'name'        => 'top_store_title_fontfamily',
                    'section'     => 'top-store-section-title-typo',
                    'type'        => 'opnshp-font-family',
					'connect'     => 'top_store_title_fontweight',
                    'ast_inherit' => __( 'Default System Font', 'top-store-pro' ),
                    
                )
        )
);
$wp_customize->add_setting(
            'top_store_title_fontweight', array(
                'sanitize_callback' => 'top_store_sanitize_font_weight',
                'default'           => top_store_get_option('top_store_title_fontweight'),
            )
        );
$wp_customize->add_control(
            new Top_Store_Control_Typography(
                $wp_customize, 'top_store_title_fontweight', array(
                    'label'       => esc_html__( 'Weight', 'top-store-pro' ),
                    'name'        =>'top_store_title_fontweight',
                    'section'     => 'top-store-section-title-typo',
                    'type'        => 'opnshp-font-weight',
					'connect'     => 'top_store_title_fontfamily',
                    'ast_inherit' => __( 'Default', 'top-store-pro' ),
                )
        )
);
//Text-transform
$wp_customize->add_setting('top_store_title_text_transform', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
));
$wp_customize->add_control( 'top_store_title_text_transform', array(
        'settings' => 'top_store_title_text_transform',
        'label'    => __('Text Transform','top-store-pro'),
        'section'  => 'top-store-section-title-typo',
        'type'     => 'select',
        'choices'    => array(
        ''           => __( 'Default', 'top-store-pro' ),
        'none'       => __( 'None', 'top-store-pro' ),
        'capitalize' => __( 'Capitalize', 'top-store-pro' ),
        'uppercase'  => __( 'Uppercase', 'top-store-pro' ),
        'lowercase'  => __( 'Lowercase', 'top-store-pro' ),    
        ),
));