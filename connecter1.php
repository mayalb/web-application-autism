<?php 
session_start();
if (isset($_SESSION['us']))
$num=$_SESSION['us'];
else
{
	
header('Location: ../connexion');

	
}

$res=mysqli_query($conn,"SELECT * from compte where id='".trim($num)."' ");
$res=mysqli_fetch_assoc($res);

 ?>