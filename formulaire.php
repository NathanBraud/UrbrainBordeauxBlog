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



	<div class="container">
		<form name="inscription" method="POST" action="saisie.php">
            <div class="form-group">
            <label for="NumArt" >Numéro de</label> : <input class="form-control" type="text" placeholder="Numéro de votre article" name="NumArt"/></input> <br/>
			<label for="DtCreA" >Date</label> : <input class="form-control" type="date" name="DtCreA"/></input> <br/>
	        <label for="LibTitrA" >Titre</label> : <input class="form-control" type="text" name="LibTitrA"/></input> <br/>
	        <label for="LibChapoA" >Chapo</label> : <input class="form-control" type="text" name="LibChapoA"/></input> <br/>
	        <label for="Parag1A" >Paragraphe 1</label> : <input class="form-control" type="text" name="Parag1A"/></input> <br/>
	        <label for="LibSsTitr1" >Sous-titre 1</label> : <input class="form-control" type="text" name="LibSsTitr1"/></input> <br/>
	        <label for="Parag2A" >Paragraphe 2</label> : <input class="form-control" type="text" name="Parag2A"/></input> <br/>
	        <label for="LibSsTitr2" >Sous-titre 2</label> : <input class="form-control" type="text" name="LibSsTitr2"/></input> <br/>
	        <label for="Parag3A" >Paragraphe 3</label> : <input class="form-control" type="text" name="Parag3A"/></input> <br/>
	        <label for="LibConclA" >Conclusion</label> : <input class="form-control" type="text" name="LibConclA"/></input> <br/>
	        <label for="UrlPhotA" >Lien de la photo</label> : <input class="form-control" type="text" name="UrlPhotA"/></input> <br/>
	        
	        <label for="NumThem" >Choix de la thématique</label> : 
	        <?php $reponse = $dbPdo->query('SELECT * FROM thematique');
				$reponse->execute(); ?>
				

			<select name="NumThem" id="NumThem " class="form-control">
     			<?php
                while($obj = $reponse->fetch()) { ?>
                    <option value="<?php  echo($obj[0]); ?>">
                        <?php echo($obj[1]); ?>
                    </option>
                <?php } ?>
			</select>
            </div>
			

			<br>
			<input name="valid" type="submit" value="Envoyer"></label>
		</form>
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


