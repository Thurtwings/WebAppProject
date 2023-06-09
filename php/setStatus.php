<?php 
require_once("../php/Utilities.php");
$utils = new Utilities(0);
$table="";
$ban_reason = "";
require_once("../GoToThePage.php");

	if(isset($_POST['SubmitInsert'])) 
	{
		$utils->addNewBan($_POST['ban_reason'], date("Y-m-d H:i:s"), $utils->Get("id", "users", "username", $_POST['username']), $_POST['user_status']);
	}


?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="../css/style.css">
<body class=""style="background-image: url('../img/AccueilFond.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;" height: 100vh;>

<main >


<div id="navbar-container"></div>

		<a href="<?php echo $NEW_VIDEO; ?>" class="btn btn-primary m-1"> Ajouter Vidéos </a>
        <a href="<?php echo $NEW_ARTICLE; ?>" class="btn btn-primary m-1"> Ajouter Articles</a>
		<a href="<?php echo $NEW_GAME; ?>" class="btn btn-primary m-1"> Ajouter Jeux</a>
		<a href="<?php echo $NEW_STAFF_MEMBER; ?>" class="btn btn-warning m-1"> Modifier le rôle d'un membre</a>

	<!-- Formulaire de création -->
	<div class="mx-auto" style="width: 500px">
		
		<br><br>

		<h3 class="art-degrade fw-bold text-center text-uppercase display-4">Ajouter un nouveau membre au staff</h3>

		<?php   for ($i=0; $i < 3 ; $i++) 
                { 
                    echo "<br>";
                }
        ?> 		

		<form action="" method="POST">
			<!-- Author name input -->
			<div class="form-outline mb-4">
				
				<label class="form-label text-white" for="form4Example1">Nom d'utilisateur</label>
				<select name="username" id="username" class="form-select">
					<?php 
					foreach ($utils->SelectAll("users") as $key => $value) 
					{
						echo "<option>" . $value['username'] . "</option>";
					}
					?>
				</select>
			</div>
			<!-- Title input -->
			<div class="form-outline mb-4">
				<label class="form-label text-white" for="form4Example2">Rôle</label>
                <select name="user_status" id="" class="form-select">
					<?php  foreach ($utils->FetchOptions('user_status', 'users') as $key => $value) 
					{
						echo "<option>" . $value ."</option>";
					} ?>
				</select>
			</div>

            <div class="form-outline mb-4">
				<label class="form-label text-white" for="form4Example2">Raison du ban</label>
                <select name="ban_reason" id="ban_reason" class="form-select">
					<?php  foreach ($utils->FetchOptions("ban_reason", "ban") as $key => $value) 
					{
						echo "<option>" . $value ."</option>";
					} ?>
				</select>
			</div>
			<!-- Submit button -->
			<input type="submit" value="Enregistrer" name="SubmitInsert" class="btn btn-primary btn-block mb-4"/>
		</form>

	</div>
	
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
<script type="text/javascript" src="../js/navbar_js.js"></script>
</main>


</body>	