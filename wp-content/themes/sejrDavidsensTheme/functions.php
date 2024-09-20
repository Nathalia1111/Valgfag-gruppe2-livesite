<?php

function sejrDavidsens_files()
{
  wp_enqueue_style('custom-google-fonts', '//fonts.g
  oogleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
  wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css');
  wp_enqueue_style('sejrDavidsen_general_styles', get_theme_file_uri('assets/css/style.css'));
  wp_enqueue_script('sejrDavidsens_js', get_theme_file_uri('/assets/js/app.js'), NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'sejrDavidsens_files');

// Tilføjer thumbnail som tilføjer featured image inde på WordPress
function sejrDavidsens_features()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menu('headerNav', 'Header Navigation');
}

add_action('after_setup_theme', 'sejrDavidsens_features');
