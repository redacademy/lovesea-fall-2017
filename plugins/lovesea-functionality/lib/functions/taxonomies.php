<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
function lovesea_tax_gallery_type() {
  
    $labels = array(
      'name'                       => 'gallery Types',
      'singular_name'              => 'gallery Type',
      'menu_name'                  => 'gallery Types',
      'all_items'                  => 'All gallery Types',
      'parent_item'                => 'Parent gallery Type',
      'parent_item_colon'          => 'Parent gallery Type:',
      'new_item_name'              => 'New gallery Type Name',
      'add_new_item'               => 'Add New gallery Type',
      'edit_item'                  => 'Edit gallery Type',
      'update_item'                => 'Update gallery Type',
      'view_item'                  => 'View gallery Type',
      'separate_items_with_commas' => 'Separate gallery Types with commas',
      'add_or_remove_items'        => 'Add or remove gallery Types',
      'choose_from_most_used'      => 'Choose from the most used',
      'popular_items'              => 'Popular gallery Types',
      'search_items'               => 'Search gallery Types',
      'not_found'                  => 'Not Found',
      'no_terms'                   => 'No gallery Types',
      'items_list'                 => 'gallery Types list',
      'items_list_navigation'      => 'gallery Types list navigation',
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
    );
    register_taxonomy( 'gallery-type', array( 'gallery' ), $args );
  
  }
  add_action( 'init', 'lovesea_tax_gallery_type', 0 );
