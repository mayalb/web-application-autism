
<?php

include("../../../database.php");
include("../../../connecter1.php");
		
	$requete1= "SELECT * FROM compte where 
     id =$num "; 
     $reponse1=mysqli_query($conn,$requete1); 
   if($row = mysqli_fetch_assoc($reponse1)){
   	$name=$row['nom'];
   	$mail=$row['login'];
   	$motdepass=$row['mdp'];
   	$adr=$row['adresse'];
   	$stat=$row['statut'];
   	$Mme="";
   	$Mlle="";
   	$Ms="";
   	if($stat=="Ms"){
   		$Ms='selected=""';
   	}
   	if ($stat=="Mlle") {
   				$Mlle='selected=""';
   	}
   	if ($stat=="Mme") {
   					$Mme='selected=""';
  }
   	$Number=$row['numero'];
   	$wilay=$row['wilaya'];
   	$genre=$row['sex'];		
   	if($genre==0){
   		$check1="Homme";
   		$chekhomme='checked=""';
   		$chekfemme="";
   		
   	}else{
   
   		$check1="Femme";
   	    $chekhomme="";
   		$chekfemme='checked=""';

   	}											 	
    }
    $requete2= "SELECT * FROM medcin where 
     id =$num "; 
     $reponse2=mysqli_query($conn,$requete2); 
   if($row = mysqli_fetch_assoc($reponse2)){
   	 $desc=$row["Description"];
   	$spec=$row["specialite"];
   	$fb=$row["Facebook"];
   	$Link=$row["LinkedIn"];
   	$twit=$row["Twitter"];
   	$sit=$row["Siteweb"];
   	$heur =$row["Heures"];
   	$pst=$row["postes"];
   	$expr=$row["experience"];

   }
   
  ?>
<!DOCTYPE html>
<html>
<head>
<title>Autisme_Profil</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tabbed Profile Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


 <style>


 	.update button{
    background: #1bcba5;
    font-size: 16px;
    color: #fff;
    text-decoration: none;
    padding: 8px 0px;
    border-bottom: 3px solid #20987E;
    font-weight: 600;
	display:block;
	text-align:center;
}
 	.hd {
 		color: #ffffff;
 	}
      .dropdown {
        position: relative;
        display: inline-block;

      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #ffffff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }
      .alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;  
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable {
  padding-right: 35px;
}
.alert-dismissable .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  background-color: #dff8e3;
  border-color: #caf4ca;
  color: #4cd964;
}
.alert-success hr {
  border-top-color: #b5efb5;
}
.alert-success .alert-link {
  color: #2ac845;
}
.alert-info {
  background-color: #cceaf6;
  border-color: #aee8f1;
  color: #34aadc;
}
.alert-info hr {
  border-top-color: #98e2ed;
}
.alert-info .alert-link {
  color: #218ebd;
}
.alert-warning {
  background-color: #fff0b3;
  border-color: #ffdda3;
  color: #ffcc00;
}
.alert-warning hr {
  border-top-color: #ffd48a;
}
.alert-warning .alert-link {
  color: #cca300;
}
.alert-danger {
  background-color: #ffe0e6;
  border-color: #ffd0e1;
  color: #ff2d55;
}
.alert-danger hr {
  border-top-color: #ffb7d1;
}
.alert-danger .alert-link {
  color: #f9002f;
}
  
</style>
</head>
<body style="background-color:#48cbdd;" >
	<div class="main">
		<div class="hd">
			<p >Mon Profile </p>
		<p ><a href="../../index.php">Accueil</a></p>
		   <li  class="dropdown"><a href="#" >Fonctionnalités</a>
                      <div class="dropdown-content" >
                      <p><a href="medecins.html">Afficher Les Médecins</a></p>
                      <p><a href="centre.html">Afficher Les Centres</a> </p>
                      <p><a href="Documentation.html">Documentation</a></p>
                      <p><a href="type.html">Type d'autisme</a></p>
                      <p><a href="deconnect.php">Deconnexion</a></p>
                      </div>
                </li>  
	</div>
			
           
  
		
		<div class="content">
			<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
						<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true,   // 100% fit in a container
									closed: 'accordion', // Start closed if in accordion view
									activate: function(event) { // Callback function if tab is switched
										var $tab = $(this);
										var $info = $('#tabInfo');
										var $name = $('span', $info);
										$name.text($tab.text());
										$info.show();
									}
								});

								$('#verticalTab').easyResponsiveTabs({
									type: 'vertical',
									width: 'auto',
									fit: true
								});
							});
						</script>
						<div class="portfolio-grid">
							<div class="port-left">
								<ul class="resp-tabs-list">
									  <img class="lady" src="images/pic1.jpg" alt="" />
									  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span> Details Basiques</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Plus</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Réseaux Sociaux</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Travail</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span>Paramètres</span></li>
									  <div class="clear"></div>
								</ul>		
							</div>
							<div class="port-right">
									<div class="resp-tabs-container">
                                        <form action="index.php" enctype="multipart/form-data" method="POST">
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
											<div class="profile-content">
												<h3>User Name</h3>	
												<div class="input-group">
													<span class="input-group-btn">
														<select class="btn btn-default button-one" name="statut" id="statut" >
															 <optgroup label="<?php echo "".$stat."" ?>">
															<option <?php echo $Ms ?>value="Ms">Ms.</option>
															<option <?php echo $Mme ?>  value="Mme">Mme.</option>
															<option<?php echo $Mlle ?> value="Mlle">Mlle.</option>
														</optgroup>
														</select>
													</span>	

																<input type="text" class="form-control"  id="nom" name="nom" value="<?php echo "".$name."" ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = $name;}">	
												</div>
												<h3>Email</h3>
												<div class="email-group">
														<div class="email-icon"><span></span></div>
														<div class="email-form">
														
																<input type="text" class="fb-ico"  id="login" name="login" value="<?php echo "".$mail."" ?>"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = $mail;}">	
															
														</div>
														<div class="clear"></div>
												</div>
												<h3>Phone Number</h3>	
												<div class="phone-group">			
													<div class="cell-icon"><span></span></div>
														<div class="cell-form">
														
																<input type="text"  name="numero" id="numero" value="<?php echo "".$Number."" ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value =$number;}">	
														
														</div>
														<div class="clear"></div>					 
												</div>
												<h3>Gender <?php echo " :". $check1 ?></h3>	
													<div class="radio-btns">
														<div class="swit">								
															<div class="check_box"> <div class="radio"> <label><input type="radio" name="sex" id="sex" value="0" <?php echo $chekhomme ?>><i></i><img src="images/man.png" alt=" "/></label> </div></div>
															<div class="check_box"> <div class="radio2"> <label><input type="radio" name="sex" id="sex" value="1"  <?php echo $chekfemme ?>><i></i><img src="images/woman.png" alt=" "/></label> </div></div>							    
														</div>
														<div class="clear"></div>			
													</div>
													
												
											</div>
											<div class="update">
										 
												<button type="submit" name="submit1" id="submit1" style="width: 75px; height: 38px ">Update</button>
											</div>
											<div class="clear"></div>
										</div>
                                        </form>
                                             <form action="index.php" enctype="multipart/form-data" method="POST">
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
											<div class="profile-content">
												<h3>Description</h3>
												<div class="email-group">
														<div class="LinkedIn-icon"><span></span></div>
														<div class="cell-form">
														
																<input type="text" class="fb-ico" value="<?php echo "".$desc."" ?>"  id="Description" name="Description" >	
															
														</div>
														<div class="clear"></div>
												</div>
												<h3>Heures de Travail</h3>	
												<div class="phone-group">			
													<div class="facek-icon"><span></span></div>
														<div class="cell-form">
														
																<input type="text" value="<?php echo "".$heur."" ?>" name="Heures" id="Heures" >	
														
														</div>
														<div class="clear"></div>					 
												</div>

											</div>

											<div class="update">
										 
												<button type="submit" name="submit5" id="submit5" style="width: 75px; height: 38px ">Update</button>
											</div>
											<div class="clear"></div>										
										</div>
									</form>
										  <form action="index.php" enctype="multipart/form-data" method="POST">
										<div class="tab-1 resp-tab-content"  aria-labelledby="tab_item-2">
											
												<div class="profile-content">
												<h3>LinkedIn</h3>
												<div class="email-group">
														<div class="LinkedIn-icon"><span></span></div>
														<div class="cell-form">
														
																<input type="text" class="fb-ico" value="<?php echo "".$Link."" ?>"  id="LinkedIn" name="LinkedIn" >	
															
														</div>
														<div class="clear"></div>
												</div>
												<h3>Facebook</h3>	
												<div class="phone-group">			
													<div class="facek-icon"><span></span></div>
														<div class="cell-form">
														
																<input type="text"   value="<?php echo "".$fb."" ?>" name="Facebook" id="Facebook" >	
														
														</div>
														<div class="clear"></div>					 
												</div>
												<h3>Twitter</h3>	
												<div class="phone-group">			
													<div class="facek-icon"><span></span></div>
														<div class="cell-form">
														
																<input type="text" value="<?php echo "".$twit."" ?>"  name="Twitter" id="Twitter" >	
														
														</div>
														<div class="clear"></div>					 
												</div>
											
												<h3>Site Web</h3>	
												<div class="phone-group">			
													<div class="facek-icon"><span></span></div>
														<div class="cell-form">
														
																<input type="text" value="<?php echo "".$sit."" ?>"  name="Siteweb" id="Siteweb" >	
														
														</div>
														<div class="clear"></div>					 
												</div>

											</div>

											<div class="update">
										 
												<button type="submit" name="submit3" id="submit3" style="width: 75px; height: 38px ">Update</button>
											</div>
											<div class="clear"></div>
										</div>
									</form>


										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
											<div class="work-play">
												<h3>Work and Organization</h3>
												<form action="index.php" enctype="multipart/form-data" method="POST">
												<h4>Spécialité</h4>
												
													<input type="text" value="<?php echo "".$spec."" ?>" name="specialite" id="specialite">	
											
												
												<h4>Lieux de travail actuel</h4>
											
													<input type="text" value="<?php echo "".$adr."" ?>"name="adresse" id="adresse">	
											
												<h4>A travaillé dans </h4>
											
													<input type="text" value="<?php echo "".$pst."" ?>" name="postes" id="postes">	
										
												<h4>Expériences </h4>
										
													<input type="text" value="<?php echo "".$expr."" ?>" name="experience" id="experience">	
												
											</div>	
											<div class="update">
												<button type="submit" name="submit2" id="submit2" style="width: 75px; height: 38px ">Update</button>
											</div>
											</form>
											<div class="clear"></div>
										</div>
										<form action="index.php" enctype="multipart/form-data" method="POST">
										<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
											<div class="work-play">
												<h3>Changer Mot de Passe</h3>
												
												<h4> Votre Email </h4>
												
													<input type="text" name="login" id="login">	
										
												<h4>Votre mot de passe</h4>
											
													<input type="password" name="mdp" id="mdp"  >	
										
												<h4>Nouveau mot de passe</h4>
										
													<input type="password" name="newmdp" id="newmdp" >	
												
											</div>	
											<div class="update">
											<button type="submit" name="submit4" id="submit4" style="width: 75px; height: 38px ">Update</button>
											</div>
											<div class="clear"></div>
										</div>									
									</div>	
									</form>
								
							</div>	
							<div class="clear"></div>
						</div>
						
			</div>
		</div>

		
</body>
</html>
<?php
//*************************** Modifier les details basic**********************************//////////
if(isset($_POST['submit1'])){
	

 if($_POST['nom']!=$name){
 	$nom=$_POST['nom'];
 	$sql ="UPDATE compte SET nom='$nom' where id=$num";
     mysqli_query($conn,$sql);
  } 
 if($_POST['statut']!=$stat){
 	$statut=mysqli_real_escape_string($conn,htmlspecialchars($_POST['statut']));
 	$sql ="UPDATE compte SET statut='$statut' where id=$num";
     mysqli_query($conn,$sql);
 } 
 if($_POST['login']!=$mail){
 	$login=$_POST['login'];
 	$sql ="UPDATE compte SET login='$login' where id=$num";
     mysqli_query($conn,$sql);

 } 
  if($_POST['numero']!=$Number){
  	$numero=$_POST['numero'];
  	$sql ="UPDATE compte SET numero='$numero' where id=$num";
     mysqli_query($conn,$sql);

  } 
   if($_POST['sex']!=$genre){
  	$sex=$_POST['sex'];
  	$sql ="UPDATE compte SET sex='$sex' where id=$num";
     mysqli_query($conn,$sql);

  }
}
////////////////////*********************** work*********************************
if(isset($_POST['submit2'])){
	

 if($_POST['specialite']!=$spec){
 	$specialite=$_POST['specialite'];
 	$sql ="UPDATE medcin SET specialite='$specialite' where id=$num";
     mysqli_query($conn,$sql);
  } 
  if($_POST['adresse']!=$adr){
 	$adresse=$_POST['adresse'];
 	$sql ="UPDATE compte SET adresse='$adresse' where id=$num";
     mysqli_query($conn,$sql);
  } 
  if($_POST['postes']!=$pst){
 	$postes=$_POST['postes'];
 	$sql ="UPDATE medcin SET postes='$postes' where id=$num";
     mysqli_query($conn,$sql);
  } 
  if($_POST['experience']!=$expr){
 	$experience=$_POST['experience'];
 	$sql ="UPDATE medcin SET experience='$experience' where id=$num";
     mysqli_query($conn,$sql);
  } 
}
//************** réseaux sociaux *****************************
if(isset($_POST['submit3'])){
	

 if($_POST['LinkedIn']!=$Link){
 	$LinkedIn=$_POST['LinkedIn'];
 	$sql ="UPDATE medcin SET LinkedIn='$LinkedIn' where id=$num";
     mysqli_query($conn,$sql);
  } 
  if($_POST['Facebook']!=$fb){
 	$Facebook=$_POST['Facebook'];
 	$sql ="UPDATE medcin SET Facebook='$Facebook' where id=$num";
     mysqli_query($conn,$sql);
  } 
  if($_POST['Twitter']!=$twit){
 	$Twitter=$_POST['Twitter'];
 	$sql ="UPDATE medcin SET Twitter='$Twitter' where id=$num";
     mysqli_query($conn,$sql);
  } 
  if($_POST['Siteweb']!=$sit){
 	$Siteweb=$_POST['Siteweb'];
 	$sql ="UPDATE medcin SET Siteweb='$Siteweb' where id=$num";
     mysqli_query($conn,$sql);
  } 
}
////**********Setting***********************************
if(isset($_POST['submit4'])){
	///--------------Traiter les différebts erreurs ----------------------
  $erros= array();
 
  	$login=$_POST['login'];
 
  	$mdp=$_POST['mdp'];
  	$newmdp=$_POST['newmdp'] ;
 if(($_POST['login']="")||($_POST['mdp']="")||($_POST['newmdp']="")){
 	$erros['remplir']='Veuillez Remplir tout les Champs';
  } 
  else{
  
  	$requete1= "SELECT * FROM compte where 
              id =$num ";  
    $reponse1=mysqli_query($conn,$requete1); 
    if($row = mysqli_fetch_assoc($reponse1)){

    	if($row['login']!=$login){$erros['login']='Email incorrect';} 
    	if(!password_verify ($mdp,$row['mdp'])){
    		$erros['mdp']='Mot de Passe incorrect';
    	} 

    }

  }
  //-----------------------------------------------------------------//
  if(empty($erros)){
  	 $password=password_hash($newmdp,PASSWORD_BCRYPT) ;
  	 $sql ="UPDATE compte SET mdp='$password' where id=$num";
     mysqli_query($conn,$sql);

  }
  }
  ///-------------------------------Plus de details-------------------|||||||||||||||||||||||||||||||-
  if(isset($_POST['submit5'])){
	

 if($_POST['Description']!=$desc){
 	$Description=$_POST['Description'];
 	$sql ="UPDATE medcin SET Description='$Description' where id=$num";
     mysqli_query($conn,$sql);
  } 
  if($_POST['Heures']!=$heur){
 	$Heures=$_POST['Heures'];
 	$sql ="UPDATE medcin SET Heures='$Heures' where id=$num";
     mysqli_query($conn,$sql);
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

  
