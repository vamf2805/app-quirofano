<?php
session_start();

if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=1 and $_SESSION['admin']!=2){

    header("location:../page/acceder.php");

} else {

    include "smarty/libs/Smarty.class.php";
    $html      = new smarty;
    $horarios  = array();
    include("controller/conect.php");
    $admin=$_SESSION['admin'];
    $html->assign("admin",$admin);
    $mysqli=conectar();
    $fecha     = $_GET['fecha'];
    $quirofano = $_GET['quirofano'];
    $turno     = $_GET['turno'];
    //var_dump($_GET);
    if ($turno == 'Mañana') {
        $query     = ("select id_horario,fecha_horarios,quirofano,hora,estado from `horarios` where `fecha_horarios`='$fecha' and `quirofano`='$quirofano' and `estado`='disponible' and `hora` >= '07:00:00' and `hora` <='12:00:00'");
        $resultado = $mysqli->query($query);

        if ($mysqli->affected_rows > 0) {
            while ($fila = $resultado->fetch_array()) {
                $horarios[$fila["id_horario"]] = array("id" => $fila["id_horario"], "hora" => $fila["hora"]);
               
            }
            $alerta ="";
            $html->assign("alerta", $alerta);
            $html->assign("turno",$turno);
            $html->assign("fecha", $fecha);
            $html->assign("quirofano", $quirofano);
            $html->assign("horarios", $horarios);
            $html->display("formsv.html");
        } else {
            $alerta ="<script>alertify.alert('Mensaje de alerta','No existen reservaciones disponibles para la fecha $fecha - $quirofano', function (e) {
            if (e) {
                window.location.href='forms.php';
                return true;
                }
            }).set({transition:'fade'}).set('closable', false).show();</script>";
            $html->assign("alerta", $alerta);
            $html->display("forms.html");
        }
    } 
        if ($turno == 'Tarde') {
        $query     = ("select id_horario,fecha_horarios,quirofano,hora,estado from `horarios` where `fecha_horarios`='$fecha' and `quirofano`='$quirofano' and `estado`='disponible' and `hora` >= '13:00:00' and `hora` <='18:00:00'");
        $resultado = $mysqli->query($query);

        if ($mysqli->affected_rows > 0) {
            while ($fila = $resultado->fetch_array()) {
                $horarios[$fila["id_horario"]] = array("id" => $fila["id_horario"], "hora" => $fila["hora"]);
               
            }
            $alerta ="";
            $html->assign("alerta", $alerta);
            $html->assign("turno",$turno);
            $html->assign("fecha", $fecha);
            $html->assign("quirofano", $quirofano);
            $html->assign("horarios", $horarios);
            $html->display("formsv.html");
        } else {
            $alerta ="<script>alertify.alert('Mensaje de alerta','No existen reservaciones disponibles para la fecha $fecha - $quirofano', function (e) {
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
