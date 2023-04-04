<?php
require "../php/pdo_connection.php";
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user) 
    {
        $error = "nom d'utilisateur déjà pris";
    } 
    elseif($username === $password)
    {
        $error = "Le mot de passe et le nom d'utilisateur ne peuvent pas etre égaux";
    }
    else 
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
        $stmt->execute([$username, $hash]);
        $_SESSION['user_id'] = $pdo->lastInsertId();
        header('Location: ../pages/index.php');
        exit();
    }
}




?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
        <title>Register</title>
    </head>
    <body>
        <div id="navbar-container"></div>
        <br>
        <br>
        <br>
        <h1 class="text-center">Créer un compte</h1>
        <?php 
        if (isset($error)) 
        { ?>
            <p class="text-center text-danger"><?= $error ?></p>
        <?php 
        } ?>
        <form action="../php/register.php" method="POST" class="text-center">
            <label for="username">Pseudonyme:</label>
            <br>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">Mot de passe:</label>
            <br>
            <input type="password" name="password" id="password">
            <br>
            <label for="password">Répeter mot de passe:</label>
            <br>
            <input type="password" name="passwordVerif" id="password">
            <br>

            <?php  ?>
            <br>
            <input type="submit" value="S'enregistrer">
            <br>
            <a href="../pages/login.html" ">Se connecter</a>
        </form>
            <script type="text/javascript" src="../js/navbar_js.js"></script>
            <script type="text/javascript" src="../js/footer_js.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

    </body>
        <div id="footer-container">

    </div>
</html>

