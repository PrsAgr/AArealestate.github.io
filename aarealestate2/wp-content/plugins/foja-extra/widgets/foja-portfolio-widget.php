<?php
class foja_portfolio_thumb_Widget extends WP_Widget {
	
	function __construct()
	{
		$widget_ops = array('classname' => 'widget_foja_portfolio_thumb', 'description' => '');

		$control_ops = array('id_base' => 'foja_portfolio_thumb-widget');

		parent::__construct('foja_portfolio_thumb-widget', esc_html__( 'Foja Portfolio Thumbnail', 'foja' ), $widget_ops, $control_ops);
	}
	
	public function foja_portfolio_thumb_Widget()
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

			<div class="portfolio-thumb-widget clearfix">
				<div class="portfolio-thumb-wrap clearfix">
					<?php
						$portfolio_wid_args = array(
							'post_type'         => 'foja-portfolio',
							'posts_per_page'	=> $instance['amount'],
							'ignore_sticky_posts' => 1,
							'order'	=> 'DESC',
						);
						
						$portfolio_wid_loop = new WP_Query($portfolio_wid_args); 
						if ($portfolio_wid_loop->have_posts()) : while($portfolio_wid_loop->have_posts()) : $portfolio_wid_loop->the_post();
						$img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
						$blogwidimg = aq_resize($img_url[0],  100, 65, true, true, true);
						if ($blogwidimg) {
	 					 $blogwidimg = $blogwidimg;
						}
						else {
						$blogwidimg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'foja-porto-widget' );
						$blogwidimg = $blogwidimg[0];
						}
					?>
					
						<!-- widget-news -->
						<div class="post-item column column-3">
							<div class="inner-portfolio-widget">
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo esc_url( $blogwidimg ); ?>" alt="<?php echo esc_attr( 'latestwid-img' ); ?>">
									<div class="overlay">
										<div class="icon-wrap">
											<i class="icon-significon-link"></i>
										</div>
									</div>
								</a>
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
			$new_instance['amount'] = '6';
		}

		return $instance;
	}

	function form($instance)
	{
		$instance = wp_parse_args( (array) $instance, array( 'title' => esc_html__( 'Latest Works', 'foja' ), 'amount' => '6', 'sort_type' => 'post_views_count' ) );
		$title      = !empty($instance['title']) ? $instance['title'] : esc_html__( 'Latest Works', 'foja' );
		$amount      = !empty($instance['amount']) ? $instance['amount'] : '6';?>
		
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

function foja_portfolio_thumb_widget_init ()
{
	return register_widget('foja_portfolio_thumb_Widget');
}
add_action ('widgets_init', 'foja_portfolio_thumb_widget_init');