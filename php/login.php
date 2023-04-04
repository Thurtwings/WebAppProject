<?php
require "../php/pdo_connection.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) 
        {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['username'];
    
    header('Location: ../pages/UserProfile.php');
    }

    else 
    {
        $error = 'Pseudonyme ou mot de passe incorrect';
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Login </title>
</head>
<body>
    <div id="navbar-container"></div>

    <h1>Login</h1>
    <?php if (isset($error)) 
    { ?>
        <p><?= $error ?></p>
    <?php } ?>
    <form action="../php/login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Login">
    </form>
    <a href="../php/register.php">Create an account</a>
    <script type="text/javascript" src="../js/navbar_js.js"></script>
    <script type="text/javascript" src="../js/footer_js.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
    <div id="footer-container"></div>
</html>
