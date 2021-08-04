<div class="logo-footer foot-col-item">
	<?php $foja_foot_logo = '';
	$options = get_option('foja_framework');
	if (isset($options['foot_logo'])) {
	$foja_foot_logo = $options['foot_logo']; ?>
		<img src="<?php echo esc_url( $foja_foot_logo['url'] ); ?>" alt="<?php esc_attr_e( 'footer logo', 'foja' ); ?>">
	<?php } ?>
</div>