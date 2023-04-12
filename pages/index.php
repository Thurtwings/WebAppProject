

<?php 
require_once('../GoToThePage.php');
include("../referencement.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/style.css">

        <title>Speedrun</title>

        <style>
            @font-face {
                font-family: 'SketchyComic';
                src: url('../fonts/SketchyComic.ttf') format('truetype');
                font-style: normal;
                font-weight: 400;
                font-display: swap;
            }

            h1.FontCustom {
                font-family: 'SketchyComic', sans-serif;
                /* styles supplémentaires pour le titre h1 ici */
            }
        </style>

    </head>
    <body>
        <div id="navbar-container"></div>

        <main class=""style="background-image: url('../img/AccueilFond.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;" height: 100vh;>

        <br><br>

        <div class="container col-lg-6 col-md-12 mb-4 mb-md-0 d-flex flex-column align-items-center">

        <br><br>
            
            <h1 class="FontCustom text-danger display-1 text-center">RushRunners</h1>

            <br><br>

            <img src="../img/Logo RushRunners.png" class="my-5 justify-justify-content-center" alt="Logo"/>

            <div class="card-group">
                <div class="card card bg-success bg-opacity-50">
                    <img src="../img/SpeedRun04.webp" class="card-img-top" alt="StreetFighterOnTv"/>
                    <div class="card-body">
                    <h3 class="card-title text-center text-white">Les articles</h3>
                    <p class="card-text text-center text-white fs-6">Retrouvez nos articles sur le Speedrun</p>
                    </div>
                </div>
                <div class="card card bg-success bg-opacity-50">
                    <img src="../img/SpeedRun02.jpg" class="card-img-top" alt="ComboKeyboardJoystick"/>
                    <div class="card-body">
                    <h3 class="card-title text-center text-white">Les jeux</h3>
                    <p class="card-text text-center text-white fs-6">Toutes les infos sur les jeux speedrunné</p>
                    </div>
                </div>
                <div class="card card bg-success bg-opacity-50">
                    <img src="../img/Speedrun03.jpg" class="card-img-top" alt="SuperMarioOnTv"/>
                    <div class="card-body">
                    <h3 class="card-title text-center text-white">Les vidéos</h3>
                    <p class="card-text text-center text-white fs-6">Les vidéos des meilleurs Speedrun</p>
                    </div>
                </div>
                </div>
   
        </div>

        <br><br>

        <script type="text/javascript" src="<?php echo $NAVBAR_JS; ?>"></script>
        <script type="text/javascript" src="<?php echo $FOOTER_JS; ?>"></script>
        <script type="text/javascript" src="../js/css-doodle.min.js ?>"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

        </main>    
    </body>
    <div id="footer-container"></div>


</html> 