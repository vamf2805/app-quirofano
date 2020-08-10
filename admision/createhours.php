<?php
session_start();
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=1 and $_SESSION['admin']!=2){

	header("location:../page/acceder.php");
	
}else{
	
	include("smarty/libs/Smarty.class.php");
	$admin=$_SESSION['admin'];
	$html= new smarty;
	$alerta ="";
	$html->assign('horas', array('7','8','9','10','11','12','13','14','15','16','17','18',array('07:00:00','08:00:00','09:00:00','10:00:00','11:00:00','12:00:00','13:00:00','14:00:00','15:00:00','16:00:00','17:00:00','18:00:00')));
	$html->assign("alerta", $alerta);
	$html->assign("admin",$admin);
	$html->display("createHours.html");
}
 ?>