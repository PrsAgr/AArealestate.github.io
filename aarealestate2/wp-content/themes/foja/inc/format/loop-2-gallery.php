<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-item'); ?>>

	<?php
	if ( class_exists( 'acf' ) ) {
	$images = get_field('foja_gallery');
	if( $images){ ?>

	<div class="slider-wrapper">
		<div class="standard-carousel-slider post-gallery carousel-container">
			<div class="carousel-wrapper owl-carousel owl-theme">
				<?php foreach( $images as $image ): ?>
				<div class="carousel-slide">
					<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />  
				</div>
				<?php endforeach; ?>
			</div>

			<div class="post-car-arrow-wrap on-top clearfix">
			</div>
		</div>
	</div>
	<?php } 
	}
	else { 
		if ( has_post_thumbnail()) { ?>
		<div class="post-thumb">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>

				<div class="foja-overlay"></div>
			</a>
		</div><!-- thumbnail-->
		<?php }
	} ?>  

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