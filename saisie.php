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

       require('config/connect.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Urbrain Bordeaux</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/dh-header-cover-image-button.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>
<body>

<?php

	if ((isset($_POST['NumArt'])) && (isset($_POST['DtCreA'])) && (isset($_POST['LibTitrA'])) && (isset($_POST['LibChapoA'])) && (isset($_POST['Parag1A'])) && (isset($_POST['LibSsTitr1'])) && (isset($_POST['Parag2A'])) && (isset($_POST['LibSsTitr2'])) && (isset($_POST['Parag3A'])) && (isset($_POST['LibConclA'])) && (isset($_POST['UrlPhotA'])))
	{
			if (isset($_POST['NumArt']) && !empty($_POST['NumArt'])) {
			$NumArt = $_POST['NumArt'];
		}
	
	if (isset($_POST['DtCreA']) && !empty($_POST['DtCreA'])) {
			$DtCreA = $_POST['DtCreA'];
		}

	if (isset($_POST['LibTitrA']) && !empty($_POST['LibTitrA'])) {
			$LibTitrA = $_POST['LibTitrA'];
		}

	if (isset($_POST['LibChapoA']) && !empty($_POST['LibChapoA'])) {
			$LibChapoA = $_POST['LibChapoA'];
		}

	if (isset($_POST['Parag1A']) && !empty($_POST['Parag1A'])) {
			$Parag1A = $_POST['Parag1A'];
		}

	if (isset($_POST['LibSsTitr1']) && !empty($_POST['LibSsTitr1'])) {
			$LibSsTitr1 = $_POST['LibSsTitr1'];
		}

	if (isset($_POST['Parag2A']) && !empty($_POST['Parag2A'])) {
			$Parag2A = $_POST['Parag2A'];
		}

	if (isset($_POST['LibSsTitr2']) && !empty($_POST['LibSsTitr2'])) {
			$LibSsTitr2 = $_POST['LibSsTitr2'];
		}

	if (isset($_POST['Parag3A']) && !empty($_POST['Parag3A'])) {
			$Parag3A = $_POST['Parag3A'];
		}

	if (isset($_POST['LibConclA']) && !empty($_POST['LibConclA'])) {
			$LibConclA = $_POST['LibConclA'];
		}

	if (isset($_POST['UrlPhotA']) && !empty($_POST['UrlPhotA'])) {
			$UrlPhotA = $_POST['UrlPhotA'];
		}


		$NumThem = $_POST['NumThem'];
		
		if(isset($_POST['submit']));
	 }


		$NumAngl = 'MUSK5';
		$NumLang = 'FRAN01';

        
		$queryText = 'INSERT INTO article (NumArt, DtCreA, LibTitrA, LibChapoA, Parag1A, LibSsTitr1, Parag2A, LibSsTitr2, Parag3A, LibConclA, UrlPhotA, NumAngl, NumThem, NumLang) VALUES (:NumArt, :DtCreA, :LibTitrA, :LibChapoA, :Parag1A, :LibSsTitr1, :Parag2A, :LibSsTitr2, :Parag3A, :LibConclA, :UrlPhotA, :NumAngl, :NumThem, :NumLang);';
        $query = $dbPdo->prepare($queryText);

		try {
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
          ':NumLang' => $NumLang,
          ));
		
        }

        catch (PDOException $e) { echo 'echec';}

		$query->closeCursor();



        
		
?>
<div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand navigation-clean-search">
                <div class="container">
                    <div class="collapse navbar-collapse text-capitalize" id="navcol-1"><span class="ml-auto navbar-text">
                        <a href="login.html" class="login">Connexion</a></span>
                        <a class="btn btn-light text-warning action-button" role="button" href="registration.html" style="background-color: rgb(52,58,64);">S'inscrire</a></div>
                    </div>
                </div>
            </nav>
    </div>
    <div>
        <nav class="navbar navbar-light navbar-expand-md sticky-top bg-dark navigation-clean" style="margin-bottom: 30px;">
            <div class="container">
            	<a class="navbar-brand text-warning" href="index.php" style="font-size: 22px;">URBRAIN BORDEAUX</a>
            	<button class="navbar-toggler bg-warning" data-toggle="collapse" data-target="#navcol-1" data-bs-hover-animate="pulse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1" style="margin: 0px;">
                    <ul class="nav navbar-nav text-uppercase ml-auto">
                        <li class="nav-item text-warning" role="presentation"><a class="nav-link text-warning" href="pagearticle.php"><strong>ARTICLES</strong></a></li>
                        <li class="nav-item text-white" role="presentation"><a class="nav-link text-warning" href="index.php#Propos">À PROPOS</a></li>
                        <li class="nav-item text-white" role="presentation"><a class="nav-link text-warning" href="contact.html">CONTACT</a></li>
                    </ul>
            	</div>
		    </div>
		</nav>
	</div>

<div class="bg-dark footer-basic">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3 class="text-warning">Services</h3>
                    <ul class="text-white">
                        <li><a download href="Conditions Générales d'Utilisation.pdf">CGU  / Mentions Légales</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3 class="text-warning">À propos</h3>
                    <ul class="text-white">
                        <li><a href="#">Company</a></li>
                        <li><a href="index.php#Propos">Équipe</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3 class="text-warning">Urbrain Bordeaux</h3>
                    <ul class="text-white">
                        <li><p><strong>Numéro de téléphone </strong> : 06 95 10 31 80 </p></li>
                        <li><p><strong>Adresse postale</strong> : 1 Rue Jacques Ellul, 33800 Bordeaux</p></li>
                        <li><p><strong>Adresse mail </strong>: nathan.braud@mmibordeaux.com</p></li>
                    </ul>
                </div>
                <div class="col item social">
                    <a href="https://www.facebook.com" target="_blank" class="bg-light"><i class="icon ion-social-facebook"></i></a>
                    <a href="https://twitter.com/" target="_blank" class="bg-light"><i class="icon ion-social-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank" class="bg-light"><i class="icon ion-social-instagram"></i></a>
                </div>
            </div>
            <p class="copyright">Copyright © 2019 Urbrain Bordeaux par Nathan Braud. Tous droits réservés</p>
        </div>
    </footer>
</div>

</body>
</html>
