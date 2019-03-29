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
        <nav class="navbar navbar-light navbar-expand-md sticky-top bg-dark navigation-clean" style="margin-bottom: 30px;">
            <div class="container">
            	<a class="navbar-brand text-warning" href="index.php" style="font-size: 22px;">URBRAIN BORDEAUX</a>
            	<button class="navbar-toggler bg-warning" data-toggle="collapse" data-target="#navcol-1" data-bs-hover-animate="pulse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1" style="margin: 0px;">
                    <ul class="nav navbar-nav text-uppercase ml-auto">
                        <li class="nav-item text-warning" role="presentation"><a class="nav-link text-warning" href="pagearticle.php"><strong>ARTICLES</strong></a></li>
                        <li class="nav-item text-white" role="presentation"><a class="nav-link text-warning" href="index.php">À PROPOS</a></li>
                        <li class="nav-item text-white" role="presentation"><a class="nav-link text-warning" href="contact.html">CONTACT</a></li>
                    </ul>
            	</div>
		    </div>
		</nav>
	</div>

	<div class="container">
		<div class="rows">
			<div class="md-6">

				<header>

					<h1 class="title mb-5"><?= $article['LibTitrA'] ?></h1>
					<p style="font-style: italic;"><?= $article['LibChapoA'] ?></p>

				</header>

				<section>

					<p><?= $article['Parag1A'] ?></p>
					<p class="subtitle"><?= $article['LibSsTitr1'] ?></p>
					<p><?= $article['Parag2A'] ?></p>
					<p class="subtitle"><?= $article['LibSsTitr2'] ?></p>
					<p><?= $article['Parag3A'] ?></p>
					<p><?= $article['LibConclA'] ?></p>

				</section>

				<div class="mt-5">

					<div style="text-align: right;">Publié le <?= $article['DtCreA'] ?></div>

				</div>

				<a href="index.php" class="btn btn-dark mt-5 mb-5">HOME</a>
				<button class="btn btn-secondary">    
                    <a href="update.php?NumArt=<?= $article['NumArt'] ?>" class="text-white">Éditer un article</a>
                </button>
                <button class="btn btn-primary">
                	<a href="delete.php?NumArt=<?= $article['NumArt']?>">Supprimer</a>
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
    <div class="bg-light footer-basic">
        <footer>
            <div class="social" style="padding: 20px 0;background-color: rgb(52,58,64);"><a class="text-white" href="#" style="background-color: #2980ef;"><i class="icon ion-social-instagram"></i></a><a class="text-white bg-warning" href="#"><i class="icon ion-social-snapchat"></i></a><a class="text-white" href="#" style="background-color: #00a3dd;"><i class="icon ion-social-twitter"></i></a>
                <a
                    class="text-white" href="#" style="background-color: #3a75c4;"><i class="icon ion-social-facebook"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a class="text-primary" href="#" target="_top">Haut de page</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">CGU</a></li>
                <li class="list-inline-item"><a href="#">Politique de confidentialité</a></li>
            </ul>
            <p class="copyright" style="font-size: 16px;">UrbrainBordeaux © 2019</p>
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