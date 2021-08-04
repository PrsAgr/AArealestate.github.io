<!-- FOOTER -->
<?php if ( class_exists( 'Redux' )) {
$options = get_option('foja_framework');
$foja_footer_style_type 	= $options['footer_style_type'];
$foja_footer_layout 		= $options['footer_layout'];

$foja_footer_first_display 	= $options['footer_first_display'];
$foja_foot_col1_align 		= $options['foot_col1_align'];

$foja_footer_second_display 	= $options['footer_second_display'];
$foja_foot_col2_align 		= $options['foot_col2_align'];

$foja_footer_third_display 	= $options['footer_third_display'];
$foja_foot_col3_align 		= $options['foot_col3_align'];

$foja_footer_fourth_display 	= $options['footer_fourth_display'];
$foja_foot_col4_align 		= $options['foot_col4_align'];
} ?>

<footer id="footer" class="footer<?php if(class_exists( 'Redux' ) && $foja_footer_style_type == 'fixed-footer') { ?> fixed-footer<?php } if(!class_exists( 'Redux' )) { ?> no-redux<?php } ?> clearfix">
	<div class="footer-wrap clearfix">
		<?php if ( class_exists( 'Redux' ) && is_active_sidebar( 'footer-1' ) || 
		class_exists( 'Redux' ) && is_active_sidebar( 'footer-2' ) || 
		class_exists( 'Redux' ) && is_active_sidebar( 'footer-3' ) || 
		class_exists( 'Redux' ) && is_active_sidebar( 'footer-4' ) ) { ?>
		<div class="footer-widget-wrapper">
			<div class="container">
				<div class="row clearfix">
					<?php foja_footer_widget(); ?>
				</div>
			</div>
		</div>
		<?php } ?>
		
		<div class="footer-bottom clearfix">
			<div class="container">	
				<div class="row">
					<?php if ( class_exists( 'Redux' )) {
					switch ($foja_footer_layout) { 

						case '1column-footer' : ?>
						<div class="foot-col column column-1 item-col-1 <?php echo esc_attr($foja_footer_first_display).' '.esc_attr($foja_foot_col1_align); ?> clearfix">
							<?php foja_footer_part('footer/footer-first-column' ); ?>
						</div>
						<?php break;

						case '2column-footer' : ?>
						<div class="foot-col column column-2 item-col-1 <?php echo esc_attr($foja_footer_first_display).' '.esc_attr($foja_foot_col1_align); ?> clearfix">
							<?php foja_footer_part('footer/footer-first-column' ); ?>
						</div>
						<div class="foot-col column column-2 item-col-2 <?php echo esc_attr($foja_footer_second_display).' '.esc_attr($foja_foot_col2_align); ?> clearfix">
							<?php foja_footer_part('footer/footer-second-column' ); ?>
						</div>
						<?php break;

						case '3column-footer' : ?>
						<div class="foot-col column column-3 item-col-1 <?php echo esc_attr($foja_footer_first_display).' '.esc_attr($foja_foot_col1_align); ?> clearfix">
							<?php foja_footer_part('footer/footer-first-column' ); ?>
						</div>
						<div class="foot-col column column-3 item-col-2 <?php echo esc_attr($foja_footer_second_display).' '.esc_attr($foja_foot_col2_align); ?> clearfix">
							<?php foja_footer_part('footer/footer-second-column' ); ?>
						</div>
						<div class="foot-col column column-3 item-col-3 <?php echo esc_attr($foja_footer_third_display).' '.esc_attr($foja_foot_col3_align); ?> clearfix">
							<?php foja_footer_part('footer/footer-third-column' ); ?>
						</div>
						<?php break;

						case '4column-footer' : ?>
						<div class="foot-col column column-4 item-col-1 <?php echo esc_attr($foja_footer_first_display).' '.esc_attr($foja_foot_col1_align); ?> clearfix">
							<?php foja_footer_part('footer/footer-first-column' ); ?>
						</div>
						<div class="foot-col column column-4 item-col-2 <?php echo esc_attr($foja_footer_second_display).' '.esc_attr($foja_foot_col2_align); ?> clearfix">
							<?php foja_footer_part('footer/footer-second-column' ); ?>
						</div>
						<div class="foot-col column column-4 item-col-3 <?php echo esc_attr($foja_footer_third_display).' '.esc_attr($foja_foot_col3_align); ?> clearfix">
							<?php foja_footer_part('footer/footer-third-column' ); ?>
						</div>
						<div class="foot-col column column-4 item-col-4 <?php echo esc_attr($foja_footer_fourth_display).' '.esc_attr($foja_foot_col4_align); ?> clearfix">
							<?php foja_footer_part('footer/footer-fourth-column' ); ?>
						</div>
						<?php break;

					}
					}
					else { 
						$foja_theme_name = wp_get_theme(); ?>
						<div class="foot-col column column-1 item-col-1 text-center clearfix">
						<p><a href="<?php echo esc_url($foja_theme_name->get( 'ThemeURI' )); ?>"><?php echo esc_html($foja_theme_name->get( 'Name' )); ?></a><?php esc_html_e( ' &copy; Copyright ', 'foja' ); ?><?php echo date("Y"); ?><?php esc_html_e( ', Built by Themes Awesome', 'foja' ); ?></p>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- FOOTER END -->

</div>
<!-- MAIN WRAPPER END -->

<?php wp_footer(); ?>

</body>
</html>