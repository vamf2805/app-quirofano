<?php
session_start();
$usuario = $_SESSION['usuario'];
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=1 AND $_SESSION['admin']!=2){

    header("location:../page/acceder.php");

} else {

    include "smarty/libs/Smarty.class.php";
    $html      = new smarty;
    include("controller/conect.php");
    $mysqli=conectar();
    $admin=$_SESSION['admin'];
    $turno     = $_GET['turno'] ;
    $fecha     = $_GET["fecha"];
    $quirofano = $_GET["quirofano"];
    $horarios  = array();
    $html->assign("admin",$admin);
   
    if($turno == 'Mañana' and $quirofano !=""){
         $query = ("SELECT id_horario,hora,estado,fecha_horarios, quirofano FROM `horarios` WHERE `quirofano`='$quirofano' AND `fecha_horarios`='$fecha' AND `hora` >= '07:00:00' AND `hora` <='12:00:00'");
         $resultado = $mysqli->query($query);
         if ($mysqli->affected_rows > 0) {
        while ($fila = $resultado->fetch_array()) {
            //Mostrar los valores para la tabla, valor unico cedula del paciente
            $horarios[$fila['id_horario']] = array("fecha_horarios" => $fila["fecha_horarios"], "quirofano" => $fila["quirofano"], "hora" => $fila["hora"], "estado" => $fila["estado"]);
        }
        $html->assign("turno", $turno);
        $html->assign("horarios", $horarios);
        $html->display("searchQ.html");
    } else {
        $alerta ="<script>alertify.alert('Mensaje de alerta','No existen horarios para la fecha: $fecha', function (e) {
        if (e) {
             window.location.href='listQuirofano.php?fecha=$fecha&quirofano=$quirofano';
            return true;
            }
        }).set({transition:'fade'}).set('closable', false).show();</script>";
        $html->assign("turno", $turno);
        $html->assign("alerta", $alerta);
        $html->display("listQuirofano.html");
        }
    }

    if($turno == 'Tarde' and $quirofano !=""){
         $query     = ("SELECT id_horario,hora,estado,fecha_horarios, quirofano FROM `horarios` WHERE `quirofano`='$quirofano' AND `fecha_horarios`='$fecha' AND `hora` >= '13:00:00' AND `hora` <='18:00:00'");
         $resultado = $mysqli->query($query);
         if ($mysqli->affected_rows > 0) {
        while ($fila = $resultado->fetch_array()) {
            //Mostrar los valores para la tabla, valor unico cedula del paciente
            $horarios[$fila['id_horario']] = array("fecha_horarios" => $fila["fecha_horarios"], "quirofano" => $fila["quirofano"], "hora" => $fila["hora"], "estado" => $fila["estado"]);
        }
        $html->assign("turno", $turno);
        $html->assign("horarios", $horarios);
        $html->display("searchQ.html");
    } else {
        $alerta ="<script>alertify.alert('Mensaje de alerta','No existen horarios para la fecha: $fecha', function (e) {
        if (e) {
             window.location.href='listQuirofano.php?fecha=$fecha&quirofano=$quirofano';
            return true;
            }
        }).set({transition:'fade'}).set('closable', false).show();</script>";
        $html->assign("turno", $turno);
        $html->assign("alerta", $alerta);
        $html->display("listQuirofano.html");
        }
    }
  
}