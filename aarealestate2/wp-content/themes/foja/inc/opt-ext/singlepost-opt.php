<?php

function foja_single_post_ext_opt() {

	$foja_single_post_opt = array(

		/* 5.1. Single Post Layout */
		array(
			'id'       => 'blog_type',
			'type'     => 'select',
			'title'    => esc_html__( 'Single Post Layout Type', 'foja' ),
			'subtitle' => esc_html__( 'Select Your Single Post Layout Type', 'foja' ),
			'options'  => array(
				'fullwidth' => esc_html__( 'Full Width', 'foja' ),
				'sidebar' => esc_html__( 'Sidebar', 'foja' ),
			),
			'default'  => 'sidebar'
		),
		/* end of single post layout */

		/* 5.2. Single Post Padding */
		array(
			'id'       => 'single_blog_padding',
			'type'     => 'spacing',
			'output'   => array( '.single-post-wrap .blog' ),
			'mode'     => 'padding',
			'all'      => false,
			'top'           => true,
			'bottom'        => true,
			'right'         => false,
			'left'          => false,
			'units'         => array( 'px' ),
			'units_extended'=> 'true',
			'display_units' => 'true',
			'title'    => esc_html__( 'Padding Single Post', 'foja' ),
			'subtitle' => esc_html__( 'Padding top and bottom for Single Post.', 'foja' ),
			'default'  => array(
				'padding-top'    => '60',
				'padding-right'  => '0',
				'padding-bottom' => '60',
				'padding-left'   => '0'
			),
		),
		/* end of single post padding */

		array(
			'id'		=>'post_back_link',
			'type'		=> 'select',
			'data'		=> 'pages',
			'args'		=> array(
				'posts_per_page' => -1,
			),
			'title'		=> esc_html__('Post Link Page', 'foja'),
			'subtitle'	=> esc_html__( 'Select your post back page link.', 'foja' ),
			'desc'		=> esc_html__( 'This link will work in single post type as back button link.', 'foja' ),
			'default'    => '',
		),
	);

	return $foja_single_post_opt;
}