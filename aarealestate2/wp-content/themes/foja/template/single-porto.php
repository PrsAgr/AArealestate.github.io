<?php while ( have_posts() ) : the_post(); 

$foja_client_name 	= get_field('client_name');
$foja_portfolio_year = get_field('portfolio_year');
$foja_project_url 	= get_field('project_url');

$foja_portfolio_gallery = get_field('foja_gallery'); ?>

<div class="single-porto-inner-wrap portfolio-chocolat portfolio-style1">

	<div class="container">

		<?php
		if ( has_post_format('gallery') ) {
			if($foja_portfolio_gallery == 0){ ?>
			<div class="portfolio-thumbnail standard-thumb clearfix">
				<?php
				$img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
				$foja_porto_thumb = aq_resize($img_url,  $foja_portgal_wid , $foja_portgal_hei, $foja_force_crop, true, true);
				if( $foja_porto_thumb){
					 $foja_porto_thumb = $foja_porto_thumb;
					}
					else {
		             $foja_porto_thumb2 = wp_get_attachment_image_src( get_post_thumbnail_id(), 'foja-portofolio' );
		             $foja_porto_thumb = $foja_porto_thumb[0];
				}
				//var_dump($foja_porto_thumb);?>
				<div class="gallery-item" data-src="<?php echo esc_url( $foja_porto_thumb[0] ); ?>" data-sub-html="<?php the_title(); ?>">
					<img src="<?php echo esc_url( $foja_porto_thumb ); ?>" alt="<?php the_title(); ?>">
				</div>
			</div>
			<?php }
			else {

			$foja_force_crop 	= get_field('force_crop');
			$foja_item_per_row 	= get_field('item_per_row');
			$foja_gallery_width 	= get_field('gallery_width');
			$foja_gallery_height = get_field('gallery_height');

			$foja_vertical_gap 	= get_field('vertical_gap');
			if(!empty($foja_vertical_gap)) {
				$foja_vertical_gap_res = $foja_vertical_gap;
			}
			else {
				$foja_vertical_gap_res = '0';
			}

			$foja_horizontal_gap = get_field('horizontal_gap');
			if(!empty($foja_horizontal_gap)) {
				$foja_horizontal_gap_res = $foja_horizontal_gap;
			}
			else {
				$foja_horizontal_gap_res = '0';
			}

			$foja_gap_calc = $foja_vertical_gap_res + $foja_horizontal_gap_res;

			?>
			<div class="portfolio-thumbnail standard-thumb gallery-type clearfix">
				<?php
				foreach( $foja_portfolio_gallery as $porto_gal2 ):
				
				$foto_name = $porto_gal2['title'];
				$foja_portgal_def_wid = $porto_gal2["width"];
				$foja_portgal_def_hei = $porto_gal2["height"];
				$img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');

				if(!empty($foja_gallery_width)) {
					$foja_portgal_wid = $foja_gallery_width;
				}
				else {
					$foja_portgal_wid = $foja_portgal_def_wid;
				}

				if(!empty($foja_gallery_height)) {
					$foja_portgal_hei = $foja_gallery_height;
				}
				else {
					$foja_portgal_hei = $foja_portgal_def_hei;
				}

				$porto_gal_res = aq_resize( $porto_gal2['url'],  $foja_portgal_wid , $foja_portgal_hei, $foja_force_crop, true, true);
				if($porto_gal_res){
					$porto_gal_res = $porto_gal_res;
					}
					else {
		            $porto_gal_res2 = wp_get_attachment_image_src( get_post_thumbnail_id(), 'foja-single' );
		            $porto_gal_res = $porto_gal_res2[0];
				}
			

				$attachment_id = $porto_gal2['ID'];
				$foto_name = $porto_gal2['title']; ?>
					<div class="gallery-item item" data-src="<?php echo esc_url( $porto_gal2['url'] ); ?>" data-sub-html="<?php echo esc_attr( $foto_name ); ?>" style="width: calc(100% / <?php echo esc_attr($foja_item_per_row) ?> - <?php echo esc_attr ($foja_gap_calc); ?>px); padding: <?php echo esc_attr($foja_vertical_gap_res); ?>px <?php echo esc_attr($foja_horizontal_gap_res); ?>px">
						<img src="<?php echo esc_url( $porto_gal_res ); ?>" alt="<?php echo esc_attr( $porto_gal2['alt'] ); ?>" /> 
					</div> 
				<?php endforeach; ?>
			</div>
			<?php }
		}
		if ( has_post_format('video') ) { ?>
			<div class="featured-video clearfix">
				<?php 
					$video_url = get_field('video_url');
					$video_embed = get_field('video_embed');
					$video_file = get_field('video_file');
					
					if($video_url !== ''){ 
						echo wp_oembed_get( esc_url( $video_url ));
					} 

					elseif($video_embed !== '') { 
						echo wp_specialchars_decode( $video_embed );
					}

					elseif($video_file !== '') {  ?>
					<?php echo do_shortcode( '[video src="'. sanitize_text_field( $video_file ).'"]' ) ?>  
				<?php } ?>
			</div>
		<?php }
		if ( !get_post_format() ) { ?>
			<div class="portfolio-thumbnail standard-thumb clearfix">
				<?php $foja_porto_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
				<div class="gallery-item" data-src="<?php echo esc_url( $foja_porto_thumb[0] ); ?>" data-sub-html="<?php the_title(); ?>">
					<img src="<?php echo esc_url( $foja_porto_thumb[0] ); ?>" alt="<?php the_title(); ?>">
				</div>
			</div>
		<?php } ?>

		<div class="porfolio-content-wrap clearfix">
			<?php if(have_rows('portfolio_details')) { ?>
				<div class="project-details column column-3 clearfix">
					<div class="page-title">
						<h2><?php the_title(); ?>
							<span class="title-separator"></span>
						</h2>
					</div>

					<ul>
						<?php while(have_rows('portfolio_details')):the_row(); 
							$detail_name	= get_sub_field('detail_name');
							$detail_text	= get_sub_field('detail_text');
						?>
						<li>
							<p><span><?php echo sanitize_text_field( $detail_name ); ?></span><?php echo sanitize_text_field( $detail_text ); ?></p>
						</li>
						<?php endwhile; ?>
					</ul>
				</div>

				<div class="portfolio-content column column-2of3 clearfix">
					<?php the_content(); ?>
				</div>
			<?php }
			else { ?>
				<div class="project-details column column-3 clearfix">
					<div class="page-title">
						<h2><?php the_title(); ?>
							<span class="title-separator"></span>
						</h2>
					</div>
				</div>

				<div class="portfolio-content column column-2of3 clearfix">
					<?php the_content(); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php endwhile; // end of the loop. ?>

<div class="next-prev-post standard-1 portfolio-pagination container clearfix">
	<div class="pagination-wrap clearfix">
		<div class="wrap-inner clearfix">

			<div class="row">
			<?php $next_post = get_next_post();
			$previous_post = get_previous_post(); ?>
			
			<div class="prev-post column column-3">
				<?php if ( get_previous_post() ) { ?>
				<a href="<?php echo get_permalink( $previous_post->ID ); ?>">
					<h4 class="title">
						<i class="icon-themify-4"></i>
						<?php esc_html_e( 'Prev Entry', 'foja' ); ?>
					</h4>
				</a>
				<?php }
				else { ?>
					<h4 class="title no-link">
						<i class="icon-themify-4"></i>
						<?php esc_html_e( 'Prev Entry', 'foja' ); ?>
					</h4>
				<?php } ?>
			</div>

			<div class="back-post column column-3">
			<?php if(class_exists( 'Redux' )) {
				$options					= get_option('foja_framework');
				$foja_portfolio_back_link   = $options['portfolio_back_link']; 
				if(!empty($foja_portfolio_back_link)) { 

					$page_back = new WP_Query( array( 'page_id' => $foja_portfolio_back_link ) );
					if ($page_back->have_posts()) : while($page_back->have_posts()) : $page_back->the_post();
					?>
					<a href="<?php the_permalink(); ?>">
						<h4 class="title">
							<?php esc_html_e( 'Back', 'foja' ); ?>
						</h4>
					</a>
				<?php 
					endwhile; endif; wp_reset_postdata();
					}
					else { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<h4 class="title">
							<?php esc_html_e( 'Back', 'foja' ); ?>
						</h4>
					</a>
					<?php }
				} ?>
			</div>

			<div class="next-post column column-3">
				<?php if ( get_next_post() ) { ?>
				<a href="<?php echo get_permalink( $next_post->ID ); ?>">
					<h4 class="title">
						<?php esc_html_e( 'Next Entry', 'foja' ); ?>
						<i class="icon-themify-3"></i>
					</h4>
				</a>
				<?php }
				else { ?>
					<h4 class="title no-link">
						<?php esc_html_e( 'Next Entry', 'foja' ); ?>
						<i class="icon-themify-3"></i>
					</h4>
				<?php } ?>
			</div>

			</div>
		</div>
	</div>
</div>
<!-- pagination end -->