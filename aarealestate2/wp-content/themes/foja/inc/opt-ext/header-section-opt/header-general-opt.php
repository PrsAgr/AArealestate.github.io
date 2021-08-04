<?php

function foja_header_general_ext_opt() {

	$foja_header_general_opt = array(

		/* logo dimensions tab */
		array(
			'id'       => 'header_general_opt_select',
			'type'     => 'button_set',
			'options'  => array(
				'header-logo'     => esc_html__( 'Header Logo', 'foja' ),
				'header-dimension'   => esc_html__( 'Header Dimensions', 'foja' ),
				'header-background'   => esc_html__( 'Header Background', 'foja' ),
			),
			'default'  => 'header-logo'
		),
		/* end of header_general_opt_select */

		array(
			'id' 		=> 'logo_upload',
			'type' 		=> 'media',
			'url' 		=> true,
			'compiler' 	=> 'true',
			'title'    	=> esc_html__( 'Header Logo', 'foja' ),
			'default'  	=> array(
				'url'	=>''
			),
			'required' 	=> array( 'header_general_opt_select', '=', 'header-logo' ),
		),
		array(
			'id'       => 'logo_padding',
			'type'     => 'spacing',
			'mode'     => 'padding',
			'all'      => false,
			'right'    => false,
			'left'     => false, 
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => esc_html__( 'Padding Logo', 'foja' ),
			'subtitle' => esc_html__( 'A gap space for your logo image and title.', 'foja' ),
			'default'  => array(
				'padding-top'    => '5px',
				'padding-bottom' => '0',
			),
			'required' 	=> array( 'header_general_opt_select', '=', 'header-logo' ),
		),

		/* header dimensions */
		array(
			'id'       => 'header_2_width',
			'type'     => 'dimensions',
			'units'    => array('px'),
			'title'    => esc_html__('Header Two Menus Width.', 'foja'),
			'subtitle' => esc_html__('Define width for header with two menus (px)', 'foja'),
			'height'   => false,
			'default'  => array(
				'Width'   => '145', 
				'Height'  => false
			),
			'required' => array(
				array( 'header_general_opt_select', '=', 'header-dimension' ),
			),
		),

	);

return $foja_header_general_opt;
}