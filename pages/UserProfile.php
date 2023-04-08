<?php 
session_start();
require_once('../php/FunctionsList.php');

$utils = new Utilities(0);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <title>Mon profil</title>
    </head>
    <body>
        <div id="navbar-container"></div>


<body>
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 bg-light">
        <ul class="list-group">
          <li class="list-group-item"><a href="#">Mon profil</a></li>
          <li class="list-group-item"><a href="../pages/index.php?page=UpdateProfile&id=">Modifier mes informations</a></li>
          <li class="list-group-item"><a href="#">Mes vidéos</a></li>
          <li class="list-group-item"><a href="#">Mes temps</a></li>
          <li class="list-group-item"><a href="#">Mes paramètres</a></li>
        </ul>
      </div>
      <div class="col-9">
            <div class="row mt-5 justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="../img/Knight.png" class="rounded-circle border border-5 border-dark mb-3" height="150" alt="User profile picture" />
                            <h3 class="card-title"><?php echo($_SESSION['user_name']); ?></h3>
                            <p class="card-text">
                        </div>

                    </div>
                </div>
            </div>
        </div>
         </div>
    </div>
  </div>

        

        <script type="text/javascript" src="../js/navbar_js.js"></script>
        <script type="text/javascript" src="../js/footer_js.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    </body>
        <div id="footer-container"></div>
</html>
