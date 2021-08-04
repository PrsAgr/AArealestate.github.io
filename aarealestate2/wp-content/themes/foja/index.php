<?php get_header(); ?>

<?php 
if ( class_exists( 'Redux' ) ) {
	$options = get_option('foja_framework');
	$foja_blog_layout_style = $options['blog_style'];
	$foja_blog_style = $options['loop_blog_style'];
	$foja_loop_nav_type = $options['loop_nav_type'];
	$foja_blog_infinite_style = $options['blog_infinite_style'];

?>
<!-- CONTENT START
============================================= -->
<section id="content" class="blog-content-wrap clearfix">

	<!-- BLOG START
	============================================= -->
	<div class="blog blog-loop right-sidebar clearfix">
		<?php if($foja_blog_layout_style == 'blog-2') { ?>
        <div class="container clearfix">
        	<div class="<?php if($foja_blog_style == 'sidebar' && is_active_sidebar( 'primary-sidebar' )) { ?>row <?php } ?>clearfix">
        <?php } ?>
				<!-- BLOG LOOP START
				============================================= -->
				<div class="<?php if($foja_blog_style == 'sidebar' && is_active_sidebar( 'primary-sidebar' )) { ?>column column-2of3 <?php } ?> clearfix">
	                <div class="blog-section<?php if($foja_blog_layout_style == 'blog-1') { ?> blog-style-2<?php } ?> main-blog-loop infinite-container content-section clearfix">

					<?php while ( have_posts() ) : the_post(); 
						
						if($foja_blog_layout_style == 'blog-1') {
							get_template_part( 'inc/format/loop', get_post_format() );
						}
						elseif($foja_blog_layout_style == 'blog-2') {
							get_template_part( 'inc/format/loop-2', get_post_format() );
						}

					endwhile; // end of the loop. ?>
				
					</div>

					<div class="blog-standard pagination clearfix">
						<?php
						if($foja_loop_nav_type == 'nav_default') {
							foja_content_nav($pages = '', $range = 2);
						}
						elseif($foja_loop_nav_type == 'nav_pagina') {
							foja_pagination($pages = '', $range = 2);
						} ?>
					</div>

					<?php if($foja_loop_nav_type == 'nav_infinite') { ?>

						<div class="navigation-paging infinite-wrap <?php echo esc_attr($foja_blog_infinite_style); ?> clearfix">
							<div id="load-more-loop" class="infinite-button"><?php next_posts_link( '' ); ?></div>
							<button id="load-infinite-loop" class="btn"><?php esc_html_e( 'Load More', 'foja' ); ?></button>
						</div>
						
					<?php } ?>
				</div>
				<!-- BLOG LOOP END -->

				<!-- SIDEBAR START
				============================================= -->

				<?php if($foja_blog_style == 'sidebar') {
					get_sidebar();
				} ?>

				<!-- SIDEBAR END -->
			<?php if($foja_blog_layout_style == 'blog-2') { ?>
			</div>
		</div>
		<?php } ?>
	</div>
	<!-- BLOOG END -->

</section>
<!-- CONTENT END -->
<?php }
else { ?>
<!-- CONTENT START
============================================= -->
<section id="content" class="blog-content-wrap clearfix">

	<!-- BLOG START
	============================================= -->
	<div class="blog right-sidebar clearfix">
		<!-- BLOG LOOP START
		============================================= -->
        <div class="clearfix">
            <div class="blog-section blog-style-2 main-blog-loop infinite-container content-section clearfix">

			<?php while ( have_posts() ) : the_post(); 
	
				get_template_part( 'inc/format/loop', get_post_format() );

			endwhile; // end of the loop. ?>

			</div>

			<div class="blog-standard pagination clearfix">
				<?php foja_content_nav($pages = '', $range = 2); ?>
			</div>
		
		</div>
		<!-- BLOG LOOP END -->
	</div>
	<!-- BLOOG END -->

</section>
<!-- CONTENT END -->
<?php } ?>

<?php foja_footer_choice(); ?>