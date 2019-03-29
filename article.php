<?php 
/*
	if(!isset($_GET['NumArt']))
	{
		header('Location: index.php');
	}

	else
	{
		extract($_GET);
		$NumArt = strip_tags($NumArt);


		if (!empty($_POST)) 
		{
			extract($_POST);
			$errors = array();
			$Author = strip_tags($Author);
			$Comment = strip_tags($Comment);

			if(empty($Author))
				array_push($errors, 'Entrez un pseudo');
			if(empty($Comment))
				array_push($errors, 'Entrez un commentaire');
			if(count($errors) == 0)
			{
				$comment = addComment($NumArt, $Author, $Comment);

				$success = 'Votre commentaire a été publié';
				unset($Author);
				unset($Comment);
			}
			}
			}
*/
		require_once('config/functions.php');

		$NumArt = $_GET['NumArt'];
		$article = getArticle($NumArt);
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?= $article->LibTitrA ?></title>
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
    </div>>

	<div class="container">
		<div class="rows">
			<div class="md-6">

				<header>

					<h1 class="title mb-5 text-uppercase"><?= $article['LibTitrA'] ?></h1>
					<p style="font-style: italic;"><?= $article['LibChapoA'] ?></p>

				</header>

				<section>

					<p><?= $article['Parag1A'] ?></p>
					<p class="subtitle"><?= $article['LibSsTitr1'] ?></p>
					<p><?= $article['Parag2A'] ?></p>
					<p class="subtitle"><?= $article['LibSsTitr2'] ?></p>
					<p><?= $article['Parag3A'] ?></p>
					<p><?= $article['LibConclA'] ?></p>
					<img src="<?= $article['UrlPhotA'] ?>" class="img-fluid">

				</section>

				<div class="mt-5">

					<div style="text-align: right;">Publié le <?= $article['DtCreA'] ?></div>

				</div>

				<a href="index.php" class="btn btn-dark mt-5 mb-5">HOME</a>
				<button class="btn btn-secondary">    
                    <a href="update.php?NumArt=<?= $article['NumArt'] ?>" class="text-white">Éditer un article</a>
                </button>
                <button class="btn btn-danger">
                	<a href="delete.php?NumArt=<?= $article['NumArt']?>" class="text-white">Supprimer</a>
                </button>
			</div>
		</div>


		<?php
		if (isset($success)) 
			echo $success;
		if (!empty($errors)):?>
			<?php foreach ($errors as $error): ?> 
				<p><?= $errors ?></p>
			<?php endforeach; ?>
		<?php endif ?>

		<form action="article.php?NumArt<?= $article['NumArt'] ?>" method="post">
			<div class="form-group">
				<label for="Author">Pseudo :</label>
				<input type="text" name="author" id="author" class="form-control">
			</div>

			<div class="form-group">
				<label for="Comment">Commentaire :</label>
				<textarea name="comment" id="comment" cols="30" rows="6" class="form-control"></textarea>
			</div>

			<div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="checkbox">
			    <label for="checkbox" class="form-check-label">Prouves ton état humain !</label>
  			</div>

			<button type="submit" class="btn btn-primary">Envoyer</button>

		</form>
	</div>


<div class="bg-light shadow testimonials-clean con" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true">
        <div class="container">
            <div class="intro">
                <h1 class="text-uppercase text-center text-secondary">SPONSORS</h1>
            </div>
        </div>
    </div>
    <div class="brands img-fluid"><a href="#">
        <img src="https://cdn-images-1.medium.com/max/1200/1*CC0Bibc8GhOv1F5kff-jCw.png" style="width: 300px; height: 200px;">
        <img src="http://ausoniuseditions.u-bordeaux-montaigne.fr/images/Images/Bordeaux-Montaigne-Logo2.png" style="width: 300px; height: 150px;">
        <img src=""></a></div>
    
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark-1.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark.js"></script>
</body>
</html>