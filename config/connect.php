<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of script Connect_BD.php (php procédural)
 *
 * @author Version etudiant
 */

	    // Messages of errors = On
	    ini_set('display_errors','on');
	    ini_set('display_startup_errors','on');
	    error_reporting(E_ALL);

	    ////////////////////////////////////////////////////////
		// Connexion et choix de la base de données
		$server = "mysql:dbname=blogart;host=localhost";
		$user = "root";
		$password = '';


		try {
			$dbPdo = new PDO($server, $user, $password);
			echo '<script>console.log("Successfull connection!")</script>';

		} 
		catch (PDOException $erreur) {
			echo '<script>console.log("Failed to connect!")</script>' . $erreur->getMessage();
			
		}

$dbPdo->query('SET NAMES UTF8');
?>


