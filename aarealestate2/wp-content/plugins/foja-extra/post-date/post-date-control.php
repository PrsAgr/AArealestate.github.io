<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class foja_post_date extends Widget_Base {

	public function get_name() {
		return 'foja-post-date';
	}

	public function get_title() {
		return __( 'Post Date', 'foja' );
	}

	public function get_icon() {
		return 'fa fa-clock-o';
	}

	public function get_categories() {
		return [ 'foja-portfolio-category' ];
	}

	protected function _register_controls() {

		/*===========NEWS CONTROL=============*/

		$this->start_controls_section(
			'foja_post_date_control',
			[
				'label' => __( 'Date Setting', 'foja' ),
			]
		);

		$this->add_control(
			'date_type',
			[
				'label' => __( 'Date Type', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'publish',
				'options' => [
					'publish' => __( 'Publish Date', 'foja' ),
					'modify' => __( 'Modify Date', 'foja' ),
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_date_block',
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .post-date',
			]
		);

		$this->add_control(
			'color_text_block',
			[
				'label' => __( 'Date Color', 'foja' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .post-date' => 'color: {{VALUE}};',
				],
				'default' => '#000000',
			]
		);

		$this->add_responsive_control(
			'text_block_align',
			[
				'label' => __( 'Title Alignment', 'foja' ),
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
					'justify' => [
						'title' => __( 'Justified', 'foja' ),
						'icon' => 'fa fa-align-justify',
					],
				],
				'default' => 'left',
				'selectors' => [
					'{{WRAPPER}}' => 'text-align: {{VALUE}};',
				],
				'separator' => 'before',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$instance = $this->get_settings();

		$date_type 	= ! empty( $instance['date_type'] ) ? $instance['date_type'] : 'publish';

		include ( plugin_dir_path(__FILE__).'tpl/post-date-block.php' );

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {

	}

}

Plugin::instance()->widgets_manager->register_widget_type( new foja_post_date() );