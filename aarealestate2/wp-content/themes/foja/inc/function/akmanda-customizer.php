<?php 

	/*
	*
	*	Theme Customizer Options
	*	------------------------------------------------
	*	Themes Awesome Framework
	* 	Copyright Themes Awesome 2017 - http://www.themesawesome.com
	*
	*	foja_customize_register()
	*	foja_customize_preview()
	*
	*/
	
	if (!function_exists('foja_customize_register')) {
		function foja_customize_register($wp_customize) {
		
			$wp_customize->get_setting('blogname')->transport='postMessage';
			$wp_customize->get_setting('blogdescription')->transport='postMessage';
			$wp_customize->get_setting('header_textcolor')->transport='postMessage';

			$wp_customize->get_control( 'custom_logo' )->section = 'foja_general_options';

			// General Controls
			require_once get_template_directory() . '/inc/panels/general-options.php';
			
			// Color Controls
			require_once get_template_directory() . '/inc/panels/color-options.php';		

		}
		add_action( 'customize_register', 'foja_customize_register' );

	}
	
/**
 *  Sanitize HTML
 */
if ( ! function_exists( 'foja_sanitize_html' ) ) {
	function foja_sanitize_html( $input ) {
		$input = wp_specialchars_decode( $input );

		$allowed_html = array(
			'a'      => array(
				'href'  => array(),
				'title' => array(),
			),
			'br'     => array(),
			'em'     => array(),
			'img'    => array(
				'alt'    => array(),
				'src'    => array(),
				'srcset' => array(),
				'title'  => array(),
			),
			'strong' => array(),
		);
		$output       = wp_kses( $input, $allowed_html );

		return $output;
	}
}

if ( ! function_exists( 'foja_sanitize_select' ) ) {
	function foja_sanitize_select( $input ) {
		if ( is_numeric( $input ) ) {
			return intval( $input );
		}
	}
}

if ( ! function_exists( 'foja_sanitize_float' ) ) {
	function foja_sanitize_float( $input ) {
	    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	}
}