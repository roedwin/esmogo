<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Top Store Pro
 * @since 1.0.0
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="<?php echo esc_attr(get_theme_mod('top_store_mobile_header_clr','#fff')); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<?php wp_body_open();?>	
<?php do_action('top_store_pro_site_preloader'); ?>
<div id="page" class="top-store-site">
	<header>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'top-store-pro' ); ?></a>
		<?php do_action( 'top_store_pro_sticky_header' ); ?> 
        <!-- sticky header -->
		<?php if(get_theme_mod('top_store_above_mobile_disable')==true){
			if (strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== true 
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== true 
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== true):
             do_action( 'top_store_pro_top_header' );  
            endif;
		}elseif(get_theme_mod('top_store_above_mobile_disable',false)==false){
			 do_action( 'top_store_pro_top_header' );  
		} ?> 
		<!-- end top-header -->
        <?php do_action( 'top_store_pro_main_header' ); ?> 
		<!-- end main-header -->
		<?php if ( class_exists( 'WooCommerce' ) ){ do_action( 'top_store_pro_below_header' );} ?> 
		<!-- end below-header -->
	</header> <!-- end header -->