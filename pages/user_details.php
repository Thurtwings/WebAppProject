<?php 
session_start();
require_once("../php/Utilities.php");
$utils = new Utilities(0);
$idUserToDisplay = $_GET['user_id'];
$_SESSION['user_name'] = $utils->Get("username", 'users', 'id', $_SESSION['user_id']);

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
    
    <div>
        <h1> Page de <?php echo $utils->Get('username', 'users', 'id', $idUserToDisplay); ?> </h1>

        <?php  
            if($utils->Get("profile_picture", 'users', 'id', $idUserToDisplay) !== null)
            {?>
               <img src="../img/UsersProfilePictures/<?php echo $utils->Get("profile_picture", 'users', 'id', $idUserToDisplay); ?>" class="rounded-circle border border-5 border-dark mb-3" height="150" alt="User profile picture"">
               <?php   
            } 
            else 
            {?>
               <img src="../img/default_avatar.png" class="rounded-circle border border-5 border-dark mb-3" height="150" alt="User profile picture"">
               <?php 
            }?>

        <h3><u> Qui suis-je?</u></h3>
        <p><?php echo $utils->Get('user_description', 'users', 'id', $idUserToDisplay);?></p>


        <h3>Mes runs</h3>
        <?php  
            foreach ($utils->SelectAll("videos") as $key => $value) 
            {
                if($value['user_id'] == $idUserToDisplay)
                {?>
                    <div class="col-sm-12 col-md-11 col-lg-10">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?php echo $value['video_url']; ?>" title="<?php echo $value['title']; ?>" allowfullscreen></iframe>
                                </div>
                                <p class="card-text" style="margin-top: 1rem;"><?php echo $utils->Get("title", "games", "id", $value['game_id'])." en ".$utils->Get("run_time", "videos", "id", $value['id']); ?></p><br><br>
                            </div>
                        </div>
                    </div>
        <?php   }?>
    <?php   }
            ?>
        <h3>Les articles que j'ai écrit </h3>
            <?php  
                foreach ($utils->SelectAll("articles") as $key => $value) 
                {
                    if($value['user_id'] == $idUserToDisplay)
                    {?>
                        <div class="col-sm-12 col-md-11 col-lg-10">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5><?php  echo $utils->Get("article_title", "articles", "user_id", $idUserToDisplay); ?></h5>

                                    <a href="articles.php#<?php echo $value['article_id']; ?>">lien</a>
                                </div>
                            </div>
                        </div>
                        <?php   
                    }
                }
            ?>
</div>





        <script type="text/javascript" src="../js/navbar_js.js"></script>
        <script type="text/javascript" src="../js/footer_js.js"></script>

            <!-- Si le fichier n'a pas de head-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script> <!-- -->
</body>
    <div id="footer-container">

    </div>
</html>