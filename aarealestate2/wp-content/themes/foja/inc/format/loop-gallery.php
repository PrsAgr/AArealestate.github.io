<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-item column column-2'); ?>>

	<div class="post-content-style-2">
		<div class="inner-container post-content">

			<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

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

			<div class="date">
				<a href="<?php the_permalink(); ?>">
					<span class="thedate"><?php echo get_the_date('d'); ?></span>
					<span class="month"><?php echo get_the_date('F'); ?></span><span class="year"><?php echo get_the_date('Y'); ?></span>
				</a>
			</div>
		</div>
	</div>

	<?php if ( has_post_thumbnail()) {
	$img_url_blog = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
	<div class="post-thumb img-loaded" style="background-image: url(<?php echo esc_url( $img_url_blog[0] ); ?>);">

		<div class="foja-overlay"></div>
	</div><!-- thumbnail-->
	<?php }
	else{
		echo '<div class="post-thumb no-thumb img-loaded">
		<div class="foja-overlay"></div>
	</div><!-- thumbnail-->';
		} ?>

</article>