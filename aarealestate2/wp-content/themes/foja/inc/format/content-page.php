<article id="page-<?php the_ID(); ?>" <?php post_class( 'page'); ?>>

	
	<div class="page-title-wrap clearfix">
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="page-content wrapper clearfix">
		<?php 
			the_content(); 
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'foja' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'foja' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) ); 
		?>
	</div><!-- page-content --> 

	<div class="page-comment clearfix">
		<?php 
			if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
			if ( comments_open() || '0' != get_comments_number() ) comments_template(); 
		?>
	</div>

</article><!-- #page<?php the_ID(); ?> -->