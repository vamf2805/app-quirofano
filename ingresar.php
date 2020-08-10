<?php
session_start();
include("smarty/libs/Smarty.class.php");
$html= new smarty;
include("page/controller/conect.php");
$mysqli=conectar();
$usuario=$_POST["user"];
$rif=$_POST["pass"];

if($usuario!="" && $rif!="")
{
	$query=("select * from usuarios where usuario='$usuario' and rif='$rif'");
	$resultado=$mysqli->query($query);
	if($mysqli->affected_rows==1){
		while($row = $resultado->fetch_array())
		{
			$admin=$row['is_admin'];
			$rif = $row['rif'];
		}
			if($admin==1 or $admin==2){
				$_SESSION['logueado'] = "SI";
				$_SESSION['usuario']=$_POST["user"];
				$_SESSION['admin']=$admin;
				header("location:admision/index.php");
			}	
	}else{
		$alerta ="<script>alertify.alert('Mensaje de alerta','El usuario no se encuetra activo / activar su cuenta', function (e) {
        if (e) {
        	 window.location.href='acceder.php';
            return true;
        	}
    	}).set({transition:'fade'}).set('closable', false).show();</script>";
		$html->assign("alerta", $alerta);
		$html->display("login.html");
	}
}else{
	 	$alerta ="<script>alertify.alert('Mensaje de alerta','Todos los campos son obligatorios', function (e) {
        if (e) {
        	 window.location.href='acceder.php';
            return true;
        	}
    	}).set({transition:'fade'}).set('closable', false).show();</script>";
		$html->assign("alerta", $alerta);
		$html->display("login.html");
}


 ?>