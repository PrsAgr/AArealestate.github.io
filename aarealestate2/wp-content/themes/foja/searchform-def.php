<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr( 'Search...' ); ?>" />
	<button type="submit" class="submit search-button" value="<?php echo esc_attr_x( '', 'submit button', 'foja' ); ?>"><i class="icon-simple-line-icons-143"></i></button>
</form>