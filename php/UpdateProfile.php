<?php

require_once('../php/Utilities.php');

$id = isset($_GET['id']) ? $_GET['id'] : null;
$utils = new Utilities($id);

if(isset($_POST['execute']))
{
    // Handle file upload
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK && $_FILES['profile_picture']['size'] > 0) 
    {
        $file_name = $_FILES['profile_picture']['name'];
        $file_tmp = $_FILES['profile_picture']['tmp_name'];
        $file_size = $_FILES['profile_picture']['size'];
        $file_type = $_FILES['profile_picture']['type'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        
        $allowed_extensions = array('jpg', 'jpeg', 'png');

        if (in_array($file_ext, $allowed_extensions) === false) 
        {
            die('Extension de fichier non autorisée.');
        }
        
        $upload_path = '../img/UsersProfilePictures/';
        $new_file_name = uniqid() . '.' . $file_ext;
        move_uploaded_file($file_tmp, $upload_path . $new_file_name);
        $new_file_path = $new_file_name;
        
        // Update database with new profile picture filename
        $utils->Set('users' ,'profile_picture', 'id', $id, $new_file_path);
    }

    // Update other fields
    $update_password = false;
    foreach($_POST as $key => $value)
    {
        if($key != "execute" && $key != "profile_picture" ) 
        {
            if ($utils->Get($key, 'users', 'id', $id) != $value) 
            {
                $utils->Set('users' ,$key, 'id', $id, $value);
            }
        } 
        
    }

    if (!$update_password) 
    {
        header("Location: ../php/UpdateProfile.php?id=$id");
        exit();
    }

    header("Location: ../php/UserProfile.php?id=$id");
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
        <title>the titre</title>
    </head>
    <body>
        
        <div id="navbar-container"></div>

        <div class="container-fluid">
            <form method="get">
            <div class="row">
                <div class="col-sm-3 bg-light">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="../pages/UserProfile.php">Mon profil</a></li>
                        <li class="list-group-item"><a href="../php/UpdateProfile.php?id=<?php echo $id; ?>">Modifier mes informations</a></li>
                        <li class="list-group-item"><a href="#">Mes vidéos</a></li>
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
                        <?php  if($utils->Get("profile_picture", 'users', 'id', $id) !== null)
                            {?>
                            <img src="../img/UsersProfilePictures/<?php echo $utils->Get("profile_picture", 'users', 'id', $id); ?>" class="rounded-circle border border-5 border-dark mb-3" height="150" alt="User profile picture"">
                            <?php } 
                            else 
                            {?>
                                <img src="../img/default_avatar.png" class="rounded-circle border border-5 border-dark mb-3" height="150" alt="User profile picture"">
                        
                            <?php }?>
                            </div>
        <div class="container mt-5">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-5">
                    <label for="username" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $utils->Get("username", 'users', 'id', $id); ?>">
                </div>
                <div class="mb-5">
                    <label for="user_email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="user_email" id="user_email" value="<?php echo $utils->Get("user_email", 'users', 'id', $id); ?>">
                </div>
                <div class="mb-5">
                    <label for="profile_picture" class="form-label">Photo de profil</label>
                    <input type="file" class="form-control" name="profile_picture" id="profile_picture">
                </div>
                
                <br>
                <button type="submit" class="btn btn-primary" name="execute">Sauvegarder</button>
            </form>
        </div>
        </div>
        </div>
      
        <!-- en bas du body -->
        <script type="text/javascript" src="../js/navbar_js.js"></script>
        <script type="text/javascript" src="../js/footer_js.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script> <!-- -->
        <div id="footer-container"></div>
    </body>
    
    
</html>