<?php 
/**
 * Custom Style for Top Store Theme.
 * @package     Top Store
 * @author      ThemeHunk
 * @copyright   Copyright (c) 2019, Top Store
 * @since       Top Store 1.0.0
 */
function top_store_custom_style(){
$top_store_style=""; 
$top_store_style.= top_store_responsive_slider_funct( 'top_store_pro_logo_width', 'top_store_pro_logo_width_responsive');

/**********************/
//Scheme Color
/**********************/
$top_store_color_scheme = esc_html(get_theme_mod('top_store_color_scheme','opn-light'));
$custombackground = esc_html(get_theme_mod('custom-background','#2f2f2f'));
if($top_store_color_scheme=='opn-dark'){
 $top_store_style.="body.top-store-dark{
    background:{$custombackground};
    color:#888;
}
body.top-store-dark a{
color:#999;
}
/**************************/
/* Header and Footer
/**************************/
body.top-store-dark .top-header-bar ,body.top-store-dark .top-header{
    border-bottom-color: #111;
}
body.top-store-dark .below-footer{
border-top-color: #111;
}
body.top-store-dark .top-header:before,body.top-store-dark .top-footer:before, body.top-store-dark .below-footer:before{
background:#111;
}
body.top-store-dark .top-header-bar, body.top-store-dark .top-header-bar a,body.top-store-dark .top-footer, body.top-store-dark .below-footer,body.top-store-dark .top-footer a, body.top-store-dark .below-footer a,body.top-store-dark .widget-footer,body.top-store-dark .widget-footer a{
    color: #999;
}
body.top-store-dark .main-header:before,body.top-store-dark .below-header:before,body.top-store-dark #sidebar-primary .top-store-widget-content,body.top-store-dark #sidebar-secondary .top-store-widget-content,body.top-store-dark .top-store-site section .content-wrap:before ,body.top-store-dark .widget-footer:before{
background-color: #1F1F1F;
border-color:#1F1F1F;
}
body.top-store-dark  .vert-brd:after {
border: 0.5px solid #666;
}
body.top-store-dark .menu-category-list ul[data-menu-style='vertical'],body.top-store-dark .menu-category-list ul[data-menu-style='vertical'] li ul.sub-menu,body.top-store-dark .thunk-product-cat-list li a,body.top-store-dark .sticky-header:before, .search-wrapper:before{
background:#1F1F1F;
border-color:#1F1F1F;
color:#999;
}
body.top-store-dark .top-footer {
    border-bottom-color: #1F1F1F;
}
body.top-store-dark .header-icon a,
body.top-store-dark .header-support-icon,
body.top-store-dark .th-hlight-title{
color:#999;
}
/**************************/
/* Sidebar
/**************************/
body.top-store-dark .main-header,body.top-store-dark .main-header a,body.top-store-dark #sidebar-primary .top-store-widget-content a,
body.top-store-dark #sidebar-secondary .top-store-widget-content a{
color:#999;
}
/**************************/
/* Widgets
/**************************/
body.top-store-dark .widget.woocommerce .widget-title, body.top-store-dark .open-widget-content .widget-title, .widget-title{
color:#fff;
}
body.top-store-dark .tagcloud a, body.top-store-dark .thunk-tags-wrapper a{
background:#111;
}
/**************************/
/* Frontpage
/**************************/
body.top-store-dark .thunk-product,body.top-store-dark .thunk-product-hover,body.top-store-dark .thunk-product:hover .thunk-product-hover::before,body.top-store-dark .thunk-product-list-section .thunk-list,body.top-store-dark .thunk-product-tab-list-section .thunk-list{
background:#111;
}
body.top-store-dark .thunk-title .title{
color:#fff;
}
body.top-store-dark .thunk-woo-product-list .thunk-product-wrap:hover .thunk-product,body.top-store-dark .thunk-product:hover .thunk-product-hover {
    box-shadow: 0 0 15px #111;
}
body.top-store-dark .total-number{
background-color:#111;
    border:1px solid #111;
}
body.top-store-dark .thunk-hglt-box h6{
color:#fff;
}
body.top-store-dark .thunk-hglt-box p,
body.top-store-dark .thunk-hglt-icon{
color:#999;
}
body.top-store-dark .thunk-highlight-col {
border-right-color: #111;
}
body.top-store-dark  #search-box input[type='text'], body.top-store-dark  select#product_cat,body.top-store-dark #search-box form,body.top-store-dark .below-header-bar #search-text::placeholder{
 background: #111;
 color:#999;
}
body.top-store-dark .thunk-wishlist a, body.top-store-dark .thunk-compare a,body.top-store-dark .sticky-header-col3 .thunk-icon .cart-icon a.cart-contents{
  color:#999;
}
body.top-store-dark .top-store-menu ul.sub-menu,body.top-store-dark .thunk-cat-tab ul.dropdown-link,body.top-store-dark ul.dropdown-link > li >a{
background:#111;
color:#999;
}
body.top-store-dark .top-store-menu li ul.sub-menu li a:hover{
background:#2f2f2f;
}
body.top-store-dark .top-store-menu > li > a,body.top-store-dark .top-store-menu li ul.sub-menu li a{
color:#999;
}
body.top-store-dark header__cat__item.dropdown a.more-cat,body.top-store-dark .thunk-slide.owl-carousel .owl-nav button.owl-prev, body.top-store-dark .thunk-slide.owl-carousel .owl-nav button.owl-next,body.top-store-dark .top-store-slide-post .owl-nav button.owl-prev, body.top-store-dark .top-store-slide-post .owl-nav button.owl-next,body.top-store-dark .header__cat__item.dropdown a.more-cat{
    background: #111;
    border: 1px solid #111;
}
body.top-store-dark .menu-toggle .menu-btn span{
background-color:#999;
}
body.top-store-dark .thunk-product-cat-list li a{
border-bottom-color:#111;
}
body.top-store-dark .slide-content-wrap {
    box-shadow: 0 0 15px #333;
}
input[type='text'], input[type='email'], input[type='url'], textarea, input[type='password'], input[type='tel'], input[type='search']{
  background: #111;
  border-color: #111;
}
body.top-store-dark .th-hlight{
  border-color: #111;
}
body.top-store-dark .th-search-wrapper{
  background: #1F1F1F;
}
body.top-store-dark select#product_cat{
  background: #111;
}
body.top-store-dark .th-slide-content-wrap{
  background: #111;
}
body.top-store-dark .th-slide-title,
body.top-store-dark .th-slide-subtitle{
  color: #999;
}
body.top-store-dark .thunk-cat-text{
  background: transparent;
  border: 0;
}
/**************************/
/*Shop Page*/
/**************************/
.top-store-dark .page-head h1{
color:#fff;
}
.top-store-dark #shop-product-wrap select,.top-store-dark .thunk-list-grid-switcher a {
border: 1px solid #111;
background:#111;
}
.top-store-dark .thunk-list-view .thunk-product .thunk-product-hover{
background:#111;
}
.top-store-dark .thunk-list-view .thunk-product:hover .thunk-product-hover{
box-shadow:none;
}
.top-store-dark.woocommerce nav.woocommerce-pagination .page-numbers{
background:#111;
}
.top-store-dark .open-cart{
background:#1f1f1f;
}
.top-store-dark .open-cart p.total, .top-store-dark .widget p.total{
color:#fff;
}
/**************************/
/*Blog Page ,Pages and single pages*/
/**************************/
.top-store-dark article.thunk-article,.top-store-dark article.thunk-post-article, .top-store-dark.single article, .no-results.not-found, .top-store-dark #error-404,.top-store-dark article.thunk-article,.top-store-dark article.thunk-post-article, .top-store-dark .single article, .top-store-dark .no-results.not-found, .top-store-dark #error-404,.top-store-dark .thunk-page .thunk-content-wrap{
  background:#1F1F1F;
}
.top-store-dark h2.thunk-post-title a, .top-store-dark h1.thunk-post-title a{
  color:#fff;
}
.top-store-dark .nav-links .page-numbers{
background:#111;
}
/**************************/
/*Product single pages*/
/**************************/
.top-store-dark .thunk-single-product-summary-wrap,.top-store-dark.woocommerce div.product .woocommerce-tabs .panel,.top-store-dark .product_meta,.top-store-dark section.related.products ul.products{
background:#1f1f1f;
}
.top-store-dark.woocommerce div.product .product_title, .top-store-dark section.related.products h2, .top-store-dark section.upsells.products h2, .top-store-dark.woocommerce #reviews #comments h2{
color:#fff;
}
.top-store-dark .comment-form textarea,.top-store-dark .comment-form input{
border-color:#111;
}
.top-store-dark .woocommerce-error, .top-store-dark .woocommerce-info, .top-store-dark .woocommerce-message{
background-color: #111;
    color: #999;
}
.top-store-dark .woocommerce-MyAccount-navigation ul li{
    border-bottom: 1px solid #000;
}
.top-store-dark.woocommerce-account .woocommerce-MyAccount-navigation{
background:#111;
}
.top-store-dark .ribbon-btn {
    background: #111;
}
.thunk-loadContainer:before {
    background: #333;
  }
.top-store-dark.woocommerce div.product form.cart .variations select{
background:#111;
color:#999;
}
.top-store-dark.woocommerce div.product div.images .woocommerce-product-gallery__wrapper .zoomImg {
    background-color: #111;
}
.top-store-dark .thunk-woo-product-list .woocommerce-loop-product__title a{
color:#999;

}
.top-store-dark .thunk-list-grid-switcher a:hover{
  color:#fff;
}
.top-store-dark #alm-quick-view-modal .alm-lightbox-content,.top-store-dark #alm-quick-view-content div.summary form.cart{
background:#222;
}
.top-store-dark #alm-quick-view-content .product_meta{
    border: 1px solid #111;
}
.top-store-dark .woocommerce-product-details__short-description{
border-top:1px solid #111;
} 
.top-store-dark .search-wrapper:before {
  background:#111;
}
body.top-store-dark .thunk-aboutus-page:before{
background:#1F1F1F;
}
@media screen and (max-width: 1024px){body.top-store-dark .thunk-icon .cart-icon a.cart-contents{
background:#111;
color:#999;
}

.sider.left,.sider.right{
background-color: #111; 
}

}";

}
/**************************/
// Above Header
/**************************/
    $top_store_above_brdr_clr = get_theme_mod('top_store_above_brdr_clr','#fff');  
    $top_store_style.=".top-header,body.top-store-dark .top-header{border-bottom-color:{$top_store_above_brdr_clr}}";
    $top_store_style.= top_store_responsive_slider_funct( 'top_store_abv_hdr_hgt', 'top_store_pro_top_header_height_responsive');
    $top_store_style.= top_store_responsive_slider_funct( 'top_store_abv_hdr_botm_brd', 'top_store_pro_abv_hdr_botm_brd_responsive');

/**************************/
// Above Fooetr
/**************************/
    $top_store_above_frt_brdr_clr = get_theme_mod('top_store_above_frt_brdr_clr','#fff');  
    $top_store_style.=".top-footer,body.top-store-dark .top-footer{border-bottom-color:{$top_store_above_frt_brdr_clr}}";
    $top_store_style.= top_store_responsive_slider_funct( 'top_store_above_ftr_hgt', 'top_store_pro_top_footer_height_responsive');
    $top_store_style.= top_store_responsive_slider_funct( 'top_store_abv_ftr_botm_brd', 'top_store_pro_top_footer_border_responsive');

/**************************/
// Below Fooetr
/**************************/
    $top_store_bottom_frt_brdr_clr = get_theme_mod('top_store_bottom_frt_brdr_clr','#fff');  
    $top_store_style.=".below-footer,body.top-store-dark .below-footer{border-top-color:{$top_store_bottom_frt_brdr_clr}}";
    $top_store_style.= top_store_responsive_slider_funct( 'top_store_btm_ftr_hgt', 'top_store_pro_below_footer_height_responsive');
    $top_store_style.= top_store_responsive_slider_funct( 'top_store_btm_ftr_botm_brd', 'top_store_pro_below_footer_border_responsive');
/*********************/
// Global Color Option
/*********************/
  $top_store_theme_clr = get_theme_mod('top_store_theme_clr','#00badb');
  $top_store_style.="a:hover, .top-store-menu li a:hover, .top-store-menu .current-menu-item a,.sider.overcenter .sider-inner ul.top-store-menu .current-menu-item a,.sticky-header-col2 .top-store-menu li a:hover,.woocommerce .thunk-woo-product-list .price,.thunk-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .thunk-product-hover .add_to_cart_button,.woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.thunk-compare .compare-button a:hover, .thunk-product-hover .th-button.add_to_cart_button:hover, .woocommerce ul.products .thunk-product-hover .add_to_cart_button :hover, .woocommerce .thunk-product-hover a.th-button:hover,.thunk-product .yith-wcwl-wishlistexistsbrowse.show:before, .thunk-product .yith-wcwl-wishlistaddedbrowse.show:before,.woocommerce ul.products li.product.thunk-woo-product-list .price,.summary .yith-wcwl-add-to-wishlist.show .add_to_wishlist::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse.show a::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse.show a::before,.woocommerce .entry-summary a.compare.button.added:before,.header-icon a:hover,.thunk-related-links .nav-links a:hover,.woocommerce .thunk-list-view ul.products li.product.thunk-woo-product-list .price,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,.thunk-wishlist a:hover, .thunk-compare a:hover,.thunk-quik a:hover,.woocommerce ul.cart_list li .woocommerce-Price-amount, .woocommerce ul.product_list_widget li .woocommerce-Price-amount,.top-store-load-more button,.page-contact .leadform-show-form label,.thunk-contact-col .fa,
  .woocommerce .thunk-product-hover a.th-button:hover:after,ul.products .thunk-product-hover .add_to_cart_button:hover, 
.woocommerce .thunk-product-hover a.th-button:hover, 
.woocommerce ul.products li.product .product_type_variable:hover, 
.woocommerce ul.products li.product a.button.product_type_grouped:hover, 
.woocommerce .thunk-product-hover a.th-button:hover, 
.woocommerce ul.products li.product .add_to_cart_button:hover, 
.woocommerce .added_to_cart.wc-forward:hover,
ul.products .thunk-product-hover .add_to_cart_button:hover:after, 
.woocommerce .thunk-product-hover a.th-button:hover:after, 
.woocommerce ul.products li.product .product_type_variable:hover:after, 
.woocommerce ul.products li.product a.button.product_type_grouped:hover:after, 
.woocommerce .thunk-product-hover a.th-button:hover:after, 
.woocommerce ul.products li.product .add_to_cart_button:hover:after, 
.woocommerce .added_to_cart.wc-forward:hover:after,.summary .yith-wcwl-add-to-wishlist .add_to_wishlist:hover:before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a::before,.th-hlight-icon,.ribbon-btn:hover,.thunk-product .yith-wcwl-wishlistexistsbrowse:before,.woocommerce .entry-summary a.compare.button:hover:before,.th-slide-button,.th-slide-button:after,.sider.overcenter .sider-inner ul.top-store-menu li a:hover,.yith-wcwl-wishlistaddedbrowse:before,.woosw-btn:hover:before,.woocommerce .woosw-added:before,.wooscp-btn:hover:before{color:{$top_store_theme_clr}}";
if($top_store_color_scheme=='opn-dark'){
$top_store_style.="body.top-store-dark a:hover, body.top-store-dark .top-store-menu > li > a:hover, body.top-store-dark .top-store-menu li ul.sub-menu li a:hover,body.top-store-dark .thunk-product-cat-list li a:hover,body.top-store-dark .main-header a:hover, body.top-store-dark #sidebar-primary .top-store-widget-content a:hover,body.top-store-dark #sidebar-secondary .top-store-widget-content a:hover,.top-store-dark .thunk-woo-product-list .woocommerce-loop-product__title a:hover{color:{$top_store_theme_clr}}";
}
$top_store_style.=".toggle-cat-wrap,#search-button,.thunk-icon .cart-icon,.single_add_to_cart_button.button.alt, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.cat-list a:after,.tagcloud a:hover, .thunk-tags-wrapper a:hover,.btn-main-header,.page-contact .leadform-show-form input[type='submit'],.woocommerce .widget_price_filter .top-store-widget-content .ui-slider .ui-slider-range,
.woocommerce .widget_price_filter .top-store-widget-content .ui-slider .ui-slider-handle,.entry-content form.post-password-form input[type='submit'],#top-store-mobile-bar a,
.header-support-icon,
.count-item,.nav-links .page-numbers.current, .nav-links .page-numbers:hover,.woocommerce .thunk-woo-product-list span.onsale,.top-store-site section.thunk-ribbon-section .content-wrap:before,.woocommerce .return-to-shop a.button,.widget_product_search [type='submit']:hover,.comment-form .form-submit [type='submit'],.top-store-slide-post .owl-nav button.owl-prev:hover, .top-store-slide-post .owl-nav button.owl-next:hover,body.top-store-dark .top-store-slide-post .owl-nav button.owl-prev:hover, body.top-store-dark .top-store-slide-post .owl-nav button.owl-next:hover,.woosw-copy-btn input{background:{$top_store_theme_clr}}
  .open-cart p.buttons a:hover,
  .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.thunk-slide .owl-nav button.owl-prev:hover, .thunk-slide .owl-nav button.owl-next:hover,.thunk-list-grid-switcher a.selected, .thunk-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover,#searchform [type='submit']:hover,article.thunk-post-article .thunk-readmore.button,.top-store-load-more button:hover,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.thunk-top2-slide.owl-carousel .owl-nav button:hover,.product-slide-widget .owl-carousel .owl-nav button:hover, .thunk-slide.thunk-brand .owl-nav button:hover,.th-testimonial .owl-carousel .owl-nav button.owl-prev:hover,.th-testimonial .owl-carousel .owl-nav button.owl-next:hover,body.top-store-dark .thunk-slide .owl-nav button.owl-prev:hover,body.top-store-dark .thunk-slide .owl-nav button.owl-next:hover{background-color:{$top_store_theme_clr};
    } 
  .thunk-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .thunk-product-hover .add_to_cart_button,.woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.open-cart p.buttons a:hover,.top-store-slide-post .owl-nav button.owl-prev:hover, .top-store-slide-post .owl-nav button.owl-next:hover,body .woocommerce-tabs .tabs li a::before,.thunk-list-grid-switcher a.selected, .thunk-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,#searchform [type='submit']:hover,.top-store-load-more button,.thunk-top2-slide.owl-carousel .owl-nav button:hover,.product-slide-widget .owl-carousel .owl-nav button:hover, .thunk-slide.thunk-brand .owl-nav button:hover,.page-contact .leadform-show-form input[type='submit'],.widget_product_search [type='submit']:hover,.thunk-slide .owl-nav button.owl-prev:hover, .thunk-slide .owl-nav button.owl-next:hover,body.top-store-dark .thunk-slide.owl-carousel .owl-nav button.owl-prev:hover, body.top-store-dark .thunk-slide.owl-carousel .owl-nav button.owl-next:hover,body.top-store-dark .top-store-slide-post .owl-nav button.owl-prev:hover, body.top-store-dark .top-store-slide-post .owl-nav button.owl-next:hover,.th-testimonial .owl-carousel .owl-nav button.owl-prev:hover,.th-testimonial .owl-carousel .owl-nav button.owl-next:hover{border-color:{$top_store_theme_clr}} .loader {
    border-right: 4px solid {$top_store_theme_clr};
    border-bottom: 4px solid {$top_store_theme_clr};
    border-left: 4px solid {$top_store_theme_clr};}
    .site-title span a:hover,.main-header-bar .header-icon a:hover,.woocommerce div.product p.price, .woocommerce div.product span.price,body.top-store-dark .top-store-menu .current-menu-item a,body.top-store-dark .sider.overcenter .sider-inner ul.top-store-menu .current-menu-item a,body.top-store-dark .sider.overcenter .sider-inner ul.top-store-menu li a:hover{color:{$top_store_theme_clr}}";
   //text
   $top_store_text_clr = get_theme_mod('top_store_text_clr','');
   $top_store_style.="body,.woocommerce-error, .woocommerce-info, .woocommerce-message {color: {$top_store_text_clr}}";
   //title
   $top_store_title_clr = get_theme_mod('top_store_title_clr','');
   $top_store_style.=".site-title span a,.sprt-tel b,.widget.woocommerce .widget-title, .open-widget-content .widget-title, .widget-title,.thunk-title .title,.thunk-hglt-box h6,h2.thunk-post-title a, h1.thunk-post-title ,#reply-title,h4.author-header,.page-head h1,.woocommerce div.product .product_title, section.related.products h2, section.upsells.products h2, .woocommerce #reviews #comments h2,.woocommerce table.shop_table thead th, .cart-subtotal, .order-total,.cross-sells h2, .cart_totals h2,.woocommerce-billing-fields h3,.page-head h1 a{color: {$top_store_title_clr}}";
   //link
   $top_store_link_clr = get_theme_mod('top_store_link_clr');
   $top_store_link_hvr_clr = get_theme_mod('top_store_link_hvr_clr');
   $top_store_style.="a,#top-store-above-menu.top-store-menu > li > a{color:{$top_store_link_clr}} a:hover,#top-store-above-menu.top-store-menu > li > a:hover,#top-store-above-menu.top-store-menu li a:hover{color:{$top_store_link_hvr_clr}}";

    if($top_store_color_scheme=='opn-dark'){
    $top_store_style.="body.top-store-dark a,body.top-store-dark .thunk-product-cat-list li a,body.top-store-dark .main-header a, body.top-store-dark #sidebar-primary .top-store-widget-content a,body.top-store-dark #sidebar-secondary .top-store-widget-content a,body.top-store-dark .top-header-bar a, body.top-store-dark .top-footer a, body.top-store-dark .below-footer a, body.top-store-dark .widget-footer a{color:{$top_store_link_clr}}
    body.top-store-dark, .top-store-dark .woocommerce-error, .top-store-dark .woocommerce-info, .top-store-dark .woocommerce-message,body.top-store-dark .top-header-bar, body.top-store-dark .top-footer, body.top-store-dark .below-footer,  body.top-store-dark .widget-footer{color:{$top_store_text_clr}}
    body.top-store-dark .widget.woocommerce .widget-title, body.top-store-dark .open-widget-content .widget-title, .widget-title,body.top-store-dark .thunk-title .title,.top-store-dark h2.thunk-post-title a, .top-store-dark h1.thunk-post-title a{color:{$top_store_title_clr}}";

    $top_store_style.="body.top-store-dark a:hover,body.top-store-dark .thunk-product-cat-list li a:hover,body.top-store-dark .main-header a:hover, body.top-store-dark #sidebar-primary .top-store-widget-content a:hover,body.top-store-dark #sidebar-secondary .top-store-widget-content a:hover,body.top-store-dark .top-header-bar a:hover, body.top-store-dark .top-footer a:hover, body.top-store-dark .below-footer a:hover, body.top-store-dark .widget-footer a:hover,body.top-store-dark .thunk-compare .compare-button a:hover,.top-store-dark .thunk-woo-product-list .woocommerce-loop-product__title a:hover{color:{$top_store_link_hvr_clr}}";
  }
  // loader
   $top_store_loader_bg_clr = get_theme_mod('top_store_loader_bg_clr','#9c9c9');
   $top_store_style.=".top_store_overlayloader{background-color:{$top_store_loader_bg_clr}}";
  /**************************/
  //Above Header Color Option
  /**************************/
   $top_store_above_hd_bg_clr = get_theme_mod('top_store_above_hd_bg_clr','');
   $top_store_abv_header_background_image          = get_theme_mod('header_image');
   $top_store_style.=".top-header:before{background:{$top_store_above_hd_bg_clr}}";
   $top_store_style.= ".top-header{background-image:url($top_store_abv_header_background_image);
   }";
   

    $top_store_abv_content_txt_clr = get_theme_mod('top_store_abv_content_txt_clr','');
    $top_store_abv_content_link_clr = get_theme_mod('top_store_abv_content_link_clr','');
    $top_store_abv_content_link_hvr_clr = get_theme_mod('top_store_abv_content_link_hvr_clr','');
    $top_store_style.= ".top-header .top-header-bar{color:{$top_store_abv_content_txt_clr}} .top-header .top-header-bar a{color:{$top_store_abv_content_link_clr}} .top-header .top-header-bar a:hover{color:{$top_store_abv_content_link_hvr_clr}}";

    if($top_store_color_scheme=='opn-dark'){
      $top_store_style.="body.top-store-dark .top-header:before{background: {$top_store_above_hd_bg_clr};}";
       $top_store_style.= "body.top-store-dark .top-header .top-header-bar{color:{$top_store_abv_content_txt_clr}} body.top-store-dark .top-header .top-header-bar a{color:{$top_store_abv_content_link_clr}} body.top-store-dark .top-header .top-header-bar a:hover{color:{$top_store_abv_content_link_hvr_clr}}";
    }
  /**************************/
  //Main Header Color Option
  /**************************/
   $top_store_main_hd_bg_clr = get_theme_mod('top_store_main_hd_bg_clr','');

   $top_store_pro_main_header_background_image          = get_theme_mod('top_store_pro_main_header_background_image_url','');
   $top_store_pro_main_header_background_image_id       = get_theme_mod('top_store_pro_main_header_background_image_id','');
   $top_store_pro_main_header_background_repeat         = get_theme_mod('top_store_pro_main_header_background_repeat','no-repeat');
   $top_store_pro_main_header_background_position       = get_theme_mod('top_store_pro_main_header_background_position','center center');
   $top_store_pro_main_header_background_size           = get_theme_mod('top_store_pro_main_header_background_size','auto');
   $top_store_pro_main_header_background_attach         = get_theme_mod('top_store_pro_main_header_background_attach','scroll');
   $top_store_style.=".main-header:before{background:{$top_store_main_hd_bg_clr}}";
   $top_store_style.= ".main-header{background-image:url($top_store_pro_main_header_background_image);
    background-repeat:{$top_store_pro_main_header_background_repeat};
    background-position:{$top_store_pro_main_header_background_position};
    background-size:{$top_store_pro_main_header_background_size};
    background-attachment:{$top_store_pro_main_header_background_attach};}";

    $top_store_pro_main_header_sitetitle_clr          = get_theme_mod('top_store_pro_main_header_sitetitle_clr','');
    $top_store_pro_main_header_sitetitle_hvr_clr      = get_theme_mod('top_store_pro_main_header_sitetitle_hvr_clr','');
    $top_store_pro_main_header_sitetagline_clr        = get_theme_mod('top_store_pro_main_header_sitetagline_clr','');
    $top_store_style.= ".site-title span a{color:{$top_store_pro_main_header_sitetitle_clr}} .site-title span a:hover{color:{$top_store_pro_main_header_sitetitle_hvr_clr}} .site-description p{color:{$top_store_pro_main_header_sitetagline_clr}}";

    $top_store_main_content_txt_clr               = get_theme_mod('top_store_main_content_txt_clr','');
    $top_store_main_content_link_clr              = get_theme_mod('top_store_main_content_link_clr','');

    $top_store_style.= "
    .th-whishlist-text,.account-text:nth-of-type(1){color:{$top_store_main_content_txt_clr}}
    .header-icon a,.header-icon a:hover,.thunk-icon-market .cart-contents{color:{$top_store_main_content_link_clr}}";
    
    if($top_store_color_scheme=='opn-dark'){
      $top_store_style.="body.top-store-dark .main-header:before,body.top-store-dark .below-header:before {background:{$top_store_main_hd_bg_clr}}
      body.top-store-dark .site-title span a{color:{$top_store_pro_main_header_sitetitle_clr}} body.top-store-dark .site-title span a:hover{color:{$top_store_pro_main_header_sitetitle_hvr_clr}} body.top-store-dark .site-description p{color:{$top_store_pro_main_header_sitetagline_clr}}  body.top-store-dark .main-header-col3,body.top-store-dark .header-icon a,body.top-store-dark .header-icon a:hover,body.top-store-dark .thunk-icon-market .cart-contents{color:{$top_store_main_content_link_clr}}";
    }
    


    // menu
    $top_store_pro_main_header_menu_link_clr          = get_theme_mod('top_store_pro_main_header_menu_link_clr','');
    $top_store_pro_main_header_menu_link_hvr_clr      = get_theme_mod('top_store_pro_main_header_menu_link_hvr_clr','');
    // sub-meu
    $top_store_pro_main_header_sbmenu_bg_clr          = get_theme_mod('top_store_pro_main_header_sbmenu_bg_clr','');
    $top_store_pro_main_header_sbmenu_link_clr        = get_theme_mod('top_store_pro_main_header_sbmenu_link_clr','');
    $top_store_pro_main_header_sbmenu_link_hvr_clr    = get_theme_mod('top_store_pro_main_header_sbmenu_link_hvr_clr','');
    $top_store_pro_main_header_sbmenu_link_hvr_bg_clr    = get_theme_mod('top_store_pro_main_header_sbmenu_link_hvr_bg_clr','');
    $top_store_style.= ".top-store-menu > li > a{
      color:{$top_store_pro_main_header_menu_link_clr}
    }
    .top-store-menu > li > a:hover{
      color:{$top_store_pro_main_header_menu_link_hvr_clr}
    }
    #top-store-menu ul.sub-menu{
    background:{$top_store_pro_main_header_sbmenu_bg_clr}
    } 
    #top-store-menu li ul.sub-menu li a:hover{
    background:{$top_store_pro_main_header_sbmenu_link_hvr_bg_clr}
    } 
    #top-store-menu li ul.sub-menu li a{
    color:{$top_store_pro_main_header_sbmenu_link_clr}
    }  
    #top-store-menu li ul.sub-menu li a:hover{
    color:{$top_store_pro_main_header_sbmenu_link_hvr_clr}
    }";

    // header category
    $top_store_pro_main_header_cat_bg_clr      = get_theme_mod('top_store_pro_main_header_cat_bg_clr','');
    $top_store_pro_main_header_cat_clr         = get_theme_mod('top_store_pro_main_header_cat_clr','');
    $top_store_style.= ".toggle-cat-wrap{
      background:{$top_store_pro_main_header_cat_bg_clr};
      color:{$top_store_pro_main_header_cat_clr}
    } 
    .cat-icon span{
      background-color:{$top_store_pro_main_header_cat_clr};}";
    // header category dropdown
    $top_store_pro_main_header_cat_drp_bg_clr      = get_theme_mod('top_store_pro_main_header_cat_drp_bg_clr','');
    $top_store_pro_main_header_cat_drp_clr         = get_theme_mod('top_store_pro_main_header_cat_drp_clr','');
    $top_store_pro_main_header_cat_drp_hvr_clr     = get_theme_mod('top_store_pro_main_header_cat_drp_hvr_clr','');
    $top_store_style.= ".menu-category-list ul[data-menu-style='vertical'],.menu-category-list ul[data-menu-style='vertical'] li ul.sub-menu{background:{$top_store_pro_main_header_cat_drp_bg_clr}} .thunk-product-cat-list li a{color:{$top_store_pro_main_header_cat_drp_clr}} .thunk-product-cat-list li a:hover{color:{$top_store_pro_main_header_cat_drp_hvr_clr}}";
    if($top_store_color_scheme=='opn-dark'){
      $top_store_style.="body.top-store-dark .menu-category-list ul[data-menu-style='vertical'],body.top-store-dark .menu-category-list ul[data-menu-style='vertical'] li ul.sub-menu,body.top-store-dark .thunk-product-cat-list li a{background:{$top_store_pro_main_header_cat_drp_bg_clr}} body.top-store-dark .thunk-product-cat-list li a{color:{$top_store_pro_main_header_cat_drp_clr}} body.top-store-dark .thunk-product-cat-list li a:hover{color:{$top_store_pro_main_header_cat_drp_hvr_clr}}";
    }
    // header search
    $top_store_pro_main_header_srch_bg_clr      = get_theme_mod('top_store_pro_main_header_srch_bg_clr','');
    $top_store_pro_main_header_srch_clr         = get_theme_mod('top_store_pro_main_header_srch_clr','');
    $top_store_style.= "#search-box input[type='text'], select#product_cat{background:{$top_store_pro_main_header_srch_bg_clr};border: 1px solid {$top_store_pro_main_header_srch_bg_clr}; color:{$top_store_pro_main_header_srch_clr}}  #search-box form,.below-header-bar #search-text::placeholder {background:{$top_store_pro_main_header_srch_bg_clr}; color:{$top_store_pro_main_header_srch_clr}}";
    $top_store_pro_main_header_srch_btn_bg_clr      = get_theme_mod('top_store_pro_main_header_srch_btn_bg_clr','');
    $top_store_pro_main_header_srch_btn_clr         = get_theme_mod('top_store_pro_main_header_srch_btn_clr','');
    $top_store_style.= "#search-button{background:{$top_store_pro_main_header_srch_btn_bg_clr};color:{$top_store_pro_main_header_srch_btn_clr}}";
    //shop icon wishlist
    $top_store_style.= "";
    

    if($top_store_color_scheme=='opn-dark'){
      $top_store_style.="body.top-store-dark #search-box input[type='text'], body.top-store-dark select#product_cat{background:{$top_store_pro_main_header_srch_bg_clr};border: 1px solid {$top_store_pro_main_header_srch_bg_clr}; color:{$top_store_pro_main_header_srch_clr}}  body.top-store-dark #search-box form,body.top-store-dark .below-header-bar #search-text::placeholder {background:{$top_store_pro_main_header_srch_bg_clr}; color:{$top_store_pro_main_header_srch_clr}}";
    }
    /**************************/
  //Below Header Color Option
  /**************************/
   $top_store_below_hd_bg_clr = get_theme_mod('top_store_below_hd_bg_clr','');
   $top_store_pro_below_header_background_image          = get_theme_mod('top_store_pro_below_header_background_image_url','');
   $top_store_pro_below_header_background_image_id       = get_theme_mod('top_store_pro_below_header_background_image_id','');
   $top_store_pro_below_header_background_repeat         = get_theme_mod('top_store_pro_below_header_background_repeat','no-repeat');
   $top_store_pro_below_header_background_position       = get_theme_mod('top_store_pro_below_header_background_position','center center');
   $top_store_pro_below_header_background_size           = get_theme_mod('top_store_pro_below_header_background_size','auto');
   $top_store_pro_below_header_background_attach         = get_theme_mod('top_store_pro_below_header_background_attach','scroll');

   $top_store_below_content_icon_clr = get_theme_mod('top_store_below_content_icon_clr','');
   $top_store_below_content_icon_bg_clr = get_theme_mod('top_store_below_content_icon_bg_clr','');
   $top_store_below_content_txt_clr = get_theme_mod('top_store_below_content_txt_clr','');
   $top_store_below_content_link_clr = get_theme_mod('top_store_below_content_link_clr','');
   $top_store_below_content_link_hvr_clr = get_theme_mod('top_store_below_content_link_hvr_clr','');
   $top_store_below_button_clr = get_theme_mod('top_store_below_button_clr');
   $top_store_below_button_hvr_clr = get_theme_mod('top_store_below_button_hvr_clr','');
   $top_store_below_button_bg = get_theme_mod('top_store_below_button_bg');
   $top_store_below_button_bg_hvr = get_theme_mod('top_store_below_button_bg_hvr','');

   $top_store_style.="
   .below-header:before,
   .below-header:before{
    background:{$top_store_below_hd_bg_clr}
   }

   .below-header{background-image:url($top_store_pro_below_header_background_image);
    background-repeat:{$top_store_pro_below_header_background_repeat};
    background-position:{$top_store_pro_below_header_background_position};
    background-size:{$top_store_pro_below_header_background_size};
    background-attachment:{$top_store_pro_below_header_background_attach};}
    
    .header-support-icon,
    body.top-store-dark .header-support-icon{
      background:{$top_store_below_content_icon_bg_clr};
    }
    .header-support-icon i,
    body.top-store-dark .header-support-icon i{
       color:{$top_store_below_content_icon_clr};
    }
    .header-support-icon,
    body.top-store-dark .header-support-icon{
      background:{top_store_below_content_icon_bg_clr};
      color:{top_store_below_content_icon_clr};
    }
    .header-widget-wrap,
    .header-support-content,
    body.top-store-dark .header-widget-wrap,
    body.top-store-dark .header-support-content{
      color:{$top_store_below_content_txt_clr};
    }
    .header-support-content a,
    .header-widget-wrap a,
    body.top-store-dark .header-support-content a,
    body.top-store-dark .header-widget-wrap a{
      color:{$top_store_below_content_link_clr};
    }
    .header-support-content a:hover,
    .header-widget-wrap a:hover,
    body.top-store-dark .header-support-content a:hover,
    body.top-store-dark .header-widget-wrap a:hover{
      color:{$top_store_below_content_link_hvr_clr};
    }
    .btn-main-header,
    body.top-store-dark .btn-main-header{
      color:{$top_store_below_button_clr};
      background:{$top_store_below_button_bg};
    }
    .btn-main-header:hover,
    body.top-store-dark .btn-main-header:hover{
      color:{$top_store_below_button_hvr_clr};
      background:{$top_store_below_button_bg_hvr};
    }
   ";
    //Above Footer
    $top_store_above_ftr_bg_clr                = get_theme_mod('top_store_above_ftr_bg_clr');
    $top_store_abv_ftr_background_image_url    = get_theme_mod('top_store_abv_ftr_background_image_url');
    $top_store_abv_ftr_background_image_id     = get_theme_mod('top_store_abv_ftr_background_image_id');
    $top_store_abv_ftr_background_repeat       = get_theme_mod('top_store_abv_ftr_background_repeat','no-repeat'); 
    $top_store_abv_ftr_background_size         = get_theme_mod('top_store_abv_ftr_background_size','auto');
    $top_store_abv_ftr_background_position     = get_theme_mod('top_store_abv_ftr_background_position','center center');
    $top_store_abv_ftr_background_attach       = get_theme_mod('top_store_abv_ftr_background_attach','scroll');
    $top_store_abv_ftr_content_txt_clr         = get_theme_mod('top_store_abv_ftr_content_txt_clr');
    $top_store_abv_ftr_content_link_clr        = get_theme_mod('top_store_abv_ftr_content_link_clr');
    $top_store_abv_ftr_content_link_hvr_clr    = get_theme_mod('top_store_abv_ftr_content_link_hvr_clr');

    $top_store_style.=".top-footer:before{background:{$top_store_above_ftr_bg_clr}}";
    $top_store_style.= ".top-footer{background-image:url($top_store_abv_ftr_background_image_url);
    background-repeat:{$top_store_abv_ftr_background_repeat};
    background-size:{$top_store_abv_ftr_background_size};
    background-position:{$top_store_abv_ftr_background_position};
    background-attachment:{$top_store_abv_ftr_background_attach};}";
    $top_store_style.= ".top-footer .top-footer-bar{color:{$top_store_abv_ftr_content_txt_clr}} footer .top-footer .top-footer-bar a{color:{$top_store_abv_ftr_content_link_clr}} footer .top-footer .top-footer-bar a:hover{color:{$top_store_abv_ftr_content_link_hvr_clr}}";
    if($top_store_color_scheme=='opn-dark'){
      $top_store_style.="body.top-store-dark .top-footer:before{background:{$top_store_above_ftr_bg_clr}} body.top-store-dark .top-footer .top-footer-bar{color:{$top_store_abv_ftr_content_txt_clr}} body.top-store-dark footer .top-footer .top-footer-bar a{color:{$top_store_abv_ftr_content_link_clr}} body.top-store-dark footer .top-footer .top-footer-bar a:hover{color:{$top_store_abv_ftr_content_link_hvr_clr}}";
     }
     //Below Footer
    $top_store_blw_ftr_bg_clr                  = get_theme_mod('top_store_blw_ftr_bg_clr');
    $top_store_blw_ftr_background_image_url    = get_theme_mod('top_store_blw_ftr_background_image_url');
    $top_store_blw_ftr_background_image_id     = get_theme_mod('top_store_blw_ftr_background_image_id');
    $top_store_blw_ftr_background_repeat       = get_theme_mod('top_store_abv_ftr_background_repeat','no-repeat'); 
    $top_store_blw_ftr_background_size         = get_theme_mod('top_store_blw_ftr_background_size','auto');
    $top_store_blw_ftr_background_position     = get_theme_mod('top_store_blw_ftr_background_position','center center');
    $top_store_blw_ftr_background_attach       = get_theme_mod('top_store_blw_ftr_background_attach','scroll');
    $top_store_blw_ftr_content_txt_clr         = get_theme_mod('top_store_blw_ftr_content_txt_clr');
    $top_store_blw_ftr_content_link_clr        = get_theme_mod('top_store_blw_ftr_content_link_clr');
    $top_store_blw_ftr_content_link_hvr_clr    = get_theme_mod('top_store_blw_ftr_content_link_hvr_clr');

    $top_store_style.=".below-footer:before{background:{$top_store_blw_ftr_bg_clr}}";
    $top_store_style.= ".below-footer{background-image:url($top_store_blw_ftr_background_image_url);
    background-repeat:{$top_store_blw_ftr_background_repeat};
    background-size:{$top_store_blw_ftr_background_size};
    background-position:{$top_store_blw_ftr_background_position};
    background-attachment:{$top_store_blw_ftr_background_attach};}";
    $top_store_style.= ".below-footer .below-footer-bar{color:{$top_store_blw_ftr_content_txt_clr}} .below-footer .below-footer-bar a{color:{$top_store_blw_ftr_content_link_clr}} .below-footer .below-footer-bar a:hover{color:{$top_store_blw_ftr_content_link_hvr_clr}}";
     
     if($top_store_color_scheme=='opn-dark'){
      $top_store_style.="body.top-store-dark .below-footer:before{background:{$top_store_blw_ftr_bg_clr}} body.top-store-dark .below-footer .below-footer-bar{color:{$top_store_blw_ftr_content_txt_clr}} body.top-store-dark .below-footer .below-footer-bar a{color:{$top_store_blw_ftr_content_link_clr}} body.top-store-dark .below-footer .below-footer-bar a:hover{color:{$top_store_blw_ftr_content_link_hvr_clr}}";
    }
    // Footer widget
    $top_store_footer_wgt_bg_clr                  = get_theme_mod('top_store_footer_wgt_bg_clr');
    $top_store_footer_wgt_background_image_url    = get_theme_mod('top_store_footer_wgt_background_image_url');
    $top_store_footer_wgt_background_image_id     = get_theme_mod('top_store_footer_wgt_background_image_id');
    $top_store_footer_wgt_background_repeat       = get_theme_mod('top_store_footer_wgt_background_repeat','no-repeat'); 
    $top_store_footer_wgt_background_size         = get_theme_mod('top_store_footer_wgt_background_size','auto');
    $top_store_footer_wgt_background_position     = get_theme_mod('top_store_footer_wgt_background_position','center center');
    $top_store_footer_wgt_background_attach       = get_theme_mod('top_store_footer_wgt_background_attach','scroll');
    $top_store_footer_wgt_tle_clr         = get_theme_mod('top_store_footer_wgt_tle_clr');
    $top_store_footer_wgt_text_clr        = get_theme_mod('top_store_footer_wgt_text_clr');
    $top_store_footer_wgt_link_clr        = get_theme_mod('top_store_footer_wgt_link_clr');
    $top_store_footer_wgt_link_hvr_clr    = get_theme_mod('top_store_footer_wgt_link_hvr_clr');
    $top_store_style.=".widget-footer:before{background:{$top_store_footer_wgt_bg_clr}}";
    $top_store_style.= ".widget-footer{background-image:url($top_store_footer_wgt_background_image_url);
    background-repeat:{$top_store_footer_wgt_background_repeat};
    background-size:{$top_store_footer_wgt_background_size};
    background-position:{$top_store_footer_wgt_background_position};
    background-attachment:{$top_store_footer_wgt_background_attach};}";
    $top_store_style.= ".widget-footer h2.widget-title{color:{$top_store_footer_wgt_tle_clr}} .widget-footer .widget{color:{$top_store_footer_wgt_text_clr}} .widget-footer .widget a{color:{$top_store_footer_wgt_link_clr}} .widget-footer .widget a:hover{color:{$top_store_footer_wgt_link_hvr_clr}}";

    if($top_store_color_scheme=='opn-dark'){
      $top_store_style.="body.top-store-dark .widget-footer:before{background:{$top_store_footer_wgt_bg_clr}} body.top-store-dark .widget-footer h2.widget-title{color:{$top_store_footer_wgt_tle_clr}} body.top-store-dark .widget-footer .widget{color:{$top_store_footer_wgt_text_clr}} body.top-store-dark .widget-footer .widget a{color:{$top_store_footer_wgt_link_clr}} body.top-store-dark .widget-footer .widget a:hover{color:{$top_store_footer_wgt_link_hvr_clr}}";

    }

    //Sidebar
    $top_store_sidebar_bg_clr        = get_theme_mod('top_store_sidebar_bg_clr');
    $top_store_sidebar_wdgt_tle_clr  = get_theme_mod('top_store_sidebar_wdgt_tle_clr');
    $top_store_sidebar_wdgt_text_clr  = get_theme_mod('top_store_sidebar_wdgt_text_clr');
    $top_store_sidebar_wdgt_link_clr  = get_theme_mod('top_store_sidebar_wdgt_link_clr');
    $top_store_sidebar_wdgt_link_hvr_clr  = get_theme_mod('top_store_sidebar_wdgt_link_hvr_clr');
    $top_store_style.= "#sidebar-primary .top-store-widget-content{background:{$top_store_sidebar_bg_clr}}  #sidebar-primary h2.widget-title{color:{$top_store_sidebar_wdgt_tle_clr}} #sidebar-primary .top-store-widget-content{color:{$top_store_sidebar_wdgt_text_clr}} #sidebar-primary .top-store-widget-content a{color:{$top_store_sidebar_wdgt_link_clr}} #sidebar-primary .top-store-widget-content a:hover{color:{$top_store_sidebar_wdgt_link_hvr_clr}}";

    if($top_store_color_scheme=='opn-dark'){
      $top_store_style.="body.top-store-dark #sidebar-primary .top-store-widget-content{background:{$top_store_sidebar_bg_clr}}  body.top-store-dark #sidebar-primary h2.widget-title{color:{$top_store_sidebar_wdgt_tle_clr}} body.top-store-dark #sidebar-primary .top-store-widget-content{color:{$top_store_sidebar_wdgt_text_clr}} body.top-store-dark #sidebar-primary .top-store-widget-content a{color:{$top_store_sidebar_wdgt_link_clr}} body.top-store-dark #sidebar-primary .top-store-widget-content a:hover{color:{$top_store_sidebar_wdgt_link_hvr_clr}}";
    }

    //Secondary Sidebar
    $top_store_seco_sidebar_bg_clr        = get_theme_mod('top_store_seco_sidebar_bg_clr');
    $top_store_seco_sidebar_wdgt_tle_clr  = get_theme_mod('top_store_seco_sidebar_wdgt_tle_clr');
    $top_store_seco_sidebar_wdgt_text_clr  = get_theme_mod('top_store_seco_sidebar_wdgt_text_clr');
    $top_store_seco_sidebar_wdgt_link_clr  = get_theme_mod('top_store_seco_sidebar_wdgt_link_clr');
    $top_store_seco_sidebar_wdgt_link_hvr_clr  = get_theme_mod('top_store_seco_sidebar_wdgt_link_hvr_clr');
    $top_store_style.= "#sidebar-secondary .top-store-widget-content{background:{$top_store_seco_sidebar_bg_clr}}  #sidebar-secondary h2.widget-title{color:{$top_store_seco_sidebar_wdgt_tle_clr}} #sidebar-secondary .top-store-widget-content{color:{$top_store_seco_sidebar_wdgt_text_clr}} #sidebar-secondary .top-store-widget-content a{color:{$top_store_seco_sidebar_wdgt_link_clr}} #sidebar-secondary .top-store-widget-content a:hover{color:{$top_store_seco_sidebar_wdgt_link_hvr_clr}}";

     if($top_store_color_scheme=='opn-dark'){
      $top_store_style.="body.top-store-dark #sidebar-secondary .top-store-widget-content{background:{$top_store_seco_sidebar_bg_clr}}  body.top-store-dark #sidebar-secondary h2.widget-title{color:{$top_store_seco_sidebar_wdgt_tle_clr}} body.top-store-dark #sidebar-secondary .top-store-widget-content{color:{$top_store_seco_sidebar_wdgt_text_clr}} body.top-store-dark #sidebar-secondary .top-store-widget-content a{color:{$top_store_seco_sidebar_wdgt_link_clr}} body.top-store-dark #sidebar-secondary .top-store-widget-content a:hover{color:{$top_store_seco_sidebar_wdgt_link_hvr_clr}}";
    }
    
    /**********************/
    // woocommerce
    /**********************/
    // product color
    $top_store_woo_prdct_box_bg_clr  = get_theme_mod('top_store_woo_prdct_box_bg_clr');
    $top_store_woo_prdct_tle_clr     = get_theme_mod('top_store_woo_prdct_tle_clr');
    $top_store_woo_prdct_rat_clr     = get_theme_mod('top_store_woo_prdct_rat_clr');
    $top_store_woo_prdct_price_clr   = get_theme_mod('top_store_woo_prdct_price_clr');
    $top_store_style.= ".thunk-woo-product-list .thunk-product-wrap .thunk-product,.thunk-woo-product-list .thunk-product-wrap .thunk-product .thunk-product-hover,.thunk-product-list-section .thunk-list, .thunk-product-tab-list-section .thunk-list,.thunk-product:hover .thunk-product-hover::before,body.top-store-dark .thunk-product:hover .thunk-product-hover::before,.product-slide-widget .thunk-product,.product-slide-widget .thunk-product-hover,body.top-store-dark .header-icon a, body.top-store-dark .thunk-wishlist a, body.top-store-dark .thunk-compare a, body.top-store-dark .sticky-header-col3 .thunk-icon .cart-icon a.cart-contents{background:{$top_store_woo_prdct_box_bg_clr}} .thunk-woo-product-list .thunk-product-wrap .woocommerce-loop-product__title a,.woocommerce ul.products li.product .thunk-product-wrap .thunk-product .woocommerce-loop-product__title,.thunk-product-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title, .thunk-product-tab-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title,.thunk-woo-product-list .woocommerce-loop-product__title a{color:{$top_store_woo_prdct_tle_clr}} .woocommerce .thunk-woo-product-list .thunk-product-wrap .star-rating,.woocommerce .thunk-woo-product-list .thunk-product-wrap .thunk-product-content .star-rating,.thunk-product-list-section .thunk-list .thunk-product-content .star-rating, .thunk-product-tab-list-section .thunk-list .thunk-product-content .star-rating,.woocommerce .thunk-product-tab-list-section .thunk-list .thunk-product-content .star-rating,.woocommerce .thunk-product-content .star-rating,.woocommerce .thunk-product-content .star-rating{color:{$top_store_woo_prdct_rat_clr}} 
      .woocommerce ul.products li.product.thunk-woo-product-list .price,
      .woocommerce .thunk-woo-product-list .price,.woocommerce ul.product_list_widget li .woocommerce-Price-amount{color:{$top_store_woo_prdct_price_clr}}";
      // icon 
    $top_store_woo_prdct_icon_bg_clr = get_theme_mod('top_store_woo_prdct_icon_bg_clr');
    $top_store_woo_prdct_icon_clr    = get_theme_mod('top_store_woo_prdct_icon_clr');
    $top_store_woo_prdct_icon_hvr_clr = get_theme_mod('top_store_woo_prdct_icon_hvr_clr');
    $top_store_style.= ".thunk-wishlist, .thunk-compare, .thunk-quik,
    body.top-store-dark .thunk-wishlist,body.top-store-dark .thunk-compare,body.top-store-dark .thunk-quik{background:{$top_store_woo_prdct_icon_bg_clr}; }
    .thunk-wishlist a,.thunk-quik a,.thunk-compare .compare-button a,.woosw-btn:before,.wooscp-btn:before,
    body.top-store-dark .thunk-wishlist a,body.top-store-dark .thunk-quik a,body.top-store-dark .thunk-compare .compare-button a,body.top-store-dark .woosw-btn:before,body.top-store-dark .wooscp-btn:before{
      color:{$top_store_woo_prdct_icon_clr}
    }
    .thunk-wishlist a:hover,.thunk-compare a:hover,
    .thunk-quik a:hover,.woosw-btn:hover:before,.woosw-added:before,.wooscp-btn:hover:before,
    body.top-store-dark .thunk-wishlist a:hover,body.top-store-dark .thunk-compare a:hover,
    body.top-store-dark .thunk-quik a:hover,
    body.top-store-dark .woosw-btn:hover:before,body.top-store-dark .wooscp-btn:hover:before{
      color:{$top_store_woo_prdct_icon_hvr_clr}
    }
    ";
     // add-to-cart
    $top_store_woo_prdct_crt_btn_bg_clr = get_theme_mod('top_store_woo_prdct_crt_btn_bg_clr');
    $top_store_woo_prdct_crt_btn_bg_hvr_clr = get_theme_mod('top_store_woo_prdct_crt_btn_bg_hvr_clr');
    $top_store_woo_prdct_crt_btn_clr    = get_theme_mod('top_store_woo_prdct_crt_btn_clr');
    $top_store_woo_prdct_crt_btn_hvr_clr= get_theme_mod('top_store_woo_prdct_crt_btn_hvr_clr');
    $top_store_style.= " 
    .woocommerce ul.products .thunk-product-hover .add_to_cart_button,
    .woocommerce .thunk-product-hover a.th-button,
    .woocommerce ul.products li.product .product_type_variable,
    .woocommerce ul.products li.product a.button.product_type_grouped,
    .woocommerce .thunk-product-hover a.th-button,
    .woocommerce ul.products li.product .add_to_cart_button,
    .woocommerce .added_to_cart.wc-forward,
    .thunk-product-hover .th-button.add_to_cart_button:after,
    .woocommerce ul.products .thunk-product-hover .add_to_cart_button:after,
    .woocommerce ul.products li.product .product_type_variable:after,
    .woocommerce ul.products li.product a.button.product_type_grouped:after,
    .woocommerce .thunk-product-hover a.th-button:after,
    .woocommerce ul.products li.product .add_to_cart_button:after,.thunk-product-hover a.added_to_cart:after{
         color:{$top_store_woo_prdct_crt_btn_clr};
         background:{$top_store_woo_prdct_crt_btn_bg_clr};
      }
    ul.products .thunk-product-hover .add_to_cart_button:hover, .woocommerce .thunk-product-hover a.th-button:hover, .woocommerce ul.products li.product .product_type_variable:hover, .woocommerce ul.products li.product a.button.product_type_grouped:hover, .woocommerce .thunk-product-hover a.th-button:hover, .woocommerce ul.products li.product .add_to_cart_button:hover, .woocommerce .added_to_cart.wc-forward:hover, ul.products .thunk-product-hover .add_to_cart_button:hover:after, .woocommerce .thunk-product-hover a.th-button:hover:after, .woocommerce ul.products li.product .product_type_variable:hover:after, .woocommerce ul.products li.product a.button.product_type_grouped:hover:after, .woocommerce .thunk-product-hover a.th-button:hover:after, .woocommerce ul.products li.product .add_to_cart_button:hover:after, .woocommerce .added_to_cart.wc-forward:hover:after,
    body.top-store-dark ul.products .thunk-product-hover .add_to_cart_button:hover, body.woocommerce.top-store-dark .thunk-product-hover a.th-button:hover, body.woocommerce.top-store-dark ul.products li.product .product_type_variable:hover, body.woocommerce.top-store-dark ul.products li.product a.button.product_type_grouped:hover, body.woocommerce.top-store-dark .thunk-product-hover a.th-button:hover, body.woocommerce.top-store-dark ul.products li.product .add_to_cart_button:hover, body.woocommerce.top-store-dark .added_to_cart.wc-forward:hover, body.top-store-dark ul.products .thunk-product-hover .add_to_cart_button:hover:after, body.woocommerce.top-store-dark .thunk-product-hover a.th-button:hover:after, body.woocommerce.top-store-dark ul.products li.product .product_type_variable:hover:after, body.woocommerce.top-store-dark ul.products li.product a.button.product_type_grouped:hover:after, body.woocommerce.top-store-dark .thunk-product-hover a.th-button:hover:after, body.woocommerce.top-store-dark ul.products li.product .add_to_cart_button:hover:after, body.woocommerce.top-store-dark .added_to_cart.wc-forward:hover:after,.thunk-product-hover a.added_to_cart:hover:after{
      color:{$top_store_woo_prdct_crt_btn_hvr_clr};
      background-color:{$top_store_woo_prdct_crt_btn_bg_hvr_clr};
      }
      ";
    // Add to cart Hover
    //Tooltip
    $top_store_woo_prdct_tooltip_bg_clr = get_theme_mod('top_store_woo_prdct_tooltip_bg_clr');
    $top_store_woo_prdct_tooltip_clr = get_theme_mod('top_store_woo_prdct_tooltip_clr');
    $top_store_style.= ".thunk-icons-wrap .tooltip,.thunk-icons-wrap .tooltip:before{
      background:{$top_store_woo_prdct_tooltip_bg_clr};
      color:{$top_store_woo_prdct_tooltip_clr};
    }

    ";
    //Sale Badge
    $top_store_woo_prdct_sale_badge_bg_clr = get_theme_mod('top_store_woo_prdct_sale_badge_bg_clr');
    $top_store_woo_prdct_sale_badge_clr    = get_theme_mod('top_store_woo_prdct_sale_badge_clr');
    $top_store_style.= ".woocommerce .thunk-woo-product-list span.onsale{background-color:{$top_store_woo_prdct_sale_badge_bg_clr};color:{$top_store_woo_prdct_sale_badge_clr}}";
    /***************/
    // single product 
    /***************/
    $top_store_woo_single_title_clr     = get_theme_mod('top_store_woo_single_title_clr');
    $top_store_woo_single_rating_clr    = get_theme_mod('top_store_woo_single_rating_clr');
    $top_store_woo_single_price_clr     = get_theme_mod('top_store_woo_single_price_clr');
    $top_store_woo_single_txt_clr       = get_theme_mod('top_store_woo_single_txt_clr');
    $top_store_woo_single_bg_clr        = get_theme_mod('top_store_woo_single_bg_clr');
    $top_store_woo_single_link_clr        = get_theme_mod('top_store_woo_single_link_clr');
    $top_store_style.= ".woocommerce div.product .product_title,section.related.products h2, section.upsells.products h2,.woocommerce #reviews #comments h2{color:{$top_store_woo_single_title_clr}} .woocommerce .summary .woocommerce-product-rating .star-rating,.woocommerce .summary .star-rating,.woocommerce #reviews #comments .star-rating span, .woocommerce p.stars a, .woocommerce .woocommerce-product-rating .star-rating{color:{$top_store_woo_single_rating_clr}} .woocommerce div.product p.price, .woocommerce div.product span.price{color:{$top_store_woo_single_price_clr}} .woocommerce #content div.product div.summary, .woocommerce div.product div.summary, .woocommerce-page #content div.product div.summary, .woocommerce-page div.product div.summary,.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta,.woocommerce-tabs.wc-tabs-wrapper,.single-product .product_meta{color:{$top_store_woo_single_txt_clr}} .woocommerce-review-link,.woocommerce div.product .woocommerce-tabs ul.tabs li a,.product_meta a{color:{$top_store_woo_single_link_clr}} .thunk-single-product-summary-wrap,.woocommerce div.product .woocommerce-tabs .panel,.product_meta,section.related.products ul.products,section.upsells.products ul.products{background:{$top_store_woo_single_bg_clr}}";

    if($top_store_color_scheme=='opn-dark'){
      $top_store_style.="body.top-store-dark.woocommerce div.product .product_title,body.top-store-dark section.related.products h2, body.top-store-dark section.upsells.products h2,body.top-store-dark.woocommerce #reviews #comments h2{color:{$top_store_woo_single_title_clr}} body.top-store-dark.woocommerce .summary .woocommerce-product-rating .star-rating,body.top-store-dark.woocommerce .summary .star-rating,body.top-store-dark.woocommerce #reviews #comments .star-rating span, .woocommerce p.stars a,body.top-store-darkwoocommerce .woocommerce-product-rating .star-rating{color:{$top_store_woo_single_rating_clr}} body.top-store-dark.woocommerce div.product p.price, body.top-store-dark.woocommerce div.product span.price{color:{$top_store_woo_single_price_clr}} body.top-store-dark.woocommerce #content div.product div.summary, body.top-store-dark.woocommerce div.product div.summary, body.top-store-dark.woocommerce-page #content div.product div.summary, body.top-store-dark.woocommerce-page div.product div.summary,body.top-store-dark.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta,body.top-store-dark.woocommerce-tabs.wc-tabs-wrapper,body.top-store-dark .single-product .product_meta{color:{$top_store_woo_single_txt_clr}} .woocommerce-review-link,body.top-store-dark.woocommerce div.product .woocommerce-tabs ul.tabs li a,body.top-store-dark .product_meta a{color:{$top_store_woo_single_link_clr}} body.top-store-dark .thunk-single-product-summary-wrap,body.top-store-dark.woocommerce div.product .woocommerce-tabs .panel,body.top-store-dark .product_meta,body.top-store-dark section.related.products ul.products,body.top-store-dark section.upsells.products ul.products{background:{$top_store_woo_single_bg_clr}}";
    }

/*************************/
// Front page-head
/************************/
// top slider
$top_store_top_slider_img_ovrly_clr         = get_theme_mod('top_store_top_slider_img_ovrly_clr');
$top_store_top_slider_bg_clr         = get_theme_mod('top_store_top_slider_bg_clr');
$top_store_top_slider_hd_clr         = get_theme_mod('top_store_top_slider_hd_clr');
$top_store_top_slider_sbhd_clr       = get_theme_mod('top_store_top_slider_sbhd_clr');
$top_store_top_slider_link_clr       = get_theme_mod('top_store_top_slider_link_clr');
$top_store_top_slider_link_hvr_clr   = get_theme_mod('top_store_top_slider_link_hvr_clr');
$top_store_style.= ".th-slide-content-wrap,body.top-store-dark .th-slide-content-wrap{background:{$top_store_top_slider_bg_clr}} .slide-content h2,.slider-content-caption h2,.th-slide-title,body.top-store-dark .slide-content h2,body.top-store-dark .slider-content-caption h2,body.top-store-dark .th-slide-title{color:{$top_store_top_slider_hd_clr}} .slide-content-wrap p,.slider-content-caption p,.th-slide-subtitle,body.top-store-dark .slide-content-wrap p,body.top-store-dark .slider-content-caption p,body.top-store-dark .th-slide-subtitle{color:{$top_store_top_slider_sbhd_clr}} a.slide-btn,.th-slide-button, .th-slide-button:after,body.top-store-dark a.slide-btn,body.top-store-dark .th-slide-button,body.top-store-dark .th-slide-button:after{color:{$top_store_top_slider_link_clr}} a.slide-btn:hover,.th-slide-button:hover:after,body.top-store-dark a.slide-btn:hover,body.top-store-dark .th-slide-button:hover:after{color:{$top_store_top_slider_link_hvr_clr}} .thunk-to2-slide-list:before,.thunk-slider-section.slide-layout-5 .slides a:before{background:{$top_store_top_slider_img_ovrly_clr}}";
//category slider
$top_store_cat_slider_hd_clr         = get_theme_mod('top_store_cat_slider_hd_clr');
$top_store_cat_slider_bg_clr         = get_theme_mod('top_store_cat_slider_bg_clr');
$top_store_cat_slider_tle_clr        = get_theme_mod('top_store_cat_slider_tle_clr');

$top_store_style.=".thunk-category-slide-section .thunk-title .title,body.top-store-dark .thunk-category-slide-section .thunk-title .title{color:{$top_store_cat_slider_hd_clr}} .top-store-site section.thunk-category-slide-section .content-wrap:before,body.top-store-dark .top-store-site section.thunk-category-slide-section .content-wrap:before,.thunk-cat-text,.total-number{background-color:{$top_store_cat_slider_bg_clr}} section.thunk-category-slide-section .thunk-cat-title a,.cat-layout-3 .cat-content-3 .hover-area .cat-title,.prd-total-number,.cat-list a span,body.top-store-dark section.thunk-category-slide-section .thunk-cat-title a,body.top-store-dark .cat-layout-3 .cat-content-3 .hover-area .cat-title,body.top-store-dark .prd-total-number,body.top-store-dark .cat-list a span{color:{$top_store_cat_slider_tle_clr}} ";
//Product slider
$top_store_prd_slider_hd_clr         = get_theme_mod('top_store_prd_slider_hd_clr');
$top_store_prd_slider_bg_clr         = get_theme_mod('top_store_prd_slider_bg_clr');
$top_store_style.="section.thunk-product-slide-section .content-wrap:before,body.top-store-dark section.thunk-product-slide-section .content-wrap:before{background:{$top_store_prd_slider_bg_clr}} section.thunk-product-slide-section .thunk-title .title,body.top-store-dark section.thunk-product-slide-section .thunk-title .title{color:{$top_store_prd_slider_hd_clr}}";
//cat tab slider
$top_store_cat_tab_hd_clr       = get_theme_mod('top_store_cat_tab_hd_clr');
$top_store_cat_tab_bg_clr       = get_theme_mod('top_store_cat_tab_bg_clr');
$top_store_cat_tab_link_clr     = get_theme_mod('top_store_cat_tab_link_clr');
$top_store_cat_tab_link_hvr_clr = get_theme_mod('top_store_cat_tab_link_hvr_clr');
$top_store_style.="section.thunk-product-tab-section .content-wrap:before,body.top-store-dark section.thunk-product-tab-section .content-wrap:before{background:{$top_store_cat_tab_bg_clr}} section.thunk-product-tab-section .thunk-title .title{color:{$top_store_cat_tab_hd_clr}} section.thunk-product-tab-section .thunk-cat-tab .tab-link li a,section.thunk-product-tab-section ul.dropdown-link > li >a{color:{$top_store_cat_tab_link_clr}} section.thunk-product-tab-section .thunk-cat-tab .tab-link li a.active, section.thunk-product-tab-section .thunk-cat-tab .tab-link li a:hover,section.thunk-product-tab-section ul.dropdown-link > li >a:hover{color:{$top_store_cat_tab_link_hvr_clr}}";
//Product List slider
$top_store_product_slide_hd_clr         = get_theme_mod('top_store_product_slide_hd_clr');
$top_store_product_slide_bg_clr         = get_theme_mod('top_store_product_slide_bg_clr');
$top_store_style.="section.thunk-product-list-section .content-wrap:before,body.top-store-dark  section.thunk-product-list-section .content-wrap:before{background:{$top_store_product_slide_bg_clr}} section.thunk-product-list-section .thunk-title .title{color:{$top_store_product_slide_hd_clr}}";
//product tab list
$top_store_prdct_lst_tb_hd_clr       = get_theme_mod('top_store_prdct_lst_tb_hd_clr');
$top_store_prdct_lst_tb_bg_clr       = get_theme_mod('top_store_prdct_lst_tb_bg_clr');
$top_store_prdct_lst_tb_link_clr     = get_theme_mod('top_store_prdct_lst_tb_link_clr');
$top_store_prdct_lst_tb_link_hvr_clr = get_theme_mod('top_store_prdct_lst_tb_link_hvr_clr');
$top_store_style.="section.thunk-product-tab-list-section .content-wrap:before,body.top-store-dark section.thunk-product-tab-list-section .content-wrap:before{background:{$top_store_prdct_lst_tb_bg_clr}} section.thunk-product-tab-list-section .thunk-title .title{color:{$top_store_prdct_lst_tb_hd_clr}} section.thunk-product-tab-list-section .thunk-cat-tab .tab-link li a,section.thunk-product-tab-list-section ul.dropdown-link > li >a{color:{$top_store_prdct_lst_tb_link_clr}} section.thunk-product-tab-list-section .thunk-cat-tab .tab-link li a.active, section.thunk-product-tab-list-section .thunk-cat-tab .tab-link li a:hover,section.thunk-product-tab-list-section ul.dropdown-link > li >a:hover{color:{$top_store_prdct_lst_tb_link_hvr_clr}}";
//banner
$top_store_banner_bg_clr       = get_theme_mod('top_store_banner_bg_clr');
$top_store_style.="section.thunk-banner-section .content-wrap:before,body.top-store-dark section.thunk-banner-section .content-wrap:before{background:{$top_store_banner_bg_clr}}";
//brand
$top_store_brand_bg_clr       = get_theme_mod('top_store_brand_bg_clr');
$top_store_style.="section.thunk-brand-section .content-wrap:before,body.top-store-dark section.thunk-brand-section .content-wrap:before{background:{$top_store_brand_bg_clr}!important}";
//ribbon
   $top_store_ribbon_bg_img_url             = get_theme_mod('top_store_ribbon_bg_img_url');
   $top_store_ribbon_bg_background_repeat   = get_theme_mod('top_store_ribbon_bg_background_repeat','no-repeat');
   $top_store_ribbon_bg_background_size     = get_theme_mod('top_store_ribbon_bg_background_size','auto');
   $top_store_ribbon_bg_background_position = get_theme_mod('top_store_ribbon_bg_background_position','center center');
   $top_store_ribbon_bg_background_attach  = get_theme_mod('top_store_ribbon_bg_background_attach','scroll');
   $top_store_style.="section.thunk-ribbon-section .content-wrap{
    background-image:url($top_store_ribbon_bg_img_url);
    background-repeat:{$top_store_ribbon_bg_background_repeat};
    background-size:{$top_store_ribbon_bg_background_size};
    background-position:{$top_store_ribbon_bg_background_position};
    background-attachment:{$top_store_ribbon_bg_background_attach};}";
   $top_store_rbn_bg_clr      = get_theme_mod('top_store_rbn_bg_clr');
   $top_store_rbn_tle_clr     = get_theme_mod('top_store_rbn_tle_clr');
   $top_store_rbn_btn_bg_clr  = get_theme_mod('top_store_rbn_btn_bg_clr');
   $top_store_rbn_btn_txt_clr = get_theme_mod('top_store_rbn_btn_txt_clr');
   $top_store_style.=".top-store-site section.thunk-ribbon-section .content-wrap:before,body.top-store-dark .top-store-site section.thunk-ribbon-section .content-wrap:before{background:{$top_store_rbn_bg_clr }} .thunk-ribbon-content-col1 h3{color:{$top_store_rbn_tle_clr}} .ribbon-btn,body.top-store-dark .ribbon-btn{background:{$top_store_rbn_btn_bg_clr}; 
     color:{$top_store_rbn_btn_txt_clr}}";

     if ($top_store_ribbon_bg_img_url != '') {
      $top_store_style.="
      .top-store-site section.thunk-ribbon-section .content-wrap:before{
        opacity:0.4;
      } ";
    }

//Highlight
$top_store_hglght_bg_clr          = get_theme_mod('top_store_hglght_bg_clr');
$top_store_hglght_tle_clr         = get_theme_mod('top_store_hglght_tle_clr');
$top_store_hglght_desc_clr        = get_theme_mod('top_store_hglght_desc_clr');
$top_store_hglght_icon_clr        = get_theme_mod('top_store_hglght_icon_clr');
$top_store_style.="section.thunk-product-highlight-section .content-wrap:before,body.top-store-dark section.thunk-product-highlight-section .content-wrap:before{background:{$top_store_hglght_bg_clr}} section.thunk-product-highlight-section .thunk-hglt-box h6{color:{$top_store_hglght_tle_clr}} section.thunk-product-highlight-section .thunk-hglt-box p{color:{$top_store_hglght_desc_clr}} section.thunk-product-highlight-section .thunk-hglt-icon{color:{$top_store_hglght_icon_clr}}";
//Big Featured Product
$top_store_ftrd_prdct_bg_clr          = get_theme_mod('top_store_ftrd_prdct_bg_clr');
$top_store_ftrd_prdct_tle_clr         = get_theme_mod('top_store_ftrd_prdct_tle_clr');
$top_store_ftrd_prdct_link_clr        = get_theme_mod('top_store_ftrd_prdct_link_clr');
$top_store_ftrd_prdct_link_hvr_clr    = get_theme_mod('top_store_ftrd_prdct_link_hvr_clr');
$top_store_style.="section.thunk-feature-product-section .content-wrap:before,body.top-store-dark section.thunk-feature-product-section .content-wrap:before{background:{$top_store_ftrd_prdct_bg_clr}} section.thunk-feature-product-section .thunk-title .title{color:{$top_store_ftrd_prdct_tle_clr}} section.thunk-feature-product-section .thunk-cat-tab .tab-link li a,section.thunk-feature-product-section ul.dropdown-link > li >a{color:{$top_store_ftrd_prdct_link_clr}} section.thunk-feature-product-section .thunk-cat-tab .tab-link li a.active,section.thunk-feature-product-section .thunk-cat-tab .tab-link li a:hover,section.thunk-feature-product-section ul.dropdown-link > li >a:hover{color:{$top_store_ftrd_prdct_link_hvr_clr}}";
/******************/
//Custom one color
/******************/
$top_store_custom_one_bg_color   = get_theme_mod('top_store_custom_one_bg_color');
$top_store_custom_one_tle_clr    = get_theme_mod('top_store_custom_one_tle_clr');
$top_store_style.="section.thunk-custom-one-section .thunk-title .title{color:{$top_store_custom_one_tle_clr}} section.thunk-custom-one-section .content-wrap:before,body.top-store-dark section.thunk-custom-one-section .content-wrap:before{background:{$top_store_custom_one_bg_color}}";
/******************/
//Custom two color
/******************/
$top_store_custom_two_bg_color   = get_theme_mod('top_store_custom_two_bg_color');
$top_store_custom_two_tle_clr    = get_theme_mod('top_store_custom_two_tle_clr');
$top_store_style.="section.thunk-custom-two-section .thunk-title .title{color:{$top_store_custom_two_tle_clr}} section.thunk-custom-two-section .content-wrap:before,body.top-store-dark section.thunk-custom-two-section .content-wrap:before{background:{$top_store_custom_two_bg_color}}";

/******************/
//Custom three color
/******************/
$top_store_custom_three_bg_color   = get_theme_mod('top_store_custom_three_bg_color');
$top_store_custom_three_tle_clr    = get_theme_mod('top_store_custom_three_tle_clr');
$top_store_style.="section.thunk-custom-three-section .thunk-title .title{color:{$top_store_custom_three_tle_clr}} section.thunk-custom-three-section .content-wrap:before,body.top-store-dark section.thunk-custom-three-section .content-wrap:before{background:{$top_store_custom_three_bg_color}}";

/******************/
//Custom Four color
/******************/
$top_store_custom_four_bg_color   = get_theme_mod('top_store_custom_four_bg_color');
$top_store_custom_four_tle_clr    = get_theme_mod('top_store_custom_foure_tle_clr');
$top_store_style.="section.thunk-custom-three-section .thunk-title .title{color:{$top_store_custom_four_tle_clr}} section.thunk-custom-three-section .content-wrap:before,body.top-store-dark section.thunk-custom-three-section .content-wrap:before{background:{$top_store_custom_four_bg_color}}";
/******************/
//Custom five color
/******************/
$top_store_custom_five_bg_color   = get_theme_mod('top_store_custom_five_bg_color');
$top_store_custom_five_tle_clr    = get_theme_mod('top_store_custom_five_tle_clr');
$top_store_style.="section.thunk-custom-five-section .thunk-title .title{color:{$top_store_custom_five_tle_clr}} section.thunk-custom-five-section .content-wrap:before,body.top-store-dark section.thunk-custom-five-section .content-wrap:before{background:{$top_store_custom_five_bg_color}}";
/****************/
//Page Content
/****************/
$top_store_content_bg_clr          = get_theme_mod('top_store_content_bg_clr');
$top_store_content_h1_clr          = get_theme_mod('top_store_content_h1_clr');
$top_store_content_h2_clr          = get_theme_mod('top_store_content_h2_clr');
$top_store_content_h3_clr          = get_theme_mod('top_store_content_h3_clr');
$top_store_content_h4_clr          = get_theme_mod('top_store_content_h4_clr');
$top_store_content_h5_clr          = get_theme_mod('top_store_content_h5_clr');
$top_store_content_h6_clr          = get_theme_mod('top_store_content_h6_clr');
$top_store_style.=".thunk-page .thunk-content-wrap,article.thunk-article, article.thunk-post-article, .single article{background:{$top_store_content_bg_clr}} .entry-content h1{color:{$top_store_content_h1_clr}} .entry-content h2{color:{$top_store_content_h2_clr}} .entry-content h3{color:{$top_store_content_h3_clr}} .entry-content h4{color:{$top_store_content_h4_clr}} .entry-content h5{color:{$top_store_content_h5_clr}} .entry-content h6{color:{$top_store_content_h6_clr}}";

if($top_store_color_scheme=='opn-dark'){
      $top_store_style.="body.top-store-dark .thunk-page .thunk-content-wrap,body.top-store-dark article.thunk-article,body.top-store-dark article.thunk-post-article,body.top-store-dark .single article{background:{$top_store_content_bg_clr}} body.top-store-dark .entry-content h1{color:{$top_store_content_h1_clr}}body.top-store-dark .entry-content h2{color:{$top_store_content_h2_clr}} body.top-store-dark .entry-content h3{color:{$top_store_content_h3_clr}} body.top-store-dark .entry-content h4{color:{$top_store_content_h4_clr}} body.top-store-dark .entry-content h5{color:{$top_store_content_h5_clr}} body.top-store-dark .entry-content h6{color:{$top_store_content_h6_clr}}";

}

/*******************************/
// Sticky Header
/********************************/
$top_store_sticky_hdr_bg_clr                  = get_theme_mod('top_store_sticky_hdr_bg_clr','#fff');
$top_store_pro_sticky_header_background_image_url = get_theme_mod('top_store_pro_sticky_header_background_image_url');
$top_store_pro_sticky_header_background_repeat    = get_theme_mod('top_store_pro_sticky_header_background_repeat','no-repeat');
$top_store_pro_sticky_header_background_size      = get_theme_mod('top_store_pro_sticky_header_background_size','auto');
$top_store_pro_sticky_header_background_position  = get_theme_mod('top_store_pro_sticky_header_background_position','center center');
$top_store_pro_sticky_header_background_attach    = get_theme_mod('top_store_pro_sticky_header_background_attach','scroll');
$top_store_style.=".sticky-header:before,.search-wrapper:before{background:{$top_store_sticky_hdr_bg_clr}} .sticky-header,.search-wrapper{
    background-image:url($top_store_pro_sticky_header_background_image_url);
    background-repeat:{$top_store_pro_sticky_header_background_repeat};
    background-size:{$top_store_pro_sticky_header_background_size};
    background-position:{$top_store_pro_sticky_header_background_position};
    background-attachment:{$top_store_pro_sticky_header_background_attach};}";

// sticky title color
$top_store_pro_sticky_header_sitetitle_clr     = get_theme_mod('top_store_pro_sticky_header_sitetitle_clr');
$top_store_pro_sticky_header_sitetitle_hvr_clr = get_theme_mod('top_store_pro_sticky_header_sitetitle_hvr_clr');
$top_store_pro_sticky_header_sitetagline_clr = get_theme_mod('top_store_pro_sticky_header_sitetagline_clr');
$top_store_style.=".sticky-header .site-title span a{color:{$top_store_pro_sticky_header_sitetitle_clr}} .sticky-header .site-title span a:hover{color:{$top_store_pro_sticky_header_sitetitle_hvr_clr}} .sticky-header .site-description p{color:{$top_store_pro_sticky_header_sitetagline_clr}}";
//menu
$top_store_pro_sticky_header_menu_link_clr = get_theme_mod('top_store_pro_sticky_header_menu_link_clr');
$top_store_pro_sticky_header_menu_link_hvr_clr = get_theme_mod('top_store_pro_sticky_header_menu_link_hvr_clr');
$top_store_style.=".sticky-header .top-store-menu > li > a{color:{$top_store_pro_sticky_header_menu_link_clr}} 
.sticky-header .top-store-menu > li > a:hover{color:{$top_store_pro_sticky_header_menu_link_hvr_clr}}";
//sub-menu
$top_store_pro_sticky_header_sbmenu_bg_clr          = get_theme_mod('top_store_pro_sticky_header_sbmenu_bg_clr');
$top_store_pro_sticky_header_sbmenu_link_clr        = get_theme_mod('top_store_pro_sticky_header_sbmenu_link_clr');
$top_store_pro_sticky_header_sbmenu_link_hvr_clr    = get_theme_mod('top_store_pro_sticky_header_sbmenu_link_hvr_clr');
$top_store_pro_sticky_header_sbmenu_link_hvr_bg_clr = get_theme_mod('top_store_pro_sticky_header_sbmenu_link_hvr_bg_clr');
$top_store_style.=".sticky-header .top-store-menu ul.sub-menu{background:{$top_store_pro_sticky_header_sbmenu_bg_clr}}
.sticky-header .top-store-menu li ul.sub-menu li a{color:{$top_store_pro_sticky_header_sbmenu_link_clr}} 
.sticky-header .top-store-menu li ul.sub-menu li a:hover{color:{$top_store_pro_sticky_header_sbmenu_link_hvr_clr}} 
.sticky-header .top-store-menu li ul.sub-menu li a:hover{background:{$top_store_pro_sticky_header_sbmenu_link_hvr_bg_clr}}";
// sticky header icon
// $top_store_sticky_hdr_icon_bg_clr  = get_theme_mod('top_store_sticky_hdr_icon_bg_clr');
$top_store_sticky_icon_clr              = get_theme_mod('top_store_sticky_icon_clr');
$top_store_style.=".sticky-header .header-icon a,
.sticky-header .thunk-icon .cart-icon a.cart-contents{color:{$top_store_sticky_icon_clr}} 
.sticky-header .menu-toggle .icon-bar{
  background:{$top_store_sticky_icon_clr}
}
";
if($top_store_color_scheme=='opn-dark'){
      $top_store_style.="body.top-store-dark .sticky-header:before,body.top-store-dark
      .search-wrapper:before{background:{$top_store_sticky_hdr_bg_clr}} body.top-store-dark .sticky-header,body.top-store-dark .search-wrapper{
    background-image:url($top_store_pro_sticky_header_background_image_url);
    background-repeat:{$top_store_pro_sticky_header_background_repeat};
    background-size:{$top_store_pro_sticky_header_background_size};
    background-position:{$top_store_pro_sticky_header_background_position};
    background-attachment:{$top_store_pro_sticky_header_background_attach};}

    body.top-store-dark .sticky-header .site-title span a{color:{$top_store_pro_sticky_header_sitetitle_clr}} body.top-store-dark .sticky-header .site-title span a:hover{color:{$top_store_pro_sticky_header_sitetitle_hvr_clr}} body.top-store-dark .sticky-header .site-description p{color:{$top_store_pro_sticky_header_sitetagline_clr}}

    body.top-store-dark .sticky-header .top-store-menu > li > a{color:{$top_store_pro_sticky_header_menu_link_clr}} 
body.top-store-dark .sticky-header .top-store-menu > li > a:hover{color:{$top_store_pro_sticky_header_menu_link_hvr_clr}}

body.top-store-dark .sticky-header .top-store-menu ul.sub-menu{background:{$top_store_pro_sticky_header_sbmenu_bg_clr}}
body.top-store-dark .sticky-header .top-store-menu li ul.sub-menu li a{color:{$top_store_pro_sticky_header_sbmenu_link_clr}} 
body.top-store-dark .sticky-header .top-store-menu li ul.sub-menu li a:hover{color:{$top_store_pro_sticky_header_sbmenu_link_hvr_clr}} 
body.top-store-dark .sticky-header .top-store-menu li ul.sub-menu li a:hover{background:{$top_store_pro_sticky_header_sbmenu_link_hvr_bg_clr}} 

body.top-store-dark .sticky-header .header-icon a,body.top-store-dark .sticky-header-col3 .thunk-icon .cart-icon a.cart-contents,body.top-store-dark .search-wrapper .search-close-btn,.sticky-header .thunk-icon .cart-icon a.cart-contents{color:{$top_store_sticky_icon_clr}} body.top-store-dark .sticky-header .menu-toggle .icon-bar{background:{$top_store_sticky_icon_clr}}";

}
//Mobile pan
$top_store_mobile_hamburger_clr            = get_theme_mod('top_store_mobile_hamburger_clr');
$top_store_mobile_pan_bg_clr            = get_theme_mod('top_store_mobile_pan_bg_clr');
$top_store_mobile_pan_menu_link_clr     = get_theme_mod('top_store_mobile_pan_menu_link_clr');
$top_store_mobile_pan_menu_link_hvr_clr = get_theme_mod('top_store_mobile_pan_menu_link_hvr_clr');

$top_store_mobile_pan_close_bg_clr           = get_theme_mod('top_store_mobile_pan_close_bg_clr');
$top_store_mobile_pan_menu_close_icon_clr    = get_theme_mod('top_store_mobile_pan_menu_close_icon_clr');
$top_store_style.="@media screen and (max-width:1024px){.sider.left,.sider.right,.mobile-menu-active .sider.overcenter, .sticky-mobile-menu-active .sider.overcenter, .mobile-bottom-menu-active .sider.overcenter{background:{$top_store_mobile_pan_bg_clr}} .top-store-menu li a,.sider.overcenter .sider-inner ul.top-store-menu li a{color:{$top_store_mobile_pan_menu_link_clr}} .top-store-menu li a:hover,.sider.overcenter .sider-inner ul.top-store-menu li a:hover{color:{$top_store_mobile_pan_menu_link_hvr_clr}} .left .menu-close, .right .menu-close {background: {$top_store_mobile_pan_close_bg_clr}} .right .menu-close a,.left .menu-close a,.overcenter .menu-close-btn,.menu-close-btn{color:{$top_store_mobile_pan_menu_close_icon_clr}}.menu-toggle .icon-bar{background:{$top_store_mobile_hamburger_clr}}.menu-toggle .menu-btn span{color:{$top_store_mobile_hamburger_clr}}}";

if($top_store_color_scheme=='opn-dark'){
  $top_store_style.="@media screen and (max-width:1024px){body.top-store-dark .sider.left,.sider.right,body.top-store-dark.mobile-menu-active .sider.overcenter, body.top-store-dark.sticky-mobile-menu-active .sider.overcenter, body.top-store-dark.mobile-bottom-menu-active .sider.overcenter{background:{$top_store_mobile_pan_bg_clr}} body.top-store-dark .top-store-menu li a,.sider.overcenter .sider-inner ul.top-store-menu li a{color:{$top_store_mobile_pan_menu_link_clr}} .top-store-menu li a:hover,body.top-store-dark .sider.overcenter .sider-inner ul.top-store-menu li a:hover{color:{$top_store_mobile_pan_menu_link_hvr_clr}} body.top-store-dark .left .menu-close, .right .menu-close {background: {$top_store_mobile_pan_close_bg_clr}} .right .menu-close a,body.top-store-dark .left .menu-close a,body.top-store-dark .overcenter .menu-close-btn,body.top-store-dark .menu-close-btn{color:{$top_store_mobile_pan_menu_close_icon_clr}}body.top-store-dark .menu-toggle .icon-bar{background:{$top_store_mobile_hamburger_clr}}body.top-store-dark .menu-toggle .menu-btn span{color:{$top_store_mobile_hamburger_clr}}}";
}
//Canvas pan
$top_store_canvas_icon_clr        = get_theme_mod('top_store_canvas_icon_clr');
$top_store_canvas_pan_bg_clr      = get_theme_mod('top_store_canvas_pan_bg_clr');
$top_store_canvas_title_clr       = get_theme_mod('top_store_canvas_title_clr');
$top_store_canvas_link_clr        = get_theme_mod('top_store_canvas_link_clr');
$top_store_canvas_link_hvr_clr    = get_theme_mod('top_store_canvas_link_hvr_clr');
$top_store_canvas_content_clr     = get_theme_mod('top_store_canvas_content_clr');
$top_store_canvas_close_bg_clr    = get_theme_mod('top_store_canvas_close_bg_clr');
$top_store_canvas_close_icon_clr  = get_theme_mod('top_store_canvas_close_icon_clr');
$top_store_style.=".top-store-off-canvas-sidebar-wrapper.from-left .top-store-off-canvas-sidebar,
.top-store-off-canvas-sidebar-wrapper.from-right .top-store-off-canvas-sidebar{background:{$top_store_canvas_pan_bg_clr}} .top-store-off-canvas-sidebar .top-store-widget-content .widget-title{color:{$top_store_canvas_title_clr}} .top-store-off-canvas-sidebar .top-store-widget-content li a,.top-store-off-canvas-sidebar .top-store-widget-content .title{color:{$top_store_canvas_link_clr}} .top-store-off-canvas-sidebar .top-store-widget-content li a:hover,.top-store-off-canvas-sidebar .top-store-widget-content .title:hover{color:{$top_store_canvas_link_hvr_clr}} .top-store-off-canvas-sidebar-wrapper .top-store-widget-content{color:{$top_store_canvas_content_clr}} .top-store-off-canvas-sidebar-wrapper.from-left .close-bn,.top-store-off-canvas-sidebar-wrapper.from-right .close-bn{    background:{$top_store_canvas_close_bg_clr}} .top-store-off-canvas-sidebar-wrapper .close{color:{$top_store_canvas_close_icon_clr}} .off-canvas-button span{background:{$top_store_canvas_icon_clr}}";

 if(get_theme_mod('top_store_cart_mobile_disable')==true || get_theme_mod('top_store_pro_account_mobile_disable')==true || get_theme_mod('top_store_whislist_mobile_disable')==true){
        $top_store_style.="@media screen and (max-width: 767px){.mhdrdefault .below-header-bar{
        display:flex;
        }
        .mhdrdefault .below-header-col2{
        width:100%;
        }}";
}
//Hide yith if WPC SMART Icon 
if( (class_exists( 'WPCleverWoosw' ))){
$top_store_style.=" .woocommerce .entry-summary .yith-wcwl-add-to-wishlist{
  display:none;
}
";
}
if( (class_exists( 'WPCleverWooscp' ))){
$top_store_style.=" .woocommerce .entry-summary a.compare.button{
  display:none;
}
";
}
//Move to top 
$top_store_move_to_top_bg_clr      = get_theme_mod('top_store_move_to_top_bg_clr');
$top_store_move_to_top_icon_clr    = get_theme_mod('top_store_move_to_top_icon_clr');
$top_store_style.="#move-to-top{background:{$top_store_move_to_top_bg_clr};color:{$top_store_move_to_top_icon_clr}}";

/*************************/
// Inner Page Template
/*************************/
   $top_store_faq_background_color      = get_theme_mod('top_store_faq_background_color');
   $top_store_faq_title_color           = get_theme_mod('top_store_faq_title_color');
   $top_store_faq_text_color            = get_theme_mod('top_store_faq_text_color');
   $top_store_faq_title_bg_color        = get_theme_mod('top_store_faq_title_bg_color');
   $top_store_faq_symbol_color          = get_theme_mod('top_store_faq_symbol_color');
   $top_store_style.=".thunk-faq-body-wrap .thunk-content-wrap{
    background:{$top_store_faq_background_color}
   }
   .thunk-accordion .ac > .ac-q{
      background:{$top_store_faq_title_bg_color};
      color:{$top_store_faq_title_color };
    }
    .thunk-accordion .ac > .ac-a p{
      color:{$top_store_faq_text_color};
    }
   .thunk-accordion .accordion-container .ac > .ac-q::after{
      color:{$top_store_faq_symbol_color};
    }";

// inner page Template
$top_store_contact_background_color = get_theme_mod('top_store_contact_background_color');
$top_store_contact_txt_color = get_theme_mod('top_store_contact_txt_color');
$top_store_style.=" .page-contact .thunk-content-wrap{background:{$top_store_contact_background_color}} .thunk-contact-col p,.page-contact .leadform-show-form textarea, .page-contact .leadform-show-form input:not([type]), .page-contact .leadform-show-form input[type='email'], .page-contact .leadform-show-form input[type='number'], .page-contact .leadform-show-form input[type='password'], .page-contact .leadform-show-form input[type='tel'], .page-contact .leadform-show-form input[type='url'], .page-contact .leadform-show-form input[type='text'], .page-contact .leadform-show-form input[type='number']{color:{$top_store_contact_txt_color}}";

//************************************/
// Remove Section Content Padding
//************************************/
if(get_theme_mod('top_store_cat_tb_zero_padding')==true){
  $top_store_style.="#thunk-cat-tab .content-wrap{padding-right:0;padding-left:0;} #thunk-cat-tab .thunk-slide .owl-nav{right:0;}";
}
if(get_theme_mod('top_store_product_slider_zero_padding')==true){
  $top_store_style.="section.thunk-product-slide-section .content-wrap{padding-right:0;padding-left:0;} section.thunk-product-slide-section .thunk-slide .owl-nav{right:0;}";
}
if(get_theme_mod('top_store_category_slider_zero_padding')==true){
  $top_store_style.="section.thunk-category-slide-section .content-wrap{padding-right:0;padding-left:0;} section.thunk-category-slide-section .thunk-slide .owl-nav{right:0;}";
}
if(get_theme_mod('top_store_product_list_slide_zero_padding')==true){
  $top_store_style.="section.thunk-product-list-section .content-wrap{padding-right:0;padding-left:0;} section.thunk-product-list-section .thunk-slide .owl-nav{right:0;}";
}
if(get_theme_mod('top_store_feature_product_slider_zero_padding')==true){
  $top_store_style.="section.thunk-feature-product-section .content-wrap{padding-right:0;padding-left:0;} section.thunk-feature-product-section #thunk-feature-product-tab .owl-nav{right: -67%;}";
}
if(get_theme_mod('top_store_cat_tb_lst_slider_zero_padding')==true){
  $top_store_style.="section.thunk-product-tab-list-section .content-wrap{padding-right:0;padding-left:0;} section.thunk-product-tab-list-section .thunk-slide .owl-nav{right:0;}";
}
if(get_theme_mod('top_store_bnr_zero_padding')==true){
  $top_store_style.="section.thunk-banner-section .content-wrap{padding-right:0;padding-left:0;} section.thunk-banner-section .thunk-slide .owl-nav{right:0;}";
}
if(get_theme_mod('top_store_custom_section1_zero_padding')==true){
  $top_store_style.="section.thunk-custom-one-section .content-wrap{padding-right:0;padding-left:0;} ";
}
if(get_theme_mod('top_store_custom_section2_zero_padding')==true){
  $top_store_style.="section.thunk-custom-two-section .content-wrap{padding-right:0;padding-left:0;} ";
}
if(get_theme_mod('top_store_custom_section3_zero_padding')==true){
  $top_store_style.="section.thunk-custom-three-section .content-wrap{padding-right:0;padding-left:0;} ";
}
if(get_theme_mod('top_store_custom_section4_zero_padding')==true){
  $top_store_style.="section.thunk-custom-four-section .content-wrap{padding-right:0;padding-left:0;} ";
}
if(get_theme_mod('top_store_custom_section5_zero_padding')==true){
  $top_store_style.="section.thunk-custom-five-section .content-wrap{padding-right:0;padding-left:0;} ";
}
return $top_store_style;
}
//start logo width
function top_store_pro_logo_width_responsive( $value, $dimension = 'desktop' ){
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
  $custom_css .= '.thunk-logo img,.sticky-header .logo-content img{
    max-width: ' . $v3 . 'px;
  }';
  $custom_css = top_store_pro_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
// top header height
function top_store_pro_top_header_height_responsive( $value, $dimension = 'desktop' ){
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
  $custom_css .= '.top-header .top-header-bar{
    line-height: ' . $v3 . 'px;
  }';
  $custom_css = top_store_pro_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
function top_store_pro_abv_hdr_botm_brd_responsive( $value, $dimension = 'desktop' ){
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
  $custom_css .= '.top-header{
    border-bottom-width: ' . $v3 . 'px;
  }';
  $custom_css = top_store_pro_add_media_query( $dimension, $custom_css );
  return $custom_css;
}

// top footer height
function top_store_pro_top_footer_height_responsive( $value, $dimension = 'desktop' ){
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
  $custom_css .= '.top-footer .top-footer-bar{
    line-height: ' . $v3 . 'px;
  }';
  $custom_css = top_store_pro_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
function top_store_pro_top_footer_border_responsive( $value, $dimension = 'desktop' ){
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
  $custom_css .= '.top-footer{
    border-bottom-width: ' . $v3 . 'px;
  }';
  $custom_css = top_store_pro_add_media_query( $dimension, $custom_css );
  return $custom_css;
}

// below footer height
function top_store_pro_below_footer_height_responsive( $value, $dimension = 'desktop' ){
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
  $custom_css .= '.below-footer .below-footer-bar{
    line-height: ' . $v3 . 'px;
  }';
  $custom_css = top_store_pro_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
function top_store_pro_below_footer_border_responsive( $value, $dimension = 'desktop' ){
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
  $custom_css .= '.below-footer{
    border-top-width: ' . $v3 . 'px;
  }';
  $custom_css = top_store_pro_add_media_query( $dimension, $custom_css );
  return $custom_css;
}