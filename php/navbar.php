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
    <!-- <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="../pages/index.php">Rush Runners</a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-danger" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex justify-space-evenly">
                    <a class="nav-link text-white" href="../pages/index.php">Accueil</a>
                    <a class="nav-link text-white" href="../pages/typesSR.php">Types de Speedrun</a>
                    <a class="nav-link text-white" href="../pages/BestSR.php">Vidéos</a>
                    <?php 
                    if(!isset($_SESSION['user_name'])) 
                    { ?>
                        <a class="nav-link text-white" href="../php/login.php">Se connecter</a>
                        <a class="nav-link text-white" href="../php/register.php">S'enregistrer</a>
                        
                    <?php 
                    } 
                    else 
                    { 
                    ?>
                        <a class="nav-link text-white" href="../php/logout.php">Déconnexion</a>
                    <?php 
                    } ?>
                    <a class="nav-link text-white me-3" href="../pages/contact.php">Nous contacter</a>
                </div>
            </div>
        </div>
    </nav> -->

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="https://mdbgo.com/">
      <img
        src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
        height="16"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item d-flex-in-line">
            <div class="navbar-nav d-flex justify-space-evenly">
                    <a class="nav-link text-white" href="../pages/index.php">Accueil</a>
                    <a class="nav-link text-white" href="../pages/typesSR.php">Types de Speedrun</a>
                    <a class="nav-link text-white" href="../pages/BestSR.php">Vidéos</a>
                    <a class="nav-link text-white me-3" href="../pages/contact.php">Nous contacter</a>
                </div>
        </li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center">
      <?php 
                    if(!isset($_SESSION['user_name'])) {
          $goTo = "../pages/UserProfile.php"; ?>
                        <a class="nav-link text-white" href="../php/login.php">Se connecter</a>
                        <a class="nav-link text-white" href="../php/register.php">S'enregistrer</a>
                        <button type="button" class="btn btn-link px-3 me-2">
          Login
        </button>
        <button type="button" class="btn btn-primary me-3">
          Sign up for free
        </button>
                        
                    <?php 
                    } 
                    else {
          $goTo = "../pages/index.php";
                    ?>
                        <a class="nav-link text-white" href="../php/logout.php">Déconnexion</a>
                    <?php 
                    } ?>
        
        <!-- <img src="../img/default_avatar.png" alt=""> -->
        <!-- Avatar -->
      <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src="../img/default_avatar.png"
            class="rounded-circle"
            height="25"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" 
            href="<?php $goTo ?>">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
</body>
</html>