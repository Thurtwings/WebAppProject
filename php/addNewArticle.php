<?php 
require_once("../php/Utilities.php");
require_once("../GoToThePage.php");

$utils = new Utilities(0);

	if(isset($_POST['SubmitInsert'])) 
	{
		$utils->addNewArticle($_POST['article_title'], $_POST['article_content'], $_POST['user_id']);
	}

?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="../css/style.css">

<body>
<div id="navbar-container"></div>

	<a href="<?php echo $NEW_VIDEO; ?>" class="btn btn-primary m-1">Nouvelle vidéo</a>
    <a href="<?php echo $NEW_GAME; ?>" class="btn btn-primary m-1"> Ajouter Jeux</a>
	<a href="<?php echo $NEW_STAFF_MEMBER; ?>" class="btn btn-warning m-1"> Modifier le rôle d'un membrer</a>

	<!-- Formulaire de création -->
	<div class="mx-auto" style="width: 500px">
		
		<?php   for ($i=0; $i < 3 ; $i++) 
                { 
                    echo "<br>";
                }
        ?> 

		<h3 class="art-degrade fw-bold text-center text-uppercase display-4">Ajouter un nouvel article</h3>

		<?php   for ($i=0; $i < 3 ; $i++) 
                { 
                    echo "<br>";
                }
        ?> 		

		<form action="" method="POST">
			<!-- Author name input -->
			<div class="form-outline mb-4">
				<input type="text" name="user_id" id="form4Example1" class="form-control" value=""/>
				<label class="form-label" for="form4Example1">Auteur/id</label>
			</div>

			<!-- Title input -->
			<div class="form-outline mb-4">
				<input type="text" name="article_title" id="form4Example2" class="form-control" value=""/>
				<label class="form-label" for="form4Example2">Titre</label>
			</div>

			<!-- Content input -->
			<div class="form-outline mb-4">
				<textarea class="form-control" name="article_content" id="form4Example3" rows="4"></textarea>
				<label class="form-label" for="form4Example3">Contenu</label>
            </div>
			<!-- Submit button -->
			<input type="submit" value="Enregistrer" name="SubmitInsert" class="btn btn-primary btn-block mb-4"/>
		</form>

	</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
<script type="text/javascript" src="../js/navbar_js.js"></script>
</body>	