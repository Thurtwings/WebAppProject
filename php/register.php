<?php
require "../php/pdo_connection.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user) {
        $error = "nom d'utilisateur déjà pris";
    } else {
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
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <?php if (isset($error)) { ?>
        <p><?= $error ?></p>
    <?php } ?>
    <form action="../php/register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Register">
    </form>
    <a href="../pages/login.html">Back to login</a>
</body>
</html>

