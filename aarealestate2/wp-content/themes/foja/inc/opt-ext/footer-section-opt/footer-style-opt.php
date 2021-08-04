<?php

function foja_footer_style_ext_opt() {

	$foja_footer_style_opt = array(

		array(
			'id'=>'footer_layout',
			'type' => 'image_select',
			'compiler'=>true,
			'title' => esc_html__('Footer Column Layout', 'foja'), 
			'subtitle' => esc_html__('Select footer between 1, 2, 3 or 4 column layout.', 'foja'),
			'options' => array(
					'1column-footer' => array('alt' => '1column-footer', 'img' => get_template_directory_uri() .'/img/col-opt1.png'),
					'2column-footer' => array('alt' => '2column-footer', 'img' => get_template_directory_uri() .'/img/col-opt2.png'),
					'3column-footer' => array('alt' => '3column-footer', 'img' => get_template_directory_uri() .'/img/col-opt3.png'),
					'4column-footer' => array('alt' => '4column-footer', 'img' => get_template_directory_uri() .'/img/col-opt4.png'),
				),
			'default' => '1column-footer',
			'required' => array( 'footer_type', '=', 'default' ),
		),
		array(
			'id'       => 'footer_col_4',
			'type'     => 'button_set',
			'options'  => array(
				'footer_col_1_sec'     => esc_html__('Footer First Column', 'foja'),
				'footer_col_2_sec'     => esc_html__('Footer Second Column', 'foja'),
				'footer_col_3_sec'     => esc_html__('Footer Third Column', 'foja'),
				'footer_col_4_sec'     => esc_html__('Footer Fourth Column', 'foja'),
			),
			'default'  => 'footer_col_1_sec',
			'required' => array( 'footer_type', '=', 'default' ),
		),

		/* 1st footer column */
		array(
			'id'       => 'foot_style_col1_set',
			'type'     => 'button_set',
			'title'    => esc_html__('Footer Column 1 Setting', 'foja'),
			'options'  => array(
				'footer_col1_content'	=> esc_html__('Column 1 Content', 'foja'),
				'footer_col1_display'	=> esc_html__('Column 1 Display', 'foja'),
				'footer_col1_align'		=> esc_html__('Column 1 Align', 'foja'),
				'footer_col1_margin'	=> esc_html__('Column 1 Margin', 'foja'),
			),
			'default'  => 'footer_col1_content',
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '1column-footer', '2column-footer', '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_1_sec' ),
			),
		),
		array(
			'id'      => 'footer_customize_first',
			'type'    => 'sorter',
			'title'   => esc_html__( 'Footer First Column', 'foja' ),
			'desc'    => esc_html__( 'Organize how you want the layout to appear on the footer first column', 'foja' ),
			'options' => array(
				'enabled'  => array(
					'foja-copyright' => esc_html__('Copyright','foja'),
				),
				'disabled' => array(
					'foja-social'   => esc_html__('Social','foja'),
					'foja-foot-text'   => esc_html__('Text','foja'),
					'foja-foot-logo' => esc_html__('Footer Logo','foja'),
					'foja-foot-menu' => esc_html__('Footer Menu','foja'),
				)
			),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '1column-footer', '2column-footer', '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_1_sec' ),
				array( 'foot_style_col1_set', '=', 'footer_col1_content' ),
			),
		),
		array(
			'id'       => 'footer_first_display',
			'type'     => 'select',
			'title'    => esc_html__('Footer First Column Display', 'foja'),
			'options'  => array(
				'horizontal'		=> esc_html__('Horizontal Item', 'foja'),
				'vertical'		=> esc_html__('Vertical Item', 'foja'),
			),
			'default'  => 'vertical',
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '1column-footer', '2column-footer', '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_1_sec' ),
				array( 'foot_style_col1_set', '=', 'footer_col1_display' ),
			),
		),
		array(
			'id'       => 'foot_col1_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Footer Column 1 Align', 'foja' ),
			'options'  => array(
				'text-left' => esc_html__('Text Left', 'foja'),
				'text-center' => esc_html__('Text Center', 'foja'),
				'text-right' => esc_html__('Text Right', 'foja')
			),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '1column-footer', '2column-footer', '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_1_sec' ),
				array( 'foot_style_col1_set', '=', 'footer_col1_align' ),
			),
			'default'  => 'text-left'
		),
		array(
			'id'       => 'foot_col1_margin',
			'type'     => 'spacing',
			'mode'     => 'margin',
			'all'      => false,
			'top'         => true,
			'left'          => true,
			'bottom'         => true,
			'right'          => true,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => esc_html__( 'Margin Footer Column Item', 'foja' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-right'  => 'auto',
				'margin-bottom' => '0',
				'margin-left'   => 'auto'
			),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '1column-footer', '2column-footer', '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_1_sec' ),
				array( 'foot_style_col1_set', '=', 'footer_col1_margin' ),
			),
		),

		/* 2nd footer column */
		array(
			'id'       => 'foot_style_col2_set',
			'type'     => 'button_set',
			'title'    => esc_html__('Footer Column 2 Setting', 'foja'),
			'options'  => array(
				'footer_col2_content'	=> esc_html__('Column 2 Content', 'foja'),
				'footer_col2_display'	=> esc_html__('Column 2 Display', 'foja'),
				'footer_col2_align'		=> esc_html__('Column 2 Align', 'foja'),
				'footer_col2_margin'	=> esc_html__('Column 2 Margin', 'foja'),
			),
			'default'  => 'footer_col2_content',
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '2column-footer', '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_2_sec' ),
			),
		),
		array(
			'id'      => 'footer_customize_second',
			'type'    => 'sorter',
			'title'   => esc_html__( 'Footer Second Column', 'foja' ),
			'desc'    => esc_html__( 'Organize how you want the layout to appear on the footer second column', 'foja' ),
			'options' => array(
				'enabled'  => array(
					'foja-foot-text'   => esc_html__('Text','foja'),
				),
				'disabled' => array(
					'foja-social'   => esc_html__('Social','foja'),
					'foja-copyright' => esc_html__('Copyright','foja'),
					'foja-foot-logo' => esc_html__('Footer Logo','foja'),
					'foja-foot-menu' => esc_html__('Footer Menu','foja'),
				)
			),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '2column-footer', '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_2_sec' ),
				array( 'foot_style_col2_set', '=', 'footer_col2_content' ),
			),
		),
		array(
			'id'       => 'footer_second_display',
			'type'     => 'select',
			'title'    => esc_html__('Footer Second Column Display', 'foja'),
			'options'  => array(
				'horizontal'		=> esc_html__('Horizontal Item', 'foja'),
				'vertical'		=> esc_html__('Vertical Item', 'foja'),
			),
			'default'  => 'vertical',
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '2column-footer', '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_2_sec' ),
				array( 'foot_style_col2_set', '=', 'footer_col2_display' ),
			),
		),
		array(
			'id'       => 'foot_col2_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Footer Column 2 Align', 'foja' ),
			'options'  => array(
				'text-left' => esc_html__('Text Left', 'foja'),
				'text-center' => esc_html__('Text Center', 'foja'),
				'text-right' => esc_html__('Text Right', 'foja')
			),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '2column-footer', '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_2_sec' ),
				array( 'foot_style_col2_set', '=', 'footer_col2_align' ),
			),
			'default'  => 'text-left'
		),
		array(
			'id'       => 'foot_col2_margin',
			'type'     => 'spacing',
			'mode'     => 'margin',
			'all'      => false,
			'top'         => true,
			'left'          => true,
			'bottom'         => true,
			'right'          => true,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => esc_html__( 'Margin Footer Column Item', 'foja' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-right'  => 'auto',
				'margin-bottom' => '0',
				'margin-left'   => 'auto'
			),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '2column-footer', '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_2_sec' ),
				array( 'foot_style_col2_set', '=', 'footer_col2_margin' ),
			),
		),
		array(
			'id'    => 'footer_col2_notif',
			'type'  => 'info',
			'notice' => false,
			'title' => esc_html__( 'Second Column not available for this option setting.', 'foja' ),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', '1column-footer' ),
				array( 'footer_col_4', '=', 'footer_col_2_sec' ),
			),
		),

		/* 3rd footer column */
		array(
			'id'       => 'foot_style_col3_set',
			'type'     => 'button_set',
			'title'    => esc_html__('Footer Column 3 Setting', 'foja'),
			'options'  => array(
				'footer_col3_content'	=> esc_html__('Column 3 Content', 'foja'),
				'footer_col3_display'	=> esc_html__('Column 3 Display', 'foja'),
				'footer_col3_align'		=> esc_html__('Column 3 Align', 'foja'),
				'footer_col3_margin'	=> esc_html__('Column 3 Margin', 'foja'),
			),
			'default'  => 'footer_col3_content',
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_3_sec' ),
			),
		),
		array(
			'id'      => 'footer_customize_third',
			'type'    => 'sorter',
			'title'   => esc_html__( 'Footer Third Column', 'foja' ),
			'desc'    => esc_html__( 'Organize how you want the layout to appear on the footer third column', 'foja' ),
			'options' => array(
				'enabled'  => array(
					'foja-foot-logo' => esc_html__('Footer Logo','foja'),
				),
				'disabled' => array(
					'foja-social'   => esc_html__('Social','foja'),
					'foja-foot-text'   => esc_html__('Text','foja'),
					'foja-copyright' => esc_html__('Copyright','foja'),
					'foja-foot-menu' => esc_html__('Footer Menu','foja'),
				)
			),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_3_sec' ),
				array( 'foot_style_col3_set', '=', 'footer_col3_content' ),
			),
		),
		array(
			'id'       => 'footer_third_display',
			'type'     => 'select',
			'title'    => esc_html__('Footer Third Column Display', 'foja'),
			'options'  => array(
				'horizontal'		=> esc_html__('Horizontal Item', 'foja'),
				'vertical'		=> esc_html__('Vertical Item', 'foja'),
			),
			'default'  => 'vertical',
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_3_sec' ),
				array( 'foot_style_col3_set', '=', 'footer_col3_display' ),
			),
		),
		array(
			'id'       => 'foot_col3_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Footer Column 3 Align', 'foja' ),
			'options'  => array(
				'text-left' => esc_html__('Text Left', 'foja'),
				'text-center' => esc_html__('Text Center', 'foja'),
				'text-right' => esc_html__('Text Right', 'foja')
			),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_3_sec' ),
				array( 'foot_style_col3_set', '=', 'footer_col3_align' ),
			),
			'default'  => 'text-left'
		),
		array(
			'id'       => 'foot_col3_margin',
			'type'     => 'spacing',
			'mode'     => 'margin',
			'all'      => false,
			'top'         => true,
			'left'          => true,
			'bottom'         => true,
			'right'          => true,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => esc_html__( 'Margin Footer Column Item', 'foja' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-right'  => 'auto',
				'margin-bottom' => '0',
				'margin-left'   => 'auto'
			),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '3column-footer', '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_3_sec' ),
				array( 'foot_style_col3_set', '=', 'footer_col3_margin' ),
			),
		),
		array(
			'id'    => 'footer_col3_notif',
			'type'  => 'info',
			'notice' => false,
			'title' => esc_html__( 'Third Column not available for this option setting.', 'foja' ),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '1column-footer', '2column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_3_sec' ),
			),
		),

		/* 4th footer column */
		array(
			'id'       => 'foot_style_col4_set',
			'type'     => 'button_set',
			'title'    => esc_html__('Footer Column 4 Setting', 'foja'),
			'options'  => array(
				'footer_col4_content'	=> esc_html__('Column 4 Content', 'foja'),
				'footer_col4_display'	=> esc_html__('Column 4 Display', 'foja'),
				'footer_col4_align'		=> esc_html__('Column 4 Align', 'foja'),
				'footer_col4_margin'	=> esc_html__('Column 4 Margin', 'foja'),
			),
			'default'  => 'footer_col4_content',
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_4_sec' ),
			),
		),
		array(
			'id'      => 'footer_customize_fourth',
			'type'    => 'sorter',
			'title'   => esc_html__( 'Footer Fourth Column', 'foja' ),
			'desc'    => esc_html__( 'Organize how you want the layout to appear on the footer fourth column', 'foja' ),
			'options' => array(
				'enabled'  => array(
					'foja-social'   => esc_html__('Social','foja'),
				),
				'disabled' => array(
					'foja-foot-text'   => esc_html__('Text','foja'),
					'foja-copyright' => esc_html__('Copyright','foja'),
					'foja-foot-logo' => esc_html__('Footer Logo','foja'),
					'foja-foot-menu' => esc_html__('Footer Menu','foja'),
				)
			),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_4_sec' ),
				array( 'foot_style_col4_set', '=', 'footer_col4_content' ),
			),
		),
		array(
			'id'       => 'footer_fourth_display',
			'type'     => 'select',
			'title'    => esc_html__('Footer Fourth Column Display', 'foja'),
			'options'  => array(
				'horizontal'		=> esc_html__('Horizontal Item', 'foja'),
				'vertical'		=> esc_html__('Vertical Item', 'foja'),
			),
			'default'  => 'vertical',
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_4_sec' ),
				array( 'foot_style_col4_set', '=', 'footer_col4_display' ),
			),
		),
		array(
			'id'       => 'foot_col4_align',
			'type'     => 'button_set',
			'title'    => esc_html__( 'Footer Column 4 Align', 'foja' ),
			'options'  => array(
				'text-left' => esc_html__('Text Left', 'foja'),
				'text-center' => esc_html__('Text Center', 'foja'),
				'text-right' => esc_html__('Text Right', 'foja')
			),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_4_sec' ),
				array( 'foot_style_col4_set', '=', 'footer_col4_align' ),
			),
			'default'  => 'text-left'
		),

		array(
			'id'       => 'foot_col4_margin',
			'type'     => 'spacing',
			'mode'     => 'margin',
			'all'      => false,
			'top'         => true,
			'left'          => true,
			'bottom'         => true,
			'right'          => true,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => esc_html__( 'Margin Footer Column Item', 'foja' ),
			'default'  => array(
				'margin-top'    => '0',
				'margin-right'  => 'auto',
				'margin-bottom' => '0',
				'margin-left'   => 'auto'
			),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '4column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_4_sec' ),
				array( 'foot_style_col4_set', '=', 'footer_col4_margin' ),
			),
		),
		array(
			'id'    => 'footer_col4_notif',
			'type'  => 'info',
			'notice' => false,
			'title' => esc_html__( 'Fourth Column not available for this option setting.', 'foja' ),
			'required' => array(
				array( 'footer_type', '=', 'default' ),
				array( 'footer_layout', '=', array( '1column-footer', '2column-footer', '3column-footer' )),
				array( 'footer_col_4', '=', 'footer_col_4_sec' ),
			),
		),

		/* end of footer style type*/

	);

return $foja_footer_style_opt;
}