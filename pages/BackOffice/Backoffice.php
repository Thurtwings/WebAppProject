
<?php 
    require_once('../../php/Utilities.php');
    $utils = new Utilities(0);
                        
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
        <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
    <!-- Container wrapper -->
    <div class="container ">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2">
        <img src="../img/LogoWebsite.png" alt="Logo du site" height="35">
      </a>

      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="material-icons">menu</span>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
       
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <div class="navbar-nav d-inline-flex">
              <a class="nav-link text-white" href="<?php echo $INDEX; ?>">Accueil</a>
              <a class="nav-link text-white" href="<?php echo $TYPES_SPEEDRUNS; ?>">Types de Speedrun</a>
              <a class="nav-link text-white" href="<?php echo $BEST_SPEEDRUNS; ?>">Vidéos</a>
              <a class="nav-link text-white me-3" href="<?php echo $CONTACT; ?>">Nous contacter</a>
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
                              <img src="../img/UsersProfilePictures/<?php echo $utils->Get("profile_picture", 'users', 'id', $_SESSION['user_id']); ?>" class="rounded-circle" height="25" alt="User profile picture">
                          <?php } else { ?>
                              <img src="../img/default_avatar.png" class="rounded-circle" height="25" alt="User profile picture">
                          <?php }
                }
                else
                {?>
                    <img src="../img/default_avatar.png" class="rounded-circle" height="25" alt="User profile picture">
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
        </div>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  


            <!-- en bas du body -->
        <table class="container-fluid ">
<?php
    foreach($utils->SelectAll("users") as $key => $value) 
    {
        ?>
        
        <tr>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                          
                        <td class="col-1 border text-center ">  <?php echo $value["id"];?>                  </td>
                        <td class="col-1 border text-center ">  <?php echo $value["username"];?>            </td>
                        <td class="col-1 border text-center ">  <?php echo $value["user_email"];?>          </td>
                        <td class="col-1 border text-center ">  <?php echo $value["user_picture_link"];?>   </td>
                        <td class="col-1 border text-center ">  <?php echo $value["user_runs_total"];?>     </td>
                        <td class="col-1 border text-center ">  <?php echo $value["user_membership_date"];?></td>
                        
                    </div>
                </div>
            </div>
        </tr>
    </table> 


        <script type="text/javascript" src="../../js/navbar_js.js"></script>
        <script type="text/javascript" src="../../js/footer_js.js"></script>
            <!-- Si le fichier n'a pas de head-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script> <!-- -->
    
    <?php 
    }














?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
<div class="footer-container"></div>
</html>