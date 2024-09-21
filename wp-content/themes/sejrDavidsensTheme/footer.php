<footer>
  <article>
    <div class="internatInformation">
      <div class="icons">
        <i class="fa-solid fa-phone icon"></i>
        <i class="fa-solid fa-envelope icon"></i>
        <i class="fa-solid fa-location-dot icon"></i>
        <i class="fa-solid fa-copyright icon"></i>
        <p class="icon cvr">CVR</p>
      </div>
      <div class="information">
        <p>+45 3145 3394</p>
        <p>sejr&davidsen@outlook.com</p>
        <p>Dethererenadresse 108b</p>
        <p>Sejr&Davidsen</p>
        <p>35336609</p>
      </div>
    </div>
  </article>
  <article>
    <!-- funktionen get_theme_file_uri hjælper med at finde den fil der ligger i temaets mappe. Her bruger vi det til at finde vores billede -->
    <a href="<?php echo site_url("/forside") ?>"><img
        class="logo"
        src="<?php echo get_theme_file_uri('/assets/img/sejr--davidsens-high-resolution-logo-transparent.png'); ?>"
        alt="" /></a>
  </article>
  <article class="socialMedia">
    <i class="fa-brands fa-square-facebook"></i>
    <i class="fa-brands fa-square-instagram"></i>
    <i class="fa-brands fa-square-x-twitter"></i>
  </article>
</footer>

<!-- Her sætter vi Wordpress til at styre vores footer -->
<?php wp_footer() ?>
</body>

</html>