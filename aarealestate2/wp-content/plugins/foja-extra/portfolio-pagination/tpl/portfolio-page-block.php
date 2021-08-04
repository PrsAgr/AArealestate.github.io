<div class="portfolio-pagination row clearfix">
	<?php $next_post = get_next_post();
	$previous_post = get_previous_post(); ?>

	<div class="prev-portfolio column column-3">
		<h3>
		<?php if ( get_previous_post() ) : ?>
			<a href="<?php echo get_permalink( $previous_post->ID ); ?>"><?php esc_html_e( 'Prev', 'foja' ); ?></a>
		</h3>
		<?php endif; ?>
	</div>

	<div class="all-portfolio column column-3">
		<h3>
		<?php if(class_exists( 'Redux' )) {
		$options						= get_option('foja_framework');
		$foja_portfolio_back_link	= $options['portfolio_back_link']; 
		if(!empty($foja_portfolio_back_link)) { 

			$page_back = new WP_Query( array( 'page_id' => $foja_portfolio_back_link ) );
			if ($page_back->have_posts()) : while($page_back->have_posts()) : $page_back->the_post();
			?>
			<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Back', 'foja' ); ?></a>
		<?php 
			endwhile; endif; wp_reset_postdata();
			}
		} ?>
		</h3>
	</div>

	<div class="next-portfolio column column-3">
		<h3>
		<?php if ( get_next_post() ) : ?>
			<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php esc_html_e( 'Next', 'foja' ); ?></a>
		</h3>
		<?php endif; ?>
	</div>

</div>