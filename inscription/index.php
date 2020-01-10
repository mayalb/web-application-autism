<?php
include("../database.php");
include("../function.php");
//include("../connecter2.php");
include"fonctionalite.php";
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

  <title>inscription</title>

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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../On_My_Way_files/ionicons.css">
    <link rel="stylesheet" href="../On_My_Way_files/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<body class="login-img3-body" style="background-image: url(../IMG/e.jpg)">

  <div class="container">
     <header class="site-header js-site-header">
       <div class="container-fluid">
        <div class="row align-items-center">
    <div class="col-6 col-lg-8">
   <span  style="margin-left: 1000px" class="col-6 col-lg-4 " data-aos="fade"><a href="../connexion/index.php">Connexion</a></span>
  </div>
  </div>
  </div>
</header>

    <form class="login-form" enctype="multipart/form-data" action="index.php"  method="POST">
      <div class="login-wrap">
        <p class="login-img">Inscription</p>
        
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" id="nom" name="nom" placeholder="nom et prénom" required=""  autofocus>
        </div>
        <div class="input-group ">
          <span class="">wilaya : &nbsp;&nbsp;&nbsp;&nbsp;</span>
         
          <select name="wilaya" id="wilaya" class="form-control" required="" >   
            <option selected="" value="Adrar">Adrar</option>
            <option selected="" value="Chlef">Chlef</option>
            <option selected="" value="Laghouat">Laghouat</option> 
            <option selected="" value="Oum El Bouaghi">Oum El Bouaghi </option>
            <option selected="" value="Batna">Batna</option>
            <option selected="" value="Béjaïa">Béjaïa</option>
            <option selected="" value="Biskra">Biskra</option>
            <option selected="" value="Béchar">Béchar</option>
            <option selected="" value="Blida">Blida</option>
            <option selected="" value="Bouira">Bouira</option>
            <option selected="" value="Tamanrasset">Tamanrasset</option>
            <option selected="" value="Tébessa">Tébessa</option>
            <option selected="" value="Tlemcen">Tlemcen</option>
            <option selected="" value="Tiaret">Tiaret</option>
            <option selected="" value="Tizi Ouzou">Tizi Ouzou</option> 
            <option selected="" value="Alger">Alger</option>
            <option selected="" value="Djelfa">Djelfa</option>
            <option selected="" value="Jijel">Jijel</option>
            <option selected="" value="Sétif">Sétif</option>
            <option selected="" value="Saïda">Saïda</option>
            <option selected="" value="Skikda">Skikda</option>
            <option selected="" value="Sidi Bel Abbès">Sidi Bel Abbès</option>
            <option selected="" value="Annaba">Annaba</option>
            <option selected="" value="Guelma">Guelma</option>
            <option selected="" value="Constantine">Constantine</option>
            <option selected="" value="Médéa">Médéa</option>
            <option selected="" value="Mostaganem">Mostaganem</option> 
            <option selected="" value="M'Sila">M'Sila</option>
            <option selected="" value="Mascara">Mascara</option>
            <option selected="" value="Ouargla">Ouargla</option>
            <option selected="" value="El Bayadh">El Bayadh</option>
            <option selected="" value="Illizi">Illizi</option>
            <option selected="" value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
            <option selected="" value="Boumerdès">Boumerdès</option>
            <option selected="" value="El Tarf">El Tarf</option>
            <option selected="" value="Tindouf">Tindouf</option>
             <option selected="" value="Tissemsilt">Tissemsilt</option>
            <option selected="" value="El Oued">El Oued</option> 
            <option selected="" value="Khenchela">Khenchela</option>
            <option selected="" value="Souk Ahras">Souk Ahras</option>
            <option selected="" value="Tipaza">Tipaza</option>
            <option  value="Mila">Mila</option>
            <option  value="Aïn Defla">Aïn Defla</option>
            <option  value="Naâma">Naâma</option>
            <option  value="Aïn Témouchent">Aïn Témouchent</option>
            <option value="Ghardaïa">Ghardaïa</option>
            <option  value="Relizane">Relizane</option>
            
          </select>
        </div>
         <div class="input-group">
          
          <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse" autofocus>
        </div>
        <div class="input-group">
          
          <input type="email" class="form-control" id="login" name="login" placeholder="email" autofocus>
        </div>
        <div class="input-group">
           <span class="input-group-addon"><i class="fa fa-phone"></i></span>
          <input type="text" class="form-control" id="numero" name="numero" placeholder="téléphone" autofocus>
        </div>

        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe">
        </div>
        <div class="row">
        <label class="col-xs-6">
                
                <input type="radio" id="tipe" name="tipe" value="1"  required="">medecin
            </label>
            <label class=" col-xs-6">
                
                <input type="radio"  id="tipe" name="tipe" value="0" required="">utilisateur simple
            </label>
          </div>
        
        <button class="btn btn-primary btn-lg btn-block" type="submit" style="font-weight: bold">S'inscrire</button>
       
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

 if (!empty($_POST))
        {
           $id=0;
           $erros= array();
          $nom=$_POST["nom"];
          $tipe=$_POST["tipe"];
          $wilaya = mysqli_real_escape_string($conn,htmlspecialchars($_POST['wilaya']));
          $login=$_POST["login"];
          $mdp=$_POST["mdp"];
          $numero=$_POST["numero"];
          $adresse=$_POST["adresse"] ;
         $res=mysqli_query($conn,'SELECT * from compte');
        while(($row=mysqli_fetch_assoc($res)) ){
          if($nom==$row['nom']){$erros['nom']='Ce nom est déja utilisé';}
           if($login==$row['login']){$erros['login']='Cet email est déja utilisé pour un autre compte';}
           $id=$row['id'];
        }

          if(empty($erros)){
            $id++;
            $password= password_hash($mdp,PASSWORD_BCRYPT) ;
            mysqli_query($conn,"INSERT INTO compte (nom,login,mdp,numero,adresse, wilaya,nature) VALUES ('$nom','$login','$password','$numero','$adresse','$wilaya','$tipe')");
            if($tipe==1){
               mysqli_query($conn,"INSERT INTO medcin (id) VALUES ('$id')");
            }
            $_SESSION['us']=$id;
           
          }
    
        }

        ?>
         <?php if(!empty($erros)): ?>
           <div class="alert alert-danger" >
            <strong><p>Vous avez mal remplis le formulaire</p></strong>
            <ul>
             <?php  foreach ($erros as $error ): ?>
              <li><?= $error ;?></li>
               <?php endforeach; ?>
            </ul>

          </div>
         <?php endif; ?>

