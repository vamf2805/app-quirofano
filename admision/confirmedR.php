<?php 
session_start();
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=1 and $_SESSION['admin']!=2){

    header("location:../page/acceder.php");
}else{
	include "smarty/libs/Smarty.class.php";
    $html      = new smarty;
    $admin=$_SESSION['admin'];
    $html->assign("admin",$admin);
    $alerta="";
    $cedula_p       = $_GET["cedula_p"];
    $paciente       = $_GET["paciente"];
    $fecha_horarios = $_GET["fecha_horarios"];
    $hora_inicial   = $_GET["hora_inicial"];
    $hora_final     = $_GET["hora_final"];
    $quirofano      = $_GET["quirofano"];
    $fecha = $_GET['fecha'];
    $fechaF = $_GET['fechaF'];
    include("controller/conect.php");
    $mysqli=conectar();
    
    if($fecha_horarios != "" and $quirofano!="Seleccionar"){
    	$query = ("SELECT * FROM `horarios` WHERE `fecha_horarios`='$fecha_horarios' AND `quirofano`='$quirofano' AND `estado`='asignado' OR estado='ocupado' ");
    	$mysqli->query($query);
    	if($mysqli->affected_rows > 0){
            mysqli_query($mysqli,"UPDATE horarios SET `estado`='ocupado' WHERE `hora_inicial`>= '$hora_inicial' and `hora_final`<= '$hora_final' and cedula_p ='$cedula_p' and fecha_horarios='$fecha_horarios'");
    		$alerta ="<script>alertify.alert('Mensaje de alerta','Cita confirmada del paciente: $paciente dia:$fecha_horarios - $quirofano', function (e) {
            	if (e) {
                window.location.href='table.php?fecha=$fecha&fechaF=$fechaF';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("fecha", $fecha);
            $html->assign("fechaF", $fechaF);
            $html->assign("alerta", $alerta);
            $html->display("index.html");
    		}else{
                $alerta ="<script>alertify.alert('Mensaje de alerta','La cita del paciente: $paciente ya esta confirmada para el dia:$fecha_horarios - $quirofano'', function (e) {
            	if (e) {
                window.location.href='table.php?fecha=$fecha_horarios';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("index.html");
    		}
    	}else {
    		$alerta ="<script>alertify.alert('Mensaje de alerta','Todos los campos son obligatorios', function (e) {
            	if (e) {
                window.location.href='table.php?fecha=$fecha';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("index.html");
    	}

    }
 ?>