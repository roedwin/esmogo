<?php 
/**
 * Typography Style
 */
function top_store_typography_style(){
$top_store_typography_style='';
//body-font
$top_store_body_fontfamily = get_theme_mod('top_store_body_fontfamily');
$top_store_body_fontweight = get_theme_mod('top_store_body_fontweight');
$top_store_body_text_transform = get_theme_mod('top_store_body_text_transform');
if($top_store_body_fontfamily!=='inherit'):
$top_store_typography_style.="body,.top-store-menu > li > a,button, input, optgroup, select, textarea,.thunk-woo-product-list .woocommerce-loop-product__title a, .thunk-cat-title a,.woocommerce .thunk-woo-product-list .price,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce ul.products li.product .woocommerce-loop-category__title, .woocommerce ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product h3,th, th a, dt, b, strong,.thunk-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .thunk-product-hover .add_to_cart_button, .woocommerce .thunk-product-hover a.th-button, .woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped, .woocommerce .thunk-product-hover a.th-button,.thunk-ribbon-content-col1 h3,.th-slide-subtitle,a.slide-btn, .th-slide-button,.product-slide-widget .slide-widget-title,.thunk-hglt-box h6,.th-hlight-title,.th-testimonial-title,.top-header .top-header-bar a,span.product-title,code, kbd, pre, samp,.page-contact .leadform-show-form label,.woocommerce ul.products .thunk-product-hover .add_to_cart_button, .woocommerce .thunk-product-hover a.th-button, .woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped, .woocommerce .thunk-product-hover a.th-button, .woocommerce ul.products li.product .add_to_cart_button, .woocommerce .added_to_cart.wc-forward{font-family:{$top_store_body_fontfamily}}";
endif;
$top_store_typography_style.="body,.top-store-menu > li > a,button, input, optgroup, select, textarea,.thunk-woo-product-list .woocommerce-loop-product__title a, .thunk-cat-title a,.woocommerce .thunk-woo-product-list .price,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce ul.products li.product .woocommerce-loop-category__title, .woocommerce ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product h3,th, th a, dt, b, strong,.thunk-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .thunk-product-hover .add_to_cart_button, .woocommerce .thunk-product-hover a.th-button, .woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped, .woocommerce .thunk-product-hover a.th-button,.th-slide-subtitle,a.slide-btn, .th-slide-button,.product-slide-widget .slide-widget-title,.thunk-hglt-box h6,.th-hlight-title,.th-testimonial-title,.top-header .top-header-bar a,span.product-title,code, kbd, pre, samp,.page-contact .leadform-show-form label,.woocommerce ul.products .thunk-product-hover .add_to_cart_button, .woocommerce .thunk-product-hover a.th-button, .woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped, .woocommerce .thunk-product-hover a.th-button, .woocommerce ul.products li.product .add_to_cart_button, .woocommerce .added_to_cart.wc-forward{font-weight:{$top_store_body_fontweight};text-transform:{$top_store_body_text_transform}}";

//Body 
function top_store_body_font_size_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= 'body{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function top_store_body_font_line_height_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= 'body{
   line-height: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function top_store_body_font_letter_spacing_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= 'body{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_body_font_size','top_store_body_font_size_responsive');
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_body_font_line_height','top_store_body_font_line_height_responsive');
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_body_font_letter_spacing','top_store_body_font_letter_spacing_responsive');

//title
$top_store_title_fontfamily = get_theme_mod('top_store_title_fontfamily');
$top_store_title_fontweight = get_theme_mod('top_store_title_fontweight');
$top_store_title_text_transform = get_theme_mod('top_store_title_text_transform');
if($top_store_title_fontfamily!=='inherit'):
$top_store_typography_style.=".site-title span a,.menu-category-list .toggle-title,#sidebar-primary h2.widget-title,.thunk-title .title,.page-head h1,h2.thunk-post-title, h1.thunk-post-title,.woocommerce div.product .product_title, section.related.products h2, section.upsells.products h2, .woocommerce #reviews #comments h2,.widget-footer h2.widget-title,.entry-content h2,.entry-content h3,#sidebar-secondary h2.widget-title,.leadform-show-form h2,.thunk-accordion .ac > .ac-q{font-family:{$top_store_title_fontfamily}}";
endif;
$top_store_typography_style.=".site-title span a,.menu-category-list .toggle-title,#sidebar-primary h2.widget-title,.thunk-title .title,.page-head h1,h2.thunk-post-title, h1.thunk-post-title,.woocommerce div.product .product_title, section.related.products h2, section.upsells.products h2, .woocommerce #reviews #comments h2,.widget-footer h2.widget-title,.entry-content h2,.entry-content h3,#sidebar-secondary h2.widget-title,.leadform-show-form h2,.thunk-accordion .ac > .ac-q{font-weight:{$top_store_title_fontweight};text-transform:{$top_store_title_text_transform}}";
//h1
$top_store_h1_fontfamily = get_theme_mod('top_store_h1_fontfamily');
$top_store_h1_fontweight = get_theme_mod('top_store_h1_fontweight');
$top_store_h1_text_transform = get_theme_mod('top_store_h1_text_transform');
if($top_store_h1_fontfamily!=='inherit'):
$top_store_typography_style.=".entry-content h1{font-family:{$top_store_h1_fontfamily}}";
endif;
$top_store_typography_style.=".entry-content h1{font-weight:{$top_store_h1_fontweight};text-transform:{$top_store_h1_text_transform}}";
//Body 
function top_store_h1_font_size_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h1{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function top_store_h1_font_line_height_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h1{
   line-height: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function top_store_h1_font_letter_spacing_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h1{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h1_font_size','top_store_h1_font_size_responsive');
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h1_font_line_height','top_store_h1_font_line_height_responsive');
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h1_font_letter_spacing','top_store_h1_font_letter_spacing_responsive');
//h2
$top_store_h2_fontfamily = get_theme_mod('top_store_h2_fontfamily');
$top_store_h2_fontweight = get_theme_mod('top_store_h2_fontweight');
$top_store_h2_text_transform = get_theme_mod('top_store_h2_text_transform');
if($top_store_h2_fontfamily!=='inherit'):
$top_store_typography_style.=".entry-content h2{font-family:{$top_store_h2_fontfamily}}";
endif;
$top_store_typography_style.=".entry-content h2{font-weight:{$top_store_h2_fontweight};text-transform:{$top_store_h2_text_transform}}";

function top_store_h2_font_size_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h2{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function top_store_h2_font_line_height_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h2{
   line-height: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function top_store_h2_font_letter_spacing_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h2{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h2_font_size','top_store_h2_font_size_responsive');
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h2_font_line_height','top_store_h2_font_line_height_responsive');
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h2_font_letter_spacing','top_store_h2_font_letter_spacing_responsive');

//h3
$top_store_h3_fontfamily = get_theme_mod('top_store_h3_fontfamily');
$top_store_h3_fontweight = get_theme_mod('top_store_h3_fontweight');
$top_store_h3_text_transform = get_theme_mod('top_store_h3_text_transform');
if($top_store_h3_fontfamily!=='inherit'):
$top_store_typography_style.=".entry-content h3{font-family:{$top_store_h3_fontfamily}}";
endif;
$top_store_typography_style.=".entry-content h3{font-weight:{$top_store_h3_fontweight};text-transform:{$top_store_h3_text_transform}}";

function top_store_h3_font_size_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h3{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function top_store_h3_font_line_height_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h3{
   line-height: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function top_store_h3_font_letter_spacing_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h3{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h3_font_size','top_store_h3_font_size_responsive');
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h3_font_line_height','top_store_h3_font_line_height_responsive');
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h3_font_letter_spacing','top_store_h3_font_letter_spacing_responsive');

//h4
$top_store_h4_fontfamily = get_theme_mod('top_store_h4_fontfamily');
$top_store_h4_fontweight = get_theme_mod('top_store_h4_fontweight');
$top_store_h4_text_transform = get_theme_mod('top_store_h4_text_transform');
if($top_store_h4_fontfamily!=='inherit'):
$top_store_typography_style.=".entry-content h4{font-family:{$top_store_h4_fontfamily}}";
endif;
$top_store_typography_style.=".entry-content h4{font-weight:{$top_store_h4_fontweight};text-transform:{$top_store_h4_text_transform}}";
function top_store_h4_font_size_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h4{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function top_store_h4_font_line_height_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h4{
   line-height: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function top_store_h4_font_letter_spacing_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h4{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h4_font_size','top_store_h4_font_size_responsive');
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h4_font_line_height','top_store_h4_font_line_height_responsive');
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h4_font_letter_spacing','top_store_h4_font_letter_spacing_responsive');

//h5
$top_store_h5_fontfamily = get_theme_mod('top_store_h5_fontfamily');
$top_store_h5_fontweight = get_theme_mod('top_store_h5_fontweight');
$top_store_h5_text_transform = get_theme_mod('top_store_h5_text_transform');
if($top_store_h5_fontfamily!=='inherit'):
$top_store_typography_style.=".entry-content h5{font-family:{$top_store_h5_fontfamily}}";
endif;
$top_store_typography_style.=".entry-content h5{font-weight:{$top_store_h5_fontweight};text-transform:{$top_store_h5_text_transform}}";
function top_store_h5_font_size_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h5{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function top_store_h5_font_line_height_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h5{
   line-height: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function top_store_h5_font_letter_spacing_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h5{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h5_font_size','top_store_h5_font_size_responsive');
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h5_font_line_height','top_store_h5_font_line_height_responsive');
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h5_font_letter_spacing','top_store_h5_font_letter_spacing_responsive');

//h6
$top_store_h6_fontfamily = get_theme_mod('top_store_h6_fontfamily');
$top_store_h6_fontweight = get_theme_mod('top_store_h6_fontweight');
$top_store_h6_text_transform = get_theme_mod('top_store_h6_text_transform');
if($top_store_h6_fontfamily!=='inherit'):
$top_store_typography_style.=".entry-content h6{font-family:{$top_store_h6_fontfamily}}";
endif;
$top_store_typography_style.=".entry-content h6{font-weight:{$top_store_h6_fontweight};text-transform:{$top_store_h6_text_transform}}";
function top_store_h6_font_size_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h6{
   font-size: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function top_store_h6_font_line_height_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h6{
   line-height: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
function top_store_h6_font_letter_spacing_responsive( $value, $dimension = 'desktop'){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
    break;
    }
   $custom_css .= '.entry-content h6{
   letter-spacing: ' . $v3 . 'px;
   }';
   $custom_css = top_store_pro_add_media_query($dimension, $custom_css);
   return $custom_css;
}
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h6_font_size','top_store_h6_font_size_responsive');
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h6_font_line_height','top_store_h6_font_line_height_responsive');
$top_store_typography_style.= top_store_responsive_slider_funct('top_store_h6_font_letter_spacing','top_store_h6_font_letter_spacing_responsive');

return $top_store_typography_style;
}