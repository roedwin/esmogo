<?php
/**
 * Helper class for font settings.
 *
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Font info class for System and Google fonts.
 */
if ( ! class_exists( 'Top_Store_Font_Families' ) ) :

	/**
	 * Font info class for System and Google fonts.
	 */
	final class Top_Store_Font_Families {

		/**
		 * System Fonts
		 *
		 * @since 1.0.19
		 * @var array
		 */
		public static $system_fonts = array();

		/**
		 * Google Fonts
		 *
		 * @since 1.0.19
		 * @var array
		 */
		public static $google_fonts = array();

		/**
		 * Get System Fonts
		 *
		 * @since 1.0.19
		 *
		
		 */
		public static function get_system_fonts() {
			if ( empty( self::$system_fonts ) ) {
				self::$system_fonts = array(
					'Helvetica' => array(
						'fallback' => 'Verdana, Arial, sans-serif',
						'weights'  => array(
							'300',
							'400',
							'700',
						),
					),
					'Verdana'   => array(
						'fallback' => 'Helvetica, Arial, sans-serif',
						'weights'  => array(
							'300',
							'400',
							'700',
						),
					),
					'Arial'     => array(
						'fallback' => 'Helvetica, Verdana, sans-serif',
						'weights'  => array(
							'300',
							'400',
							'700',
						),
					),
					'Times'     => array(
						'fallback' => 'Georgia, serif',
						'weights'  => array(
							'300',
							'400',
							'700',
						),
					),
					'Georgia'   => array(
						'fallback' => 'Times, serif',
						'weights'  => array(
							'300',
							'400',
							'700',
						),
					),
					'Courier'   => array(
						'fallback' => 'monospace',
						'weights'  => array(
							'300',
							'400',
							'700',
						),
					),
				);
			}

			return apply_filters( 'top_store_system_fonts', self::$system_fonts );
		}

		/**
		 * Custom Fonts
		 *
		 * @since 1.0.19
		 *

		 */
		public static function get_custom_fonts() {
			$custom_fonts = array();

			return apply_filters( 'top_store_custom_fonts', $custom_fonts );
		}

		/**
		 * Google Fonts used in top-store.
		 * Array is generated from the google-fonts.json file.
		 *
		 * @since  1.0.19
		 *
		 * @return Array Array of Google Fonts.
		 */
		public static function get_google_fonts() {

			if ( empty( self::$google_fonts ) ) {

				$google_fonts_file = apply_filters( 'top_store_google_fonts_json_file', TOP_STORE_THEME_DIR . 'third-party/fonts/google-fonts.json' );

				if ( ! file_exists( TOP_STORE_THEME_DIR . 'third-party/fonts/google-fonts.json' ) ) {
					return array();
				}

				 $file_contants     = top_store_filesystem()->get_contents( $google_fonts_file );
				 $google_fonts_json = json_decode( $file_contants, 1 );

				foreach ( $google_fonts_json as $key => $font ) {
					$name = key( $font );
					foreach ( $font[ $name ] as $font_key => $single_font ) {

						if ( 'variants' === $font_key ) {

							foreach ( $single_font as $variant_key => $variant ) {

								if ( 'regular' == $variant ) {
									$font[ $name ][ $font_key ][ $variant_key ] = '400';
								}
							}
						}

						self::$google_fonts[ $name ] = array_values( $font[ $name ] );
					}
				}
			}

			return apply_filters( 'top_store_google_fonts', self::$google_fonts );
		}

	}

endif;

/**
 * Helper class for font settings.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Font info class for System and Google fonts.
 */
if ( ! class_exists( 'Top_Store_Fonts_Data' ) ) :

	/**
	 * Fonts Data
	 */
	final class Top_Store_Fonts_Data {

		/**
		 * Localize Fonts
		 */
		static public function js() {

			$system = json_encode( Top_Store_Font_Families::get_system_fonts() );
			$google = json_encode( Top_Store_Font_Families::get_google_fonts() );
			$custom = json_encode( Top_Store_Font_Families::get_custom_fonts() );
			if ( ! empty( $custom ) ) {
				return 'var TopstrFontFamilies = { system: ' . $system . ', custom: ' . $custom . ', google: ' . $google . ' };';
			} else {
				return 'var TopstrFontFamilies = { system: ' . $system . ', google: ' . $google . ' };';
			}
		}
	}

endif;
if ( ! function_exists( 'top_store_get_prop' ) ) :

	/**
	 * Get a specific property of an array without needing to check if that property exists.
	 *
	 * Provide a default value if you want to return a specific value if the property is not set.
	 *
	 * @since  1.2.7
	 * @access public
	 * @author Gravity Forms - Easiest Tool to Create Advanced Forms for Your WordPress-Powered Website.
	 * @link  https://www.gravityforms.com/
	 *
	 * @param array  $array   Array from which the property's value should be retrieved.
	 * @param string $prop    Name of the property to be retrieved.
	 * @param string $default Optional. Value that should be returned if the property is not set or empty. Defaults to null.
	 *
	 * @return null|string|mixed The value
	 */
	function top_store_get_prop( $array, $prop, $default = null ) {

		if ( ! is_array( $array ) && ! ( is_object( $array ) && $array instanceof ArrayAccess ) ) {
			return $default;
		}

		if ( isset( $array[ $prop ] ) ) {
			$value = $array[ $prop ];
		} else {
			$value = '';
		}

		return empty( $value ) && null !== $default ? $default : $value;
	}

endif;

/**
 * Return Theme options.
 */
if ( ! function_exists( 'top_store_get_option' ) ) {

	/**
	 * Return Theme options.
	 *
	 * @param  string $option       Option key.
	 * @param  string $default      Option default value.
	 * @param  string $deprecated   Option default value.
	 * @return Mixed               Return option value.
	 */
	function top_store_get_option( $option, $default = '', $deprecated = '' ) {

		if ( '' != $deprecated ) {
			$default = $deprecated;
		}

		$theme_options = Top_Store_Theme_Options::get_options();

		/**
		
		 *
		 * @since  1.0.20
		 * @var Array
		 */
		$theme_options = apply_filters( 'top_store_get_option_array', $theme_options, $option, $default );

		$value = ( isset( $theme_options[ $option ] ) && '' !== $theme_options[ $option ] ) ? $theme_options[ $option ] : $default;

		/**
		 * Dynamic filter top_store_get_option_$option.
		
		 *
		 * @since  1.0.20
		 * @var Mixed.
		 */
		return apply_filters( "top_store_get_option_{$option}", $value, $option, $default );
	}
}

/**
 *  Fonts
 */
final class Top_Store_Fonts {

	/**
	 * Get fonts to generate.
	 *
	 * @since 1.0.0
	 * @var array $fonts
	 */
	static private $fonts = array();

	/**
	 * Adds data to the $fonts array for a font to be rendered.
	 *
	 * @since 1.0.0
	 * @param string $name The name key of the font to add.
	 * @param array  $variants An array of weight variants.
	 * @return void
	 */
	static public function add_font( $name, $variants = array() ) {

		if ( 'inherit' == $name ) {
			return;
		}
		if ( ! is_array( $variants ) ) {
			// For multiple variant selectons for fonts.
			$variants = explode( ',', str_replace( 'italic', 'i', $variants ) );
		}

		if ( is_array( $variants ) ) {
			$key = array_search( 'inherit', $variants );
			if ( false !== $key ) {

				unset( $variants[ $key ] );

				if ( ! in_array( 400, $variants ) ) {
					$variants[] = 400;
				}
			}
		} elseif ( 'inherit' == $variants ) {
			$variants = 400;
		}

		if ( isset( self::$fonts[ $name ] ) ) {
			foreach ( (array) $variants as $variant ) {
				if ( ! in_array( $variant, self::$fonts[ $name ]['variants'] ) ) {
					self::$fonts[ $name ]['variants'][] = $variant;
				}
			}
		} else {
			self::$fonts[ $name ] = array(
				'variants' => (array) $variants,
			);
		}
	}

	/**
	 * Get Fonts
	 */
	static public function get_fonts() {
		do_action( 'top_store_get_fonts' );
		return apply_filters( 'top_store_add_fonts', self::$fonts );
	}

	/**
	 * Renders the <link> tag for all fonts in the $fonts array.
	 *
	 * @since 1.0.16 Added the filter 'top_store_render_fonts' to support custom fonts.
	 * @since 1.0.0
	 * @return void
	 */
	static public function render_fonts() {

		$font_list = apply_filters( 'top_store_render_fonts', self::get_fonts() );

		$google_fonts = array();
		$font_subset  = array();

		$system_fonts = Top_Store_Font_Families::get_system_fonts();

		foreach ( $font_list as $name => $font ) {
			if ( ! empty( $name ) && ! isset( $system_fonts[ $name ] ) ) {

				// Add font variants.
				$google_fonts[ $name ] = $font['variants'];

				// Add Subset.
				$subset = apply_filters( 'top_store_font_subset', '', $name );
				if ( ! empty( $subset ) ) {
					$font_subset[] = $subset;
				}
			}
		}

		$google_font_url = self::top_store_google_fonts_url( $google_fonts, $font_subset );
		wp_enqueue_style( 'top-store-google-fonts', $google_font_url, array(), TOP_STORE_THEME_VERSION, 'all' );
	}

	/**
	 * Google Font URL
	 * Combine multiple google font in one URL
	 *
	 * @link https://shellcreeper.com/?p=1476
	 * @param array $fonts      Google Fonts array.
	 * @param array $subsets    Font's Subsets array.
	 *
	 * @return string
	 */
	static public function top_store_google_fonts_url( $fonts, $subsets = array() ) {

		/* URL */
		$base_url  = '//fonts.googleapis.com/css';
		$font_args = array();
		$family    = array();

		// This is deprecated filter hook.
		$fonts = apply_filters( 'top_store_google_fonts', $fonts );

		$fonts = apply_filters( 'top_store_google_fonts_selected', $fonts );

		/* Format Each Font Family in Array */
		foreach ( $fonts as $font_name => $font_weight ) {
			$font_name = str_replace( ' ', '+', $font_name );
			if ( ! empty( $font_weight ) ) {
				if ( is_array( $font_weight ) ) {
					$font_weight = implode( ',', $font_weight );
				}
				$font_family = explode( ',', $font_name );
				$font_family = str_replace( "'", '', top_store_get_prop( $font_family, 0 ) );
				$family[]    = trim( $font_family . ':' . urlencode( trim( $font_weight ) ) );
			} else {
				$family[] = trim( $font_name );
			}
		}

		/* Only return URL if font family defined. */
		if ( ! empty( $family ) ) {

			/* Make Font Family a String */
			$family = implode( '|', $family );

			/* Add font family in args */
			$font_args['family'] = $family;

			/* Add font subsets in args */
			if ( ! empty( $subsets ) ) {

				/* format subsets to string */
				if ( is_array( $subsets ) ) {
					$subsets = implode( ',', $subsets );
				}

				$font_args['subset'] = urlencode( trim( $subsets ) );
			}

			$font_args['display'] = top_store_get_fonts_display_property();

			return add_query_arg( $font_args, $base_url );
		}

		return '';
	}
}
/**
 * Get the value for font-display property.
 *
 * @since 1.8.6
 * @return string
 */
function top_store_get_fonts_display_property() {
	return apply_filters( 'Top_Store_Fonts_display_property', 'fallback' );
}

function top_store_print_footer_scripts() {
			$output  = '<script type="text/javascript">';
			$output .= '
	        	wp.customize.bind(\'ready\', function() {
	            	wp.customize.control.each(function(ctrl, i) {
	                	var desc = ctrl.container.find(".customize-control-description");
	                	if( desc.length) {
	                    	var title 		= ctrl.container.find(".customize-control-title");
	                    	var li_wrapper 	= desc.closest("li");
	                    	var tooltip = desc.text().replace(/[\u00A0-\u9999<>\&]/gim, function(i) {
	                    			return \'&#\'+i.charCodeAt(0)+\';\';
								});
	                    	desc.remove();
	                    	li_wrapper.append(" <i class=\'ast-control-tooltip dashicons dashicons-editor-help\'title=\'" + tooltip +"\'></i>");
	                	}
	            	});
	        	});';

			$output .= Top_Store_Fonts_Data::js();
			$output .= '</script>';

			echo $output;
		}
add_action( 'customize_controls_print_footer_scripts', 'top_store_print_footer_scripts' );

        
         /**
		 * Customizer Controls
		 *
		 * @since 1.0.0
		 * @return void
		 */
		function controls_scripts() {

			$js_prefix  = '.min.js';
			$css_prefix = '.min.css';
			$dir        = 'minified';
			if ( SCRIPT_DEBUG ) {
				$js_prefix  = '.js';
				$css_prefix = '.css';
				$dir        = 'unminified';
			}

			if ( is_rtl() ) {
				$css_prefix = '.min-rtl.css';
				if ( SCRIPT_DEBUG ) {
					$css_prefix = '-rtl.css';
				}
			}
			$google_fonts = Top_Store_Font_Families::get_google_fonts();
			$string       = generate_font_dropdown();
            $tmpl = '<div class="topstr-field-settings-modal">
					<ul class="topstr-fields-wrap">
					</ul>
			</div>';

			wp_localize_script(
				'top-store-typography',
				'topstore',
				apply_filters(
					'top_store_theme_customizer_js_localize',
					array(
						'customizer' => array(
							'settings'  => array(
								

								'google_fonts' => $string,
							),
							'group_modal_tmpl' => $tmpl,
						),
							'theme'      => array(
							'option' => TOP_STORE_THEME_SETTINGS,
						),
					)
				)
			);
		}
		add_action( 'customize_controls_enqueue_scripts', 'controls_scripts' );

		/**
		 * Generates HTML for font dropdown.
		 *
		 * @return string
		 */
		function generate_font_dropdown() {

			ob_start();

			?>

			<option value="inherit"><?php _e( 'Default System Font', 'top-store-pro' ); ?></option>
			<optgroup label="Other System Fonts">

			<?php

			$system_fonts = Top_Store_Font_Families::get_system_fonts();
			$google_fonts = Top_Store_Font_Families::get_google_fonts();

			foreach ( $system_fonts as $name => $variants ) {
				?>

				<option value="<?php echo esc_attr( $name ); ?>" ><?php echo esc_html( $name ); ?></option>
				<?php
			}

			// Add Custom Font List Into Customizer.
			do_action( 'top_store_customizer_font_list', '' );

			?>
			<optgroup label="Google">

			<?php
			foreach ( $google_fonts as $name => $single_font ) {
				$variants = top_store_get_prop( $single_font, '0' );
				$category = top_store_get_prop( $single_font, '1' );

				?>
				<option value="<?php echo "'" . esc_attr( $name ) . "', " . esc_attr( $category ); ?>"><?php echo esc_html( $name ); ?></option>

				<?php
			}

			return ob_get_clean();
		}