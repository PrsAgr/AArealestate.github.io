<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class foja_portfolio_pagination extends Widget_Base {

	public function get_name() {
		return 'foja-portfolio-page';
	}

	public function get_title() {
		return __( 'Pagination', 'foja' );
	}

	public function get_icon() {
		return 'eicon-navigation-horizontal';
	}

	public function get_categories() {
		return [ 'foja-portfolio-category' ];
	}

	protected function _register_controls() {

		/*===========NEWS CONTROL=============*/

		$this->start_controls_section(
			'foja_portfolio_pagination_control',
			[
				'label' => __( 'Pagination Setting', 'foja' ),
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_text_block',
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .portfolio-pagination a',
			]
		);

		$this->add_control(
			'color_text_block',
			[
				'label' => __( 'Pagination Color', 'foja' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .portfolio-pagination a' => 'color: {{VALUE}};',
				],
				'default' => '#000000',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$instance = $this->get_settings();

		//$custom_text 	= ! empty( $instance['custom_text'] ) ? $instance['custom_text'] : '';

		include ( plugin_dir_path(__FILE__).'tpl/portfolio-page-block.php' );

	}

	protected function content_template() {}

	public function render_plain_content( $instance = [] ) {

	}

}

Plugin::instance()->widgets_manager->register_widget_type( new foja_portfolio_pagination() );