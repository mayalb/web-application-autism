<?php
include("../../../database.php");
include("../../../connecter1.php");
echo "id est".$num;
echo "nom est".$_POST['nom'];
 if(isset($_POST['nom'])){
 	$nom=$_POST['nom'];
 	$sql ="UPDATE compte SET nom=$nom where id=$num";
     mysqli_query($conn,$sql);
  } 
 if(isset($_POST['statut'])){
 	$statut=mysqli_real_escape_string($conn,htmlspecialchars($_POST['statut']));
 	$sql ="UPDATE compte SET statut=$statut where id=$num";
     mysqli_query($conn,$sql);
 } 
 if(isset($_POST['login'])){
 	$login=$_POST['login'];
 	$sql ="UPDATE compte SET login=$login where id=$num";
     mysqli_query($conn,$sql);

 } 
  if(isset($_POST['numero'])){
  	$numero=$_POST['numero'];
  	$sql ="UPDATE compte SET numero=$numero where id=$num";
     mysqli_query($conn,$sql);

  } 
   if(isset($_POST['sex'])){
  	$sex=$_POST['sex'];
  	$sql ="UPDATE compte SET sex=$sex where id=$num";
     mysqli_query($conn,$sql);

  }

 
  //header("Location: index.php");


  
?>