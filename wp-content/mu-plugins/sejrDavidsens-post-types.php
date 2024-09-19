<?php

function sejrdavidsens_post_types()
{
  // Hund Post Type
  register_post_type('hund', array(
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'rewrite' => array('slug' => 'adoption'),
    'labels' => array(
      'name' => 'Hunde',
      'add_new_item' => 'Add New Hund',
      'edit_item' => 'Edit Hund',
      'all_items' => 'All Hunde',
      'singular_name' => 'Hund'
    ),
    'menu_icon' => 'dashicons-buddicons-activity'
  ));
}

add_action('init', 'sejrdavidsens_post_types');
