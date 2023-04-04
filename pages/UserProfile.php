

<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
        <title>Mon profile</title>
    </head>
    <body>
        <div id="navbar-container"></div>

        <h1 class="text-center m-3">Je suis la page de profil de <?php echo($_SESSION['user_name']); ?></h1>
            <img src="" class="rounded-circle border border-5 border-dark" alt="" />






        <script type="text/javascript" src="../js/navbar_js.js"></script>
        <script type="text/javascript" src="../js/footer_js.js"></script>
    </body>
        <div id="footer-container"></div>
</html>