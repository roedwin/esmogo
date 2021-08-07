<?php
if(get_theme_mod('top_store_custom_section1_hide',true) == true){
    return;
  }
?>
<section class="thunk-custom-one-section">
   <?php top_store_display_customizer_shortcut( 'top_store_1_custom_sec' );
if(get_theme_mod('top_store_custom_1_heading','First Custom Section')!==''):
   ?>
  <div class="thunk-heading">
    <h4 class="thunk-title">
    <span class="title"><?php echo esc_html(get_theme_mod('top_store_custom_1_heading','First Custom Section'));?></span>
   </h4>
</div>
<?php endif;?>
<div class="content-wrap">
    <div class="widget-wrap">
    	<?php top_store_custom_one_markup();?>
    </div>
  </div>
</section>