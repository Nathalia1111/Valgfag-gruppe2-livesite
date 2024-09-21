<?php
get_header();
?>

<main class="traning-main">
  <div class="hero-dyrpension">
    <h1>Adfærdstræning</h1>
  </div>
  <section class="content-dyrepension">
    <div class="content-text-dyrepension">
      <h2>Styrk dit kæledyrs velvære og lydighed</h2>
      <p>Hos Sejr & Davidsens Dyrepension forstår vi, at et velafbalanceret kæledyr ikke blot handler om sundhed og pleje, men også om mental stimulering og adfærd. Vi tilbyder adfærdstræning for både hunde og katte, der kan forbedre deres sociale færdigheder, lydighed og generelle trivsel. Uanset om du har en hvalp, der skal lære de basale kommandoer, eller en voksen hund med adfærdsudfordringer, er vi her for at hjælpe.</p>
    </div>
    <img src="<?php echo get_theme_file_uri('/assets/img/hundDerHopper.jpg'); ?>" class="content-image-dyrepension" />
  </section>
  <section class="info-section-dyrepension">
    <div class="h2-dyrepension">
      <h2>Vores ydelser</h2>
    </div>
    <div class="info-grid-dyrepension">
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>Grundlæggende lydighedstræning</p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>Hvalpetræning</p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>Individuelle træningsplaner</p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>Jagt træning</p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>Socialiseringstræning</p>
      </div>
      <div class="info-item-dyrepension">
        <i class="fa-solid fa-paw"></i>
        <p>Problemløsning i hjemmet</p>
      </div>
    </div>
  </section>
  <section class="taps">
    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'lydighedstræning')">Lydighedstræning</button>
      <button class="tablinks" onclick="openCity(event, 'Hvalpetræning')">Hvalpetræning</button>
      <button class="tablinks" onclick="openCity(event, 'træningsplaner')">Træningsplaner</button>
      <button class="tablinks" onclick="openCity(event, 'Jagt træning')">Jagt træning</button>
      <button class="tablinks" onclick="openCity(event, 'Socialiseringstræning')">Socialiseringstræning</button>
      <button class="tablinks" onclick="openCity(event, 'Problemløsning i hjemmet')">Problemløsning i hjemmet</button>

    </div>

    <!-- Tab content -->
    <div id="lydighedstræning" class="tabcontent">
      <div class="tab-content-training">
        <div class="tab-text">
          <h3>Lydighedstræning</h3>
          <p>Vores grundlæggende lydighedstræning fokuserer på de essentielle kommandoer, der gør hverdagen med dit kæledyr lettere og mere harmonisk. Vi træner kommandoer som "sit", "bliv", "kom" og "fødderne ned", hvilket skaber en stærkere kommunikation mellem dig og dit kæledyr. Dette er ideelt for nye hundeejere, hvalpe eller hunde, der har brug for en opfriskning af deres færdigheder.</p>
          <a class="btn" href="#">Ring og høre mere</a>
        </div>
        <div class="tab-image">
          <img src="<?php echo get_theme_file_uri('/assets/img/hundDerHopper.jpg'); ?>" />
        </div>
      </div>
    </div>

    <div id="Hvalpetræning" class="tabcontent">
      <div class="tab-content-training">
        <div class="tab-text">
          <h3>Hvalpetræning</h3>
          <p>Vores hvalpetræning giver din hvalp den bedste start i livet. Gennem leg og positiv forstærkning lærer vi din hvalp grundlæggende færdigheder som socialisering, potte-træning og lydighed. Dette sikrer, at din hvalp vokser op til at blive en selvsikker og velopdragen hund, der er klar til at tackle forskellige situationer i hverdagen. Det er bedst at starte træningen, så snart din hvalp er kommet hjem og har vænnet sig til sin nye hverdag. Hvalpe er mest modtagelige for læring i alderen 8-16 uger, men selv efter denne periode er det aldrig for sent at begynde. Vores hvalpetræning kan tilpasses alle aldre og niveauer, så din hvalp får en tryg start på livet.</p>
          <a class="btn" href="#">Ring og høre mere</a>
        </div>
        <div class="tab-image">
          <img src="<?php echo get_theme_file_uri('/assets/img/hundehvalp.jpg'); ?>" />
        </div>
      </div>
    </div>

    <div id="træningsplaner" class="tabcontent">
      <div class="tab-content-training">
        <div class="tab-text">
          <h3>Træningsplaner</h3>
          <p>Hvert kæledyr er unikt, og derfor er deres træningsbehov det også. Vi tilbyder individuelle træningsplaner, hvor vi nøje tager højde for din hunds eller kats personlighed, vaner og behov. Vi arbejder tæt sammen med dig som ejer for at sikre, at træningen passer ind i din hverdag og opfylder dine forventninger. Vi ved, at træning er en dynamisk proces. Derfor evaluerer vi løbende din hunds fremskridt og tilpasser træningsplanen efter behov. Hvis din hund hurtigt lærer en færdighed, justerer vi planen for at sikre fortsat udvikling. </p>
          <a class="btn" href="#">Ring og høre mere</a>
        </div>
        <div class="tab-image">
          <img src="<?php echo get_theme_file_uri('/assets/img/Gladhundigras.jpg'); ?>" />
        </div>
      </div>
    </div>


    <div id="Jagt træning" class="tabcontent">
      <div class="tab-content-training">
        <div class="tab-text">
          <h3>Jagt træning</h3>
          <p>Vi tilbyder vi specialiseret jagttræning, der er designet til at udvikle og forfine dine jagthunds færdigheder. Uanset om du er en erfaren jæger eller ny til jagtsporten, kan vores træningsprogrammer hjælpe din hund med at opnå den nødvendige dygtighed og selvtillid til jagt.</p>

          <P>Vores erfarne instruktører bruger en kombination af klassiske og moderne træningsmetoder, som er tilpasset hver hunds unikke behov og færdigheder. Vi fokuserer på positiv forstærkning og belønning for at sikre, at din hund lærer på en effektiv og motiverende måde.</P>
          <a class="btn" href="#">Ring og høre mere</a>
        </div>
        <div class="tab-image">
          <img src="<?php echo get_theme_file_uri('/assets/img/hundJagt.jpg'); ?>" />
        </div>
      </div>
    </div>

    <div id="Socialiseringstræning" class="tabcontent">
      <div class="tab-content-training">
        <div class="tab-text">
          <h3>Socialiseringstræning</h3>
          <p>At socialisere dit kæledyr tidligt er afgørende for deres trivsel. Vi tilbyder socialiseringstræning, hvor kæledyret lærer at omgås andre dyr og mennesker i et trygt og kontrolleret miljø. Dette er især vigtigt for hvalpe og yngre kæledyr, Socialisering handler om at eksponere din hund for en række forskellige situationer, lyde, lugte, mennesker og dyr, så den kan lære at reagere positivt og uden frygt. Det er vigtigt, at hunden oplever nye ting på en kontrolleret og positiv måde, så den ikke udvikler angst eller aggression.</p>
          <a class="btn" href="#">Ring og høre mere</a>
        </div>
        <div class="tab-image">
          <img src="<?php echo get_theme_file_uri('/assets/img/tohundeglade.jpg'); ?>" />
        </div>
      </div>
    </div>

    <div id="Problemløsning i hjemmet" class="tabcontent">
      <div class="tab-content-training">
        <div class="tab-text">
          <h3>Problemløsning i hjemmet</h3>
          <p>Oplever du, at dit kæledyr har udviklet uønskede vaner i hjemmet, som at tigger, tygger i møbler eller opfører sig uroligt, når der er gæster? Vi tilbyder hjemmebaserede problemløsningssessioner, hvor vi kan adressere specifikke problemer og arbejde på at skabe en mere afbalanceret adfærd i hjemmet. Vi arbejder tæt sammen med dig og din hund for at identificere de specifikke adfærdsproblemer og finde en løsning. Vores tilgang er baseret på positiv forstærkning, hvor vi belønner ønsket adfærd, så din hund motiveres til at lære nye færdigheder på en positiv måde.</p>
          <a class="btn" href="#">Ring og høre mere</a>
        </div>
        <div class="tab-image">
          <img src="<?php echo get_theme_file_uri('/assets/img/Lillehundliggerned.jpg'); ?>" />
        </div>
      </div>
    </div>

  </section>
</main>
<?php
get_footer();
?>