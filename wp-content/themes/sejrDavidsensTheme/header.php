<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Her siger vi at Wordpress skal styre vores head -->
  <?php wp_head() ?>
</head>

<body>
  <header>
    <nav>
      <div class="header-logo">
        <a href="<?php echo site_url("/forside") ?>">
          <img
            src="<?php echo get_theme_file_uri('/assets/img/sejr--davidsens-high-resolution-logo-transparent.png'); ?>"
            alt="header Logo sejr&davidsen"
            width="150px" />
        </a>
      </div>
      <div>
        <?php
        // wp_nav_manu bruges til at vise ens navigation på vores hjemmeside. Funktionen giver mulighed for at tilføje menuer fra WordPress admin. Den skal bruge en associative array som argument.
        wp_nav_menu(array(
          // vi skriver theme_location for at den ved hvordan skal finde vores header navigation
          'theme_location' => 'headerNav',
          // vi bruger menu_class til at tilføje en class til ul som wp_nav_menu automatisk generere.
          'menu_class' => 'header-ul',
        ));
        ?>
      </div>
    </nav>
        <li><a href="<?php echo site_url("/traning") ?>">Adfærdstræning</a></li> -->
  <!-- <li><a href="#">Ekspertråd</a></li> -->