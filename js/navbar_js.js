// Charger la barre de navigation depuis le fichier navbar.php
fetch("../php/navbar.php")
.then(response => response.text())
.then(data => {
  const navbarContainer = document.querySelector("#navbar-container");
  navbarContainer.innerHTML = data;
});