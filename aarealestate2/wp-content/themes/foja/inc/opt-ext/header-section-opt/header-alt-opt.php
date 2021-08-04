<?php

function foja_header_alt_ext_opt() {

	$foja_header_alt_opt = array(		

		/* 1.4. Header Alternative Options */
		array(
			'id'        => 'header_scheme',
			'type'      => 'button_set',
			'title'     => esc_html__('Alternative Header Scheme', 'foja'),
			'options' 	 => array(
				'enable' 	=> esc_html__('Enable','foja'),
				'disable' => esc_html__('Disable','foja'),
			),
			'default'  => 'enable'
		),
		array(
			'id'       => 'header_text_color',
			'type'     => 'color',
			'title'    => esc_html__('Header text color', 'foja'),
			'subtitle' => esc_html__('Set header text color', 'foja'),
			'default'  => '#ffffff',
			'validate' => 'color',
			'output'   => array('body .alt-head .main-menu ul.sm-clean>li>a, body .alt-head .search-wrap #btn-search i, body .alt-head .main-menu ul.sm-clean>li.current-menu-item>a, .alt-head .site-title a'),
			'required' => array('header_scheme','=','enable'),
		),
		array(
			'id' => 'header_alt_logo',
			'type' => 'media',
			'url' => true,
			'compiler' => 'true',
			'title' => esc_html__('Alternative Logo', 'foja'), 
			'desc' => esc_html__('Upload your logo image here (any size).', 'foja'),
			'default'  	=> array(
				'url'	=>''
			),
			'required' => array('header_scheme','=','enable'),
		),
		array(
			'id' => 'header_alt_bg',
			'type' => 'background',
			'output' => array('header#header.inner-head-wrap.alt-head'),
			'title' => esc_html__('Header Alternative Background', 'foja'),
			'subtitle' => esc_html__('Header background with image, color, etc.', 'foja'),
			'default' => 'transparent',
			'required' => array('header_scheme','=','enable'),
		),
		/* end of header alternative options*/

		array(
			'id'        => 'space_fixed_alt',
			'type'      => 'button_set',
			'title'     => esc_html__('Header Fixed Space', 'foja'),
			'options' 	 => array(
				'on' 	=> esc_html__('Enable','foja'),
				'off' => esc_html__('Disable','foja'),
			),
			'default'  => 'off'
		),

	);

return $foja_header_alt_opt;
}