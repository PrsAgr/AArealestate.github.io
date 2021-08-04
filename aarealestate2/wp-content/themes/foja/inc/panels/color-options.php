<?php

	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'foja_header_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Header Section Color', 'foja' ),
	        'description'       => esc_html__( 'Edit your header color here.', 'foja' ),
	    )
	);


	/* HEADER STYLE
	================================================== */
	
	$wp_customize->add_section( 'header_style_3', array(
		'title'		=>	esc_html__( 'Header', 'foja' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'bg_header', array(
		'default'		=> 	'#1b1b1b',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_header_dalem', array(
		'default'		=> 	'#1b1b1b',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_header_dalem', array(
		'default'		=> 	'#eaeaea',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'burger_menu', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_style_two', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'menu_active_two', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'info_web_title', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'info_web_desc', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'search_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sugges_search', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sugges_desc_search', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_close', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_search', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_search', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_header', array(
		'label'		=>	esc_html__( 'Background Header Color', 'foja' ),
		'section'	=>	'header_style_3',
		'settings'	=>	'bg_header',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_header_dalem', array(
		'label'		=>	esc_html__( 'Inner Header Background Color', 'foja' ),
		'section'	=>	'header_style_3',
		'settings'	=>	'bg_header_dalem',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_header_dalem', array(
		'label'		=>	esc_html__( 'The Dividing Line Between Menus and Descriptions', 'foja' ),
		'section'	=>	'header_style_3',
		'settings'	=>	'border_header_dalem',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'burger_menu', array(
		'label'		=>	esc_html__( 'Burger Icon & Search Icon Header Color', 'foja' ),
		'section'	=>	'header_style_3',
		'settings'	=>	'burger_menu',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_style_two', array(
		'label'		=>	esc_html__( 'Menu List Color', 'foja' ),
		'section'	=>	'header_style_3',
		'settings'	=>	'menu_style_two',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_active_two', array(
		'label'		=>	esc_html__( 'Menu List Hover Color', 'foja' ),
		'section'	=>	'header_style_3',
		'settings'	=>	'menu_active_two',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'info_web_title', array(
		'label'		=>	esc_html__( 'Info Title Color', 'foja' ),
		'section'	=>	'header_style_3',
		'settings'	=>	'info_web_title',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'info_web_desc', array(
		'label'		=>	esc_html__( 'Info Description Color', 'foja' ),
		'section'	=>	'header_style_3',
		'settings'	=>	'info_web_desc',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_title', array(
		'label'		=>	esc_html__( 'Search Bar Title Color', 'foja' ),
		'section'	=>	'header_style_3',
		'settings'	=>	'search_title',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sugges_search', array(
		'label'		=>	esc_html__( 'Search Suggestion Title Color', 'foja' ),
		'section'	=>	'header_style_3',
		'settings'	=>	'sugges_search',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sugges_desc_search', array(
		'label'		=>	esc_html__( 'Search Suggestion Description Color', 'foja' ),
		'section'	=>	'header_style_3',
		'settings'	=>	'sugges_desc_search',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_close', array(
		'label'		=>	esc_html__( 'Button Search Close Color', 'foja' ),
		'section'	=>	'header_style_3',
		'settings'	=>	'btn_close',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_search', array(
		'label'		=>	esc_html__( 'Search Background Color', 'foja' ),
		'section'	=>	'header_style_3',
		'settings'	=>	'bg_search',
		'priority'	=>	13,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_search', array(
		'label'		=>	esc_html__( 'Search Border Color', 'foja' ),
		'section'	=>	'header_style_3',
		'settings'	=>	'border_search',
		'priority'	=>	14,
	) ) );


	
	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'foja_content_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Content Section Color', 'foja' ),
	        'description'       => esc_html__( 'Edit your content color here.', 'foja' ),
	    )
	);

	/* BLOG STYLING
	================================================== */
	
	$wp_customize->add_section( 'blog_styling', array(
		'title'		=>	esc_html__( 'Blog Loop Style 2', 'foja' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'post_meta_border', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_meta_text', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_hover_title', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_meta', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_meta_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_long', array(
		'default'		=> 	'#dedede',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_short', array(
		'default'		=> 	'#fdca1f',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'post_desc', array(
		'default'		=> 	'#333333',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_more', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_hover_more', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_more_border', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'read_more_bg_hover', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_meta_border', array(
		'label'		=>	esc_html__( 'Post Date Border Color', 'foja' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_meta_border',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_meta_text', array(
		'label'		=>	esc_html__( 'Post Date Text Color', 'foja' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_meta_text',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_title', array(
		'label'		=>	esc_html__( 'Post Title Color', 'foja' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_title',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_hover_title', array(
		'label'		=>	esc_html__( 'Post Title Hover Color', 'foja' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_hover_title',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_meta', array(
		'label'		=>	esc_html__( 'Post Meta Color', 'foja' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_meta',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_meta_hover', array(
		'label'		=>	esc_html__( 'Post Meta Link Hover Color', 'foja' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_meta_hover',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_long', array(
		'label'		=>	esc_html__( 'Single Post Border Sparator 1 Color', 'foja' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'border_long',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_short', array(
		'label'		=>	esc_html__( 'Single Post Border Sparator 2 Color', 'foja' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'border_short',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_desc', array(
		'label'		=>	esc_html__( 'Post Text Color', 'foja' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'post_desc',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_more', array(
		'label'		=>	esc_html__( 'Read More Button Text Color', 'foja' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_more',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_hover_more', array(
		'label'		=>	esc_html__( 'Read More Button Text Hover Color', 'foja' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_hover_more',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_more_border', array(
		'label'		=>	esc_html__( 'Post Read More Button Border Color', 'foja' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_more_border',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'read_more_bg_hover', array(
		'label'		=>	esc_html__( 'Post Read More Button Background Hover Color', 'foja' ),
		'section'	=>	'blog_styling',
		'settings'	=>	'read_more_bg_hover',
		'priority'	=>	13,
	) ) );



	/* BLOG STYLING 2
	================================================== */
	
	$wp_customize->add_section( 'blog_styling_2', array(
		'title'		=>	esc_html__( 'Blog Style 1 Full Background Template', 'foja' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'title_black', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_active', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'blog_meta', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'hover_meta', array(
		'default'		=> 	'#eaeaea',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'hover_active', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_meta', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_meta_active', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'date_meta', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'date_meta_active', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_black', array(
		'label'		=>	esc_html__( 'Post Title Color', 'foja' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'title_black',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_active', array(
		'label'		=>	esc_html__( 'Post Title Hover/Active Color', 'foja' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'title_active',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_meta', array(
		'label'		=>	esc_html__( 'Post Meta Color', 'foja' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'blog_meta',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hover_meta', array(
		'label'		=>	esc_html__( 'Post Meta Link Hover Color', 'foja' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'hover_meta',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hover_active', array(
		'label'		=>	esc_html__( 'Post Meta Hover Active Color', 'foja' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'hover_active',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_meta', array(
		'label'		=>	esc_html__( 'Post Date Border Color', 'foja' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'border_meta',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_meta_active', array(
		'label'		=>	esc_html__( 'Post Date Border Active Color', 'foja' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'border_meta_active',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'date_meta', array(
		'label'		=>	esc_html__( 'Post Date Text Color', 'foja' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'date_meta',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'date_meta_active', array(
		'label'		=>	esc_html__( 'Post Date Text Active Color', 'foja' ),
		'section'	=>	'blog_styling_2',
		'settings'	=>	'date_meta_active',
		'priority'	=>	9,
	) ) );



	/* BLOG SINGLE STYLING
	================================================== */
	
	$wp_customize->add_section( 'blog_single_styling', array(
		'title'		=>	esc_html__( 'Single Blog', 'foja' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );

	//SECTION

	$wp_customize->add_setting( 'title_single', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_single_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_separator', array(
		'default'		=> 	'#fdca1f',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'title_separator_second', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_single', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_single_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_bg_single2', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_bg_single2_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_single2', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_single2_hover', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_single', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_single_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_single', array(
		'default'		=> 	'#333333',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_quote', array(
		'default'		=> 	'#333333',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'quote_border', array(
		'default'		=> 	'#fdd273',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'quote_icon', array(
		'default'		=> 	'#111111',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tag_text', array(
		'default'		=> 	'#777777',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tag_hover', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tag_bg', array(
		'default'		=> 	'#f3f3f3',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'tag_bg_hover', array(
		'default'		=> 	'#e6e6e6',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'meta_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_bord', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_link', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'prev_hover_link', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_prev', array(
		'default'		=> 	'#dedede',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_link', array(
		'default'		=> 	'#999999',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'comment_hover_link', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_comment_bg', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_comment_bg_hover', array(
		'default'		=> 	'#333333',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_comment_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'next_archive', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_single', array(
		'label'		=>	esc_html__( 'Single Post Title Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'title_single',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_single_hover', array(
		'label'		=>	esc_html__( 'Single Post Title Hover Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'title_single_hover',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_separator', array(
		'label'		=>	esc_html__( 'Title Separator Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'title_separator',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_separator_second', array(
		'label'		=>	esc_html__( 'Second Title Separator Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'title_separator_second',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_single', array(
		'label'		=>	esc_html__( 'Single Post Meta Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'category_single',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_single_hover', array(
		'label'		=>	esc_html__( 'Single Post Meta Hover Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'category_single_hover',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_bg_single2', array(
		'label'		=>	esc_html__( 'Single Post Style 2 Category Background Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'category_bg_single2',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_bg_single2_hover', array(
		'label'		=>	esc_html__( 'Single Post Style 2 Category Background Hover Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'category_bg_single2_hover',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_single2', array(
		'label'		=>	esc_html__( 'Single Post Style 2 Category Text Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'category_single2',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_single2_hover', array(
		'label'		=>	esc_html__( 'Single Post Style 2 Category Text Hover Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'category_single2_hover',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_single', array(
		'label'		=>	esc_html__( 'Single Post Comment Amount Number Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'comment_single',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_single_hover', array(
		'label'		=>	esc_html__( 'Single Post Comment Amount Number Hover Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'comment_single_hover',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_single', array(
		'label'		=>	esc_html__( 'Single Post Text Description Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'text_single',
		'priority'	=>	13,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_quote', array(
		'label'		=>	esc_html__( 'Single Post Text Quote Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'text_quote',
		'priority'	=>	14,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'quote_border', array(
		'label'		=>	esc_html__( 'Quote Border Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'quote_border',
		'priority'	=>	15,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'quote_icon', array(
		'label'		=>	esc_html__( 'Quote Icon Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'quote_icon',
		'priority'	=>	16,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_text', array(
		'label'		=>	esc_html__( 'Tags Text Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'tag_text',
		'priority'	=>	17,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_hover', array(
		'label'		=>	esc_html__( 'Tags Text Hover Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'tag_hover',
		'priority'	=>	18,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_bg', array(
		'label'		=>	esc_html__( 'Tags Background Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'tag_bg',
		'priority'	=>	19,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tag_bg_hover', array(
		'label'		=>	esc_html__( 'Tags Background Hover Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'tag_bg_hover',
		'priority'	=>	20,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'meta_bg', array(
		'label'		=>	esc_html__( 'Content Background Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'meta_bg',
		'priority'	=>	21,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_bord', array(
		'label'		=>	esc_html__( 'Next & Previous Post Icon Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'prev_bord',
		'priority'	=>	22,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_link', array(
		'label'		=>	esc_html__( 'Next & Previous Post Text Link Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'prev_link',
		'priority'	=>	23,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_hover_link', array(
		'label'		=>	esc_html__( 'Next & Previous Post Link Hover Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'prev_hover_link',
		'priority'	=>	24,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_prev', array(
		'label'		=>	esc_html__( 'Next & Previous Post border Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'border_prev',
		'priority'	=>	25,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_title', array(
		'label'		=>	esc_html__( 'Comment Reply Title Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'comment_title',
		'priority'	=>	26,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_link', array(
		'label'		=>	esc_html__( 'Comment Link Log in & Log Out Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'comment_link',
		'priority'	=>	27,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comment_hover_link', array(
		'label'		=>	esc_html__( 'Comment Link Log in & Log Out Hover Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'comment_hover_link',
		'priority'	=>	28,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_comment_bg', array(
		'label'		=>	esc_html__( 'Post Comment Button Background Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'btn_comment_bg',
		'priority'	=>	29,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_comment_bg_hover', array(
		'label'		=>	esc_html__( 'Post Comment Button Background Hover Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'btn_comment_bg_hover',
		'priority'	=>	30,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_comment_text', array(
		'label'		=>	esc_html__( 'Post Comment Button Text Color', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'btn_comment_text',
		'priority'	=>	31,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'next_archive', array(
		'label'		=>	esc_html__( 'Next & Previous Post Text Color (Archive)', 'foja' ),
		'section'	=>	'blog_single_styling',
		'settings'	=>	'next_archive',
		'priority'	=>	32,
	) ) );



	/* SIDEBAR STYLING
	================================================== */
	
	$wp_customize->add_section( 'sidebar_styling', array(
		'title'		=>	esc_html__( 'Sidebar & Widget', 'foja' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'sidebar_search_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sidebar_search_btn', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sidebar_search_icon', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'sidebar_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'foja_widget_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'separator_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'second_separator_title', array(
		'default'		=> 	'#fdca1f',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_text_sidebar', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_hover_sidebar', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_tabs', array(
		'default'		=> 	'#fdca1f',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_tabs', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'bg_tabs2', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_tabs2', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_tabs2_hover', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_tabs', array(
		'default'		=> 	'#fdca1f',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_search_bg', array(
		'label'		=>	esc_html__( 'Search Widget Background Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_search_bg',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_search_btn', array(
		'label'		=>	esc_html__( 'Search Widget Button Background Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_search_btn',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_search_icon', array(
		'label'		=>	esc_html__( 'Search Widget Button Icon Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_search_icon',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_bg', array(
		'label'		=>	esc_html__( 'Widget Background Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'sidebar_bg',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'foja_widget_title', array(
		'label'		=>	esc_html__( 'Widget Titlte Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'foja_widget_title',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'separator_title', array(
		'label'		=>	esc_html__( 'Widget Titlte Sparator Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'separator_title',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'second_separator_title', array(
		'label'		=>	esc_html__( 'Widget Second Titlte Sparator Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'second_separator_title',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_text_sidebar', array(
		'label'		=>	esc_html__( 'Sidebar Widget Link Text Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'link_text_sidebar',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_sidebar', array(
		'label'		=>	esc_html__( 'Sidebar Widget Link Text Hover Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'link_hover_sidebar',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_tabs', array(
		'label'		=>	esc_html__( 'foja News Widget Tabs Active Background Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'bg_tabs',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_tabs', array(
		'label'		=>	esc_html__( 'foja News Widget Tabs Text Active Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'text_tabs',
		'priority'	=>	11,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_tabs2', array(
		'label'		=>	esc_html__( 'foja News Widget Tabs Background Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'bg_tabs2',
		'priority'	=>	12,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_tabs2', array(
		'label'		=>	esc_html__( 'foja News Widget Tabs Text Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'text_tabs2',
		'priority'	=>	13,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_tabs2_hover', array(
		'label'		=>	esc_html__( 'foja News Widget Tabs Text Hover Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'text_tabs2_hover',
		'priority'	=>	14,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_tabs', array(
		'label'		=>	esc_html__( 'foja News Widget Tabs Border Bottom Color', 'foja' ),
		'section'	=>	'sidebar_styling',
		'settings'	=>	'border_tabs',
		'priority'	=>	15,
	) ) );
	

	/* CONTACT STYLING
	================================================== */
	
	$wp_customize->add_section( 'contact_styling', array(
		'title'		=>	esc_html__( 'Contact Form', 'foja' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'form_bord', array(
		'default'		=> 	'#cdcdcc',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'form_bord_hover', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_input', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send', array(
		'default'		=> 	'#fdca1f',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send_text', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send_hover', array(
		'default'		=> 	'#333333',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'btn_send_text_hover', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'form_bord', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Border Color', 'foja' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'form_bord',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'form_bord_hover', array(
		'label'		=>	esc_html__( 'Contact Form Style 2 Border Hover Color', 'foja' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'form_bord_hover',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_input', array(
		'label'		=>	esc_html__( 'Text Input Color', 'foja' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'text_input',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Background Color', 'foja' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send_text', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Text Color', 'foja' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send_text',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send_hover', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Background Hover Color', 'foja' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send_hover',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_send_text_hover', array(
		'label'		=>	esc_html__( 'Contact Form Style 1&2 Button Text Hover Color', 'foja' ),
		'section'	=>	'contact_styling',
		'settings'	=>	'btn_send_text_hover',
		'priority'	=>	7,
	) ) );




	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'foja_page_template_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Portfolio Section Color', 'foja' ),
	        'description'       => esc_html__( 'Edit Your Page Template Color Here.', 'foja' ),
	    )
	);


	/* PORTFOLIO SINGLE STYLING
	================================================== */
	
	$wp_customize->add_section( 'portfolio_single_styling', array(
		'title'		=>	esc_html__( 'Single Portfolio', 'foja' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'port_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'category_portfolio', array(
		'default'		=> 	'#ffb23f',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_p', array(
		'default'		=> 	'#888888',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_border', array(
		'default'		=> 	'#eeeeee',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_desc', array(
		'default'		=> 	'#555555',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'detail1_pagination', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'port_title', array(
		'label'		=>	esc_html__( 'Project Title Color', 'foja' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'port_title',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_portfolio', array(
		'label'		=>	esc_html__( 'Project Category Color', 'foja' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'category_portfolio',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_title', array(
		'label'		=>	esc_html__( 'Project Details Title Color', 'foja' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_title',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_p', array(
		'label'		=>	esc_html__( 'Project Details Color', 'foja' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_p',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_border', array(
		'label'		=>	esc_html__( 'Project Details Border Color', 'foja' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_border',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_desc', array(
		'label'		=>	esc_html__( 'Project Details All Style Description Color', 'foja' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_desc',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'detail1_pagination', array(
		'label'		=>	esc_html__( 'Project Pagination Color', 'foja' ),
		'section'	=>	'portfolio_single_styling',
		'settings'	=>	'detail1_pagination',
		'priority'	=>	7,
	) ) );




	/*=====================================================================================================*/
	// Set Panel ID
	/*=====================================================================================================*/
	$panel_id_1 = 'foja_footer_section';

	$wp_customize->add_panel( $panel_id_1,
	    array(
	        'priority'          => 199,
	        'capability'        => 'edit_theme_options',
	        'theme_supports'    => '',
	        'title'             => esc_html__( 'Footer Section Color', 'foja' ),
	        'description'       => esc_html__( 'Edit your Footer color here.', 'foja' ),
	    )
	);

	/* Footer STYLING
	================================================== */
	
	$wp_customize->add_section( 'footer_styling', array(
		'title'		=>	esc_html__( 'Footer', 'foja' ),
		'priority'	=>	200,
		'panel' 	  => $panel_id_1
	) );
	
	//SECTION

	$wp_customize->add_setting( 'footer_text', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_link', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_hover_link', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_social', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_hover_social', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_widget_bg', array(
		'default'		=> 	'#ffffff',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'footer_widget_title', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_text_widget', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'link_hover_widget', array(
		'default'		=> 	'#666666',
		'type'			=> 	'option',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'text_widget', array(
		'default'		=> 	'#000000',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_setting( 'border_widget', array(
		'default'		=> 	'#dddddd',
		'type'			=> 	'option',
		'transport'		=> 	'postMessage',
		'capability'	=>	'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	//CONTROL

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text', array(
		'label'		=>	esc_html__( 'Footer Copyright & Address Text Color', 'foja' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_text',
		'priority'	=>	1,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link', array(
		'label'		=>	esc_html__( 'Footer Copyright Link Color', 'foja' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_link',
		'priority'	=>	2,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_hover_link', array(
		'label'		=>	esc_html__( 'Footer Copyright Link Hover Color', 'foja' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_hover_link',
		'priority'	=>	3,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_social', array(
		'label'		=>	esc_html__( 'Footer Social Icon Color', 'foja' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_social',
		'priority'	=>	4,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_hover_social', array(
		'label'		=>	esc_html__( 'Footer Social Icon Hover Color', 'foja' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_hover_social',
		'priority'	=>	5,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_bg', array(
		'label'		=>	esc_html__( 'Footer Widget Background Color', 'foja' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_widget_bg',
		'priority'	=>	6,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_title', array(
		'label'		=>	esc_html__( 'Footer Widget Title Color', 'foja' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'footer_widget_title',
		'priority'	=>	7,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_text_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Link Text Color', 'foja' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'link_text_widget',
		'priority'	=>	8,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Link Text Hover Color', 'foja' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'link_hover_widget',
		'priority'	=>	9,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Text Color', 'foja' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'text_widget',
		'priority'	=>	10,
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_widget', array(
		'label'		=>	esc_html__( 'Footer Widget Border Color', 'foja' ),
		'section'	=>	'footer_styling',
		'settings'	=>	'border_widget',
		'priority'	=>	11,
	) ) );

	