
<?php 
require_once("../php/Utilities.php");
	if(isset($_POST['SubmitInsert'])) {
		$monObj = new Utilities(0);
		$monObj->addNewVideo($_POST['title'],  $_POST['video_url']);

	}

?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="../css/style.css">

<body>
<a href="../php/addNewArticle.php">Nouvel article</a>
	<!-- Formulaire de création -->
	<div class="mx-auto" style="width: 500px">
		
		<?php   for ($i=0; $i < 3 ; $i++) 
                { 
                    echo "<br>";
                }
        ?> 

		<h3 class="art-degrade fw-bold text-center text-uppercase display-4">Ajouter une nouvelle vidéo</h3>

		<?php   for ($i=0; $i < 3 ; $i++) 
                { 
                    echo "<br>";
                }
        ?> 		

		<form action="" method="POST">
			<!-- Title input -->
			<div class="form-outline mb-4">
				<input type="text" name="title" class="form-control" value=""/>
				<label class="form-label" for="form4Example1">Titre</label>
			</div>

			<!-- Video URL input -->
			<div class="form-outline mb-4">
				<input type="text" name="video_url" class="form-control" value=""/>
				<label class="form-label" for="form4Example2">URL</label>
			</div>

			<!-- Submit button -->
			<input type="submit" value="Enregistrer" name="SubmitInsert" class="btn btn-primary btn-block mb-4"/>
		</form>

	</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

</body>	

