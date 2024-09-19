<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head() ?>
</head>

<body>
  <header>
    <nav>
      <div class="header-logo">
        <a href="index.html">
          <img
            src="<?php echo get_theme_file_uri('/assets/img/sejr--davidsens-high-resolution-logo-transparent.png'); ?>"
            alt="header Logo sejr&davidsen"
            width="150px" />
        </a>
      </div>
      <div>
        <ul class="header-ul">
          <li><a href="index.php">Forside</a></li>
          <li><a href="archive-hund.php">Adoption</a></li>
          <li><a href="<?php echo site_url("/dyrepension") ?>">Dyrepension</a></li>
          <li><a href="page-traning.php">Adfærdstræning</a></li>
          <li><a href="#">Ekspertråd</a></li>
        </ul>
      </div>
    </nav>
  </header>