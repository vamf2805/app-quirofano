<?php
session_start();
$usuario = $_SESSION['usuario'];
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=1 and $_SESSION['admin']!=2){

    header("location:../page/acceder.php");

} else {

    include "smarty/libs/Smarty.class.php";
    $html      = new smarty;
    include("controller/conect.php");
    $mysqli=conectar();
    $fecha     = $_POST["fecha"];
    $horarios  = array();
    $query     = ("select * from `horarios` where `fecha_horarios`='$fecha'");
    $resultado = $mysqli->query($query);
    if ($mysqli->affected_rows > 0) {
        while ($fila = $resultado->fetch_array()) {
            //Mostrar los valores para la tabla, valor unico cedula del paciente
            $horarios[$fila['id_horario']] = array("fecha_horarios" => $fila["fecha_horarios"], "quirofano" => $fila["quirofano"], "hora" => $fila["hora"], "estado" => $fila["estado"]);
        }
        $html->assign("horarios", $horarios);
        $html->display("listHour.html");
    } else {
        $alerta ="<script>alertify.alert('Mensaje de alerta','No existen horarios para la fecha: $fecha', function (e) {
        if (e) {
             window.location.href='listHours.php';
            return true;
            }
        }).set({transition:'fade'}).set('closable', false).show();</script>";
        $html->assign("alerta", $alerta);
        $html->display("hours.html");
    }

}
