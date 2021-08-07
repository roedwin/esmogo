<?php 
/**
 * Common Function for Top Store Theme.
 *
 * @package     Top Store
 * @author      ThemeHunk
 * @copyright   Copyright (c) 2019, Top Store
 * @since       Top Store 1.0.0
 */
 if ( ! function_exists( 'top_store_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 * Does nothing if the custom logo is not available.
 */
function top_store_custom_logo(){
    if ( function_exists( 'the_custom_logo' ) ){?>
    	<div class="thunk-logo">
        <?php the_custom_logo();?>
        </div>
   <?php  }
}
endif;
/*********************/
// Menu 
/*********************/
function top_store_header_menu_style(){
 $top_store_pro_main_header_layout = get_theme_mod('top_store_pro_main_header_layout');
        	$menustyle='horizontal';	
        	return $menustyle;
		}
function top_store_add_classes_to_page_menu( $ulclass ){
  return preg_replace( '/<ul>/', '<ul class="top-store-menu" data-menu-style='.esc_attr(top_store_header_menu_style()).'>', $ulclass, 1 );
}
add_filter( 'wp_page_menu', 'top_store_add_classes_to_page_menu' );		
     // This theme uses wp_nav_menu() in two locations.
	  function top_store_custom_menu(){
		     register_nav_menus(array(
		    'top-store-above-menu'       => esc_html__( 'Header Above Menu', 'top-store-pro' ),
			'top-store-main-menu'        => esc_html__( 'Main', 'top-store-pro' ),
			'top-store-sticky-menu'        => esc_html__( 'Sticky', 'top-store-pro' ),
			'top-store-footer-menu'  => esc_html__( 'Footer Menu', 'top-store-pro' ),
		) );
	  }
	  add_action( 'after_setup_theme', 'top_store_custom_menu' );
	  // MAIN MENU
           function top_store_main_nav_menu(){
              wp_nav_menu( array(
              'theme_location' => 'top-store-main-menu', 
              'container'      => false, 
              'link_before'    =>'<span class="top-store-menu-link">',
              'link_after'     => '</span>',
              'items_wrap'     => '<ul id="top-store-menu" class="top-store-menu" data-menu-style='.esc_attr(top_store_header_menu_style()).'>%3$s</ul>',
             ));
         }
          //STICKY MENU
           function top_store_stick_nav_menu(){
              wp_nav_menu( array(
              'theme_location' => 'top-store-sticky-menu', 
              'container'      => false, 
              'link_before'    =>'<span class="top-store-menu-link">',
              'link_after'     => '</span>',
              'items_wrap'     => '<ul id="top-store-stick-menu" class="top-store-menu" data-menu-style='.esc_attr(top_store_header_menu_style()).'>%3$s</ul>',
             ));
         }
         // HEADER ABOVE MENU
         function top_store_abv_nav_menu(){
              wp_nav_menu( array('theme_location' => 'top-store-above-menu', 
              'container'   => false, 
              'link_before' => '<span class="top-store-menu-link">',
              'link_after'  => '</span>',
              'items_wrap'  => '<ul id="top-store-above-menu" class="top-store-menu" data-menu-style='.esc_attr(top_store_header_menu_style()).'>%3$s</ul>',
             ));
         }
         // FOOTER TOP MENU
         function top_store_footer_nav_menu(){
              wp_nav_menu( array('theme_location' => 'top-store-footer-menu', 
              'container'   => false, 
              'link_before' => '<span class="top-store-menu-link">',
              'link_after'  => '</span>',
              'items_wrap'  => '<ul id="top-store-footer-menu" class="top-store-bottom-menu">%3$s</ul>',
             ));
         }
function top_store_add_classes_to_page_menu_default( $ulclass ){
return preg_replace( '/<ul>/', '<ul class="top-store-menu" data-menu-style="horizontal">', $ulclass, 1 );
}
add_filter( 'wp_page_menu', 'top_store_add_classes_to_page_menu_default' );
/************************/
// description Menu
/************************/
function top_store_nav_description( $item_output, $item, $depth, $args ){
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( $args->link_after . '</a>', '<p class="menu-item-description">' . esc_html($item->description) . '</p>' . $args->link_after . '</a>', $item_output );
    }
 
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'top_store_nav_description', 10, 4 );

/*********************/
/**
 * Function to check if it is Internet Explorer
 */
if ( ! function_exists( 'top_store_check_is_ie' ) ) :
	/**
	 * Function to check if it is Internet Explorer.
	 *
	 * @return true | false boolean
	 */
	function top_store_check_is_ie() {

		$is_ie = false;

		$ua = htmlentities( $_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8' );
		if ( strpos( $ua, 'Trident/7.0' ) !== false ) {
			$is_ie = true;
		}

		return apply_filters( 'top_store_check_is_ie', $is_ie );
	}

endif;
/**
 * ratia image
 */
if ( ! function_exists( 'top_store_replace_header_attr' ) ) :
	/**
	 * Replace header logo.
	 *
	 * @param array  $attr Image.
	 * @param object $attachment Image obj.
	 * @param sting  $size Size name.
	 *
	 * @return array Image attr.
	 */
	function top_store_replace_header_attr( $attr, $attachment, $size ){
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		if ( $custom_logo_id == $attachment->ID ){
			$attach_data = array();
			if ( ! is_customize_preview() ){
				$attach_data = wp_get_attachment_image_src( $attachment->ID, 'top-store-logo-size' );


				if ( isset( $attach_data[0] ) ) {
					$attr['src'] = $attach_data[0];
				}
			}

			$file_type      = wp_check_filetype( $attr['src'] );
			$file_extension = $file_type['ext'];
			if ( 'svg' == $file_extension ) {
				$attr['class'] = 'top-store-logo-svg';
			}
			$retina_logo = get_theme_mod( 'top_store_header_retina_logo' );
			$attr['srcset'] = '';
			if ( apply_filters( 'top_store_main_header_retina', true ) && '' !== $retina_logo ) {
				$cutom_logo     = wp_get_attachment_image_src( $custom_logo_id, 'full' );
				$cutom_logo_url = $cutom_logo[0];

				if (top_store_check_is_ie() ){
					// Replace header logo url to retina logo url.
					$attr['src'] = $retina_logo;
				}

				$attr['srcset'] = $cutom_logo_url . ' 1x, ' . $retina_logo . ' 2x';

			}
		}

		return apply_filters( 'top_store_replace_header_attr', $attr );
	}

endif;

add_filter( 'wp_get_attachment_image_attributes', 'top_store_replace_header_attr', 10, 3 );

/********************************/
// responsive slider function
/*********************************/
if ( ! function_exists( 'top_store_responsive_slider_funct' ) ) :
function top_store_responsive_slider_funct($control_name,$function_name){
  $custom_css='';
           $control_value = get_theme_mod( $control_name );
           if ( empty( $control_value ) ){
                return '';
             }  
        if ( top_store_is_json( $control_value ) ){
    $control_value = json_decode( $control_value, true );
    if ( ! empty( $control_value ) ) {

      foreach ( $control_value as $key => $value ){
        $custom_css .= call_user_func( $function_name, $value, $key );
      }
    }
    return $custom_css;
  }  
}
endif;
/********************************/
// responsive slider function add media query
/********************************/
if ( ! function_exists( 'top_store_pro_add_media_query' ) ) :
function top_store_pro_add_media_query( $dimension, $custom_css ){
  switch ($dimension){
      case 'desktop':
      $custom_css = '@media (min-width: 769px){' . $custom_css . '}';
      break;
      break;
      case 'tablet':
      $custom_css = '@media (max-width: 768px){' . $custom_css . '}';
      break;
      case 'mobile':
      $custom_css = '@media (max-width: 550px){' . $custom_css . '}';
      break;
  }

      return $custom_css;
}
endif;
/**
 * Display Sidebars
 */
if ( ! function_exists( 'top_store_get_sidebar' ) ){
	/**
	 * Get Sidebar
	 *
	 * @since 1.0.1.1
	 * @param  string $sidebar_id   Sidebar Id.
	 * @return void
	 */
	function top_store_get_sidebar( $sidebar_id ){
		 return $sidebar_id;
	}
}

/******************/
//Banner Function
/******************/
function top_store_front_banner(){
$top_store_banner_layout     = get_theme_mod( 'top_store_banner_layout','bnr-two');
// first
$top_store_bnr_1_img     = get_theme_mod( 'top_store_bnr_1_img','');
$top_store_bnr_1_url     = get_theme_mod( 'top_store_bnr_1_url','');
// second
$top_store_bnr_2_img     = get_theme_mod( 'top_store_bnr_2_img','');
$top_store_bnr_2_url     = get_theme_mod( 'top_store_bnr_2_url','');
// third
$top_store_bnr_3_img     = get_theme_mod( 'top_store_bnr_3_img','');
$top_store_bnr_3_url     = get_theme_mod( 'top_store_bnr_3_url','');
// fouth
$top_store_bnr_4_img     = get_theme_mod( 'top_store_bnr_4_img','');
$top_store_bnr_4_url     = get_theme_mod( 'top_store_bnr_4_url','');
// fifth
$top_store_bnr_5_img     = get_theme_mod( 'top_store_bnr_5_img','');
$top_store_bnr_5_url     = get_theme_mod( 'top_store_bnr_5_url','');

if($top_store_banner_layout=='bnr-one'){?>
<div class="thunk-banner-wrap bnr-layout-1 thnk-col-1">
 	 <div class="thunk-banner-col1">
 	 	<div class="thunk-banner-col1-content"><a href="<?php echo esc_url($top_store_bnr_1_url);?>"><img src="<?php echo esc_url($top_store_bnr_1_img );?>"></a>
 	 	</div>
 	 </div>
  </div>
<?php }elseif($top_store_banner_layout=='bnr-two'){?>
<div class="thunk-banner-wrap bnr-layout-2 thnk-col-2">
 	 <div class="thunk-banner-col1">
 	 	<div class="thunk-banner-col1-content"><a href="<?php echo esc_url($top_store_bnr_1_url);?>"><img src="<?php echo esc_url($top_store_bnr_1_img );?>"></a></div>
 	 </div>
 	 <div class="thunk-banner-col2">
 	 	<div class="thunk-banner-col2-content"><a href="<?php echo esc_url($top_store_bnr_2_url);?>"><img src="<?php echo esc_url($top_store_bnr_2_img );?>"></a></div>
 	 </div>
  </div>

<?php }elseif($top_store_banner_layout=='bnr-three'){?>
<div class="thunk-banner-wrap bnr-layout-3 thnk-col-3">
 	 <div class="thunk-banner-col1">
 	 	<div class="thunk-banner-col1-content"><a href="<?php echo esc_url($top_store_bnr_1_url);?>"><img src="<?php echo esc_url($top_store_bnr_1_img );?>"></a></div>
 	 </div>
 	 <div class="thunk-banner-col2">
 	 	<div class="thunk-banner-col2-content"><a href="<?php echo esc_url($top_store_bnr_2_url);?>"><img src="<?php echo esc_url($top_store_bnr_2_img );?>"></a></div>
 	 </div>
 	 <div class="thunk-banner-col3">
 	 	<div class="thunk-banner-col3-content"><a href="<?php echo esc_url($top_store_bnr_3_url);?>"><img src="<?php echo esc_url($top_store_bnr_3_img );?>"></a></div>
 	 </div>
  </div>
<?php }elseif($top_store_banner_layout=='bnr-four'){?>
 <div class="thunk-banner-wrap bnr-layout-4 thnk-col-5">
 	 <div class="thunk-banner-col">
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($top_store_bnr_1_url);?>"><img src="<?php echo esc_url($top_store_bnr_1_img );?>"></a></div>
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($top_store_bnr_2_url);?>"><img src="<?php echo esc_url($top_store_bnr_2_img );?>"></a></div>
 	 </div>
 	 <div class="thunk-banner-col">
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($top_store_bnr_3_url);?>"><img src="<?php echo esc_url($top_store_bnr_3_img );?>"></a></div>
 	 </div>
 	 <div class="thunk-banner-col">
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($top_store_bnr_4_url);?>"><img src="<?php echo esc_url($top_store_bnr_4_img );?>"></a></div>
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($top_store_bnr_5_url);?>"><img src="<?php echo esc_url($top_store_bnr_5_img );?>"></a></div>
 	 </div>
  </div>
<?php }elseif($top_store_banner_layout=='bnr-five'){?>
 <div class="thunk-banner-wrap bnr-layout-5 thnk-col-4">
 	 <div class="thunk-banner-col">
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($top_store_bnr_1_url);?>"><img src="<?php echo esc_url($top_store_bnr_1_img );?>"></a></div>
 	 	
 	 </div>
 	 <div class="thunk-banner-col">
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($top_store_bnr_2_url);?>"><img src="<?php echo esc_url($top_store_bnr_2_img );?>"></a></div>
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($top_store_bnr_3_url);?>"><img src="<?php echo esc_url($top_store_bnr_3_img );?>"></a></div>
 	 </div>
 	 <div class="thunk-banner-col">
 	 	<div class="thunk-banner-item"><a href="<?php echo esc_url($top_store_bnr_4_url);?>"><img src="<?php echo esc_url($top_store_bnr_4_img );?>"></a></div>
 	 </div>
  </div>
<?php 
 }
}
/**********************/
// Brand Function
/**********************/
//brand content output function
function top_store_brand_content( $top_store_pro_brand_content_id, $default ) {
//passing the seeting ID and Default Values
	$top_store_pro_brand_content= get_theme_mod( $top_store_pro_brand_content_id, $default );
		if ( ! empty( $top_store_pro_brand_content ) ) :
			$top_store_pro_brand_content = json_decode( $top_store_pro_brand_content );
			if ( ! empty( $top_store_pro_brand_content ) ) {
				foreach ( $top_store_pro_brand_content as $brand_item ) :
					$icon   = ! empty( $brand_item->icon_value ) ? apply_filters( 'top_store_translate_single_string', $brand_item->icon_value, 'Brand section' ) : '';

					$image = ! empty( $brand_item->image_url ) ? apply_filters( 'top_store_translate_single_string', $brand_item->image_url, 'Brand section' ) : '';

					$title  = ! empty( $brand_item->title ) ? apply_filters( 'top_store_translate_single_string', $brand_item->title, 'Brand section' ) : '';
					$text   = ! empty( $brand_item->text ) ? apply_filters( 'top_store_translate_single_string', $brand_item->text, 'Brand section' ) : '';
					$link   = ! empty( $brand_item->link ) ? apply_filters( 'top_store_translate_single_string', $brand_item->link, 'Brand section' ) : '';
					$color  = ! empty( $brand_item->color ) ? $brand_item->color : '';
			?>	
		<div class="thunk-brands">
         	<a target="_blank" href="<?php echo esc_url($link); ?>">
        		<img src="<?php echo esc_url($image); ?>" class="cate-img">
            </a>
        </div> <!-- thunk-brands End -->
	
			<?php	
				
				endforeach;			
			} // End if().
		
	endif;	
}

/**********************/
// Top Slider Function
/**********************/
//Slider ontent output function layout 1
function top_store_top_slider_content( $top_store_slide_content_id, $default ){
//passing the seeting ID and Default Values
	$top_store_slide_content = get_theme_mod( $top_store_slide_content_id, $default );
		if ( ! empty( $top_store_slide_content ) ) :
			$top_store_slide_content = json_decode( $top_store_slide_content );
			if ( ! empty( $top_store_slide_content) ) {
				foreach ( $top_store_slide_content as $slide_item ) :
					$image = ! empty( $slide_item->image_url ) ? apply_filters( 'top_store_translate_single_string', $slide_item->image_url, 'Top Slider section' ) : '';
					$logo_image = ! empty( $slide_item->logo_image_url ) ? apply_filters( 'top_store_translate_single_string', $slide_item->logo_image_url, 'Top Slider section' ) : '';
					$title  = ! empty( $slide_item->title ) ? apply_filters( 'top_store_translate_single_string', $slide_item->title, 'Top Slider section' ) : '';
					$subtitle  = ! empty( $slide_item->subtitle ) ? apply_filters( 'top_store_translate_single_string', $slide_item->subtitle, 'Top Slider section' ) : '';
					$text   = ! empty( $slide_item->text ) ? apply_filters( 'top_store_translate_single_string', $slide_item->text, 'Top Slider section' ) : '';
					$link   = ! empty( $slide_item->link ) ? apply_filters( 'top_store_translate_single_string', $slide_item->link, 'Top Slider section' ) : '';
			?>	
			<?php if($image!==''):?>
		                    <div>
                              <img data-u="image" src="<?php echo esc_url($image); ?>" />
                               <div class="slide-content-wrap">
                                <div class="slide-content">
                                  <div class="logo">
                                  	<img src="<?php echo esc_url($logo_image); ?>">
                                  </div>
                                  <h2><?php echo esc_html($title); ?></h2>
                                  <p><?php echo esc_html($subtitle); ?></p>
                                  <?php if($text!==''): ?>
                                  <a class="slide-btn" href="<?php echo esc_url($link); ?>"><?php echo esc_html($text); ?></a>
                                  <?php endif; ?>
                                </div>
                              </div>
                            </div>
	
			<?php	
				endif;
				endforeach;			
			} // End if().
		
	endif;	
}
//Single Slider ontent output function layout 5
function top_store_top_single_slider_content( $top_store_slide_content_id, $default ){
//passing the seeting ID and Default Values
	$top_store_slide_content = get_theme_mod( $top_store_slide_content_id, $default );
		if ( ! empty( $top_store_slide_content ) ) :
			$top_store_slide_content = json_decode( $top_store_slide_content );
			if ( ! empty( $top_store_slide_content) ) {
				foreach ( $top_store_slide_content as $slide_item ) :
					$image = ! empty( $slide_item->image_url ) ? apply_filters( 'top_store_translate_single_string', $slide_item->image_url, 'Top Slider section' ) : '';
					$link   = ! empty( $slide_item->link ) ? apply_filters( 'top_store_translate_single_string', $slide_item->link, 'Top Slider section' ) : '';
					$title  = ! empty( $slide_item->title ) ? apply_filters( 'top_store_translate_single_string', $slide_item->title, 'Top Slider section' ) : '';
					$subtitle  = ! empty( $slide_item->subtitle ) ? apply_filters( 'top_store_translate_single_string', $slide_item->subtitle, 'Top Slider section' ) : '';
					$text   = ! empty( $slide_item->text ) ? apply_filters( 'top_store_translate_single_string', $slide_item->text, 'Top Slider section' ) : '';
			?>	
			<?php if($image!==''):?>
		                    <div class="th-slide-wrap">
                              <img data-u="image" src="<?php echo esc_url($image); ?>" />
                               <a  href="<?php echo esc_url($link); ?>" class="th-slider-link">
                               	<?php if ($subtitle!='' || $title!='' || $text != '') { ?>   
                               	<span class="th-slide-content-wrap" >
                               	<h5 class="th-slide-subtitle"><?php echo esc_html($subtitle); ?></h5>
                               	<h2 class="th-slide-title"><?php echo esc_html($title); ?></h2>
                               	<h4 class="th-slide-button"><?php echo esc_html($text); ?></h4>
                               </span>
                                <?php } ?>
                               </a>
                            </div>
	
			<?php	
				endif;
				endforeach;			
			} // End if().
		
	endif;	
}
// slider layout 2
function top_store_top_slider_2_content( $top_store_slide_content_id, $default ){
//passing the seeting ID and Default Values
	$top_store_slide_content = get_theme_mod( $top_store_slide_content_id, $default );
		if ( ! empty( $top_store_slide_content ) ) :
			$top_store_slide_content = json_decode( $top_store_slide_content );
			if ( ! empty( $top_store_slide_content) ) {
				foreach ( $top_store_slide_content as $slide_item ) :
					$image = ! empty( $slide_item->image_url ) ? apply_filters( 'top_store_translate_single_string', $slide_item->image_url, 'Top Slider section' ) : '';
					$logo_image = ! empty( $slide_item->logo_image_url ) ? apply_filters( 'top_store_translate_single_string', $slide_item->logo_image_url, 'Top Slider section' ) : '';
					$title  = ! empty( $slide_item->title ) ? apply_filters( 'top_store_translate_single_string', $slide_item->title, 'Top Slider section' ) : '';
					$subtitle  = ! empty( $slide_item->subtitle ) ? apply_filters( 'top_store_translate_single_string', $slide_item->subtitle, 'Top Slider section' ) : '';
					$text   = ! empty( $slide_item->text ) ? apply_filters( 'top_store_translate_single_string', $slide_item->text, 'Top Slider section' ) : '';
					$link   = ! empty( $slide_item->link ) ? apply_filters( 'top_store_translate_single_string', $slide_item->link, 'Top Slider section' ) : '';
			?>	
			<?php if($image!==''):?>
                   <div class="thunk-to2-slide-list">
                    <img src="<?php echo esc_url($image); ?>">
                    <div class="slider-content-caption">
                        <h2 data-animation-in="fadeInLeft" data-animation-out="animate-out fadeInRight"><?php echo esc_html($title); ?></h2>
                        <p class="animated delay-1s" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeInRight"><?php echo esc_html($subtitle); ?></p>
                         <?php if($text!==''): ?>
                       <a class="slide-btn" href="<?php echo esc_url($link); ?>"><?php echo esc_html($text); ?></a>
                        <?php endif;?>
                    </div>
                  </div>
			<?php	
				endif;
			endforeach;			
			} // End if().
		
	endif;	
}
//*********************//
// Highlight feature
//*********************//
function top_store_highlight_content($top_store_pro_highlight_content_id,$default){
	$top_store_pro_highlight_content= get_theme_mod( $top_store_pro_highlight_content_id, $default );
//passing the seeting ID and Default Values

	if ( ! empty( $top_store_pro_highlight_content ) ) :

		$top_store_pro_highlight_content = json_decode( $top_store_pro_highlight_content );
		if ( ! empty( $top_store_pro_highlight_content ) ) {
			foreach ( $top_store_pro_highlight_content as $ship_item ) :
               $icon   = ! empty( $ship_item->icon_value ) ? apply_filters( 'top_store_translate_single_string', $ship_item->icon_value, '' ) : '';
				$title    = ! empty( $ship_item->title ) ? apply_filters( 'top_store_translate_single_string', $ship_item->title, '' ) : '';
				$subtitle    = ! empty( $ship_item->subtitle ) ? apply_filters( 'top_store_translate_single_string', $ship_item->subtitle, '' ) : '';
					?>
         <div class="thunk-highlight-col">
          	<div class="thunk-hglt-box">
          		<div class="thunk-hglt-icon"><i class="<?php echo "fa ".esc_attr($icon); ?>"></i></div>
          		<div class="content">
          			<h6><?php echo esc_html($title);?></h6>
          			<p><?php echo esc_html($subtitle);?></p>
          		</div>
          	</div>
          </div>
    			<?php
			endforeach;
		}
	endif;
}
 /***************************/
 // Custom section one
 /****************************/
 /**
 * Function to get custom section widget
 */
if ( ! function_exists( 'top_store_custom_one_markup' ) ){	
function top_store_custom_one_markup(){ ?>
<?php 
$top_store_custom_section1_widget_layout  = get_theme_mod( 'top_store_custom_section1_widget_layout','cs-1-1');
?>	
<div class="widget-cs">
		 	<div class="widget-cs-bar <?php echo esc_attr($top_store_custom_section1_widget_layout);?>">
		       
			      <div class="widget-cs-container">
			      	<?php if($top_store_custom_section1_widget_layout=='cs-1-1'):?>
		             <div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('first-customsec-1' ) ){
                                       dynamic_sidebar('first-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <?php elseif($top_store_custom_section1_widget_layout=='cs-1-2'): ?>
                      	<div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('first-customsec-1' ) ){
                                       dynamic_sidebar('first-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col2"><?php if( is_active_sidebar('first-customsec-2' ) ){
                                       dynamic_sidebar('first-customsec-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <?php elseif($top_store_custom_section1_widget_layout=='cs-1-3'): ?>
                      	<div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('first-customsec-1' ) ){
                                       dynamic_sidebar('first-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col2"><?php if( is_active_sidebar('first-customsec-2' ) ){
                                       dynamic_sidebar('first-customsec-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col3"><?php if( is_active_sidebar('first-customsec-3' ) ){
                                       dynamic_sidebar('first-customsec-3' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>

                  <?php elseif($top_store_custom_section1_widget_layout=='cs-1-4'): ?>
                      	<div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('first-customsec-1' ) ){
                                       dynamic_sidebar('first-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col2"><?php if( is_active_sidebar('first-customsec-2' ) ){
                                       dynamic_sidebar('first-customsec-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col3"><?php if( is_active_sidebar('first-customsec-3' ) ){
                                       dynamic_sidebar('first-customsec-3' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <div class="widget-cs-col4"><?php if( is_active_sidebar('first-customsec-4' ) ){
                                       dynamic_sidebar('first-customsec-4' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>

                  <?php endif;?>
		        </div> <!-- widget-cs-container End -->
		 
	</div>
</div> 
<?php }
}


/***************************/
 // Custom section Two
 /****************************/
 /**
 * Function to get custom section widget
 */
if ( ! function_exists( 'top_store_custom_two_markup' ) ){	
function top_store_custom_two_markup(){ ?>
<?php 
$top_store_custom_section2_widget_layout  = get_theme_mod( 'top_store_custom_section2_widget_layout','cs-2-1');
?>	
<div class="widget-cs">
		 	<div class="widget-cs-bar <?php echo esc_attr($top_store_custom_section2_widget_layout);?>">
		       
			      <div class="widget-cs-container">
			      	<?php if($top_store_custom_section2_widget_layout=='cs-2-1'):?>
		             <div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('second-customsec-1' ) ){
                                       dynamic_sidebar('second-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <?php elseif($top_store_custom_section2_widget_layout=='cs-2-2'): ?>
                      	<div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('second-customsec-1' ) ){
                                       dynamic_sidebar('second-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col2"><?php if( is_active_sidebar('second-customsec-2' ) ){
                                       dynamic_sidebar('second-customsec-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <?php elseif($top_store_custom_section2_widget_layout=='cs-2-3'): ?>
                      	<div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('second-customsec-1' ) ){
                                       dynamic_sidebar('second-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col2"><?php if( is_active_sidebar('second-customsec-2' ) ){
                                       dynamic_sidebar('second-customsec-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col3"><?php if( is_active_sidebar('second-customsec-3' ) ){
                                       dynamic_sidebar('second-customsec-3' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <?php elseif($top_store_custom_section2_widget_layout=='cs-2-4'): ?>
                      	<div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('second-customsec-1' ) ){
                                       dynamic_sidebar('second-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col2"><?php if( is_active_sidebar('second-customsec-2' ) ){
                                       dynamic_sidebar('second-customsec-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col3"><?php if( is_active_sidebar('second-customsec-3' ) ){
                                       dynamic_sidebar('second-customsec-3' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <div class="widget-cs-col4"><?php if( is_active_sidebar('second-customsec-4' ) ){
                                       dynamic_sidebar('second-customsec-4' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                    
                      
		            
		           
                  
                  <?php endif;?>
		        </div> <!-- widget-cs-container End -->
		 
	</div>
</div> 
<?php }
}

/***************************/
 // Custom section Three
 /****************************/
 /**
 * Function to get custom section widget
 */
if ( ! function_exists( 'top_store_custom_three_markup' ) ){	
function top_store_custom_three_markup(){ ?>
<?php 
$top_store_custom_section3_widget_layout  = get_theme_mod( 'top_store_custom_section3_widget_layout','cs-3-1');
?>	
<div class="widget-cs">
		 	<div class="widget-cs-bar <?php echo esc_attr($top_store_custom_section3_widget_layout);?>">
		       
			      <div class="widget-cs-container">
			      	<?php if($top_store_custom_section3_widget_layout=='cs-3-1'):?>
		             <div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('third-customsec-1' ) ){
                                       dynamic_sidebar('third-customsec-1' );
                             }else{ ?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <?php elseif($top_store_custom_section3_widget_layout=='cs-3-2'): ?>
                      	<div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('third-customsec-1' ) ){
                                       dynamic_sidebar('third-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col2"><?php if( is_active_sidebar('third-customsec-2' ) ){
                                       dynamic_sidebar('third-customsec-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <?php elseif($top_store_custom_section3_widget_layout=='cs-3-3'): ?>
                      	<div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('third-customsec-1' ) ){
                                       dynamic_sidebar('third-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col2"><?php if( is_active_sidebar('third-customsec-2' ) ){
                                       dynamic_sidebar('third-customsec-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col3"><?php if( is_active_sidebar('third-customsec-3' ) ){
                                       dynamic_sidebar('third-customsec-3' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <?php elseif($top_store_custom_section3_widget_layout=='cs-3-4'): ?>
                      	<div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('third-customsec-1' ) ){
                                       dynamic_sidebar('third-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col2"><?php if( is_active_sidebar('third-customsec-2' ) ){
                                       dynamic_sidebar('third-customsec-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col3"><?php if( is_active_sidebar('third-customsec-3' ) ){
                                       dynamic_sidebar('third-customsec-3' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                       <div class="widget-cs-col4"><?php if( is_active_sidebar('third-customsec-4' ) ){
                                       dynamic_sidebar('third-customsec-4' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>

                  <?php endif;?>
		        </div> <!-- widget-cs-container End -->
		 
	</div>
</div> 
<?php }
}

/***************************/
 // Custom section Four
 /****************************/
 /**
 * Function to get custom section widget
 */
if ( ! function_exists( 'top_store_custom_four_markup' ) ){	
function top_store_custom_four_markup(){ ?>
<?php 
$top_store_custom_section4_widget_layout  = get_theme_mod( 'top_store_custom_section4_widget_layout','cs-4-1');
?>	
<div class="widget-cs">
		 	<div class="widget-cs-bar <?php echo esc_attr($top_store_custom_section4_widget_layout);?>">
		       
			      <div class="widget-cs-container">
			      	<?php if($top_store_custom_section4_widget_layout=='cs-4-1'):?>
		             <div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('four-customsec-1' ) ){
                                       dynamic_sidebar('four-customsec-1' );
                             }else{ ?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <?php elseif($top_store_custom_section4_widget_layout=='cs-4-2'): ?>
                      	<div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('four-customsec-1' ) ){
                                       dynamic_sidebar('four-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col2"><?php if( is_active_sidebar('four-customsec-2' ) ){
                                       dynamic_sidebar('four-customsec-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <?php elseif($top_store_custom_section4_widget_layout=='cs-4-3'): ?>
                      	<div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('four-customsec-1' ) ){
                                       dynamic_sidebar('four-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col2"><?php if( is_active_sidebar('four-customsec-2' ) ){
                                       dynamic_sidebar('four-customsec-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col3"><?php if( is_active_sidebar('four-customsec-3' ) ){
                                       dynamic_sidebar('four-customsec-3' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <?php elseif($top_store_custom_section4_widget_layout=='cs-4-4'): ?>
                      	<div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('four-customsec-1' ) ){
                                       dynamic_sidebar('four-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col2"><?php if( is_active_sidebar('four-customsec-2' ) ){
                                       dynamic_sidebar('four-customsec-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col3"><?php if( is_active_sidebar('four-customsec-3' ) ){
                                       dynamic_sidebar('four-customsec-3' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <div class="widget-cs-col4"><?php if( is_active_sidebar('four-customsec-4' ) ){
                                       dynamic_sidebar('four-customsec-4' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>

                  <?php endif;?>
		        </div> <!-- widget-cs-container End -->
		 
	</div>
</div> 
<?php }
}
/***************************/
 // Custom section Five
 /****************************/
 /**
 * Function to get custom section widget
 */
if ( ! function_exists( 'top_store_custom_five_markup' ) ){	
function top_store_custom_five_markup(){ ?>
<?php 
$top_store_custom_section5_widget_layout  = get_theme_mod( 'top_store_custom_section5_widget_layout','cs-5-1');
?>	
<div class="widget-cs">
		 	<div class="widget-cs-bar <?php echo esc_attr($top_store_custom_section5_widget_layout);?>">
		       
			      <div class="widget-cs-container">
			      	<?php if($top_store_custom_section5_widget_layout=='cs-5-1'):?>
		             <div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('five-customsec-1' ) ){
                                       dynamic_sidebar('five-customsec-1' );
                             }else{ ?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <?php elseif($top_store_custom_section5_widget_layout=='cs-5-2'): ?>
                      	<div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('five-customsec-1' ) ){
                                       dynamic_sidebar('five-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col2"><?php if( is_active_sidebar('five-customsec-2' ) ){
                                       dynamic_sidebar('five-customsec-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
                      <?php elseif($top_store_custom_section5_widget_layout=='cs-5-3'): ?>
                      	<div class="widget-cs-col1">
		             	<?php if( is_active_sidebar('five-customsec-1' ) ){
                                       dynamic_sidebar('five-customsec-1' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col2"><?php if( is_active_sidebar('five-customsec-2' ) ){
                                       dynamic_sidebar('five-customsec-2' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>
		             <div class="widget-cs-col3"><?php if( is_active_sidebar('five-customsec-3' ) ){
                                       dynamic_sidebar('five-customsec-3' );
                             }else{?>
     	                     <a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"><?php esc_html_e( 'Add Widget', 'top-store-pro' );?></a>
                          <?php }?>
                      </div>

                  <?php endif;?>
		        </div> <!-- widget-cs-container End -->
		 
	</div>
</div> 
<?php }
}

// Mobile Menu Wrapper Add.
function top_store_mobile_menu_wrap(){
echo '<div class="top-store-mobile-menu-wrapper"></div>';
}
add_action( 'wp_footer', 'top_store_mobile_menu_wrap' );

// section is_customize_preview
/**
 * This function display a shortcut to a customizer control.
 *
 * @param string $class_name        The name of control we want to link this shortcut with.
 */
function top_store_display_customizer_shortcut( $class_name ){
	if ( ! is_customize_preview() ) {
		return;
	}
	$icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M13.89 3.39l2.71 2.72c.46.46.42 1.24.03 1.64l-8.01 8.02-5.56 1.16 1.16-5.58s7.6-7.63 7.99-8.03c.39-.39 1.22-.39 1.68.07zm-2.73 2.79l-5.59 5.61 1.11 1.11 5.54-5.65zm-2.97 8.23l5.58-5.6-1.07-1.08-5.59 5.6z"></path>
        </svg>';
	echo'<span class="top-store-section customize-partial-edit-shortcut customize-partial-edit-shortcut-' . esc_attr( $class_name ) . '">
            <button class="customize-partial-edit-shortcut-button">
                ' . $icon . '
            </button>
        </span>';
}

function top_store_wp_is_mobile() {
    static $is_mobile;
if (
        strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false ) {
            $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') == false) {
            $is_mobile = true;
    } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false) {
        $is_mobile = false;
    } else {
        $is_mobile = false;
    }
    return $is_mobile;
}
/*************************/
//Get Page Title
/*************************/
function top_store_get_page_title(){ ?>
			<?php if(is_search()){ ?> 
            <h2 class="thunk-page-top-title entry-title">
              	<?php printf( __( 'Search Results for: %s', 'top-store-pro' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h2>

			<?php }elseif (top_store_pro_is_blog() && !is_single() && !is_archive()){
				if( !(is_front_page()) ){
                    $our_title = get_the_title( get_option('page_for_posts', true) );
			echo '<h1 class="thunk-page-top-title entry-title">'.esc_html($our_title).'</h1>'; ?>
			<?php }else{
			echo'<h1 class="thunk-page-top-title entry-title">'.esc_html__('Blog','top-store-pro').'</h1>'; ?>
			<?php }	 
			 }elseif(is_archive() && (class_exists( 'WooCommerce' ) && !is_shop())){
                   echo the_archive_title('<h1 class="thunk-page-top-title entry-title">','</h1>'); ?>
			<?php }elseif(class_exists( 'WooCommerce' ) && is_shop()) { ?>
				<h1 class="thunk-page-top-title entry-title"><?php woocommerce_page_title(); ?></h1> 
			<?php }elseif(is_page()) { 
				echo the_title('<h1 class="thunk-page-top-title entry-title">','</h1>'); ?>
			<?php } ?>
   <?php 
}

/**************************/
// Dynamic Social Link
/**************************/
function top_store_social_links(){
$social='';
$original_color = get_theme_mod('top_store_social_original_color',false);
if($original_color==true){
$class_original='original-social-icon';
}else{
$class_original='';	
}
$social.='<ul class="social-icon ' .esc_attr($class_original). ' ">';
if($f_link = get_theme_mod('top_store_social_link_facebook','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($f_link).'"><i class="fa fa-facebook"></i></a></li>';
endif;
if($l_link = get_theme_mod('top_store_social_link_linkedin','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($l_link).'"><i class="fa fa-linkedin"></i></a></li>';
endif;
if($p_link = get_theme_mod('top_store_social_link_pintrest','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($p_link).'"><i class="fa fa-pinterest"></i></a></li>';
endif;
if($t_link = get_theme_mod('top_store_social_link_twitter','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($t_link).'"><i class="fa fa-twitter"></i></a></li>';
endif;
if($insta_link = get_theme_mod('top_store_social_link_insta','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($insta_link).'"><i class="fa fa-instagram"></i></a></li>';
endif;
if($tum_link = get_theme_mod('top_store_social_link_tumblr','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($tum_link).'"><i class="fa fa-tumblr"></i></a></li>';
endif;
if($y_link = get_theme_mod('top_store_social_link_youtube','#')) :
	$social.='<li><a target="_blank" href="'.esc_url($y_link).'"><i class="fa fa-youtube-play"></i></a></li>';
endif;
if($stumb_link = get_theme_mod('top_store_social_link_stumbleupon','#')):
	$social.='<li><a target="_blank" href="'.esc_url($stumb_link).'">
	 <i class="fa fa-stumbleupon"></i></a></li>';
endif;
if($dribble_link = get_theme_mod('top_store_social_link_dribble','#')):
	$social.='<li><a target="_blank" href="'.esc_url($dribble_link).'">
	 <i class="fa fa-dribbble"></i></a></li>';
endif;
$social.='</ul>';
return $social;
}


/******************************/
//Sticky sidebar function
/******************************/
function top_store_pro_stick_sidebar($class){
            $top_store_sticky_sidebar = get_theme_mod( 'top_store_sticky_sidebar');
            if ($top_store_sticky_sidebar){
                $class = 'topstore-sticky-sidebar';
            }
            return $class;
}
add_filter( 'top_store_pro_stick_sidebar_class','top_store_pro_stick_sidebar', 999 );

//custom function conditional check for blog page
function is_blog (){
    return ( is_archive() || is_author() || is_category() || is_home() || is_tag()) && 'post' == get_post_type();
}
///////////////////////
// Faq content function
///////////////////////
function top_store_faq_content($top_store_faq_content_id,$default){
	$top_store_faq_content= get_theme_mod( $top_store_faq_content_id, $default );
//passing the setting ID and Default Values

	if ( ! empty( $top_store_faq_content ) ) :

		$top_store_faq_content = json_decode( $top_store_faq_content );
		if ( ! empty( $top_store_faq_content ) ) {
			$i=1;
			foreach ( $top_store_faq_content as $faq_item ) :

				$title    = ! empty( $faq_item->title ) ? apply_filters( 'top_store_translate_single_string', $faq_item->title, 'Faq section' ) : '';

				$text     = ! empty( $faq_item->text ) ? apply_filters( 'top_store_translate_single_string', $faq_item->text, 'Faq section' ) : '';

					?>
	<div class="ac">
        <h2 class="ac-q wow fadeInDown" data-wow-duration="2.5s" tabindex="0"><span class="faq-sn"><?php echo esc_html($i); ?></span><?php echo esc_html($title); ?>
    	</h2>
        <div class="ac-a">
            <p><?php echo esc_html($text); ?></p>
        </div>
    </div>
    			<?php
    			$i++;
			endforeach;
		}
	endif;
}

///////////////////////
//service content output function
///////////////////////
function top_store_service_content( $top_store_service_content_id, $default ) {
	$service_count = 0;
//passing the setting ID and Default Values

$top_store_service_content= get_theme_mod( $top_store_service_content_id, $default );
		if ( ! empty( $top_store_service_content ) ) :
			$top_store_service_content = json_decode( $top_store_service_content );
			if ( ! empty( $top_store_service_content ) ) {
				foreach ( $top_store_service_content as $service_item ) :
					$icon   = ! empty( $service_item->icon_value ) ? apply_filters( 'top_store_translate_single_string', $service_item->icon_value, 'Service section' ) : '';

					$title  = ! empty( $service_item->title ) ? apply_filters( 'top_store_translate_single_string', $service_item->title, 'Service section' ) : '';
					$text   = ! empty( $service_item->text ) ? apply_filters( 'top_store_translate_single_string', $service_item->text, 'Service section' ) : '';
					$link   = ! empty( $service_item->link ) ? apply_filters( 'top_store_translate_single_string', $service_item->link, 'Service section' ) : '';
					$color  = ! empty( $service_item->color ) ? $service_item->color : '';
					$service_count = ++$service_count;
					?>
				
		<div class="thunk-service-post">
			<div class="thunk-service-icon">
				<i class="<?php echo "fa ".esc_attr($icon); ?>" style="color: <?php echo esc_attr($color); ?>">
					
				</i>
			</div>
			<?php 
			$anchor_onclick = true;
			if ($link == '') {
					$anchor_onclick = false;
				} 
				else{
					$anchor_onclick = true;
				}
				?>
				<a href="<?php echo esc_url($link); ?>" onclick="return <?php echo esc_js(json_encode($anchor_onclick)); ?>">
					<h2 class="thunk-service-title">
						<?php echo esc_html($title); ?>
					</h2> 
				</a>
					<p class="thunk-service-description">
						<?php echo esc_html($text); ?>
					</p>
		</div> <!-- thunk-service-post End -->
	
			<?php		
				endforeach;			
			} // End if().
		
	endif;	
	return $service_count;
}

//testimonials content output function
function top_store_testimonials_content( $top_store_testimonials_content_id, $default ) {
//passing the setting ID and Default Values

	$top_store_testimonials_content= get_theme_mod( $top_store_testimonials_content_id, $default );
		
		if ( ! empty( $top_store_testimonials_content ) ) :
			$top_store_testimonials_content = json_decode( $top_store_testimonials_content );
			
			if ( ! empty( $top_store_testimonials_content ) ) {
				foreach ( $top_store_testimonials_content as $testimonials_item ) :

					$image = ! empty( $testimonials_item->image_url ) ? apply_filters( 'top_store_translate_single_string', $testimonials_item->image_url, 'Testimonials section' ) : '';

					$title  = ! empty( $testimonials_item->title ) ? apply_filters( 'top_store_translate_single_string', $testimonials_item->title, 'Testimonials section' ) : '';
					
					$subtitle = ! empty( $testimonials_item->subtitle ) ? apply_filters( 'top_store_translate_single_string', $testimonials_item->subtitle, 'Testimonials section' ) : '';

					$text   = ! empty( $testimonials_item->text ) ? apply_filters( 'top_store_translate_single_string', $testimonials_item->text, 'Testimonials section' ) : '';
					$link   = ! empty( $testimonials_item->link ) ? apply_filters( 'top_store_translate_single_string', $testimonials_item->link, 'Testimonials section' ) : '';
					?>
				
		<div class="testimonial-post">
         	<div class="testimonial-author">
        		<div class="testimonial-author-image">
             		<img src="<?php echo esc_url($image); ?>"/>
             	</div>
             	
             	<div class="testimonial-author-vcard">
             		<h3 class="testimonial-name"><?php echo esc_html($title); ?>
             		</h3>
             		<h5 class="testimonial-position"><?php echo esc_html($subtitle); ?></h5>
             	</div><!--.........testimonial-author-vcard end......-->
            </div><!--........testimonial-author.........-->
             
             <div class="tetsimonial-content">
             	<p class="thunk-tetsimonial-description"><?php echo esc_html($text); ?></p>
             </div>
         </div><!--..........testimonial-post END............-->
	
			<?php		
				endforeach;			
			} // End if().
		
	endif;	
}


//team content output function
function top_store_team_content( $top_store_team_content_id, $default ) {
//passing the setting ID and Default Values
$team_count = 0;
	$top_store_team_content= get_theme_mod( $top_store_team_content_id, $default );
		
		if ( ! empty( $top_store_team_content ) ) :
			$top_store_team_content = json_decode( $top_store_team_content );
			
			if ( ! empty( $top_store_team_content ) ) {
				foreach ( $top_store_team_content as $team_item ) :

					$image = ! empty( $team_item->image_url ) ? apply_filters( 'top_store_translate_single_string', $team_item->image_url, 'Team section' ) : '';

					$title  = ! empty( $team_item->title ) ? apply_filters( 'top_store_translate_single_string', $team_item->title, 'Team section' ) : '';
					
					$subtitle = ! empty( $team_item->subtitle ) ? apply_filters( 'top_store_translate_single_string', $team_item->subtitle, 'Team  section' ) : '';

					$link   = ! empty( $team_item->link ) ? apply_filters( 'top_store_translate_single_string', $team_item->link, 'Team section' ) : '';
					$team_count = ++$team_count;
					?>
				
		<div class="thunk-team-post">
			<div class="thunk-team-img">
					<img src="<?php echo esc_url($image); ?>"/>
				<div class="thunk-team-img-overlay">	
					<div class="thunk-team-description">
						<ul class="thunk-team-social">		
							<?php 
if ( ! empty( $team_item->social_repeater ) ) :
$icons = html_entity_decode( $team_item->social_repeater );
$icons_decoded = json_decode( $icons, true );
if ( ! empty( $icons_decoded ) ) :
				foreach ($icons_decoded as $key => $value) {
				$social_icon = ! empty( $value['icon'] ) ? apply_filters( '
					top_store_translate_single_string', $value['icon'], 'Team section' ) : '';
					$social_link = ! empty( $value['link'] ) ? apply_filters( 'top_store_translate_single_string', $value['link'], 'Team section' ) : '';	
					if ( ! empty( $social_icon ) ) {
					?>
					<li><a href="#" target="_blank">
					<i class="fa <?php echo esc_attr($social_icon); ?>"></i></a></li>
					<?php
					}
					}
					endif;
					endif;
						?>
					</ul>
				<div class="thunk-team-info">
					<a href="<?php echo esc_html($link); ?>" class="thunk-team-link">
					<div class="thunk-team-heading">
					<span class="thunk-team-name">
						<?php echo esc_html( $title); ?>
					</span>
					<span class="thunk-team-position">
						<?php echo esc_html($subtitle); ?>
					</span>
					</div><!--......thunk-team-heading END.......-->
					</a>
				</div>
				</div> <!--......thunk-team-description END.....-->
				</div> <!--.......thunk-team-img-overlay END......-->
			</div> <!--.......thunk-team-img END........-->	
		</div> <!--.......thunk-team-post END........-->
	
			<?php	
				
				endforeach;			
			} // End if().
		
	endif;	
	return $team_count;
}


//counter content output function
function top_store_counter_content( $top_store_counter_content_id, $default ) {
//passing the setting ID and Default Values

$top_store_counter_content= get_theme_mod( $top_store_counter_content_id, $default );
		if ( ! empty( $top_store_counter_content ) ) :
			$top_store_counter_content = json_decode( $top_store_counter_content );
			if ( ! empty( $top_store_counter_content ) ) {
				foreach ( $top_store_counter_content as $counter_item ) :

					$title  = ! empty( $counter_item->title ) ? apply_filters( 'top_store_translate_single_string', $counter_item->title, 'Counter section' ) : '';
					
					$number  = ! empty( $counter_item->number ) ? apply_filters( 'top_store_translate_single_string', $counter_item->number, 'Counter section' ) : '';
					?>
				
	<div class="counter-content">
       	<div class='numscroller numscroller-big-bottom thunk-scroller' data-slno='1' data-min='0' data-max='<?php echo esc_attr($number); ?>' data-delay='10' data-increment="9">0
       	</div>
       		<span class="counter-category thunk-counter-title" >
       			<?php echo esc_html($title); ?>	
       		</span>
    </div>
	
			<?php		
				endforeach;			
			} // End if().
		
	endif;	
}

/*****************************/
//add class active
function top_store_body_classes( $classes ){
if(class_exists( 'WooCommerce' )):
$classes[] = 'woocommerce';
endif;
$top_store_color_scheme = get_theme_mod( 'top_store_color_scheme','opn-light' );
        if ( $top_store_color_scheme == 'opn-dark' ){

            	 $classes[] = 'top-store-dark';
         }
         if ( $top_store_color_scheme == 'opn-light' ){

            	 $classes[] = 'top-store-light';
         }
return $classes;
}
add_filter( 'body_class', 'top_store_body_classes' );

// sideabr function for internal pages
function top_store_pages_sidebar(){
$top_store_sidebar_ineternal_option = get_theme_mod('top_store_sidebar_ineternal_option','active-sidebar');
return $top_store_sidebar_ineternal_option;
}

// default size in upload image
function top_store_pro_attachment_display_settings() {
    update_option( 'image_default_size', 'large' );
}
add_action( 'after_setup_theme', 'top_store_pro_attachment_display_settings' );