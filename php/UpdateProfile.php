<?php
require_once('../php/FunctionsList.php');

    $id = $_GET['id'];
    $utils = new Utilities($id);

    if(isset($_POST['execute']))
    {
        foreach($_POST as $key => $value)
        {
            if($key != "execute") $utils->Set("users" ,$key, 'id', $id, $value);
        }
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
        <div class="container mt-5">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $utils->Get("username", 'users', 'id', 1); ?>">
                </div>
                
                <button type="submit" class="btn btn-primary" name="execute">Executer</button>
            </form>
        </div>

        







            <!-- en bas du body -->
        <script type="text/javascript" src="../js/navbar_js.js"></script>
        <script type="text/javascript" src="../js/footer_js.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script> <!-- -->
    </body>
    
        <div id="footer-container"></div>
    
</html>