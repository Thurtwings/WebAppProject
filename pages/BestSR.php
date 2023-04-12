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
  <title>Album example · Bootstrap</title>


  <link rel="stylesheet" href="../css/style.css">
  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
  



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <!-- <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style> -->

</head>

<body class="videoCore">
<div id="navbar-container"></div>
  
  <main class="bg-image"style="background-image: url('../img/backgroundMinecraft.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;" height: 100vh;>

    <div class="container my-5 ">
    
      <!-- <div class="card bg-warning card-border-danger">
        <h1 class="art-shadow fw-bold text-center text-uppercase text-primary">Le coin des vidéos</h1>
      </div> -->
      <div class="card mb-3">
  <img src="../img/fondTitreVideos.jpg" class="card-img-top" alt="Wild Landscape"/>
  <div class="card-body bg-light bg-opacity-25">
    <h2 class="card-title art-degrade fw-bold text-center text-uppercase display-4">Le coin des vidéos</h2>
    <p class="card-text text-center fs-4">
      Retrouvez toutes les  vidéos de vos speedrun préférés !
    </p>
    
  </div>
</div>
      

        <?php 
        for ($i=0; $i < 2 ; $i++) 
        { 
            echo "<br>";
        }
        ?>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <!-- <h2>Titre jeu</h2>
                <cite>auteur / type speedrun / temps</cite>  -->
            
                <div id="carousel-video" class="carousel slide mx-auto" data-mdb-ride="carousel">
                    
                <div class="carousel-indicators">
                    <?php for ($i=0; $i < 10 ; $i++) { ?>
                        <button type="button" data-mdb-target="#carousel-video" data-mdb-slide-to="<?php echo $i; ?>" <?php if ($i === 0) { ?>class="active" aria-current="true"<?php } ?> aria-label="Slide <?php echo $i + 1; ?>"></button>
                    <?php } ?>
                </div>

                <div class="carousel-inner">
                  
                    <div class="carousel-item active">
                        <iframe class="d-block w-100" width="853" height="480" src="https://www.youtube.com/embed/QVeLfzUyngw?list=PLcztE7s3xChAcj1drP6l2Smz5hWaDI7Ge" title="CASTLEVANIA (Any%) en 12:55 par Janthe | SPEEDONS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="carousel-item">    
                        <iframe class="d-block w-100" width="853" height="480" src="https://www.youtube.com/embed/PsirprHHNyw?list=PLcztE7s3xChAcj1drP6l2Smz5hWaDI7Ge" title="PORTAL en 15:31 par Biiwix | SPEEDONS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="carousel-item">
                        <iframe class="d-block w-100" width="853" height="480" src="https://www.youtube.com/embed/MsXOlGhJylk?list=PLcztE7s3xChB23jkHwEMI7UMxri97tv3d" title="CELESTE en TAS FAREWELL par KILAYE en 10:37.1 | SPEEDONS 2022" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="carousel-item">
                        <iframe class="d-block w-100" width="853" height="480" src="https://www.youtube.com/embed/Ka84DSfjiGE?list=PLcztE7s3xChB23jkHwEMI7UMxri97tv3d" title="LONELY MOUNTAINS DOWNHILL en NG+ / 16 TRACKS par ROLESAFE en 30:56 | SPEEDONS 2022" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="carousel-item">
                        <iframe class="d-block w-100" width="853" height="480" src="https://www.youtube.com/embed/bCqe-FqjfT8" title="ROCKMAN 4 BCAS en ANY% par BARRYLESJAMBES en 27:02.8 | SPEEDONS 2022" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="carousel-item">
                        <iframe class="d-block w-100" width="853" height="480" src="https://www.youtube.com/embed/mLMS96jxeK4" title="ALEX KIDD IN MIRACLE WORLD DX en ANY% par STRACKEL en 20:26.07 | SPEEDONS 2023" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="carousel-item">
                        <iframe class="d-block w-100" width="853" height="480" src="https://www.youtube.com/embed/8X_b--aneik" title="THE LUCKY DIME CAPER STARRING DONALD DUCK en BEAT THE GAME par CHACHAMAXX en 16:29 | SPEEDONS 2022" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="carousel-item">
                        <iframe class="d-block w-100" width="853" height="480" src="https://www.youtube.com/embed/-qe2D99W6nM" title="TEENAGE MUTANT NINJA TURTLES en 22:12 par LF712  | SPEEDONS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="carousel-item">
                        <iframe class="d-block w-100" width="853" height="480" src="https://www.youtube.com/embed/G8GkHg51qnM" title="RESIDENT EVIL 2 REMAKE en 53:54 par Petrichor | SPEEDONS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="carousel-item">
                        <iframe class="d-block w-100" width="853" height="480" src="https://www.youtube.com/embed/8-_yIS-w8v8" title="LITTLE BIG ADVENTURE (any%) en 30:13 par Blake_Faythe | SPEEDONS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carousel-video" data-mdb-slide="prev">
                        <img src="../img/Button 5.png">
                        
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carousel-video" data-mdb-slide="next">
                        <img src="../img/Button 4.png">
                        
                    </button>
                </div>
            </div>
            <!-- Ajouter ici des vidéos pour d'autres jeux -->
        </div>

        <?php   for ($i=0; $i < 3 ; $i++) 
                { 
                    echo "<br>";
                }
        ?>   

<!-- Cards -->
    <div class="album py-5 bg-success bg-opacity-50">
      <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php 
            foreach ($utils->SelectAll('videos') as $key => $value) 
            {
              ?>
<!--  -->
            <div class="col">
              <div class="card shadow-sm bg-success bg-opacity-75">
                  <iframe class="mx-auto" width="100%" height="225" src="<?php echo $value['video_url']; ?>" title="LITTLE BIG ADVENTURE (any%) en 30:13 par Blake_Faythe | SPEEDONS" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  
                  <h5 class="card-title mx-auto text-white text-center">
                    <?php echo "<a class='text-white' href='game_details.php?game_id=".$value['game_id']."'>".$utils->Get("title", "games", "id", $value['game_id'])."</a>"."<br>"." en ".$utils->Get("run_time", "videos", "id", $value['id']); ?>
</h5>

                  
                <div class="card-body bg-success bg-opacity-75">
                  <?php echo  "<a class='card-text text-white' href='user_details.php?user_id=".$value['user_id']."'>".$utils->Get("username", "users", "id", $utils->Get("user_id","videos","id", $value['id']));?></a>
                    <small class="d-flex justify-content-end align-items-center"><a href=""><?php echo $value["category_speedrun"]  ?></a></small>
                
              </div>
            </div>
      </div>
            <?php } ?>
          

  </main>

  
  </div>

   

  </footer>

   
  
<script src="https://unpkg.com/css-doodle@0.34.8/css-doodle.min.js"></script>
<script src="../js/navbar_js.js"></script>
<script src="../js/footer_js.js"></script>
<script src="../js/carousel.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

</body>

<div id="footer-container"></div>
</html>