<?php 
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rush Runners</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="../pages/index.php">Rush Runners</a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-white" href="../pages/index.php">Accueil</a>
                    <a class="nav-link text-white" href="../pages/typesSR.php">Types de Speedrun</a>
                    <a class="nav-link text-white" href="../pages/BestSR.php">Vidéos</a>
                    <?php 
                    if(!isset($_SESSION['user_name'])) 
                    { echo "BONJOUR TA RACE!";
                        ?>
                        <a class="nav-link text-white" href="../php/login.php">Se connecter</a>
                        <a class="nav-link text-white" href="../php/register.php">S'enregistrer</a>
                        
                    <?php 
                    } 
                    else 
                    { 
                        echo "Bienvenue " . $_SESSION['user_name']; ?>
                        <a class="nav-link text-white" href="../php/logout.php">Déconnexion</a>
                    <?php 
                    } ?>
                    <a class="nav-link text-white me-3" href="../pages/contact.php">Nous contacter</a>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>