<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-item'); ?>>

	<div class="featured-video clearfix">
		<?php 
		if ( class_exists( 'acf' ) ) {
			$video_url = get_field('video_url');
			$video_embed = get_field('video_embed');
			$video_file = get_field('video_file');
			
			if($video_url !== ''){ 
				echo wp_oembed_get( esc_url( $video_url ));
			} 

			elseif($video_embed !== '') { 
				echo wp_specialchars_decode( $video_embed );
			}

			elseif($video_file !== '') {  ?>
			<?php echo do_shortcode( '[video src="'. sanitize_text_field( $video_file ).'"]' ) ?>  
		<?php } 
	} ?>
	</div>

	<div class="post-content-wrap">
		<div class="post-content">

			<div class="meta-wrapper clearfix">
					
				<h2 class="post-title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<div class="separator-line"><span></span></div>

				<div class="post-meta clearfix">
					<div class="meta-info">
						<span class="author meta-item">
							<span class="author-separator"><?php esc_html_e( 'by', 'foja' ); ?></span>
							<span class="vcard"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> <?php echo get_the_author_meta( 'display_name' ); ?></a></span>
						</span>
						<span class="standard-post-categories meta-item">
							<?php esc_html_e( 'in ', 'foja' ); ?><?php the_category(', '); ?>
						</span>
					</div>
				</div>

			</div>

			<div class="date">
				<a href="<?php the_permalink(); ?>">
					<span class="thedate"><?php echo get_the_date('d'); ?></span>
					<span class="month"><?php echo get_the_date('F'); ?></span><span class="year"><?php echo get_the_date('Y'); ?></span>
				</a>
			</div>

			<div class="post-text">
				<?php the_excerpt(); ?>
			</div>

			<a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'foja' ); ?></a>
		</div>
	</div><!-- post-content-wrap -->

</article>