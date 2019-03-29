<?php 

		$server = 'mysql:host=localhost;dbname=blogart';
		$user = 'root';
		$password = '';

		try {
			$bdPdo = new PDO ($server, $user, $password);
			echo "<h2> Connexion réussie </h2>";
		}

		catch (PDOException $e) {
			echo 'Echec de connexion : ' . $e->getMessage();
		}

		// Encodage en UTF8
		$bdPdo->query('SET NAMES UTF8');


		require_once('config/functions.php');
    	$NumArt = $_GET['NumArt'];
    	$article = getArticle($NumArt);


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

</body>
</html>


        <div class="container">
        <h2> Éditer un article </h2>
        <form action=<?="config/functions.php?NumArt=".$NumArt ?> method="POST">

            <label for="LibTitrA"> LibTitrA </label>
            <input type="text" name="LibTitrA" value=<?= $article['LibTitrA'] ?>><br/>

            <label for="LibChapoA"> LibChapoA </label><br/>
            <textarea name="LibChapoA" cols="110" rows="5"><?= $article['LibChapoA'] ?></textarea> <br/><br/>

            <label for="Parag1A"> Parag1A </label><br/>
            <textarea name="Parag1A" cols="110" rows="5"><?= $article['Parag1A'] ?></textarea> <br/><br/>

            <label for="LibSsTitr1"> LibSsTitr1 </label><br/>
            <input type="text" name="LibSsTitr1" value="<?= $article['LibSsTitr1'] ?>"/><br/><br/>

            <label for="Parag2A"> Parag2A </label><br/>
            <textarea name="Parag2A" cols="110" rows="5"><?= $article['Parag2A'] ?></textarea> <br/><br/>

            <label for="LibSsTitr2"> LibSsTitr2 </label><br/>
            <input type="text" name="LibSsTitr2" value="<?= $article['LibSsTitr2'] ?>"/><br/><br/>

            <label for="Parag3A"> Parag3A </label><br/>
            <textarea name="Parag3A" cols="110" rows="5"><?= $article['Parag3A'] ?></textarea> <br/><br/>

            <label for="LibConclA"> LibConclA </label><br/>
            <textarea name="LibConclA" cols="110" rows="5"><?= $article['LibConclA'] ?></textarea> <br/><br/>

            <label for="UrlPhotA"> UrlPhotA </label><br/>
            <input type="url" name="UrlPhotA" value="<?= $article['UrlPhotA'] ?>"/><br/><br/>


            <p>Choix de la thématique :</p>
				<div>
				  <input type="radio" name="NumThem" value="2ZQ4"
				         checked>
				  <label for="NumThem">Événement</label>
				</div>

				<div>
				  <input type="radio" name="NumThem" value="F67A">
				  <label for="NumThem">Insolite</label>
				</div>

				<div>
				  <input type="radio" name="NumThem" value="761D">
				  <label for="NumThem">Acteur Clé</label>
				</div>


            <input type="submit" value="Envoyer" name="edit_article_submit">

            <br/>
            <br/>

        </form>

    </div>

