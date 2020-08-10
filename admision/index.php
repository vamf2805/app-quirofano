<?php
session_start();
if($_SESSION['logueado'] == "SI" and $_SESSION['admin']==1 or $_SESSION['admin']==2){
	$admin=$_SESSION['admin'];
	include("smarty/libs/Smarty.class.php");
	$html= new smarty;
	$alerta="";
	$html->assign("admin",$admin);
	$html->assign("alerta", $alerta);
	$html->display("index.html");
}else{
	header("location:../index.php");
}
 ?>