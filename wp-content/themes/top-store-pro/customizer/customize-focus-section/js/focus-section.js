/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
jQuery(document).ready(function($){
    $.topStore = {
        init: function () {
            this.focusForCustomShortcut();
        },
        focusForCustomShortcut: function (){
            var fakeShortcutClasses = [
                'top_store_top_slider_section',
                'top_store_category_tab_section',
                'top_store_product_slide_section',
                'top_store_cat_slide_section',
                'top_store_product_slide_list',
                'top_store_product_cat_list',
                'top_store_brand',
                'top_store_ribbon',
                'top_store_banner',
                'top_store_highlight',
                'top_store_product_big_feature',
                'top_store_1_custom_sec',
                'top_store_2_custom_sec',
                'top_store_3_custom_sec',
                'top_store_4_custom_sec',
            ];
            fakeShortcutClasses.forEach(function (element){
                $('.customize-partial-edit-shortcut-'+ element).on('click',function (){
                   wp.customize.preview.send( 'top-store-customize-focus-section', element );
                });
            });
        }
    };
    $.topStore.init();
});