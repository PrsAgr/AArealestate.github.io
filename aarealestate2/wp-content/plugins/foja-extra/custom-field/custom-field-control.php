<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class foja_portfolio_custom_fields extends Widget_Base {

	public function get_name() {
		return 'foja-portfolio-custom-field';
	}

	public function get_title() {
		return __( 'Portfolio Custom Fields', 'foja' );
	}

	public function get_icon() {
		return 'fa fa-plus-square';
	}

	public function get_categories() {
		return [ 'foja-portfolio-category' ];
	}

	protected function _register_controls() {

		/*===========NEWS CONTROL=============*/

		$this->start_controls_section(
			'foja_portfolio_custom_fields_control',
			[
				'label' => __( 'Details Setting', 'foja' ),
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label' => __( 'Detail Color', 'foja' ),
				'name' => 'typography_detail1_block',
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .detail-title',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label' => __( 'Detail Color', 'foja' ),
				'name' => 'typography_detail2_block',
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .detail-info',
			]
		);

		$this->add_control(
			'detail_title_color',
			[
				'label' => __( 'Detail Title Color', 'foja' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .detail-title' => 'color: {{VALUE}};',
				],
				'default' => '#000000',
			]
		);

		$this->add_control(
			'detail_text_color',
			[
				'label' => __( 'Detail Text Color', 'foja' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .detail-info' => 'color: {{VALUE}};',
				],
				'default' => '#000000',
			]
		);

		$gallery_columns = range( 1, 10 );
		$gallery_columns = array_combine( $gallery_columns, $gallery_columns );

		$this->add_control(
			'detail_columns',
			[
				'label' => __( 'Details Columns', 'foja' ),
				'type' => Controls_Manager::SELECT,
				'default' => 4,
				'options' => $gallery_columns,
			]
		);

		$this->add_responsive_control(
			'detail_block_align',
			[
				'label' => __( 'Detail Alignment', 'foja' ),
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
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$instance = $this->get_settings();

		//$custom_text 	= ! empty( $instance['custom_text'] ) ? $instance['custom_text'] : '';

		include ( plugin_dir_path(__FILE__).'tpl/custom-field-block.php' );

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {

	}

}

Plugin::instance()->widgets_manager->register_widget_type( new foja_portfolio_custom_fields() );