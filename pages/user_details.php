<?php 
session_start();
require_once("../php/Utilities.php");
$utils = new Utilities(0);
$idUserToDisplay = $_GET['user_id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
    <title> Profil publique </title>
</head>
<body>
    <div id="navbar-container"></div>
    
    <div class="container my-5">
        <div class="text-center">
            <h1 class="mb-4">Page de <?php echo $utils->Get('username', 'users', 'id', $idUserToDisplay); ?></h1>

            <?php  
                if($utils->Get("profile_picture", 'users', 'id', $idUserToDisplay) !== null)
                {?>
                   <img src="../img/UsersProfilePictures/<?php echo $utils->Get("profile_picture", 'users', 'id', $idUserToDisplay); ?>" class="rounded-circle border border-5 border-dark mb-3" height="150" alt="User profile picture">
                   <?php   
                } 
                else 
                {?>
                   <img src="../img/default_avatar.png" class="rounded-circle border border-5 border-dark mb-3" height="150" alt="User profile picture">
                   <?php 
                }?>
        </div>

        <div class="card">
            <div class="card-body">
                <h3 class="card-title"><u>Qui suis-je?</u></h3>
                <p class="card-text"><?php echo $utils->Get('user_description', 'users', 'id', $idUserToDisplay);?></p>
            </div>
        </div>

        <h3 class="mt-5 mb-3">Mes runs</h3>
        <div class="row">
            <?php  
                foreach ($utils->SelectAll("videos") as $key => $value) 
                {
                    if($value['user_id'] == $idUserToDisplay)
                    {?>
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                            <div class="card shadow-sm h-100">
                                <div class="card-body">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="<?php echo $value['video_url']; ?>" title="<?php echo $value['title']; ?>" allowfullscreen></iframe>
                                    </div>
                                    <p class="card-text mt-3"><?php echo $utils->Get("title", "games", "id", $value['game_id'])." en ".$utils->Get("run_time", "videos", "id", $value['id']); ?></p>
                                </div>
                            </div>
                        </div>
            <?php   }?>
        <?php   }?>
        </div>

        <h3 class="mt-5 mb-3">Les articles que j'ai écrit</h3>
        <div class="row">
            <?php  
                foreach ($utils->SelectAll("articles") as $key => $value) 
                {
                    if($value['user_id'] == $idUserToDisplay)
                    {?>
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                            <div class="card shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $utils->Get("article_title", "articles", "user_id", $idUserToDisplay); ?></h5>
                                    <a href="articles.php#<?php echo $value['article_id']; ?>" class="btn btn-primary">Lire l'article</a>
                                </div>
                            </div>
                        </div>
                        <?php   
                    }
                }
            ?>
        </div>
    </div>

    <script type="text/javascript" src="../js/navbar_js.js"></script>
    <script type="text/javascript" src="../js/footer_js.js"></script>

    <!-- Si le fichier n'a pas de head -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
<div id="footer-container"></div>
</html>

               
