<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package  Top Store
 * @since 1.0.0
 */ 
?>
<footer>
         <?php 
          // top-footer 
          do_action( 'top_store_pro_top_footer' ); 
          // widget-footer
		      do_action( 'top_store_pro_widget_footer' );
		      // below-footer
          do_action( 'top_store_pro_below_footer' );  
        ?>
     </footer> <!-- end footer -->
    </div> <!-- end top-store-site -->
<?php wp_footer(); ?>
</body>
</html>