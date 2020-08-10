<?php
session_start();
include("smarty/libs/Smarty.class.php");
$html= new smarty;
include("page/controller/conect.php");
$mysqli=conectar();
$rif=$_POST["pass"];

if($rif!="")
{
	$query=("select rif from usuarios where rif='$rif'");
	$mysqli->query($query);
	if($mysqli->affected_rows==1){
		$alerta ="";
		$html->assign("alerta", $alerta);
		$html->assign("rif", $rif);
		$html->display("active.html");
	
	}else{
		$alerta ="<script>alertify.alert('Mensaje de alerta','El rif no existe', function (e) {
        if (e) {
        	 window.location.href='register.php';
            return true;
        	}
    	}).set({transition:'fade'}).set('closable', false).show();</script>";
		$html->assign("alerta", $alerta);
		$html->display("register.html");
	}
}else{
	$alerta ="<script>alertify.alert('Mensaje de alerta','Todos los campos son obligatorios', function (e) {
        if (e) {
        	 window.location.href='register.php';
            return true;
        	}
    	}).set({transition:'fade'}).set('closable', false).show();</script>";
		$html->assign("alerta", $alerta);
		$html->display("register.html");
}

 ?>