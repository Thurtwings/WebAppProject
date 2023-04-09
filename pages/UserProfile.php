<?php 
session_start();
require_once('../php/FunctionsList.php');

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
<body>
    <form method="get">
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-3 bg-light">
                <ul class="list-group">
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
                                <img src="../img/<?php echo $utils->Get("profile_picture", 'users', 'id', $_SESSION['user_id']); ?>" class="rounded-circle border border-5 border-dark mb-3" height="150" alt="User profile picture"">
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
           
            <div class="row mt-5 justify-content-center" id="user_videos">
            <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                        <?php  
                            foreach ($utils->SelectAll("videos") as $key => $value) 
                            {?>
                               
                                <div class="col">
                                    <div class="card shadow-sm">
                                    <iframe width="893" height="502" src="<?php echo $utils->Get("video_url", "videos", "user_id",  $_SESSION['user_id'] ) ?>" 
                                        title="<?php echo $utils->Get("title", "videos", "user_id",  $_SESSION['user_id'] )?>" 
                                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                        allowfullscreen></iframe>
                                        

                                    <div class="card-body">
                                        <p class="card-text">Video description</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                        </div>
                                    </div>
                                    </div>
         
                    <?php }
                        ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
         </div>
    </div>
  </div>

        
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script type="text/javascript" src="../js/navbar_js.js"></script>
        <script type="text/javascript" src="../js/footer_js.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    </body>
        <div id="footer-container"></div>
</html>
