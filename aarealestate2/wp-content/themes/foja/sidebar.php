<?php if ( is_active_sidebar( 'primary-sidebar' ) ) { ?>
<aside id="primary-sidebar" class="sidebar column column-3 clearfix<?php if ( has_post_thumbnail()) { ?> has-thumb<?php } ?>">
	<div class="blog-sidebar">

	<?php
		dynamic_sidebar( 'primary-sidebar' );
	?>
	
	</div>
</aside><!-- #primary-sidebar -->
<?php } ?>