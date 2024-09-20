<!DOCTYPE html>
<html lang="en">

<head>
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
        wp_nav_menu(array(
          'theme_location' => 'headerNav',
          'menu_class' => 'header-ul',
        ));
        ?>
      </div>
    </nav>
  </header>
  <!-- <li><a href="<?php echo site_url("/forside") ?>">Forside</a></li>
        <li><a href="<?php echo site_url("/adoption") ?>">Adoption</a></li>
        <li><a href="<?php echo site_url("/dyrepension") ?>">Dyrepension</a></li>
        <li><a href="<?php echo site_url("/traning") ?>">Adfærdstræning</a></li> -->
  <!-- <li><a href="#">Ekspertråd</a></li> -->