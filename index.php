<?php 
    require_once('config/functions.php');

    $articles = getArticles();
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
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="background-color: rgba(0,0,0,0);padding: 0px 0px;">


<!-- Ici on insère les articles avec le foreach qui récupèrera toujours les titres/etc associés en BD -->

                    <?php foreach ($articles as $key): ?>

                        <div class="jumbotron bg-white border rounded-0 shadow" style="padding: 0px;padding-bottom: 10px;">

                            <h1 class="text-uppercase text-center text-dark shadow"><?= $key->LibTitrA ?></h1>
                            <div class="card">
                                <a href="article.php?NumArt=<?= $key->NumArt ?>">
                                    <img class="img-fluid card-img-top w-100 d-block" src="<?= $key->UrlPhotA ?>" alt="PhotoArticleHome" style="padding: 0px;padding-top: 0px;">
                                </a>
                            </div>
                            <p style="padding: 15px;padding-bottom: 0px;"><?= $key->LibChapoA ?><br><br></p>
                            <p><a class="btn btn-dark btn-block" role="button" href="article.php?NumArt=<?= $key->NumArt ?>">En savoir plus</a></p>
                        </div>

                    <?php endforeach ?>

                </div>

<!-- -->

                <div class="col-md-4" style="color: rgb(52,58,64);">
                    <div class="card shadow" style="margin-bottom: 20px;">
                        <div class="card-body" style="margin-bottom: 0px;">
                            <h3 class="text-uppercase text-center text-white bg-dark shadow card-title">CATÉGORIES</h3>
                            <div class="card" data-bs-hover-animate="pulse" style="margin-bottom: 10px;">
                                <img class="card-img w-100 d-block" src="http://placehold.it/750x500" width="300" height="100">
                                <div class="card-img-overlay">
                                    <h4 class="text-uppercase text-center md-auto">ACTEURS-CLÉ</h4>
                                </div>
                            </div>

                            <div class="card" data-bs-hover-animate="pulse" style="margin-bottom: 10px;"><img class="card-img w-100 d-block" src="http://placehold.it/750x500" width="300" height="100">
                                <div class="card-img-overlay">
                                    <h4 class="text-uppercase text-center">INSOLITE</h4>
                                </div>
                            </div>

                            <div class="card" data-bs-hover-animate="pulse"><img class="card-img w-100 d-block" src="http://placehold.it/750x500" width="300" height="100">
                                <div class="card-img-overlay">
                                    <h4 class="text-uppercase text-center" style="margin-bottom: 0px;">ÉVÉNEMENTS</h4>
                                </div>
                            </div>

                            <div class="card"></div>
                        </div>
                    </div>
                    <div class="card shadow" style="margin-top: 0px;margin-bottom: 20px;padding: 20px;padding-top: 20px;padding-right: 20px;padding-bottom: 5px;">
                        <h3 class="text-uppercase text-center text-white bg-dark shadow" style="margin-bottom: 10px;filter: blur(0px);padding: 5px;">à découvrir</h3>
                        <img class="rounded img-fluid card-img w-100 d-block bg-secondary" src="http://placehold.it/750x500" alt="PhotoDiscover1" data-bs-hover-animate="pulse" style="margin-bottom: 20px;margin-top: 10px;">
                        <img class="rounded img-fluid card-img w-100 d-block bg-secondary" src="http://placehold.it/750x500" alt="PhotoDiscover2" data-bs-hover-animate="pulse" style="margin-bottom: 20px;">
                        <img class="rounded img-fluid card-img w-100 d-block bg-secondary" src="http://placehold.it/750x500" alt="PhotoDiscover3" data-bs-hover-animate="pulse" style="margin-bottom: 20px;">
                    </div>

                    <div class="card shadow">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-uppercase text-center text-white bg-dark mb-0" style="padding: 5px;">BONS PLANS</h3>
                            </div>

                            <div class="card-body"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="Propos"></div>
    <div class="container">
        <h1 class="text-uppercase text-center text-secondary bg-light shadow my-4">à propos</h1>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5"><img class="img-fluid" src="images/TeamBlog.png" alt="TeamPhotoHome" data-bs-hover-animate="pulse"></div>
            <div class="col-md-5">
                <h3 class="text-uppercase text-center text-warning my-3">Projet BLOG</h3>
                <p class="text-justify" data-bs-hover-animate="pulse">Créer un site Web en utilisant notamment <strong>JavaScript, PHP et SQL</strong>. Il s'agit ici de créer une "Gestion des Articles" autrement dit un <strong>BLOG.</strong>Nous disposons de 2 semaines pour nous documenter sur les différentes
                    ressources mise à disposition.</p>
                <h3 class="text-uppercase text-center text-warning my-3">3 notions MMI</h3>
                <ul>
                    <li class="text-uppercase text-left"><strong>écriture </strong>web</li>
                    <li class="text-uppercase text-left"><strong>graphisme</strong></li>
                    <li class="text-uppercase text-left"><strong>développement </strong>WEB</li>
                </ul>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <div class="bg-white border rounded-0 border-warning shadow-sm newsletter-subscribe" style="margin-top: 40px;margin-bottom: 20px;">
        <div class="container" style="margin-bottom: 0px;">
            <div class="intro">
                <h2 class="text-center"><strong>Abonnez-vous à notre NewsLetter</strong></h2>
                <p class="text-center">Il ne vous suffira que d'une adresse mail valide pour avoir accès à tout nos articles en temps réel. Alors pourquoi pas tenter l'expérience ?</p>
            </div>
            <form class="form-inline" method="post" style="margin-bottom: 0px;"><input class="bg-light border rounded border-dark form-control d-inline-block" type="email" name="email" required="" placeholder="Email..." autocomplete="off" style="margin-bottom: 0;">
                <div class="form-group">
                    <button class="btn btn-warning text-uppercase text-warning shadow d-inline-block" type="submit" data-bs-hover-animate="pulse" style="background-color: rgb(52,58,64);">S'abonner</button>
                </div>
            </form>
        </div>
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


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark-1.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark.js"></script>

</body>

</html>





<!--

    <div class="header">
        <h1>URBRAIN BORDEAUX</h1>
    </div>


    <nav class="navbar sticky-top navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="index.php">ACCUEIL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">À PROPOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">CONTACT</a>
                </li>
            </ul>
        </div>
        <form class="form-inline mt-2">
            <input class="form-control mr-sm-2" type="search" placeholder="Tapez votre recherche..." aria-label="Recherche">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
    </nav>


    <section class="bodybg">

        <div class="container">
            <div class="row">
                
                <div class="leftcolumn">
                <?php foreach ($articles as $key): ?>
                    <div class="card">
                        <h2><?= $key->LibTitrA ?>  <span class="badge badge-warning">Nouveau</span></h2>
                        <a href="article.php?NumArt=<?= $key->NumArt ?>"><img src="<?= $key->UrlPhotA ?>" class="img-fluid" alt="PhotoArticleHome"></a>
                        <h6 class="mt-5 DateArtHome">Publié le <?= $key->DtCreA ?></h6>
                        <a href="article.php?NumArt=<?= $key->NumArt ?>" class="btn btn-secondary">Lire la suite</a>
                     </div>
                <?php endforeach ?>
                </div>

                <div class="rightcolumn">

                    <div class="card">
                        <h2>Qui sommes nous ?</h2>
                        <div class="teamphoto img-fluid" style="height: 100px;">PHOTO DE l'ÉQUIPE</div>
                        <p>Nous sommes un groupe de 4 étudiants qui partageons avec vous la musique urbaine...</p>
                    </div>

                    <div class="card light-gray-bg">
                        <h3>Catégories</h3>
                        <a class="fakeimg btn-secondary" href="index.php">Acteur Clé</a><br>
                        <a class="fakeimg btn-secondary" href="index.php">Insolite</a><br>
                        <a class="fakeimg btn-secondary" href="index.php">Événement</a>
                    </div>
                    <div class="card">
                        <h3>Suivez-nous...</h3>
                        <ul class="social-links large circle animated-effect-1">
                            <li class="facebook"><a target="_blank" href="https://www.facebook.com/"><img src="images/facebook.png"></i></a></li>
                            <li class="twitter"><a target="_blank" href=""><img src="images/twitter.png"></a></li> 
                            <li class="instagram"><a target="_blank" href=""><img src="images/instagram.png"></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    


    <div class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-2 flex-center">
                    <div class="my-2 flex-center">
                            <a href="" class="itembot mr-md-3 mr-3">Haut de page</i></a>
                            <a href="" class="itembot mr-md-3 mr-3">CGU / Mention Légales</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href=""> UrbrainBordeaux.com </a>
    </div>




</footer>


-->