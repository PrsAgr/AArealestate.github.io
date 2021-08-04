<div class="search">
	<button id="btn-search-close" class="btn--search-close" ><i class="icon-themify-1"></i></button>

	<?php get_search_form() ?>
	<?php 
	if ( class_exists( 'Redux' ) ) {
	$options = get_option('foja_framework');
	$foja_search_bar_title 	= $options['search_bar_title'];
	$foja_search_sug_title 	= $options['search_sug_title']; 
	$foja_search_sug_text 	= $options['search_sug_text']; ?>

	<?php if(!empty($foja_search_bar_title)) { ?>
	<span class="search__info"><?php echo sanitize_text_field( $foja_search_bar_title ); ?></span>
	<?php }
	else { ?>
		<span class="search__info"><?php esc_html_e( 'Hit enter to search or ESC to close', 'foja' ); ?></span>
	<?php } ?>

	<div class="search__related">
		<div class="search__suggestion">
		<?php if(!empty($foja_search_sug_title)) { ?>
			<h4><?php echo sanitize_text_field( $foja_search_sug_title ); ?></h4>
		<?php }
		if(!empty($foja_search_sug_text)) { ?>
			<p><?php echo sanitize_text_field( $foja_search_sug_text ); ?></p>
		<?php } ?>
		</div>
	</div>
	<?php }
	else { ?>
		<span class="search__info"><?php esc_html_e( 'Hit enter to search or ESC to close', 'foja' ); ?></span>

		<div class="search__related">
			<div class="search__suggestion">
				<h4><?php esc_html_e( 'Suggestion?', 'foja' ); ?></h4>

				<p><?php esc_html_e( 'Insert any word you want to search.', 'foja' ); ?></p>
			</div>
		</div>
	<?php } ?>
</div>