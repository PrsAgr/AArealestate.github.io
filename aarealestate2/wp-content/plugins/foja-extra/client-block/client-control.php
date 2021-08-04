<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class foja_client_block extends Widget_Base {

	public function get_name() {
		return 'foja-client-block';
	}

	public function get_title() {
		return __( 'Client', 'foja' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	public function get_categories() {
		return [ 'foja-general-category' ];
	}

	protected function _register_controls() {


		/*===========GENERAL CONTROL=============*/

		$this->start_controls_section(
			'section_foja_client_block',
			[
				'label' => __( 'Client Setting', 'foja' ),
			]
		);

		$this->add_control(
			'choose_type',
			[
				'label' => __( 'Client Type', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'carousel',
				'options' => [
					'carousel' => __( 'Carousel', 'foja' ),
					'column' => __( 'Column', 'foja' ),
				]
			]
		);

		$this->add_control(
			'client_item',
			[
				'label' => '',
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'text' => __( 'Client Item #1', 'foja' ),
					],
					[
						'text' => __( 'Client Item #2', 'foja' ),
					],
				],
				'fields' => [
					[
						'name' => 'client_author',
						'label' => __( 'Client Author', 'foja' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Your client name.', 'foja' ),
						'default' => __( 'Your client name.', 'foja' ),
					],
					[
						'name' => 'client_img',
						'label' => __( 'Client Image', 'foja' ),
						'type' => Controls_Manager::MEDIA,
						'label_block' => true,
						'default' => [
							'url' => Utils::get_placeholder_image_src(),
						],
					],
					[
						'name' => 'client_link',
						'label' => __( 'Client Link', 'foja' ),
						'type' => Controls_Manager::URL,
						'label_block' => true,
						'placeholder' => __( 'http://your-link.com', 'foja' ),
					],
				],
				'title_field' => '{{{ client_author }}}',
			]
		);

		$this->end_controls_section();

		/*===========Column Setting=============*/

		$this->start_controls_section(
		'section_foja_column_client',
			[
				'label' => __( 'Column Setting', 'foja' ),
				'condition' => [
					'choose_type' => 'column',
				],	
			]
		);

		$this->add_control(
			'column_choose_column',
			[
				'label' => __( 'Column Dekstop', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'column-3',
				'options' => [
					'column-1' => __( '1', 'foja' ),
					'column-2' => __( '2', 'foja' ),
					'column-3' => __( '3', 'foja' ),
					'column-4' => __( '4', 'foja' ),
					'column-5' => __( '5', 'foja' ),
				],
			]
		);

		$this->add_control(
			'tablet_choose_column',
			[
				'label' => __( 'Column Tablet', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'tablet-column-3',
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
				'label' => __( 'Column Mobile', 'foja' ),
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
			'item_padding_size',
			[
				'label' => __( 'Padding Size', 'foja' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 15,
					'unit' => 'px',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 50,
					],
				],
				'size_units' => [ 'px', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .client-content.column' => 'padding-right: {{SIZE}}{{UNIT}}; padding-left: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'item_margin_bottom',
			[
				'label' => __( 'Margin Bottom', 'foja' ),
				'description' => __( 'Margin bottom for each item inside this block.', 'foja' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '20',
				'selectors' => [
					'{{WRAPPER}} .client-content' => 'margin-bottom: {{VALUE}}px;',
				],	
			]
		);

		$this->end_controls_section();

		/*===========SLIDE=============*/

		$this->start_controls_section(
			'section_foja_carousel_options',
			[
				'label' => __( 'Carousel Setting', 'foja' ),
				'condition' => [
					'choose_type' => 'carousel',
				],	
			]
		);

		$this->add_control(
			'choose_column',
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
				'default' => 3,
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
				'label' => __( 'Column Gap', 'foja' ),
				'description' => __( 'Space between carousel items.', 'foja' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '0',
			]
		);

		$this->add_control(
			'column_gap_tablet',
			[
				'label' => __( 'Column Gap Tablet', 'foja' ),
				'description' => __( 'Space between carousel items.', 'foja' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '0',
			]
		);

		$this->add_control(
			'column_gap_mobile',
			[
				'label' => __( 'Column Gap Mobile', 'foja' ),
				'description' => __( 'Space between carousel items.', 'foja' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '0',
			]
		);

		$this->add_control(
			'width',
			[
				'label' => __( 'Width', 'foja' ),
				'type' => Controls_Manager::TEXT,
				'default' => '600',
				'title' => __( 'Enter some text', 'foja' ),
				'description' => __( 'Crop your image width.', 'foja' ),
			]
		);

		$this->add_control(
			'height',
			[
				'label' => __( 'Height', 'foja' ),
				'type' => Controls_Manager::TEXT,
				'default' => '600',
				'title' => __( 'Enter some text', 'foja' ),
				'description' => __( 'Crop your image height and also your post height.', 'foja' ),
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
					'{{WRAPPER}} .carousel-button-next:before, .carousel-button-prev:before' => 'color: {{VALUE}};',
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
					'{{WRAPPER}} .owl-dot' => 'background: {{VALUE}};',
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

		$this->end_controls_section();

	}

	protected function render() {

		$instance = $this->get_settings();

		$choose_type 		= ! empty( $instance['choose_type'] ) ? $instance['choose_type'] : 'carousel';
		$clients 			= ! empty( $instance['client_item'] ) ? $instance['client_item'] : '';
		$client_author 		= ! empty( $client['client_author'] ) ? $client['client_author'] : 'Your client name.';
		$client_image 		= ! empty( $client['client_img'] ) ? $client['client_img'] : '';
		$client_link 		= ! empty( $client['client_link'] ) ? $client['client_link'] : 'http://your-link.com';

		// Style Setting
		$column_choose_column 	= ! empty( $instance['column_choose_column'] ) ? $instance['column_choose_column'] : 'column-3';
		$tablet_choose_column 	= ! empty( $instance['tablet_choose_column'] ) ? $instance['tablet_choose_column'] : 'tablet-column-3';
		$mobile_choose_column 	= ! empty( $instance['mobile_choose_column'] ) ? $instance['mobile_choose_column'] : 'mobile-column-1';
		

		/* SLIDER SETTING */
		$choose_column 			= ! empty( $instance['choose_column'] ) ? $instance['choose_column'] : 3;
		$choose_column_tablet 	= ! empty( $instance['choose_column_tablet'] ) ? $instance['choose_column_tablet'] : 3;	
		$choose_column_mobile 	= ! empty( $instance['choose_column_mobile'] ) ? $instance['choose_column_mobile'] : 1;	
		$column_gap 			= ! empty( $instance['column_gap'] ) ? $instance['column_gap'] : '0';
		$column_gap_tablet 		= ! empty( $instance['column_gap_tablet'] ) ? $instance['column_gap_tablet'] : '0';
		$column_gap_mobile 		= ! empty( $instance['column_gap_mobile'] ) ? $instance['column_gap_mobile'] : '0';
		
		$navigation 	=  $instance['navigation'];
		$autoplay 		=  $instance['autoplay'];
		$autoplay_ms 	= ! empty( $instance['autoplay_ms'] ) ? (int)$instance['autoplay_ms'] : 1500;
		$auto_loop 		=  $instance['auto_loop'];
		$centered_slide	=  $instance['centered_slide'];

		/* Choose Style */
		if($choose_type == 'carousel') {
			include ( plugin_dir_path(__FILE__).'tpl/client-carousel-block.php' );
		}
		elseif($choose_type == 'column') {
			include ( plugin_dir_path(__FILE__).'tpl/client-column-block.php' );
		}



		?>

		<?php

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}

Plugin::instance()->widgets_manager->register_widget_type( new foja_client_block() );