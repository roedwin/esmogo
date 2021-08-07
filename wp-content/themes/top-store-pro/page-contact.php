<?php
/**
* Template Name: Contact Page
*/

get_header();
$top_store_pages_sidebar = top_store_pages_sidebar(); 
?>
<div id="content" class="page-content page-contact thunk-page">
        	<div class="content-wrap" >
        		<div class="container">
        			<div class="main-area <?php echo esc_attr($top_store_pages_sidebar);?>">
                <?php if($top_store_pages_sidebar !=='no-sidebar' && $top_store_pages_sidebar !=='disable-left-sidebar'){get_sidebar('primary');}?>
        				<div id="primary" class="primary-content-area">
        					<div class="primary-content-wrap">
                    <div class="page-head">
                   <?php top_store_get_page_title();?>
                   <?php top_store_breadcrumb_trail();?>
                    </div>
                        <div class="thunk-content-wrap">
                        <?php
                            while( have_posts() ) : the_post();
                               get_template_part( 'template-parts/content', 'page' );
                              // If comments are open or we have at least one comment, load up the comment template.
                              if ( comments_open() || get_comments_number() ) :
                                comments_template();
                               endif;
                               endwhile; // End of the loop.
                            ?>

                            <div class="thunk-contactus-wrapper">
                                 <div class="thunk-contactus-detail">
      <div class="thunk-contact-col">
      <p class="thunk-address-info"><i class="fa fa-home"></i>
        <?php 
        if( get_theme_mod( 'top_store_contact_address1') != ""){
    echo esc_html( get_theme_mod( 'top_store_contact_address1'));
        }
        else{
  esc_html_e( '959, Sant  Bhms 066, India' , 'top-store-pro' );   
        }
        ?>
      </p>
    </div>
     <div class="thunk-contact-col">
      <p class="thunk-contact-mobile"><i class="fa fa-phone"></i>
        <?php 
        if( get_theme_mod( 'top_store_contact_address2') != ""){
    echo esc_html( get_theme_mod( 'top_store_contact_address2'));
        }
        else{
  esc_html_e( '212-938-3621, 917-204-2105' , 'top-store-pro' );   
        }
        ?>
      </p>
    </div>
     <div class="thunk-contact-col">
      <p class="thunk-contact-email"><i class="fa fa-envelope"></i>
        <?php 
        if( get_theme_mod( 'top_store_contact_support') != ""){
    echo esc_html( get_theme_mod( 'top_store_contact_support'));
        }
        else{
  esc_html_e( 'support@domain.com' , 'top-store-pro' );   
        }
        ?>
      </p>
    </div>
     <div class="thunk-contact-col">
      <p class="thunk-contact-wh"><i class="fa fa-clock-o"></i>
        <?php 
        if( get_theme_mod( 'top_store_contact_hours') != ""){
    echo esc_html( get_theme_mod( 'top_store_contact_hours'));
        }
        else{
  esc_html_e( 'Everyday 9:00-17:00' , 'top-store-pro' );    
        }
        ?>
      </p>
    </div>
    </div>
    <div class="thunk-contactus" >
      <?php 
          if ( shortcode_exists( 'lead-form' ) ) {
          $contact_shortcode = get_theme_mod('top_store_contact_shortcode','[lead-form form-id=1 title=Contact Us]');
          echo do_shortcode($contact_shortcode); 
        }
        else{   
  echo '<a href="https://wordpress.org/plugins/lead-form-builder/" target="_blank">
  <h2 class="thunk-contact-plugin-notice">Install And Activate Our LeadForm Builder Plugin For The Contact Form</h2></a>';
        }
        ?>  
    </div><!--.......thunk-contactus END........-->
  </div>
  <div class="google-map">

   <?php if(get_theme_mod('top_store_map_addrs')!==''){
   echo html_entity_decode(get_theme_mod('top_store_map_addrs')); 
 }else{?>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.9582524048187!2d-122.42377728432723!3d37.744123621694605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7e42e1b683a9%3A0x225f82d9da5726a2!2s60+29th+St+%23343%2C+San+Francisco%2C+CA+94110%2C+USA!5e0!3m2!1sen!2sin!4v1501570738622" width="600" height="450" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>

  <?php } ?>
  </div>
                         </div>
                      </div> <!-- end primary-content-wrap-->
        				</div> <!-- end primary primary-content-area-->
        				<?php if($top_store_pages_sidebar !=='no-sidebar' && $top_store_pages_sidebar !=='disable-right-sidebar'){ get_sidebar('secondary');}?>
        			</div> <!-- end main-area -->
        		</div>
        	</div> <!-- end content-wrap -->
        </div> <!-- end content page-content -->
<?php get_footer();?>