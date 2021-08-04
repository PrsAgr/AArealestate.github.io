<article class="single-post post no-result clearfix">

	<div class="post-content clearfix"> 
		<div class="post-entry "> 

			<div class="post-title text-center">
				<h3>
				  <?php esc_html_e( 'Sorry, but nothing matched your search terms. It looks like nothing was found at this location.', 'foja' ); ?>
				</h3>
			</div>  
			<p class="text-center">
				<?php esc_html_e( 'Please try again here:', 'foja' ); ?>
			</p>
			<div class="search-bar-no-res">
				<?php get_template_part( 'searchform', 'def' ); ?>
			</div>
			<h3 class="suggest-title">
				<?php esc_html_e( 'Suggestions:', 'foja' ); ?>
			</h3>
			<ul class="suggestions-search">
				<li><?php esc_html_e( 'Make sure all words are spelled correctly.', 'foja' ); ?></li>
				<li><?php esc_html_e( 'Try some different keywords.', 'foja' ); ?></li>
				<li><?php esc_html_e( 'Try general keywords.', 'foja' ); ?></li>
			</ul>
		</div><!-- post-entry -->
	</div><!-- post-content -->
	
</article><!-- #post-0 .post .no-result .not-found -->