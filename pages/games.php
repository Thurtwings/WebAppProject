<?php
    require_once("../php/Utilities.php");
    $utils = new Utilities(0);
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Jeux</title>


  <link rel="stylesheet" href="../css/style.css">
  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
  



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</head>

<body class="games">
<div id="navbar-container"></div>
  
  <main class="bg-image"style="background-image: url('../img/backgroundMinecraft.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;" height: 100vh;>

<div class="container my-5 ">
    <div class="card mb-3">
      <img src="../img/fondTitreVideos.jpg" class="card-img-top"  alt="Wild Landscape"/>
      <div class="card-body bg-light bg-opacity-25">
          <h2 class="card-title art-degrade fw-bold text-center text-uppercase display-4">Le coin des jeux </h2>
          <p class="card-text text-center fs-4">Retrouvez les infos de vos jeux préférés !</p>
      </div>
    </div>
    <?php 
      for ($i=0; $i < 2 ; $i++) 
        { 
          echo "<br>";
        }
    ?>

            
<!-- Cards -->
<div class="album py-5 bg-success bg-opacity-50">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
            <?php foreach ($utils->SelectAll('games') as $key => $value): ?>
                <div class="col">
                    <div class="card mdb-card shadow-sm bg-success bg-opacity-50">
                        <div class="view overlay">
                            <img src="../img/Games/<?php echo $value["game_picture"]; ?>"
                                 class="card-img-top" alt="image du jeu" height="300">
                        </div>
                        <div class="card-body d-flex flex-column justify-content-center">
                            <h5 class="card-title text-center text-uppercase fw-bold game-title text-white"><?php echo $value['title']; ?></h5>

                            <p class="card-text game_description text-white" style="text-align:justify"><?php echo $value['description']; ?></p>
                            <a href="#game_description" class="btn btn-primary btn-lire-game_description align-self-center">Lire l'article</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

</div>
</main>
      
  <script>
    // On cache le texte de l'article au chargement de la page
    document.querySelectorAll(".game_description").forEach(function (element) {
        element.style.display = "none";
    });
    // On ajoute un gestionnaire d'événement sur tous les boutons "Lire l'article"
    document.querySelectorAll(".btn-lire-game_description").forEach(function (bouton) {
        bouton.addEventListener("click", function () {
            var resumeText = this.parentNode.querySelector(".game_description");
            var titleText = this.parentNode.querySelector(".game-title");
            var reduireBtn = this.nextElementSibling;

            if (resumeText.style.display === "none") {
                resumeText.style.display = "block";
                titleText.textContent = titleText.getAttribute('data-full-title');
                this.textContent = "Réduire l'article";
                reduireBtn.style.display = "inline-block";
            } else {
                resumeText.style.display = "none";
                titleText.textContent = titleText.getAttribute('data-truncated-title');
                this.textContent = "Lire l'article";
                reduireBtn.style.display = "none";
            }
        });
    });

    // On tronque le titre de chaque carte à 15 caractères et on stocke la version tronquée et complète en attributs
    document.querySelectorAll(".game-title").forEach(function (element) 
    {
        var fullTitle = element.textContent.trim();
        var truncatedTitle = fullTitle.substring(0, 15).trim();
        element.textContent = truncatedTitle;
        element.setAttribute("data-full-title", fullTitle);
        element.setAttribute("data-truncated-title", truncatedTitle);
    });
  </script>

   
  

<script src="../js/navbar_js.js"></script>
<script src="../js/footer_js.js"></script>
<script src="../js/carousel.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

</body>

<div id="footer-container"></div>
</html>