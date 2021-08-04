<?php get_header(); ?>
<?php
	$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<!-- CONTENT START
============================================= -->
<section id="content" class="blog-content-wrap clearfix">

	<!-- BLOG START
	============================================= -->
	<div class="blog archives clearfix">
		<div class="container">
			<div class="author-box clearfix">
				<figure class="author-ava">
					<?php if ( class_exists( 'acf' ) ) {
					$author_id1 						= $curauth->ID;
					$foja_select_your_profile_image 	= get_field('select_your_profile_image', 'user_'. $author_id1);
					$foja_upload_profile_image 		= get_field('upload_profile_image', 'user_'. $author_id1);
						$foja_author_img = aq_resize($foja_upload_profile_image,  200 , 200, true, true, true);

						if( $foja_select_your_profile_image == 'upload' ) { ?>
							<img src="<?php echo esc_url( $foja_author_img ); ?>" alt="<?php echo esc_attr( 'Author' ); ?>">
						<?php }
						else { ?>
							<?php echo get_avatar( $curauth->user_email, '200' ); ?>
						<?php } ?>
					<?php }
					else { ?>
							<?php echo get_avatar( $curauth->user_email, '200' ); ?>
					<?php } ?>
				</figure>

				<div class="author-desc">
					<h2><?php echo sanitize_text_field( $curauth->display_name ); ?></h2>
					<p><?php echo sanitize_text_field( $curauth->user_description ); ?></p>
				</div>
			</div>

			<div class="<?php if(is_active_sidebar( 'primary-sidebar' )) { ?>row <?php } ?>">

				<!-- BLOG LOOP START
				============================================= -->
				<div class="author-post <?php if(is_active_sidebar( 'primary-sidebar' )) { ?>column column-2of3 <?php } ?>clearfix">

					<h3 class="post-by"><?php esc_html_e( 'Stories by', 'foja' ); ?> <?php echo sanitize_text_field( $curauth->display_name ); ?></h3>
					
					<div class="blog-section main-blog-loop infinite-container content-section">

						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post(); 

								get_template_part( 'inc/format/loop', get_post_format() );

							endwhile; ?>
							
						<?php else : ?>

						<p><?php esc_html_e('No posts by this author.', 'foja'); ?></p>

						<?php endif; ?>

					</div>

					<div class="blog-standard pagination clearfix">
						<?php foja_content_nav($pages = '', $range = 2); ?>
					</div>
				</div>
				<!-- BLOG LOOP END -->

			<?php get_sidebar(); ?>

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- search-result -->

</section>
<!-- CONTENT END -->

<?php foja_footer_choice(); ?>