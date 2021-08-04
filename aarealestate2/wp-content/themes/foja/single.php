<?php get_header(); ?>

<?php 
if ( class_exists( 'Redux' ) ) {
$options = get_option('foja_framework');
	$foja_blog_type = $options['blog_type']; 
?>

<!-- CONTENT START
============================================= -->
<section id="content" class="single-post-wrap clearfix">

	<!-- BLOG START
	============================================= -->
	<div class="blog right-sidebar clearfix">
		<div class="container clearfix">
			<div class="row clearfix">

				<!-- BLOG LOOP START
				============================================= -->
				<div class="<?php if($foja_blog_type == 'sidebar') { ?>column column-2of3 <?php } ?>clearfix">
					<div class="blog-single content-section">

					<?php while ( have_posts() ) : the_post(); 
						
						get_template_part( 'inc/format/content', get_post_format() );

					endwhile; // end of the loop. ?>
				
					</div>
				</div>

				<!-- BLOG LOOP END -->

				<!-- SIDEBAR START
				============================================= -->

				<?php if($foja_blog_type == 'sidebar') {
					get_sidebar();
				} ?>

				<!-- SIDEBAR END -->

			</div>
		</div>
	</div>
	<!-- BLOOG END -->

</section>
<!-- CONTENT END -->
<?php }
else { ?>

<!-- CONTENT START
============================================= -->
<section id="content" class="single-post-wrap clearfix">

	<!-- BLOG START
	============================================= -->
	<div class="blog right-sidebar clearfix">
		<div class="container clearfix">
			<div class="row clearfix">

				<!-- BLOG LOOP START
				============================================= -->
				<div class="column column-2of3 clearfix">
					<div class="blog-single content-section">

					<?php while ( have_posts() ) : the_post(); 
			
						get_template_part( 'inc/format/content', get_post_format() );

					endwhile; // end of the loop. ?>
				
					</div>
				</div>

				<!-- BLOG LOOP END -->

				<!-- SIDEBAR START
				============================================= -->

				<?php get_sidebar(); ?>

				<!-- SIDEBAR END -->

			</div>
		</div>
	</div>
	<!-- BLOOG END -->

</section>
<!-- CONTENT END -->

<?php } ?>

<?php foja_footer_choice(); ?>