<?php
/*
 *  PRODUCT-TWO-WIDGET
 */
// register widget
function top_store_pro_show_product_silde_widget(){
register_widget( 'top_store_pro_product_slide_widget' );
}
add_action('widgets_init', 'top_store_pro_show_product_silde_widget');
//  widget class
/**
* Register widget with WordPress.
*/
class top_store_pro_product_slide_widget extends WP_Widget{

function __construct(){
    $widget_ops = array('classname' => 'top_store_pro_product_slide_widget','description' => 'Show your Product');
        parent::__construct('top-store-product-slide-widget', __('Top Store : Single Category Slider','top-store-pro'), $widget_ops);
    }
    /**
   * Front-end display of widget.
   *
   * @see WP_Widget::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */
    function widget($args, $instance){
    extract($args);
    echo $before_widget;
    //widget content
    $query = array();
    $bg = isset($instance['bg']) ? $instance['bg']:'';
    $title = isset($instance['title'])?$instance['title']:__('Latest','top-store-pro');
    $btntxt = isset($instance['btntxt'])?$instance['btntxt']:'';
    $ato_ply = isset($instance['ato_ply']) ? $instance['ato_ply']:'true';
    $choose_bg = isset($instance['choose_bg']) ? $instance['choose_bg']:'clr';
    $query['prd-orderby'] = isset($instance['prd-orderby']) ?$instance['prd-orderby'] : 'recent';
    $query['cate'] = isset($instance['ofcate']) ? absint($instance['ofcate']) : 0;
    $query['count'] = isset($instance['ofcount']) ? absint($instance['ofcount']) : 8;
    $query['column_no'] = isset($instance['column_no']) ? absint($instance['column_no']) : 4;
    $widget_title_color = isset($instance['widget_title_color'])? $instance['widget_title_color']:'#fff';
    $title_bg_color = isset($instance['title_bg_color'])? $instance['title_bg_color']:'#00badb';
    $alignment = isset($instance['alignment'])? $instance['alignment']:'left';
    $query['thumbnail'] = true;
    $products = top_store_pro_widget_product_query($query);
    $catelink = get_category_link( $query['cate'] ); 
    ?>
<style>
   .product-slide-one-widget.<?php echo $widget_id;?> .slide-widget-title{
    color:<?php echo $widget_title_color; ?>;
    text-align: center;
   }
   
   .product-slide-one-widget.<?php echo $widget_id;?> .product-content .button a{
   
    margin-top: 50px;
    display: inline-block;
    margin: 3px 8px;
   }
   .product-slide-one-widget.<?php echo $widget_id;?> .product-content{
    text-align: center;
   }
   .product-slide-one-widget.<?php echo $widget_id;?> .slide-one-product.featured-grid .thunk-wishlist {
    float: none;
}
.product-slide-one-widget.<?php echo $widget_id;?> .slide-one-product.featured-grid  .thunk-compare {
    float: none;
}
.product-slide-one-widget.<?php echo $widget_id;?> .slide-one-product.featured-grid  .yith-wcwl-add-button a.add_to_wishlist, .product-slide-one-widget.<?php echo $widget_id;?> .slide-one-product.featured-grid .yith-wcwl-wishlistexistsbrowse.show a {
    font-size: 0;
}
.product-slide-one-widget.<?php echo $widget_id;?> .slide-one-product.featured-grid   .thunk-compare .compare-button a {
    font-size: 0;
    letter-spacing: initial;
}
.product-slide-one-widget.<?php echo $widget_id;?> .slide-one-product.featured-grid  .thunk-wishlist .yith-wcwl-add-button > a i {
    margin: 0;
}

.product-slide-one-widget.<?php echo $widget_id;?> .slide-one-product.featured-grid  .thunk-compare .compare-button a:before {
    font-size: 12px;
    margin: 0;
}
.product-slide-one-widget.<?php echo $widget_id;?> .slide-one-product.featured-grid  .yith-wcwl-wishlistexistsbrowse a,.product-slide-one-widget.<?php echo $widget_id;?> .slide-one-product.featured-grid .yith-wcwl-wishlistaddedbrowse a {
    display: none;
}
  
<?php if($choose_bg=='img'){?>
  .product-slide-one-widget.<?php echo $widget_id;?> .widget-content-wrap{
    background:url('<?php echo $bg; ?>');
  }
<?php } else { ?>
.product-slide-one-widget.<?php echo $widget_id;?> .widget-content-wrap{
    background:<?php echo $title_bg_color; ?>;
   }
<?php } ?>
</style>
<div class="product-slide-one-widget product-slide-widget <?php echo $widget_id; ?>"> 
<?php if($alignment=='left'){ ?>
<div class="widget-content-wrap">
  <div class="product-content">
    <?php if($title!==''){?>
    <h2 class="slide-widget-title"><?php echo $title; ?></h2> 
    <?php } ?>
    <?php if($btntxt!==''){?>
    <div class="button">
      <?php if($catelink!==''){?>
      <a href="<?php echo $catelink;?>"><?php echo $btntxt; ?></a>
      <?php } else { ?>
      <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>"><?php echo $btntxt; ?></a>
      <?php } ?>
    </div>
    <?php } ?>
  </div>
</div>
<?php } ?>
<input type='hidden' class="autoplay-<?php echo $widget_id; ?>" value="<?php echo $ato_ply; ?>" /> 
<input type='hidden' class="column_no-<?php echo $widget_id; ?>" value="<?php echo $query['column_no']; ?>" /> 
<div class="slide-wrap">
<div id="<?php echo $widget_id?>" class="thunk-slide slide-one-product featured-grid owl-carousel">
<?php 
while ($products->have_posts() ) : $products->the_post();
global $product;
global $th_cat_slug;
$pid =  $product->get_id();?>
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
                 <?php the_post_thumbnail(); ?>
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
<?php if($alignment=='right'){ ?>
<div class="widget-content-wrap right">
  <div class="product-content">
    <?php if($title!==''){?>
    <h2 class="slide-widget-title"><?php echo $title; ?></h2> 
    <?php } ?>
    <?php if($btntxt!==''){?>
    <div class="button">
      <?php if($catelink!==''){?>
      <a href="<?php echo $catelink;?>"><?php echo $btntxt; ?></a>
      <?php } else { ?>
      <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>"><?php echo $btntxt; ?></a>
      <?php } ?>
    </div>
    <?php } ?>
  </div>
</div>
<?php } ?>
</div>
<script>
  jQuery(document).ready(function(){
    var wdgetid = '<?php echo $widget_id; ?>';
    var auto = jQuery(".autoplay-"+wdgetid).val();
    var colno = jQuery(".column_no-"+wdgetid).val();
if(auto=='true'){ 
  var owl = jQuery( '#'+wdgetid+'.owl-carousel' );
      owl.owlCarousel({
        items: 5,
        nav: true,
        loop:true,
        margin:15,
        loop: true,
        dots: false,
        smartSpeed: 5000, 
        autoHeight: false,
        autoplay:true,
        autoplaySpeed:5000,
        autoplayHoverPause: true,
        stopOnHover : true,
        autoplayTimeout: 5000,
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
      });
    }
    else{
     var owl = jQuery( '#'+wdgetid+'.owl-carousel' );
      owl.owlCarousel({
        loop:true,
        items: 5,
        margin:15,
        loop: true,
        dots: false,
        smartSpeed: 5000, 
        autoplayHoverPause: true,
        stopOnHover : true,
        autoHeight: false,
        autoplay:false,
        autoplayTimeout: 5000,
        nav: true,
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
      });
    }
});
</script>
<?php
echo $after_widget;
}
/**
   * Sanitize widget form values as they are saved.
   *
   * @see WP_Widget::update()
   *
   * @param array $new_instance Values just sent to be saved.
   * @param array $old_instance Previously saved values from database.
   *
   * @return array Updated safe values to be saved.
   */
function update($new_instance, $old_instance){
        $instance = $old_instance;
        $query = array();
        global $top_store_exclude_product;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['bg'] = $new_instance['bg'];
        $instance['btntxt'] = strip_tags( $new_instance['btntxt'] );
        $instance["ato_ply"] = $new_instance["ato_ply"];
        $instance["choose_bg"] = $new_instance["choose_bg"];
        $instance["prd-orderby"] = $new_instance["prd-orderby"];
        $instance["ofcate"] = absint($new_instance["ofcate"]);
        $instance["column_no"] = absint($new_instance["column_no"]);
        $instance['ofcount'] = strip_tags( $new_instance['ofcount'] );
        $instance["widget_title_color"] = $new_instance["widget_title_color"];
        $instance["title_bg_color"] = $new_instance["title_bg_color"];
        $instance["alignment"] = $new_instance["alignment"];
        return $instance;
    }
   


    /**
   * Back-end widget form.
   *
   * @see WP_Widget::form()
   *
   * @param array $instance Previously saved values from database.
   */
    function form($instance){
        $widgetInput = New THunkWidgetHtml();
        $bg = isset($instance['bg']) ? esc_attr($instance['bg']):'';
        $title = isset($instance['title']) ? esc_attr($instance['title']) : __('Latest','top-store-pro');
        $btntxt = isset($instance['btntxt']) ? esc_attr($instance['btntxt']) : '';
        $ato_ply = isset($instance['ato_ply']) ? $instance['ato_ply'] :"true";
        $choose_bg = isset($instance['choose_bg']) ? $instance['choose_bg'] :"clr";
        $ofcate = isset($instance['ofcate']) ? absint($instance['ofcate']) : 0;
        $column_no = isset($instance['column_no']) ? absint($instance['column_no']) : 3;
        $ofcount = isset($instance['ofcount']) ? absint($instance['ofcount']) : 5;
        $widget_title_color = isset($instance['widget_title_color']) ? $instance['widget_title_color'] :"#fff";
        $title_bg_color = isset($instance['title_bg_color']) ? $instance['title_bg_color'] :"#00badb";
        
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
    $slug = $cat->slug;
// $foption .= '<option value="'.$term_id.'" '.$selected1.'data="'.$slug.'"'.'>'.$cat->name.'</option>';
$foption .= '<option value="'.$term_id.'" '.$selected1.'>'.$cat->name.'</option>';
}
}
//******************************//  
?>
<div class="clearfix"></div>
    <p>
    <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title','top-store-pro'); ?></label>
    <input name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>"  class="widefat" value="<?php echo $title; ?>" >
    </p>
    <p>
  <label for="<?php echo $this->get_field_id('btntxt'); ?>"><?php _e('Button Text','top-store-pro'); ?></label>
  <input id="<?php echo $this->get_field_id('btntxt'); ?>" name="<?php echo $this->get_field_name('btntxt'); ?>" type="text" value="<?php echo $btntxt; ?>" size="3" />
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
<input style="margin-right:5px;margin-left:5px;" type="radio" id="role_info" class="widefat" name="<?php echo $this->get_field_name('alignment'); ?>"  value="left" <?php checked( $alignment, 'left' ); ?> >Left
</p>
<!-- color option-->
<p>
<label style="padding-bottom: 5px;" for="<?php echo $this->get_field_id('choose_bg'); ?>"><?php _e('Choose Background','top-store-pro'); ?></label>
<label style="padding-bottom: 10px; padding-top:0px;font-size: 12px;font-style: italic;"><?php _e('(For showing the background color of title, first you have to choose Background as "Color)','top-store-pro'); ?></label>
<input 
style="margin-right:5px;margin-left:5px;" type="radio" id="role_info" class="widefat" name="<?php echo $this->get_field_name('choose_bg'); ?>"  value="img" <?php checked( $choose_bg, 'img' ); ?> >Image
<br/>
<br/>
<input style="margin-right:5px;margin-left:5px;" type="radio" id="role_info" class="widefat" name="<?php echo $this->get_field_name('choose_bg'); ?>"  value="clr" <?php checked( $choose_bg, 'clr' ); ?> >Color
</p>
<p>
<p>
<label for="<?php echo $this->get_field_id('bg'); ?>"><?php _e('Background Image','top-store-pro'); ?></label>
                <?php
            if ( isset($instance['bg']) && $instance['bg'] != '' ) :
                echo '<img class="custom_media_image" src="' . $instance['bg'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" /><br />';
            endif;
        ?>
        <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('bg'); ?>" id="<?php echo $this->get_field_id('bg'); ?>" value="<?php  echo $bg; ?>" style="margin-top:5px;">
        <input type="button" class="button button-primary custom_media_button" id="<?php echo $this->get_field_id('bg'); ?>_button" name="<?php echo $this->get_field_name('bg'); ?>" value="Upload Image" style="margin-top:5px;" />
</p>
<label for="<?php echo $this->get_field_id( 'title_bg_color' ); ?>" style="display:block;"><?php _e( 'Title Background Color','top-store-pro' ); ?></label>
<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'title_bg_color' ); ?>" name="<?php echo $this->get_field_name( 'title_bg_color' ); ?>" type="text" value="<?php echo esc_attr( 
    $title_bg_color); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'widget_title_color' ); ?>" style="display:block;"><?php _e( 'Title Color','top-store-pro' ); ?></label>
<input class="widefat color-picker" id="<?php echo $this->get_field_id( 'widget_title_color' ); ?>" name="<?php echo $this->get_field_name( 'widget_title_color' ); ?>" type="text" value="<?php echo esc_attr( 
    $widget_title_color); ?>" />
</p>

        <?php
    }
}