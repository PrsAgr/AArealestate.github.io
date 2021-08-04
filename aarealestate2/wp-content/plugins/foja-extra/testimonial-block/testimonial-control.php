<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class foja_testimonial_block extends Widget_Base {

	public function get_name() {
		return 'foja-testimonial-block';
	}

	public function get_title() {
		return __( 'Testimonial', 'foja' );
	}

	public function get_icon() {
		return 'eicon-slider-push';
	}

	public function get_categories() {
		return [ 'foja-general-category' ];
	}

	protected function _register_controls() {

		/*-----------------------------------------------------------------------------------
			TESTIMONIAL BLOCK INDEX
			1. ELEMENT SETTING
			2. TESTIMONIAL SETTING
			3. IMAGE SETTING
			4. BLOCKQUOTE SETTING
			5. AUTHOR SETTING
			6. JOB SETTING
			7. CAROUSEL SETTING
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  1. ELEMENT SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_foja_testimonial_block_element_setting',
			[
				'label' => __( 'Element Setting', 'foja' ),
			]
		);

		$this->add_control(
			'testimonial_pilih_layout',
			[
				'label' => __( 'Testimonial Layouts', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'testimonial_carousel_layout',
				'options' => [
					'testimonial_carousel_layout' => __( 'Carousel Layout', 'foja' ),
				],
			]
		);

		/*if testimonial layout carousel*/
		$this->add_control(
			'testimonial_carousel_style',
			[
				'label' => __( 'Carousel Styles', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'testimonial_carousel_style1',
				'options' => [
					'testimonial_carousel_style1' => __( 'Carousel 1', 'foja' ),
				],
				'condition' => [
					'testimonial_pilih_layout' => 'testimonial_carousel_layout',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of testimonial block element setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  2. TESTIMONIAL SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_foja_testimonial_block_testimonial_setting',
			[
				'label' => __( 'Testimonial Setting', 'foja' ),
			]
		);

		$this->add_control(
			'testi_item',
			[
				'label' => '',
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'text' => __( 'Testimonial Item #1', 'foja' ),
					],
					[
						'text' => __( 'Testimonial Item #2', 'foja' ),
					],
				],
				'fields' => [
					[
						'name' => 'testi_text',
						'label' => __( 'Testimonial Text', 'foja' ),
						'type' => Controls_Manager::TEXTAREA,
						'label_block' => true,
						'placeholder' => __( 'Your client quotes.', 'foja' ),
						'default' => __( 'Your client quotes.', 'foja' ),
					],
					[
						'name' => 'testi_author',
						'label' => __( 'Testimonial Author', 'foja' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Your client name.', 'foja' ),
						'default' => __( 'Your client name.', 'foja' ),
					],
					[
						'name' => 'testi_author_job',
						'label' => __( 'Author Job', 'foja' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'placeholder' => __( 'Your client job.', 'foja' ),
						'default' => __( 'Your client job.', 'foja' ),
					],
					[
						'name' => 'testi_img',
						'label' => __( 'Client Image', 'foja' ),
						'type' => Controls_Manager::MEDIA,
						'label_block' => true,
					],
				],
				'title_field' => '{{{ testi_author }}}',
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of testimonial block testimonial setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  3. IMAGE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
		'section_foja_testimonial_block_image_setting',
			[
				'label' => __( 'Image Setting', 'foja' ),
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
					'{{WRAPPER}} .testimonial-content' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'width',
			[
				'label' => __( 'Width', 'foja' ),
				'type' => Controls_Manager::TEXT,
				'default' => '100',
				'title' => __( 'Enter some text', 'foja' ),
				'description' => __( 'Crop your image width.', 'foja' ),
				'selectors' => [
					'{{WRAPPER}} .testimonial-image img' => 'width: {{VALUE}}px;',
				],
				'separator' => 'before',
			]
		);

		$this->add_control(
			'height',
			[
				'label' => __( 'Height', 'foja' ),
				'type' => Controls_Manager::TEXT,
				'default' => '100',
				'title' => __( 'Enter some text', 'foja' ),
				'selectors' => [
					'{{WRAPPER}} .testimonial-image img' => 'height: {{VALUE}}px;',
				],
				'description' => __( 'Crop your image height and also your post height.', 'foja' ),
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of testimonial block testimonial setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  4. BLOCKQUOTE SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
		'section_foja_testimonial_block_blockquote_setting',
			[
				'label' => __( 'Blockquoute Setting', 'foja' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'use_blockquote',
			[
				'label' => __( 'Use Blockquote', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'on',
				'default' => 'on',
			]
		);

		$this->add_control(
			'vertical_testi_detail',
			[
				'label' => __( 'Testimonial Detail Vertical', 'foja' ),
				'type' => Controls_Manager::TEXT,
				'default' => '20',
				'description' => __( 'Vertical align for testimonial details.', 'foja' ),
				'selectors' => [
					'{{WRAPPER}} .testimonial-detail-inner' => 'top: {{VALUE}}px;',
				],
				'condition' => [
					'use_blockquote' => 'on',
				],
			]
		);

		$this->add_control(
			'typhography_blockquote_color',
			[
				'label' => __( 'Quote Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .testimonial-content p' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_blockquote' => 'on',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typhography_blockquote_typography',
				'label' => __( 'Quote Font Setting', 'foja' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .testimonial-content p',
				'condition' => [
					'use_blockquote' => 'on',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of testimonial block blockquote setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  5. AUTHOR SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
		'section_foja_testimonial_block_author_setting',
			[
				'label' => __( 'Author Setting', 'foja' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'use_author',
			[
				'label' => __( 'Use Author', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'on',
				'default' => 'on',
			]
		);

		$this->add_control(
			'typhography_author_color',
			[
				'label' => __( 'Author Title Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .testimonial-detail-inner h5' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_author' => 'on',
				],
			]
		);

		$this->add_control(
			'author_img_color',
			[
				'label' => __( 'Author Image Border Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .testimonial-image img' => 'border: 5px solid {{VALUE}};',
				],
				'condition' => [
					'use_author' => 'on',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typhography_author_typography',
				'label' => __( 'Author Font Setting', 'foja' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .testimonial-detail-inner h5',
				'condition' => [
					'use_author' => 'on',
				],
			]
		);

		$this->add_control(
			'author_img_margin',
			[
				'label' => __( 'Image Margin Right', 'foja' ),
				'type' => Controls_Manager::TEXT,
				'default' => '10',
				'title' => __( 'Enter some value', 'foja' ),
				'description' => __( 'Margin right for your testimonial image.', 'foja' ),
				'selectors' => [
					'{{WRAPPER}} .testimonial-image' => 'margin-right: {{VALUE}}px;',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of testimonial block author setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  6. AUTHOR SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
		'section_foja_testimonial_block_author_job_setting',
			[
				'label' => __( 'Author Job Setting', 'foja' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'use_cite',
			[
				'label' => __( 'Use Author Job', 'foja' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => 'Use',
				'label_off' => 'No',
				'return_value' => 'on',
				'default' => 'on',
			]
		);

		$this->add_control(
			'typhography_cite_color',
			[
				'label' => __( 'Author Job Color', 'foja' ),
				'type' => Controls_Manager::COLOR,	
				'default' => '#000000',
				'selectors' => [
					'{{WRAPPER}} .testimonial-detail-inner cite' => 'color: {{VALUE}};',
				],
				'condition' => [
					'use_cite' => 'on',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typhography_author_job_typography',
				'label' => __( 'Author Job Font Setting', 'foja' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .testimonial-detail-inner cite',
				'condition' => [
					'use_cite' => 'on',
				],
			]
		);

		$this->end_controls_section();
		/*-----------------------------------------------------------------------------------
			end of testimonial block author job setting
		-----------------------------------------------------------------------------------*/

		/*-----------------------------------------------------------------------------------*/
		/*  7. CAROUSEL SETTING
		/*-----------------------------------------------------------------------------------*/
		$this->start_controls_section(
			'section_foja_carousel_options',
			[
				'label' => __( 'Carousel Setting', 'foja' ),
			]
		);

		$this->add_control(
			'choose_column',
			[
				'label' => __( 'Column', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 1,
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
				'label' => __( 'Column (on Tablet)', 'foja' ),
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
					'{{WRAPPER}} .swiper-button-next:before, .swiper-button-prev:before' => 'color: {{VALUE}};',
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
		/*-----------------------------------------------------------------------------------
			end of testimonial block carousel setting
		-----------------------------------------------------------------------------------*/

	}

	protected function render() {

		$instance = $this->get_settings();

		$testimonials 		= ! empty( $instance['testi_item'] ) ? $instance['testi_item'] : '';
		$testi_text 		= ! empty( $testimonial['testi_text'] ) ? $testimonial['testi_text'] : 'Your client quotes.';
		$testi_author 		= ! empty( $testimonial['testi_author'] ) ? $testimonial['testi_author'] : 'Your client name.';
		$testi_author_job 	= ! empty( $testimonial['testi_author_job'] ) ? $testimonial['testi_author_job'] : 'Your client job.';

		// Style Setting
		$width 					= ! empty( $instance['width'] ) ? (int)$instance['width'] : 100;
		$height 				= ! empty( $instance['height'] ) ? (int)$instance['height'] : 100;
		$hover_effect 			= ! empty( $instance['hover_effect'] ) ? $instance['hover_effect'] : '';
		
		

		/* ANIMATION SETTING */
		$choose_column 			= ! empty( $instance['choose_column'] ) ? $instance['choose_column'] : 1;
		$choose_column_mobile 	= ! empty( $instance['choose_column_mobile'] ) ? $instance['choose_column_mobile'] : 1;	
		$choose_column_tablet 	= ! empty( $instance['choose_column_tablet'] ) ? $instance['choose_column_tablet'] : 1;	
		$column_gap 			= ! empty( $instance['column_gap'] ) ? $instance['column_gap'] : '0';		
		
		$navigation 	=  $instance['navigation'];
		$autoplay 		=  $instance['autoplay'];
		$autoplay_ms 	= ! empty( $instance['autoplay_ms'] ) ? (int)$instance['autoplay_ms'] : 1500;
		$auto_loop 		=  $instance['auto_loop'];
		$centered_slide	=  $instance['centered_slide'];

		include ( plugin_dir_path(__FILE__).'tpl/testimonial-block.php' );



		?>

		<?php

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {}

}

Plugin::instance()->widgets_manager->register_widget_type( new foja_testimonial_block() );