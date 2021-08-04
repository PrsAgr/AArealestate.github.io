<?php
class foja_recentpost_thumb_Widget extends WP_Widget {
	
	function __construct()
	{
		$widget_ops = array('classname' => 'widget_foja_news', 'description' => '');

		$control_ops = array('id_base' => 'foja_recentpost_thumb-widget');

		parent::__construct('foja_recentpost_thumb-widget', esc_html__( 'Foja News Widget', 'foja' ), $widget_ops, $control_ops);
	}

	public function foja_recentpost_thumb_Widget()
    {
        self::__construct();
    }
	
	function widget($args, $instance)
	{
		extract($args, EXTR_SKIP);
		$title = apply_filters('widget_title', $instance['title']);

		echo wp_specialchars_decode( $before_widget );

		if($title) {
			echo wp_specialchars_decode( $before_title ) . sanitize_text_field( $title ) . wp_specialchars_decode( $after_title );
		} ?>

			<ul class="nav nav-tabs clearfix" role="tablist" id="newsTabs">
				<li role="presentation"><a href="#default" aria-controls="default" role="tab" data-toggle="tab"><?php esc_html_e( 'Latest', 'foja' ); ?></a></li>
				<li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab"><?php esc_html_e( 'Popular', 'foja' ); ?></a></li>
			</ul>

			<div class="tab-content clearfix">
				<div role="tabpanel" class="recent-news tab-pane" id="default">
					<?php
						$latest_post_wid = array(
							'post_type'         => 'post',
							'posts_per_page'	=> $instance['amount'],
							'ignore_sticky_posts' => 1,
							'order'	=> 'DESC',
						);
						
						$latest_thumb = new WP_Query($latest_post_wid); 
						if ($latest_thumb->have_posts()) : while($latest_thumb->have_posts()) : $latest_thumb->the_post();
						$img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
							$blogwidimg = aq_resize($img_url[0],  350 , 150, true);
					?>
					
						<!-- widget-news -->
						<div class="post-item clearfix">
							<?php if ( has_post_thumbnail()) { ?>
							<a href="<?php the_permalink(); ?>">
								<div class="post-thumb">
									<img src="<?php echo esc_url( $blogwidimg ); ?>" alt="<?php echo esc_attr( 'latestwid-img' ); ?>">
									<div class="overlay"></div>
								</div>
							</a>
							<?php }

							else {
								echo '<a href="<?php the_permalink(); ?>">';
								echo '<div class="post-thumb">';
								echo '<img src="'. get_template_directory_uri() .'/img/placeholder-latestpost-widget.jpg" />';
								echo '<div class="overlay"></div></div></a>';
							}

							?>
							<div class="post-content">
								<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							</div>
						</div>
						<!-- widget-news end -->

					<?php 
						endwhile; wp_reset_postdata(); endif;
					?>
				</div>

				<div role="tabpanel" class="popular-news tab-pane" id="popular">
					<?php
						$popular_post_wid = array(
							'post_type'         => 'post',
							'posts_per_page'	=> $instance['amount'],
							'ignore_sticky_posts' => 1,
							'orderby' => 'comment_count',
							'order'	=> 'DESC',
						);
						
						$popular_thumb = new WP_Query($popular_post_wid); 
						if ($popular_thumb->have_posts()) : while($popular_thumb->have_posts()) : $popular_thumb->the_post();
						$img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
							$blogwidimg = aq_resize($img_url[0],  350 , 150, true);
					?>
					
						<!-- widget-news -->
						<div class="post-item clearfix">
							<?php if ( has_post_thumbnail()) { ?>
							<a href="<?php the_permalink(); ?>">
								<div class="post-thumb">
									<img src="<?php echo esc_url( $blogwidimg ); ?>" alt="<?php echo esc_attr( 'latestwid-img' ); ?>">
									<div class="overlay"></div>
								</div>
							</a>
							<?php }

							else {
								echo '<a href="<?php the_permalink(); ?>">';
								echo '<div class="post-thumb">';
								echo '<img src="'. get_template_directory_uri() .'/img/placeholder-latestpost-widget.jpg" />';
								echo '<div class="overlay"></div></div></a>';
							}

							?>
							<div class="post-content">
								<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							</div>
						</div>
						<!-- widget-news end -->

					<?php 
						endwhile; wp_reset_postdata(); endif;
					?>
				</div>
			</div>
		
		<?php echo wp_specialchars_decode( $after_widget );
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		if( is_numeric($new_instance['amount']) ){
			$instance['amount'] = $new_instance['amount'];
		} else {
			$new_instance['amount'] = '3';
		}

		return $instance;
	}

	function form($instance)
	{
		$instance = wp_parse_args( (array) $instance, array( 'title' => esc_html__( 'Foja News', 'foja' ), 'amount' => '3', 'sort_type' => 'post_views_count' ) );
		$title      = !empty($instance['title']) ? $instance['title'] : esc_html__( 'Foja News', 'foja' );
		$amount      = !empty($instance['amount']) ? $instance['amount'] : '3'; ?>
		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>"><?php esc_html_e( 'Title', 'foja' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('amount') ); ?>"><?php esc_html_e( 'Amount of Posts', 'foja' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo esc_attr( $this->get_field_id('amount') ); ?>" name="<?php echo esc_attr( $this->get_field_name('amount') ); ?>" value="<?php echo esc_attr( $instance['amount'] ); ?>" />
		</p>
	<?php
	}
}

function foja_recentpost_thumb_widget_init ()
{
	return register_widget('foja_recentpost_thumb_Widget');
}
add_action ('widgets_init', 'foja_recentpost_thumb_widget_init');