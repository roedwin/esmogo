<?php
/**
 * Perform WooCommerce function with Ajax
 *
 * @package Top Store WordPress theme
 */
add_action( 'wp_ajax_top_store_product_remove', 'top_store_product_remove' );
add_action( 'wp_ajax_nopriv_top_store_product_remove', 'top_store_product_remove' );
function  top_store_product_remove(){
    global $woocommerce;
    $cart = $woocommerce->cart;
    foreach ($woocommerce->cart->get_cart() as $cart_item_key => $cart_item){
    if($cart_item['product_id'] == $_POST['product_id'] ){
        // Remove product in the cart using  cart_item_key.
        $cart->remove_cart_item($cart_item_key);
        woocommerce_mini_cart();
        exit();
      }
    }
  die();
}

function top_store_product_count_update(){
   global $woocommerce; 
  ?>
<?php echo sprintf ( _n( '<span class="count-item">%d </span>', '<span class="count-item">%d</span>', WC()->cart->get_cart_contents_count(),'top-store' ), WC()->cart->get_cart_contents_count() ); ?><?php echo WC()->cart->get_cart_total(); ?>
<?php 
  die();
}
add_action( 'wp_ajax_top_store_product_count_update', 'top_store_product_count_update' );
add_action( 'wp_ajax_nopriv_top_store_product_count_update', 'top_store_product_count_update' );

 
/***************************/
//category product section product ajax filter
/***************************/
add_action('wp_ajax_top_store_pro_cat_filter_ajax', 'top_store_pro_cat_filter_ajax');
add_action('wp_ajax_nopriv_top_store_pro_cat_filter_ajax', 'top_store_pro_cat_filter_ajax');
function top_store_pro_cat_filter_ajax(){
if(isset($_POST['data_cat_slug'])){
$prdct_optn = get_theme_mod('top_store_category_optn','recent');
$args = top_store_product_query(sanitize_key($_POST['data_cat_slug']),$prdct_optn);
top_store_pro_product_filter_loop($args);
 }
exit;
}
/*****************************************/
//Product filter for List View ajax filter
/*******************************************/
add_action('wp_ajax_top_store_pro_cat_list_filter_ajax', 'top_store_pro_cat_list_filter_ajax');
add_action('wp_ajax_nopriv_top_store_pro_cat_list_filter_ajax', 'top_store_pro_cat_list_filter_ajax');
function top_store_pro_cat_list_filter_ajax(){
if(isset($_POST['data_cat_slug'])){
$prdct_optn = get_theme_mod('top_store_category_tb_list_optn','recent');
$args = top_store_product_query(sanitize_key($_POST['data_cat_slug']),$prdct_optn);
 top_store_pro_product_list_filter_loop($args);
}  exit;
  
}

/*******************************************************/
//Product filter Featured Product to big show ajax filter
/*******************************************************/
add_action('wp_ajax_top_store_pro_cat_filter_featured_big_prd_ajax', 'top_store_pro_cat_filter_featured_big_prd_ajax');
add_action('wp_ajax_nopriv_top_store_pro_cat_filter_featured_big_prd_ajax', 'top_store_pro_cat_filter_featured_big_prd_ajax');
function top_store_pro_cat_filter_featured_big_prd_ajax(){
        $args = array('limit' => 1, 'visibility' => 'catalog','featured' => true );
    if($_POST['data_cat_slug']){
        $term_args = array('hide_empty' => 1,'slug'    => $_POST['data_cat_slug']);
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
                $swapclass ='product open-shop-swap-item-hover';
        }elseif(get_theme_mod( 'top_store_woo_product_animation' )=='slide' && count($attachment_ids) > '0'){
                $swapclass ='product open-shop-slide-item-hover';
        }else{
          $swapclass ='product';
        }
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
    }
    wp_reset_postdata();
exit;
}
/**
 * Live autocomplete search feature.
 *
 * @since 1.0.0
 */
function top_store_pro_search_site(){
    if($_POST['cat']=='0' || $_POST['cat']==''){
    $taxsrch = '';
    }else{
    $taxsrch = array(
                        
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['cat'],
                          ),
                        );
  }
   $results = new WP_Query( array(
    'post_type'     => 'product',
    'post_status'   => 'publish',
    'nopaging'      => true,
    'posts_per_page'=> 100,
    's'             => $_POST['match'],
    'tax_query' => $taxsrch,
  ) );
  $items = array();
  if ( !empty( $results->posts ) ){
    foreach ( $results->posts as $result ){
      $product = wc_get_product($result->ID);
      $items[] = array('label' => $result->post_title,'link' => get_permalink($result->ID), 'imglink' => get_the_post_thumbnail($result->ID, 'thumbnail' ),'price' => $product->get_price_html(), 'urli' => $urli);
     
    }
  }
 wp_send_json_success( $items );
}
add_action( 'wp_ajax_top_store_pro_search_site',        'top_store_pro_search_site' );
add_action( 'wp_ajax_nopriv_top_store_pro_search_site', 'top_store_pro_search_site' );