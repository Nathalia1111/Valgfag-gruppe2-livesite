<?php
get_header();
?>
<main class="hund-main">
  <section class="specificDogInformationContainer">
    <h1><?php echo get_the_title(); ?></h1>
    <div class="imagesAndContact">
      <article class="dogImages">
        <div class="bigImg">
          <?php echo get_the_post_thumbnail(); ?>
        </div>
        <div class=" smallImgs">
          <img src="./assets/img/goldenRetrieverCharlie.jpg" alt="" />
          <img src="./assets/img/goldenRetrieverCharlie.jpg" alt="" />
          <img src="./assets/img/goldenRetrieverCharlie.jpg" alt="" />
        </div>
      </article>

      <article class="container">
        <h2>Kontakt os omkring Charlie</h2>
        <form action="action_page.php">
          <label for="name"></label>
          <input
            type="text"
            id="name"
            name="firstname"
            placeholder="Dit navn.." />

          <label for="Email"></label>
          <input
            type="text"
            id="email"
            name="firstname"
            placeholder="Din email" />

          <label for="number"></label>
          <input
            type="text"
            id="number"
            name="firstname"
            placeholder="Dit telefon nr." />

          <label for="subject"></label>
          <textarea
            id="subject"
            name="subject"
            placeholder="Skriv en besked"
            style="height: 80px"></textarea>
          <input type="submit" value="Send beskeden" />
        </form>
      </article>
    </div>

    <article class="dogMetaData">
      <div>
        <h4>Alder:</h4>
        <p><?php echo get_field('alder'); ?></p>

        <h4>Vægt:</h4>
        <p><?php echo get_field('vaegt'); ?> kg</p>
      </div>

      <div>
        <h4>Køn:</h4>
        <p><?php echo get_field('koen'); ?></p>

        <h4>Pris:</h4>
        <p><?php echo get_field('pris'); ?> kr</p>
      </div>

      <div>
        <h4>Race:</h4>
        <p><?php echo get_field('race'); ?></p>

        <h4>Chipped:</h4>
        <p><?php echo get_field('chipped'); ?></p>
      </div>
    </article>

    <article class="beskrivelse">
      <h4>Beskrivelse:</h4>
      <p>
        Charlie er en lille, blød golden retriever hvalp, der elsker at
        udforske verden på sine små gåture. Han er altid fuld af energi, men
        efter en lang tur falder han hurtigt i søvn, puttet og afslappet.
        Charlie er kærlig, legesyg og rigtig sød.
      </p>
    </article>
  </section>

  <section class="forsideDyrTilAdoption">
    <h2>Andre der søger et hjem</h2>
    <div class="titles">
      <p>Mød flere søde dyr der venter</p>
      <a href="">Se alle dyrene <i class="fa-solid fa-arrow-right"></i></a>
    </div>

    <section class="animalCards">
      <article class="animalCard">
        <a class="animalCard" href="">
          <img src="./assets/img/catCosmo.jpg" alt="" />
          <article class="animalCardInfo">
            <h3>Cosmo</h3>
            <div class="gender">
              <p>Han</p>
              <i class="fa-solid fa-mars"></i>
            </div>
          </article>
        </a>
      </article>

      <article class="animalCard">
        <a href="#">
          <img src="./assets/img/goldenRetrieverCharlie.jpg" alt="" />
          <div class="animalCardInfo">
            <h3>Charlie</h3>
            <div class="gender">
              <p>Han</p>
              <i class="fa-solid fa-mars"></i>
            </div>
          </div>
        </a>
      </article>

      <article class="animalCard">
        <a href="">
          <img src="./assets/img/goldenRetrieverCharlie.jpg" alt="" />
          <article class="animalCardInfo">
            <h3>Molly</h3>
            <div class="gender">
              <p>Tæve</p>
              <i class="fa-solid fa-venus"></i>
            </div>
          </article>
        </a>
      </article>

      <article class="animalCard">
        <a href="">
          <img src="./assets/img/bunnyPjuske.jpg" alt="" />
          <article class="animalCardInfo">
            <h3>Pjuske</h3>
            <div class="gender">
              <p>Han</p>
              <i class="fa-solid fa-mars"></i>
            </div>
          </article>
        </a>
      </article>
    </section>
  </section>
</main>

<?php
get_footer();
?>