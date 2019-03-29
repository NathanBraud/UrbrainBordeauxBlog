<?php 
    require_once('config/functions.php');

    $articles = getArticles();
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Urbrain</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
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
                        <li class="nav-item text-white" role="presentation"><a class="nav-link text-warning" href="index.php">À PROPOS</a></li>
                        <li class="nav-item text-white" role="presentation"><a class="nav-link text-warning" href="contact.html">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center text-dark">DERNIERS ARTICLES</h2>
                <p class="text-center text-secondary">Profitez sur cette page des 3 derniers <strong>articles</strong> publiés sur ce blog. Navigue à travers différentes catégories et plaisirs !</p>
            </div>
            <div class="row articles">

                <?php foreach ($articles as $key): ?>

                <div class="col-sm-6 col-md-4 item" data-bs-hover-animate="pulse"><a href="article.php?NumArt=<?= $key->NumArt ?>"><img class="img-fluid" src="<?= $key->UrlPhotA ?>"></a>
                    <h3 class="name text-warning text-uppercase"><?= $key->LibTitrA ?></h3>
                    <p class="description" style="text-overflow: ellipsis; overflow: hidden;"><?= $key->LibChapoA ?></p>
                    <a href="article.php?NumArt=<?= $key->NumArt ?>" class="action"><i class="fa fa-arrow-circle-right"></i></a>
                    
                </div>

                <?php endforeach ?>
    </div>
    </div>
    </div>

    <div class="container-fluid" data-bs-hover-animate="pulse">
        <button class="btn btn-warning btn-block my-5 shadow" type="button"><a href="formulaire.php" class="text-white" style="text-decoration: none;"><h2>Ajouter un article</h2></a></button> 
    </div>

    <div class="bg-light mt-5 border-top border-rounded-0 border-warning shadow testimonials-clean" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true">
        <div class="container">
            <div class="intro">
                <h1 class="text-uppercase text-center text-secondary"><strong>SPONSORS</strong></h1>
            </div>
        </div>
    </div>
    <div class="brands img-fluid"><a href="#">
        <img src="https://cdn-images-1.medium.com/max/1200/1*CC0Bibc8GhOv1F5kff-jCw.png" style="width: 400px; height: 200px;">
        <img src="http://ausoniuseditions.u-bordeaux-montaigne.fr/images/Images/Bordeaux-Montaigne-Logo2.png" style="width: 400px; height: 150px;">
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