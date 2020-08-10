<?php
session_start();
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=1 and $_SESSION['admin']!=2){

    header("location:../page/acceder.php");

} else {
    include "smarty/libs/Smarty.class.php";
    $html      = new smarty;
    $admin=$_SESSION['admin'];
    $html->assign("admin",$admin);
    $medico       = $_POST['medico'];
    $rif          = $_POST['rif'];
    $cedula_p     = $_POST['cedula_p'];
    $paciente     = $_POST['paciente'];
    $hora_inicial = $_POST['hora_inicial'];
    $hora_final   = $_POST['hora_final'];
    $intervencion = $_POST['intervencion'];
    $observacion  = $_POST['observacion'];
    $fecha        = $_POST['fecha'];
    $quirofano    = $_POST['quirofano'];
    $datetime1    = new DateTime($hora_inicial);
    $datetime2    = new DateTime($hora_final);

    if ($datetime1 > $datetime2 or $datetime1 == $datetime2) {
            $_SESSION['fecha']=$_POST["fecha"];
            $_SESSION['quirofano']=$_POST["quirofano"];
            $alerta ="<script>alertify.alert('Mensaje de alerta','Ingrese una hora correcta', function (e) {
            if (e) {
                window.location.href='formsv.php?fecha=$fecha&quirofano=$quirofano';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("forms.html");
        
    } else {
        include("controller/conect.php");
        $mysqli=conectar();
        if ($medico != "" && $cedula_p != "" && $paciente != "" && $intervencion != "" && $observacion != "") {
            $query     = ("select fecha_horarios,quirofano from `horarios` where fecha_horarios='$fecha' and quirofano='$quirofano'");
            $resultado = $mysqli->query($query);
            if ($mysqli->affected_rows > 0) {
                mysqli_query($mysqli, "UPDATE `horarios`set `estado`='asignado',`medico`='$medico',`rif`='$rif',`cedula_p`='$cedula_p',`paciente`='$paciente', `hora_inicial`='$hora_inicial',`hora_final`='$hora_final',`intervencion`='$intervencion',`observacion`='$observacion' where `hora`>= '$hora_inicial' and `hora`<= '$hora_final' and `quirofano`='$quirofano' and `fecha_horarios`='$fecha'") or
                die("Problemas en el select:" . mysqli_error($mysqli));
                $alerta ="<script>alertify.alert('Mensaje de alerta','Cita agregada con exito', function (e) {
            if (e) {
                window.location.href='forms.php';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("forms.html");
            } else {
                $alerta ="<script>alertify.alert('Mensaje de alerta','El formulario ya existe', function (e) {
            if (e) {
                window.location.href='forms.php';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("forms.html");
            }

        } else {
            $alerta ="<script>alertify.alert('Mensaje de alerta','Todos los campos son obligatorios', function (e) {
            if (e) {
                window.location.href='forms.php';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("forms.html");
        }
    }

}
