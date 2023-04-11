// Charger le footer depuis le fichier footer.php

fetch("../php/footer.php")
.then(response => response.text())
.then(data => 
  {
  const footerContainer = document.querySelector("#footer-container");
  footerContainer.innerHTML = data;
});