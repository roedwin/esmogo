<?php
/**
* Template Name: Faq Page
*/
get_header();
$top_store_pages_sidebar = top_store_pages_sidebar(); 
?>
<div id="content" class="page-content thunk-page thunk-faq-body-wrap ">
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
                             <div class="accordion-wrapper">
										<div class="thunk-accordion" id="accordion">
											<div class="accordion-container">
						<?php   
					    $default=    top_store_Defaults_Models::instance()->get_faq_default();
					   top_store_faq_content('top_store_faq_content', $default);
					  ?>						
								</div> <!-- accordion-container End -->

										</div> <!-- thunk-accordion End -->

									</div> <!-- accordion-wrapper End -->	
                            
                         </div>
                      </div> <!-- end primary-content-wrap-->
        				</div> <!-- end primary primary-content-area-->
        				<?php if($top_store_pages_sidebar !=='no-sidebar' && $top_store_pages_sidebar !=='disable-right-sidebar'){ get_sidebar('secondary');}?>
        			</div> <!-- end main-area -->
        		</div>
        	</div> <!-- end content-wrap -->
        </div> <!-- end content page-content -->
<?php get_footer();?>