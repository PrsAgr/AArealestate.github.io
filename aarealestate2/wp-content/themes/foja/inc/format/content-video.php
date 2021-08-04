<article  id="post-<?php the_ID(); ?>" <?php post_class( 'blog-item hentry'); ?>>

	<div class="post-content-wrap">
		<?php 
		if ( class_exists( 'acf' ) ) { ?>
		<div class="featured-video clearfix">
			<?php 
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
			<?php } ?>
		</div>
		<?php } ?>

		<div class="post-content">

			<div class="meta-wrapper clearfix">
				<h1 class="post-title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				
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

			<div class="content-inner-wrapper clearfix">
				<div class="post-text entry-content">
					<?php 
						the_content(); 
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'foja' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'foja' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) ); 
					?>

					<?php if(has_tag()) { ?>
						<div class="meta-bottom clearfix">
							<div class="tag-wrapper"><?php the_tags('','',''); ?></div>
						</div>
					<?php } ?>
				</div>
			</div>

		</div>
	</div>

	<?php foja_single_pagination(); ?>

	<?php if ( !post_password_required()) {
		get_template_part( 'inc/part/related', 'post' ); 
	} ?>

</article><!-- #post-<?php the_ID(); ?> -->

<?php 
	if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
	if ( comments_open() || '0' != get_comments_number() ) comments_template(); 
?>