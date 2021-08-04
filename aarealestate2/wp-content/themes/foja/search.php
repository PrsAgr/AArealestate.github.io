<?php get_header(); ?>

<!-- CONTENT START
============================================= -->
<section id="content" class="search-page blog-content-wrap clearfix">

	<div class="page-title<?php if(!class_exists( 'Redux' )) { ?> no-option-page<?php } ?>">
		<div class="container">
	        <h3 ><span><?php esc_html_e( 'Search Results', 'foja' ); ?></span>
	        <?php printf( esc_html__( '%s', 'foja' ), get_search_query() ); ?></h3>
	    </div>
    </div><!-- .page-header -->

	<!-- BLOG START
	============================================= -->
	<div class="blog search-result clearfix">

		<!-- BLOG LOOP START
		============================================= -->
		<div class="clearfix">
			<div class="blog-section main-blog-loop infinite-container blog-style-2 content-section clearfix">

				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); 

						get_template_part( 'inc/format/loop', get_post_format() );

					endwhile; ?>

				<?php else : ?>
					<div class="container">
						<?php get_template_part( 'inc/format/content-search', 'no-result' ); ?>
					</div>
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