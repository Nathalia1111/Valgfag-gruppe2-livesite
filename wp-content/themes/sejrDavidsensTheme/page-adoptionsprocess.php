<?php
get_header();
?>
<main class="adoptionprocess-main">
  <div class="hero-process">
    <h1>Adoptionsprocess</h1>
  </div>

  <section class="breadcrumbs">
    <!-- Breadcrumbs er hard coded til at simulere child parent page relationship -->
    <a class="back" href="<?php echo site_url("/adoption") ?>"><i class="fa-solid fa-house"></i>Tilbage til adoption</a>
    <a class="stay" href="<?php echo site_url("/adoptionsprocess") ?>"><?php the_title(); ?></a>
  </section>
  <section class="introProcess">
    <div class="introText">
      <h2>Adoptionsprocess</h2>
      <p>
        At adoptere et kæledyr er en hjertevarmende oplevelse, der giver et
        dyr en ny chance for et kærligt hjem. Vores adoptionsproces er skabt
        for at sikre, at både du og dyret passer godt sammen, og at
        overgangen til det nye hjem bliver så tryg som muligt. Her kan du
        læse om de enkle trin, der guider dig fra interesse til at bringe
        dit nye familiemedlem hjem.
      </p>
    </div>

    <div class="navMenu">
       <!-- navMenu er hard coded til at simulere child parent page relationship -->
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

  <section class="springTil">
    <a href="#faq">Spring til: FAQ</a>
    <br />
    <br />
    <a href="#krav">Spring til: Krav til adoptanter</a>
  </section>
  <section class="trinForTrinSection">
    <h2>Adoptionsprocess trin for trin</h2>


    <div class="fullWidthBackground">
      <div class="greyBackground">
        <?php
        $args = array(
          'post_type' => 'trin-for-trin',
          'posts_per_page' => -1,
          'order' => 'ASC',
          'orderby' => 'menu_order'
        );
        $query = new WP_Query($args);

        while ($query->have_posts()) {
          $query->the_post(); ?>
          <div class="trinForTrin">
            <div>
              <span class="trinOverskrift"><?php the_title(); ?></span>
              <br>
              <br>
              <div>
                <?php the_content(); ?>
              </div>
            </div>
            <?php echo get_the_post_thumbnail(); ?>
          </div>
        <?php
        }
        wp_reset_postdata();
        ?>
      </div>
    </div>

    <section class="accordiansProcess">
      <div class="faqIntro">
        <h3 id="faq">FAQ</h3>
        <p>
          Ofte stillede spørgsmål (FAQ) hjælper med at afklare de mest
          almindelige spørgsmål, som besøgende og potentielle adoptanter måtte
          have. Her finder du information om alt fra vores adoptionsproces,
          til hvad der afgør prisen på de kæledyr, vi har til rådighed.
        </p>

        <details>
          <summary class="accordionStart">
            Hvordan foregår adoptionsprocessen?
          </summary>
          <div class="contentAccordian">
            <p>
              Når du har fundet et dyr, du er interesseret i, skal du udfylde
              en adoptionsansøgning. Herefter vil vi kontakte dig for en
              samtale, hvor vi taler om dine ønsker og behov, samt om dyrets
              personlighed og behov.
            </p>
            <p>
              Hvis vi vurderer, at du og dyret er et godt match, arrangerer vi
              et besøg, hvor du kan møde dyret. Hvis alt går godt, kan du tage
              dyret med hjem, efter alle formaliteter er på plads.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">
            Hvor meget koster det at adoptere et dyr?
          </summary>
          <div class="contentAccordian">
            <p>
              Adoptionsgebyret varierer afhængigt af dyrets art, alder og
              sundhedstilstand. Gebyret dækker omkostninger til vaccinationer,
              sterilisation/kastration, ID-mærkning, og eventuelle andre
              nødvendige behandlinger, dyret har modtaget.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">
            Er dyrene sundhedstjekket før adoption?
          </summary>
          <div class="contentAccordian">
            <p>
              Ja, alle dyr bliver sundhedsundersøgt af en dyrlæge, før de kan
              adopteres. De bliver også vaccineret, ID-mærket og
              steriliseret/kastreret. Vi vil give dig fuld information om
              dyrets helbredshistorie og eventuelle særlige behov.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">
            Kan jeg returnere mit adopteret dyr?
          </summary>
          <div class="contentAccordian">
            <p>
              Vi ønsker altid, at adoptionen skal være vellykket, men vi
              forstår, at det nogle gange ikke går som planlagt. Hvis det ikke
              fungerer mellem dig og dyret, bedes du kontakte os, så vi kan
              hjælpe med at finde en løsning. Dyret kan altid returneres til
              internatet.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">
            Må man have andre kæledyr i forvejen?
          </summary>
          <div class="contentAccordian">
            <p>
              Ja, men det er vigtigt, at de nuværende kæledyr er kompatible
              med det nye dyr. Vi vil diskutere dette med dig under
              adoptionsprocessen og kan tilbyde rådgivning om, hvordan du
              bedst introducerer det nye dyr til dine eksisterende kæledyr.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">
            Hvad hvis jeg bor til leje?
          </summary>
          <div class="contentAccordian">
            <p>
              Hvis du bor til leje, skal du have tilladelse fra din udlejer
              til at have kæledyr. Vi kan bede om at se en skriftlig
              tilladelse som en del af adoptionsprocessen.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">
            Kan jeg besøge dyret, før jeg adoptere?
          </summary>
          <div class="contentAccordian">
            <p>
              Ja, vi opfordrer stærkt til, at du besøger dyret flere gange,
              før du træffer en beslutning. Dette giver både dig og dyret
              mulighed for at blive bekendte med hinanden og sikre, at det er
              det rette match.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">
            Hvad nu hvis dyret har særlige behov?
          </summary>
          <div class="contentAccordian">
            <p>
              Hvis dyret har særlige behov, vil vi informere dig fuldt ud, og
              vi vil sikre os, at du er komfortabel med og i stand til at
              håndtere disse behov. Vi tilbyder også support og rådgivning
              efter adoptionen for at sikre, at både du og dyret trives.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">
            Hvordan er jeg sikker på, at vælge rigtigt?
          </summary>
          <div class="contentAccordian">
            <p>
              Vi hjælper dig gennem hele processen og giver dig så meget
              information som muligt om dyrets adfærd, personlighed og behov.
              Vi opfordrer til, at du tager dig god tid til at lære dyret at
              kende, inden du træffer din endelige beslutning.
            </p>
          </div>
        </details>
      </div>

      <div class="kravIntro">
        <h3 id="krav">Krav til adoptanter</h3>
        <p>
          At adoptere et kæledyr er en stor beslutning, og vi ønsker at sikre,
          at hvert dyr finder et trygt og kærligt hjem. Derfor har vi nogle
          grundlæggende krav til alle, der ønsker at adoptere fra vores
          dyrepension og internat.
        </p>

        <details>
          <summary class="accordionStart">Alder</summary>
          <div class="contentAccordian">
            <p>
              Adoptanter skal være mindst 18 år gamle. Dette sikrer, at du er
              myndig og i stand til at tage ansvar for dyret.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">Bopæl</summary>
          <div class="contentAccordian">
            <p>
              Du skal have en stabil og permanent bopæl, hvor det er tilladt
              at have kæledyr. Hvis du bor til leje, kræver vi, at du har en
              skriftlig tilladelse fra din udlejer til at holde kæledyr.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">Tid og engagement</summary>
          <div class="contentAccordian">
            <p>
              Du skal være i stand til at give dyret den tid og opmærksomhed,
              det har brug for. Dette inkluderer daglig pleje, træning,
              socialisering og dyrlægebesøg.
            </p>
            <p>
              Tænk på, om du har en arbejdsplan og livsstil, der giver dig
              mulighed for at tage dig ordentligt af et kæledyr.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">Økonomisk stabilitet</summary>
          <div class="contentAccordian">
            <p>
              At eje et kæledyr indebærer omkostninger til foder,
              dyrlægebesøg, forsikring og andre nødvendige udgifter. Du skal
              være økonomisk stabil og i stand til at dække disse
              omkostninger.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">
            Forståelse for langsigtet forpligtelse
          </summary>
          <div class="contentAccordian">
            <p>
              Når du adopterer et dyr, forpligter du dig til at tage vare på
              det i hele dets levetid, som kan være flere år eller endda
              årtier, afhængigt af dyret. Vi opfordrer til, at du nøje
              overvejer denne langsigtede forpligtelse.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">Tidligere</summary>
          <div class="contentAccordian">
            <p>
              Hvis du tidligere har haft kæledyr, vil vi gerne høre om dine
              erfaringer. Har du haft succes med at passe og træne dine
              tidligere kæledyr? Dette kan være en indikator for, om du er
              klar til at adoptere igen.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">Andet husdyr</summary>
          <div class="contentAccordian">
            <p>
              Hvis du har andre kæledyr i hjemmet, skal de være i stand til at
              leve fredeligt sammen med det nye dyr. Vi vil diskutere, hvordan
              du bedst kan introducere et nyt kæledyr til dine nuværende
              kæledyr for at sikre en harmonisk overgang.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">Hjemmebesøg</summary>
          <div class="contentAccordian">
            <p>
              Vi forbeholder os retten til at foretage et hjemmebesøg som en
              del af adoptionsprocessen. Dette er for at sikre, at miljøet er
              sikkert og egnet til det dyr, du ønsker at adoptere.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">Adoptionskontrakt</summary>
          <div class="contentAccordian">
            <p>
              Alle adoptanter skal underskrive en adoptionskontrakt, hvor du
              accepterer at passe godt på dyret og følge vores retningslinjer.
              Dette dokument sikrer, at begge parter forstår deres ansvar i
              adoptionsprocessen.
            </p>
          </div>
        </details>
        <details>
          <summary class="accordionStart">Efterfølgende kontakt</summary>
          <div class="contentAccordian">
            <p>
              Vi kan kontakte dig efter adoptionen for at sikre, at alt går
              godt, og at dyret trives i sit nye hjem. Vi tilbyder også støtte
              og rådgivning, hvis du skulle have brug for det efter
              adoptionen.
            </p>
          </div>
        </details>
      </div>
    </section>
</main>
<?php
get_footer();
?>