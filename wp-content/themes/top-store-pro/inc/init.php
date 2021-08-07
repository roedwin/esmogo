<?php 
/**
 * all file includeed
 *
 * @param  
 * @return mixed|string
 */
get_template_part( 'inc/admin-function');
get_template_part( 'inc/header-function');
get_template_part( 'inc/footer-function');
get_template_part( 'inc/blog-function');
//breadcrumbs
get_template_part( 'lib/breadcrumbs/breadcrumbs');

//custom-style
get_template_part( 'inc/top-store-custom-style');

//pagination
get_template_part( 'inc/pagination/pagination');
get_template_part( 'inc/pagination/infinite-scroll');
//typography
get_template_part( 'inc/class-top-store-filesystem');
get_template_part( 'inc/class-top-store-font-families');
get_template_part( 'inc/class-top-store-enqueue-script');
get_template_part( 'inc/top-store-typography-style');
//widget
get_template_part('inc/widget/widget-input');
get_template_part('inc/widget/product-widget-two');
get_template_part('inc/widget/product-widget-one');
get_template_part('inc/widget/product-widget-three');
get_template_part('inc/widget/product-widget-four');
get_template_part('inc/widget/about-us-widget');
get_template_part('inc/widget/testimonial-widget');
get_template_part('inc/widget/highlight-widget');
get_template_part('inc/widget/post-single-slide-widget');
get_template_part('inc/widget/product-widget-multi-slide');
// customizer
get_template_part('customizer/models/class-top-store-singleton');
get_template_part('customizer/models/class-top-store-defaults-models');
get_template_part('customizer/repeater/class-top-store-repeater');
get_template_part('customizer/extend-customizer/class-top-store-wp-customize-panel');
get_template_part('customizer/extend-customizer/class-top-store-wp-customize-section');
get_template_part('customizer/customizer-radio-image/class/class-top-store-customize-control-radio-image');
get_template_part('customizer/customizer-range-value/class/class-top-store-customizer-range-value-control');
get_template_part('customizer/customizer-scroll/class/class-top-store-customize-control-scroll');
get_template_part('customizer/customize-focus-section/top-store-focus-section');
get_template_part('customizer/color/class-control-color');
get_template_part('customizer/customize-buttonset/class-control-buttonset');
get_template_part('customizer/sortable/class-top-store-control-sortable');
get_template_part('customizer/background/class-top-store-background-image-control');
get_template_part('customizer/customizer-tabs/class-top-store-customize-control-tabs');
get_template_part('customizer/customizer-toggle/class-top-store-toggle-control');
//typography
get_template_part('/customizer/typography/class-top-store-control-typography');
get_template_part('customizer/custom-customizer');
get_template_part('customizer/customizer-constant');
get_template_part('customizer/customizer');
/******************************/
// woocommerce
/******************************/
get_template_part( 'inc/woocommerce/woo-core');
get_template_part( 'inc/woocommerce/woo-function');
get_template_part('inc/woocommerce/woocommerce-ajax');
