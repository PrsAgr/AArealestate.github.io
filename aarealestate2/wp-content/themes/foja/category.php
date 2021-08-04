<?php get_header(); ?>

<!-- CONTENT START
============================================= -->
<section id="content" class="blog-content-wrap clearfix">

	<?php
	if(class_exists( 'Redux' )) {
	$options 				= get_option('foja_framework');
	$archive_hide_title 	= $options['archive_hide_title'];

	if($archive_hide_title == 'show_title') { ?>
	<div class="page-title">
		<div class="container">
			<h3 ><span><?php esc_html_e( 'Category', 'foja' ); ?></span>
			<?php single_cat_title(); ?></h3>
		</div>
	</div><!-- .page-header -->
	<?php }
	}
	else { ?>
	<div class="page-title no-option-page">
		<div class="container">
			<h3 ><span><?php esc_html_e( 'Category', 'foja' ); ?></span>
			<?php single_cat_title(); ?></h3>
		</div>
	</div><!-- .page-header -->
	<?php } ?>

	<!-- BLOG START
	============================================= -->
	<div class="blog category wrapper clearfix">

		<!-- BLOG LOOP START
		============================================= -->
		<div class="clearfix">
			<div class="blog-section main-blog-loop infinite-container blog-style-1 content-section clearfix">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); 

					get_template_part( 'inc/format/loop-archive', get_post_format() );

					endwhile; ?>
					
				<?php else : ?>

				<?php get_template_part( 'inc/format/content', 'no-result' ); ?>

				<?php endif; ?>

			</div>

			<div class="blog-standard pagination clearfix">
				<?php foja_content_nav($pages = '', $range = 2); ?>
			</div>
		</div>
		<!-- BLOG LOOP END -->
	</div><!-- search-result -->

</section>
<!-- CONTENT END -->

<?php foja_footer_choice(); ?>