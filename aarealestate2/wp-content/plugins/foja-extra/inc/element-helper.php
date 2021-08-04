<?php
namespace Elementor;

function foja_general_elementor_init(){
	Plugin::instance()->elements_manager->add_category(
		'foja-general-category',
		[
			'title'  => 'Main Elements',
			'icon' => 'font'
		],
		1
	);
}
add_action('elementor/init','Elementor\foja_general_elementor_init');

function foja_portfolio_elementor_init(){
	Plugin::instance()->elements_manager->add_category(
		'foja-portfolio-category',
		[
			'title'  => 'Portfolio Elements',
			'icon' => 'font'
		],
		2
	);
}
add_action('elementor/init','Elementor\foja_portfolio_elementor_init');