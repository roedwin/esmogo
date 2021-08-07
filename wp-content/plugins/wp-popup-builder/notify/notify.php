<?php
// Exit if accessed directly.
if (!defined('ABSPATH')){
    exit;
}

if ( ! class_exists( 'ThemeHunk_Notify' ) ){

class ThemeHunk_Notify{

    function __construct(){

		if(isset($_GET['notice-disable']) && $_GET['notice-disable'] == true){
		add_action('admin_init', array($this,'set_cookie'));
		}


		if(!isset($_COOKIE['thc_time'])) {
			 add_action( 'admin_notices', array($this,'notify'));
    	    add_action( 'admin_enqueue_scripts', array($this,'enqueue') );

		}

		if(isset($_COOKIE['thc_time'])) {
			add_action( 'admin_notices', array($this,'unset_cookie'));
		}

	}

	function enqueue(){
		wp_enqueue_style( 'owl.carousel', WPPB_URL.'notify/assets/css/owl.carousel.css', array(), '1.0.0' );
		wp_enqueue_style( 'hunk-companion-notice', WPPB_URL.'notify/assets/css/notice.css', array(), '1.0.0' );


		wp_enqueue_script( 'owl.carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js', array( 'jquery' ), '',false );
		wp_enqueue_script( 'hunk-companion-notify', WPPB_URL.'notify/assets/js/themehunk-notify.js', array( 'jquery' ), '',false );



	}




	function set_cookie() { 
 
		$visit_time = date('F j, Y  g:i a');

			$cok_time = time()+(86457*30);
 
		if(!isset($_COOKIE['thc_time'])) {
 
			// set a cookie for 1 year
		setcookie('thc_time', $cok_time, time()+(86457*30));
			 
		}
 
	}

		function unset_cookie(){

			$visit_time = time();
  			$cookie_time = $_COOKIE['thc_time'];

			if ($cookie_time < $visit_time) {
				setcookie('thc_time', null, strtotime('-1 day'));
			}
	}

	function notify(){
		  $my_theme = wp_get_theme();
		  $theme =  esc_html( $my_theme->get( 'TextDomain' ) );
		$display = isset($_GET['notice-disable'])?'none':'block';

         require_once WPPB_PATH . 'notify/notify-html.php'; 


 } 


}

$obj = New ThemeHunk_Notify();

 } // if class end ?>
