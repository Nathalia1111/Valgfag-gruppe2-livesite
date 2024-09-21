<?php

function sejrDavidsens_files()
{
  // her bruger vi wp_enqueue_style til at blandt andet hente vores google fonts, font awesome ikoner og til at linke vores style.css. 
  wp_enqueue_style('custom-google-fonts', '//fonts.g
  oogleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
  wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css');
  wp_enqueue_style('sejrDavidsen_general_styles', get_theme_file_uri('assets/css/style.css'));
  wp_enqueue_script('sejrDavidsens_js', get_theme_file_uri('/assets/js/app.js'), NULL, '1.0', true);
  // Vores wp_enqueue_scripts bruges til at link vores JavaScript.
  // NULL = hvis din JavaScript ikke afhænger af anden JavaScript
  // 1.0 = versionsnummeret på dit script
  // true = indlæses i bunden af siden i stedet for i head-sektionen
}

// Vi tilføjer add_action for at køre vores funktion.
add_action('wp_enqueue_scripts', 'sejrDavidsens_files');

function sejrDavidsens_features()
{
  // Add_theme_suppoty giver muligheden for at understøtte specifikke WordPress funktioner, som ellers ikke ville være tilgængelige.
  // Tilføjer title tags i browseren dynamisk
  add_theme_support('title-tag');
  // Tilføjer thumbnail som tilføjer featured image inde på WordPress
  add_theme_support('post-thumbnails');
  // Den giver mulighed for at oprette en menu i WordPress Admin
  register_nav_menu('headerNav', 'Header Navigation');
}

add_action('after_setup_theme', 'sejrDavidsens_features');
