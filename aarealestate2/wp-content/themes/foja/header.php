<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> > <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php wp_head(); ?>

</head>

<body id="body" <?php body_class() ;?>>
	<?php wp_body_open(); ?>
<?php
$options = get_option('foja_framework');
$upload_logo = '';
if ( class_exists( 'Redux' ) ) {
if (isset($options['logo_upload'])) {
$logo = $options['logo_upload'];
$upload_logo = $logo['url'];
}
$foja_wrap_opt 				= $options['wrap_opt'];
$foja_header2_content_boxed 	= $options['header2_content_boxed'];
}
?>

	<?php if(class_exists( 'Redux' ) && $foja_wrap_opt == 'bordered'){ ?>
	<div class="bordered top-border"></div>
	<div class="bordered bottom-border"></div>
	<div class="bordered left-border"></div>
	<div class="bordered right-border"></div>
	<?php } ?>

	<!-- Main Wrapper -->
	<div id="main-wrapper" class="header-style-2-wrap<?php if(class_exists( 'Redux' ) && $foja_header2_content_boxed == true){ ?> boxed-wrap<?php } ?> clearfix<?php if(class_exists( 'Redux' ) && $foja_wrap_opt == 'bordered'){ ?> bordered-main-wrap<?php } ?>">

		<div id="cd-nav" class="cd-nav">
			<div class="cd-navigation-wrapper">
				<div class="cd-half-block primary-menu">
					<div class="outer">
						<div class="inner">
							<nav id="primary-menu" class="menu main-menu">
								<?php foja_main_nav_menu(); ?>
							</nav>
						</div>
					</div>
				</div><!-- .cd-half-block -->
				
				<div class="cd-half-block contact-info">
					<div class="outer">
						<div class="inner">
							<?php
							if ( class_exists( 'Redux' ) ) {
								$foja_header_2_title = $options['header_2_title'];
								$foja_header_2_text 	= $options['header_2_text']; ?>

								<?php if(!empty($foja_header_2_title)) { ?>
									<h1><?php echo sanitize_text_field( $foja_header_2_title ); ?></h1>
								<?php }
								else {
									echo '<h1>'. esc_html( get_bloginfo( 'name' ) ). '</h1>';
								}
								if(!empty($foja_header_2_text)) { ?>
									<div class="header-info-text"><?php echo wp_specialchars_decode( $foja_header_2_text ); ?></div>
								<?php }
								} 
							else { ?>
								<h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
							<?php } ?>
						</div>
					</div>
				</div> <!-- .cd-half-block -->
			</div> <!-- .cd-navigation-wrapper -->
		</div>

		<!-- Header
		============================================= -->
		<header id="header" class="clearfix">
			<div class="header-style-2-inner-content">

				<!-- Logo
				============================================= -->
				<div class="logo">
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

			</div>

			<a href="#cd-nav" class="cd-nav-trigger sub-menu-triger"><span class="cd-nav-icon"></span></a>

			<!-- Search -->
			<div class="search-wrap">
				<button id="btn-search"><i class="icon-simple-line-icons-143"></i></button>
			</div>
		</header>

		<div class="search">
			<button id="btn-search-close" class="btn--hidden btn--search-close" ><i class="icon-themify-1"></i></button>

			<?php get_search_form() ?>

			<?php 
			if ( class_exists( 'Redux' ) ) {
				$foja_search_bar_title 	= $options['search_bar_title'];
				$foja_search_sug_title 	= $options['search_sug_title']; 
				$foja_search_sug_text 	= $options['search_sug_text']; ?>

				<?php if(!empty($foja_search_bar_title)) { ?>
				<span class="search__info"><?php echo sanitize_text_field( $foja_search_bar_title ); ?></span>
				<?php }
				else { ?>
					<span class="search__info"><?php esc_html_e( 'Hit enter to search or ESC to close', 'foja' ); ?></span>
				<?php } ?>

				<div class="search__related">
					<div class="search__suggestion">
					<?php if(!empty($foja_search_sug_title)) { ?>
						<h4><?php echo sanitize_text_field( $foja_search_sug_title ); ?></h4>
					<?php }
					if(!empty($foja_search_sug_text)) { ?>
						<p><?php echo sanitize_text_field( $foja_search_sug_text ); ?></p>
					<?php } ?>
					</div>
				</div>
			<?php }
			else { ?>
				<span class="search__info"><?php esc_html_e( 'Hit enter to search or ESC to close', 'foja' ); ?></span>

				<div class="search__related">
					<div class="search__suggestion">
						<h4><?php esc_html_e( 'Suggestion?', 'foja' ); ?></h4>

						<p><?php esc_html_e( 'Insert any word you want to search.', 'foja' ); ?></p>
					</div>
				</div>
			<?php } ?>
			
		</div>
		<!-- HEADER END -->