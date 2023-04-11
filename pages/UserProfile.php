<?php 
session_start();
require_once('../php/Utilities.php');

$utils = new Utilities(0);
$_SESSION['user_name'] = $utils->Get("username", 'users', 'id', $_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <title>Mon profil</title>
    </head>
    <body>
        <div id="navbar-container"></div>

    <form method="get">
        <div class="container-fluid">
            <div class="row justify-content-center">
            <div class="col-sm-3 bg-success">
                <ul class="list-group my-3">
                    <li class="list-group-item"><a href="#">Mon profil</a></li>
                    <li class="list-group-item"><a href="../php/UpdateProfile.php?id=<?php echo $_SESSION['user_id']; ?>">Modifier mes informations</a></li>
                    <li class="list-group-item"><a href="#user_videos">Mes vidéos</a></li>
                    <li class="list-group-item"><a href="#">Mes temps</a></li>
                    <li class="list-group-item"><a href="#">Mes paramètres</a></li>
                </ul>
        </div>
    </form>
      <div class="col-9">
            <div class="row mt-5 justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                        <?php  if($utils->Get("profile_picture", 'users', 'id', $_SESSION['user_id']) !== null)
                            {?>
                                <img src="../img/UsersProfilePictures/<?php echo $utils->Get("profile_picture", 'users', 'id', $_SESSION['user_id']); ?>" class="rounded-circle border border-5 border-dark mb-3" height="150" alt="User profile picture"">
                            <?php } 
                            else 
                            {?>
                                <img src="../img/default_avatar.png" class="rounded-circle border border-5 border-dark mb-3" height="150" alt="User profile picture"">
                        
                            <?php }?><h3 class="card-title"><?php echo($_SESSION['user_name']); ?></h3>
                            <p class="card-text"> <?php echo $utils->Get("user_email", 'users', 'id', $_SESSION['user_id']); ?> </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
           
            <div class="row mt-5 d-flex justify-content-center" id="user_videos">
                <div class="col-lg-10 col-mg-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h2><u>Mes vidéos</u></h2>
                            <?php  
                            foreach ($utils->SelectAll("videos") as $key => $value) 
                            {
                                if($value['user_id'] == $_SESSION['user_id'])
                                {?>
                                    <div class="col-sm-12 col-md-11 col-lg-10">
                                        <div class="card shadow-sm">
                                            <div class="card-body">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="<?php echo $value['video_url']; ?>" title="<?php echo $value['title']; ?>" allowfullscreen></iframe>
                                                </div>
                                                <p class="card-text" style="margin-top: 1rem;"><?php echo $value['title']; ?></p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-outline-secondary mx-auto">Supprimer</button>
                                                        <button type="button" class="btn btn-sm btn-outline-secondary mx-auto">Modifier</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        <?php   }?>
                        <?php   }
                            ?>
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
