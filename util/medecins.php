<?php

include("../database.php");
include("../connecter1.php");
include("header.html");


  ?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sovons L'autiste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">
    <link rel="shortcut icon" type="image/png" href="IMG/index.jpg" >
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
  </head>
  <body data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0" class="">
    <a href="#" onclick="javascript:history.back()"></a>
    
    
<!--------------------------------------------------------------------------------------------------------------------------------------->
    
    <section class="site-hero overlay" style="background-image: url(IMG/1.jpg); background-position: 0% 50px;" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center aos-init aos-animate" data-aos="fade-up">
            
            <h1 class="heading"> Les Medecins Diponibles</h1>
          </div>
        </div>
      </div>
     <!-- Fin section -->  
    </section>
 <!------------------------------------------------------------------------------------------------------------------------------------->
 <section class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5 aos-init" data-aos="fade-up">
            
            <img src="IMG/88.png" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-12 col-lg-4 order-lg-1 aos-init" data-aos="fade-up">
            <h2 class="heading text-danger">  <b>Important !</b>!</h2>
            <h3>Une régression, peu importe sa nature, est un fort signe d'autisme</h3>
            <p class="mb-4"> Certains enfants sur le spectre de l'autisme commencent par suivre un développement normal pour ensuite régresser, généralement entre 12 et 24 mois. Toute perte de la parole, du babillage, de régression dans les gestes ou encore dans les compétences sociales doit être prise très au sérieux.</p>
            
          </div>
          

        </div>
      </div>
    </section>   
<!---------------------------------------------------------------------------------------------------------------------------------------->

 
     <div class="container">
        
        <div class="row">
          <?php

          $resultat=mysqli_query($conn,"SELECT * from compte where nature='1' ");
        
             $p=0;
            while($row=mysqli_fetch_assoc($resultat))
            {
             $p++;
             $id=$row['id'];
             $adresse=$row['adresse'];
             $wilaya=$row['wilaya'];
             $numero=$row['numero'] ;
             $mail=$row['login'];
             $nom=$row['nom'];
             echo "
              <div class='col-lg-4 col-md-6 col-sm-6 col-12 post mb-5' data-aos='fade-up' data-aos-delay='100'>

            <div class='media media-custom d-block mb-4 h-100'>
              <a href='#' class='mb-4 d-block'><img src='IMG/face.jpg' alt='Image placeholder' class='img-fluid'></a>
              <div class='media-body'>
                <span class='meta-post'></span>
                <h2 style='color:#48cbdd;'>&nbsp &nbsp&nbsp &nbsp Médecin $p   </h2>
                <p>
                  <UL>
                  <li> Nom: $nom</li>
                    <li>Wilaya: $wilaya</li>
                    <li>Num tel: $numero </li>
                    <li>Adresse mail: $mail</li>
                  </UL>
                </P>

                
              </div>
             <span> <strong>  <p style='color:red;'> <a href=''>&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp Voir profil </a>  <a href=''> &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbspContacter </a></p> </strong>  </span>
            </div>


          </div>

             ";

            }


  ?>
         
         
        </div>  
      </div>
    </section>

    

  
<!---------------------------------------------------------------------------------------------------------------------------------------->
    <footer class="section footer-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">A propos</a></li>
              <li><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">PP</a></li>
            </ul>
          </div>
      
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
            <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
            <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> Esi ex INI <br> Alger Oued Smar</span></p>
            <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> (+213) 2546 656897 </span></p>
            <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> #####.com</span></p>
          </div>
          <div class="col-md-3 mb-5">
            <p>Connectez vous pour nous contacter :</p>
            <form action="#" class="footer-newsletter">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email...">
                <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5">
            
          <p class="col-md-6 text-right social">
            <a href="#"><span class="fa fa-tripadvisor"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-vimeo"></span></a>
          </p>
        </div>
      </div>
    </footer>
    
    <script src="On_My_Way_files/jquery-3.js"></script>
    <script src="On_My_Way_files/jquery-migrate-3.js"></script>
    <script src="On_My_Way_files/popper.js"></script>
    <script src="On_My_Way_files/bootstrap.js"></script>
    <script src="On_My_Way_files/owl.js"></script>
    <script src="On_My_Way_files/jquery_002.js"></script>
    <script src="On_My_Way_files/jquery_003.js"></script>
    
    
    <script src="On_My_Way_files/aos.js"></script>
    
    <script src="On_My_Way_files/bootstrap-datepicker.js"></script> 
    <script src="On_My_Way_files/jquery.js"></script> 

    <script src="On_My_Way_files/main.js"></script>
    <script type="On_My_Way_files/firebase.js"></script>
  
</body></html>