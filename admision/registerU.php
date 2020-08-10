<?php
session_start();
if($_SESSION['logueado'] != "SI" AND $_SESSION['admin']!=2){

	header("location:../page/acceder.php");
	
}else{
	
	include("smarty/libs/Smarty.class.php");
	$admin=$_SESSION['admin'];
	$html= new smarty;
	$alerta ="";
	$html->assign('privilegios', array('0','1','2',array('medico','admisión','administrador')));
	$html->assign("alerta", $alerta);
	$html->assign("admin",$admin);
	$html->display("registerU.html");
}
 ?>