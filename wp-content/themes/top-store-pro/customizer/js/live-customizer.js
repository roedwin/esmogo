/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ){
/**
 * Dynamic Internal/Embedded Style for a Control
 */
function top_store_add_dynamic_css( control, style ){
      control = control.replace( '[', '-' );
      control = control.replace( ']', '' );
      jQuery( 'style#' + control ).remove();

      jQuery( 'head' ).append(
            '<style id="' + control + '">' + style + '</style>'
      );
}
/**
 * Responsive Spacing CSS
 */
function top_store_responsive_spacing( control, selector, type, side ){
    wp.customize( control, function( value ){
        value.bind( function( value ){
            var sidesString = "";
            var spacingType = "padding";
            if ( value.desktop.top || value.desktop.right || value.desktop.bottom || value.desktop.left || value.tablet.top || value.tablet.right || value.tablet.bottom || value.tablet.left || value.mobile.top || value.mobile.right || value.mobile.bottom || value.mobile.left ) {
                if ( typeof side != undefined ) {
                    sidesString = side + "";
                    sidesString = sidesString.replace(/,/g , "-");
                }
                if ( typeof type != undefined ) {
                    spacingType = type + "";
                }
                // Remove <style> first!
                control = control.replace( '[', '-' );
                control = control.replace( ']', '' );
                jQuery( 'style#' + control + '-' + spacingType + '-' + sidesString ).remove();

                var desktopPadding = '',
                    tabletPadding = '',
                    mobilePadding = '';

                var paddingSide = ( typeof side != undefined ) ? side : [ 'top','bottom','right','left' ];

                jQuery.each(paddingSide, function( index, sideValue ){
                    if ( '' != value['desktop'][sideValue] ) {
                        desktopPadding += spacingType + '-' + sideValue +': ' + value['desktop'][sideValue] + value['desktop-unit'] +';';
                    }
                });

                jQuery.each(paddingSide, function( index, sideValue ){
                    if ( '' != value['tablet'][sideValue] ) {
                        tabletPadding += spacingType + '-' + sideValue +': ' + value['tablet'][sideValue] + value['tablet-unit'] +';';
                    }
                });

                jQuery.each(paddingSide, function( index, sideValue ){
                    if ( '' != value['mobile'][sideValue] ) {
                        mobilePadding += spacingType + '-' + sideValue +': ' + value['mobile'][sideValue] + value['mobile-unit'] +';';
                    }
                });

                // Concat and append new <style>.
                jQuery( 'head' ).append(
                    '<style id="' + control + '-' + spacingType + '-' + sidesString + '">'
                    + selector + '  { ' + desktopPadding +' }'
                    + '@media (max-width: 768px) {' + selector + '  { ' + tabletPadding + ' } }'
                    + '@media (max-width: 544px) {' + selector + '  { ' + mobilePadding + ' } }'
                    + '</style>'
                );

            } else {
                wp.customize.preview.send( 'refresh' );
                jQuery( 'style#' + control + '-' + spacingType + '-' + sidesString ).remove();
            }

        } );
    } );
}
/**
 * Apply CSS for the element
 */
function top_store_css( control, css_property, selector, unit ){

    wp.customize( control, function( value ) {
        value.bind( function( new_value ) {

            // Remove <style> first!
            control = control.replace( '[', '-' );
            control = control.replace( ']', '' );

            if ( new_value ){
                /**
                 *  If ( unit == 'url' ) then = url('{VALUE}')
                 *  If ( unit == 'px' ) then = {VALUE}px
                 *  If ( unit == 'em' ) then = {VALUE}em
                 *  If ( unit == 'rem' ) then = {VALUE}rem.
                 */
                if ( 'undefined' != typeof unit) {
                    if ( 'url' === unit ) {
                        new_value = 'url(' + new_value + ')';
                    } else {
                        new_value = new_value + unit;
                    }
                }

                // Remove old.
                jQuery( 'style#' + control ).remove();

                // Concat and append new <style>.
                jQuery( 'head' ).append(
                    '<style id="' + control + '">'
                    + selector + '  { ' + css_property + ': ' + new_value + ' }'
                    + '</style>'
                );

            } else {

                wp.customize.preview.send( 'refresh' );

                // Remove old.
                jQuery( 'style#' + control ).remove();
            }

        } );
    } );
}
/*******************************/
// Range slider live customizer
/*******************************/
function topStoreGetCss( arraySizes, settings, to ) {
    'use strict';
    var data, desktopVal, tabletVal, mobileVal,
        className = settings.styleClass, i = 1;

    var val = JSON.parse( to );
    if ( typeof( val ) === 'object' && val !== null ) {
        if ('desktop' in val) {
            desktopVal = val.desktop;
        }
        if ('tablet' in val) {
            tabletVal = val.tablet;
        }
        if ('mobile' in val) {
            mobileVal = val.mobile;
        }
    }

    for ( var key in arraySizes ) {
        // skip loop if the property is from prototype
        if ( ! arraySizes.hasOwnProperty( key )) {
            continue;
        }
        var obj = arraySizes[key];
        var limit = 0;
        var correlation = [1,1,1];
        if ( typeof( val ) === 'object' && val !== null ) {

            if( typeof obj.limit !== 'undefined'){
                limit = obj.limit;
            }

            if( typeof obj.correlation !== 'undefined'){
                correlation = obj.correlation;
            }

            data = {
                desktop: ( parseInt(parseFloat( desktopVal ) / correlation[0]) + obj.values[0]) > limit ? ( parseInt(parseFloat( desktopVal ) / correlation[0]) + obj.values[0] ) : limit,
                tablet: ( parseInt(parseFloat( tabletVal ) / correlation[1]) + obj.values[1] ) > limit ? ( parseInt(parseFloat( tabletVal ) / correlation[1]) + obj.values[1] ) : limit,
                mobile: ( parseInt(parseFloat( mobileVal ) / correlation[2]) + obj.values[2] ) > limit ? ( parseInt(parseFloat( mobileVal ) / correlation[2]) + obj.values[2] ) : limit
            };
        } else {
            if( typeof obj.limit !== 'undefined'){
                limit = obj.limit;
            }

            if( typeof obj.correlation !== 'undefined'){
                correlation = obj.correlation;
            }
            data =( parseInt( parseFloat( to ) / correlation[0] ) ) + obj.values[0] > limit ? ( parseInt( parseFloat( to ) / correlation[0] ) ) + obj.values[0] : limit;
        }
        settings.styleClass = className + '-' + i;
        settings.selectors  = obj.selectors;

        topStoreSetCss( settings, data );
        i++;
    }
}
function topStoreSetCss( settings, to ){
    'use strict';
    var result     = '';
    var styleClass = jQuery( '.' + settings.styleClass );
    if ( to !== null && typeof to === 'object' ){
        jQuery.each(
            to, function ( key, value ) {
                var style_to_add;
                if ( settings.selectors === '.container' ){
                    style_to_add = settings.selectors + '{ ' + settings.cssProperty + ':' + value + settings.propertyUnit + '; max-width: 100%; }';
                } else {
                    style_to_add = settings.selectors + '{ ' + settings.cssProperty + ':' + value + settings.propertyUnit + '}';
                }
                switch ( key ) {
                    case 'desktop':
                        result += style_to_add;
                        break;
                    case 'tablet':
                        result += '@media (max-width: 767px){' + style_to_add + '}';
                        break;
                    case 'mobile':
                        result += '@media (max-width: 544px){' + style_to_add + '}';
                        break;
                }
            }
        );
        if ( styleClass.length > 0 ) {
            styleClass.text( result );
        } else {
            jQuery( 'head' ).append( '<style type="text/css" class="' + settings.styleClass + '">' + result + '</style>' );
        }
    } else {
        jQuery( settings.selectors ).css( settings.cssProperty, to + 'px' );
    }
}
//*****************************/
// Logo
//*****************************/
wp.customize(
    'top_store_pro_logo_width', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'max-width',
                    propertyUnit: 'px',
                    styleClass: 'top-store-logo-width'
                };

                var arraySizes = {
                    size3: { selectors:'.thunk-logo img,.sticky-header .logo-content img', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
//top header
wp.customize('top_store_col1_texthtml', function(value){
         value.bind(function(to){
             $('.top-header-col1 .content-html').text(to);
         });
     });
 wp.customize('top_store_col2_texthtml', function(value){
         value.bind(function(to) {
             $('.top-header-col2 .content-html').text(to);
         });
     });
 wp.customize('top_store_col3_texthtml', function(value){
         value.bind(function(to) {
             $('.top-header-col3 .content-html').text(to);
         });
     });
top_store_css( 'top_store_abv_hdr_botm_brd','border-bottom-width', '.top-header', 'px' );
top_store_css( 'top_store_above_brdr_clr','border-bottom-color', '.top-header,body.top-store-dark .top-header');
wp.customize(
    'top_store_abv_hdr_hgt', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'line-height',
                    propertyUnit: 'px',
                    styleClass: ''
                };

                var arraySizes = {
                    size3: { selectors:'.top-header .top-header-bar', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_abv_hdr_botm_brd', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'border-bottom-width',
                    propertyUnit: 'px',
                    styleClass: ''
                };

                var arraySizes = {
                    size3: { selectors:'.top-header', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
/***************/
// MAIN HEADER
/***************/
wp.customize('top_store_main_hdr_btn_txt', function(value){
         value.bind(function(to){
             $('.btn-main-header').text(to);
         });
});
wp.customize('top_store_main_hdr_calto_txt', function(value){
         value.bind(function(to){
             $('.sprt-tel b').text(to);
         });
});
wp.customize('top_store_main_hdr_calto_nub', function(value){
         value.bind(function(to){
             $('.sprt-tel a').text(to);
         });
});
wp.customize('top_store_main_hdr_calto_nub', function(value){
         value.bind(function(to){
             $('.sprt-tel a').text(to);
         });
});

//cat slider heading
wp.customize('top_store_cat_slider_heading', function(value){
         value.bind(function(to) {
             $('.thunk-category-slide-section .thunk-title .title').text(to);
         });
     });
//product slide
wp.customize('top_store_product_slider_heading', function(value){
         value.bind(function(to) {
             $('.thunk-product-slide-section .thunk-title .title').text(to);
         });
     });
//product list
wp.customize('top_store_product_list_heading', function(value){
         value.bind(function(to) {
             $('.thunk-product-list-section .thunk-title .title').text(to);
         });
     });
//product cat tab 
wp.customize('top_store_cat_tab_heading', function(value){
         value.bind(function(to) {
             $('.thunk-product-tab-section .thunk-title .title').text(to);
         });
     });
//product cat tab list
wp.customize('top_store_list_cat_tab_heading', function(value){
         value.bind(function(to) {
             $('.thunk-product-tab-list-section .thunk-title .title').text(to);
         });
     });
//Highlight 
wp.customize('top_store_hglgt_heading', function(value){
         value.bind(function(to) {
             $('.thunk-product-highlight-section .thunk-title .title').text(to);
         });
     });
//Big Featured
wp.customize('top_store_feature_product_heading', function(value){
         value.bind(function(to) {
             $('.thunk-feature-product-section .thunk-title .title').text(to);
         });
     });
//Ribbon Text
wp.customize('top_store_ribbon_text', function(value){
         value.bind(function(to) {
             $('.thunk-ribbon-content h3').text(to);
         });
     });
wp.customize('top_store_ribbon_btn_text', function(value){
         value.bind(function(to) {
             $('.thunk-ribbon-content a.ribbon-btn').text(to);
         });
     });
//Custom section One
wp.customize('top_store_custom_1_heading', function(value){
         value.bind(function(to) {
             $('.thunk-custom-one-section .thunk-title .title').text(to);
         });
     });
//Custom section two
wp.customize('top_store_custom_2_heading', function(value){
         value.bind(function(to) {
             $('.thunk-custom-two-section .thunk-title .title').text(to);
         });
     });
//Custom section three
wp.customize('top_store_custom_3_heading', function(value){
         value.bind(function(to) {
             $('.thunk-custom-three-section .thunk-title .title').text(to);
         });
     });
//Custom section four
wp.customize('top_store_custom_4_heading', function(value){
         value.bind(function(to){
             $('.thunk-custom-four-section .thunk-title .title').text(to);
         });
     });

/****************/
// footer
/****************/
wp.customize('top_store_footer_col1_texthtml', function(value){
         value.bind(function(to) {
             $('.top-footer-col1 .content-html').text(to);
         });
     });
 wp.customize('top_store_above_footer_col2_texthtml', function(value){
         value.bind(function(to) {
             $('.top-footer-col2 .content-html').text(to);
         });
     });
 wp.customize('top_store_above_footer_col3_texthtml', function(value){
         value.bind(function(to) {
             $('.top-footer-col3 .content-html').text(to);
         });
     });
top_store_css( 'top_store_above_frt_brdr_clr','border-bottom-color', 'body.top-store-dark .top-footer,.top-footer');
wp.customize(
    'top_store_above_ftr_hgt', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'line-height',
                    propertyUnit: 'px',
                    styleClass: 'top_store_above_ftr_hgt'
                };

                var arraySizes = {
                    size3: { selectors:'.top-footer .top-footer-bar', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_abv_ftr_botm_brd', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'border-bottom-width',
                    propertyUnit: 'px',
                    styleClass: 'top_store_abv_ftr_botm_brd'
                };

                var arraySizes = {
                    size3: { selectors:'.top-footer', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);

 wp.customize('top_store_footer_bottom_col1_texthtml', function(value){
         value.bind(function(to) {
             $('.below-footer-col1 .content-html').text(to);
         });
     });
 wp.customize('top_store_bottom_footer_col2_texthtml', function(value){
         value.bind(function(to) {
             $('.below-footer-col2 .content-html').text(to);
         });
     });
 wp.customize('top_store_bottom_footer_col3_texthtml', function(value){
         value.bind(function(to) {
             $('.below-footer-col3 .content-html').text(to);
         });
     });
top_store_css( 'top_store_bottom_frt_brdr_clr','border-top-color', '.below-footer,body.top-store-dark .below-footer');
wp.customize(
    'top_store_btm_ftr_hgt', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'line-height',
                    propertyUnit: 'px',
                    styleClass: ''
                };

                var arraySizes = {
                    size3: { selectors:'.below-footer .below-footer-bar', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_btm_ftr_botm_brd', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'border-top-width',
                    propertyUnit: 'px',
                    styleClass: ''
                };

                var arraySizes = {
                    size3: { selectors:'.below-footer', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
// loader
top_store_css( 'top_store_loader_bg_clr','background-color','.top_store_overlayloader');
//*****************************/
// Global Color Custom Style
//*****************************/
wp.customize( 'top_store_theme_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '';
                dynamicStyle += 'a:hover, .top-store-menu li a:hover, .top-store-menu .current-menu-item a,.woocommerce .thunk-woo-product-list .price,.thunk-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .thunk-product-hover .add_to_cart_button, .woocommerce .thunk-product-hover a.th-button, .woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.thunk-compare .compare-button a:hover, .thunk-product-hover .th-button.add_to_cart_button:hover, .woocommerce ul.products .thunk-product-hover .add_to_cart_button :hover, .woocommerce .thunk-product-hover a.th-button:hover,.thunk-product .yith-wcwl-wishlistexistsbrowse.show:before, .thunk-product .yith-wcwl-wishlistaddedbrowse.show:before,.woocommerce ul.products li.product.thunk-woo-product-list .price,.summary .yith-wcwl-add-to-wishlist.show .add_to_wishlist::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse.show a::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse.show a::before,.woocommerce .entry-summary a.compare.button.added:before,article.thunk-post-article .thunk-readmore.button:hover,.header-icon a:hover,.thunk-related-links .nav-links a:hover,.woocommerce .thunk-list-view ul.products li.product.thunk-woo-product-list .price,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,.woocommerce .thunk-product-hover a.th-button,.page-contact .leadform-show-form label,.thunk-contact-col .fa,ul.products .thunk-product-hover .add_to_cart_button:hover,.woocommerce .thunk-product-hover a.th-button:hover,.woocommerce ul.products li.product .product_type_variable:hover,.woocommerce ul.products li.product a.button.product_type_grouped:hover,.woocommerce .thunk-product-hover a.th-button:hover,.woocommerce ul.products li.product .add_to_cart_button:hover,.woocommerce .added_to_cart.wc-forward:hover,ul.products .thunk-product-hover .add_to_cart_button:hover:after,.woocommerce .thunk-product-hover a.th-button:hover:after,.woocommerce ul.products li.product .product_type_variable:hover:after,.woocommerce ul.products li.product a.button.product_type_grouped:hover:after,.woocommerce .thunk-product-hover a.th-button:hover:after,.woocommerce ul.products li.product .add_to_cart_button:hover:after,.woocommerce .added_to_cart.wc-forward:hover:after,.woosw-btn:hover:before,.woosw-added:before,.wooscp-btn:hover:before{ color: ' + cssval + '} ';
                dynamicStyle += '.toggle-cat-wrap,#search-button,.thunk-icon .cart-icon,.single_add_to_cart_button.button.alt, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.thunk-woo-product-list .thunk-quickview a,.btn-main-header{ background: ' + cssval + '} ';
                dynamicStyle += '.open-cart p.buttons a:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.thunk-slide .owl-nav button.owl-prev:hover, .thunk-slide .owl-nav button.owl-next:hover, .top-store-slide-post .owl-nav button.owl-prev:hover, .top-store-slide-post .owl-nav button.owl-next:hover,.thunk-list-grid-switcher a.selected, .thunk-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover,#searchform [type="submit"]:hover,.page-contact .leadform-show-form input[type="submit"],.nav-links .page-numbers.current, .nav-links .page-numbers:hover{background-color: ' + cssval + '} ';
                dynamicStyle += '.thunk-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .thunk-product-hover .add_to_cart_button, .woocommerce .thunk-product-hover a.th-button, .woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.open-cart p.buttons a:hover,.thunk-slide .owl-nav button.owl-prev:hover, .thunk-slide .owl-nav button.owl-next:hover, .top-store-slide-post .owl-nav button.owl-prev:hover, .top-store-slide-post .owl-nav button.owl-next:hover,body .woocommerce-tabs .tabs li a::before,.thunk-list-grid-switcher a.selected, .thunk-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,#searchform [type="submit"]:hover,.woocommerce .thunk-product-hover a.th-button,.page-contact .leadform-show-form input[type="submit"]{border-color: ' + cssval + '} ';
                top_store_add_dynamic_css( 'top_store_theme_clr', dynamicStyle );

        } );
    } );

top_store_css( 'top_store_text_clr','color','body,.woocommerce-error, .woocommerce-info, .woocommerce-message');
top_store_css( 'top_store_title_clr','color','.site-title span a,.sprt-tel b,.widget.woocommerce .widget-title, .open-widget-content .widget-title, .widget-title,.thunk-title .title,.thunk-hglt-box h6,h2.thunk-post-title a, h1.thunk-post-title ,#reply-title,h4.author-header,.page-head h1,.woocommerce div.product .product_title, section.related.products h2, section.upsells.products h2, .woocommerce #reviews #comments h2,.woocommerce table.shop_table thead th, .cart-subtotal, .order-total,.cross-sells h2, .cart_totals h2,.woocommerce-billing-fields h3,.page-head h1 a');
top_store_css( 'top_store_link_clr','color','a,#top-store-above-menu.top-store-menu > li > a');
top_store_css( 'top_store_link_hvr_clr','color','a:hover,#top-store-above-menu.top-store-menu > li > a:hover,#top-store-above-menu.top-store-menu li a:hover');

//Above Header
top_store_css( 'top_store_above_hd_bg_clr','background', '.top-header:before,body.top-store-dark .top-header:before');
// above header bg image
wp.customize('header_image', function (value){
    value.bind(function (to){
        $('.top-header').css('background-image', 'url( '+ to +')');
    });
});
// above header content
top_store_css( 'top_store_abv_content_txt_clr','color', '.top-header .top-header-bar,body.top-store-dark .top-header .top-header-bar');
top_store_css( 'top_store_abv_content_link_clr','color', '.top-header .top-header-bar a,body.top-store-dark .top-header .top-header-bar a');
top_store_css( 'top_store_abv_content_link_hvr_clr','color', '.top-header .top-header-bar a:hover,body.top-store-dark .top-header .top-header-bar a:hover');

//Main Header
top_store_css( 'top_store_main_hd_bg_clr','background', '.main-header:before,body.top-store-dark .main-header:before');

// main header bg image
wp.customize('top_store_pro_main_header_background_image_url', function (value){
    value.bind(function (to){
        $('.main-header').css('background-image', 'url( '+ to +')');
    });
});
top_store_css( 'top_store_pro_main_header_background_repeat','background-repeat', '.main-header,.below-header');
top_store_css( 'top_store_pro_main_header_background_position','background-position', '.main-header,.below-header');
top_store_css( 'top_store_pro_main_header_background_size','background-size', '.main-header,.below-header');
top_store_css( 'top_store_pro_main_header_background_attach','background-attachment', '.main-header,.below-header');

top_store_css( 'top_store_pro_main_header_sitetitle_clr','color', '.site-title span a,body.top-store-dark .site-title span a');
top_store_css( 'top_store_pro_main_header_sitetitle_hvr_clr','color', '.site-title span a:hover,body.top-store-dark .site-title span a:hover');
top_store_css( 'top_store_pro_main_header_sitetagline_clr','color', '.site-description p,body.top-store-dark .site-description p');

top_store_css( 'top_store_main_content_txt_clr','color', '.th-whishlist-text,.account-text:nth-of-type(1)');
top_store_css( 'top_store_main_content_link_clr','color', '.header-icon a,.header-icon a:hover,.thunk-icon-market .cart-contents');


wp.customize( 'top_store_pro_main_header_menu_link_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '@media screen and (min-width:1024px){.top-store-menu > li > a{ color: ' + cssval + '} }';
                top_store_add_dynamic_css( 'top_store_pro_main_header_menu_link_clr', dynamicStyle );
        } );
    } );
wp.customize( 'top_store_pro_main_header_menu_link_hvr_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '@media screen and (min-width:1024px){.top-store-menu > li > a:hover{ color: ' + cssval + '} }';
                top_store_add_dynamic_css( 'top_store_pro_main_header_menu_link_hvr_clr', dynamicStyle );
        } );
    } );
wp.customize( 'top_store_pro_main_header_sbmenu_bg_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '@media screen and (min-width:1024px){#top-store-menu ul.sub-menu{ background: ' + cssval + '} }';
                top_store_add_dynamic_css( 'top_store_pro_main_header_sbmenu_bg_clr', dynamicStyle );
        } );
    } );
wp.customize( 'top_store_pro_main_header_sbmenu_link_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '@media screen and (min-width:1024px){#top-store-menu li ul.sub-menu li a{ color: ' + cssval + '} }';
                top_store_add_dynamic_css( 'top_store_pro_main_header_sbmenu_link_clr', dynamicStyle );
        } );
    } );
wp.customize( 'top_store_pro_main_header_sbmenu_link_hvr_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '@media screen and (min-width:1024px){#top-store-menu li ul.sub-menu li a:hover{ color: ' + cssval + '} }';
                top_store_add_dynamic_css( 'top_store_pro_main_header_sbmenu_link_hvr_clr', dynamicStyle );
        } );
    } );
wp.customize( 'top_store_pro_main_header_sbmenu_link_hvr_bg_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '@media screen and (min-width:1024px){#top-store-menu li ul.sub-menu li a:hover{ background: ' + cssval + '} }';
                top_store_add_dynamic_css( 'top_store_pro_main_header_sbmenu_link_hvr_bg_clr', dynamicStyle );
        } );
    } );

//category
top_store_css( 'top_store_pro_main_header_cat_bg_clr','background', '.toggle-cat-wrap,body.top-store-dark .toggle-cat-wrap');
top_store_css( 'top_store_pro_main_header_cat_drp_bg_clr','background', '.menu-category-list ul[data-menu-style="vertical"],body.top-store-dark .menu-category-list ul[data-menu-style="vertical"] li ul.sub-menu,body.top-store-dark .menu-category-list ul[data-menu-style="vertical"],body.top-store-dark .menu-category-list ul[data-menu-style="vertical"] li ul.sub-menu');
top_store_css( 'top_store_pro_main_header_cat_drp_clr','color', '.thunk-product-cat-list li a,body.top-store-dark .thunk-product-cat-list li a');
top_store_css( 'top_store_pro_main_header_cat_drp_hvr_clr','color', '.thunk-product-cat-list li a:hover,body.top-store-dark .thunk-product-cat-list li a:hover');
wp.customize( 'top_store_pro_main_header_cat_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '';
                
                dynamicStyle += '.toggle-cat-wrap,body.top-store-dark .toggle-cat-wrap{color: ' + cssval + '} ';
               dynamicStyle += '.cat-icon span{background: ' + cssval + '} ';
                top_store_add_dynamic_css( 'top_store_mobile_hamburger_clr', dynamicStyle );

        } );
    } );
//search
top_store_css( 'top_store_pro_main_header_srch_clr','color', '#search-box input[type="text"], select#product_cat,#search-box form,.below-header-bar #search-text::placeholder,body.top-store-dark #search-box input[type="text"],body.top-store-dark select#product_cat,body.top-store-dark #search-box form,body.top-store-dark .below-header-bar #search-text::placeholder');

wp.customize( 'top_store_pro_main_header_srch_bg_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '';
                
                dynamicStyle += '#search-box input[type="text"], select#product_cat,#search-box form,.below-header-bar #search-text::placeholder,body.top-store-dark #search-box input[type="text"], body.top-store-dark select#product_cat,body.top-store-dark #search-box form,body.top-store-dark .below-header-bar #search-text::placeholder{background: ' + cssval + '} ';
                dynamicStyle += '#search-box input[type="text"], select#product_cat,body.top-store-dark #search-box input[type="text"], body.top-store-dark select#product_cat{border: 1px solid ' + cssval + '} ';
                top_store_add_dynamic_css( 'top_store_pro_main_header_srch_bg_clr', dynamicStyle );

        } );
    } );
top_store_css( 'top_store_pro_main_header_srch_btn_bg_clr','background', '#search-button,body.top-store-dark #search-button');
top_store_css( 'top_store_pro_main_header_srch_btn_clr','color', '#search-button,body.top-store-dark #search-button');
//shop icon wishlist
//shop icon account

//shop icon cart
top_store_css( '');
wp.customize( 'top_store_pro_main_header_shp_icon_cart_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '';              
                dynamicStyle += '{color: ' + cssval + '} ';
                dynamicStyle += '{border-right: 1px solid ' + cssval + '} ';
                top_store_add_dynamic_css( '', dynamicStyle );
        } );
    } );

//Below Header
top_store_css( 'top_store_below_hd_bg_clr','background', '.below-header:before');
// main header bg image
wp.customize('top_store_pro_below_header_background_image_url', function (value){
    value.bind(function (to){
        $('.below-header').css('background-image', 'url( '+ to +')');
    });
});
top_store_css( 'top_store_below_content_icon_clr','color', '.header-support-icon i,body.top-store-dark .header-support-icon i');
top_store_css( 'top_store_below_content_icon_bg_clr','background', '.header-support-icon,body.top-store-dark .header-support-icon');
top_store_css( 'top_store_below_content_txt_clr','color', '.header-widget-wrap,.header-support-content,body.top-store-dark .header-widget-wrap,body.top-store-dark .header-support-content');
top_store_css( 'top_store_below_content_link_clr','color', '.header-support-content a,.header-widget-wrap a,body.top-store-dark .header-support-content a,body.top-store-dark .header-widget-wrap a');
top_store_css( 'top_store_below_content_link_hvr_clr','color', '.header-support-content a:hover,.header-widget-wrap a:hover,body.top-store-dark .header-support-content a:hover,body.top-store-dark .header-widget-wrap a:hover');
top_store_css( 'top_store_below_button_clr','color', '.btn-main-header,body.top-store-dark .btn-main-header');
top_store_css( 'top_store_below_button_hvr_clr','color', '.btn-main-header:hover,body.top-store-dark .btn-main-header:hover');
top_store_css( 'top_store_below_button_bg','background', '.btn-main-header,body.top-store-dark .btn-main-header');
top_store_css( 'top_store_below_button_bg_hvr','background', '.btn-main-header:hover,body.top-store-dark .btn-main-header:hover');
// Footer
// Above footer
top_store_css( 'top_store_above_ftr_bg_clr','background', '.top-footer:before,body.top-store-dark .top-footer:before');
// above header bg image
wp.customize('top_store_abv_ftr_background_image_url', function (value){
    value.bind(function (to){
        $('.top-footer').css('background-image', 'url( '+ to +')');
    });
});
top_store_css( 'top_store_abv_ftr_background_repeat','background-repeat', '.top-footer,body.top-store-dark .top-footer');
top_store_css( 'top_store_abv_ftr_background_position','background-position', '.top-footer,body.top-store-dark .top-footer');
top_store_css( 'top_store_abv_ftr_background_size','background-size', '.top-footer,body.top-store-dark .top-footer');
top_store_css( 'top_store_abv_ftr_background_attach','background-attachment', '.top-footer,body.top-store-dark .top-footer');
// above footer content
top_store_css( 'top_store_abv_ftr_content_txt_clr','color', '.top-footer .top-footer-bar,body.top-store-dark .top-footer .top-footer-bar');
top_store_css( 'top_store_abv_ftr_content_link_clr','color', '.top-footer .top-footer-bar a,body.top-store-dark .top-footer .top-footer-bar a');
top_store_css( 'top_store_abv_ftr_content_link_hvr_clr','color', '.top-footer .top-footer-bar a:hover,body.top-store-dark .top-footer .top-footer-bar a:hover');

// Below footer
top_store_css( 'top_store_blw_ftr_bg_clr','background', '.below-footer:before,body.top-store-dark .below-footer:before');
// Below footer bg image
wp.customize('top_store_blw_ftr_background_image_url', function (value){
    value.bind(function (to){
        $('.below-footer').css('background-image', 'url( '+ to +')');
    });
});
top_store_css( 'top_store_blw_ftr_background_repeat','background-repeat', '.below-footer');
top_store_css( 'top_store_blw_ftr_background_position','background-position', '.below-footer');
top_store_css( 'top_store_blw_ftr_background_size','background-size', '.below-footer');
top_store_css( 'top_store_blw_ftr_background_attach','background-attachment', '.below-footer');
// Below footer content
top_store_css( 'top_store_blw_ftr_content_txt_clr','color', '.below-footer .below-footer-bar,body.top-store-dark .below-footer .below-footer-bar');
top_store_css( 'top_store_blw_ftr_content_link_clr','color', '.below-footer .below-footer-bar a,body.top-store-dark .below-footer .below-footer-bar a');
top_store_css( 'top_store_blw_ftr_content_link_hvr_clr','color', '.below-footer .below-footer-bar a:hover,body.top-store-dark .below-footer .below-footer-bar a:hover');

// Widget footer
top_store_css( 'top_store_footer_wgt_bg_clr','background', '.widget-footer:before,body.top-store-dark .widget-footer:before');
// Widget footer bg image
wp.customize('top_store_footer_wgt_background_image_url', function (value){
    value.bind(function (to){
        $('.widget-footer').css('background-image', 'url( '+ to +')');
    });
});
top_store_css( 'top_store_footer_wgt_background_repeat','background-repeat', '.widget-footer');
top_store_css( 'top_store_footer_wgt_background_position','background-position', '.widget-footer');
top_store_css( 'top_store_footer_wgt_background_size','background-size', '.widget-footer');
top_store_css( 'top_store_footer_wgt_background_attach','background-attachment', '.widget-footer');
// Below footer content
top_store_css( 'top_store_footer_wgt_tle_clr','color', '.widget-footer h2.widget-title,body.top-store-dark .widget-footer h2.widget-title');
top_store_css( 'top_store_footer_wgt_text_clr','color', '.widget-footer .widget,body.top-store-dark .widget-footer .widget');
top_store_css( 'top_store_footer_wgt_link_clr','color', '.widget-footer .widget a,body.top-store-dark .widget -footer .widget a');
top_store_css( 'top_store_footer_wgt_link_hvr_clr','color', '.widget-footer .widget a:hover,body.top-store-dark .widget-footer .widget a:hover');

// Primary Sidebar
top_store_css( 'top_store_sidebar_bg_clr','background', '#sidebar-primary .top-store-widget-content,body.top-store-dark #sidebar-primary .top-store-widget-content');
top_store_css( 'top_store_sidebar_wdgt_tle_clr','color', '#sidebar-primary h2.widget-title,body.top-store-dark #sidebar-primary h2.widget-title');
top_store_css( 'top_store_sidebar_wdgt_text_clr','color', '#sidebar-primary .top-store-widget-content,body.top-store-dark #sidebar-primary .top-store-widget-content');
top_store_css( 'top_store_sidebar_wdgt_link_clr','color', '#sidebar-primary .top-store-widget-content a,body.top-store-dark #sidebar-primary .top-store-widget-content a');
top_store_css( 'top_store_sidebar_wdgt_link_hvr_clr','color', '#sidebar-primary .top-store-widget-content a:hover,body.top-store-dark #sidebar-primary .top-store-widget-content a:hover');

// Secondary Sidebar
top_store_css( 'top_store_seco_sidebar_bg_clr','background', '#sidebar-secondary .top-store-widget-content,body.top-store-dark #sidebar-secondary .top-store-widget-content');
top_store_css( 'top_store_seco_sidebar_wdgt_tle_clr','color', '#sidebar-secondary h2.widget-title,body.top-store-dark #sidebar-secondary h2.widget-title');
top_store_css( 'top_store_seco_sidebar_wdgt_text_clr','color', '#sidebar-secondary .top-store-widget-content,body.top-store-dark #sidebar-secondary .top-store-widget-content');
top_store_css( 'top_store_seco_sidebar_wdgt_link_clr','color', '#sidebar-secondary .top-store-widget-content a,body.top-store-dark #sidebar-secondary .top-store-widget-content a');
top_store_css( 'top_store_seco_sidebar_wdgt_link_hvr_clr','color', '#sidebar-secondary .top-store-widget-content a:hover,body.top-store-dark #sidebar-secondary .top-store-widget-content a:hover');

// woocommerce product 
top_store_css( 'top_store_woo_prdct_box_bg_clr','background', '.thunk-woo-product-list .thunk-product-wrap .thunk-product,.thunk-woo-product-list .thunk-product-wrap .thunk-product .thunk-product-hover,.thunk-product-list-section .thunk-list, .thunk-product-tab-list-section .thunk-list,.thunk-product:hover .thunk-product-hover::before');
top_store_css( 'top_store_woo_prdct_tle_clr','color', '.thunk-woo-product-list .thunk-product-wrap .woocommerce-loop-product__title a,.woocommerce ul.products li.product .thunk-product-wrap .thunk-product .woocommerce-loop-product__title,.thunk-product-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title, .thunk-product-tab-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title');
top_store_css( 'top_store_woo_prdct_rat_clr','color', '.woocommerce .thunk-woo-product-list .thunk-product-wrap .star-rating,.woocommerce .thunk-woo-product-list .thunk-product-wrap .thunk-product-content .star-rating,.thunk-product-list-section .thunk-list .thunk-product-content .star-rating, .thunk-product-tab-list-section .thunk-list .thunk-product-content .star-rating,.woocommerce .thunk-product-tab-list-section .thunk-list .thunk-product-content .star-rating');
top_store_css( 'top_store_woo_prdct_price_clr','color', '.woocommerce ul.products li.product.thunk-woo-product-list .price,.woocommerce .thunk-woo-product-list .price,.woocommerce ul.product_list_widget li .woocommerce-Price-amount');
// icon
top_store_css( 'top_store_woo_prdct_icon_bg_clr','background', '.thunk-wishlist, .thunk-compare, .thunk-quik,body.top-store-dark .thunk-wishlist,body.top-store-dark .thunk-compare,body.top-store-dark .thunk-quik');
top_store_css( 'top_store_woo_prdct_icon_clr','color', '.thunk-wishlist a,.thunk-quik a,.thunk-compare .compare-button a,body.top-store-dark .thunk-wishlist a,body.top-store-dark .thunk-quik a,body.top-store-dark .thunk-compare .compare-button a,.woosw-btn:before,.wooscp-btn:before,body.top-store-dark .woosw-btn:before,body.top-store-dark .wooscp-btn:before');
top_store_css( 'top_store_woo_prdct_icon_hvr_clr','color', '.thunk-wishlist a:hover,.thunk-compare a:hover,.thunk-quik a:hover,body.top-store-dark .thunk-wishlist a:hover,body.top-store-dark .thunk-compare a:hover,body.top-store-dark .thunk-quik a:hover,.woosw-btn:hover:before,.woosw-added:before,.wooscp-btn:hover:before,body.top-store-dark .woosw-btn:hover:before,body.top-store-dark .wooscp-btn:hover:before');
// add-to-cart
wp.customize( 'top_store_woo_prdct_crt_btn_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '';              
                dynamicStyle += '{color: ' + cssval + '} ';
                top_store_add_dynamic_css( 'top_store_woo_prdct_crt_btn_clr', dynamicStyle );
        } );
    } );
//Tooltip
top_store_css( 'top_store_woo_prdct_tooltip_bg_clr','background', '.thunk-icons-wrap .tooltip,.thunk-icons-wrap .tooltip:before');
top_store_css( 'top_store_woo_prdct_tooltip_clr','color', '.thunk-icons-wrap .tooltip');
//Sale Badge
top_store_css( 'top_store_woo_prdct_sale_badge_bg_clr','background-color', '.woocommerce .thunk-woo-product-list span.onsale');
top_store_css( 'top_store_woo_prdct_sale_badge_clr','color', '.woocommerce .thunk-woo-product-list span.onsale');
//single product page
top_store_css( 'top_store_woo_single_title_clr','color', '.woocommerce div.product .product_title,section.related.products h2, section.upsells.products h2,.woocommerce #reviews #comments h2');
top_store_css( 'top_store_woo_single_rating_clr','color', '.woocommerce .summary .woocommerce-product-rating .star-rating,.woocommerce .summary .star-rating,.woocommerce #reviews #comments .star-rating span, .woocommerce p.stars a, .woocommerce .woocommerce-product-rating .star-rating');
top_store_css( 'top_store_woo_single_price_clr','color', '.woocommerce div.product p.price, .woocommerce div.product span.price');
top_store_css( 'top_store_woo_single_txt_clr','color', '.woocommerce #content div.product div.summary, .woocommerce div.product div.summary, .woocommerce-page #content div.product div.summary, .woocommerce-page div.product div.summary,.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta,.woocommerce-tabs.wc-tabs-wrapper,.single-product .product_meta');
top_store_css( 'top_store_woo_single_link_clr','color', '.woocommerce-review-link,.woocommerce div.product .woocommerce-tabs ul.tabs li a,.product_meta a');
top_store_css( 'top_store_woo_single_bg_clr','background', '.thunk-single-product-summary-wrap,.woocommerce div.product .woocommerce-tabs .panel,.product_meta,section.related.products ul.products,section.upsells.products ul.products');
/*********************/
//Content Color
/*********************/
top_store_css( 'top_store_content_bg_clr','background','.thunk-page .thunk-content-wrap,article.thunk-article, article.thunk-post-article, .single article,body.top-store-dark .thunk-page .thunk-content-wrap,body.top-store-dark article.thunk-article,body.top-store-dark  article.thunk-post-article, body.top-store-dark .single article');
top_store_css( 'top_store_content_h1_clr','color','.entry-content h1,body.top-store-dark .entry-content h1');
top_store_css( 'top_store_content_h2_clr','color','.entry-content h2,body.top-store-dark .entry-content h2');
top_store_css( 'top_store_content_h3_clr','color','.entry-content h3,body.top-store-dark .entry-content h3');
top_store_css( 'top_store_content_h4_clr','color','.entry-content h4,body.top-store-dark .entry-content h4');
top_store_css( 'top_store_content_h5_clr','color','.entry-content h5,body.top-store-dark .entry-content h5');
top_store_css( 'top_store_content_h6_clr','color','.entry-content h6,body.top-store-dark .entry-content h6');
/**************************/
// Front-Page
/**************************/
// top-slider
top_store_css( 'top_store_top_slider_img_ovrly_clr','background', '.thunk-to2-slide-list:before,.thunk-slider-section.slide-layout-5 .slides a:before');
top_store_css( 'top_store_top_slider_bg_clr','background', '.th-slide-content-wrap,body.top-store-dark .th-slide-content-wrap');
top_store_css( 'top_store_top_slider_hd_clr','color', '.slide-content h2,.slider-content-caption h2,.th-slide-title,body.top-store-dark .slide-content h2,body.top-store-dark .slider-content-caption h2,body.top-store-dark .th-slide-title');
top_store_css( 'top_store_top_slider_sbhd_clr','color', '.slide-content-wrap p,.slider-content-caption p,.th-slide-subtitle,body.top-store-dark .slide-content-wrap p,body.top-store-dark .slider-content-caption p,body.top-store-dark .th-slide-subtitle');
top_store_css( 'top_store_top_slider_link_clr','color', 'a.slide-btn,.th-slide-button, body.top-store-dark a.slide-btn,body.top-store-dark .th-slide-button,body.top-store-dark .th-slide-button:after');
top_store_css( 'top_store_top_slider_link_hvr_clr','color', 'a.slide-btn:hover,.th-slide-button:hover,body.top-store-dark a.slide-btn:hover,body.top-store-dark .th-slide-button:hover:after');
//category slider
top_store_css( 'top_store_cat_slider_hd_clr','color', '.thunk-category-slide-section .thunk-title .title');
top_store_css( 'top_store_cat_slider_bg_clr','background', '.top-store-site section.thunk-category-slide-section .content-wrap:before,body.top-store-dark .top-store-site section.thunk-category-slide-section .content-wrap:before,.thunk-cat-text');
top_store_css( 'top_store_cat_slider_tle_clr','color', 'section.thunk-category-slide-section .thunk-cat-title a,.cat-layout-3 .cat-content-3 .hover-area .cat-title,.prd-total-number,.cat-list a span');
// top_store_css( 'top_store_cat_slider_num_clr','color', '.total-number');
//Product slider
top_store_css( 'top_store_prd_slider_bg_clr','background-color', 'section.thunk-product-slide-section .content-wrap:before,body.top-store-dark section.thunk-product-slide-section .content-wrap:before');
top_store_css( 'top_store_prd_slider_hd_clr','color', 'section.thunk-product-slide-section .thunk-title .title,body.top-store-dark section.thunk-product-slide-section .thunk-title .title');
//cat tab slider
top_store_css( 'top_store_cat_tab_hd_clr','color', 'section.thunk-product-tab-section .thunk-title .title');
top_store_css( 'top_store_cat_tab_bg_clr','background', '.top-store-site section.thunk-product-tab-section .content-wrap:before,body.top-store-dark .top-store-site section.thunk-product-tab-section .content-wrap:before');
top_store_css( 'top_store_cat_tab_link_clr','color', 'section.thunk-product-tab-section .thunk-cat-tab .tab-link li a,section.thunk-product-tab-section ul.dropdown-link > li >a');
top_store_css( 'top_store_cat_tab_link_hvr_clr','color', 'section.thunk-product-tab-section .thunk-cat-tab .tab-link li a.active, section.thunk-product-tab-section .thunk-cat-tab .tab-link li a:hover,section.thunk-product-tab-section ul.dropdown-link > li >a:hover');
//Product List
top_store_css( 'top_store_product_slide_hd_clr','color', 'section.thunk-product-list-section .thunk-title .title');
top_store_css( 'top_store_product_slide_bg_clr','background', 'section.thunk-product-list-section .content-wrap:before,body.top-store-dark section.thunk-product-list-section .content-wrap:before');
//Product tab list slider
top_store_css( 'top_store_prdct_lst_tb_hd_clr','color', 'section.thunk-product-tab-list-section .thunk-title .title');
top_store_css( 'top_store_prdct_lst_tb_bg_clr','background', 'section.thunk-product-tab-list-section .content-wrap:before,body.top-store-dark section.thunk-product-tab-list-section .content-wrap:before');
top_store_css( 'top_store_prdct_lst_tb_link_clr','color', 'section.thunk-product-tab-list-section .thunk-cat-tab .tab-link li a,section.thunk-product-tab-list-section ul.dropdown-link > li >a');
top_store_css( 'top_store_prdct_lst_tb_link_hvr_clr','color', 'section.thunk-product-tab-list-section .thunk-cat-tab .tab-link li a.active, section#thunk-cat-list-tab .thunk-cat-tab .tab-link li a:hover,section.thunk-product-tab-list-section ul.dropdown-link > li >a:hover');
//Banner
top_store_css( 'top_store_banner_bg_clr','background', 'section.thunk-banner-section .content-wrap:before');
//Brand
top_store_css( 'top_store_brand_bg_clr','background', 'section.thunk-brand-section .content-wrap:before,body.top-store-dark section.thunk-brand-section .content-wrap:before');
//Ribbon
top_store_css( 'top_store_rbn_bg_clr','background', '.top-store-site section.thunk-ribbon-section .content-wrap:before');
top_store_css( 'top_store_rbn_tle_clr','color', '.thunk-ribbon-content-col1 h3');
top_store_css( 'top_store_rbn_btn_bg_clr','background', '.ribbon-btn,body.top-store-dark .ribbon-btn');
top_store_css( 'top_store_rbn_btn_txt_clr','color', '.ribbon-btn,body.top-store-dark .ribbon-btn');

wp.customize('top_store_ribbon_bg_img_url', function (value){
    value.bind(function (to){
        $('section.thunk-ribbon-section .content-wrap').css('background-image', 'url( '+ to +')');
    });
});
top_store_css( 'top_store_ribbon_bg_background_repeat','background-repeat', 'section.thunk-ribbon-section .content-wrap');
top_store_css( 'top_store_ribbon_bg_background_position','background-position', 'section.thunk-ribbon-section .content-wrap');
top_store_css( 'top_store_ribbon_bg_background_size','background-size', 'section.thunk-ribbon-section .content-wrap');
top_store_css( 'top_store_ribbon_bg_background_attach','background-attachment', 'section.thunk-ribbon-section .content-wrap');

//Highlight
top_store_css( 'top_store_hglght_bg_clr','background', 'section.thunk-product-highlight-section .content-wrap:before,body.top-store-dark section.thunk-product-highlight-section .content-wrap:before');
top_store_css( 'top_store_hglght_tle_clr','color', 'section.thunk-product-highlight-section .thunk-hglt-box h6');
top_store_css( 'top_store_hglght_desc_clr','color', 'section.thunk-product-highlight-section .thunk-hglt-box p');
top_store_css( 'top_store_hglght_icon_clr','color', 'section.thunk-product-highlight-section .thunk-hglt-icon');

//big featured product
top_store_css( 'top_store_ftrd_prdct_bg_clr','background', 'section.thunk-feature-product-section .content-wrap:before,body.top-store-dark section.thunk-feature-product-section .content-wrap:before');
top_store_css( 'top_store_ftrd_prdct_tle_clr','color', 'section.thunk-feature-product-section .thunk-title .title');
top_store_css( 'top_store_ftrd_prdct_link_clr','color', 'section.thunk-feature-product-section .thunk-cat-tab .tab-link li a,section.thunk-feature-product-section ul.dropdown-link > li >a');
top_store_css( 'top_store_ftrd_prdct_link_hvr_clr','color', 'section.thunk-feature-product-section .thunk-cat-tab .tab-link li a.active,section.thunk-feature-product-section .thunk-cat-tab .tab-link li a:hover,section.thunk-feature-product-section ul.dropdown-link > li >a:hover');

//custom color
top_store_css( 'top_store_custom_one_tle_clr','color', 'section.thunk-custom-one-section .thunk-title .title');
top_store_css( 'top_store_custom_one_bg_color','background', 'section.thunk-custom-one-section .content-wrap:before,body.top-store-dark section.thunk-custom-one-section .content-wrap:before');
top_store_css( 'top_store_custom_two_tle_clr','color', 'section.thunk-custom-two-section .thunk-title .title');
top_store_css( 'top_store_custom_two_bg_color','background', 'section.thunk-custom-two-section .content-wrap:before,body.top-store-dark section.thunk-custom-two-section .content-wrap:before');
top_store_css( 'top_store_custom_three_tle_clr','color', 'section.thunk-custom-three-section .thunk-title .title');
top_store_css( 'top_store_custom_three_bg_color','background', 'section.thunk-custom-three-section .content-wrap:before,body.top-store-dark section.thunk-custom-three-section .content-wrap:before');
top_store_css( 'top_store_custom_four_tle_clr','color', 'section.thunk-custom-four-section .thunk-title .title');
top_store_css( 'top_store_custom_four_bg_color','background', 'section.thunk-custom-four-section .content-wrap:before,body.top-store-dark section.thunk-custom-four-section .content-wrap:before');
top_store_css( 'top_store_custom_five_tle_clr','color', 'section.thunk-custom-five-section .thunk-title .title');
top_store_css( 'top_store_custom_five_bg_color','background', 'section.thunk-custom-five-section .content-wrap:before,body.top-store-dark section.thunk-custom-five-section .content-wrap:before');

//sticky header
top_store_css( 'top_store_sticky_hdr_bg_clr','background', '.sticky-header:before,body.top-store-dark .sticky-header:before');
wp.customize('top_store_pro_sticky_header_background_image_url', function (value){ 
    value.bind(function (to){
        $('.sticky-header,body.top-store-dark .sticky-header').css('background-image', 'url( '+ to +')');
    });
});
top_store_css( 'top_store_pro_sticky_header_background_repeat','background-repeat', '.sticky-header,body.top-store-dark .sticky-header');
top_store_css( 'top_store_pro_sticky_header_background_position','background-position', '.sticky-header,body.top-store-dark .sticky-header');
top_store_css( 'top_store_pro_sticky_header_background_size','background-size', '.sticky-header,body.top-store-dark .sticky-header');
top_store_css( 'top_store_pro_sticky_header_background_attach','background-attachment', '.sticky-header,body.top-store-dark .sticky-header');

top_store_css( 'top_store_pro_sticky_header_sitetitle_clr','color', '.sticky-header .site-title span a,body.top-store-dark .sticky-header .site-title span a');
top_store_css( 'top_store_pro_sticky_header_sitetitle_hvr_clr','color', '.sticky-header .site-title span a:hover,body.top-store-dark .sticky-header .site-title span a:hover');
top_store_css( 'top_store_pro_sticky_header_sitetagline_clr','color', '.sticky-header .site-description p,body.top-store-dark sticky-header .site-description p');

top_store_css( 'top_store_pro_sticky_header_menu_link_clr','color', '.sticky-header .top-store-menu > li > a,body.top-store-dark .sticky-header .top-store-menu > li > a');
top_store_css( 'top_store_pro_sticky_header_menu_link_hvr_clr','color', '.sticky-header .top-store-menu > li > a:hover,body.top-store-dark .sticky-header .top-store-menu > li > a:hover');

top_store_css( 'top_store_pro_sticky_header_sbmenu_bg_clr','background', '.sticky-header .top-store-menu ul.sub-menu,body.top-store-dark .sticky-header .top-store-menu ul.sub-menu');
top_store_css( 'top_store_pro_sticky_header_sbmenu_link_clr','color', '.sticky-header .top-store-menu li ul.sub-menu li a,body.top-store-dark .sticky-header .top-store-menu li ul.sub-menu li a');
top_store_css( 'top_store_pro_sticky_header_sbmenu_link_hvr_clr','color', '.sticky-header .top-store-menu li ul.sub-menu li a:hover,body.top-store-dark .sticky-header .top-store-menu li ul.sub-menu li a:hover');
top_store_css( 'top_store_pro_sticky_header_sbmenu_link_hvr_bg_clr','background', '.sticky-header .top-store-menu li ul.sub-menu li a:hover,body.top-store-dark .sticky-header .top-store-menu li ul.sub-menu li a:hover');

// top_store_css( 'top_store_sticky_hdr_icon_bg_clr','background', '.sticky-header .header-icon a,.sticky-header-col3 .thunk-icon .cart-icon a.cart-contents,body.top-store-dark .sticky-header .header-icon a,body.top-store-dark .sticky-header-col3 .thunk-icon .cart-icon a.cart-contents');
top_store_css( 'top_store_sticky_icon_clr','color', '.sticky-header .header-icon a,.sticky-header-col3 .thunk-icon .cart-icon a.cart-contents,.search-wrapper .search-close-btn,body.top-store-dark .sticky-header .header-icon a,body.top-store-dark .sticky-header-col3 .thunk-icon .cart-icon a.cart-contents,body.top-store-dark .search-wrapper .search-close-btn');
// top_store_css( 'top_store_sticky_icon_clr','background', '.sticky-header .menu-toggle .icon-bar,body.top-store-dark .sticky-header .menu-toggle .icon-bar');
//mobile pan
top_store_css( 'top_store_mobile_pan_bg_clr','background', '.sider.left,.sider.right,.mobile-menu-active .sider.overcenter, .sticky-mobile-menu-active .sider.overcenter, .mobile-bottom-menu-active .sider.overcenter,body.top-store-dark .sider.left,body.top-store-dark .sider.right,.mobile-menu-active .sider.overcenter, body.top-store-dark.sticky-mobile-menu-active .sider.overcenter, body.top-store-dark.mobile-bottom-menu-active .sider.overcenter');
top_store_css( 'top_store_mobile_pan_menu_link_clr','color', '.top-store-menu li a,.sider.overcenter .sider-inner ul.top-store-menu li a,body.top-store-dark .top-store-menu li a,body.top-store-dark .sider.overcenter .sider-inner ul.top-store-menu li a');
top_store_css( 'top_store_mobile_pan_menu_link_hvr_clr','color', '.top-store-menu li a:hover,.sider.overcenter .sider-inner ul.top-store-menu li a:hover,body.top-store-dark .top-store-menu li a:hover,.sider.overcenter .sider-inner ul.top-store-menu li a:hover');
top_store_css( 'top_store_mobile_pan_close_bg_clr','background', '.left .menu-close, .right .menu-close,body.top-store-dark .left .menu-close, body.top-store-dark .right .menu-close');
top_store_css( 'top_store_mobile_pan_menu_close_icon_clr','color', '.right .menu-close a,.left .menu-close a,.overcenter .menu-close-btn,body.top-store-dark .right .menu-close a,body.top-store-dark .left .menu-close a,body.top-store-dark .overcenter .menu-close-btn,.menu-close-btn,body.top-store-dark .menu-close-btn');
wp.customize( 'top_store_mobile_hamburger_clr', function( setting ){
        setting.bind( function( cssval ){
                var dynamicStyle = '';
                
                dynamicStyle += '.menu-toggle .icon-bar,body.top-store-dark .menu-toggle .icon-bar{background: ' + cssval + '} ';
               dynamicStyle += '.menu-toggle .menu-btn span,body.top-store-dark .menu-toggle .menu-btn span{color: ' + cssval + '} ';
                top_store_add_dynamic_css( 'top_store_mobile_hamburger_clr', dynamicStyle );

        } );
    } );
//canvas sidebar
top_store_css( 'top_store_canvas_pan_bg_clr','background', '.top-store-off-canvas-sidebar-wrapper.from-left .top-store-off-canvas-sidebar,.top-store-off-canvas-sidebar-wrapper.from-right .top-store-off-canvas-sidebar');
top_store_css( 'top_store_canvas_title_clr','color', '.top-store-off-canvas-sidebar .top-store-widget-content .widget-title');
top_store_css( 'top_store_canvas_link_clr','color', '.top-store-off-canvas-sidebar .top-store-widget-content li a,.top-store-off-canvas-sidebar .top-store-widget-content .title');
top_store_css( 'top_store_canvas_link_hvr_clr','color', '.top-store-off-canvas-sidebar .top-store-widget-content li a:hover,.top-store-off-canvas-sidebar .top-store-widget-content .title:hover');
top_store_css( 'top_store_canvas_content_clr','color', '.top-store-off-canvas-sidebar-wrapper .top-store-widget-content');
top_store_css( 'top_store_canvas_close_bg_clr','background', '.top-store-off-canvas-sidebar-wrapper.from-left .close-bn,.top-store-off-canvas-sidebar-wrapper.from-right .close-bn');
top_store_css( 'top_store_canvas_close_icon_clr','color', '.top-store-off-canvas-sidebar-wrapper .close');
top_store_css( 'top_store_canvas_icon_clr','background', '.off-canvas-button span');
//move to top
top_store_css( 'top_store_move_to_top_bg_clr','background', '#move-to-top');
top_store_css( 'top_store_move_to_top_icon_clr','color', '#move-to-top');

/**********************/
// Page Templates
/**********************/
//Contact page Text Live PrevieW
wp.customize('top_store_contact_heading', function(value){
         value.bind(function(to){
             $('.thunk-contactus-right h6').text(to);
         });
     });
wp.customize('top_store_contact_address1', function(value){
         value.bind(function(to){
             $('.thunk-address-info').text(to);
         });
     });
wp.customize('top_store_contact_address2', function(value){
         value.bind(function(to){
             $('.thunk-contact-mobile').text(to);
         });
     });
wp.customize('top_store_contact_support', function(value){
         value.bind(function(to){
             $('.thunk-contact-email').text(to);
         });
     });
wp.customize('top_store_contact_hours', function(value){
         value.bind(function(to){
             $('.thunk-contact-wh').text(to);
         });
     });
//aboutus section Text Live Preview
wp.customize('top_store_introduction_heading', function(value){
         value.bind(function(to){
             $('.thunk-founder-title').text(to);
         });
     });

wp.customize('top_store_introduction_description', function(value){
         value.bind(function(to){
             $('.thunk-founder-description').text(to);
         });
     });

wp.customize('top_store_introduction_sign', function(value){
         value.bind(function(to){
             $('.thun-founder-sign').text(to);
         });
     });

top_store_css( 'top_store_faq_background_color','background', '.thunk-faq-body-wrap .thunk-content-wrap');
top_store_css( 'top_store_faq_title_color','color', '.thunk-accordion .ac > .ac-q');
top_store_css( 'top_store_faq_title_bg_color','background', '.thunk-accordion .ac > .ac-q');
top_store_css( 'top_store_faq_text_color','color', '.thunk-accordion .ac > .ac-a p');
top_store_css( 'top_store_faq_symbol_color','color', '.thunk-accordion .accordion-container .ac > .ac-q::after');

top_store_css( 'top_store_contact_background_color','background', '.page-contact .thunk-content-wrap');
top_store_css( 'top_store_contact_txt_color','color', '.thunk-contact-col p,.page-contact .leadform-show-form textarea, .page-contact .leadform-show-form input:not([type]), .page-contact .leadform-show-form input[type="email"], .page-contact .leadform-show-form input[type="number"], .page-contact .leadform-show-form input[type="password"], .page-contact .leadform-show-form input[type="tel"], .page-contact .leadform-show-form input[type="url"], .page-contact .leadform-show-form input[type="text"], .page-contact .leadform-show-form input[type="number"]');

/*******************/
//Typography
/******************/
// body font size
wp.customize(
    'top_store_body_font_size', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'font-size',
                    propertyUnit: 'px',
                    styleClass: 'top_store_body_font_size'
                };
                var arraySizes = {
                    size3: { selectors:'body', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_body_font_line_height', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'line-height',
                    propertyUnit: 'px',
                    styleClass: 'top_store_body_font_line_height'
                };
                var arraySizes = {
                    size3: { selectors:'body', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_body_font_letter_spacing', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'letter-spacing',
                    propertyUnit: 'px',
                    styleClass: 'top_store_body_font_letter_spacing'
                };
                var arraySizes = {
                    size3: { selectors:'body', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
// h1
wp.customize(
    'top_store_h1_font_size', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'font-size',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h1_font_size'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h1', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_h1_font_line_height', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'line-height',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h1_font_line_height'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h1', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_h1_font_letter_spacing', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'letter-spacing',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h1_font_letter_spacing'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h1', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);

// h2
wp.customize(
    'top_store_h2_font_size', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'font-size',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h2_font_size'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h2', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_h2_font_line_height', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'line-height',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h2_font_line_height'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h2', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_h2_font_letter_spacing', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'letter-spacing',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h2_font_letter_spacing'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h2', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
// h3
wp.customize(
    'top_store_h3_font_size', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'font-size',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h3_font_size'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h3', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_h3_font_line_height', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'line-height',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h3_font_line_height'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h3', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_h3_font_letter_spacing', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'letter-spacing',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h3_font_letter_spacing'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h3', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
// h4
wp.customize(
    'top_store_h4_font_size', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'font-size',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h4_font_size'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h4', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_h4_font_line_height', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'line-height',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h4_font_line_height'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h4', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_h4_font_letter_spacing', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'letter-spacing',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h4_font_letter_spacing'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h4', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
// h5
wp.customize(
    'top_store_h5_font_size', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'font-size',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h5_font_size'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h5', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_h5_font_line_height', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'line-height',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h5_font_line_height'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h5', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_h5_font_letter_spacing', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'letter-spacing',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h5_font_letter_spacing'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h5', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
// h6
wp.customize(
    'top_store_h6_font_size', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'font-size',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h6_font_size'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h6', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_h6_font_line_height', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'line-height',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h6_font_line_height'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h6', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
wp.customize(
    'top_store_h6_font_letter_spacing', function (value){
        'use strict';
        value.bind(
            function( to ) {
                var settings = {
                    cssProperty: 'letter-spacing',
                    propertyUnit: 'px',
                    styleClass: 'top_store_h6_font_letter_spacing'
                };
                var arraySizes = {
                    size3: { selectors:'.entry-content h6', values: ['','',''] }
                };
                topStoreGetCss( arraySizes, settings, to );
            }
        );
    }
);
})( jQuery );