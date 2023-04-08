<?php

require "../php/pdo_connection.php";
require "../php/FunctionsList.php";

$utils = new Utilities(0);

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
            $_SESSION['user_email'] = $utils->Get('user_email', 'users', 'id', $_SESSION['user_id']);
            
            header('Location: ../pages/UserProfile.php');
        }

    else 
    {
        $error = 'Pseudonyme ou mot de passe incorrect';
    }
}

?>

        <body>
            <div id="navbar-container"></div>
            <main class="container mt-5">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h1 class="text-center m-0">Login</h1>
                    </div>

                    <div class="card-body">
                        <?php if (isset($error)) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $error ?>
                            </div>
                        <?php endif; ?>
                        <form action="../php/login.php" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                                <label for="username">Username:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                <label for="password">Password:</label>
                            </div>
                            <button class="btn btn-primary" type="submit">Login</button>
                        </form>
                        <p class="mt-3">Don't have an account? <a href="../php/register.php">Create one</a>.</p>
                    </div>
                </div>
            </main>


            <!-- Navbar and Footer Scripts -->
            <script type="text/javascript" src="../js/navbar_js.js"></script>
            <script type="text/javascript" src="../js/footer_js.js"></script>
        </body>
        <footer>
            <div id="footer-container"></div>
        </footer>
    </html>