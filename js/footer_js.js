// Charger lle footer depuis le fichier footer.html
fetch("footer.html")
.then(response => response.text())
.then(data => {
  const navbarContainer = document.querySelector("#footer-container");
  navbarContainer.innerHTML = data;
});