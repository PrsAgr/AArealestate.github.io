<?php get_header(); ?>

<!-- CONTENT WRAPPER
    ============================================= -->

<div id="content" class="clearfix">
	
	<div class="container clearfix">
	<?php while ( have_posts() ) : the_post(); 
	
		get_template_part( 'inc/format/content', 'page' );
				
	endwhile; // end of the loop. ?>

	</div>

</div>
<!-- #content-wrapper end -->
<?php foja_footer_choice(); ?>