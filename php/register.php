
 <?php
require_once "../php/pdo_connection.php";
require_once('../GoToThePage.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $username = $_POST['username'];
    $mail = $_POST['email'];
    $password = $_POST['password'];

    $passwordVerif = $_POST['passwordVerif'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if($password === $username) 
    {
        $error = "Le mot de passe et le nom d'utilisateur ne peuvent pas être égaux";
    } 
    elseif($user) 
    {
        $error = "Nom d'utilisateur déjà pris";
    } 
    elseif($password !== $passwordVerif) 
    {
        $error = "Les mots de passe ne correspondent pas";
    } 
    else 
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        // $stmt = $pdo->prepare('INSERT INTO users (username, user_email, password) VALUES (?, ?, ?)');
        $stmt = $pdo->prepare('INSERT INTO users (username, user_email, password, registration_time) VALUES (?, ?, ?, NOW())');
        $stmt->execute([$username, $mail, $hash]);
        $_SESSION['user_id'] = $pdo->lastInsertId();
        $_SESSION['user_email'] = $_POST['email'];
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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
        
    </head>
    <body>
        <div id="navbar-container"></div>
        <br>
        <br>
        <br>
        <main class="container">
            <h1 class="text-center">Créer un compte</h1>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger" role="alert"><?= $error ?></div>
            <?php endif; ?>
            <form action="<?php echo $REGISTER; ?>" method="POST" class="text-center">
                <div class="form-floating mb-3">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Pseudonyme" required>
                    <label for="username">Pseudonyme</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" id="email" class="form-control"  size="30" placeholder="Email" required>
                    <label for="email">E-mail</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" required>
                    <label for="password">Mot de passe</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="passwordVerif" id="passwordVerif" class="form-control" placeholder="Répéter le mot de passe" required>
                    <label for="passwordVerif">Répéter le mot de passe</label>
                </div>
                <button type="submit" class="btn btn-primary">S'enregistrer</button>
                <a href="<?php echo $LOGIN; ?>" class="ms-3">Se connecter</a>
            </form>
        </main>
        <script type="text/javascript" src="../js/navbar_js.js"></script>
        <script type="text/javascript" src="../js/footer_js.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    </body>
    <div id="footer-container"></div>
</html>