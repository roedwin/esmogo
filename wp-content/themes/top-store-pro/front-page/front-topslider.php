<?php
if(get_theme_mod('top_store_disable_top_slider_sec',false) == true){
    return;
  }
?>
<section class="thunk-slider-section   <?php echo esc_attr(get_theme_mod('top_store_top_slide_layout','slide-layout-1'));?>">
<?php top_store_display_customizer_shortcut( 'top_store_top_slider_section' );?>
<?php if(get_theme_mod('top_store_top_slide_layout','slide-layout-1')=='slide-layout-1'):?>
<div  id="thunk-slider" style="position:relative;margin:0 auto;top:0px;left:0px;overflow:hidden;visibility:hidden;">
                          <div  data-u="slides" class="slides" >
                           <?php top_store_top_slider_content('top_store_top_slide_content', ''); ?>                    
                          </div> 
                <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssor-pagination" >
            <div data-u="prototype" class="i" >
                <svg viewBox="0 0 16000 16000">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>                             
 </div>
<?php elseif(get_theme_mod('top_store_top_slide_layout')=='slide-layout-2'):?>
<div  id="thunk-widget-slider">
         <div class="thunk-widget-slider-wrap">
           <div class="thunk-slider-content">
               <div class="thunk-top2-slide owl-carousel">
                 <?php  top_store_top_slider_2_content('top_store_top_slide_content', ''); ?>      
               </div>
             </div>
           <div class="thunk-add-content">
                 <a href="<?php echo esc_url(get_theme_mod('top_store_lay2_url'));?>"><img src="<?php echo esc_url(get_theme_mod('top_store_lay2_adimg'));?>"></a>
            </div>
         </div>    
    </div>                              
<?php elseif(get_theme_mod('top_store_top_slide_layout')=='slide-layout-3'): ?>

<div  id="thunk-3col-slider">
         <div class="thunk-3col-slider-wrap">
           <div class="thunk-slider-content">
               <div class="thunk-top2-slide owl-carousel">
               <?php  top_store_top_slider_2_content('top_store_top_slide_content', ''); ?>
               </div>
             </div>
           <div class="thunk-add-content">
                 <div class="thunk-3-add-content">
                   <div class="thunk-row">
                   <a href="<?php echo esc_url(get_theme_mod('top_store_lay3_url'));?>"><img src="<?php echo esc_url(get_theme_mod('top_store_lay3_adimg'));?>"></a>
                   </div>
                   <div class="thunk-row">
                    <a href="<?php echo esc_url(get_theme_mod('top_store_lay3_2url'));?>"><img src="<?php echo esc_url(get_theme_mod('top_store_lay3_adimg2'));?>"></a>
                   </div>
                   <div class="thunk-row"><a href="<?php echo esc_url(get_theme_mod('top_store_lay3_3url'));?>"><img src="<?php echo esc_url(get_theme_mod('top_store_lay3_adimg3'));?>"></a>
                   </div>
                 </div>
            </div>
         </div>    
    </div> 
<?php elseif(get_theme_mod('top_store_top_slide_layout')=='slide-layout-4'): ?>
<div  id="thunk-2col-slider">
         <div class="thunk-2col-slider-wrap">
           <div class="thunk-slider-content">
               <div class="thunk-top2-slide owl-carousel">
                  <?php  top_store_top_slider_2_content('top_store_top_slide_content', ''); ?>
                  
               </div>
             </div>
           <div class="thunk-add-content">
                 <div class="thunk-2-add-content">
                   <div class="thunk-row">
                    <a href="<?php echo esc_url(get_theme_mod('top_store_lay4_url1'));?>"><img src="<?php echo esc_url(get_theme_mod('top_store_lay4_adimg1'));?>"></a></div>
                   <div class="thunk-row">
                    <a href="<?php echo esc_url(get_theme_mod('top_store_lay4_url2'));?>"><img src="<?php echo esc_url(get_theme_mod('top_store_lay4_adimg2'));?>"></a>
                  </div>
                   
                 </div>
            </div>
         </div>    
    </div> 
<?php elseif(get_theme_mod('top_store_top_slide_layout')=='slide-layout-5'): ?>
<div  id="thunk-single-slider" style="position:relative;margin:0 auto;top:0px;left:0px;overflow:hidden;visibility:hidden;">
                          <div  data-u="slides" class="slides" >
                           <?php top_store_top_single_slider_content('top_store_top_slide_lay5_content', ''); ?>                    
                          </div> 
                <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssor-pagination" data-autocenter="1">
            <div data-u="prototype" class="i" >
                <svg viewBox="0 0 16000 16000">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>                             
 </div>
<?php endif; ?>      
</section>