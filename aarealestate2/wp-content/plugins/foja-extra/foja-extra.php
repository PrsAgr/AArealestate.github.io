<?php

/*
Plugin Name: Foja Extra
Plugin URI: http://www.themesawesome.com
Description: A plugin to add functionality to Premium Theme Foja from Themes Awesome
Version: 1.0
Author: Themes Awesome
Author URI: http://www.themesawesome.com
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// This file is pretty much a boilerplate WordPress plugin.
// It does very little except including wp-widget.php

define( 'FOJA_EXTRA__FILE__', __FILE__ );
define( 'FOJA_EXTRA_PLUGIN_BASE', plugin_basename( FOJA_EXTRA__FILE__ ) );
define( 'FOJA_EXTRA_URL', plugins_url( '/', FOJA_EXTRA__FILE__ ) );
define( 'FOJA_EXTRA_PATH', plugin_dir_path( FOJA_EXTRA__FILE__ ) );


require_once FOJA_EXTRA_PATH.'inc/custom.php';
require_once FOJA_EXTRA_PATH.'inc/portohov.php';
require_once FOJA_EXTRA_PATH.'inc/element-helper.php';
require_once FOJA_EXTRA_PATH.'inc/lightbox-transition.php';

// Flush rewrite rules on activation
function foja_extra_activation() {
  flush_rewrite_rules(true);
}

require_once FOJA_EXTRA_PATH.'widgets/foja-latestpost-widget.php';
require_once FOJA_EXTRA_PATH.'widgets/foja-latestpost2-widget.php';
require_once FOJA_EXTRA_PATH.'widgets/foja-portfolio-widget.php';

function foja_new_elements(){
  require_once FOJA_EXTRA_PATH.'head-title/head-title.php';
  require_once FOJA_EXTRA_PATH.'foja-post/post-control.php';
  require_once FOJA_EXTRA_PATH.'foja-portfolio/portfolio-control.php';
  require_once FOJA_EXTRA_PATH.'gallery-block/gallery-control.php';
  require_once FOJA_EXTRA_PATH.'team-block/team-control.php';
  require_once FOJA_EXTRA_PATH.'client-block/client-control.php';
  require_once FOJA_EXTRA_PATH.'contact-block/contact-control.php';
  require_once FOJA_EXTRA_PATH.'testimonial-block/testimonial-control.php';
  require_once FOJA_EXTRA_PATH.'text-block/text-control.php';

  if('foja-portfolio' == get_post_type() || 'elementor_library' == get_post_type() ) {
    require_once FOJA_EXTRA_PATH.'post-title/post-title-control.php';
    require_once FOJA_EXTRA_PATH.'post-terms/post-terms-control.php';
    require_once FOJA_EXTRA_PATH.'portfolio-pagination/portfolio-page-control.php';
    require_once FOJA_EXTRA_PATH.'custom-field/custom-field-control.php';
  }
}

add_action('elementor/widgets/widgets_registered','foja_new_elements');


/*-----------------------------------------------------------------------------------*/
/* The Portfolio custom post type
/*-----------------------------------------------------------------------------------*/

add_action('init', 'foja_portfolio_register'); 
function foja_portfolio_register() { 

  $labels = array(
    'name'               => _x('Portfolio', 'Portfolio General Name', 'foja'),
    'singular_name'      => _x('Portfolio', 'Portfolio Singular Name', 'foja'),
    'add_new'            => _x('Add New', 'Add New Portfolio Name', 'foja'),
    'add_new_item'       => __('Add New Portfolio', 'foja'),
    'edit_item'          => __('Edit Portfolio', 'foja'),
    'new_item'           => __('New Portfolio', 'foja'),
    'view_item'          => __('View Portfolio', 'foja'),
    'search_items'       => __('Search Portfolio', 'foja'),
    'not_found'          => __('Nothing found', 'foja'),
    'not_found_in_trash' => __('Nothing found in Trash', 'foja'),
    'parent_item_colon'  => ''
  );

  $args = array(
    'labels'        => $labels,
    'public'        => true,
    'publicly_queryable'  => true,
    'show_ui'       => true,
    'query_var'       => 'portfolio',
    'capability_type'   => 'post',
    'hierarchical'      => false,
    'rewrite'       => array( 'slug' => 'portfolio' ),
    'supports'        => array('title','editor','thumbnail', 'post-formats', 'author'),
    'menu_position'     => 5,

  ); 

  register_post_type('foja-portfolio' , $args);

  register_taxonomy(
    "portfolio-category", array("foja-portfolio"), array(
    "hierarchical"    => true,
    "label"       => "Categories", 
    "singular_label"  => "Categories", 
    "rewrite"     => true));
  
  register_taxonomy_for_object_type('portfolio-category', 'foja-portfolio'); 

}

add_filter("manage_edit-portfolio_columns", "foja_portfolio_edit_columns"); 
function foja_portfolio_edit_columns($columns) {  
  $columns = array(  
    "cb"    => "<input type=\"checkbox\" />",  
    "title"   => __('Portfolio', 'foja'),  
    "categories"    => __('Categories', 'foja'),  
  );
  return $columns;  
}

add_action("manage_portfolio_posts_custom_column",  "foja_portfolio_custom_columns");
function foja_portfolio_custom_columns($column, $post_id) {  
  global $post;  
  switch ($column) {  
    case "categories":
      echo get_the_term_list($post->ID, 'portfolio-category', '', ', ','');  
    break;
  }
}

/* DEMO IMPORT */

function ocdi_import_files() {
return array(
array(
  'import_file_name'           => 'Demo 1',
  'import_file_url'            => plugin_dir_url( __FILE__ ).'demo-content/demo1/content.xml',
  'import_redux'               => array(
    array(
    'file_url'    => plugin_dir_url( __FILE__ ).'demo-content/demo1/theme-options.json',
    'option_name' => 'foja_framework',
    ),
  ),
  'import_preview_image_url'   => plugin_dir_url( __FILE__ ).'demo-content/demo1/screen-image.jpg',
  'import_notice'              => __( 'Some of images may not looks like demo because images are excluded from theme.', 'foja' ),
  'preview_url'                => 'https://foja.themesawesome.com/',
  ),

);
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );

function ocdi_after_import_setup() {
// Assign menus to their locations.
$main_menu = get_term_by( 'name', 'Menu', 'nav_menu' );

set_theme_mod( 'nav_menu_locations', array(
  'header-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
  )
);

// Assign front page and posts page (blog page).
$front_page_id = get_page_by_title( 'Home' );
$blog_page_id  = get_page_by_title( 'Blog' );

update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $front_page_id->ID );
update_option( 'page_for_posts', $blog_page_id->ID );


}
add_action( 'pt-ocdi/after_import', 'ocdi_after_import_setup' );