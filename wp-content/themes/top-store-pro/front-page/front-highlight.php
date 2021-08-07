<?php
if(get_theme_mod('top_store_disable_highlight_sec',false) == true){
    return;
  }
?>
<section class="thunk-product-highlight-section">
	 <?php top_store_display_customizer_shortcut( 'top_store_highlight' );?>
<div class="content-wrap">
      <div class="thunk-highlight-feature-wrap">
          <?php   
            $default =  top_store_Defaults_Models::instance()->get_feature_default();
            top_store_highlight_content('top_store_pro_highlight_content', $default);
           ?>
      </div>
  </div>
</section>