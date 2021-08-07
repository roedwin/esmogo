<?php
/*
 *  PRODUCT-ONE-WIDGET
 */
// register widget
function top_store_pro_show_product_one_widget(){
    register_widget( 'top_storeproshowprd_one' );
}
add_action('widgets_init', 'top_store_pro_show_product_one_widget');
//  widget class
class top_storeproshowprd_one extends WP_Widget{
function __construct(){
    $widget_ops = array('classname' => 'top_storeproshowprd_one','description' => 'Show your Product');
        parent::__construct('top_store-showprd-one-widget', __('Top Store : Product slider widget','top-store-pro'), $widget_ops);
    }
    function widget($args, $instance){
    extract($args);
    echo $before_widget;
    //widget content
    $query = array();
    $title = isset($instance['title'])?$instance['title']:__('Latest','top-store-pro');
    $ato_ply = isset($instance['ato_ply']) ? $instance['ato_ply']:'true';
    $query['prd-orderby'] = isset($instance['prd-orderby']) ?$instance['prd-orderby'] : 'recent';
    $query['cate'] = isset($instance['ofcate']) ? absint($instance['ofcate']) : 0;
    $query['count'] = isset($instance['ofcount']) ? absint($instance['ofcount']) : 8;
    $query['column_no'] = isset($instance['column_no']) ? absint($instance['column_no']) : 4;
    $widget_title_color = isset($instance['widget_title_color'])? $instance['widget_title_color']:'#242424';
   
    $query['thumbnail'] = true;
    $products = top_store_pro_widget_product_query($query);
    $catelink = get_category_link( $query['cate'] ); 
    $alignment = isset($instance['alignment'])? $instance['alignment']:'left ';
    ?>
<style>
.product-slide-widget.<?php echo $widget_id;?> .slide-widget-title{
    margin-bottom: 10px;
  }
.product-slide-widget.<?php echo $widget_id;?> .slide-widget-title.right{
    text-align: right;
   }
.product-slide-widget.<?php echo $widget_id;?> .slide-widget-title.left{
    text-align: left;
   }
.product-slide-widget.<?php echo $widget_id;?> .slide-widget-title.center{
    text-align: center;
   }
   
</style>
<div class="product-slide-widget <?php echo $widget_id; ?>">  
<input type='hidden' class="autoplay-<?php echo $widget_id; ?>" value="<?php echo $ato_ply; ?>" /> 
<input type='hidden' class="column_no-<?php echo $widget_id; ?>" value="<?php echo $query['column_no']; ?>" /> 
<?php if($title!==''){ ?>
<h2 class="widget-title slide-widget-title <?php echo $alignment; ?>" style="color:<?php echo $widget_title_color; ?>"><?php echo $title; ?></h2> 
<div class="heading-border"></div>
<?php } ?>  
<div id="<?php echo $widget_id?>" class="thunk-slide slide-two-product featured-grid owl-carousel">
<?php 
while ($products->have_posts() ) : $products->the_post();
global $product;
global $th_cat_slug;
$pid =  $product->get_id();
?>
<div <?php post_class(); ?>>
  <div class="thunk-product-wrap">
          <div class="thunk-product">
               <div class="thunk-product-image">
                <a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                <?php $sale = get_post_meta( $pid, '_sale_price', true);
                    if( $sale) {
                      // Get product prices
                        $regular_price = (float) $product->get_regular_price(); // Regular price
                        $sale_price = (float) $product->get_price(); // Sale price
                        $saving_price = wc_price( $regular_price - $sale_price );
                        echo $sale = '<span class="onsale">-'.$saving_price.'</span>';
                    }?>
                 <?php 
                      the_post_thumbnail(); 
                      $hover_style = get_theme_mod( 'top_store_woo_product_animation' );
                         // the_post_thumbnail();
                       if ( 'swap' === $hover_style ){
                                $attachment_ids = $product->get_gallery_image_ids($pid);
                                if(!empty($attachment_ids)){
                             
                                 $glr = wp_get_attachment_image($attachment_ids[0], 'shop_catalog', false, array( 'class' => 'show-on-hover' ));
                                   echo $category_product['glr'] = $glr;

                                 }
                               
                           }
                           if ( 'slide' === $hover_style ){
                                $attachment_ids = $product->get_gallery_image_ids($pid);
                                if(!empty($attachment_ids)){
                             
                                 $glr = wp_get_attachment_image($attachment_ids[0], 'shop_catalog', false, array( 'class' => 'show-on-slide' ));
                                   echo $category_product['glr'] = $glr;

                                 }
                               
                           }
                  ?>
                 <?php 
                        $rat_product = wc_get_product($pid);
                        $rating_count =  $rat_product->get_rating_count();
                        $average =  $rat_product->get_average_rating();
                        echo $rating_count = wc_get_rating_html( $average, $rating_count );
                       ?>
                  </a>
                   <div class="thunk-icons-wrap">
                  <?php 
                    if(get_theme_mod( 'top_store_woo_quickview_enable', true )){

                  ?>
        <div class="thunk-quik"><a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                   </a>
                   <div class="thunk-quickview">
                               <span class="quik-view">
                                   <a href="#" class="opn-quick-view-text" data-product_id="<?php echo esc_attr($pid); ?>">
                                      <span>
                                      <i class="fa fa-search" aria-hidden="true"></i>
                                      </span>
                                   </a>
                                </span>
                        </div>
                      </div>
                      <?php }
                echo top_store_pro_whish_list($pid);
                echo top_store_pro_add_to_compare_fltr($pid);
                       ?>
                   </div>
               </div>
               <div class="thunk-product-content">
                <h2 class="woocommerce-loop-product__title">
                <a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?php the_title(); ?></a>
                </h2>
                  <div class="price"><?php echo $product->get_price_html(); ?></div>
            </div>
            <div class="thunk-product-hover">     
                    <?php 
                      echo top_store_pro_add_to_cart_url($product);
                    ?>
            </div>
          </div>
        </div>
      </div>
<?php  
endwhile;
wp_reset_query();
?>
</div>
</div>
<script>
 ///-----------------------///
// product slide script
///-----------------------///
jQuery(document).ready(function(){
var wdgetid = '<?php echo $widget_id; ?>'; 
var auto = jQuery(".autoplay-"+wdgetid).val();
var colno = jQuery(".column_no-"+wdgetid).val();
if(auto=='true'){
jQuery('#'+wdgetid+'.owl-carousel').owlCarousel({  
    loop:true,
     nav: true,
    margin:15,
    autoplay:true,
    autoplaySpeed:5000,
    autoplayTimeout: 5000,
    smartSpeed: 5000,
    fluidSpeed:true,
    responsiveClass:true,
    autoplayHoverPause: true,
    dots: false,  
    navText: ["<i class='slick-nav fa fa-angle-left'></i>",
       "<i class='slick-nav fa fa-angle-right'></i>"],
    responsive:{
        0:{
            items:2,
            margin:7.5,
        },
        550:{
            items:2,
            margin:7.5,
        },
        768:{
            items:3
        },
        1025:{
            items:4
        },
        1025:{
            items:colno
        }
     }
  })
}else{ 
    jQuery('#'+wdgetid+'.owl-carousel').owlCarousel({
    loop:true,
     nav: true,
    margin:15,
    autoplay:false,
    smartSpeed: 5000,
    fluidSpeed:true,
    responsiveClass:true,
    autoplayHoverPause: true,
    dots: false,
    navText: ["<i class='slick-nav fa fa-angle-left'></i>",
       "<i class='slick-nav fa fa-angle-right'></i>"],
    responsive:{
        0:{
            items:2,
            margin:7.5,
        },
        550:{
            items:2,
            margin:7.5,
        },
        768:{
            items:3
        },
        1025:{
            items:4
        },
        1025:{
            items:colno
        }
     }
})
}
});
</script>
<?php
echo $after_widget;
}
function update($new_instance, $old_instance){
        $instance = $old_instance;
        $query = array();
        global $top_store_exclude_product;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance["ato_ply"] = $new_instance["ato_ply"];
        $instance["prd-orderby"] = $new_instance["prd-orderby"];
        $instance["ofcate"] = absint($new_instance["ofcate"]);
        $instance["column_no"] = absint($new_instance["column_no"]);
        $instance['ofcount'] = strip_tags( $new_instance['ofcount'] );
        $instance["widget_title_color"] = $new_instance["widget_title_color"];
       
        $instance["alignment"] = $new_instance["alignment"];
        return $instance;
    }
    function form($instance){
        $widgetInput = New THunkWidgetHtml();
        $title = isset($instance['title']) ? esc_attr($instance['title']) : __('Latest','top-store-pro');
        $ato_ply = isset($instance['ato_ply']) ? $instance['ato_ply'] :"true";
        $ofcate = isset($instance['ofcate']) ? absint($instance['ofcate']) : 0;
        $column_no = isset($instance['column_no']) ? absint($instance['column_no']) : 3;
        $ofcount = isset($instance['ofcount']) ? absint($instance['ofcount']) : 5;
        $widget_title_color = isset($instance['widget_title_color']) ? $instance['widget_title_color'] :"#242424";
       
        $alignment = isset($instance['alignment']) ? $instance['alignment'] :"left";
 //******************************//       
// fetch product category
//******************************//
if ( taxonomy_exists ( 'product_cat' )){  
$termarr = array(
    'child_of'   => 0,
    'orderby' => 'count', 
    'include' => ',' ,
    'order' => 'DESC'
);
$terms = get_terms('product_cat' ,$termarr);
$foption = '<option value="0">All</option>';
foreach($terms as $cat) {
    $term_id = $cat->term_id;
    $selected1 = ($ofcate==$term_id)?'selected':'';
$foption .= '<option value="'.$term_id.'" '.$selected1.'>'.$cat->name.'</option>';
}
}
//******************************//  
?>
<div class="clearfix"></div>
    <p>
    <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Widget Title','top-store-pro'); ?></label>
    <input name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>"  class="widefat" value="<?php echo $title; ?>" >
    </p>
    <?php 
      $arr2 = array('id'=>'prd-orderby',
          'label'=> __('Choose Product Type ','top-store-pro'),
          'default' => 'recent',
          'option' => array('recent'=>__('Recent','top-store-pro'),
                            'featured'=>__('Featured','top-store-pro'),
                            'random' =>__('Random','top-store-pro'),
                            'sale' =>__('Sale','top-store-pro'))
          );
        $widgetInput->selectBox($this,$instance,$arr2);
        ?>
    <p>
    <label for="<?php echo $this->get_field_id('ofcate'); ?>"><?php _e('Choose Category to Show Product','top-store-pro'); ?></label>
        <select name="<?php echo $this->get_field_name('ofcate'); ?>" ><?php echo $foption; ?></select>
    </p>
    <p>
    <label for="<?php echo $this->get_field_id('column_no'); ?>"><?php _e('Number of Column','top-store-pro'); ?></label>
        <select name="<?php echo $this->get_field_name('column_no'); ?>" >
           <option value="1" <?php echo ($column_no== 1)?'selected':''; ?>>1</option>
          <option value="2" <?php echo ($column_no== 2)?'selected':''; ?>>2</option>
          <option value="3" <?php echo ($column_no== 3)?'selected':''; ?>>3</option>
          <option value="4" <?php echo ($column_no== 4)?'selected':''; ?>>4</option>
          <option value="5" <?php echo ($column_no== 5)?'selected':''; ?>>5</option>
          </select>
    </p>
    <p><label for="<?php echo $this->get_field_id('ofcount'); ?>"><?php _e('Add Number of Product to fetch','top-store-pro'); ?></label>
            <input id="<?php echo $this->get_field_id('ofcount'); ?>" name="<?php echo $this->get_field_name('ofcount'); ?>" type="text" value="<?php echo $ofcount; ?>" size="3" />
    </p>  

<p>
<label for="<?php echo $this->get_field_id('ato_ply'); ?>"><?php _e('Autoplay Slider','top-store-pro'); ?></label>
<input 
style="margin-right:5px;margin-left:5px;" type="radio" id="role_info" class="widefat" name="<?php echo $this->get_field_name('ato_ply'); ?>"  value="true" <?php checked( $ato_ply, 'true' ); ?> >ON
<br/>
<br/>
<input style="margin-right:5px;margin-left:5px;" type="radio" id="role_info" class="widefat" name="<?php echo $this->get_field_name('ato_ply'); ?>"  value="false" <?php checked( $ato_ply, 'false' ); ?> >OFF
</p>


<p>
<label for="<?php echo $this->get_field_id('alignment'); ?>"><?php _e('Choose Title Alignment','top-store-pro'); ?></label>
<input 
style="margin-right:5px;margin-left:5px;" type="radio" id="role_info" class="widefat" name="<?php echo $this->get_field_name('alignment'); ?>"  value="right" <?php checked( $alignment, 'right' ); ?> >Right
<br/>
<br/>
<input 
style="margin-right:5px;margin-left:5px;" type="radio" id="role_info" class="widefat" name="<?php echo $this->get_field_name('alignment'); ?>"  value="center" <?php checked( $alignment, 'center' ); ?> >Center
<br/>
<br/>
<input style="margin-right:5px;margin-left:5px;" type="radio" id="role_info" class="widefat" name="<?php echo $this->get_field_name('alignment'); ?>"  value="left" <?php checked( $alignment, 'left' ); ?> >Left
</p>
<!-- color option-->
<p>
<label for="<?php echo $this->get_field_id( 'widget_title_color' ); ?>" style="display:block;"><?php _e( 'Widget Title Color','top-store-pro' ); ?></label>
<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'widget_title_color' ); ?>" name="<?php echo $this->get_field_name( 'widget_title_color' ); ?>" type="text" value="<?php echo esc_attr( 
    $widget_title_color); ?>" />
</p>
        <?php
    }
 }
?>