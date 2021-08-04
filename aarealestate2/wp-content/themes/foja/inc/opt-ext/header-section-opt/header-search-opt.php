<?php

function foja_header_search_ext_opt() {

	$foja_header_search_opt = array(

		/* 1.5. Search*/
		array(
			'id'       => 'search_bar_style',
			'type'     => 'select',
			'title'    => esc_html__('Search Bar Style', 'foja'),
			'options'  => array(
				'default'		=> esc_html__('Default Search Bar', 'foja'),
				'expand'		=> esc_html__('Expanded Search Content', 'foja'),
			),
			'default'  => 'expand',
		),
		array(
			'id'		=>'search_bar_title',
			'type' 		=> 'text',
			'title' 	=> esc_html__('Search Bar Title', 'foja'),
			'default' 	=> '',
			'required' => array('search_bar_style','=','expand'),
		),
		array(
			'id'		=>'search_sug_title',
			'type' 		=> 'text',
			'title' 	=> esc_html__('Search Suggestion Title', 'foja'),
			'default' 	=> '',
			'required' => array('search_bar_style','=','expand'),
		),
		array(
			'id'       => 'search_sug_text',
			'type'     => 'textarea',
			'title'    => esc_html__('Search Suggestion Description', 'foja'), 
			'default' 	=> '',
			'required' => array('search_bar_style','=','expand'),
		),
	);

return $foja_header_search_opt;
}