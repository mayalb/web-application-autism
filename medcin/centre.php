<?php
$posi=1;
include("../database.php");
include("../connect.php");


  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Consula &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">
    <link rel="shortcut icon" type="image/png" href="IMG/1_logo.png" >
    <link rel="stylesheet" href="On_My_Way_files/bootstrap.css">
    <link rel="stylesheet" href="On_My_Way_files/animate.css">
    <link rel="stylesheet" href="On_My_Way_files/owl.css">
    <link rel="stylesheet" href="On_My_Way_files/aos.css">
    <link rel="stylesheet" href="On_My_Way_files/bootstrap-datepicker.css">
    <link rel="stylesheet" href="On_My_Way_files/jquery.css">
    <link rel="stylesheet" href="On_My_Way_files/fancybox.css">
    
    <link rel="stylesheet" href="On_My_Way_files/ionicons.css">
    <link rel="stylesheet" href="On_My_Way_files/font-awesome.css">

    <!------------Style---------------->
    <link rel="stylesheet" href="On_My_Way_files/style.css">

    

    <style>
      .dropdown {
        position: relative;
        display: inline-block;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }
</style>

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="centre.php" class="text-black h2 mb-0">Les centres spécialisés d'autisme<span class="text-primary">.</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="../index.php" class="nav-link">Accueil</a></li>
                <li><a href="#" class="nav-link">Mon profil</a></li>
                <li><a href="#about-section" class="nav-link">Aide </a></li>
                <li class="dropdown"><span ><a href="#" class="nav-link">Fonctionnalités</a></span>
                      <div class="dropdown-content" >
                      <p><a href="#">Afficher Les Médecins</a></p>
                      <p><a href="centre.php">Afficher Les Centres</a> </p>
                      <p><a href="#">Documentation</a></p>
                      </div>
                </li>
                
                
                
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    <div class="site-blocks-cover overlay" style="background-image: url(images/6.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-6">
                <h1>Ouvrons La Bulle....</h1>
                <p class="mb-5"></p>
                <div>
                  <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                </div>
                 <?php
    $resultat=mysqli_query($conn,"SELECT * from centre ");

   
    while($row=mysqli_fetch_assoc($resultat))
    {

       $desciption=$row['description'];
       $nom=$row['nom'];
       $wilaya=$row['wilaya'];
       $lien=$row['lien'] ;
       echo"
      
      <section class='site-section border-bottom' id='team-section'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-6 col-lg-4 mb-5 mb-lg-0' data-aos='fade' data-aos-delay='100'>
            <div class='person text-center'>
              <img src='images/person_2.jpg' alt='Image' class='img-fluid rounded-circle w-50 mb-5'>
              <h3>John Rooster</h3>
              <p class='position text-muted'>$nom</p>
              <p class='mb-4'>$desciption</p>
               <p class='mb-4'>$wilaya</p>
                <p class='mb-4'>$lien</p>
              <ul class='ul-social-circle'>
                <li><a href='#'><span class='icon-facebook'></span></a></li>
                <li><a href='#'><span class='icon-twitter'></span></a></li>
                <li><a href='#'><span class='icon-linkedin'></span></a></li>
                <li><a href='#'><span class='icon-instagram'></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
       ";
    }
    
    ?>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  

    
    

    <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>