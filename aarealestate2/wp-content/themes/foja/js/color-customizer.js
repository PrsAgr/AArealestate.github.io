/*
*
*	Live Customiser Script
*	------------------------------------------------
	*	Themes Awesome Framework
	* 	Copyright foja 2017 - http://www.themesawesome.com
*
*/
( function( $ ){

	'use strict';

	/* ======================== HEADER SECTION ======================== */
			

	// HEADER

	wp.customize('bg_header',function( value ) {
		value.bind(function(to) {
			$('.header-style-2-wrap header, .header-style-3-wrap header').css('background-color', to ? to : '' );
		});
	});

	wp.customize('bg_header_dalem',function( value ) {
		value.bind(function(to) {
			$('.cd-nav .cd-half-block').css('background-color', to ? to : '' );
		});
	});

	wp.customize('border_header_dalem',function( value ) {
		value.bind(function(to) {
			$('.cd-half-block .inner').css('border-right-color', to ? to : '' );
		});
	});

	wp.customize('burger_menu',function( value ) {
		value.bind(function(to) {
			$('.cd-nav-trigger .cd-nav-icon, .cd-nav-trigger .cd-nav-icon::before, .cd-nav-trigger .cd-nav-icon:after').css('background-color', to ? to : '' );
			$('#btn-search').css('color', to ? to : '' );
		});
	});

	wp.customize('menu_style_two',function( value ) {
		value.bind(function(to) {
			$('ul.sm-clean li a').css('color', to ? to : '' );
		});
	});

	wp.customize('menu_active_two',function( value ) {
		value.bind(function(to) {
			$('.sm-clean a:hover, .sm-clean a:focus, .sm-clean a:active, .sm-clean a.highlighted').css('color', to ? to : '' );
		});
	});

	wp.customize('info_web_title',function( value ) {
		value.bind(function(to) {
			$('.cd-half-block.contact-info .inner h1').css('color', to ? to : '' );
		});
	});

	wp.customize('info_web_desc',function( value ) {
		value.bind(function(to) {
			$('.header-info-text').css('color', to ? to : '' );
		});
	});

	wp.customize('search_title',function( value ) {
		value.bind(function(to) {
			$('.header-style-2 .search__info, .header-style-3 .search__info').css('color', to ? to : '' );
		});
	});

	wp.customize('sugges_search',function( value ) {
		value.bind(function(to) {
			$('.header-style-2 .search__suggestion h4, .header-style-3 .search__suggestion h4').css('color', to ? to : '' );
			$('.header-style-2 .search__suggestion h4::before, .header-style-3 .search__suggestion h4::before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('sugges_desc_search',function( value ) {
		value.bind(function(to) {
			$('.header-style-2 .search__suggestion p, .header-style-3 .search__suggestion p').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_close',function( value ) {
		value.bind(function(to) {
			$('.header-style-2 .btn--search-close, .header-style-3 .btn--search-close').css('color', to ? to : '' );
		});
	});

	wp.customize('bg_search',function( value ) {
		value.bind(function(to) {
			$('.js .header-style-2 .search, .js .header-style-3 .search').css('background-color', to ? to : '' );
		});
	});

	wp.customize('border_search',function( value ) {
		value.bind(function(to) {
			$('.header-style-3 .search__input, .header-style-2 .search__input').css('color', to ? to : '' );
		});
	});




	/* ======================== CONTENT SECTION ======================== */

	// BLOG

	wp.customize('post_meta_border',function( value ) {
		value.bind(function(to) {
			$('.post-content .date').css('border-color', to ? to : '' );
		});
	});

	wp.customize('post_meta_text',function( value ) {
		value.bind(function(to) {
			$('.post-content .date span').css('color', to ? to : '' );
		});
	});

	wp.customize('post_title',function( value ) {
		value.bind(function(to) {
			$('.post-content .meta-wrapper h2.post-title a, .post-content h1.post-title a').css('color', to ? to : '' );
		});
	});

	wp.customize('post_hover_title',function( value ) {
		value.bind(function(to) {
			$('.post-content .meta-wrapper h2.post-title a:hover, .post-content h1.post-title a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('post_meta',function( value ) {
		value.bind(function(to) {
			$('.post-content .post-meta .meta-info span, .post-content .post-meta .meta-info span a').css('color', to ? to : '' );
			$('.post-content .post-meta .meta-info .author:after').css('background-color', to ? to : '' );
		});
	});

	wp.customize('post_meta_hover',function( value ) {
		value.bind(function(to) {
			$('.post-content .post-meta .meta-info span a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('border_long',function( value ) {
		value.bind(function(to) {
			$('.post-content .meta-wrapper .separator-line').css('background-color', to ? to : '' );
		});
	});

	wp.customize('border_short',function( value ) {
		value.bind(function(to) {
			$('.post-content .meta-wrapper .separator-line span').css('background-color', to ? to : '' );
		});
	});

	wp.customize('post_desc',function( value ) {
		value.bind(function(to) {
			$('.post-content .post-text p, .comment-content p').css('color', to ? to : '' );
		});
	});

	wp.customize('read_more',function( value ) {
		value.bind(function(to) {
			$('.post-content a.read-more').css('color', to ? to : '' );
		});
	});

	wp.customize('read_hover_more',function( value ) {
		value.bind(function(to) {
			$('.post-content a.read-more:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('read_more_border',function( value ) {
		value.bind(function(to) {
			$('.blog-item .read-more').css('border-color', to ? to : '' );
		});
	});

	wp.customize('read_more_bg_hover',function( value ) {
		value.bind(function(to) {
			$('.blog-item .read-more:hover').css('background-color', to ? to : '' );
			$('.blog-item .read-more:hover').css('border-color', to ? to : '' );
		});
	});


	// BLOG STYLE 2

	wp.customize('title_black',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item .post-content-style-2 h2.post-title a').css('color', to ? to : '' );
		});
	});

	wp.customize('title_active',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item:hover .post-content-style-2 h2.post-title a').css('color', to ? to : '' );
		});
	});

	wp.customize('blog_meta',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item .post-content-style-2 .meta-info span, .blog-style-2 article.blog-item .post-content-style-2 .meta-info a').css('color', to ? to : '' );
			$('.blog-style-2 article.blog-item .post-content-style-2 .meta-info .author:after').css('background-color', to ? to : '' );
		});
	});

	wp.customize('border_meta',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item .post-content-style-2 .date').css('border-color', to ? to : '' );
		});
	});

	wp.customize('border_meta_active',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item:hover .post-content-style-2 .date').css('border-color', to ? to : '' );
		});
	});

	wp.customize('hover_meta',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item:hover .post-content-style-2 .meta-info span, .blog-style-2 article.blog-item:hover .post-content-style-2 .meta-info a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('hover_active',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item:hover .post-content-style-2 .meta-info span, .blog-style-2 article.blog-item:hover .post-content-style-2 .meta-info a').css('color', to ? to : '' );
			$('.blog-style-2 article.blog-item:hover .post-content-style-2 .meta-info .author:after').css('background-color', to ? to : '' );
		});
	});

	wp.customize('date_meta',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item .post-content-style-2 .date').css('color', to ? to : '' );
		});
	});

	wp.customize('date_meta_active',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item:hover .post-content-style-2 .date').css('color', to ? to : '' );
		});
	});



	// SINGLE BLOG

	wp.customize('title_single',function( value ) {
		value.bind(function(to) {
			$('.post-content h2.post-title a, .post-content h1.post-title a, .blog-single .post-author .author-name a, .related-content h3').css('color', to ? to : '' );
		});
	});

	wp.customize('title_single_hover',function( value ) {
		value.bind(function(to) {
			$('.post-content h2.post-title a:hover, .post-content h1.post-title a:hover, .blog-single .post-author .author-name a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('title_separator',function( value ) {
		value.bind(function(to) {
			$('.separator-line').css('background-color', to ? to : '' );
		});
	});

	wp.customize('title_separator_second',function( value ) {
		value.bind(function(to) {
			$('.separator-line>span').css('background-color', to ? to : '' );
		});
	});

	wp.customize('category_single',function( value ) {
		value.bind(function(to) {
			$('.blog-single .blog-item .meta-wrapper span a, .blog-single .blog-item .meta-wrapper span, .single-post-style-3-inner-content .post-meta span.author-separator, .single-post-style-3-inner-content .post-meta span.vcard, .blog-single .single-post-style-3-inner-content p.date, .blog-single .single-post-style-3-inner-content .post-meta i, .single-post-style-3-inner-content .love-it-wrapper a:before, .blog-single .single-post-style-3-inner-content .post-meta span.right-section span, .blog-style-2 .post-content-style-2, .blog-item .meta-wrapper .author a, .author-separator, .blog-item .meta-wrapper .date a, .date span, .blog-item .meta-wrapper .standard-post-categories a').css('color', to ? to : '' );
		});
	});

	wp.customize('category_single_hover',function( value ) {
		value.bind(function(to) {
			$('.blog-single .blog-item .meta-wrapper .author a:hover, .blog-single .blog-item .meta-wrapper .date a:hover, .blog-single .blog-item .meta-wrapper .date span:hover, .blog-single .blog-item .meta-wrapper .standard-post-categories a:hover, .blog-single .blog-item .meta-wrapper span.date a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('category_bg_single2',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .standard-post-categories .post-categories a').css('background-color', to ? to : '' );
		});
	});

	wp.customize('category_bg_single2_hover',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .standard-post-categories .post-categories a:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('category_single2',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .standard-post-categories .post-categories a').css('background-color', to ? to : '' );
		});
	});

	wp.customize('category_single2_hover',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .standard-post-categories .post-categories a:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('comment_single',function( value ) {
		value.bind(function(to) {
			$('.meta.meta-comments a.comments span').css('color', to ? to : '' );
		});
	});

	wp.customize('comment_single_hover',function( value ) {
		value.bind(function(to) {
			$('.meta.meta-comments a.comments:hover span').css('color', to ? to : '' );
		});
	});

	wp.customize('text_single',function( value ) {
		value.bind(function(to) {
			$('.post-content .post-text p, .comment-content p, .blog-single .post-author .author-desc').css('color', to ? to : '' );
		});
	});

	wp.customize('text_quote',function( value ) {
		value.bind(function(to) {
			$('.post-text blockquote p').css('color', to ? to : '' );
		});
	});

	wp.customize('quote_border',function( value ) {
		value.bind(function(to) {
			$('blockquote').css('border-color', to ? to : '' );
		});
	});

	wp.customize('quote_icon',function( value ) {
		value.bind(function(to) {
			$('.post-text blockquote p:after').css('color', to ? to : '' );
		});
	});

	wp.customize('tag_text',function( value ) {
		value.bind(function(to) {
			$('.single-post-style .tag-wrapper a').css('color', to ? to : '' );
		});
	});

	wp.customize('tag_hover',function( value ) {
		value.bind(function(to) {
			$('.single-post-style .tag-wrapper a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('tag_bg',function( value ) {
		value.bind(function(to) {
			$('.tag-wrapper a').css('background-color', to ? to : '' );
		});
	});

	wp.customize('tag_bg_hover',function( value ) {
		value.bind(function(to) {
			$('.tag-wrapper a:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('meta_bg',function( value ) {
		value.bind(function(to) {
			$('.blog-single .post-content').css('background-color', to ? to : '' );
		});
	});

	wp.customize('meta_link_hover',function( value ) {
		value.bind(function(to) {
			$('.author-meta a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('prev_bord',function( value ) {
		value.bind(function(to) {
			$('.blog-single .next-prev-post .title i').css('color', to ? to : '' );
		});
	});

	wp.customize('prev_link',function( value ) {
		value.bind(function(to) {
			$('.blog-single .next-prev-post .title').css('color', to ? to : '' );
		});
	});

	wp.customize('prev_hover_link',function( value ) {
		value.bind(function(to) {
			$('.blog-single .next-prev-post .title:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('border_prev',function( value ) {
		value.bind(function(to) {
			$('.blog-single .next-prev-post span').css('background-color', to ? to : '' );
		});
	});

	wp.customize('comment_title',function( value ) {
		value.bind(function(to) {
			$('.comment-respond h3.comment-reply-title, .comments-title h3').css('color', to ? to : '' );
		});
	});

	wp.customize('comment_link',function( value ) {
		value.bind(function(to) {
			$('.comment-respond form p.logged-in-as a, .comment-respond form p.logged-in-as, .comment-action a').css('color', to ? to : '' );
		});
	});

	wp.customize('comment_hover_link',function( value ) {
		value.bind(function(to) {
			$('.comment-respond form p.logged-in-as a:hover, .comment-action a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_comment_bg',function( value ) {
		value.bind(function(to) {
			$('.comment-respond form p.form-submit input').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_comment_bg_hover',function( value ) {
		value.bind(function(to) {
			$('.comment-respond form p.form-submit input:hover, .contact-form-style-1 .wpcf7-submit:hover, .contact-form-style-2 .wpcf7-submit:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_comment_text',function( value ) {
		value.bind(function(to) {
			$('.comment-respond form p.form-submit input').css('color', to ? to : '' );
		});
	});

	wp.customize('next_archive',function( value ) {
		value.bind(function(to) {
			$('.archive .post-navigation .btn, .search-page .post-navigation .btn').css('color', to ? to : '' );
		});
	});


	// SIDEBAR & WIDGET

	wp.customize('sidebar_search_bg',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget.widget_search input').css('background-color', to ? to : '' );
		});
	});

	wp.customize('sidebar_search_btn',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget.widget_search button').css('background-color', to ? to : '' );
		});
	});

	wp.customize('sidebar_search_icon',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget.widget_search button i').css('color', to ? to : '' );
		});
	});

	wp.customize('sidebar_bg',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget').css('background-color', to ? to : '' );
		});
	});

	wp.customize('foja_widget_title',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget h4.widget-title').css('color', to ? to : '' );
		});
	});

	wp.customize('separator_title',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget h4.widget-title:before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('second_separator_title',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget h4.widget-title:after').css('background-color', to ? to : '' );
		});
	});

	wp.customize('link_text_sidebar',function( value ) {
		value.bind(function(to) {
			$('.sidebar #recent-posts-2 ul li a, .sidebar .widget .recent-news .post-content h5 a, .sidebar #recent-comments-2 ul li a, li.recentcomments, .sidebar #archives-2 ul li a, .sidebar #categories-2 ul li a, .sidebar #meta-2 ul li a, .latest-post-widget .latest-post-wrap .info-content h5 a, .latest-post-wrap span').css('color', to ? to : '' );
		});
	});

	wp.customize('link_hover_sidebar',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget .widget_recent_entries ul li a:hover, .sidebar .widget .recent-news .post-content h5 a:hover, .sidebar .widget .widget_recent_comments ul li a:hover, .sidebar #archives-2 ul li a:hover, .sidebar #categories-2 ul li a:hover, .sidebar #meta-2 ul li a:hover, .latest-post-widget .latest-post-wrap .info-content h5 a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('bg_tabs',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_foja_news .nav-tabs li.active, .widget.widget_foja_news .post-item:before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('text_tabs',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_foja_news .nav-tabs li.active a, .widget.widget_foja_news .post-item:before').css('color', to ? to : '' );
		});
	});

	wp.customize('bg_tabs2',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_foja_news .nav-tabs li').css('background-color', to ? to : '' );
		});
	});

	wp.customize('text_tabs2',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_foja_news .nav-tabs li a').css('color', to ? to : '' );
		});
	});

	wp.customize('text_tabs2_hover',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_foja_news .nav-tabs li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('border_tabs',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_foja_news .nav-tabs').css('border-bottom-color', to ? to : '' );
		});
	});


	// CONTACT

	wp.customize('form_bord',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-2 .contact-item2:before, .contact-ef .border-form-top, .contact-ef').css('background-color', to ? to : '' );
		});
	});

	wp.customize('form_bord_hover',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-2 .contact-item2:after').css('background-color', to ? to : '' );
		});
	});

	wp.customize('text_input',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-1 .contact-bordered input, .contact-form-style-2 .contact-item2 input, .contact-bordered.text-area textarea, .contact-form-style-2 .contact-item2 textarea').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_send',function( value ) {
		value.bind(function(to) {
			$('.foja-contact-form .contact-form-style-1 input[type=submit]').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_send_text',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-1 input.wpcf7-submit, .contact-form-style-2 input.wpcf7-submit').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_send_hover',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-1 input.wpcf7-submit:hover, .contact-form-style-2 input.wpcf7-submit:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_send_text_hover',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-1 input.wpcf7-submit:hover, .contact-form-style-2 input.wpcf7-submit:hover').css('color', to ? to : '' );
		});
	});


	/* ======================== PORTFOLIO SECTION ======================== */

	// PORTFOLIO SINGLE

	wp.customize('port_title',function( value ) {
		value.bind(function(to) {
			$('.header-style-1 .page-title h2, .post-title-porto-2 h1').css('color', to ? to : '' );
		});
	});

	wp.customize('category_portfolio',function( value ) {
		value.bind(function(to) {
			$('.portfolio-style1 span.category, .post-title-porto-2 span.category').css('color', to ? to : '' );
		});
	});

	wp.customize('detail1_title',function( value ) {
		value.bind(function(to) {
			$('.portfolio-style1 .project-details ul li span, .portfolio-details .detail-title').css('color', to ? to : '' );
		});
	});

	wp.customize('detail1_p',function( value ) {
		value.bind(function(to) {
			$('.portfolio-style1 .project-details ul li p, .portfolio-details .detail-info').css('color', to ? to : '' );
		});
	});

	wp.customize('detail1_border',function( value ) {
		value.bind(function(to) {
			$('.portfolio-style1 .project-details ul li, .portfolio-details .detail-item').css('border-bottom-color', to ? to : '' );
		});
	});

	wp.customize('detail1_desc',function( value ) {
		value.bind(function(to) {
			$('.portfolio-content p').css('color', to ? to : '' );
		});
	});

	wp.customize('detail1_pagination',function( value ) {
		value.bind(function(to) {
			$('.portfolio-pagination.next-prev-post .title').css('color', to ? to : '' );
		});
	});



	/* ======================== FOOTER SECTION ======================== */

	// FOOTER

	wp.customize('footer_text',function( value ) {
		value.bind(function(to) {
			$('.copyright-text, .footer-text-area').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_link',function( value ) {
		value.bind(function(to) {
			$('.copyright-text a, .footer-menu li a').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_hover_link',function( value ) {
		value.bind(function(to) {
			$('.copyright-text a:hover, .footer-menu li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_social',function( value ) {
		value.bind(function(to) {
			$('.footer-bottom .social-footer ul li a').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_hover_social',function( value ) {
		value.bind(function(to) {
			$('.footer-bottom .social-footer ul li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_widget_bg',function( value ) {
		value.bind(function(to) {
			$('.footer-widget-wrapper').css('background-color', to ? to : '' );
		});
	});

	wp.customize('footer_widget_title',function( value ) {
		value.bind(function(to) {
			$('.footer-widget .widget-footer h4.widget-title').css('color', to ? to : '' );
		});
	});

	wp.customize('link_text_widget',function( value ) {
		value.bind(function(to) {
			$('.footer-widget .widget-footer .latest-post-widget a, .latest-post-wrap h5, .footer-widget .widget_nav_menu ul li a, .footer-widget .widget-footer a').css('color', to ? to : '' );
		});
	});

	wp.customize('link_hover_widget',function( value ) {
		value.bind(function(to) {
			$('.footer-widget .widget-footer .latest-post-widget a:hover, .footer-widget .widget_nav_menu ul li a:hover, .footer-widget .widget-footer a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('text_widget',function( value ) {
		value.bind(function(to) {
			$('.footer-widget .textwidget').css('color', to ? to : '' );
		});
	});

	wp.customize('border_widget',function( value ) {
		value.bind(function(to) {
			$('.latest-post-wrap h5').css('border-bottom-color', to ? to : '' );
		});
	});




} )( jQuery );