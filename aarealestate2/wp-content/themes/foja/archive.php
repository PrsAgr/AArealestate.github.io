<?php get_header(); ?>

<!-- CONTENT START
============================================= -->
<section id="content" class="blog-content-wrap clearfix">

	<!-- BLOG START
	============================================= -->
	<div class="blog archives clearfix">

		<!-- BLOG LOOP START
		============================================= -->
		<div class="clearfix">
			<div class="blog-section main-blog-loop blog-style-1 infinite-container content-section clearfix">

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