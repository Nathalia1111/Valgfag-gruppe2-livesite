<?php

function sejrDavidsens_files()
{
  wp_enqueue_style('custom-google-fonts', '//fonts.g
  oogleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
  wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css');
  wp_enqueue_style('sejrDavidsen_general_styles', get_theme_file_uri('assets/css/style.css'));
  // wp_enqueue_style('sejrDavidsen_forside_styles', get_theme_file_uri('assets/css/forside.css'));
  // wp_enqueue_style('sejrDavidsen_adoption_styles', get_theme_file_uri('assets/css/adoption.css'));
  // wp_enqueue_style('sejrDavidsen_adoptionsprocess_styles', get_theme_file_uri('assets/css/adoptionsprocess.css'));
  // wp_enqueue_style('sejrDavidsen_hund_styles', get_theme_file_uri('assets/css/hund.css'));
  // wp_enqueue_style('sejrDavidsen_traning_styles', get_theme_file_uri('assets/css/traning.css'));
  // wp_enqueue_style('sejrDavidsen_vejledning_styles', get_theme_file_uri('assets/css/vejledning.css'));
  // wp_enqueue_style('sejrDavidsen_dyrepension_styles', get_theme_file_uri('assets/css/dyrepension.css'));
  // Common stylesheet
  wp_enqueue_style('sejrDavidsen_general_styles', get_theme_file_uri('/assets/css/style.css'));
}
add_action('wp_enqueue_scripts', 'sejrDavidsens_files');

// Tilføjer thumbnail som tilføjer featured image inde på WordPress
function sejrDavidsens_features()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'sejrDavidsens_features');
