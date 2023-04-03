
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
            <a class="text-white" href="../pages/index.php">Rush Runners</a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-white" aria-current="page" href="../pages/index.php">Accueil</a>
                    <a class="nav-link text-white" href="../pages/index.php">Types de Speedrun</a>
                    <a class="nav-link text-white" href="../pages/BestSR.php">Vidéos</a>
                    <?php 
                    if(!isset($_SESSION['user_name']))
                    { ?>
                        
                        <a class="nav-link text-white" href="../pages/login.html">Se connecter</a>
                        <a class="nav-link text-white" href="../php/register.php">S'enregistrer</a>
                        
                        <a class="nav-link text-white" href="../pages/Contact.php">Nous contacter</a>
                        <a class="d-flex align-items-center" href="../pages/Contact.php">Nous contacter</a>
                        <?php } 
                else 
                { ?>
                <p>on est là</p>
                <a class="nav-link text-white" href="../php/logout.php">Log out</a>
                    
                <?php } ?>
                </div>
            </div>
        </div>
    </nav>
</body>
</html>

