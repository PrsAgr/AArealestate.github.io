<?php
function foja_styles_method() {	

	wp_enqueue_style(
	'foja-custom-style',
	get_template_directory_uri() . '/css/custom-style.css'
	);

	/*acf hero page*/
	if(class_exists('acf')) {
	}

	/*theme options*/
	if ( class_exists( 'Redux' )) {
	$options				= get_option('foja_framework');
	$foja_bordered_title	= $options['bordered_title'];

	$foja_header_2_width	= $options['header_2_width'];
	$foja_calc_header2 = '';
	if(!empty($foja_header_2_width["width"])){
		$foja_calc_header2 	= $foja_header_2_width["width"];
	}

	$foja_loader_size = $options['loader_size'];
	$foja_loader_w = '';
	if(!empty($foja_loader_size["width"])){
		$foja_loader_w	= $options['loader_size']["width"];
	}
	$foja_loader_h = '';
	if(!empty($foja_loader_size["height"])){
		$foja_loader_h	= $options['loader_size']["height"];
	}

	$foja_header_mob_bg_def	= $options['header_mob_bg_def'];
	$foja_header_mob_bg_alt	= $options['header_mob_bg_alt'];

	$foja_bordered_width = '0px';
	$foja_bordered_width_c	= $options['bordered_width'];
	if(!empty($foja_bordered_width_c["width"])){
		$foja_bordered_width 	= $foja_bordered_width_c["width"];
	}

	$content_background	= $options['content_background'];
	$content_background_img = 'background-image: none';
	if(!empty($content_background["background-image"])){
		$content_background_img_url = $content_background["background-image"];
		$content_background_img = 'background-image: url('.$content_background_img_url.');';
	}

	/* header area content */
	$logo_padding	= $options['logo_padding'];
	$logo_padd_top = '0px';
	$logo_padd_bot = '0px';
	if(!empty($logo_padding["padding-top"])){
		$logo_padd_top = $logo_padding["padding-top"];
	}
	if(!empty($logo_padding["padding-bottom"])){
		$logo_padd_bot = $logo_padding["padding-bottom"];
	}

	$mobile_padding_head	= $options['mobile_padding_head'];
	$mobile_padding_head_left = '0px';
	$mobile_padding_head_right = '0px';
	if(!empty($mobile_padding_head["padding-left"])){
		$mobile_padding_head_left = $mobile_padding_head["padding-left"];
	}
	if(!empty($mobile_padding_head["padding-right"])){
		$mobile_padding_head_right = $mobile_padding_head["padding-right"];
	}

	$mobile_margin_logo	= $options['mobile_margin_logo'];
	$mobile_margin_logo_top = '0px';
	$mobile_margin_logo_bottom = '0px';
	if(!empty($mobile_margin_logo["margin-top"])){
		$mobile_margin_logo_top = $mobile_margin_logo["margin-top"];
	}
	if(!empty($mobile_margin_logo["margin-bottom"])){
		$mobile_margin_logo_bottom = $mobile_margin_logo["margin-bottom"];
	}

	$mobile_margin_menu	= $options['mobile_margin_menu'];
	$mobile_margin_menu_top = '0px';
	$mobile_margin_menu_bottom = '0px';
	if(!empty($mobile_margin_menu["margin-top"])){
		$mobile_margin_menu_top = $mobile_margin_menu["margin-top"];
	}
	if(!empty($mobile_margin_menu["margin-bottom"])){
		$mobile_margin_menu_bottom = $mobile_margin_menu["margin-bottom"];
	}

	$header_2_width	= $options['header_2_width'];
	$header2_contain_width	= 'auto';
	if(!empty($header_2_width["width"])){
		$header2_contain_width = $header_2_width["width"];
	}

	$foja_loader_img = '';
	if (isset($options['page_loader_img'])) {
		$foja_loader_img = $options['page_loader_img']['url'];
	}
	$header_text_color = $options['header_text_color'];

	/* footer area content */

	$footer_padding	= $options['footer_padding'];
	$footwrap_padd_top = '0px';
	$footwrap_padd_bot = '0px';
	if(!empty($footer_padding["padding-top"])){
		$footwrap_padd_top = $footer_padding["padding-top"];
	}
	if(!empty($footer_padding["padding-bottom"])){
		$footwrap_padd_bot = $footer_padding["padding-bottom"];
	}

	$footer_background	= $options['footer_background'];
	if(empty($footer_background)) {
		$footer_bg_color = 'transparent';
		$footer_bg_repeat = 'no-repeat';
		$footer_bg_attach = 'inherit';
		$footer_bg_position = 'center center';
		$footer_bg_size = 'inherit';
	}
	else {
		$footer_bg_color = $footer_background["background-color"];
		$footer_bg_repeat = $footer_background["background-repeat"];
		$footer_bg_attach = $footer_background["background-attachment"];
		$footer_bg_position = $footer_background["background-position"];
		$footer_bg_size = $footer_background["background-size"];
	}
	$footer_background_img = 'background-image: none';
	if(!empty($footer_background["background-image"])){
		$footer_background_img_url = $footer_background["background-image"];
		$footer_background_img = 'background-image: url('.$footer_background_img_url.');';
	}

	$foot_col1_martop = '0px';
	$foot_col1_marleft = '0px';
	$foot_col1_marbot = '0px';
	$foot_col1_marright = '0px';
	$foot_col1_margin	= $options['foot_col1_margin'];
	if(!empty($foot_col1_margin["margin-top"])){
		$foot_col1_martop = $foot_col1_margin["margin-top"];
	}
	if(!empty($foot_col1_margin["margin-left"])){
		$foot_col1_marleft = $foot_col1_margin["margin-left"];
	}
	if(!empty($foot_col1_margin["margin-bottom"])){
		$foot_col1_marbot = $foot_col1_margin["margin-bottom"];
	}
	if(!empty($foot_col1_margin["margin-right"])){
		$foot_col1_marright = $foot_col1_margin["margin-right"];
	}

	$foot_col2_martop = '0px';
	$foot_col2_marleft = '0px';
	$foot_col2_marbot = '0px';
	$foot_col2_marright = '0px';
	$foot_col2_margin	= $options['foot_col2_margin'];
	if(!empty($foot_col2_margin["margin-top"])){
		$foot_col2_martop = $foot_col2_margin["margin-top"];
	}
	if(!empty($foot_col2_margin["margin-left"])){
		$foot_col2_marleft = $foot_col2_margin["margin-left"];
	}
	if(!empty($foot_col2_margin["margin-bottom"])){
		$foot_col2_marbot = $foot_col2_margin["margin-bottom"];
	}
	if(!empty($foot_col2_margin["margin-right"])){
		$foot_col2_marright = $foot_col2_margin["margin-right"];
	}

	$foot_col3_martop = '0px';
	$foot_col3_marleft = '0px';
	$foot_col3_marbot = '0px';
	$foot_col3_marright = '0px';
	$foot_col3_margin	= $options['foot_col3_margin'];
	if(!empty($foot_col3_margin["margin-top"])){
		$foot_col3_martop = $foot_col3_margin["margin-top"];
	}
	if(!empty($foot_col3_margin["margin-left"])){
		$foot_col3_marleft = $foot_col3_margin["margin-left"];
	}
	if(!empty($foot_col3_margin["margin-bottom"])){
		$foot_col3_marbot = $foot_col3_margin["margin-bottom"];
	}
	if(!empty($foot_col3_margin["margin-right"])){
		$foot_col3_marright = $foot_col3_margin["margin-right"];
	}

	$foot_col4_martop = '0px';
	$foot_col4_marleft = '0px';
	$foot_col4_marbot = '0px';
	$foot_col4_marright = '0px';
	$foot_col4_margin	= $options['foot_col4_margin'];
	if(!empty($foot_col4_margin["margin-top"])){
		$foot_col4_martop = $foot_col4_margin["margin-top"];
	}
	if(!empty($foot_col4_margin["margin-left"])){
		$foot_col4_marleft = $foot_col4_margin["margin-left"];
	}
	if(!empty($foot_col4_margin["margin-bottom"])){
		$foot_col4_marbot = $foot_col4_margin["margin-bottom"];
	}
	if(!empty($foot_col4_margin["margin-right"])){
		$foot_col4_marright = $foot_col4_margin["margin-right"];
	}

	/*the fonts*/
	$content_body_font			= $options['content-body-font'];
	if(!empty($content_body_font["font-weight"])) {
		$content_body_font_weight = $content_body_font["font-weight"];
	}
	else {
		$content_body_font_weight = $content_body_font["font-style"];
	}
	$content_heading_font		= $options['content-heading-font'];
	if(!empty($content_heading_font["font-weight"])) {
		$content_heading_font_weight = $content_heading_font["font-weight"];
	}
	else {
		$content_heading_font_weight = $content_heading_font["font-style"];
	}
	$header2_mobile_typography	= $options['header2-mobile-typography'];

	$heading1_typo	= $options['heading1_typo'];
	$heading2_typo	= $options['heading2_typo'];
	$heading3_typo	= $options['heading3_typo'];
	$heading4_typo	= $options['heading4_typo'];
	$heading5_typo	= $options['heading5_typo'];
	$heading6_typo	= $options['heading6_typo'];

	}

	/* container */
	$foja_custom_background				= get_theme_mod( 'custom-background' );



	/* HEADER SECTION
	================================================== */


	//header

	$bg_header	   								=	get_option('bg_header', '#1b1b1b');
	$bg_header_dalem	   						=	get_option('bg_header_dalem', '#1b1b1b');
	$border_header_dalem	   					=	get_option('border_header_dalem', '#eaeaea');
	$burger_menu	   							=	get_option('burger_menu', '#ffffff');
	$menu_style_two	   							=	get_option('menu_style_two', '#ffffff');
	$menu_active_two	   						=	get_option('menu_active_two', '#999999');
	$info_web_title	    						=	get_option('info_web_title', '#ffffff');
	$info_web_desc	    						=	get_option('info_web_desc', '#ffffff');
	$search_title	    						=	get_option('search_title', '#000000');
	$sugges_search	    						=	get_option('sugges_search', '#000000');
	$sugges_desc_search	    					=	get_option('sugges_desc_search', '#000000');
	$btn_close	    							=	get_option('btn_close', '#000000');
	$bg_search	    							=	get_option('bg_search', '#ffffff');
	$border_search	    						=	get_option('border_search', '#000000');


	/* CONTENT SECTION
	================================================== */

	//blog

	$post_meta_border	   						=	get_option('post_meta_border', '#000000');
	$post_meta_text	   							=	get_option('post_meta_text', '#000000');
	$post_title			   						=	get_option('post_title', '#000000');
	$post_hover_title			   				=	get_option('post_hover_title', '#666666');
	$post_meta	   								=	get_option('post_meta', '#000000');
	$post_meta_hover	   						=	get_option('post_meta_hover', '#666666');
	$border_long				 				=	get_option('border_long', '#dedede');
	$border_short				 				=	get_option('border_short', '#fdca1f');
	$post_desc			  		 				=	get_option('post_desc', '#333333');
	$read_more			  		 				=	get_option('read_more', '#000000');
	$read_hover_more			  		 		=	get_option('read_hover_more', '#ffffff');
	$read_more_border			  		 		=	get_option('read_more_border', '#000000');
	$read_more_bg_hover			  		 		=	get_option('read_more_bg_hover', '#000000');

	//blog style 2

	$title_black	   							=	get_option('title_black', '#000000');
	$title_active	   							=	get_option('title_active', '#ffffff');
	$blog_meta	   								=	get_option('blog_meta', '#000000');
	$hover_meta	   								=	get_option('hover_meta', '#eaeaea');
	$hover_active	   							=	get_option('hover_active', '#ffffff');
	$border_meta	   							=	get_option('border_meta', '#000000');
	$border_meta_active	   						=	get_option('border_meta_active', '#ffffff');
	$date_meta	   								=	get_option('date_meta', '#000000');
	$date_meta_active	   						=	get_option('date_meta_active', '#ffffff');

	//single blog

	$title_single			  		 			=	get_option('title_single', '#000000');
	$title_single_hover			  		 		=	get_option('title_single_hover', '#666666');
	$title_separator			  		 		=	get_option('title_separator', '#fdca1f');
	$title_separator_second			  		 	=	get_option('title_separator_second', '#666666');
	$category_single			  		 		=	get_option('category_single', '#000000');
	$category_single_hover			  		 	=	get_option('category_single_hover', '#666666');
	$category_bg_single2			  		 	=	get_option('category_bg_single2', '#000000');
	$category_bg_single2_hover			  		=	get_option('category_bg_single2_hover', '#666666');
	$category_single2			  		 		=	get_option('category_single2', '#ffffff');
	$category_single2_hover			  			=	get_option('category_single2_hover', '#ffffff');
	$comment_single			  		 			=	get_option('comment_single', '#000000');
	$comment_single_hover				 		=	get_option('comment_single_hover', '#666666');
	$text_single				 				=	get_option('text_single', '#333333');
	$text_quote				 					=	get_option('text_quote', '#333333');
	$quote_border				  		 		=	get_option('quote_border', '#fdd273');
	$quote_icon				  		 			=	get_option('quote_icon', '#111111');
	$tag_text				  		 			=	get_option('tag_text', '#000000');
	$tag_hover				  		 			=	get_option('tag_hover', '#666666');
	$tag_bg				  		 				=	get_option('tag_bg', '#f3f3f3');
	$tag_bg_hover				  		 		=	get_option('tag_bg_hover', '#e6e6e6');
	$meta_bg				  		 			=	get_option('meta_bg', '#ffffff');
	$meta_link_hover				  		 	=	get_option('meta_link_hover', '#666666');
	$prev_bord				  		 			=	get_option('prev_bord', '#000000');
	$prev_link				  		 			=	get_option('prev_link', '#000000');
	$prev_hover_link				  		 	=	get_option('prev_hover_link', '#999999');
	$border_prev				  			 	=	get_option('border_prev', '#dedede');
	$comment_title				  		 		=	get_option('comment_title', '#000000');
	$comment_link				  		 		=	get_option('comment_link', '#999999');
	$comment_hover_link				  		 	=	get_option('comment_hover_link', '#000000');
	$btn_comment_bg				  		 		=	get_option('btn_comment_bg', '#000000');
	$btn_comment_bg_hover				  		=	get_option('btn_comment_bg_hover', '#333333');
	$btn_comment_text				  		 	=	get_option('btn_comment_text', '#ffffff');
	$next_archive				  			 	=	get_option('next_archive', '#ffffff');

	//sidebar & widget

	$sidebar_search_bg	   						=	get_option('sidebar_search_bg', '#ffffff');
	$sidebar_search_btn	   						=	get_option('sidebar_search_btn', '#000000');
	$sidebar_search_icon	   					=	get_option('sidebar_search_icon', '#ffffff');
	$sidebar_bg	   								=	get_option('sidebar_bg', '#ffffff');
	$foja_widget_title	   						=	get_option('foja_widget_title', '#000000');
	$separator_title	   						=	get_option('separator_title', '#fdca1f');
	$second_separator_title	   					=	get_option('second_separator_title', '#000000');
	$link_text_sidebar	   						=	get_option('link_text_sidebar', '#000000');
	$link_hover_sidebar	   						=	get_option('link_hover_sidebar', '#666666');
	$bg_tabs	   								=	get_option('bg_tabs', '#fdca1f');
	$text_tabs	   								=	get_option('text_tabs', '#ffffff');
	$bg_tabs2	   								=	get_option('bg_tabs2', '#000000');
	$text_tabs2	   								=	get_option('text_tabs2', '#ffffff');
	$text_tabs2_hover	   						=	get_option('text_tabs2_hover', '#666666');
	$border_tabs	   							=	get_option('border_tabs', '#fdca1f');

	//Contact

	$form_bord	   								=	get_option('form_bord', '#cdcdcc');
	$form_bord_hover	   						=	get_option('form_bord_hover', '#000000');
	$text_input	   								=	get_option('text_input', '#000000');
	$btn_send	   								=	get_option('btn_send', '#fdca1f');
	$btn_send_text	   							=	get_option('btn_send_text', '#ffffff');
	$btn_send_hover	   							=	get_option('btn_send_hover', '#333333');
	$btn_send_text_hover	   					=	get_option('btn_send_text_hover', '#ffffff');


	/* PORTFOLIO
	================================================== */

	//portfolio single

	$port_title	   								=	get_option('port_title', '#000000');
	$category_portfolio	   						=	get_option('category_portfolio', '#ffb23f');
	$detail1_title	   							=	get_option('detail1_title', '#000000');
	$detail1_p	   								=	get_option('detail1_p', '#888888');
	$detail1_border	   							=	get_option('detail1_border', '#eeeeee');
	$detail1_desc	   							=	get_option('detail1_desc', '#555555');
	$detail1_pagination	   						=	get_option('detail1_pagination', '#000000');
	$detail1_hov_pagination	   					=	get_option('detail1_hov_pagination', '#666666');


	/* FOOTER
	================================================== */

	//footer

	$border_footer	   							=	get_option('border_footer', '#f2f2f2');
	$footer_text	   							=	get_option('footer_text', '#000000');
	$footer_link	   							=	get_option('footer_link', '#000000');
	$footer_hover_link	   						=	get_option('footer_hover_link', '#666666');
	$footer_social	   							=	get_option('footer_social', '#000000');
	$footer_hover_social	   					=	get_option('footer_hover_social', '#666666');
	$footer_widget_bg							=	get_option('footer_widget_bg', '#ffffff');
	$footer_widget_title	   					=	get_option('footer_widget_title', '#000000');
	$link_text_widget	   						=	get_option('link_text_widget', '#000000');
	$link_hover_widget	   						=	get_option('link_hover_widget', '#666666');
	$text_widget	   							=	get_option('text_widget', '#000000');
	$border_widget	   							=	get_option('border_widget', '#dddddd');



	/* Inline Styles Function */
	if(class_exists('acf')){
	$acf_css = "
	
	";

	wp_add_inline_style( 'foja-custom-style', $acf_css );
	}

	if(class_exists('Redux')){
	$redux_css = "
	/* theme options */

	body, #content {
		background-color: {$content_background["background-color"]};
		background-repeat: {$content_background["background-repeat"]};
		background-attachment: {$content_background["background-attachment"]};
		background-position: {$content_background["background-position"]};
		background-size: {$content_background["background-size"]};
		{$content_background_img};
	}

	.bordered{
	  background-color: {$foja_bordered_title};
	}
	.header-style-2-wrap #content .container{
		max-width: calc(100% - $foja_calc_header2);
	}

	/* container */
	.bordered-main-wrap {
		padding-left: {$foja_bordered_width};
		padding-right: {$foja_bordered_width};
	}

	@media only screen and (max-width: 768px) {
		header#header.inner-head-wrap.header-expanded, .sticky-header-wrap, .sticky-header-gap.header_fixed_noscroll.clearfix.show {
			background-color: {$foja_header_mob_bg_def};
		}
		.alt-head-wrap.sticky-header-wrap, .alt-head-wrap.sticky-header-gap.header_fixed_noscroll.clearfix {
			background-color: transparent;
		}
		.sticky-header-gap.header_fixed_noscroll.clearfix.show {
			position: relative;
    		z-index: 2;
		}
		header#header.inner-head-wrap.header-expanded.alt-head {
			background-color: {$foja_header_mob_bg_alt};
		}
	}

	#status {
	    background-image: url({$foja_loader_img});
	}

	/* header area contents */
	#header .logo-image, #header .logo-title {
		padding-top: {$logo_padd_top};
		padding-bottom: {$logo_padd_bot};
	}

	.header-style-2-wrap #header, .header-style-3-wrap #header {
		width: {$header2_contain_width};
	}
	
	#header.alt-head #showMenu span {
		background-color: {$header_text_color};
	}
	
	@media only screen and (max-width: 768px) {
		header#header.inner-head-wrap {
			padding-left: {$mobile_padding_head_left};
			padding-right: {$mobile_padding_head_right};
		}
		header#header .logo.head-item {
			margin-top: {$mobile_margin_logo_top};
			margin-bottom: {$mobile_margin_logo_bottom};
		}
		.header-style-1 .fr .head-item.search-wrap, header#header .main-menu-btn {
			margin-top: {$mobile_margin_menu_top} !important;
			margin-bottom: {$mobile_margin_menu_bottom} !important;
		}
	}

	#footer .footer-wrap {
		padding-top: {$footwrap_padd_top};
		padding-bottom: {$footwrap_padd_bot};
	}
	#footer {
		background-color: {$footer_bg_color};
		background-repeat: {$footer_bg_repeat};
		background-attachment: {$footer_bg_attach};
		background-position: {$footer_bg_position};
		background-size: {$footer_bg_size};
		{$footer_background_img};
	}
	.foot-col.item-col-1 .foot-col-item {
		margin-top: {$foot_col1_martop};
		margin-left: {$foot_col1_marleft};
		margin-bottom: {$foot_col1_marbot};
		margin-right: {$foot_col1_marright};
	}
	.foot-col.item-col-1 .foot-col-item:first-child {
		margin-left: 0;
	}
	.foot-col.item-col-1 .foot-col-item:last-child {
		margin-right: 0;
	}

	.foot-col.item-col-2 .foot-col-item {
		margin-top: {$foot_col2_martop};
		margin-left: {$foot_col2_marleft};
		margin-bottom: {$foot_col2_marbot};
		margin-right: {$foot_col2_marright};
	}
	.foot-col.item-col-2 .foot-col-item:first-child {
		margin-left: 0;
	}
	.foot-col.item-col-2 .foot-col-item:last-child {
		margin-right: 0;
	}

	.foot-col.item-col-3 .foot-col-item {
		margin-top: {$foot_col3_martop};
		margin-left: {$foot_col3_marleft};
		margin-bottom: {$foot_col3_marbot};
		margin-right: {$foot_col3_marright};
	}
	.foot-col.item-col-3 .foot-col-item:first-child {
		margin-left: 0;
	}
	.foot-col.item-col-3 .foot-col-item:last-child {
		margin-right: 0;
	}

	.foot-col.item-col-4 .foot-col-item {
		margin-top: {$foot_col4_martop};
		margin-left: {$foot_col4_marleft};
		margin-bottom: {$foot_col4_marbot};
		margin-right: {$foot_col4_marright};
	}
	.foot-col.item-col-4 .foot-col-item:first-child {
		margin-left: 0;
	}
	.foot-col.item-col-4 .foot-col-item:last-child {
		margin-right: 0;
	}	

	/*fonts*/
	body, body p, .comment-respond form p.form-submit input {
		font-family: {$content_body_font["font-family"]};
		font-weight: {$content_body_font_weight};
		text-align: {$content_body_font["text-align"]};
		font-size: {$content_body_font["font-size"]};
		line-height: {$content_body_font["line-height"]};
		word-spacing: {$content_body_font["word-spacing"]};
		letter-spacing: {$content_body_font["letter-spacing"]};
	}
	h1, h2, h3, h4, h5, h6 {
		font-family: {$content_heading_font["font-family"]};
		font-weight: {$content_heading_font_weight};
		text-align: {$content_heading_font["text-align"]};
	}

	.meta.meta-comments .comments {
		font-family: {$content_heading_font["font-family"]};
	}

	h1 {
		text-align: inherit;
		font-size: {$heading1_typo["font-size"]};
		line-height: {$heading1_typo["line-height"]};
		word-spacing: {$heading1_typo["word-spacing"]};
		letter-spacing: {$heading1_typo["letter-spacing"]};
	}
	h2 {
		text-align: inherit;
		font-size: {$heading2_typo["font-size"]};
		line-height: {$heading2_typo["line-height"]};
		word-spacing: {$heading2_typo["word-spacing"]};
		letter-spacing: {$heading2_typo["letter-spacing"]};
	}
	h3 {
		text-align: inherit;
		font-size: {$heading3_typo["font-size"]};
		line-height: {$heading3_typo["line-height"]};
		word-spacing: {$heading3_typo["word-spacing"]};
		letter-spacing: {$heading3_typo["letter-spacing"]};
	}
	h4 {
		text-align: inherit;
		font-size: {$heading4_typo["font-size"]};
		line-height: {$heading4_typo["line-height"]};
		word-spacing: {$heading4_typo["word-spacing"]};
		letter-spacing: {$heading4_typo["letter-spacing"]};
	}
	h5 {
		text-align: inherit;
		font-size: {$heading5_typo["font-size"]};
		line-height: {$heading5_typo["line-height"]};
		word-spacing: {$heading5_typo["word-spacing"]};
		letter-spacing: {$heading5_typo["letter-spacing"]};
	}
	h6 {
		text-align: inherit;
		font-size: {$heading6_typo["font-size"]};
		line-height: {$heading6_typo["line-height"]};
		word-spacing: {$heading6_typo["word-spacing"]};
		letter-spacing: {$heading6_typo["letter-spacing"]};
	}

	@media only screen and (max-width: 768px) {

		#main-wrapper.header-style-2-wrap .main-menu ul li a {
			font-weight: {$header2_mobile_typography["font-weight"]};
			text-align: {$header2_mobile_typography["text-align"]};
			font-size: {$header2_mobile_typography["font-size"]};
			line-height: {$header2_mobile_typography["line-height"]};
			word-spacing: {$header2_mobile_typography["word-spacing"]};
			letter-spacing: {$header2_mobile_typography["letter-spacing"]};
		}
	}
	";

	wp_add_inline_style( 'foja-custom-style', $redux_css );
	}

	$custom_css = "


	/* HEADER SECTION
	================================================================ */

	
	/* Header Style 3 --- */

	.header-style-2-wrap header{
		background-color: {$bg_header};
	}
	.cd-nav .cd-half-block{
		background-color: {$bg_header_dalem};
	}
	.cd-half-block .inner{
		border-right-color: {$border_header_dalem};
	}
	.cd-nav-trigger .cd-nav-icon, .cd-nav-trigger .cd-nav-icon::before, .cd-nav-trigger .cd-nav-icon:after{
		background-color: {$burger_menu};
	}
	#btn-search{
		color: {$burger_menu};
	}
	ul.sm-clean li a{
		color: {$menu_style_two};
	}
	.sm-clean a:hover, .sm-clean a:focus, .sm-clean a:active, .sm-clean a.highlighted{
		color: {$menu_active_two};
	}
	.cd-half-block.contact-info .inner h1{
		color: {$info_web_title};
	}
	.header-info-text{
		color: {$info_web_desc};
	}
	.header-style-2 .search__info, .header-style-3 .search__info{
		color: {$search_title};
	}
	.header-style-2 .search__suggestion h4, .header-style-3 .search__suggestion h4{
		color: {$sugges_search};
	}
	.header-style-2 .search__suggestion h4::before, .header-style-3 .search__suggestion h4::before{
		background-color: {$sugges_search};
	}
	.header-style-2 .search__suggestion p, .header-style-3 .search__suggestion p{
		color: {$sugges_desc_search};
	}
	.header-style-2 .btn--search-close, .header-style-3 .btn--search-close{
		color: {$btn_close};
	}
	.js .header-style-2 .search, .js .header-style-3 .search{
		background-color: {$bg_search};
	}
	.header-style-3 .search__input, .header-style-2 .search__input{
		color: {$border_search};
	}



	/* CONTENT SECTION
	================================================================ */

	/* Blog --- */

	.post-content .date{
		border-color: {$post_meta_border};
	}
	.post-content .date span{
		color: {$post_meta_text};
	}
	.post-content .meta-wrapper h2.post-title a, .post-content h1.post-title a{
		color: {$post_title};
	}
	.post-content .meta-wrapper h2.post-title a:hover, .post-content h1.post-title a:hover{
		color: {$post_hover_title};
	}
	.post-content .post-meta .meta-info span, .post-content .post-meta .meta-info span a{
		color: {$post_meta};
	}
	.post-content .post-meta .meta-info .author:after{
		background-color: {$post_meta};
	}
	.post-content .post-meta .meta-info span a:hover{
		color: {$post_meta_hover};
	}
	.post-content .meta-wrapper .separator-line{
		background-color: {$border_long};
	}
	.post-content .meta-wrapper .separator-line span{
		background-color: {$border_short};
	}
	.post-content .post-text p, .comment-content p{
		color: {$post_desc};
	}
	.post-content a.read-more{
		color: {$read_more};
	}
	.post-content a.read-more:hover{
		color: {$read_hover_more};
	}
	.blog-item .read-more{
		border-color: {$read_more_border};
	}
	.blog-item .read-more:hover{
		background-color: {$read_more_bg_hover};
		border-color: {$read_more_bg_hover};
	}


	/* Blog Style 2 --- */

	.blog-style-2 article.blog-item .post-content-style-2 h2.post-title a{
		color: {$title_black};
	}
	.blog-style-2 article.blog-item:hover .post-content-style-2 h2.post-title a{
		color: {$title_active};
	}
	.blog-style-2 article.blog-item .post-content-style-2 .meta-info span, .blog-style-2 article.blog-item .post-content-style-2 .meta-info a{
		color: {$blog_meta};
	}
	.blog-style-2 article.blog-item .post-content-style-2 .meta-info .author:after{
		background-color: {$blog_meta};
	}
	.blog-style-2 article.blog-item:hover .post-content-style-2 .meta-info span, .blog-style-2 article.blog-item:hover .post-content-style-2 .meta-info a:hover{
		color: {$hover_meta};
	}
	.blog-style-2 article.blog-item:hover .post-content-style-2 .meta-info span, .blog-style-2 article.blog-item:hover .post-content-style-2 .meta-info a{
		color: {$hover_active};
	}
	.blog-style-2 article.blog-item:hover .post-content-style-2 .meta-info .author:after{
		background-color: {$hover_active};
	}
	.blog-style-2 article.blog-item .post-content-style-2 .date{
		border-color: {$border_meta};
	}
	.blog-style-2 article.blog-item:hover .post-content-style-2 .date{
		border-color: {$border_meta_active};
	}
	.blog-style-2 article.blog-item .post-content-style-2 .date{
		color: {$date_meta};
	}
	.blog-style-2 article.blog-item:hover .post-content-style-2 .date{
		color: {$date_meta_active};
	}


	/* Single Blog --- */

	.post-content h2.post-title a, .post-content h1.post-title a, .blog-single .post-author .author-name a, .related-content h3{
		color: {$title_single};
	}
	.post-content h2.post-title a:hover, .post-content h1.post-title a:hover, .blog-single .post-author .author-name a:hover{
		color: {$title_single_hover};
	}
	.separator-line{
		background-color: {$title_separator};
	}
	.separator-line>span{
		background-color: {$title_separator_second};
	}
	.blog-single .blog-item .meta-wrapper span a, .blog-single .blog-item .meta-wrapper span, .single-post-style-3-inner-content .post-meta span.author-separator, .single-post-style-3-inner-content .post-meta span.vcard, .blog-single .single-post-style-3-inner-content p.date, .blog-single .single-post-style-3-inner-content .post-meta i, .single-post-style-3-inner-content .love-it-wrapper a:before, .blog-single .single-post-style-3-inner-content .post-meta span.right-section span, .blog-style-2 .post-content-style-2, .blog-item .meta-wrapper .author a, .author-separator, .blog-item .meta-wrapper .date a, .date span, .blog-item .meta-wrapper .standard-post-categories a{
		color: {$category_single};
	}
	.blog-single .blog-item .meta-wrapper .author a:hover, .blog-single .blog-item .meta-wrapper .date a:hover, .blog-single .blog-item .meta-wrapper .date span:hover, .blog-single .blog-item .meta-wrapper .standard-post-categories a:hover, .blog-single .blog-item .meta-wrapper span.date a:hover{
		color: {$category_single_hover};
	}
	.magazine-post-style .standard-post-categories .post-categories a{
		background-color: {$category_bg_single2};
	}
	.magazine-post-style .standard-post-categories .post-categories a:hover{
		background-color: {$category_bg_single2_hover};
	}
	.magazine-post-style .standard-post-categories .post-categories a{
		color: {$category_single2};
	}
	.magazine-post-style .standard-post-categories .post-categories a:hover{
		color: {$category_single2_hover};
	}
	.meta.meta-comments a.comments span{
		color: {$comment_single};
	}
	.meta.meta-comments a.comments:hover span{
		color: {$comment_single_hover};
	}
	.post-content .post-text p, .comment-content p, .blog-single .post-author .author-desc{
		color: {$text_single};
	}
	.post-text blockquote p{
		color: {$text_quote} !important;
	}
	blockquote{
		border-color: {$quote_border};
	}
	.post-text blockquote p:after{
		color: {$quote_icon};
	}
	.tag-wrapper a{
		color: {$tag_text};
	}
	.tag-wrapper a:hover{
		color: {$tag_hover};
	}
	.tag-wrapper a{
		background-color: {$tag_bg};
	}
	.tag-wrapper a:hover{
		background-color: {$tag_bg_hover};
	}
	.blog-single .post-content{
		background-color: {$meta_bg};
	}
	.author-meta a:hover{
		color: {$meta_link_hover};
	}
	.blog-single .next-prev-post .title i{
		color: {$prev_bord};
	}
	.blog-single .next-prev-post .title{
		color: {$prev_link};
	}
	.blog-single .next-prev-post .title:hover{
		color: {$prev_hover_link};
	}
	.blog-single .next-prev-post span{
		background-color: {$border_prev};
	}
	.comment-respond h3.comment-reply-title, .comments-title h3{
		color: {$comment_title};
	}
	.comment-respond form p.logged-in-as a, .comment-respond form p.logged-in-as, .comment-action a{
		color: {$comment_link};
	}
	.comment-respond form p.logged-in-as a:hover, .comment-action a:hover{
		color: {$comment_hover_link};
	}
	.comment-respond form p.form-submit input, .contact-form-style-1 .wpcf7-submit, .contact-form-style-2 .wpcf7-submit{
		background-color: {$btn_comment_bg};
	}
	.comment-respond form p.form-submit input:hover, .contact-form-style-1 .wpcf7-submit:hover, .contact-form-style-2 .wpcf7-submit:hover{
		background-color: {$btn_comment_bg_hover};
	}
	.comment-respond form p.form-submit input, .contact-form-style-1 .wpcf7-submit, .contact-form-style-2 .wpcf7-submit{
		color: {$btn_comment_text};
	}
	.archive .post-navigation .btn, .search-page .post-navigation .btn{
		color: {$next_archive};
	}


	/* Sidebar & Widget --- */

	.sidebar .widget.widget_search input{
		background-color: {$sidebar_search_bg};
	}
	.sidebar .widget.widget_search button{
		background-color: {$sidebar_search_btn};
	}
	.sidebar .widget.widget_search button i{
		color: {$sidebar_search_icon};
	}
	.sidebar .widget{
		background-color: {$sidebar_bg};
	}
	.sidebar .widget h4.widget-title{
		color: {$foja_widget_title};
	}
	.sidebar .widget h4.widget-title:before{
		background-color: {$separator_title} !important;
	}
	.sidebar .widget h4.widget-title:after{
		background-color: {$second_separator_title} !important;
	}
	.sidebar #recent-posts-2 ul li a, .sidebar .widget .recent-news .post-content h5 a, .sidebar #recent-comments-2 ul li a, li.recentcomments, .sidebar #archives-2 ul li a, .sidebar #categories-2 ul li a, .sidebar #meta-2 ul li a, .latest-post-widget .latest-post-wrap .info-content h5 a, .latest-post-wrap span{
		color: {$link_text_sidebar};
	}
	.sidebar .widget .widget_recent_entries ul li a:hover, .sidebar .widget .recent-news .post-content h5 a:hover, .sidebar .widget .widget_recent_comments ul li a:hover, .sidebar #archives-2 ul li a:hover, .sidebar #categories-2 ul li a:hover, .sidebar #meta-2 ul li a:hover, .latest-post-widget .latest-post-wrap .info-content h5 a:hover{
		color: {$link_hover_sidebar};
	}
	.widget.widget_foja_news .nav-tabs li.active, .widget.widget_foja_news .post-item:before{
		background-color: {$bg_tabs};
	}
	.widget.widget_foja_news .nav-tabs li.active a, .widget.widget_foja_news .post-item:before{
		color: {$text_tabs};
	}
	.widget.widget_foja_news .nav-tabs li{
		background-color: {$bg_tabs2};
	}
	.widget.widget_foja_news .nav-tabs li a{
		color: {$text_tabs2};
	}
	.widget.widget_foja_news .nav-tabs li a:hover{
		color: {$text_tabs2_hover};
	}
	.widget.widget_foja_news .nav-tabs{
		border-bottom-color: {$border_tabs};
	}


	/* Contact --- */

	.contact-form-style-2 .contact-item2:before, .contact-ef .border-form-top, .contact-ef{
		background-color: {$form_bord}
	}
	.contact-form-style-2 .contact-item2:after{
		background-color: {$form_bord_hover}
	}
	.contact-form-style-1 .contact-bordered input, .contact-form-style-2 .contact-item2 input, .contact-bordered.text-area textarea, .contact-form-style-2 .contact-item2 textarea{
		color: {$text_input}
	}
	.foja-contact-form .contact-form-style-1 input[type=submit]{
		background-color: {$btn_send}
	}
	.contact-form-style-1 input.wpcf7-submit, .contact-form-style-2 input.wpcf7-submit{
		color: {$btn_send_text}
	}
	.contact-form-style-1 input.wpcf7-submit:hover, .contact-form-style-2 input.wpcf7-submit:hover{
		background-color: {$btn_send_hover}
	}
	.contact-form-style-1 input.wpcf7-submit:hover, .contact-form-style-2 input.wpcf7-submit:hover{
		color: {$btn_send_text_hover}
	}


	/*========== PORTFOLIO SINGLE ==========*/

	.header-style-1 .page-title h2, .post-title-porto-2 h1{
		color: {$port_title};
	}
	.portfolio-style1 span.category, .post-title-porto-2 span.category{
		color: {$category_portfolio};
	}
	.portfolio-style1 .project-details ul li span, .portfolio-details .detail-title{
		color: {$detail1_title};
	}
	.portfolio-style1 .project-details ul li p, .portfolio-details .detail-info{
		color: {$detail1_p};
	}
	.portfolio-style1 .project-details ul li, .portfolio-details .detail-item{
		border-bottom-color: {$detail1_border};
	}
	.portfolio-content p{
		color: {$detail1_desc};
	}
	.portfolio-pagination.next-prev-post .title{
		color: {$detail1_pagination};
	}




	/* FOOTER SECTION
	================================================================ */

	/* Footer --- */

	.copyright-text, .footer-text-area{
		color: {$footer_text};
	}
	.copyright-text a, .footer-menu li a{
		color: {$footer_link};
	}
	.copyright-text a:hover, .footer-menu li a:hover{
		color: {$footer_hover_link};
	}
	.footer-bottom .social-footer ul li a{
		color: {$footer_social};
	}
	.footer-bottom .social-footer ul li a:hover{
		color: {$footer_hover_social};
	}
	.footer-widget-wrapper{
		background-color: {$footer_widget_bg};
	}
	.footer-widget .widget-footer h4.widget-title{
		color: {$footer_widget_title};
	}
	.footer-widget .widget-footer .latest-post-widget a, .latest-post-wrap h5, .footer-widget .widget_nav_menu ul li a, .footer-widget .widget-footer a{
		color: {$link_text_widget};
	}
	.footer-widget .widget-footer .latest-post-widget a:hover, .footer-widget .widget_nav_menu ul li a:hover, .footer-widget .widget-footer a:hover{
		color: {$link_hover_widget};
	}
	.footer-widget .textwidget{
		color: {$text_widget};
	}
	.latest-post-wrap h5, .footer-widget .widget_nav_menu ul li a:before{
		border-bottom-color: {$border_widget};
	}

	
	";

	wp_add_inline_style( 'foja-custom-style', $custom_css );

}
add_action( 'wp_enqueue_scripts', 'foja_styles_method');