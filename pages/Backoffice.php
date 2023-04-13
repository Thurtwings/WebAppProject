
<?php 
  require_once('../GoToThePage.php');
    require_once('../php/Utilities.php');
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
      <div id="navbar-container"></div>
   
  
      <div class="btn-group" role="group" aria-label="Basic example">
        <a href="<?php echo $NEW_VIDEO; ?>" class="btn btn-primary"> Ajouter Vidéos </a>
        <a href="<?php echo $NEW_ARTICLE; ?>" class="btn btn-primary"> Ajouter Articles</a>
        <a href="<?php echo $NEW_GAME; ?>" class="btn btn-primary"> Ajouter Jeux</a>
      </div>
           
       
<?php
    foreach($utils->SelectAll("users") as $key => $value) 
    {
        ?>
         <table class="container-fluid ">
          <tr>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <td class="col-2 border text-center ">  <?php echo $value["id"]; ?>                  </td>
                        <td class="col-2 border text-center ">  <?php echo $value["username"]; ?>            </td>
                        <td class="col-2 border text-center ">  <?php echo $value["user_email"]; ?>          </td>
                        <td class="col-2 border text-center ">  <?php echo $value["profile_picture"]; ?>   </td>
                        <td class="col-2 border text-center ">  <?php echo $value["registration_time"]; ?>     </td>
                        <td class="col-2 border text-center ">  <?php echo $value["is_admin"]; ?></td>
                    </div>
                </div>
            </div>
        </tr>
    </table> 


        <script type="text/javascript" src="../js/navbar_js.js"></script>
        
            <!-- Si le fichier n'a pas de head-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script> <!-- -->
    
    <?php 
    }














?>
<script type="text/javascript" src="../js/navbar_js.js"></script>
        <script type="text/javascript" src="../js/footer_js.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
</html>