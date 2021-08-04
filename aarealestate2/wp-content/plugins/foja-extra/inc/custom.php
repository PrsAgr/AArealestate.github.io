<?php

function foja_contactform_temp() {
	$wpcf7_array = array();

	$args = array(
	    'post_type' => 'wpcf7_contact_form',
	);
	
	$wpcf7 = get_posts($args);

	foreach( $wpcf7 as $post ) { setup_postdata( $post );
	    $wpcf7_array[$post->ID] = $post->post_title;
	} 

	return $wpcf7_array;

    wp_reset_postdata();
}

function foja_get_category() {

$output_categories = array('All');
$categories = get_categories();

  foreach($categories as $category) { 
	 $output_categories[$category->cat_ID] = $category->name;

}
return $output_categories;
}

function foja_porto_category() {

global $post;
$output_categories2 = array();
$category_terms = get_terms('portfolio-category');

	foreach($category_terms as $category) {
		$output_categories2[$category->term_id] = $category->name;
	}
	return $output_categories2;
}

function foja_order_by() {
$foja_orderby = array(

	'none'                  => 'none',
	'ID'                    => 'ID',
	'author'                => 'Author',
	'title'                 => 'Title',
	'name'                  => 'Name',
	'type'                  => 'Type',
	'date'                  => 'Date',
	'modified'              => 'Modifiede Time',
	'parent'                => 'Parent',
	'rand'                  => 'Random',
	'comment_count' => 'Total Comment',
	'menu_order'    => 'Menu Order',
	'meta_value'    => 'Popular'

);

return $foja_orderby;
}

function foja_masonry_choose_column() {

	if($choose_column == 2) {
		echo 'column-2';
	}

	elseif($choose_column == 3) {
		echo 'column-3';
	}

	elseif($choose_column == 4) {
		echo 'column-4';
	}

	elseif($choose_column == 5) {
		echo 'column-5';
	}
}

add_action( 'elementor/element/image/section_image/before_section_end', function( $element, $args ) {

	$element->add_responsive_control(
		'custom_image_align',
		[
			'type' => \Elementor\Controls_Manager::SLIDER,
			'label' => __( 'Custom Image Align', 'plugin-name' ),
			'default' => [
				'size' => 0,
				'unit' => '%',
			],
			'size_units' => [ '%' ],
			'range' => [
				'%' => [
					'min' => 0,
					'max' => 100,
				],
			],
			'selectors' => [
				'{{WRAPPER}} .elementor-image img' => 'left: {{SIZE}}{{UNIT}}; position: relative;',
			],
		]
	);
}, 10, 2 );

function scrape_instagram( $username ) {

		$username = strtolower( $username );
		$username = str_replace( '@', '', $username );

		if ( false === ( $instagram = get_transient( 'instagram-a5-'.sanitize_title_with_dashes( $username ) ) ) ) {

			$remote = wp_remote_get( 'http://instagram.com/'.trim( $username ) );

			if ( is_wp_error( $remote ) )
				return new WP_Error( 'site_down', esc_html__( 'Unable to communicate with Instagram.', 'wp-instagram-widget' ) );

			if ( 200 != wp_remote_retrieve_response_code( $remote ) )
				return new WP_Error( 'invalid_response', esc_html__( 'Instagram did not return a 200.', 'wp-instagram-widget' ) );

			$shards = explode( 'window._sharedData = ', $remote['body'] );
			$insta_json = explode( ';</script>', $shards[1] );
			$insta_array = json_decode( $insta_json[0], TRUE );

			if ( ! $insta_array )
				return new WP_Error( 'bad_json', esc_html__( 'Instagram has returned invalid data.', 'wp-instagram-widget' ) );

			if ( isset( $insta_array['entry_data']['ProfilePage'][0]['user']['media']['nodes'] ) ) {
				$images = $insta_array['entry_data']['ProfilePage'][0]['user']['media']['nodes'];
			} else {
				return new WP_Error( 'bad_json_2', esc_html__( 'Instagram has returned invalid data.', 'wp-instagram-widget' ) );
			}

			if ( ! is_array( $images ) )
				return new WP_Error( 'bad_array', esc_html__( 'Instagram has returned invalid data.', 'wp-instagram-widget' ) );

			$instagram = array();

			foreach ( $images as $image ) {

				$image['thumbnail_src'] = preg_replace( '/^https?\:/i', '', $image['thumbnail_src'] );
				$image['display_src'] = preg_replace( '/^https?\:/i', '', $image['display_src'] );

				// handle both types of CDN url
				if ( ( strpos( $image['thumbnail_src'], 's640x640' ) !== false ) ) {
					$image['thumbnail'] = str_replace( 's640x640', 's160x160', $image['thumbnail_src'] );
					$image['small'] = str_replace( 's640x640', 's320x320', $image['thumbnail_src'] );
				} else {
					$urlparts = wp_parse_url( $image['thumbnail_src'] );
					$pathparts = explode( '/', $urlparts['path'] );
					array_splice( $pathparts, 3, 0, array( 's160x160' ) );
					$image['thumbnail'] = '//' . $urlparts['host'] . implode( '/', $pathparts );
					$pathparts[3] = 's320x320';
					$image['small'] = '//' . $urlparts['host'] . implode( '/', $pathparts );
				}

				$image['large'] = $image['thumbnail_src'];

				if ( $image['is_video'] == true ) {
					$type = 'video';
				} else {
					$type = 'image';
				}

				$caption = __( 'Instagram Image', 'wp-instagram-widget' );
				if ( ! empty( $image['caption'] ) ) {
					$caption = $image['caption'];
				}

				$instagram[] = array(
					'description'   => $caption,
					'link'		  	=> trailingslashit( '//instagram.com/p/' . $image['code'] ),
					'time'		  	=> $image['date'],
					'comments'	  	=> $image['comments']['count'],
					'likes'		 	=> $image['likes']['count'],
					'thumbnail'	 	=> $image['thumbnail'],
					'small'			=> $image['small'],
					'large'			=> $image['large'],
					'original'		=> $image['display_src'],
					'type'		  	=> $type
				);
			}

			// do not set an empty transient - should help catch private or empty accounts
			if ( ! empty( $instagram ) ) {
				$instagram = base64_encode( serialize( $instagram ) );
				set_transient( 'instagram-a5-'.sanitize_title_with_dashes( $username ), $instagram, apply_filters( 'null_instagram_cache_time', HOUR_IN_SECONDS*2 ) );
			}
		}

		if ( ! empty( $instagram ) ) {

			return unserialize( base64_decode( $instagram ) );

		} else {

			return new WP_Error( 'no_images', esc_html__( 'Instagram did not return any images.', 'wp-instagram-widget' ) );

		}
	}
	function images_only( $media_item ) {

		if ( $media_item['type'] == 'image' )
			return true;

		return false;
	}


function foja_gallery_source() {
if('foja-portfolio' == get_post_type()){
	$foja_gall_sauce = array(
		'gallery_from_upload'	=> __( 'Upload or Media Library', 'foja' ),
		'gallery_meta_box'		=> __( 'Single Portfolio Gallery', 'foja' ),
	);
}
else {
	$foja_gall_sauce = array(
		'gallery_from_upload'	=> __( 'Upload or Media Library', 'foja' ),
	);
}

return $foja_gall_sauce;
}