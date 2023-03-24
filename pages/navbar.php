<nav class="navbar navbar-expand-lg bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Speedrun</a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link text-white" aria-current="page" href="../pages/index.php">Accueil</a>
                <a class="nav-link text-white" href="../pages/index.php">Types de Speedrun</a>
                <a class="nav-link text-white" href="../pages/BestSR.php">vidéos410</a>
                <?php 
                if(!isset($_SESSION['user_name']))
                { ?>
                    
                    <a class="nav-link text-white" href="../pages/login.html">Log In</a>
                    <a class="nav-link text-white" href="../pages/signin.html">Sign In</a>
                    <p>po po po</p>
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