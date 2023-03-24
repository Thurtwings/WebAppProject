// Charger la barre de navigation depuis le fichier navbar.html
fetch("navbar.html")
.then(response => response.text())
.then(data => {
  const navbarContainer = document.querySelector("#navbar-container");
  navbarContainer.innerHTML = data;
});