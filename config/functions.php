
<?php 



if (isset($_POST['edit_article_submit'])){
	updateArticle();

}
// FONCTION RÉCUPÉRANT LES ARTICLES
	function getArticles()
	{
		require('config/connect.php');
		$query = $dbPdo->prepare('SELECT * FROM article ORDER BY DtCreA DESC');
		$query->execute();
		$data = $query->fetchAll(PDO::FETCH_OBJ);
		return $data;
		$query->closeCursor();
	}


// FONCTION RÉCUPÉRANT UN ARTICLE
	function getArticle($NumArt)
	{
		require('config/connect.php');
		$query = $dbPdo->prepare('SELECT * FROM article WHERE NumArt = (:Num_article)');
		$query->execute(array(
			':Num_article' => $NumArt


		));
		
		$data = $query->fetch();
	return $data;
	$query->closeCursor();
	}



	function createArticle()
	{
		require('config/connect.php');
		$queryText = 'INSERT INTO article (NumArt, DtCreA, LibTitrA, LibChapoA, Parag1A, LibSsTitr1, Parag2A, LibSsTitr2, Parag3A, LibConclA, UrlPhotA, NumAngl, NumThem, NumLang) VALUES (:NumArt, :DtCreA, :LibTitrA, :LibChapoA, :Parag1A, :LibSsTitr1, :Parag2A, :LibSsTitr2, :Parag3A, :LibConclA, :UrlPhotA, :NumAngl, :NumThem, :NumLang )';
        $query = $dbPdo->prepare($queryText);

		
		try {	// 5. Lancement de la requete
        $query->execute(array(
          ':NumArt' => $NumArt,
          ':DtCreA' => $DtCreA,
          ':LibTitrA' => $LibTitrA,
          ':LibChapoA' => $LibChapoA,
          ':Parag1A' => $Parag1A,
          ':LibSsTitr1' => $LibSsTitr1,
          ':Parag2A' => $Parag2A,
          ':LibSsTitr2' => $LibSsTitr2,
          ':Parag3A' => $Parag3A,
          ':LibConclA' => $LibConclA,
          ':UrlPhotA' => $UrlPhotA,
          ':NumAngl' => $NumAngl,
          ':NumThem' => $NumThem,
          ':NumLang' => $NumLang
          ));
        }
        
        catch (PDOException $e) {
			echo 'Echec de connexion : ' . $e->getMessage();
		}
	

		header('Location: index.php');

		$query->closeCursor();
}	



	function updateArticle(){

		require('connect.php');
		$query = $dbPdo->prepare('UPDATE article SET LibTitrA = :LibTitrA, LibChapoA = :LibChapoA, Parag1A = :Parag1A, LibSsTitr1 = :LibSsTitr1, Parag2A = :Parag2A, LibSsTitr2 = :LibSsTitr2, Parag3A = :Parag3A, LibConclA = :LibConclA, UrlPhotA = :UrlPhotA, NumThem = :NumThem WHERE NumArt = :NumArt');
		$query->execute(array(
			':NumArt' => $_GET['NumArt'],
			':LibTitrA' => $_POST['LibTitrA'],
			':LibChapoA' => $_POST['LibChapoA'],
			':Parag1A' => $_POST['Parag1A'],
			':LibSsTitr1' => $_POST['LibSsTitr1'],
			':Parag2A' => $_POST['Parag2A'],
			':LibSsTitr2' => $_POST['LibSsTitr2'],
			':Parag3A' => $_POST['Parag3A'],
			':LibConclA' => $_POST['LibConclA'],
			':UrlPhotA' => $_POST['UrlPhotA'],
			':NumThem' => $_POST['NumThem']
			));
			

			$article = $query->fetch();
return $article;
		}

		$queryText = 'INSERT INTO article (NumArt, DtCreA, LibTitrA, LibChapoA, Parag1A, LibSsTitr1, Parag2A, LibSsTitr2, Parag3A, LibConclA, UrlPhotA, NumAngl, NumThem, NumLang) VALUES (:NumArt, :DtCreA, :LibTitrA, :LibChapoA, :Parag1A, :LibSsTitr1, :Parag2A, :LibSsTitr2, :Parag3A, :LibConclA, :UrlPhotA, :NumAngl, :NumThem, :NumLang );';

	

	function deleteArticle()
	{
	}

	function addComment($ArtNumArt, $Author, $Comment)
	{
		require('config/connect.php');
		$query = $dbPdo->prepare('INSERT INTO comment (ArtNumArt, Author, Comment) VALUES (?, ?, ?)');
		$query->execute(array($ArtNumArt, $Author, $Comment));
		$query->closeCursor();
	}



?>