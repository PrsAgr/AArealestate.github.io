<!-- Logo
============================================= -->
<div class="logo head-item">

<?php
$options = get_option('foja_framework');
$upload_logo = '';
if (isset($options['logo_upload'])) {
$logo = $options['logo_upload'];
$upload_logo = $logo['url'];
}

if(class_exists( 'Redux' )) {
$options 			= get_option('foja_framework');
$foja_alt_logo 	= '';
	if (isset($options['header_alt_logo'])) {
		$foja_header_alt_logo 	= $options['header_alt_logo'];
		$foja_alt_logo 			= $foja_header_alt_logo['url'];
	}
}

 if(class_exists( 'acf' )) {
	$foja_header_style_choice = get_field('header_style_choice');
	
	if($foja_header_style_choice == 'alternative' && !empty( $foja_alt_logo ))  { ?>
	<div class="logo-image">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo esc_url( $foja_alt_logo ); ?>" alt="<?php echo esc_attr( 'logo-alt' ); ?>" />
		</a>
	</div>
	<?php }
	elseif($foja_header_style_choice == 'alternative' && empty( $foja_alt_logo ) && !empty( $upload_logo )){ ?>
	<div class="logo-image">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo esc_url( $upload_logo ); ?>" alt="<?php echo esc_attr( 'logo' ); ?>" />
		</a>
	</div>
	<?php }
	elseif($foja_header_style_choice == 'default' && !empty( $upload_logo )){ ?>
	<div class="logo-image">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo esc_url( $upload_logo ); ?>" alt="<?php echo esc_attr( 'logo' ); ?>" />
		</a>
	</div>
	<?php }
	elseif( $upload_logo == '' && $foja_alt_logo == ''){ ?>
	<div class="logo-title">
		<h2 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
		</h2>
	</div>
	<?php }
	elseif( is_single() && !empty( $upload_logo ) ) { ?>
	<div class="logo-title">
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
<?php }
else { ?>

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

<?php } ?>
</div>
<!-- end logo -->