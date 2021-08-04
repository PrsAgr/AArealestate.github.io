<?php

function foja_header_ext_opt() {

	$foja_header_opt = array(

		/* 1.2.2. Header 2 & 3 Options */
		array(
			'id'    => 'header2_notif',
			'type'  => 'info',
			'notice' => false,
			'title' => esc_html__( 'You are be able to set the main wrapper type.', 'foja' ),
			'desc'  => esc_html__( 'If you want to make it as boxed. You need to set main wrapper only width to make it boxed. Try it in <strong>Page Options</strong> tab.', 'foja' ),
		),
		array(
			'id'=>'header_2_title',
			'type' => 'text',
			'title' => esc_html__('Header 2 Headline', 'foja'),
			'default' => '',
		),
		array(
			'id'       => 'header_2_text',
			'type'	   => 'editor',
			'default'  => esc_html__('Built your own with Foja.', 'foja'),
			'title'    => esc_html__('Header 2 HTML Description', 'foja'), 
		),

	);

return $foja_header_opt;
}