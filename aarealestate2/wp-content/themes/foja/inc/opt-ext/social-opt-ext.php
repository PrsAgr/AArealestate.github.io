<?php

function foja_social_link_ext_opt() {

	$foja_social_link_opt = array(

		array(
			'id'=>'facebook_profile',
			'type' => 'text',
			'title' => esc_html__('Facebook Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'twitter_profile',
			'type' => 'text',
			'title' => esc_html__('twitter Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),


		array(
			'id'=>'google_profile',
			'type' => 'text',
			'title' => esc_html__('Google+ Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),


		array(
			'id'=>'linkedin_profile',
			'type' => 'text',
			'title' => esc_html__('linkedin Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),


		array(
			'id'=>'pinterest_profile',
			'type' => 'text',
			'title' => esc_html__('Pinterest Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'dribble_profile',
			'type' => 'text',
			'title' => esc_html__('Dribble Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'flickr_profile',
			'type' => 'text',
			'title' => esc_html__('Flickr Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'behance_profile',
			'type' => 'text',
			'title' => esc_html__('Behance Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'youtube_profile',
			'type' => 'text',
			'title' => esc_html__('Youtube Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'soundcloud_profile',
			'type' => 'text',
			'title' => esc_html__('Soundcloud Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'codepen_profile',
			'type' => 'text',
			'title' => esc_html__('Codepen Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'deviantart_profile',
			'type' => 'text',
			'title' => esc_html__('Deviantart Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'digg_profile',
			'type' => 'text',
			'title' => esc_html__('Digg Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'dropbox_profile',
			'type' => 'text',
			'title' => esc_html__('Dropbox Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'github_profile',
			'type' => 'text',
			'title' => esc_html__('Github Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'instagram_profile',
			'type' => 'text',
			'title' => esc_html__('Instagram Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'skype_profile',
			'type' => 'text',
			'title' => esc_html__('Skype Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'spotify_profile',
			'type' => 'text',
			'title' => esc_html__('Spotify Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'steam_profile',
			'type' => 'text',
			'title' => esc_html__('Steam Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'trello_profile',
			'type' => 'text',
			'title' => esc_html__('Trello Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'tumblr_profile',
			'type' => 'text',
			'title' => esc_html__('Tumblr Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'vimeo_profile',
			'type' => 'text',
			'title' => esc_html__('Vimeo Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'wechat_profile',
			'type' => 'text',
			'title' => esc_html__('Wechat Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'weibo_profile',
			'type' => 'text',
			'title' => esc_html__('Weibo Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'wordpress_profile',
			'type' => 'text',
			'title' => esc_html__('WordPress Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'xing_profile',
			'type' => 'text',
			'title' => esc_html__('Xing Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'yahoo_profile',
			'type' => 'text',
			'title' => esc_html__('Yahoo Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'yelp_profile',
			'type' => 'text',
			'title' => esc_html__('Yelp Profile', 'foja'),
			'validate' => 'url',
			'default' => ''
			),
		/* end of single post padding */
	);

	return $foja_social_link_opt;
}