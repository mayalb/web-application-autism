<?php 

//include("../connecter2.php");
include("verification.php");
include("../header.php");

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">
    <link rel="shortcut icon" type="image/png" href="IMG/1_logo.png" >
    <link rel="stylesheet" href="../On_My_Way_files/bootstrap.css">
    <link rel="stylesheet" href="../On_My_Way_files/animate.css">
    <link rel="stylesheet" href="../On_My_Way_files/owl.css">
    <link rel="stylesheet" href="../On_My_Way_files/aos.css">
    <link rel="stylesheet" href="../On_My_Way_files/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../On_My_Way_files/jquery.css">
    <link rel="stylesheet" href="../On_My_Way_files/fancybox.css">
    
    <link rel="stylesheet" href="../On_My_Way_files/ionicons.css">
    <link rel="stylesheet" href="../On_My_Way_files/font-awesome.css">

    <!------------Style---------------->
    <link rel="stylesheet" href="../On_My_Way_files/style.css">
  <style type="text/css">
    
  </style>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body" style="background-image: url(../IMG/1.jpg)">

  <div class="container">

    <form class="login-form" action="" method="POST" >
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="E-mail" id="user" name="user" required="" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" id="pass" name="pass" required="" placeholder="Mot de passe">
        </div>
        
      
        <button class="btn btn-info btn-lg btn-block" type="submit">Connexion</button>
      </div>
    </form>
    
  </div>


</body>
<script src="../On_My_Way_files/jquery-3.js"></script>
    <script src="../On_My_Way_files/jquery-migrate-3.js"></script>
    <script src="../On_My_Way_files/popper.js"></script>
    <script src="../On_My_Way_files/bootstrap.js"></script>
    <script src="../On_My_Way_files/owl.js"></script>
    <script src="../On_My_Way_files/jquery_002.js"></script>
    <script src="../On_My_Way_files/jquery_003.js"></script>
    
    
    <script src="../On_My_Way_files/aos.js"></script>
    
    <script src="../On_My_Way_files/bootstrap-datepicker.js"></script> 
    <script src="../On_My_Way_files/jquery.js"></script> 

    <script src="../On_My_Way_files/main.js"></script>
    <script type="../On_My_Way_files/firebase.js"></script>
</html>
   <?php
                if(isset($_GET['err'])){
                    $err = $_GET['err'];
                    if($err==1)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>