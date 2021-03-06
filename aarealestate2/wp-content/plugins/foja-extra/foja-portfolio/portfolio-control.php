<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

include ( plugin_dir_path(__FILE__).'config/portfolio-pagination-setting.php' );

class foja_portfolio_block extends Widget_Base {

	public function get_name() {
		return 'foja-portfolio-block';
	}

	public function get_title() {
		return __( 'Portfolio', 'foja' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	public function get_categories() {
		return [ 'foja-general-category' ];
	}

	protected function _register_controls() {

		/*-----------------------------------------------------------------------------------
			PORTFOLIO BLOCK INDEX
			1. ELEMENT SETTING
			2. POST SETTING
			3. IMAGE SETTING
			4. ITEM SETTING
			5. HOVER SETTING
			6. LAYOUT SETTING
			7. TITLE SETTING
			8. CATEGORY SETTING
			9. CAROUSEL SETTING
			10. FILTER SETTING
			11. PAGINATION SETTING
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  1. ELEMENT SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_foja_portfolio_block_element_setting',
			[
				'label' => __( 'Element Setting', 'foja' ),
			]
		);

		$this->add_control(
			'portfolio_pilih_layout',
			[
				'label' => __( 'Portfolio Layouts', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'portfolio_grid_layout',
				'options' => [
					'portfolio_grid_layout' => __( 'Grid Layout', 'foja' ),
					'portfolio_masonry_layout'=> __( 'Masonry Layout', 'foja' ),
					//'portfolio_carousel_layout'=> __( 'Carousel Layout', 'foja' ),
				],
			]
		);

		/*if portfolio layout grid*/
		$this->add_control(
			'portfolio_grid_style',
			[
				'label' => __( 'Portfolio Grid Styles', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'portfolio_grid_style1',
				'options' => [
					'portfolio_grid_style1' => __( 'Grid 1', 'foja' ),
					//'portfolio_grid_style2' => __( 'Grid 2', 'foja' ),
				],
				'condition' => [
					'portfolio_pilih_layout' => 'portfolio_grid_layout',
				],
			]
		);

		/*if portfolio layout masonry*/
		$this->add_control(
			'portfolio_masonry_style',
			[
				'label' => __( 'Portfolio Masonry Styles', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'portfolio_masonry_style1',
				'options' => [
					'portfolio_masonry_style1' => __( 'Masonry 1', 'foja' ),
					//'portfolio_masonry_style2' => __( 'Masonry 2', 'foja' ),
					//'portfolio_masonry_style3' => __( 'Masonry 3', 'foja' ),
				],
				'condition' => [
					'portfolio_pilih_layout' => 'portfolio_masonry_layout',
				],
			]
		);

		/*if portfolio layout is carousel*/
		$this->add_control(
			'portfolio_carousel_style',
			[
				'label' => __( 'Portfolio Carousel Styles', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'portfolio_carousel_style1',
				'options' => [
					'portfolio_carousel_style1' => __( 'Carousel 1', 'foja' ),
					'portfolio_carousel_style2' => __( 'Carousel 2', 'foja' ),
					'portfolio_carousel_style3' => __( 'Carousel 3', 'foja' ),
				],
				'condition' => [
					'portfolio_pilih_layout' => 'portfolio_carousel_layout',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of portfolio block element setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  2. POST SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_foja_portfolio_block_post_setting',
			[
				'label' => __( 'Post Setting', 'foja' ),
			]
		);

		$this->add_control(
			'posts_per_page',
			[
				'label' => __( 'Post per Block', 'foja' ),
				'type' => Controls_Manager::TEXT,
				'default' => '6',
				'title' => __( 'Enter some text', 'foja' ),
				'description' => __( 'This option allow you to set how much post display in this block.', 'foja' ),	
			]
		);

		$this->add_control(
			'offset',
			[
				'label' => __( 'Offset', 'foja' ),
				'type' => Controls_Manager::TEXT,
				'default' => '',
				'title' => __( 'Enter some text', 'foja' ),
				'description' => __( 'Set the first post to display (start from 0 as the latest post in each order).', 'foja' ),
			]
		);

		$this->add_control(
			'category',
			[
				'label' => __( 'Category', 'foja' ),
				'type'    => Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple'    => true,
				'default' => [],				
				'options' => foja_porto_category(),
				'description' => __( 'Select category to display (default to All).', 'foja' ),
			]
		);

		$this->add_control(
			'orderby',
			[
				'label' => __( 'Order By', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'date',
				'options' => foja_order_by(),
				'description' => __( 'Select post order by (default to latest post).', 'foja' ),
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of portfolio block post setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  3. IMAGE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_foja_portfolio_block_image_setting',
			[
				'label' => __( 'Image Setting', 'foja' ),
				'condition' => [
					'portfolio_pilih_layout' => 'portfolio_grid_layout',
				],
			]
		);

		$this->add_control(
			'width',
			[
				'label' => __( 'Width', 'foja' ),
				'type' => Controls_Manager::TEXT,
				'default' => '373',
				'title' => __( 'Enter some text', 'foja' ),
				'description' => __( 'Crop your image width.', 'foja' ),
				'condition' => [
					'portfolio_pilih_layout' => 'portfolio_grid_layout',
				],
			]
		);

		$this->add_control(
			'height',
			[
				'label' => __( 'Height', 'foja' ),
				'type' => Controls_Manager::TEXT,
				'default' => '373',
				'title' => __( 'Enter some text', 'foja' ),
				'description' => __( 'Crop your image height and also your post height.', 'foja' ),
				'condition' => [
					'portfolio_pilih_layout' => 'portfolio_grid_layout',
				],
			]
		);

		$this->add_control(
			'portfolio_image_crop',
			[
				'label' => __( 'Force to Crop Image', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'on',
				'default' => 'on',
				'condition' => [
					'portfolio_pilih_layout' => 'portfolio_grid_layout',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of portfolio block image setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  4. PORTFOLIO ITEM SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
		'section_foja_portfolio_block_item_setting',
			[
				'label' => __( 'Item Setting', 'foja' ),
			]
		);

		$this->add_responsive_control(
			'caption_vertical',
			[
				'label' => __( 'Caption Horizontal Position', 'foja' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 50,
					'unit' => '%',
				],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} figcaption .caption-inside' => 'left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'portfolio_pilih_layout!' => 'portfolio_carousel_layout',
				],
			]
		);

		$this->add_responsive_control(
			'caption_horizontal',
			[
				'label' => __( 'Caption Vertical Position', 'foja' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 50,
					'unit' => '%',
				],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} figcaption .caption-inside' => 'top: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'portfolio_pilih_layout!' => 'portfolio_carousel_layout',
				],
			]
		);

		$this->add_responsive_control(
			'text_align',
			[
				'label' => __( 'Text Align', 'foja' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'foja' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'foja' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'foja' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} figcaption .caption-inside, {{WRAPPER}} .portfolio-list-carousel .portfolio-content' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'portfolio_use_details',
			[
				'label' => __( 'Use Portofolio Details', 'foja' ),
				'description' => __( 'Allowing item to show the post excerpt and button. Go to Style Tab to edit.', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'default' => 'no',
				'condition' => [
					'portfolio_pilih_layout' => 'portfolio_masonry_layout',
				],
			]
		);

		$this->add_control(
			'portfolio_detail_bg',
			[
				'label' => __( 'Detail Background Color', 'foja' ),
				'type' => Controls_Manager::COLOR,
				'default' => 'rgba(255, 255, 255, 0.2)',
				'selectors' => [
					'{{WRAPPER}} .portfolio-details' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'portfolio_pilih_layout' => 'portfolio_masonry_layout',
					'portfolio_use_details' => 'use',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of portfolio block item setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  5. HOVER SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
		'section_foja_portfolio_block_hover_setting',
			[
				'label' => __( 'Hover Setting', 'foja' ),
			]
		);

		$this->add_control(
			'hover_effect',
			[
				'label' => __( 'Item Hover Effect', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'imghvr-push-up',
				'description' => __( 'Select hover type.', 'foja' ),
				'options' => foja_hover_effect(),
				'condition' => [
					'portfolio_pilih_layout!' => 'portfolio_carousel_layout',
				],
			]
		);

		$this->add_control(
			'hover_alt_image',
			[
				'label' => __( 'Hover with Alt Image', 'foja' ),
				'description' => __( 'You need to set the alt image in each single portfolio post.', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'No',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
			]
		);

		$this->add_control(
			'grid_item_bg',
			[
				'label' => __( 'Item Background Color', 'foja' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .item-wrap figure, {{WRAPPER}} .item-wrap figcaption' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'portfolio_pilih_layout!' => 'portfolio_carousel_layout',
				],
			]
		);

		$this->add_control(
			'grid_item_bg2',
			[
				'label' => __( 'Item Background Color 2', 'foja' ),
				'type' => Controls_Manager::COLOR,
				'default' => 'rgba(0, 0, 0, 0.47)',
				'selectors' => [
					'{{WRAPPER}} .item-wrap figure:before, {{WRAPPER}} .item-wrap figure:after, {{WRAPPER}} .item-wrap figcaption:before, {{WRAPPER}} .item-wrap figcaption:after' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'portfolio_pilih_layout!' => 'portfolio_carousel_layout',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of portfolio block hover setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  6. LAYOUT SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_foja_portfolio_layout_control',
			[
				'label' => __( 'Layout Setting', 'foja' ),
			]
		);

		$this->add_control(
			'choose_column',
			[
				'label' => __( 'Column', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 3,
				'options' => [
					1 => __( '1', 'foja' ),
					2 => __( '2', 'foja' ),
					3 => __( '3', 'foja' ),
					4 => __( '4', 'foja' ),
					5 => __( '5', 'foja' ),
				]
			]
		);

		$this->add_control(
			'tablet_choose_column',
			[
				'label' => __( 'Tablet Column', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'tablet-column-2',
				'options' => [
					'tablet-column-1' => __( '1', 'foja' ),
					'tablet-column-2' => __( '2', 'foja' ),
					'tablet-column-3' => __( '3', 'foja' ),
					'tablet-column-4' => __( '4', 'foja' ),
					'tablet-column-5' => __( '5', 'foja' ),
				],
			]
		);

		$this->add_control(
			'mobile_choose_column',
			[
				'label' => __( 'Mobile Column', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'mobile-column-1',
				'options' => [
					'mobile-column-1' => __( '1', 'foja' ),
					'mobile-column-2' => __( '2', 'foja' ),
					'mobile-column-3' => __( '3', 'foja' ),
					'mobile-column-4' => __( '4', 'foja' ),
					'mobile-column-5' => __( '5', 'foja' ),
				],
			]
		);

		$this->add_responsive_control(
			'margin_bottom',
			[
				'label' => __( 'Margin Bottom Post', 'foja' ),
				'description' => __( 'Margin bottom for each item inside this block.', 'foja' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '0',
				'selectors' => [
					'{{WRAPPER}} .grid-item, {{WRAPPER}} .masonry-item' => 'margin-bottom: {{VALUE}}px;',
				],	
			]
		);

		/*=========== padding ===========*/
		$this->add_control(
			'use_padding',
			[
				'label' => __( 'Use Padding', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'prefix_class' => 'extra-padding-',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'description' => __( 'Add a gap for each post item with padding.', 'foja' ),
				
			]
		);

		$this->add_responsive_control(
			'padding_size',
			[
				'label' => __( 'Padding Size', 'foja' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 20,
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 50,
					],
				],
				'size_units' => [ 'px', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .item-wrap' => 'padding-right: calc( {{SIZE}}{{UNIT}}/2 ); padding-left: calc( {{SIZE}}{{UNIT}}/2 );',
				],
				'condition' => [
					'use_padding' => 'use',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of portfolio block layout setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  6.1. SCROLL SETTING
		/*-----------------------------------------------------------------------------------*/
		/*$this->start_controls_section(
			'section_foja_portfolio_block_scroll_setting',
			[
				'label' => __( 'Display Setting', 'foja' ),
				'condition' => [
					'portfolio_pilih_layout!' => 'portfolio_carousel_layout',
				],
			]
		);

		$this->add_control(
			'portfolio_scroll_reveal',
			[
				'label' => __( 'Scroll Reveal Effect', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'effect-3',
				'options' => [
					'effect-1' => __( 'Effect 1', 'foja' ),
					'effect-2' => __( 'Effect 2', 'foja' ),
					'effect-3' => __( 'Effect 3', 'foja' ),
					'effect-4' => __( 'Effect 4', 'foja' ),
					'effect-5' => __( 'Effect 5', 'foja' ),
					'effect-6' => __( 'Effect 6', 'foja' ),
					'effect-7' => __( 'Effect 7', 'foja' ),
					'effect-8' => __( 'Effect 8', 'foja' ),
				],
				'description' => __( 'Animation for your post appearance when page scrolled.', 'foja' ),
				'condition' => [
					'portfolio_pilih_layout!' => 'portfolio_carousel_layout',
				],
			]
		);

		$this->end_controls_section();*/
		/*-----------------------------------------------------------------------------------
			end of post block scroll display setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  7. TITLE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
		'section_foja_portfolio_block_title_setting',
			[
				'label' => __( 'Title Setting', 'foja' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		/*=========== title ===========*/
		$this->add_control(
			'use_title',
			[
				'label' => __( 'Use Title', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'use',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'selectors' => [
					'{{WRAPPER}} .porf-hidetitle-st .portfolio-loop-title, {{WRAPPER}} .porf-hidetitle-st .portfolio-list-carousel .portfolio-content' => 'display: block',
				],
			]
		);

		$this->add_control(
			'typhography_title_color',
			[
				'label' => __( 'Title Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#111111',
				'selectors' => [
					'{{WRAPPER}} figcaption h3.portfolio-loop-title' => 'color: {{VALUE}};',
				],
				'condition' => [
					'portfolio_pilih_layout' => ['portfolio_grid_layout', 'portfolio_masonry_layout'],
					'use_title' => 'use',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_portfolio_title',
				'label' => __( 'Title Font Setting', 'foja' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} figcaption h3.portfolio-loop-title',
				'condition' => [
					'use_title' => 'use',
				],
			]
		);

		$this->add_control(
			'title_hover_effect',
			[
				'label' => __( 'Title Hover Effect', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'ih-fade',
				'description' => __( 'Select hover type.', 'foja' ),
				'options' => foja_text_hover_effect(),
				'condition' => [
					'use_title' => 'use',
				],
			]
		);

		$this->add_control(
			'title_hover_delay',
			[
				'label' => __( 'Title Delay Type', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'ih-delay-sm',
				'description' => __( 'Select delay type.', 'foja' ),
				'options' => foja_delay_effect(),
				'condition' => [
					'use_title' => 'use',
				],
			]
		);

		$this->add_responsive_control(
			'title_margin_bottom',
			[
				'label' => __( 'Margin Bottom Title', 'foja' ),
				'description' => __( 'Margin bottom for each item inside this block.', 'foja' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '20',
				'selectors' => [
					'{{WRAPPER}} .portfolio-loop-title' => 'margin-bottom: {{VALUE}}px;',
				],	
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of portfolio block title setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  8. CATEGORY SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
		'section_foja_portfolio_block_category_setting',
			[
				'label' => __( 'Category Setting', 'foja' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		/*=========== category ===========*/

		$this->add_control(
			'use_category',
			[
				'label' => __( 'Use Category', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'use',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'selectors' => [
					'{{WRAPPER}} .porf-hidetitle-st .portfolio-category' => 'display: block',
				],
			]
		);

		$this->add_control(
			'typhography_category_color',
			[
				'label' => __( 'Category Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} figcaption .portfolio-category' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_category' => 'use',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_portfolio_category',
				'label' => __( 'Category Font Setting', 'foja' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} figcaption .portfolio-category',
				'condition' => [
					'use_category' => 'use',
				],
			]
		);

		$this->add_control(
			'category_hover_effect',
			[
				'label' => __( 'Category Hover Effect', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'ih-fade',
				'description' => __( 'Select hover type.', 'foja' ),
				'options' => foja_text_hover_effect(),
				'condition' => [
					'use_category' => 'use',
				],
			]
		);

		$this->add_control(
			'category_hover_delay',
			[
				'label' => __( 'Category Delay Type', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'ih-delay-sm',
				'description' => __( 'Select delay type.', 'foja' ),
				'options' => foja_delay_effect(),
				'condition' => [
					'use_category' => 'use',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of portfolio block category setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  9. EXCERPT SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
		'section_foja_portfolio_block_excerpt_setting',
			[
				'label' => __( 'Excerpt Setting', 'foja' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'portfolio_use_details' => 'use',
				],
			]
		);

		$this->add_control(
			'use_excerpt',
			[
				'label' => __( 'Use Excerpt', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'no',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'condition' => [
					'portfolio_use_details' => 'use',
				],
			]
		);

		$this->add_responsive_control(
			'text_align_excerpt',
			[
				'label' => __( 'Excerpt Align', 'foja' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'foja' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'foja' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'foja' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .portfolio-excerpt' => 'text-align: {{VALUE}};',
				],
				'default' => 'center',
				'condition' => [
					'portfolio_use_details' => 'use',
					'use_excerpt' => 'use',
				],
			]
		);

		$this->add_control(
			'typhography_excerpt_color',
			[
				'label' => __( 'Excerpt Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => 'rgba(0,0,0,0.8)',
				'selectors' => [
					'{{WRAPPER}} .portfolio-excerpt p' => 'color: {{VALUE}};',
				],
				'condition' => [
					'portfolio_use_details' => 'use',
					'use_excerpt' => 'use',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_post_excerpt',
				'label' => __( 'Excerpt Font Setting', 'foja' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .portfolio-excerpt p',
				'condition' => [
					'portfolio_use_details' => 'use',
					'use_excerpt' => 'use',
				],
			]
		);

		$this->add_control(
			'excerpt_word',
			[
				'label' => __( 'Word Count for Post', 'foja' ),
				'description' => __( 'Margin right for each item inside this block.', 'foja' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '30',
				'condition' => [
					'portfolio_use_details' => 'use',
					'use_excerpt' => 'use',
				],	
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of portfolio block excerpt setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  10. READMORE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
		'section_foja_portfolio_block_readmore_setting',
			[
				'label' => __( 'Read More Setting', 'foja' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'portfolio_use_details' => 'use',
				],
			]
		);

		$this->add_control(
			'use_read_more',
			[
				'label' => __( 'Use Read More Button', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'no',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'condition' => [
					'portfolio_use_details' => 'use',
				],
			]
		);

		$this->add_responsive_control(
			'text_align_btn',
			[
				'label' => __( 'Button Align', 'foja' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'foja' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'foja' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'foja' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .button-continue' => 'text-align: {{VALUE}};',
				],
				'default' => 'center',
				'condition' => [
					'portfolio_use_details' => 'use',
					'use_read_more' => 'use',
				],
			]
		);

		$this->add_control(
			'typhography_readmore_color',
			[
				'label' => __( 'Read More Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .button-continue a' => 'color: {{VALUE}};',
				],
				'condition' => [
					'portfolio_use_details' => 'use',
					'use_read_more' => 'use',
				],
			]
		);

		$this->add_control(
			'typhography_readmore_bord_color',
			[
				'label' => __( 'Read More Border Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .button-continue a' => 'border-color: {{VALUE}};',
				],
				'condition' => [
					'portfolio_use_details' => 'use',
					'use_read_more' => 'use',
				],
			]
		);

		$this->add_control(
			'typhography_readmore_hover_color',
			[
				'label' => __( 'Read More Hover Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .button-continue a:hover' => 'color: {{VALUE}};',
				],
				'condition' => [
					'portfolio_use_details' => 'use',
					'use_read_more' => 'use',
				],
			]
		);

		$this->add_control(
			'typhography_readmore_bg_color',
			[
				'label' => __( 'Read More Border Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .button-continue a:hover' => 'background-color: {{VALUE}}; border-color: {{VALUE}};',
				],
				'condition' => [
					'portfolio_use_details' => 'use',
					'use_read_more' => 'use',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_post_more_btn',
				'label' => __( 'Button Font Setting', 'foja' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .button-continue a',
				'condition' => [
					'portfolio_use_details' => 'use',
					'use_read_more' => 'use',
				],
			]
		);

		$this->add_control(
			'read_more_text',
			[
				'label' => __( 'Read More Text', 'foja' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'Continue Reading',
				'title' => __( 'Enter some text', 'foja' ),
				'description' => __( 'Change the text with yours.', 'foja' ),
				'condition' => [
					'portfolio_use_details' => 'use',
					'use_read_more' => 'use',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of portfolio block excerpt setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  9. CAROUSEL SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_foja_carousel_options',
			[
				'label' => __( 'Carousel Setting', 'foja' ),
				'condition' => [
					'portfolio_pilih_layout' => 'portfolio_carousel_layout',
				],
			]
		);

		$this->add_control(
			'image_overlay',
			[
				'label' => __( 'Overlay Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => 'rgba(0, 0, 0, 0.4)',
				'selectors' => [
					'{{WRAPPER}} .portfolio-list-carousel .portfolio-thumb-img:hover .portfolio-bg-color' => 'background-color: {{VALUE}};',
				],'condition' => [
					'portfolio_pilih_layout' => 'portfolio_carousel_layout',
				],				
			]
		);

		$this->add_control(
			'choose_column_car',
			[
				'label' => __( 'Column', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 3,
				'options' => [
					'auto' => __( 'auto', 'foja' ),
					1 => __( '1', 'foja' ),
					2 => __( '2', 'foja' ),
					3 => __( '3', 'foja' ),
					4 => __( '4', 'foja' ),
					5 => __( '5', 'foja' ),
				],
				'description' => __( 'Number of slides per view (slides visible at the same time on slider&#39;s container)', 'foja' ),
			]
		);

		$this->add_control(
			'choose_column_tablet',
			[
				'label' => __( 'Column (on tablet)', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 1,
				'options' => [
					1 => __( '1', 'foja' ),
					2 => __( '2', 'foja' ),
					3 => __( '3', 'foja' ),
					4 => __( '4', 'foja' ),
					5 => __( '5', 'foja' ),
				],
				'description' => __( 'Number of slides per view (slides visible at the same time on slider&#39;s container)', 'foja' ),
			]
		);

		$this->add_control(
			'choose_column_mobile',
			[
				'label' => __( 'Column (on mobile)', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 1,
				'options' => [
					1 => __( '1', 'foja' ),
					2 => __( '2', 'foja' ),
					3 => __( '3', 'foja' ),
					4 => __( '4', 'foja' ),
					5 => __( '5', 'foja' ),
				],
				'description' => __( 'Number of slides per view (slides visible at the same time on slider&#39;s container)', 'foja' ),
			]
		);

		$this->add_control(
			'column_gap',
			[
				'label' => __( 'Carousel Column Gap', 'foja' ),
				'description' => __( 'Space between carousel items.', 'foja' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '0',			
			]
		);

		/* navigation */
		$this->add_control(
			'navigation',
			[
				'label' => __( 'Navigation', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'none' => __( 'None', 'foja' ),
					'arrows-dots' => __( 'Arrows and Dots', 'foja' ),
					'arrows' => __( 'Arrows', 'foja' ),
					'dots' => __( 'Dots', 'foja' ),
				],
				'description' => __( 'Select your navigation type.', 'foja' ),
			]
		);

		$this->add_control(
			'navigation_arrows_color',
			[
				'label' => __( 'Navigation Arrows Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .swiper-button-next:before, {{WRAPPER}} .swiper-button-prev:before' => 'color: {{VALUE}};',
				],
				'condition' => [
					'navigation' => [ 'arrows-dots', 'arrows' ],
				],
			]
		);

		$this->add_control(
			'navigation_dots_color',
			[
				'label' => __( 'Navigation Dots Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .swiper-pagination-bullet-active' => 'background: {{VALUE}};',
				],
				'condition' => [
					'navigation' => [ 'arrows-dots', 'dots' ],
				],
			]
		);

		/* auto opt */
		$this->add_control(
			'autoplay',
			[
				'label' => __( 'Autoplay', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'prefix_class' => 'slide-autoplay-',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'description' => __( 'Make your slider auto play.', 'foja' ),
			]
		);

		$this->add_control(
			'autoplay_ms',
			[
				'label' => __( 'Next Slide On', 'foja' ),
				'description' => __( 'Delay between transitions (in ms). If this parameter is not specified, auto play will be disabled.', 'foja' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '1500',
				'condition' => [
					'autoplay' => 'use',
				],			
			]
		);

		$this->add_control(
			'auto_loop',
			[
				'label' => __( 'Slides Loop', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'prefix_class' => 'slide-loop-',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'description' => __( 'Make your slider loop your items.', 'foja' ),
			]
		);

		/* misc */
		$this->add_control(
			'keyboard_nav',
			[
				'label' => __( 'Keyboard Control', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'prefix_class' => 'slide-keyboard-',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'description' => __( 'Allow to navigate the slide using keyboard arrows.', 'foja' ),
			]
		);

		$this->add_control(
			'centered_slide',
			[
				'label' => __( 'Centered Slides', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'prefix_class' => 'slide-centered-',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'description' => __( 'Allow to make centered slides.', 'foja' ),
			]
		);

		$this->add_control(
			'effect_type',
			[
				'label' => __( 'Effect Type', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'slide',
				'options' => [
					'slide' => __( 'Slide', 'foja' ),
					'fade' => __( 'Fade', 'foja' ),
					'cube' => __( 'Cube', 'foja' ),
					'coverflow' => __( 'Coverflow', 'foja' ),
					'flip' => __( 'Flip', 'foja' ),
				],
				'description' => __( 'Select your slider slide effect.', 'foja' ),
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of portfolio block carousel setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  10. FILTER SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_foja_portfolio_filter_control',
			[
				'label' => __( 'Filter Setting', 'foja' ),
			]
		);

		$this->add_control(
			'use_filter',
			[
				'label' => __( 'Use Filter', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'prefix_class' => 'mix-filter-',
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'use',
				'description' => __( 'Enable category filter yo your post loop. This changes need reload the page after save changes.', 'foja' ),
			]
		);

		$this->add_responsive_control(
			'filter_padding_size',
			[
				'label' => __( 'Filter Padding Size', 'foja' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 0,
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'size_units' => [ 'px', 'em' ],
				'selectors' => [
					'{{WRAPPER}} #portfolio-filter, {{WRAPPER}} #mobile-filter-id' => 'padding-right: calc( {{SIZE}}{{UNIT}} ); padding-left: calc( {{SIZE}}{{UNIT}} );',
				],
				'condition' => [
					'use_filter' => 'use',
				],
			]
		);

		$this->add_responsive_control(
			'filter_margin_bottom_size',
			[
				'label' => __( 'Filter Margin Bottom', 'foja' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 20,
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'size_units' => [ 'px', 'em' ],
				'selectors' => [
					'{{WRAPPER}} #portfolio-filter' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'use_filter' => 'use',
				],
			]
		);

		$this->add_control(
			'filter_style',
			[
				'label' => __( 'Filter Style', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style-1',
				'options' => [
					'style-1' => __( 'Style 1', 'foja' ),
					'style-2' => __( 'Style 2', 'foja' ),
					'style-3' => __( 'Style 3', 'foja' ),
				],
				'condition' => [
					'use_filter' => 'use',
				],
			]
		);

		$this->add_responsive_control(
			'filter_align',
			[
				'label' => __( 'Filter Align', 'foja' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'foja' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'foja' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'foja' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .filters' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
				],
			]
		);

		$this->add_control(
			'filter_style1_color',
			[
				'label' => __( 'Filter Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .filters.style-1 .filter-btn' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
					'filter_style' => 'style-1',
				],
				'separator' => 'before',
			]
		);
		$this->add_control(
			'filter_style1_hov_color',
			[
				'label' => __( 'Filter Hover Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .filters.style-1 .filter-btn:hover, {{WRAPPER}} .filters.style-1 .activeFilter .filter-btn' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
					'filter_style' => 'style-1',
				],
			]
		);
		$this->add_control(
			'filter_style1_bord_hov_color',
			[
				'label' => __( 'Filter Border Hover Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .filters.style-1 .filter-btn:hover, {{WRAPPER}} .filters.style-1 .activeFilter .filter-btn' => 'border-color: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
					'filter_style' => 'style-1',
				],
			]
		);

		/*style 2 color*/
		$this->add_control(
			'filter_style2_color',
			[
				'label' => __( 'Filter Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .filters.style-2 .filter-btn' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
					'filter_style' => 'style-2',
				],
				'separator' => 'before',
			]
		);
		$this->add_control(
			'filter_style2_hov_color',
			[
				'label' => __( 'Filter Hover Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .filters.style-2 .filter-btn:hover, {{WRAPPER}} .filters.style-2 .activeFilter .filter-btn' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
					'filter_style' => 'style-2',
				],
			]
		);
		$this->add_control(
			'filter_style2_border_hov_color',
			[
				'label' => __( 'Filter Border Hover Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .filters.style-2 .filter-btn:before' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
					'filter_style' => 'style-2',
				],
			]
		);

		/*style 3 color*/
		$this->add_control(
			'filter_style3_color',
			[
				'label' => __( 'Filter Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .filters.style-3 .filter-btn' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
					'filter_style' => 'style-3',
				],
				'separator' => 'before',
			]
		);
		$this->add_control(
			'filter_style3_bord_color',
			[
				'label' => __( 'Filter Border Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .filters.style-3 .filter-btn' => 'border-color: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
					'filter_style' => 'style-3',
				],
			]
		);
		$this->add_control(
			'filter_style3_hov_color',
			[
				'label' => __( 'Filter Hover Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .filters.style-3 .filter-btn:hover, {{WRAPPER}} .filters.style-3 .activeFilter .filter-btn' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
					'filter_style' => 'style-3',
				],
			]
		);
		$this->add_control(
			'filter_style3_bord_hov_color',
			[
				'label' => __( 'Filter Background Hover Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .filters.style-3 .filter-btn:hover, {{WRAPPER}} .filters.style-3 .activeFilter .filter-btn' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .filters.style-3 .filter-btn:hover, {{WRAPPER}} .filters.style-3 .activeFilter .filter-btn' => 'border-color: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
					'filter_style' => 'style-3',
				],
			]
		);


		$this->add_control(
			'filter_mobile_bord_color',
			[
				'label' => __( 'Filter Mobile Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} #filter-icon .bar' => 'background: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
				],
			]
		);
		$this->add_control(
			'filter_mobile_bord_bg_color',
			[
				'label' => __( 'Filter Mobile Background Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#222222',
				'selectors' => [
					'{{WRAPPER}} #filter-icon' => 'background: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
				],
			]
		);
		$this->add_control(
			'filter_mobile_bord_hov_color',
			[
				'label' => __( 'Filter Mobile Hover Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#222222',
				'selectors' => [
					'{{WRAPPER}} #filter-icon.active .bar' => 'background: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
				],
			]
		);
		$this->add_control(
			'filter_mobile_bord_bg_hov_color',
			[
				'label' => __( 'Filter Mobile Background Hover', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} #filter-icon.active' => 'background: {{VALUE}};',
				],
				'condition' => [
					'use_filter' => 'use',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of portfolio block filter setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  11. PAGINATION SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_foja_portfolio_pagination_style_setting',
			[
				'label' => __( 'Pagination Setting', 'foja' ),
			]
		);

		/* go to this folder > config > portfolio-pagination-setting.php */

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of portfolio block pagination setting
		-----------------------------------------------------------------------------------*/

	}

	protected function render() {

		$instance = $this->get_settings();

		/*-----------------------------------------------------------------------------------*/
		/*  VARIABLES LIST
		/*-----------------------------------------------------------------------------------*/

		/* ELEMENT SETTING VARIABLES */
		$portfolio_pilih_layout 	= ! empty( $instance['portfolio_pilih_layout'] ) ? $instance['portfolio_pilih_layout'] : 'portfolio_grid_layout';
		$portfolio_grid_style 		= ! empty( $instance['portfolio_grid_style'] ) ? $instance['portfolio_grid_style'] : 'portfolio_grid_style1';
		$portfolio_masonry_style 	= ! empty( $instance['portfolio_masonry_style'] ) ? $instance['portfolio_masonry_style'] : 'portfolio_masonry_style1';
		$portfolio_carousel_style 	= ! empty( $instance['portfolio_carousel_style'] ) ? $instance['portfolio_carousel_style'] : 'portfolio_carousel_style1';

		$category 		= ! empty( $instance['category'] ) ? $instance['category'] : '';
		$offset 		= ! empty( $instance['offset'] ) ? (int)$instance['offset'] : '';
		$post_per_page 	= ! empty( $instance['posts_per_page'] ) ? (int)$instance['posts_per_page'] : 6;
		$orderby 		= ! empty( $instance['orderby'] ) ? $instance['orderby'] : 'date';
		/*filter*/
		$use_filter 	=  $instance['use_filter'];
		$filter_style 	= ! empty( $instance['filter_style'] ) ? $instance['filter_style'] : 'style-1';

		// Style Setting
		$width 					= ! empty( $instance['width'] ) ? (int)$instance['width'] : 373;
		$height 				= ! empty( $instance['height'] ) ? (int)$instance['height'] : 373;
		$portfolio_image_crop 	= $instance['portfolio_image_crop'];
		$hover_effect 			= ! empty( $instance['hover_effect'] ) ? $instance['hover_effect'] : '';
		$hover_alt_image 		=  $instance['hover_alt_image'];

		$caption_vertical 		= $instance['caption_vertical'];
		$caption_horizontal 	= $instance['caption_horizontal'];

		$use_title 				= $instance['use_title'];
		$title_hover_effect 	= ! empty( $instance['title_hover_effect'] ) ? $instance['title_hover_effect'] : '';
		$title_hover_delay 		= ! empty( $instance['title_hover_delay'] ) ? $instance['title_hover_delay'] : '';
		$use_category 			= $instance['use_category'];
		$category_hover_effect 	= ! empty( $instance['category_hover_effect'] ) ? $instance['category_hover_effect'] : '';
		$category_hover_delay 	= ! empty( $instance['category_hover_delay'] ) ? $instance['category_hover_delay'] : '';

		$use_excerpt 		= $instance['use_excerpt'];
		$use_read_more 		= $instance['use_read_more'];
		$read_more_text 	= ! empty( $instance['read_more_text'] ) ? $instance['read_more_text'] : 'Continue Reading';
		$excerpt_word 		= ! empty( $instance['excerpt_word'] ) ? (int)$instance['excerpt_word'] : 30;

		// Layout Setting
		$choose_column 				= ! empty( $instance['choose_column'] ) ? $instance['choose_column'] : 3;
		$tablet_choose_column 		= ! empty( $instance['tablet_choose_column'] ) ? $instance['tablet_choose_column'] : 'tablet-column-2';
		$mobile_choose_column 		= ! empty( $instance['mobile_choose_column'] ) ? $instance['mobile_choose_column'] : 'mobile-column-1';
		$portfolio_scroll_reveal 	= ! empty( $instance['portfolio_scroll_reveal'] ) ? $instance['portfolio_scroll_reveal'] : 'effect-3';


		//$height_car 			= ! empty( $instance['height_car'] ) ? (int)$instance['height_car'] : 600;
		$choose_column_car 		= ! empty( $instance['choose_column_car'] ) ? $instance['choose_column_car'] : 3;
		$choose_column_tablet 	= ! empty( $instance['choose_column_tablet'] ) ? $instance['choose_column_tablet'] : 2;	
		$choose_column_mobile 	= ! empty( $instance['choose_column_mobile'] ) ? $instance['choose_column_mobile'] : 1;	
		$column_gap 			= ! empty( $instance['column_gap'] ) ? $instance['column_gap'] : '0';
		$navigation 			=  $instance['navigation'];
		$autoplay 				=  $instance['autoplay'];
		$autoplay_ms 			= ! empty( $instance['autoplay_ms'] ) ? (int)$instance['autoplay_ms'] : 1500;
		$auto_loop 				=  $instance['auto_loop'];
		$keyboard_nav			=  $instance['keyboard_nav'];
		$centered_slide			=  $instance['centered_slide'];

		/* PAGINATION SETTING */
		$portfolio_pagination_type 	= ! empty( $instance['portfolio_pagination_type'] ) ? $instance['portfolio_pagination_type'] : 'portfolio_pagination_none';

		// Pagination Prev/Next
		$pagination_next_text 	= ! empty( $instance['pagination_next_text'] ) ? $instance['pagination_next_text'] : 'NEWER POST';
		$pagination_prev_text 	= ! empty( $instance['pagination_prev_text'] ) ? $instance['pagination_prev_text'] : 'OLDER POST';

		// Pagination Infinte
		$loop_infinite_class 		= ! empty( $instance['loop_infinite_class'] ) ? $instance['loop_infinite_class'] : 'your-infinite-grid-1';
		$loop_infinite_text 		= ! empty( $instance['loop_infinite_text'] ) ? $instance['loop_infinite_text'] : 'Load More';
		//$loop_infinite_finish_text 	= ! empty( $instance['loop_infinite_finish_text'] ) ? $instance['loop_infinite_finish_text'] : 'There is no more';
		$loop_infinite_load_img 	= ! empty( $instance['loop_infinite_load_img'] ) ? $instance['loop_infinite_load_img'] : '';
		$load_style 				= ! empty( $instance['load_style'] ) ? $instance['load_style'] : 'style-1';
		
		$use_shadow_pagination 		=  $instance['use_shadow_pagination'];

		/* ANIMATION SETTING */
		/*$animation = ! empty( $instance['animate'] ) ? $instance['animate'] : '';
		$anime_time = ! empty( $instance['animetime'] ) ? $instance['animetime'] : '0.1';*/

		/*-----------------------------------------------------------------------------------*/
		/*  THE CONDITIONAL AREA
		/*-----------------------------------------------------------------------------------*/

		if($portfolio_pilih_layout == 'portfolio_grid_layout') {
			if($portfolio_grid_style == 'portfolio_grid_style1') {
				include ( plugin_dir_path(__FILE__).'tpl/portfolio-grid1-style.php' );
			}
		}
		if($portfolio_pilih_layout == 'portfolio_masonry_layout') {
			if($portfolio_masonry_style == 'portfolio_masonry_style1') {
				include ( plugin_dir_path(__FILE__).'tpl/portfolio-masonry1-style.php' );
			}
		}
		if($portfolio_pilih_layout == 'portfolio_carousel_layout') {
			if($portfolio_carousel_style == 'portfolio_carousel_style1') {
				include ( plugin_dir_path(__FILE__).'tpl/portfolio-carousel1-style.php' );
			}
		}


		?>

		<?php

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}

Plugin::instance()->widgets_manager->register_widget_type( new foja_portfolio_block() );