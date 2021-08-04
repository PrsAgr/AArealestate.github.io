<?php

add_action( 'elementor/element/foja-post-block/section_foja_post_block_post_setting/after_section_start', function( $element, $args ) {
	/** @var \Elementor\Element_Base $element */
	
	$element->add_control(
		'posts_per_page',
		[
			'label' => __( 'Post per Block', 'foja' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => '6',
			'title' => __( 'Enter some text', 'foja' ),
			'description' => __( 'This option allow you to set how much post display in this block.', 'foja' ),	
		]
	);

	$element->add_control(
		'offset',
		[
			'label' => __( 'Offset', 'foja' ),
			'type' => \Elementor\Controls_Manager::TEXT,
			'default' => '',
			'title' => __( 'Enter some text', 'foja' ),
			'description' => __( 'Set the first post to display (start from 0 as the latest post in each order).', 'foja' ),
		]
	);

	$element->add_control(
		'category',
		[
			'label' => __( 'Category', 'foja' ),
			'type'    => \Elementor\Controls_Manager::SELECT2,
			'label_block' => true,
			'multiple'    => true,
			'default' => [],				
			'options' => foja_get_category(),
			'description' => __( 'Select category to display (default to All).', 'foja' ),
		]
	);

	$element->add_control(
		'orderby',
		[
			'label' => __( 'Order By', 'foja' ),
			'type' => \Elementor\Controls_Manager::SELECT,
			'default' => 'date',
			'options' => foja_order_by(),
			'description' => __( 'Select post order by (default to latest post).', 'foja' ),
		]
	);

}, 10, 2 );