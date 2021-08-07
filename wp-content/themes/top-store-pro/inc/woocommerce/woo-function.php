<?php 
/**
 * Perform all main WooCommerce configurations for this theme
 *
 * @package  Top Store WordPress theme
 */
// If plugin - 'WooCommerce' not exist then return.
if ( ! class_exists( 'WooCommerce' ) ){
	   return;
}

if ( ! function_exists( 'is_plugin_active' ) ){
         require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

/*******************************/
/** Sidebar Add Cart Product **/
/*******************************/
if ( ! function_exists( 'top_store_pro_cart_total_item' ) ){
  /**
   * Cart Link
   * Displayed a link to the cart including the number of items present and the cart total
   */
 function top_store_pro_cart_total_item(){
   global $woocommerce; 
  ?>
 <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart','top-store' ); ?>"><i class="fa fa-shopping-basket"></i> <span class="cart-content"><?php echo sprintf ( _n( '<span class="count-item">%d</span>', '<span class="count-item">%d</span>', WC()->cart->get_cart_contents_count(),'top-store' ), WC()->cart->get_cart_contents_count() ); ?><?php echo WC()->cart->get_cart_total(); ?></span></a>
  <?php }
}
//cart view function
function top_store_pro_menu_cart_view($cart_view){
	global $woocommerce;
    $cart_view= top_store_pro_cart_total_item();
    return $cart_view;
}
add_action( 'top_store_cart_count','top_store_pro_menu_cart_view');

function top_store_pro_woo_cart_product(){
global $woocommerce;
?>
<div id="open-cart" class="open-cart">
<div class="top-store-quickcart-dropdown">
<?php 
woocommerce_mini_cart(); 
?>
</div>
</div>
    <?php
}
add_action( 'top_store_woo_cart', 'top_store_pro_woo_cart_product' );
add_filter('woocommerce_add_to_cart_fragments', 'top_store_add_to_cart_dropdown_fragment');
function top_store_add_to_cart_dropdown_fragment( $fragments ){
   global $woocommerce;
   ob_start();
   ?>
   <div class="top-store-quickcart-dropdown">
       <?php woocommerce_mini_cart(); ?>
   </div>
   <?php $fragments['div.top-store-quickcart-dropdown'] = ob_get_clean();
   return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'top_store_add_to_cart_fragment');
function top_store_add_to_cart_fragment($fragments){
        ob_start();?>

          <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart','top-store' ); ?>"><i class="fa fa-shopping-basket"></i> <span class="cart-content"><?php echo sprintf ( _n( '<span class="count-item">%d</span>', '<span class="count-item">%d</span>', WC()->cart->get_cart_contents_count(),'top-store' ), WC()->cart->get_cart_contents_count() ); ?><?php echo WC()->cart->get_cart_total(); ?></span></a>

       <?php  $fragments['a.cart-contents'] = ob_get_clean();

        return $fragments;
    }
/***********************************************/
//Sort section Woocommerce category filter show
/***********************************************/
function top_store_pro_add_to_cart_url($product){
 $cart_url =  apply_filters( 'woocommerce_loop_add_to_cart_link',
    sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="button th-button %s %s"><span>%s</span></a>',
        esc_url( $product->add_to_cart_url() ),
        esc_attr( $product->get_id() ),
        esc_attr( $product->get_sku() ),
        esc_attr( isset( $quantity ) ? $quantity : 1 ),
        $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
        $product->is_purchasable() && $product->is_in_stock() && $product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
        esc_html( $product->add_to_cart_text() )
    ),$product );
 return $cart_url;
}
add_filter('woocommerce_add_to_cart_fragments', 'top_store_pro_add_to_cart_fragment');
function top_store_pro_add_to_cart_fragment($fragments){
        ob_start();?>

          <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart','top-store-pro' ); ?>"><i class="fa fa-shopping-basket"></i> <span class="cart-content"><?php echo sprintf ( _n( '<span class="count-item">%d</span>', '<span class="count-item">%d</span>', WC()->cart->get_cart_contents_count(),'top-store-pro' ), WC()->cart->get_cart_contents_count() ); ?><?php echo WC()->cart->get_cart_total(); ?></span></a>

       <?php  $fragments['a.cart-contents'] = ob_get_clean();

        return $fragments;
    }
/**********************************/
//Shop Product Markup
/**********************************/
if ( ! function_exists( 'top_store_pro_product_meta_start' ) ){
  /**
   * Thumbnail wrap start.
   */
  function top_store_pro_product_meta_start(){
    echo '<div class="thunk-product-wrap"><div class="thunk-product">';
  }
}
if ( ! function_exists( 'top_store_pro_product_meta_end' ) ){

  /**
   * Thumbnail wrap start.
   */
  function top_store_pro_product_meta_end(){

    echo '</div></div>';
  }
}
/**********************************/
//Shop Product Image Markup
/**********************************/
if ( ! function_exists( 'top_store_pro_product_image_start' ) ){
  /**
   * Thumbnail wrap start.
   */
  function top_store_pro_product_image_start(){
    echo '<div class="thunk-product-image">';
  }
}
if ( ! function_exists( 'top_store_pro_product_image_end' ) ){

  /**
   * Thumbnail wrap start.
   */
    function top_store_pro_product_image_end(){
      global $product;
      $pid = $product->get_id();
      echo woocommerce_template_loop_rating();
      echo '<div class="thunk-icons-wrap">';
    do_action('quickview');
    top_store_pro_whish_list($pid);
    top_store_pro_add_to_compare_fltr($pid);
    
    echo '</div> </div>';
  }
}

if ( ! function_exists( 'top_store_pro_product_content_start' ) ){
  /**
   * Thumbnail wrap start.
   */
  function top_store_pro_product_content_start(){
    echo '<div class="thunk-product-content">';
  }
}
if ( ! function_exists( 'top_store_pro_product_content_end' ) ){

  /**
   * Thumbnail wrap start.
   */
  function top_store_pro_product_content_end(){

    echo '</div>';
  }
}
 /**
   * Thunk-product-hover start.
   */
 if ( ! function_exists( 'top_store_pro_product_hover_start' ) ){
  function top_store_pro_product_hover_start(){

    echo'<div class="thunk-product-hover">';
    // do_action('top_store_wishlist');
    // do_action('top_store_compare');
      
  }
}
if ( ! function_exists( 'top_store_pro_product_hover_end' ) ){

  /**
   * Thumbnail wrap start.
   */
  function top_store_pro_product_hover_end(){
    
    echo '</div>';
  }
}

if ( ! function_exists( 'top_store_pro_shop_content_start' ) ){

  /**
   * Thumbnail wrap start.
   */
  function top_store_pro_shop_content_start(){
    
    echo '<div id="shop-product-wrap">';
  }
}

if ( ! function_exists( 'top_store_pro_shop_content_end' ) ){

  /**
   * Thumbnail wrap start.
   */
  function top_store_pro_shop_content_end(){
    
    echo '</div>';
  }
}
/**
* Shop customization.
*
* @return void
*/
add_action( 'woocommerce_before_shop_loop_item', 'top_store_pro_product_meta_start', 10);
add_action( 'woocommerce_after_shop_loop_item', 'top_store_pro_product_meta_end', 12 );
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open',20);
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open',0);
add_action( 'woocommerce_before_shop_loop_item_title', 'top_store_pro_product_image_start', 0);
add_action( 'woocommerce_before_shop_loop_item_title', 'top_store_pro_product_image_end',10 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
add_action( 'woocommerce_after_shop_loop_item_title', 'top_store_pro_product_hover_start',50);
add_action( 'woocommerce_after_shop_loop_item', 'top_store_pro_product_hover_end',20);
add_action( 'woocommerce_before_shop_loop', 'top_store_pro_shop_content_start',1);
add_action( 'woocommerce_after_shop_loop', 'top_store_pro_shop_content_end',1);
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open');
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

//To integrate with a theme, please use bellow filters to hide the default buttons. hide default wishlist button on product archive page
add_filter( 'woosw_button_position_archive', function() {
    return '0';
} );

//hide default compare button on product archive page
add_filter( 'filter_wooscp_button_archive', function() {
    return '0';
} );

/***************/
// single page
/***************/
if ( ! function_exists( 'top_store_pro_single_summary_start' ) ){

  /**
   * Thumbnail wrap start.
   */
  function top_store_pro_single_summary_start(){
    
    echo '<div class="thunk-single-product-summary-wrap">';
  }
}
if( ! function_exists( 'top_store_pro_single_summary_end' ) ){

  /**
   * Thumbnail wrap start.
   */
  function top_store_pro_single_summary_end(){
    
    echo '</div>';
  }
}
add_action( 'woocommerce_before_single_product_summary', 'top_store_pro_single_summary_start',0);
add_action( 'woocommerce_after_single_product_summary', 'top_store_pro_single_summary_end',0);

/****************/
// add to compare
/****************/
function top_store_pro_add_to_compare_fltr($pid){
      $product_id = $pid;
        if( is_plugin_active('yith-woocommerce-compare/init.php') && (! class_exists( 'WPCleverWooscp' ))){
          echo '<div class="thunk-compare"><span class="compare-list"><div class="woocommerce product compare-button"><a href="'.home_url().'?action=yith-woocompare-add-product&id='.$product_id.'" class="compare button" data-product_id="'.$product_id.'" rel="nofollow">Compare</a></div></span></div>';
           }
           if( ( class_exists( 'WPCleverWooscp' ))){
           echo '<div class="thunk-compare">'.do_shortcode('[wooscp id='.$product_id.']').'</div>';
         }
        }
/**********************/
/** wishlist **/
/**********************/
function top_store_pro_whish_list($pid=''){
       if( shortcode_exists( 'yith_wcwl_add_to_wishlist' ) && (! class_exists( 'WPCleverWoosw' ))){
        echo '<div class="thunk-wishlist"><span class="thunk-wishlist-inner">'.do_shortcode('[yith_wcwl_add_to_wishlist  product_id='.$pid.' icon="fa fa-heart-o" label="wishlist" already_in_wishslist_text="Already" browse_wishlist_text="Added"]' ).'</span></div>';
       }
       if( ( class_exists( 'WPCleverWoosw' ))){
      echo '<div class="thunk-wishlist"><span class="thunk-wishlist-inner">'.do_shortcode('[woosw id='.$pid.']').'</span></div>';
       }
 } 

function top_store_pro_whishlist_url(){
$wishlist_page_id =  get_option( 'yith_wcwl_wishlist_page_id' );
$wishlist_permalink = get_the_permalink( $wishlist_page_id );
return $wishlist_permalink ;
}
// 
// display admin name
function top_store_pro_display_admin_name(){
$user=wp_get_current_user();
echo esc_html($user->display_name);
}
/** My Account Menu **/
function top_store_pro_account(){
 if ( is_user_logged_in() ){?>
<a class="account" href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id') ));?>"><span class="account-text"><?php _e('Hello , ','top-store-pro');?> <?php top_store_pro_display_admin_name(); ?></span><span class="account-text"><?php _e('My account','top-store-pro');?></span><i class="fa fa-user-o" aria-hidden="true"></i></a>
<?php } else {?>
<span><a href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id') ));?>"><span class="account-text"><?php _e('Login / Signup','top-store-pro');?></span><span class="account-text"><?php _e('My account','top-store-pro');?></span><i class="fa fa-lock" aria-hidden="true"></i></a></span>
<?php }
 }

 // Plus Minus Quantity Buttons @ WooCommerce Single Product Page
add_action( 'woocommerce_before_add_to_cart_quantity', 'top_store_pro_display_quantity_minus',10,2 );
function top_store_pro_display_quantity_minus(){
    echo '<div class="top-store-quantity"><button type="button" class="minus" >-</button>';
}
add_action( 'woocommerce_after_add_to_cart_quantity', 'top_store_pro_display_quantity_plus',10,2 );
function top_store_pro_display_quantity_plus(){
    echo '<button type="button" class="plus" >+</button></div>';
}


//Woocommerce: How to remove page-title at the home/shop page but not category pages
add_filter( 'woocommerce_show_page_title', 'top_store_pro_not_a_shop_page' );
function top_store_pro_not_a_shop_page() {
    return boolval(!is_shop());
}
//************************************************************************************************//
// *****************************HOME PAGE WOO FUNCTION****************************************//
//************************************************************************************************//
//***********************/
// product category list
//************************/
function top_store_pro_product_list_categories( $args = '' ){
$term = get_theme_mod('top_store_exclde_category','');
 if(!empty($term['0'])){
  $exclude_id = $term;
  }else{
  $exclude_id = '';
  }
    $defaults = array(
        'child_of'            => 0,
        'current_category'    => 0,
        'depth'               => '5',
        'echo'                => 0,
        'exclude'             => $exclude_id,
        'exclude_tree'        => '',
        'feed'                => '',
        'feed_image'          => '',
        'feed_type'           => '',
        'hide_empty'          => 1,
        'hide_title_if_empty' => false,
        'hierarchical'        => true,
        'order'               => 'ASC',
        'orderby'             => 'menu_order',
        'separator'           => '<br />',
        'show_count'          => 0,
        'show_option_all'     => '',
        'show_option_none'    => __( 'No categories','top-store' ),
        'style'               => 'list',
        'taxonomy'            => 'product_cat',
        'title_li'            => '',
        'use_desc_for_title'  => 0,
    );
 $html = wp_list_categories($defaults);
        echo '<ul class="product-cat-list thunk-product-cat-list" data-menu-style="vertical">'.$html.'</ul>';
  }

/********************************/
//product slider loop
/********************************/
if(!function_exists('top_store_product_query')){
    function top_store_product_query($term_id,$prdct_optn){
    $limit_product = get_theme_mod('top_store_prd_shw_no','20');
    // product filter
    $args = array('limit' => $limit_product, 'visibility' => 'catalog');
    if($term_id){
        $term_args = array('hide_empty' => 1,'slug'    => $term_id);
        $product_categories = get_terms( 'product_cat', $term_args);
    $product_cat_slug =  $product_categories[0]->slug;
    $args['category'] = $product_cat_slug;
    }
    if($prdct_optn=='random'){
      $args['orderby'] = 'rand';
    }elseif($prdct_optn=='featured'){
          $args['featured'] = true;
    }
    if(get_option('woocommerce_hide_out_of_stock_items')=='yes'){ 
            $args['stock_status'] = 'instock';
    }
    return $args;
    }
}
function top_store_pro_product_slide_list_loop($term_id,$prdct_optn){  
$args = top_store_product_query($term_id,$prdct_optn);
    $products = wc_get_products( $args );
    if (!empty($products)) {
    foreach ($products as $product) {
      $pid =  $product->get_id();
      ?>
        <div <?php post_class('product'); ?>>
          <div class="thunk-list">
               <div class="thunk-product-image">
                <a href="<?php echo get_permalink($pid); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                 <?php echo get_the_post_thumbnail( $pid, 'medium' ); ?>
                  </a>
               </div>
               <div class="thunk-product-content">
                  <a href="<?php echo get_permalink($pid); ?>" class="woocommerce-LoopProduct-title woocommerce-loop-product__link"><?php echo $product->get_title(); ?></a>
                  <?php 
                        $rat_product = wc_get_product($pid);
                        $rating_count =  $rat_product->get_rating_count();
                        $average =  $rat_product->get_average_rating();
                        echo $rating_count = wc_get_rating_html( $average, $rating_count );
                       ?>
                  <div class="price"><?php echo $product->get_price_html(); ?></div>
               </div>
          </div>
        </div>
   <?php }
    } else {
      echo __( 'No products found','top-store-pro' );
    }
     wp_reset_query();
}


/**********************************************
//Funtion Category list show
 **********************************************/   
function top_store_pro_category_tab_list( $term_id ){
  if( taxonomy_exists( 'product_cat' ) ){ 
      // category filter  
      $args = array(
            'orderby'    => 'title',
            'order'      => 'ASC',
            'hide_empty' => 1,
            'slug'    => $term_id
        );
      $product_categories = get_terms( 'product_cat', $args );
      $count = count($product_categories);
      $cat_list = $cate_product = '';
      $cat_list_drop = '';
      $i=1;
      $dl=0;
?>
<?php
//Detect special conditions devices
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

//do something with this information
if( $iPod || $iPhone ){
  $device_cat =  '2';
    //browser reported as an iPhone/iPod touch -- do something here
}else if($iPad){
  $device_cat =  '2';
    //browser reported as an iPad -- do something here
}else if($Android){
  $device_cat =  '2';
    //browser reported as an Android device -- do something here
}else if($webOS){
   $device_cat =  '4';
    //browser reported as a webOS device -- do something here
}else{
    $device_cat =  '5';
}
     if ( $count > 0 ){
      foreach ( $product_categories as $product_category ){
              //global $product; 
              $category_product = array();
              $current_class = '';
              $cat_list .='
                  <li>
                  <a data-filter="' .esc_attr($product_category->slug) .'" data-animate="fadeInUp"  href="#"  data-term-id='.esc_attr($product_category->term_id) .' product_count="'.esc_attr($product_category->count).'">
                     '.esc_html($product_category->name).'</a>
                  </li>';
          if ($i++ == $device_cat) break;
          }
          if($count > $device_cat){
          foreach ( $product_categories as $product_category ){
              //global $product; 
              $dl++;
              if($dl <= $device_cat) continue;
              $category_product = array();
              $current_class = '';
              $cat_list_drop .='
                  <li>
                  <a data-filter="' .esc_attr($product_category->slug) .'" data-animate="fadeInUp"  href="#"  data-term-id='.esc_attr($product_category->term_id) .' product_count="'.esc_attr($product_category->count).'">
                     '.esc_html($product_category->name).'</a>
                  </li>';
          }
        }
          $return = '<div class="tab-head" catlist="'.esc_attr($i).'" >
          <div class="tab-link-wrap">
          <ul class="tab-link">';
 $return .=  $cat_list;
 $return .= '</ul>';
 if($count > $device_cat){
  $return .= '<div class="header__cat__item dropdown"><a href="#" class="more-cat" title="More categories...">•••</a><ul class="dropdown-link">';
 $return .=  $cat_list_drop;
 $return .= '</ul></div>';
}
  $return .= '</div></div>';

 echo $return;
       }
    } 
}
/********************************/
//product cat filter loop
/********************************/
function top_store_pro_product_cat_filter_default_loop($term_id,$prdct_optn){
$args = top_store_product_query($term_id,$prdct_optn);
    $products = wc_get_products( $args );
    if (!empty($products)) {
    foreach ($products as $product) {
      $pid =  $product->get_id();
      $attachment_ids = $product->get_gallery_image_ids($pid);
      if(get_theme_mod( 'top_store_woo_product_animation' )=='swap' && count($attachment_ids) > '0'){
                $swapclass ='product top-store-swap-item-hover';
        }elseif(get_theme_mod( 'top_store_woo_product_animation' )=='slide' && count($attachment_ids) > '0'){
                $swapclass ='product top-store-slide-item-hover';
        }else{
          $swapclass ='product';
        }
      ?>
        <div <?php post_class($swapclass); ?>>
          <div class="thunk-product-wrap">
          <div class="thunk-product">
               <div class="thunk-product-image">
                <a href="<?php echo get_permalink($pid); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                <?php $sale = get_post_meta( $pid, '_sale_price', true);
                    if( $sale) {
                      // Get product prices
                        $regular_price = (float) $product->get_regular_price(); // Regular price
                        $sale_price = (float) $product->get_price(); // Sale price
                        $saving_price = wc_price( $regular_price - $sale_price );
                        echo $sale = '<span class="onsale">-'.$saving_price.'</span>';
                    }?>
                 <?php 
                      echo get_the_post_thumbnail( $pid, 'large' ); 
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
                  </a><div class="thunk-icons-wrap">
                  <?php 
                    if(get_theme_mod( 'top_store_woo_quickview_enable', true )){

                  ?>
        <div class="thunk-quik"><a href="<?php echo get_permalink($pid); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
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
                <a href="<?php echo get_permalink($pid); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?php echo $product->get_title(); ?></a>
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
   <?php }
    } else {
      echo __( 'No products found','top-store-pro' );
    }
    wp_reset_query();
}

function top_store_pro_product_filter_loop($args){  
    $products = wc_get_products( $args );
    if (!empty($products)) {
    foreach ($products as $product) {
      $pid =  $product->get_id();

       $attachment_ids = $product->get_gallery_image_ids($pid);
      if(get_theme_mod( 'top_store_woo_product_animation' )=='swap' && count($attachment_ids) > '0'){
                $swapclass ='product top-store-swap-item-hover';
        }elseif(get_theme_mod( 'top_store_woo_product_animation' )=='slide' && count($attachment_ids) > '0'){
                $swapclass ='product top-store-slide-item-hover';
        }else{
          $swapclass ='product';
        }
      ?>
      ?>
        <div <?php post_class($swapclass,$pid); ?>>
          <div class="thunk-product-wrap">
          <div class="thunk-product">
               <div class="thunk-product-image">
                <a href="<?php echo get_permalink($pid); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                <?php $sale = get_post_meta( $pid, '_sale_price', true);
                    if( $sale) {
                      // Get product prices
                        $regular_price = (float) $product->get_regular_price(); // Regular price
                        $sale_price = (float) $product->get_price(); // Sale price
                        $saving_price = wc_price( $regular_price - $sale_price );
                        echo $sale = '<span class="onsale">-'.$saving_price.'</span>';
                    }?>
                 <?php 
                      echo get_the_post_thumbnail( $pid, 'large' ); 
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
                  </a> <div class="thunk-icons-wrap">
                  <?php 
                    if(get_theme_mod( 'top_store_woo_quickview_enable', true )){

                  ?>
        <div class="thunk-quik"><a href="<?php echo get_permalink($pid); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
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
                <a href="<?php echo get_permalink($pid); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?php echo $product->get_title(); ?></a>
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
   <?php }
    } else {
      echo __( 'No products found','top-store-pro' );
    }
    wp_reset_query();
}
/*********************/
// Product for list view
/********************/
function top_store_pro_product_list_filter_loop($args){  
    $products = wc_get_products( $args );
    if (!empty($products)) {
    foreach ($products as $product) {
      $pid =  $product->get_id();
      ?>
        <div <?php post_class('product',$pid); ?>>
          <div class="thunk-list">
               <div class="thunk-product-image">
                <a href="<?php echo get_permalink($pid); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                 <?php echo get_the_post_thumbnail( $pid, 'medium' ); ?>
                  </a>
               </div>
               <div class="thunk-product-content">
                  <a href="<?php echo get_permalink($pid); ?>" class="woocommerce-LoopProduct-title woocommerce-loop-product__link"><?php echo $product->get_title(); ?></a>
                  <?php 
                        $rat_product = wc_get_product($pid);
                        $rating_count =  $rat_product->get_rating_count();
                        $average =  $rat_product->get_average_rating();
                        echo $rating_count = wc_get_rating_html( $average, $rating_count );
                       ?>
                  <div class="price"><?php echo $product->get_price_html(); ?></div>
               </div>
          </div>
       </div>
   <?php }
    } else {
      echo __( 'No products found','top-store' );
    }
    wp_reset_query();
}

//***************************************/
// Featured product to show in big post
//***************************************/

function top_store_pro_featured_product_show_big($term_id){ 
// product filter 
$args = array('limit' => 1, 'visibility' => 'catalog','featured' => true );
    if($term_id){
        $term_args = array('hide_empty' => 1,'slug'    => $term_id);
        $product_categories = get_terms( 'product_cat', $term_args);
    $product_cat_slug =  $product_categories[0]->slug;
    $args['category'] = $product_cat_slug;
    }
    if(get_option('woocommerce_hide_out_of_stock_items')=='yes'){ 
            $args['stock_status'] = 'instock';
    }
   $products = wc_get_products( $args );
    if (!empty($products)) {
    foreach ($products as $product) {
      $pid =  $product->get_id();
      $attachment_ids = $product->get_gallery_image_ids($pid);
       if(get_theme_mod( 'top_store_woo_product_animation' )=='swap' && count($attachment_ids) > '0'){
                $swapclass ='product top-store-swap-item-hover';
        }elseif(get_theme_mod( 'top_store_woo_product_animation' )=='slide' && count($attachment_ids) > '0'){
                $swapclass ='product top-store-slide-item-hover';
        }else{
          $swapclass ='product';
        }
      ?>
        <div <?php post_class($swapclass); ?>>
          <div class="thunk-product-wrap">
          <div class="thunk-product">
               <div class="thunk-product-image">
                <a href="<?php echo get_permalink($pid); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                <?php $sale = get_post_meta( $pid, '_sale_price', true);
                    if( $sale) {
                      // Get product prices
                        $regular_price = (float) $product->get_regular_price(); // Regular price
                        $sale_price = (float) $product->get_price(); // Sale price
                        $saving_price = wc_price( $regular_price - $sale_price );
                        echo $sale = '<span class="onsale">-'.$saving_price.'</span>';
                    }?>
                 <?php echo get_the_post_thumbnail( $pid, 'large' ); ?>
                  </a> <div class="thunk-icons-wrap">
                  <div class="thunk-quik">
                   <div class="thunk-quickview">
                               <span class="quik-view">
                                   <a href="#" class="opn-quick-view-text" data-product_id="<?php echo esc_attr($pid); ?>">
                                      <span><i class="fa fa-search" aria-hidden="true"></i></span>
                                   </a>
                                </span>
                      </div>
                    </div>
                <?php
                  echo top_store_pro_whish_list($pid);
                  echo top_store_pro_add_to_compare_fltr($pid);
                ?>
                </div>
               </div>
               <div class="thunk-product-content">
                  <h2 class="woocommerce-loop-product__title"><a href="<?php echo get_permalink($pid); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?php echo $product->get_title(); ?></a></h2>
                   <?php 
                        $rat_product = wc_get_product($pid);
                        $rating_count =  $rat_product->get_rating_count();
                        $average =  $rat_product->get_average_rating();
                        echo $rating_count = wc_get_rating_html( $average, $rating_count );
                       ?>
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
   <?php }
    } else {
      echo __( 'No products found','top-store-pro' );
    }
    wp_reset_postdata();
}
/*****************************/
// Product show function
/****************************/
function top_store_pro_widget_product_query($query){
$productType = $query['prd-orderby'];
$count = $query['count'];
$cat_slug = $query['cate'];
global $th_cat_slug;
$th_cat_slug = $cat_slug;
        $args = array(
            'hide_empty' => 1,
            'posts_per_page' => $count,
            'post_type' => 'product',
            'orderby' => 'date',
            'order' => 'DESC',
            'meta_query' => array(
                              array(
                                  'key' => '_stock_status',
                                  'value' => 'instock'
                              ),
                              array(
                                  'key' => '_backorders',
                                  'value' => 'no'
                              ),
                          )
        );
       if($productType == 'featured'){
         // featured product
            $args['post__in'] =  wc_get_featured_product_ids();
        }
        elseif($productType == 'random'){
            //random product
          $args['orderby'] = 'rand';
        }
        elseif($productType == 'sale') {
          //sale product
        $args['meta_query']     = array(
        'relation' => 'OR',
        array( // Simple products type
            'key'           => '_sale_price',
            'value'         => 0,
            'compare'       => '>',
            'type'          => 'numeric'
        ),
        array( // Variable products type
            'key'           => '_min_variation_sale_price',
            'value'         => 0,
            'compare'       => '>',
            'type'          => 'numeric'
        )
    );
}
$args['meta_key'] = '_thumbnail_id';
if($cat_slug != '0'){
                $args['tax_query'] = array(
                  'relation' => 'AND',
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'term_id',
                                'terms' => $cat_slug,
                            ),
                           array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                         );
     }
$return = new WP_Query($args);
return $return;
}
/*****************************/
// Post show function
/****************************/
function top_store_pro_post_query($query){

       $args = array(
            'orderby' => $query['orderby'],
            'order' => 'DESC',
            'ignore_sticky_posts' => $query['sticky'],
            'post_type' => 'post',
            'posts_per_page' => $query['count'], 
            'cat' => $query['cate'],
            'meta_key'     => '_thumbnail_id',
           
        );

       if($query['thumbnail']){
          $args['meta_key'] = '_thumbnail_id';
       }

            $return = new WP_Query($args);

            return $return;
}
     /*************************
     * Get Off Canvas Sidebar
     *
     * @return void
     */
      function top_store_pro_show_off_canvas_sidebar_icon(){
      if ( ! class_exists( 'WooCommerce' ) ){
           return;
      }
      $offcanvas = get_theme_mod('top_store_canvas_alignment','cnv-none');
      if($offcanvas!=='cnv-none'):
      ?>
      <span class="canvas-icon">
      <a href="#" class="off-canvas-button">
         <span class="cnv-top"></span>
         <span class="cnv-top"></span>
         <span class="cnv-bot"></span>
       </a>
    </span>
    <?php  endif; }
    function top_store_pro_get_off_canvas_sidebar(){
     if(get_theme_mod('top_store_canvas_alignment','cnv-none')!=='cnv-none'):
        echo '<div class="top-store-off-canvas-sidebar-wrapper from-left"><div class="top-store-off-canvas-sidebar"><div class="close-bn"><span class="top-store-filter-close close"></span></div>';
        if ( is_active_sidebar('top-store-woo-canvas-sidebar') ){
                          dynamic_sidebar('top-store-woo-canvas-sidebar');
                       }else{ ?>
                  <p class='no-widget-text'>
          <a href='<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>'>
            <?php esc_html_e( 'Click here to assign a widget for this area.', 'top-store-pro' ); ?>
          </a>
        </p>
                    <?php }
        echo '</div></div>';
      endif;
     
    }
    add_action( 'wp_footer', 'top_store_pro_get_off_canvas_sidebar' );