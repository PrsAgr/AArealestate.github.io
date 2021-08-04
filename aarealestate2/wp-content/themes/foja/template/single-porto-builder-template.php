<?php while ( have_posts() ) : the_post();

/*
Template Name: Portfolio Builder Post
Template Post Type: foja-portfolio, elementor_library
*/
 ?>

<div class="portfolio-content">
	<?php the_content(); ?>
</div>

<?php endwhile; // end of the loop. ?>