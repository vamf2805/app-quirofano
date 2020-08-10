<?php 
session_start();
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=1 and $_SESSION['admin']!=2){

    header("location:../page/acceder.php");
}else{
	include "smarty/libs/Smarty.class.php";
    $html      = new smarty;
    $admin=$_SESSION['admin'];
    $html->assign("admin",$admin);
    $fecha     = $_POST['fecha'];
    $quirofano = $_POST['quirofano'];

    include("controller/conect.php");
    $mysqli=conectar();
    if($fecha != "" and $quirofano!="Seleccionar"){
    $query = ("SELECT fecha_horarios, quirofano FROM `horarios` WHERE `fecha_horarios`='$fecha' AND `quirofano`='$quirofano'");
    $mysqli->query($query);
    
    if($mysqli->affected_rows > 0){
        mysqli_query($mysqli,"DELETE FROM `horarios` WHERE `fecha_horarios`='$fecha' AND `quirofano`='$quirofano'")or
    die("Problemas en el select:".mysqli_error($mysqli));
    	$alerta ="<script>alertify.alert('Mensaje de alerta','Horario eliminado del dia $fecha - $quirofano', function (e) {
            	if (e) {
                window.location.href='deletehours.php';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("deletehours.html");
    }else{
            $alerta ="<script>alertify.alert('Mensaje de alerta','El horario no existe', function (e) {
            	if (e) {
                window.location.href='deletehours.php';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("deletehours.html");
    		}
    	}else {
    		$alerta ="<script>alertify.alert('Mensaje de alerta','Todos los campos son obligatorios', function (e) {
            	if (e) {
                window.location.href='deletehours.php';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("deletehours.html");
    	}
 
    }

 ?>