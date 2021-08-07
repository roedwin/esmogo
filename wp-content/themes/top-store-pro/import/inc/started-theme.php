<?php
define('TOPSTORE_STARTED_MENU',esc_html__('Started with '.THEMEHUNK_THEME_NAME, 'topstore'));
define('TOPSTORE_STARTED_DOCS',esc_url('//www.themehunk.com/docs/topstore-pro'));
class topstore_theme_option{
  function __construct(){
      add_action( 'admin_enqueue_scripts', array($this,'admin_scripts'));
      add_action('admin_menu', array($this,'menu_tab'));
    }

  function menu_tab() {
       add_theme_page( THEMEHUNK_THEME_NAME, TOPSTORE_STARTED_MENU, 'edit_theme_options', 'thunk_started',array($this,'tab_page'));
    }
        /**
         * Enqueue scripts for admin page only: Theme info page
         */
  function admin_scripts( $hook ) {
      if ($hook === 'appearance_page_thunk_started'  ) {
          wp_enqueue_style( 'thunk-started-css', get_template_directory_uri() . '/import/assets/css/started.css' );
      }
  }

      function tab_constant(){
        $theme_data = wp_get_theme();

        $tab_array = array();
        $tab_array['header'] = array('theme_brand' => __('ThemeHunk','topstore'),
                            'theme_brand_url' => esc_url($theme_data->get( 'AuthorURI' )),
                            'welcome'=>sprintf(esc_html__('Welcome to '.THEMEHUNK_THEME_NAME.' Pro - Version %1s', 'topstore'), $theme_data->get( 'Version' ) ),
                            'welcome_desc' => esc_html__($theme_data->get( 'Name' ).' is beautiful one page shopping Woocommerce theme. This theme carries multiple powerful features which will help you in creating an amazing shopping site.You can design any type of shopping site and generate more profit.', 'topstore' )
                            );

          $tab_array['tab'] = array(
                'plugin_title' => esc_html__( 'Setup Home Page', 'topstore' ),
                'plugin_link' => '?page=thunk_started&tab=actions_required',
                'plugin_text' => sprintf(esc_html__('First Add your Homepage, Pages > Add Page and from Page Attributes > Select Homepage Template. Go to the Customize > Homepage Settings and under "Your homepage display" select "A Static page > Your Homepage" . Publish it.', 'topstore'), $theme_data->get( 'Name' )),
                'plugin_button' => esc_html__('Go To Recommended Action', 'topstore'),
                'docs_title' => esc_html__( 'Import Demo Content', 'topstore' ),            
                'customizer_title' => esc_html__( 'Customize Your Website', 'topstore' ),
                'customizer_text' =>  sprintf(esc_html__('%s theme support live customizer for home page set up. Everything visible at home page can be changed through customize panel', 'topstore'), $theme_data->Name),
                'customizer_button' => sprintf( esc_html__('Start Customize', 'topstore')),

                'support_title' => esc_html__( 'Theme Support', 'topstore' ),
                'support_link' => esc_url('//www.themehunk.com/support/'),
                'support_forum' => sprintf(esc_html__('Support Forum', 'topstore'), $theme_data->get( 'Name' )),
                'doc_link' => TOPSTORE_STARTED_DOCS,
                'doc_link_text' => sprintf(esc_html__('Theme Documentation', 'topstore'), $theme_data->get( 'Name' )),

                'support_text' => sprintf(esc_html__('If you need any help you can contact to our support team, our team is always ready to help you.', 'topstore'), $theme_data->get( 'Name' )),
              );
          return $tab_array;
      }

    function tab_page() {
        $text_array = $this->tab_constant();
        $theme_header =$text_array['header']; 
        $theme_config =$text_array['tab']; 
    ?>
      <div class="wrap about-wrap theme_info_wrapper">
            <div class="header">
            <h1><?php  echo $theme_header['welcome']; ?></h1>
            <div class="about-text"><?php echo $theme_header['welcome_desc']; ?></div>
            <a target="_blank" href="<?php echo $theme_header['theme_brand_url']; ?>/?wp=topstore" class="themehunkhemes-badge wp-badge"><span><?php echo $theme_header['theme_brand']; ?></span></a>
        </div>

                <div class="theme_info info-tab-content">
                    <div class="theme_info_column clearfix">
                        <div class="theme_info_left">
                        <div class="theme_link">
                                <h3><?php echo $theme_config['plugin_title']; ?></h3>
                                <p class="about"><?php echo $theme_config['plugin_text']; ?></p>
                                
                            </div>
                            <div class="theme_link">
                                <h3><?php echo $theme_config['docs_title']; ?></h3>
                                   <?php
                         // Import template
                            $class       = 'button';
                            $button_text = __( 'Import Demo Template', 'topstore' );
                            $data_slug   = 'one-click-demo-import';
                            $data_init   = '?page=themehunk-site-library';
                            printf(
                              '<a class="ztabtn %1$s" %2$s %3$s> %4$s </a>',
                              esc_attr( $class ),
                              isset( $data_init ) ? 'href="' . esc_url( $data_init ) . '"' : '',
                              isset( $data_slug ) ? 'data-slug="' . esc_attr( $data_slug ) . '"' : '',
                              esc_html( $button_text )
                            );
                ?>
                                </p>
                            </div>
                        <div class="theme_link">
                                <h3><?php echo $theme_config['customizer_title']; ?></h3>
                                <p class="about"><?php  echo $theme_config['customizer_text']; ?></p>
                                <p>
                                    <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php echo $theme_config['customizer_button']; ?></a>
                                </p>
                            </div>
                            <div class="theme_link">
                                <h3><?php echo $theme_config['support_title']; ?></h3>

                                <p class="about"><?php  echo $theme_config['support_text']; ?></p>
                                <p>
                <a target="_blank" href="<?php echo $theme_config['support_link']; ?>"><?php echo $theme_config['support_forum']; ?></a>
                </p>
                <p><a target="_blank" href="<?php echo $theme_config['doc_link']; ?>"><?php  echo $theme_config['doc_link_text']; ?></a></p>

                            </div>
                        </div>
                    </div>
                </div>
        </div> <!-- END .theme_info -->
        <?php
    }

}
$boj = new topstore_theme_option();

