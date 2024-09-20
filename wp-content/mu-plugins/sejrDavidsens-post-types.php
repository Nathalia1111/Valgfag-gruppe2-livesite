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

  // Trin For Trin Post Type
  register_post_type('trin-for-trin', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Trin',
      'add_new_item' => 'Add New Trin',
      'edit_item' => 'Edit Trin',
      'all_items' => 'All Trin',
      'singular_name' => 'Trin'
    ),
    'menu_icon' => 'dashicons-align-center'
  ));

  // Article Post Type - Det gode match mellem dyr og ejer
  register_post_type('article', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Artikel: Det gode match mellem dyr og ejer',
      'add_new_item' => 'Add New Article',
      'edit_item' => 'Edit Article',
      'all_items' => 'All Article',
      'singular_name' => 'Article'
    ),
    'menu_icon' => 'dashicons-media-default'
  ));

  // Article Post Type - Træningsguider
  register_post_type('article2', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Artikel: Træningsguider',
      'add_new_item' => 'Add New Article',
      'edit_item' => 'Edit Article',
      'all_items' => 'All Article',
      'singular_name' => 'Article'
    ),
    'menu_icon' => 'dashicons-media-default'
  ));

  // Article Post Type - General Vejledning
  register_post_type('article3', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Artikel: General Vejledning',
      'add_new_item' => 'Add New Article',
      'edit_item' => 'Edit Article',
      'all_items' => 'All Article',
      'singular_name' => 'Article'
    ),
    'menu_icon' => 'dashicons-media-default'
  ));
}

add_action('init', 'sejrdavidsens_post_types');
