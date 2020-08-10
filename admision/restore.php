<?php 
session_start();
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=2){

	header("location:../page/acceder.php");
}else{
	include "smarty/libs/Smarty.class.php";
    $html      = new smarty;
	$admin=$_SESSION['admin'];
	$html->assign("admin",$admin);
	$directorio = 'C:\\xampp\\htdocs\\citas_medicas\\admision\\backup';
	$fichero = $_FILES['restaurar']['name'];
	$dir = $directorio."\\".$fichero;

	$db_user = 'root';
	$db_pass = "";
	$db_name ='citas_medicas';
	$db_host = 'localhost';

	if($fichero !=""){
		$dump = "c:\Users\Andres\mysql.exe -u $db_user --password=$db_pass  $db_name < $dir";

		system($dump, $error);
		$alerta ="<script>alertify.alert('Mensaje de alerta','La base de datos $db_name se ha restaurado con exito', function (e) {
            if (e) {
                window.location.href='restoreBD.php';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("restoreBD.html");
	}else{
		$alerta ="<script>alertify.alert('Mensaje de alerta','Selecciona un archivo para restaurar la base de datos', function (e) {
            if (e) {
                window.location.href='restoreBD.php';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("restoreBD.html");
	}
	
}
 ?>		