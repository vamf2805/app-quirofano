<?php
session_start();
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=1 and $_SESSION['admin']!=2){

	header("location:../page/acceder.php");
	
}else{
	
	include("smarty/libs/Smarty.class.php");
	$admin=$_SESSION['admin'];
	$html= new smarty;
	$alerta ="";
	$html->assign("alerta", $alerta);
	$html->assign("admin",$admin);
	$html->display("deletehours.html");
}
 ?>