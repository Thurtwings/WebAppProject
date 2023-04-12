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
    <title>Articles</title>


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
      
        <!-- Petite boucle PHP permettant de générer 3 retours à la ligne juste pour la pratique ;) -->
        <?php 
        for ($i=0; $i < 2 ; $i++) 
        { 
            echo "<br>";
        }
        ?>
        
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <?php
                                foreach ($utils->SelectAll('articles') as $key => $value) 
                                {?>
                                    
                                    <div class="card my-4 bg-success bg-opacity-75">
                                        <img src="../img/<?php echo $value['article_cover_picture_link']; ?>" class="card-img-top" alt="Image d'illustration" id="<?php echo $value['article_id']; ?>">
                                        <div class="card-body">
                                            <h5 class="card-title fs-3 fw-bold text-white" ><?php echo $value['article_title']; ?></h5>
                                            
                                            <p class="card-text article-text text-white" style="text-align:justify"><?php echo $value['article_content']; ?></p>

                                            <a href="#article-text" class="btn btn-primary btn-lire-article">Lire l'article</a>
                                            <small class="d-flex justify-content-end text-white fs-6"><a  href="user_details.php?user_id=<?php echo $value['user_id'] ?>" class="text-dark fw-bold"><?php echo  $utils->Get("username", "users", "id", $utils->Get("user_id","articles","article_id", $value['article_id']) );?></a></small>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <?php   
                                }
                            ?>
                            
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

