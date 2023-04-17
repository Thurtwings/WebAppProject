
<?php 
    
    session_start();


    require_once('../GoToThePage.php');
    require_once('../php/Utilities.php');
    $utils = new Utilities(0);
    $color = "";
    $status = "";
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
        <br>
        
            <a href="<?php echo $NEW_VIDEO; ?>" class="btn btn-primary"> Ajouter Vidéos </a>
            <a href="<?php echo $NEW_ARTICLE; ?>" class="btn btn-primary"> Ajouter Articles</a>
            <a href="<?php echo $NEW_GAME; ?>" class="btn btn-primary"> Ajouter Jeux</a>
            <a href="<?php echo $NEW_STAFF_MEMBER; ?>" class="btn btn-warning"> Modifier le rôle d'un membre</a>
            <a href="<?php echo $SET_STATUS; ?>" class="btn btn-warning"> Modifier le status d'un membre</a>
           <br>
           <br>
           <br>
        <table class="container-fluid table bg-success text-white table-hover border">
            <thead>
                <tr>
                <th scope="col">Identifiant</th>
                <th scope="col">Rôle</th>
                <th scope="col">Nom utilisateur</th>
                <th scope="col">Adresse E-mail</th>
                <th scope="col">Photo de profil</th>
                <th scope="col">Date d'inscription</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
<?php
    foreach($utils->SelectAll("users") as $key => $value) 
    {
        if ($value['user_role'] == 'Admin') 
        {
            $color = "table-danger";
            
        } 
        else 
        {
            $color = "table-primary";
            
        }

        switch($value["user_status"])
        {
            case 'Active':
                $status = "badge-success";
                    break;
            case 'SoftBan':
                $status = "badge-warning";
                $color = "table-warning";
                    break;
            case 'WeekBan':
                $status = "badge-info";
                $color = "bg-info";
                    break;
            case 'MonthBan':
                $status = "badge-secondary";
                $color = "table-secondary";
                    break;
            case 'PermaBan':
                $status = "badge-dark";
                $color = "bg-dark";
                    break;
        }
        ?>
                <tr class="<?php echo $color ?>">
                    <th scope="row"><?php echo $value['id']?></th>
                        <td><?php echo $value['user_role']?></td>
                        <td><?php echo $value['username']?></td>
                        <td><?php echo $value['user_email']?></td>
                        <td><?php echo $value['profile_picture']?></td>
                        <td><?php echo $value['registration_time']?></td>
                        <td><span class="badge <?php echo $status ?> rounded-pill"> <?php echo $value["user_status"]?> </span></td>
                </tr>
    <?php 
    }?>
    
    </tbody>
    </table> 


        <script type="text/javascript" src="../js/navbar_js.js"></script>
        
            <!-- Si le fichier n'a pas de head-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script> <!-- -->

</body>
</html>










?>
<script type="text/javascript" src="../js/navbar_js.js"></script>
        <script type="text/javascript" src="../js/footer_js.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
</html>