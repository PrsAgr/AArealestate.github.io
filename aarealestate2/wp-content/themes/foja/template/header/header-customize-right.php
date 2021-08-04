<?php
$options   = get_option('foja_framework');
$prefix = 'foja_';
$layout    = $options['header_customize_right']['enabled'];
 
if ($layout): foreach ($layout as $key=>$value) {
	switch ($key) {
		case 'foja-logo':
			if ( is_front_page() && is_home() ) {
				foja_header_part('header/logo-standard');
			}
			elseif ( is_home() ) {
				foja_header_part('header/logo-standard');
			}
			elseif ( is_front_page() ) {
				foja_header_part('header/logos');
			}
			elseif(is_single('post')) {
				foja_header_part('header/logo-standard');
			}
			elseif(is_singular( 'post' )) {
				foja_header_part('header/logo-standard');
			}
			elseif('foja-portfolio' == get_post_type()) {
				foja_header_part('header/logos');
			}
			elseif( is_page_template() ) {
				foja_header_part('header/logos');
			}
			elseif( is_page() ) {
				foja_header_part('header/logos');
			}
			elseif( is_archive() || is_search() || is_404() ) {
				foja_header_part('header/logo-standard');
			}
			break;
		case 'foja-menus':
			foja_header_part('header/menus');
			break;
		case 'foja-sec-menus':
			foja_header_part('header/menus-sec');
			break;
		case 'foja-search':
			foja_header_part('header/search-btn');
			break;
		}
	}
endif;