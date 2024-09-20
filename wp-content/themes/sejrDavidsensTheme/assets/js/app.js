// Få fat i alle elementer med klassen "accordionStart"
const accordionElements = document.querySelectorAll('.accordionStart');

// Funktion som håndterer klik på elementerne
accordionElements.forEach(el => {
  el.addEventListener('click', function() {
    // Hvis det klikkede element allerede har klassen "active", fjern den
    if (this.classList.contains('active')) {
      this.classList.remove('active');
    } else {
      // Fjern klassen "active" fra alle andre elementer
      accordionElements.forEach(item => item.classList.remove('active'));
      // Tilføj klassen "active" til det klikkede element
      this.classList.add('active');
    }
  });
});

function openCity(tap, cityName) {
  // Erklær alle variabler.
  let i, tabcontent, tablinks;

  // Hent alle elementer med klassen "tabcontent" og skjul dem.
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Henter alle elementer med klassen "tablinks" og fjern klassen "aktiv".
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Viser den aktuelle tab, og tilføj en "aktiv" klasse til knappen, der åbnede tab'en.
  document.getElementById(cityName).style.display = "block";
  tap.currentTarget.className += " active";
}

// åbner vores første tap når brugere gå ind på sideb
document.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".tablinks").click(); // laver et click på første tap
});