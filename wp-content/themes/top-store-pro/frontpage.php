<?php 
/**
 * Template Name: Homepage Template
 *
 * @package ThemeHunk
 * @subpackage Top Store
 * @since 1.0.0
 */
get_header();
$top_store_sidebar_front_option = get_theme_mod('top_store_sidebar_front_option','active-sidebar');
?>
   <div id="content" class="front">
          <div class="content-wrap" >
            <div class="container">
              <?php get_template_part( 'front-page/front-customfive'); ?>
              <div class="main-area <?php echo esc_attr($top_store_sidebar_front_option);?>">
                <?php if($top_store_sidebar_front_option !=='no-sidebar' && $top_store_sidebar_front_option!=='disable-left-sidebar'){
                  get_sidebar('primary');
                }?>
                <div id="primary" class="primary-content-area">
                  <div class="primary-content-wrap">
                           <?php
                              if (class_exists( 'WooCommerce' )) {
                              
                                                $section = array(
                                                    'topslider',
                                                    'categoryslider',
                                                    'productslider',
                                                    'tabproduct',
                                                    'productlist',
                                                    'tabproductlist',
                                                    'banner',
                                                    'ribbon',
                                                    'brand',
                                                    'highlight',
                                                    'featureproduct',
                                                    'customone',
                                                    'customtwo',
                                                    'customthree',
                                                    'customfour',
                                                    );
                                                    foreach(get_theme_mod('_sorting',$section) as $value):
                                                        get_template_part( 'front-page/front-'.$value); 
                                                    endforeach;
                              }
                                ?>
                  </div> <!-- end primary-content-wrap-->
                </div> <!-- end primary primary-content-area-->
                <?php if($top_store_sidebar_front_option !=='no-sidebar' && $top_store_sidebar_front_option!=='disable-right-sidebar'){
                  get_sidebar('secondary');};?>
              </div> <!-- end main-area -->     
            </div>
          </div> <!-- end content-wrap -->
        </div> <!-- end content page-content -->
<?php get_footer();