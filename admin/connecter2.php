<?php
session_start();
if (isset($_SESSION['us']))
{
	$num=$_SESSION['us'];
	$res=mysqli_query($conn,"SELECT * from compte where id='".trim($num)."' ");
$res=mysqli_fetch_assoc($res);

if($res['nature']==0)
{
	header('Location:../util/index.php');
}
else
{
	header('Location:../medcin/index.php');
}


}

  ?>