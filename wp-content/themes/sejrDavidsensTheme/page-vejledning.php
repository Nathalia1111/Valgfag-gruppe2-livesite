<?php
get_header();
?>
<main class="vejledning-main">
  <div class="hero-dyrpension">
    <h1>Vejledning</h1>
  </div>
  <section class="breadcrumbs">
    <a class="back" href="<?php echo site_url("/adoption") ?>"><i class="fa-solid fa-house"></i>Tilbage til adoption</a>
    <a class="stay" href="<?php echo site_url("/vejledning") ?>"><?php the_title(); ?></a>
  </section>
  <section class="introProcess">
    <div class="introText">
      <h2>Vejledning</h2>
      <p>
        Hos Sejr & Davidsens Dyrepension og -internat er vi mere end bare et sted, hvor dyr finder nye hjem – vi er også en kilde til viden og vejledning. Vores team består af erfarne dyreeksperter, der brænder for at dele deres indsigt og rådgivning med dyreejere og adoptanter.

        Du kan derfor læse en masse lærerig og vigtig info omkring alt fra træning, opdragelse, fodring og meget mere på siden her.
      </p>
    </div>

    <div class="navMenu">
      <a href="<?php echo site_url("/adoption") ?>" class="adoptionFelt">
        <h3>Adoption</h3>
      </a>

      <a href="<?php echo site_url("/adoptionsprocess") ?>" class="adoptionsprocessFelt">
        <h3>Adoptionsprocess</h3>
      </a>

      <a href="<?php echo site_url("/vejledning") ?>" class="vejledningFelt">
        <h3>Vejledning</h3>
      </a>
    </div>
  </section>

  <section class="image-grid-section">
    <h2 class="row-title-artikler">Det gode match mellem dyr og ejer</h2>
    <div class="image-grid-artikler">
      <?php
      // Vores kode henter og viser de tre nyeste posts fra vores custom post type. For hvert post vises en thumbnail og titlen.
      // Navnet args bruger man når man skal lave en liste af argumenter i form af en array.

      //  Vores custom query henter posts fra vores custom post type article og begrænser antallet til 3 posts.
      $args = array(
        'post_type' => 'article',
        'posts_per_page' => 3
      );
      $query = new WP_Query($args);

      // Den tjekker om der er nogen posts i vores custom query. Hvis der er, så fortsætter den med at vise indholdet.
      if ($query->have_posts()) {

        // Vores while loop går igennem vores posts og viser inholdet for hver vores custom query finder.
        while ($query->have_posts()) {
          $query->the_post(); ?>
          <div class="image-item-artikler">
            <?php if (has_post_thumbnail()) { ?>
              <div class="image-artikler">
                <?php the_post_thumbnail('full'); ?>
              </div>
            <?php } ?>
            <div class="image-text-artikler">
              <h3><?php the_title(); ?></h3>
            </div>
          </div>
      <?php }
        // wp_reset_postdata() nulstiller vores data, så andre dele af vores hjemmeside ikke bliver påvirket.
        wp_reset_postdata();
      }
      ?>

    </div>

    <h2 class="row-title-artikler">Træningsguider</h2>
    <div class="image-grid-artikler">
      <?php
      $args = array(
        'post_type' => 'article2',
        'posts_per_page' => 3
      );
      $query = new WP_Query($args);

      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post(); ?>
          <div class="image-item-artikler">
            <?php if (has_post_thumbnail()) { ?>
              <div class="image-artikler">
                <?php the_post_thumbnail('full'); ?>
              </div>
            <?php } ?>
            <div class="image-text-artikler">
              <h3><?php the_title(); ?></h3>
            </div>
          </div>
      <?php }
        wp_reset_postdata();
      }
      ?>

    </div>

    <h2 class="row-title-artikler">General Vejledning</h2>
    <div class="image-grid-artikler">
      <?php
      $args = array(
        'post_type' => 'article3',
        'posts_per_page' => 3
      );
      $query = new WP_Query($args);

      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post(); ?>
          <div class="image-item-artikler">
            <?php if (has_post_thumbnail()) { ?>
              <div class="image-artikler">
                <?php the_post_thumbnail('full'); ?>
              </div>
            <?php } ?>
            <div class="image-text-artikler">
              <h3><?php the_title(); ?></h3>
            </div>
          </div>
      <?php }
        wp_reset_postdata();
      }
      ?>

    </div>
  </section>


</main>
<?php
get_footer();
?>