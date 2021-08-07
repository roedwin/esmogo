<?php
if(get_theme_mod('top_store_disable_feature_product_sec',false) == true){
    return;
  }
?>
<section class="thunk-feature-product-section">
     <?php top_store_display_customizer_shortcut( 'top_store_product_big_feature' );?>
 <!-- thunk head start -->
<div id="thunk-feature-product-tab" class="thunk-cat-tab">
  <div class="thunk-heading-wrap">
  <div class="thunk-heading">
    <h4 class="thunk-title">
    <span class="title"><?php echo esc_html(get_theme_mod('top_store_feature_product_heading','Big Featured Slider'));?></span>
   </h4>
  </div>
<!-- tab head start -->
<?php  $term_id = get_theme_mod('top_store_feature_product_tab_list',0);   
top_store_pro_category_tab_list($term_id); 
?>
</div>
<!-- tab head end -->
<div class="content-wrap">
  <div class="tab-content">
      <div class="thunk-slide thunk-featured-product-slide owl-carousel">
       <?php 
          $term_id = get_theme_mod('top_store_feature_product_tab_list',0); 
          $prdct_optn = get_theme_mod('top_store_feature_product_optn','recent');
          top_store_pro_product_cat_filter_default_loop($term_id,$prdct_optn); 
         ?>
      </div>
    </div>
    <div class="content-featured-wrap">
        <?php top_store_pro_featured_product_show_big($term_id);?>
      </div>
    </div>
</div>
</section>