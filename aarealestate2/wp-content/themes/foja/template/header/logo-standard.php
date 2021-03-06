<!-- Logo
============================================= -->
<div class="logo head-item">

<?php
$options = get_option('foja_framework');
$logo = '';
if (isset($options['logo_upload'])) {
$logo = $options['logo_upload'];
$upload_logo = $logo['url'];
} ?>

	<?php if ( ! empty( $upload_logo ) ) { ?>
	<div class="logo-image">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo esc_url( $upload_logo ); ?>" alt="<?php echo esc_attr( 'logo' ); ?>" />
		</a>
	</div>
	<?php }
	else { ?>
	<div class="logo-title">
		<h2 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
		</h2>
	</div>
	<?php } ?>

</div>
<!-- end logo -->