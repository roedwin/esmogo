<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
/**
 * This file stores all functions that return default content.
 *
 * @package  Top Store
 */
/**
 * Class top_store_Defaults_Models
 *
 * @package  Top Store
 */
class top_store_Defaults_Models extends top_store_Singleton{
/**
	 * Get default values for features section.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	/**
	 * Get default values for Brands section.

	 * @access public
	 */
public function get_brand_default() {
		return apply_filters(
			'top_store_brand_default_content', json_encode(
				array(
					array(
						'image_url' => TOP_STORE_THEME_URI . 'image/logo.png',
						'link'       => '#',
					),
					array(
						'image_url' => TOP_STORE_THEME_URI . 'image/logo.png',
						'link'       => '#',
					),
					array(
						'image_url' => TOP_STORE_THEME_URI . 'image/logo.png',
						'link'       => '#',
					),
					array(
						'image_url' => TOP_STORE_THEME_URI . 'image/logo.png',
						'link'       => '#',
					),
					array(
						'image_url' => TOP_STORE_THEME_URI . 'image/logo.png',
						'link'       => '#',
					),
					array(
						'image_url' => TOP_STORE_THEME_URI . 'image/logo.png',
						'link'       => '#',
					),
				)
			)
		);
	}


	/**
	 * Get default values for features section.

	 * @access public
	 */
	public function get_feature_default() {
		return apply_filters(
			'top_store_highlight_default_content', json_encode(
				array(
					array(
						'icon_value' => 'fa-cog',
						'title'      => esc_html__( 'Free Shiping', 'top-store-pro' ),
						'subtitle'   => esc_html__( 'On all order over ', 'top-store-pro' ),
						
					),
					array(
						'icon_value' => 'fa-cog',
						'title'      => esc_html__( 'Free Shiping', 'top-store-pro' ),
						'subtitle'   => esc_html__( 'On all order over ', 'top-store-pro' ),
						
					),
					array(
						'icon_value' => 'fa-cog',
						'title'      => esc_html__( 'Free Shiping', 'top-store-pro' ),
						'subtitle'   => esc_html__( 'On all order over ', 'top-store-pro' ),
						
					),
					array(
						'icon_value' => 'fa-cog',
						'title'      => esc_html__( 'Free Shiping', 'top-store-pro' ),
						'subtitle'   => esc_html__( 'On all order over ', 'top-store-pro' ),
						
					),
				)
			)
		);
	}	


	public function get_faq_default() {
		return apply_filters(
			'topstore_faq_default_content', json_encode(
				array( 
					array(
						'title'     => esc_html__( 'What do you want to know', 'top-store-pro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'top-store-pro' ),
					),

					array(
						'title'     => esc_html__( 'What do you want to know', 'top-store-pro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'top-store-pro' ),
					),
					
					array(
						'title'     => esc_html__( 'What do you want to know', 'top-store-pro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'top-store-pro' ),
					),

					array(
						'title'     => esc_html__( 'What do you want to know', 'top-store-pro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'top-store-pro' ),
					),

					array(
						'title'     => esc_html__( 'What do you want to know', 'top-store-pro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'top-store-pro' ),
					),

					array(
						'title'     => esc_html__( 'What do you want to know', 'top-store-pro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'top-store-pro' ),
					),

					array(
						'title'     => esc_html__( 'What do you want to know', 'top-store-pro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'top-store-pro' ),
					),

					array(
						'title'     => esc_html__( 'What do you want to know', 'top-store-pro' ),
						
						'text'      => esc_html__( 'Nulla et sodales nisl. Nam auctor quis odio eu congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'top-store-pro' ),
					),

				)
			)
		);	
	}

	/**
	 * Get default values for features section.

	 * @access public
	 */
	public function get_service_default() {
		return apply_filters(
			'top_store_service_default_content', json_encode(
				array(
					array(
						'icon_value' => 'fa-diamond',
						'title'      => esc_html__( 'Development', 'top-store-pro' ),
						'text'       => esc_html__( 'Nam varius mauris eget sodales tempus. Quisque sollicitudin consectetur accumsan. Ut imperdiet mi velit, ut congue justo sagittis eget',
							'top-store-pro' ),
						'link'       => '#',
						'color'      => '#ff214f',
					),
					array(
						'icon_value' => 'fa-heart',
						'title'      => esc_html__( 'Design', 'top-store-pro' ),
						'text'       => esc_html__( 'Nam varius mauris eget sodales tempus. Quisque sollicitudin consectetur accumsan. Ut imperdiet mi velit, ut congue justo sagittis eget',
							'top-store-pro' ),
						'link'       => '#',
						'color'      => '#00bcd4',
					),
					array(
						'icon_value' => 'fa-globe',
						'title'      => esc_html__( 'Seo', 'top-store-pro' ),
						'text'       => esc_html__( 'Nam varius mauris eget sodales tempus. Quisque sollicitudin consectetur accumsan. Ut imperdiet mi velit, ut congue justo sagittis eget',
							'top-store-pro' ),
						'link'       => '#',
						'color'      => '#4caf50',
					),
				)
			)
		);
	}	

	/**
	 * Get default values for Testimonials section.

	 * @access public
	 */
public function get_testimonials_default() {
		return apply_filters(
			'top_store_testimonials_default_content', json_encode(
				array(
					array(
						'image_url' =>	TOP_STORE_THEME_URI . '/image/testimonial1.png',
						'title'     => esc_html__( 'Surbhi', 'top-store-pro' ),
						'subtitle'  => esc_html__( 'Business Owner', 'top-store-pro' ),
						'text'      => esc_html__( '"Nunc eu elementum libero. Etiam egestas leo eget urna ultrices, in finibus eros gravida. Donec scelerisque pulvinar dapibus. Nam pretium risus sed metus ultrices blandit. Pellentesque rhoncus est non nunc ultricies accumsan. Nullam gravida turpis et lacinia cursus. Fusce iaculis mattis consectetur."', 'top-store-pro' ),
						'link'		=>	'#',
						'id'        => 'customizer_repeater_56d7ea7f40d56',
					),
					array(
						'image_url' =>	TOP_STORE_THEME_URI . '/image/testimonial2.png',
						'title'     => esc_html__( 'Nataliya', 'top-store-pro' ),
						'subtitle'  => esc_html__( 'Artist', 'top-store-pro' ),
						'text'      => esc_html__( '"Nunc eu elementum libero. Etiam egestas leo eget urna ultrices, in finibus eros gravida. Donec scelerisque pulvinar dapibus. Nam pretium risus sed metus ultrices blandit. Pellentesque rhoncus est non nunc ultricies accumsan. Nullam gravida turpis et lacinia cursus. Fusce iaculis mattis consectetur."', 'top-store-pro' ),
						'link'		=>	'#',
						'id'        => 'customizer_repeater_56d7ea7f40d66',
					),

					array(
						'image_url' =>	TOP_STORE_THEME_URI . '/image/testimonial1.png',
						'title'     => esc_html__( 'Ramedrin', 'top-store-pro' ),
						'subtitle'  => esc_html__( 'Business Owner', 'top-store-pro' ),
						'text'      => esc_html__( '"Nunc eu elementum libero. Etiam egestas leo eget urna ultrices, in finibus eros gravida. Donec scelerisque pulvinar dapibus. Nam pretium risus sed metus ultrices blandit. Pellentesque rhoncus est non nunc ultricies accumsan. Nullam gravida turpis et lacinia cursus. Fusce iaculis mattis consectetur."', 'top-store-pro' ),
						'link'		=>	'#',
						'id'        => 'customizer_repeater_56d7ea7f40d56',
					),
				)
			)
		);
	}


public function get_team_default() {
		return apply_filters(
			'top_store_team_default_content', json_encode(
				array( 
					array(
						'title'     => esc_html__( 'Gabriel', 'top-store-pro' ),					
						'subtitle'  => esc_html__( 'Developer', 'top-store-pro' ),
						'text'      => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'top-store-pro' ),
						'image_url' => TOP_STORE_THEME_URI . 'image/team2.jpg',
						'link'       => '#',
						'social_repeater' => json_encode(
							array(
									array(
									
									'link' => 'youtube.com',
									'icon' => 'fa-youtube',
									),
									array(
									
									'link' => 'twitter.com',
									'icon' => 'fa-twitter',
									),
								array(
									
									'link' => 'linkedin.com',
									'icon' => 'fa-linkedin',
								),
							)
						),
					),

					array(
						'title'     => esc_html__( 'Maurics', 'top-store-pro' ),					
						'subtitle'  => esc_html__( 'Marketer', 'top-store-pro' ),
						'text'      => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'top-store-pro' ),
						'image_url' => TOP_STORE_THEME_URI . 'image/team2.jpg',
						'link'       => '#',
						'social_repeater' => json_encode(
							array(
									array(
									
									'link' => 'youtube.com',
									'icon' => 'fa-youtube',
									),
									array(
									
									'link' => 'twitter.com',
									'icon' => 'fa-twitter',
									),
								array(
									
									'link' => 'linkedin.com',
									'icon' => 'fa-linkedin',
								),
							)
						),
					),

					array(
						'title'     => esc_html__( 'Ramedrin', 'top-store-pro' ),					
						'subtitle'  => esc_html__( 'Designer', 'top-store-pro' ),
						'text'      => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'top-store-pro' ),
						'image_url' => TOP_STORE_THEME_URI . 'image/team2.jpg',
						'link'       => '#',
						'social_repeater' => json_encode(
							array(
									array(
									
									'link' => 'youtube.com',
									'icon' => 'fa-youtube',
									),
									array(
									
									'link' => 'twitter.com',
									'icon' => 'fa-twitter',
									),
								array(
									
									'link' => 'linkedin.com',
									'icon' => 'fa-linkedin',
								),
							)
						),
					),	
					array(
						'title'     => esc_html__( 'Ramedrin', 'top-store-pro' ),					
						'subtitle'  => esc_html__( 'Designer', 'top-store-pro' ),
						'text'      => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'top-store-pro' ),
						'image_url' => TOP_STORE_THEME_URI . 'image/team2.jpg',
						'link'       => '#',
						'social_repeater' => json_encode(
							array(
									array(
									
									'link' => 'youtube.com',
									'icon' => 'fa-youtube',
									),
									array(
									
									'link' => 'twitter.com',
									'icon' => 'fa-twitter',
									),
								array(
									
									'link' => 'linkedin.com',
									'icon' => 'fa-linkedin',
								),
							)
						),
					),	

				)///	
			)	
		);
	}

	/**
	 * Get default values for Counter section.

	 * @access public
	 */
public function get_counter_default() {
		return apply_filters(
			'top_store_counter_default_content', json_encode(
				array(
					array(
						
						'title'       => 'Tea Consumed',
						'number' => esc_html__( '1008', 'top-store-pro' ),
					),
					array(
						'title'       => 'Projects Completed',
						'number' => esc_html__( '1008', 'top-store-pro' ),
					),
					array(
						'title'       => 'Hours Spent',
						'number' => esc_html__( '1008', 'top-store-pro' ),
					),
					array(
						'title'       => 'Awards Recieved',
						'number' => esc_html__( '1008', 'top-store-pro' ),
					),
				)
			)
		);
	}	
}