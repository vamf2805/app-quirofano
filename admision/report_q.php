<?php
session_start();
$usuario = $_SESSION['usuario'];
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=1 AND $_SESSION['admin']!=2){

    header("location:../page/acceder.php");

} else {

    include "smarty/libs/Smarty.class.php";
    $html      = new smarty;
    include("controller/conect.php");
    $admin=$_SESSION['admin'];
    $mysqli=conectar();
    $alerta ="";
    $fecha     = $_GET["fecha"];
    $html->assign("admin",$admin);
    $horarios  = array();
    $query     = ("SELECT * FROM `horarios` WHERE `fecha_horarios`='$fecha' AND `estado`='ocupado' ");
    $resultado = $mysqli->query($query);
    if ($mysqli->affected_rows > 0) {
        while ($fila = $resultado->fetch_array()) {
            //Mostrar los valores para la tabla, valor unico cedula del paciente
            $horarios[$fila["cedula_p"] . $fila['fecha_horarios'] . $fila['quirofano'] . $fila['hora_inicial']] = array("id_horario" => $fila["id_horario"], "cedula_p" => $fila["cedula_p"], "fecha_horarios" => $fila["fecha_horarios"], "quirofano" => $fila["quirofano"],"medico" => $fila["medico"], "paciente" => $fila["paciente"], "hora_inicial" => $fila["hora_inicial"], "hora_final" => $fila["hora_final"], "estado" => $fila["estado"], "intervencion" => $fila["intervencion"], "observacion" => $fila["observacion"]);
        }
        $html->assign("fecha", $fecha);
        $html->assign("horarios", $horarios);
        $html->display("report_q.html");
    } else {
        $alerta ="<script>alertify.alert('Mensaje de alerta','No existen reservaciones', function (e) {
        if (e) {
             window.location.href='report.php';
            return true;
            }
        }).set({transition:'fade'}).set('closable', false).show();</script>";
        $html->assign("alerta", $alerta);
        $html->display("report.html");
    }

}
