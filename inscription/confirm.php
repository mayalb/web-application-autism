<?php
$id=$_GET['id'];
$confirmation=$_GET['token'];
include"../database.php";
$req="SELECT confirmation from compte where id=$id";
if($row=mysqli_fetch_assoc($req)){
	if($confirmation==$row['confirmation']){
		die('votre compte a été confirmé') ;

	}else{
		die("votre compte n'a pas été confirmé") ;

	}
}
?>