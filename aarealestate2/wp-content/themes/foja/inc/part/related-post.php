<?php 
	$orig_post = $post;  
	$tags = wp_get_post_tags($post->ID); 
		  
	if ($tags) {  
	$tag_ids = array();  
	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;  
	$args=array(  
	'tag__in' => $tag_ids,  
	'post__not_in' => array($post->ID),  
	'posts_per_page'=>2, // Number of related posts to display.  
	'ignore_sticky_posts' => 1
	  
	);  
		  
	$my_query = new WP_Query( $args );  
		
	if ($my_query->have_posts()) : ?> 

	<div class="related-content clearfix">
		<h3 class="clearfix"><?php esc_html_e( 'You May Also Like', 'foja' ); ?></h3>
		<div class="row">

	<?php while($my_query->have_posts()) : $my_query->the_post();

	?>  

		<div class="blog-item column column-2 content-related-post clearfix">
			<?php if ( has_post_thumbnail()) { ?> 

			<a href="<?php the_permalink(); ?>">
				<figure class="post-thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
					<div class="foja-overlay-active"></div>
					<h4><?php the_title(); ?></h4>
				</figure>
			 </a>
			<?php }
			else { ?>
			<a href="<?php the_permalink(); ?>">
				<figure class="post-thumb no-thumb">
					<div class="foja-overlay-active"></div>
					<h4><?php the_title(); ?></h4>
				</figure>
			 </a>

			<?php } ?>

		</div><!-- end column -->

	<?php  endwhile; ?> 

	</div>
</div><!-- end related-content --><?php wp_reset_postdata(); endif;
} ?> 