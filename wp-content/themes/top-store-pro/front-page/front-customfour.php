<?php
if(get_theme_mod('top_store_custom_section4_hide',true) == true){
    return;
  }
?>
<section class="thunk-custom-four-section">
     <?php top_store_display_customizer_shortcut( 'top_store_4_custom_sec' );
if(get_theme_mod('top_store_custom_4_heading','Fourth Custom Section')!==''):
     ?>
  <div class="thunk-heading">
    <h4 class="thunk-title">
    <span class="title"><?php echo esc_html(get_theme_mod('top_store_custom_4_heading','Fourth Custom Section'));?></span>
   </h4>
</div>
<?php endif;?>
<div class="content-wrap">
    <div class="widget-wrap">
    	<?php top_store_custom_four_markup();?>
    </div>
  </div>
</section>