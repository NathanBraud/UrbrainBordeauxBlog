<?php 
$dbPdo = new PDO('mysql:host=localhost;dbname=blogart', 'root', '');

if (isset($_GET['NumArt']) AND !empty($_GET['NumArt'])) {
  $suppr_id = ($_GET['NumArt']);

  $suppr = $dbPdo->prepare('DELETE FROM article WHERE NumArt = ?');
  $suppr->execute(array($suppr_id));

  header('Location: index.php');
}
?>