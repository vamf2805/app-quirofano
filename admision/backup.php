<?php 
session_start();
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=2){

	header("location:../page/acceder.php");
}else{
	include "smarty/libs/Smarty.class.php";
    $html      = new smarty;
	$admin=$_SESSION['admin'];
	$html->assign("admin",$admin);
	$db_user = 'root';
	$db_pass = "";
	$db_name ='citas_medicas';
	$db_host = 'localhost';
	$fecha = date("Ymd-His"); 

	$nombre = $db_name.'_'.$fecha.'.sql'; 

	$directorio = 'C:\\xampp\\htdocs\\citas_medicas\\admision\\backup';

	$dir = $directorio."\\".$nombre;

	$dump = "c:\Users\Andres\mysqldump.exe -u $db_user --password=$db_pass --opt $db_name > $dir";

	system($dump, $error);
	$alerta ="<script>alertify.alert('Mensaje de alerta','La base de datos se ha respaldado con exito', function (e) {
            if (e) {
                window.location.href='restoreBD.php';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("restoreBD.html");
}
 ?>		