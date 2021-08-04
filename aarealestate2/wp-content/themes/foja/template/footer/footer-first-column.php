<?php
$options   = get_option('foja_framework');
$prefix = 'foja_';
$layout    = $options['footer_customize_first']['enabled'];

global $post;
 
if ($layout): foreach ($layout as $key=>$value) {
	switch ($key) {
		case 'foja-copyright':
			foja_footer_part('footer/foja-copyright');
			break;
		case 'foja-social':
			foja_footer_part('footer/foja-footsocial');
			break;
		case 'foja-foot-text':
			foja_footer_part('footer/foja-foottext');
			break;
		case 'foja-foot-logo':
			foja_footer_part('footer/foja-footlogo');
			break;
		case 'foja-foot-menu':
			foja_footer_part('footer/foja-footmenu');
			break;
		}
	}
endif;