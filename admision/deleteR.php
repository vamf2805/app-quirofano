<?php 
session_start();
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=1 AND $_SESSION['admin']!=2){

    header("location:../page/acceder.php");
}else{
	include "smarty/libs/Smarty.class.php";
    $html      = new smarty;
    $admin=$_SESSION['admin'];
    $html->assign("admin",$admin);
    $alerta="";
    $cedula_p       = $_GET["cedula_p"];
    $paciente       = $_GET["paciente"];
    $intervencion   = $_GET["intervencion"];
    $observacion    = $_GET["observacion"];
    $fecha_horarios = $_GET["fecha_horarios"];
    $hora_inicial   = $_GET["hora_inicial"];
    $hora_final     = $_GET["hora_final"];
    $quirofano      = $_GET["quirofano"];
    $usuario        = $_GET['usuario'];
    $medico         = $_GET['medico'];
    $fecha = $_GET['fecha'];
    $fechaF = $_GET['fechaF'];
    include("controller/conect.php");
    $mysqli=conectar();
    
    if($fecha_horarios != "" and $quirofano!="Seleccionar"){
    	$query = ("SELECT * FROM `horarios` WHERE `fecha_horarios`='$fecha_horarios' AND `quirofano`='$quirofano'");
    	$mysqli->query($query);
    	if($mysqli->affected_rows > 0){

       
        mysqli_query($mysqli,"INSERT INTO respaldo (usuario,medico,paciente,cedula,fecha_intervencion,quirofano,hora_i,hora_f) VALUES ('$usuario','$medico','$paciente','$cedula_p','$fecha_horarios','$quirofano','$hora_inicial','$hora_final')") or
          die("Problemas en el select".mysqli_error($mysqli));
          ///////////////////////////////////////////////////////////////////////////
            mysqli_query($mysqli,"UPDATE `horarios` SET `estado`='disponible',`medico`='',`cedula_p`='',`paciente`='',`hora_inicial`='00:00:00',`hora_final`='00:00:00',`intervencion`='',`observacion`='' WHERE `hora_inicial`>= '$hora_inicial' and `hora_final`<= '$hora_final'");
    		$alerta ="<script>alertify.alert('Mensaje de alerta','Cita eliminada del paciente: $paciente dia:$fecha_horarios - $quirofano', function (e) {
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
                $alerta ="<script>alertify.alert('Mensaje de alerta','La cita del paciente: $paciente no existe'', function (e) {
            	if (e) {
                window.location.href='table.php?fecha=fecha=$fecha&fechaF=$fechaF';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("fecha", $fecha);
            $html->assign("fechaF", $fechaF);
            $html->assign("alerta", $alerta);
            $html->display("index.html");
    		}
    	}else {
    		$alerta ="<script>alertify.alert('Mensaje de alerta','Todos los campos son obligatorios', function (e) {
            	if (e) {
                window.location.href='table.php?fecha=fecha=$fecha&fechaF=$fechaF';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("fecha", $fecha);
            $html->assign("fechaF", $fechaF);
            $html->assign("alerta", $alerta);
            $html->display("index.html");
    	}

    }
 ?>