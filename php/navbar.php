<?php 
session_start();
require_once('../GoToThePage.php');
require_once('Utilities.php');

$utils = new Utilities(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rush Runners</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-dark ">
    <!-- Container wrapper -->
    <div class="container ">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2">
        <img src="../img/Logo RushRunners.png" alt="Logo du site" height="40">
      </a>

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
      <span class="material-icons text-white">menu</span>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
       
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <div class="navbar-nav d-inline-flex">
              <a class="nav-link text-white" href="<?php echo $INDEX; ?>">Accueil</a>
              <a class="nav-link text-white" href="<?php echo $ARTICLES; ?>">Articles</a>
              <a class="nav-link text-white" href="<?php echo $BEST_SPEEDRUNS; ?>">Vidéos</a>
              <a class="nav-link text-white" href="<?php echo $GAMES ; ?>">Jeux</a>
        <?php
        if(isset($_SESSION['user_id']))
        {
            if($utils->Get("is_admin", "users", "id", $_SESSION['user_id']) == 1)
            {?>
                  <a class="nav-link text-white" href="<?php echo $BACKOFFICE; ?>">Backoffice</a>
            <?php
              }

              else
              {?>
                <a class="nav-link text-white me-3" href="<?php echo $CONTACT; ?>">Nous contacter</a>
          <?php }
        }
        else
            {?>
              <a class="nav-link text-white" href="<?php echo $CONTACT;?>">Nous contacter</a>

       <?php }?>
              
            </div>
          </li>
        </ul>
        <!-- Left links -->

        <div class="d-flex align-items-center">
          <?php 
          if (!isset($_SESSION['user_name'])) 
          { 
          ?>
              <button type="button" class="btn btn-link px-3 me-2" onclick="location.href='<?php echo $LOGIN; ?>'">Login</button>
              <button type="button" class="btn btn-primary me-3" onclick="location.href='<?php echo $REGISTER; ?>'">Sign up for free</button>
          <?php 
          }
          ?>
          <div class="dropdown">
              <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                  <?php 
                  if (isset($_SESSION['user_id']) && $_SESSION['user_id']) 
                  {
                      if ($utils->Get("profile_picture", 'users', 'id', $_SESSION['user_id']) !== null) 
                      {?>
                          <img src="../img/UsersProfilePictures/<?php echo $utils->Get("profile_picture", 'users', 'id', $_SESSION['user_id']); ?>" class="rounded-circle border border-2 border-white" height="40" alt="User profile picture">
                      <?php 
                      }
                      else 
                      { ?>
                          <img src="../img/default_avatar.png" class="rounded-circle border border-2 border-white" height="40" alt="User profile picture">
                      <?php 
                      }?>

                      <h5></h5>
                  <?php
                  }
                  else
                  {?>
                      <img src="../img/default_avatar.png" class="rounded-circle border border-2 border-white" height="40" alt="User profile picture">
          <?php   }?>
                <!-- <img src="../img/UsersProfilePictures/<?php echo $utils->Get("profile_picture", 'users', 'id', $_SESSION['user_id']); ?>" class="rounded-circle" height="25" alt="Default avatar" loading="lazy" /> -->
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                <?php 
                if (isset($_SESSION['user_name'])) 
                {
                  ?>
                  <li>
                    <a class="dropdown-item" href="<?php echo $PROFILE; ?>">Mon profil</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?php echo $SETTINGS; ?>">Options</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?php echo $LOGOUT; ?>">Se déconnecter</a>
                  </li>
                <?php 
                } 
                else 
                {
                ?>
                    <li>
                      <a class="dropdown-item" href="<?php echo $LOGIN; ?>">Log in</a>
                    </li>
                <?php 
                } 
                ?>
              </ul>
          </div>
          <div class="d-flex align-items-center ms-auto">
            <?php 
            if(isset($_SESSION['user_id']) && $_SESSION['user_id']) 
            {?>
              <h5 class="text-white ms-5">Hello <?php echo $utils->Get("username", 'users', 'id', $_SESSION['user_id']); ?></h5>
            <?php 
            } ?>
          </div>
          
        </div>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>

