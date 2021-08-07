<?php 
/**
 *
 *
 * @package      Top Store
 * @author       Top Store
 * @copyright   Copyright (c) 2019,  Top Store
 * @since        Top Store 1.0.0
 */
//General Section
if ( ! class_exists( 'WooCommerce' ) ){
    return;
}
/***************/
// Checkout
/***************/
$wp_customize->add_setting('top_store_woo_checkout_distraction_enable', array(
                'default'               => false,
                'sanitize_callback'     => 'top_store_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize,'top_store_woo_checkout_distraction_enable', array(
                'label'         => esc_html__('Enable Distraction Free Checkout.', 'top-store-pro'),
                'type'          => 'checkbox',
                'section'       => 'top-store-woo-checkout-page',
                'settings'      => 'top_store_woo_checkout_distraction_enable',
            ) ) );

/****************/
// doc link
/****************/
$wp_customize->add_setting('top_store_checkout_link_more', array(
    'sanitize_callback' => 'top_store_sanitize_text',
    ));
$wp_customize->add_control(new top_store_Misc_Control( $wp_customize, 'top_store_checkout_link_more',
            array(
        'section'     => 'top-store-woo-checkout-page',
        'type'        => 'custom_message',
        'description' => sprintf( wp_kses(__( 'To know more go with this <a target="_blank" href="%s">Doc</a> !', 'top-store-pro' ), array(  'a' => array( 'href' => array(),'target' => array() ) ) ), esc_url('https://themehunk.com/docs/top-store-theme/#checkout-page')),
        'priority'   =>30,
    )));