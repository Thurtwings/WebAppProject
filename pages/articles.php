<?php
    require_once("../php/Utilities.php");
    $utils = new Utilities(0);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Utilisation d'un template MDB pour la disposition des cards -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Album example · Bootstrap</title>


  <link rel="stylesheet" href="../css/style.css">
  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
  



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://unpkg.com/css-doodle@0.34.8/css-doodle.min.js"></script>


</head>

<body class="articles">

<div id="navbar-container"></div>
  
  <main class="bg-image"style="background-image: url('../img/AccueilFond.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;" height: 100vh;>

  <div class="container my-5 ">
        <!--Card présentant l'article-->
        <div class="card mb-3">
            <img src="../img/fondTitreVideos.jpg" class="card-img-top" alt="Wild Landscape"/>
                <div class="card-body bg-light bg-opacity-25">
                    <h2 class="card-title art-degrade fw-bold text-center text-uppercase display-4">Le coin des articles</h2>
                    <p class="card-text text-center fs-4">Pour tout connaître et tout savoir - Vos articles et tutoriels !</p>
                </div>
        </div>
      
        <!-- Petite boucle PHP permettant de générer des retour à la ligne -->
        <?php for ($i=0; $i < 2 ; $i++) 
            { 
            echo "<br>";
            }
        ?>
        
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
               
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                    <div class="card my-4 bg-success bg-opacity-75">
                        <img src="../img/article01Image.png" class="card-img-top" alt="Image d'illustration">
                        <div class="card-body">
                            <h5 class="card-title fs-3 fw-bold text-white">Le speedrun kesako?!</h5>
                            <p class="card-text article-text text-white" style="text-align:justify">
                            Le speedrun est une pratique de jeu vidéo consistant à terminer un jeu aussi rapidement que possible. Les joueurs s'entraînent pour atteindre des temps records en utilisant des techniques spécifiques, telles que des bugs ou des raccourcis, pour finir le jeu plus rapidement.<br><br>
                            
                            Le speedrun a connu une évolution rapide ces dernières années. Avec l'essor des réseaux sociaux et des plateformes de streaming, de plus en plus de joueurs ont commencé à s'intéresser à cette pratique. Les communautés en ligne se sont développées, permettant aux joueurs de partager des astuces et des techniques pour améliorer leurs temps. De plus, de nombreux événements de speedrun ont été organisés à travers le monde, attirant des milliers de spectateurs en ligne et en personne.<br><br>
                            
                            Le speedrun est devenu une pratique très compétitive, avec des records du monde très convoités et une forte culture de la rivalité entre les joueurs. Les jeux les plus populaires pour le speedrun sont souvent les jeux classiques de l'ère des consoles, comme les jeux Super Mario Bros, The Legend of Zelda ou Sonic the Hedgehog.<br><br>
                            
                            Malgré cette popularité croissante, certains critiques ont mis en avant des inquiétudes concernant l'utilisation de logiciels tiers pour aider les joueurs à améliorer leurs temps, ou le risque de causer des dommages au matériel de jeu. Cependant, la communauté du speedrun continue à prospérer et à se développer, avec de nouveaux jeux et des records du monde battus régulièrement.<br><br>
                            </p>

                            <a href="#article-text" class="btn btn-primary btn-lire-article">Lire l'article</a>
                            <small class="d-flex justify-content-end text-white fs-6"><a  href="" class="text-dark fw-bold"><?php echo  $utils->Get("username", "users", "id", $utils->Get("user_id","articles","article_id", 2) );?></a></small>
                        </div>
                    </div>

                    <?php for ($i=0; $i < 2 ; $i++) 
                        { 
                        echo "<br>";
                        }
                    ?>

                    <div class="card my-4 bg-success bg-opacity-75">
                        <img src="../img/HowStartSR.png" class="card-img-top" alt="Image d'illustration">
                        <div class="card-body">
                            <h5 class="card-title fs-3 fw-bold text-white">Tuto: démarrer le speedrun</h5>
                            <p class="card-text article-text text-white" style="text-align:justify">
                            Vous souhaitez démarrer le speedrun? On vous aide, voici quelques étapes de base pour commencer :<br><br>

                            1.Choisissez un jeu : Tout d'abord, vous devez choisir le jeu que vous souhaitez speedrunner. Il peut s'agir de n'importe quel jeu, mais il est préférable de commencer par un jeu avec lequel vous êtes familier et que vous aimez jouer.<br><br>

                            2.Apprenez le jeu : Pour réussir un speedrun, vous devez être très familier avec le jeu. Prenez le temps de jouer au jeu plusieurs fois et d'apprendre tous les niveaux, les ennemis et les objets. Regardez également des vidéos de speedruns existants pour voir comment les autres joueurs ont réussi.<br><br>

                            3.Trouvez des astuces : Les astuces sont des techniques qui permettent de terminer un jeu plus rapidement. Recherchez sur internet des astuces pour le jeu que vous avez choisi, regardez des vidéos de speedruns pour en apprendre davantage sur les astuces que les autres joueurs utilisent.<br><br>

                            4.Entraînez-vous : Le speedrun est une pratique qui exige beaucoup de temps et de pratique. Entraînez-vous en utilisant les astuces que vous avez apprises et essayez de battre votre propre temps à chaque fois que vous jouez.<br><br>

                            5.Utilisez des outils : Pour vous aider à améliorer votre temps de speedrun, utilisez des outils tels que des chronomètres et des compteurs de frames. Ces outils peuvent vous aider à suivre votre progression et à identifier les domaines dans lesquels vous pouvez vous améliorer.<br><br>

                            En suivant ces étapes de base, vous pouvez commencer votre voyage dans le monde passionnant du speedrun. N'oubliez pas de rester patient et persévérant, car le speedrun peut être un défi difficile mais extrêmement gratifiant. Bonne chance !<br><br>
                            </p>

                            <a href="#article-text" class="btn btn-primary btn-lire-article">Lire l'article</a>
                            <small class="d-flex justify-content-end text-white fs-6"><a  href="" class="text-dark fw-bold"><?php echo  $utils->Get("username", "users", "id", $utils->Get("user_id","articles","article_id", 4) );?></a></small>
                        </div>
                    </div>
                </div>
            </div>
            
            <script>
                // On cache le texte de l'article au chargement de la page
                document.querySelectorAll(".article-text").forEach(function(element) {
                    element.style.display = "none";
                });

                // On ajoute un gestionnaire d'événement sur tous les boutons "Lire l'article"
                document.querySelectorAll(".btn-lire-article").forEach(function(bouton) {
                    bouton.addEventListener("click", function() {
                        var articleText = this.parentNode.querySelector(".article-text");

                        if (articleText.style.display === "none") {
                            articleText.style.display = "block";
                            this.textContent = "Réduire l'article";
                            this.nextElementSibling.style.display = "inline-block";
                        } else {
                            articleText.style.display = "none";
                            this.textContent = "Lire l'article";
                            this.nextElementSibling.style.display = "none";
                        }
                    });
                });
            </script>

        </div>

        <?php   for ($i=0; $i < 3 ; $i++) 
                { 
                    echo "<br>";
                }
        ?>   

  </main>

  </div>

  </footer>


<script src="../js/navbar_js.js"></script>
<script src="../js/footer_js.js"></script>
<script src="../js/carousel.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

</body>

<div id="footer-container"></div>

</html>

