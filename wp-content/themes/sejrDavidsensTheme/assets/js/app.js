// Vores kode, Accordion, sørge for at man kan klikke på elementer for at åbne og lukke indholdt.
// Får fat i alle elementer med klassen "accordionStart"
const accordionElements = document.querySelectorAll('.accordionStart');

// Funktion som håndterer klik på elementerne
accordionElements.forEach(el => {
  el.addEventListener('click', function() {
    // Hvis det klikkede element allerede har klassen "active", fjerner den det
    if (this.classList.contains('active')) {
      this.classList.remove('active');
    } else {
      // Fjerner klassen "active" fra alle andre elementer
      accordionElements.forEach(item => item.classList.remove('active'));
      // Tilføjer klassen "active" til det element man har klikket
      this.classList.add('active');
    }
  });
});


// Vores kode styrer tab funktionen, hvor man kan klikke på forskellige tabs for at vise indholdet der tilhører den specifikke tab.
function openCity(tap, cityName) {
  // Her erklær vi vores variabler.
  let i, tabcontent, tablinks;

  // Henter alle elementer med klassen "tabcontent" og gemmer dem.
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Henter alle elementer med klassen "tablinks" og fjerner klassen "active".
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Viser den aktuelle tab, og tilføjer "active" klassen til knappen, der åbnede tab'en.
  document.getElementById(cityName).style.display = "block";
  tap.currentTarget.className += " active";
}

// åbner vores tap når man går ind på siden
document.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".tablinks").click(); // laver et click på den første tap
});