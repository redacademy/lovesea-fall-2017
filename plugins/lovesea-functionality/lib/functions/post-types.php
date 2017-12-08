<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...


// Register Custom Post Type
function custom_post_type() {
  
    $labels = array(
      'name'                  => _x( 'Galleries', 'Post Type General Name', 'text_domain' ),
      'singular_name'         => _x( 'gallery', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'             => __( 'gallery', 'text_domain' ),
      'name_admin_bar'        => __( 'gallery', 'text_domain' ),
      'archives'              => __( 'gallery Archives', 'text_domain' ),
      'attributes'            => __( 'gallery Attributes', 'text_domain' ),
      'parent_item_colon'     => __( 'Parent gallery:', 'text_domain' ),
      'all_items'             => __( 'All Galleries', 'text_domain' ),
      'add_new_item'          => __( 'Add New gallery', 'text_domain' ),
      'add_new'               => __( 'Add New', 'text_domain' ),
      'new_item'              => __( 'New gallery', 'text_domain' ),
      'edit_item'             => __( 'Edit gallery', 'text_domain' ),
      'update_item'           => __( 'Update gallery', 'text_domain' ),
      'view_item'             => __( 'View gallery', 'text_domain' ),
      'view_items'            => __( 'View Galleries', 'text_domain' ),
      'search_items'          => __( 'Search gallery', 'text_domain' ),
      'not_found'             => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
      'featured_image'        => __( 'Featured Image', 'text_domain' ),
      'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
      'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
      'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
      'insert_into_item'      => __( 'Insert into gallery', 'text_domain' ),
      'uploaded_to_this_item' => __( 'Uploaded to this gallery', 'text_domain' ),
      'items_list'            => __( 'Galleries list', 'text_domain' ),
      'items_list_navigation' => __( 'Galleries list navigation', 'text_domain' ),
      'filter_items_list'     => __( 'Filter Galleries list', 'text_domain' ),
    );
    $args = array(
      'label'                 => __( 'gallery', 'text_domain' ),
      'description'           => __( '', 'text_domain' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-cart',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,		
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
    );
    register_post_type( 'gallery', $args );
  
  }
  add_action( 'init', 'custom_post_type', 0 );
