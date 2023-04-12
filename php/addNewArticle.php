<?php 
require_once("../php/Utilities.php");
	if(isset($_POST['SubmitInsert'])) {
		$monObj = new Utilities(0);
		$monObj->addNewArticle($_POST['article_title'], $_POST['article_content'], 16);

	}

?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="../css/style.css">
<a href="../php/addNewVideo.php">Nouvelle vidéo</a>
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
				<label class="form-label" for="form4Example1">Auteur</label>
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

</body>	