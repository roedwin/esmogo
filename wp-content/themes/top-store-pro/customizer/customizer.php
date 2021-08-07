<?php 
/**
 * all customizer setting includeed
 *
 * @param  
 * @return mixed|string
 */
function top_store_customize_register( $wp_customize ){

//view pro feature
// require TOP_STORE_THEME_DIR . '/customizer/view-pro-feature.php';	
//Registered panel and section
require TOP_STORE_THEME_DIR . '/customizer/register-panels-and-sections.php';	
//site identity
require TOP_STORE_THEME_DIR . '/customizer/section/layout/header/set-identity.php';
require TOP_STORE_THEME_DIR . '/customizer/section/layout/header/header.php';	
//Header
require TOP_STORE_THEME_DIR . '/customizer/section/layout/header/above-header.php';	
require TOP_STORE_THEME_DIR . '/customizer/section/layout/header/main-header.php';
require TOP_STORE_THEME_DIR . '/customizer/section/layout/header/loader.php';
//Footer
require TOP_STORE_THEME_DIR . '/customizer/section/layout/footer/above-footer.php';
require TOP_STORE_THEME_DIR . '/customizer/section/layout/footer/widget-footer.php';
require TOP_STORE_THEME_DIR . '/customizer/section/layout/footer/bottom-footer.php';
//Front Page
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/top-slider.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/category-tab.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/product-slide.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/category-slider.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/product-list.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/category-list-tab.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/ribbon.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/banner.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/brand.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/higlight.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/product-bigfeature.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/custom-one.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/custom-two.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/custom-three.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/custom-four.php';
require TOP_STORE_THEME_DIR . '/customizer/section/frontpage/custom-five.php';
//section ordering
require TOP_STORE_THEME_DIR . '/customizer/section-ordering.php';
//social Icon
require TOP_STORE_THEME_DIR . '/customizer/section/layout/social-icon/social-icon.php';
//Blog
require TOP_STORE_THEME_DIR . '/customizer/section/layout/blog/blog.php';
//Color Option
require TOP_STORE_THEME_DIR . '/customizer/section/color/global-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/above-header-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/main-header-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/below-header-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/sticky-header-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/mobile-pan-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/canvas-color.php';

require TOP_STORE_THEME_DIR . '/customizer/section/color/above-footer-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/bottom-footer-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/footer-widget-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/sidebar-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/secondary-sidebar-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/content-color.php';
//woo-color
require TOP_STORE_THEME_DIR . '/customizer/section/color/woo-product-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/woo-single-color.php';
//woo-product
require TOP_STORE_THEME_DIR . '/customizer/section/woo/product.php';
require TOP_STORE_THEME_DIR . '/customizer/section/woo/single-product.php';
require TOP_STORE_THEME_DIR . '/customizer/section/woo/cart.php';
require TOP_STORE_THEME_DIR . '/customizer/section/woo/shop.php';
//FrontPage
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/top-slider-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/category-slider-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/product-slider-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/category-tab-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/product-list-slider.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/product-list-tab-slider.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/banner-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/ribbon-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/brand-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/highlight-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/big-featured-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/custom-one-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/custom-two-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/custom-three-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/custom-four-color.php';
require TOP_STORE_THEME_DIR . '/customizer/section/color/frontpage/custom-five-color.php';
//typography
require TOP_STORE_THEME_DIR . '/customizer/section/typo/base-typography.php';
require TOP_STORE_THEME_DIR . '/customizer/section/typo/title-typography.php';
require TOP_STORE_THEME_DIR . '/customizer/section/typo/content-typography.php';
//inner page templates
require TOP_STORE_THEME_DIR . '/customizer/section/inner-page/faq-page.php';
require TOP_STORE_THEME_DIR . '/customizer/section/inner-page/contact-page.php';
// scroller
if ( class_exists('top_store_Customize_Control_Scroll')){
      $scroller = new top_store_Customize_Control_Scroll();
  }
}
add_action('customize_register','top_store_customize_register');
function top_store_is_json( $string ){
    return is_string( $string ) && is_array( json_decode( $string, true ) ) ? true : false;
}