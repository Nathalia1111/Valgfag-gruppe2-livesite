<?php
get_header();
?>
<main class="archive-main">
  <div class="hero-adoption">
    <h1>Adoption</h1>
  </div>
  <section class="introAdoption">
    <div class="introText">
      <h2>Adoption</h2>
      <p>
        Hos Sejr & Davidsens Dyrepension og -internat arbejder vi hver dag
        for at sikre, at alle dyr får en ny chance i et kærligt og trygt
        hjem. Vi ved, at hvert dyr har sin egen unikke historie, og vi er
        her for at hjælpe dem med at finde den rigtige familie, hvor de kan
        trives.
      </p>
      <p>
        Vores adoptionsproces er grundig og omsorgsfuld, da vi ønsker at
        skabe det bedste match mellem dyret og dets nye ejer. Når du
        adopterer hos os, får du ikke bare et kæledyr, men en ven for livet,
        der vil bringe glæde og kærlighed ind i dit hjem. Vi støtter dig
        hele vejen gennem adoptionsprocessen og tilbyder efterfølgende
        rådgivning, så både du og dit nye kæledyr får den bedst mulige start
        sammen.
      </p>
      <p>
        Uanset om du er på udkig efter en ny hund, kat eller et andet
        kæledyr, står vores team klar til at hjælpe dig med at finde det
        perfekte match. Kom og mød vores dejlige dyr, og bliv en del af
        vores mission om at give dem en ny chance for et lykkeligt liv.
      </p>
    </div>

    <div class="navMenu">
      <!-- Her fortæller vi hvilken side den skal linke til -->
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

  <section class="dogAndCatFilter">
    <h3>Filtre:</h3>
    <div class="dyreValg hunde">
      <a href="#">
        <p>Hunde</p>
      </a>
    </div>
    <div class="dyreValg katte">
      <a href="#">
        <p>Katte</p>
      </a>
    </div>
  </section>

  <section class="filterSection">
    <section class="filterBox">
      <form>
        <!-- Alder sektion -->
        <legend>Alder</legend>
        <label>
          0-6 måneder:
          <input type="checkbox" name="filter" value="option1" />
        </label>

        <label>
          7-11 måneder:
          <input type="checkbox" name="filter" value="option2" />
        </label>

        <label>
          1-3 år:
          <input type="checkbox" name="filter" value="option3" />
        </label>

        <label>
          4-6 år:
          <input type="checkbox" name="filter" value="option4" />
        </label>
        <hr />
        <!-- Køn sektion -->
        <legend>Køn</legend>
        <label>
          Han:
          <input type="checkbox" name="filter" value="option1" />
        </label>

        <label>
          Tæve:
          <input type="checkbox" name="filter" value="option2" />
        </label>
        <hr />
        <!-- Race sektion -->
        <legend>Race</legend>
        <label>
          Schæfer:
          <input type="checkbox" name="filter" value="option1" />
        </label>

        <label>
          Labrador Retriever:
          <input type="checkbox" name="filter" value="option2" />
        </label>

        <label>
          Drever:
          <input type="checkbox" name="filter" value="option3" />
        </label>

        <label>
          Pudel:
          <input type="checkbox" name="filter" value="option4" />
        </label>

        <label>
          Rottweiler:
          <input type="checkbox" name="filter" value="option5" />
        </label>
        <hr />
        <!-- Vægt sektion -->
        <legend>Vægt</legend>
        <label>
          0-2 kg:
          <input type="checkbox" name="filter" value="option1" />
        </label>

        <label>
          3-5 kg:
          <input type="checkbox" name="filter" value="option2" />
        </label>

        <label>
          6-10 kg:
          <input type="checkbox" name="filter" value="option3" />
        </label>

        <label>
          11-20 kg:
          <input type="checkbox" name="filter" value="option4" />
        </label>
        <hr />
        <!-- Pris sektion -->
        <legend>Pris</legend>
        <label>
          1.000-3.000 DKK:
          <input type="checkbox" name="filter" value="option1" />
        </label>

        <label>
          4.000-9.000 DKK:
          <input type="checkbox" name="filter" value="option2" />
        </label>

        <label>
          10.000-15.000 DKK:
          <input type="checkbox" name="filter" value="option3" />
        </label>
        <hr />
        <!-- Chipped sektion -->
        <legend>Chipped</legend>
        <label>
          Ja:
          <input type="checkbox" name="filter" value="option1" />
        </label>

        <label>
          Nej:
          <input type="checkbox" name="filter" value="option2" />
        </label>

        <button type="submit">Anvend filtre</button>
      </form>
    </section>

    <section class="animalCards">
      <article class="animalCard">

        <!-- Vi har et while lopp der siger: så længe der er posts i vores custom post type, så skal den vise indholdet af posten og så genere den strukturen af den.-->
        <?php while (have_posts()) {
          the_post();
        ?>
          <!-- get_the_permalink får url'en til den konkrette post.  -->
          <a href="<?php echo get_the_permalink() ?>">
            <!-- get_the_post_thumbnail får postens thumbnail.  -->
            <?php echo get_the_post_thumbnail() ?>
            <article class="animalCardInfo">
              <!-- the_title får postens titel  -->
              <h3><?php the_title(); ?></h3>
              <div class="gender">
                <!-- get_field('køn') får hvilket køn hunden har fra vores ACF -->
                <p><?php echo get_field('koen') ?></p>
              </div>
            </article>
          </a>
        <?php }
        ?>
      </article>
    </section>
  </section>
</main>
<?php
get_footer();
?>