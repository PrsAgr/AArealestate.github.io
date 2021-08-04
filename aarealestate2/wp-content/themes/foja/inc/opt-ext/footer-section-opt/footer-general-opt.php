<?php

function foja_footer_general_ext_opt() {

	$foja_footer_general_opt = array(

		/* 3.1. Footer Style Type */
		array(
			'id'       => 'footer_style_type',
			'type'     => 'select',
			'title'    => esc_html__('Footer Style Type', 'foja'),
			'options'  => array(
				'bottom-footer'		=> esc_html__('Always on Bottom of desktop.', 'foja'),
				'fixed-footer'		=> esc_html__('Fixed Footer.', 'foja'),
			),
			'default'  => 'bottom-footer'
		),
		/* end of footer style type*/

		/* 3.2. Footer Type */
		array(
			'id'       => 'footer_type',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Footer Type', 'foja' ),
			'subtitle' => esc_html__( 'Select Your Footer Type', 'foja' ),
			'options' => array(
				'no-footer' => array('alt' => 'no-footer', 'img' => get_template_directory_uri() .'/img/footer-no.png'),
				'default' => array('alt' => 'default', 'img' => get_template_directory_uri() .'/img/footer-1.png'),
			),
			'default'  => 'default'
		),
		
		array(
			'id'       => 'footer_general_opt_select',
			'type'     => 'button_set',
			'options'  => array(
				'footer-dimensions'		=> esc_html__('Footer Dimensions', 'foja'),
				'footer-background' 	=> esc_html__('Footer Background', 'foja'),
				'footer-features'		=> esc_html__('Footer Features', 'foja'),
			),
			'default'  => 'footer-dimensions'
		),

		/* 3.3. Footer Container */
		/* end of footer container */

		/* 3.4. Footer Padding */
		array(
			'id'       => 'footer_padding',
			'type'     => 'spacing',
			'mode'     => 'padding',
			'all'      => false,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => esc_html__( 'Padding Footer', 'foja' ),
			'subtitle' => esc_html__( 'Allow your users to choose the spacing or padding they want.', 'foja' ),
			'desc'     => esc_html__( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'foja' ),
			'default'  => array(
				'padding-top'    => '40px',
				'padding-right'  => '0',
				'padding-bottom' => '40px',
				'padding-left'   => '0'
			),
			'required' => array( 
				array( 'footer_type', '=', array('default')),
				array( 'footer_general_opt_select', '=', 'footer-dimensions' ),
			),
		),

		/* footer fatures */
		array(
			'id' => 'foot_logo',
			'type' => 'media',
			'url' => true,
			'compiler' => 'true',
			'title' => esc_html__('Footer Logo', 'foja'), 
			'desc' => esc_html__('Upload your logo image here (any size).', 'foja'),
			'required' => array( 
				array( 'footer_type', '=', array('default')),
				array( 'footer_general_opt_select', '=', 'footer-features' ),
			),
		),

		array(
			'id' => 'foot_address',
			'type' => 'textarea',
			'title' => esc_html__('Footer Address', 'foja'), 
			'required' => array( 
				array( 'footer_type', '=', array('default')),
				array( 'footer_general_opt_select', '=', 'footer-features' ),
			),
		),

		array(
			'id'=>'footer-text',
			'type' => 'editor',
			'title' => esc_html__('Footer Copyright', 'foja'), 
			'subtitle' => esc_html__('Add Your Copyright Here', 'foja'),
			'default' => esc_html__('Built by Themes Awesome', 'foja'),
			'required' => array(
				array( 'footer_type', '=', array('default') ),
				array( 'footer_general_opt_select', '=', 'footer-features' ),
			),
		),
		
		/* 3.5. Boxed Footer */
		array(
			'id' => 'footer_background',
			'type' => 'background',
			'title' => esc_html__('Footer Custom Background', 'foja'),
			'subtitle' => esc_html__('Footer background with image, color, etc.', 'foja'),
			'default' => array(
				'background-color'  => '#ffffff',
				'background-repeat'  => 'no-repeat',
				'background-size'  => 'inherit',
				'background-attachment'  => 'inherit',
				'background-position'  => 'center center',
			),
			'required' => array(
				array( 'footer_general_opt_select', '=', 'footer-background' ),
			),
		),
		array(
			'id'       => 'footer_boxed',
			'type'     => 'switch',
			'title'    => esc_html__( 'Use Boxed Footer', 'foja' ),
			'subtitle' => esc_html__( 'Make your footer boxed', 'foja' ),
			'default'  => false,
			'required' => array(
				array( 'footer_type', '=', array('default')),
			),
		),
		array(
			'id'       => 'footer_boxed_width',
			'type'     => 'dimensions',
			'units'    => array('px', '%'),
			'title'    => esc_html__('Content Boxed Width.', 'foja'),
			'subtitle' => esc_html__('Define width for footer box.', 'foja'),
			'output'   => array('#footer'),
			'height'   => false,
			'default'  => array(
				'Width'   => '1170', 
				'Height'  => false
			),
			'required' => array(
				array('footer_boxed','=', true),
			),
		),
		array(
			'id'       => 'footer_margin',
			'type'     => 'spacing',
			'output'   => array( '#footer' ),
			'mode'     => 'margin',
			'all'      => false,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => esc_html__( 'Margin Boxed Footer', 'foja' ),
			'subtitle' => esc_html__( 'Allow your users to choose the spacing or margin they want.', 'foja' ),
			'desc'     => esc_html__( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'foja' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-right'  => 'auto',
				'margin-bottom' => '0',
				'margin-left'   => 'auto'
			),
			'required' => array(
				array('footer_boxed','=', true),
			),
		),
		

	);

return $foja_footer_general_opt;
}