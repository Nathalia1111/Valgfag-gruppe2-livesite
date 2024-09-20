<?php
get_header();
?>
<main class="forside-main">
  <section class="forsideHero exception">
    <article class="forsideHeroImg">
      <img src="<?php echo get_theme_file_uri('/assets/img/forsideHero.jpg'); ?>" />
    </article>
    <article>
      <h1>Velkommen til Sejr & Davidsens Dyrepension og -internat</h1>
      <p>Et trygt og omsorgsfuldt sted for dine elskede kæledyr.</p>
    </article>
  </section>
  <section class="forsideIntro exception">
    <article class="introImg">
      <img src="<?php echo get_theme_file_uri('/assets/img/introImg.jpg'); ?>" alt="" />
    </article>
    <article>
      <p>
        Vi tilbyder professionel pasning og pleje i et hjemligt miljø, hvor
        dyrenes trivsel er vores højeste prioritet.
      </p>
      <p>
        Uanset om du har brug for korttidsophold, langvarig pleje, eller et
        sted, hvor forladte dyr kan finde deres nye hjem, er vi her for at
        hjælpe. Vores erfarne personale sørger for, at hvert dyr får den
        opmærksomhed og kærlighed, det fortjener, mens du er væk, eller
        indtil det finder sin nye familie.
      </p>
    </article>
  </section>
  <section class="forsideDyrTilAdoption">
    <article class="titles">
      <h2>Dyr til adoption</h2>
      <a href="<?php echo site_url("/adoption") ?>">Se alle dyrene <i class="fa-solid fa-arrow-right"></i></a>
    </article>

    <section class="animalCards">
      <article class="animalCard">
        <a class="animalCard" href="#">
          <img src="<?php echo get_theme_file_uri('/assets/img/catCosmo.jpg'); ?>" alt="" />
          <article class="animalCardInfo">
            <h3>Cosmo</h3>
            <div class="gender">
              <p>Han</p>
            </div>
          </article>
        </a>
      </article>

      <article class="animalCard">
        <a href="<?php echo site_url("/adoption/charlie") ?>">
          <img src="<?php echo get_theme_file_uri('/assets/img/goldenRetrieverCharlie.jpg'); ?>" alt="" />
          <div class="animalCardInfo">
            <h3>Charlie</h3>
            <div class="gender">
              <p>Han</p>
            </div>
          </div>
        </a>
      </article>

      <article class="animalCard">
        <a href="<?php echo site_url("/adoption/molly") ?>">
          <img src="<?php echo get_theme_file_uri('/assets/img/pomeranianMolly.jpg'); ?>" alt="" />
          <article class="animalCardInfo">
            <h3>Molly</h3>
            <div class="gender">
              <p>Tæve</p>
            </div>
          </article>
        </a>
      </article>

      <article class="animalCard">
        <a href="#">
          <img src="<?php echo get_theme_file_uri('/assets/img/bunnyPjuske.jpg'); ?>" alt="" />
          <article class="animalCardInfo">
            <h3>Pjuske</h3>
            <div class="gender">
              <p>Han</p>
            </div>
          </article>
        </a>
      </article>
    </section>
  </section>
  <section class="forsideFEP">
    <article class="adoptionFEP mainFocusEntryPoint focusEntryPoint">
      <h3>Adoption</h3>
      <p>Find din nye ven</p>
      <a class="btn" href="<?php echo site_url("/adoption") ?>">Se dyr til adoption</a>
    </article>

    <div>
      <article class="treaningFEP smallFocusEntryPoint focusEntryPoint">
        <h3>Træning</h3>
        <p>Skab gode vaner sammen</p>
        <a class="btn" href="<?php echo site_url("/traning") ?>">Start nu</a>
      </article>

      <article class="vejledningFEP smallFocusEntryPoint focusEntryPoint">
        <h3>Vejledning</h3>
        <p>Ekspertrådgivning til dyreejere</p>
        <a class="btn" href="<?php echo site_url("/vejledning") ?>">Læs dem her</a>
      </article>
    </div>
  </section>
  <section class="forsideVærdier exception">
    <h2 class="værdierTitel">Værdier</h2>
    <p class="værdierTitel undertitel">
      Hos Sejr & Davidsens Dyrepension og -internats er målet at:
    </p>
    <div class="info-grid-dyrepension">
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>
          Give dyreejere et trygt og professionelt sted at efterlade deres
          dyr i afgrænsede perioder
        </p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>
          Give dyreejere et trygt og professionelt sted at aflevere de dyr,
          de ikke har mulighed for at have længere
        </p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>
          Give myndigheder et sikkert og professionelt sted at aflevere
          herreløse eller mishandlede dyr
        </p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>
          Give fremtidige dyreejere et trygt og professionelt sted at
          adoptere dyr fra
        </p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>
          Give forladte eller mishandlede dyr pleje og adfærdstræning, så de
          kan bortadopteres til nye familier
        </p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>Give dyreejere tilbud om adfærdstræning af deres dyr</p>
      </div>
    </div>
  </section>

  <section class="forsideBesøg exception">
    <article>
      <h1>Besøg Sejr & Davidsens Dyrepension og -internat</h1>
      <p>Se hvordan dyrene trives hos os</p>
      <a class="btn" href="#">Book dit besøg</a>
    </article>
  </section>
</main>

<?php
get_footer();
?>