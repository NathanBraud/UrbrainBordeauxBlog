<?php 

		$server = 'mysql:host=localhost;dbname=blogart';
		$user = 'root';
		$password = '';

		try {
			$bdPdo = new PDO ($server, $user, $password);
			echo "<h2> NOUVELLE DONNÉE </h2>";
		}

		catch (PDOException $e) {
			echo 'Echec de connexion : ' . $e->getMessage();
		}

		// Encodage en UTF8
		$bdPdo->query('SET NAMES UTF8');

		require('config/connect.php');
 ?>
		
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>



	<div class="container">
		<form name="inscription" method="POST" action="saisie.php">
			<label for="NumArt" >Numéro de</label> : <input type="text" name="NumArt"/></input> <br/>
			<label for="DtCreA" >Date</label> : <input class="form-control" type="date" name="DtCreA"/></input> <br/>
	        <label for="LibTitrA" >Titre</label> : <input type="text" name="LibTitrA"/></input> <br/>
	        <label for="LibChapoA" >Chapo</label> : <input type="text" name="LibChapoA"/></input> <br/>
	        <label for="Parag1A" >Paragraphe 1</label> : <input type="text" name="Parag1A"/></input> <br/>
	        <label for="LibSsTitr1" >Sous-titre 1</label> : <input type="text" name="LibSsTitr1"/></input> <br/>
	        <label for="Parag2A" >Paragraphe 2</label> : <input type="text" name="Parag2A"/></input> <br/>
	        <label for="LibSsTitr2" >Sous-titre 2</label> : <input type="text" name="LibSsTitr2"/></input> <br/>
	        <label for="Parag3A" >Paragraphe 3</label> : <input type="text" name="Parag3A"/></input> <br/>
	        <label for="LibConclA" >Conclusion</label> : <input type="text" name="LibConclA"/></input> <br/>
	        <label for="UrlPhotA" >Lien de la photo</label> : <input type="text" name="UrlPhotA"/></input> <br/>
	        
	        <label for="NumThem" >Choix de la thématique</label> : 
	        <?php $reponse = $dbPdo->query('SELECT * FROM thematique');
				$reponse->execute(); ?>
				

			<select name="NumThem" id="NumThem">
     			<?php
                while($obj = $reponse->fetch()) { ?>
                    <option value="<?php  echo($obj[0]); ?>">
                        <?php echo($obj[1]); ?>
                    </option>
                <?php } ?>
			</select>
			

			<br>
			<input name="valid" type="submit" value="Envoyer"></label>
		</form>
</div>




</body>
</html>


