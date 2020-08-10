<?php
session_start();
$usuario = $_SESSION['usuario'];
//$fecha = $_SESSION['fecha'];
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=1 and $_SESSION['admin']!=2){

    header("location:../page/acceder.php");

} else {
    include("controller/conect.php");
    $mysqli=conectar();
        include "smarty/libs/Smarty.class.php";
        $admin=$_SESSION['admin'];
        $html           = new smarty;
        $alerta ="";
        $html->assign("admin",$admin);
    if (empty($_POST)) {

        $id_horario     = $_GET["id_horario"];
        $cedula_p       = $_GET["cedula_p"];
        $paciente       = $_GET["paciente"];
        $intervencion   = $_GET["intervencion"];
        $observacion    = $_GET["observacion"];
        $fecha_horarios = $_GET["fecha_horarios"];
        $hora_inicial   = $_GET["hora_inicial"];
        $hora_final     = $_GET["hora_final"];
        $quirofano      = $_GET["quirofano"];
        $fecha          = $_GET["fecha"];
        $fechaF         = $_GET['fechaF'];
        $query          = ("select cedula_p, paciente, intervencion,observacion from horarios where id_horario='$id_horario'");
        $resultado      = $mysqli->query($query);
        if ($mysqli->affected_rows > 0) {
            $fila = $resultado->fetch_array();
            while ($fila = $resultado->fetch_array()) {
                //Mostrar los valores para la tabla, valor unico cedula del paciente
                $paciente       = $fila["paciente"];
                $cedula_p       = $fila["cedula_p"];
                $intervencion   = $fila["intervencion"];
                $observacion    = $fila["observacion"];
                $fecha_horarios = $fila["fecha_horarios"];
                $hora_final     = $fila["hora_final"];
                $hora_inicial   = $fila["hora_inicial"];
                $quirofano      = $fila["quirofano"];
            }
            
            $html->assign("alerta", $alerta);
            $html->assign("quirofano", $quirofano);
            $html->assign("hora_inicial", $hora_inicial);
            $html->assign("hora_final", $hora_final);
            $html->assign("fecha_horarios", $fecha_horarios);
            $html->assign("cedula_p", $cedula_p);
            $html->assign("paciente", $paciente);
            $html->assign("intervencion", $intervencion);
            $html->assign("observacion", $observacion);
            $html->assign("fecha",$fecha);
            $html->assign("fechaF",$fechaF);
            $html->display("etable.html");
        } else {
        echo "<script>alert('La cedula no existe');
                window.location.href='table.php';</script>";
        }
    } else {
        $fecha_horarios = $_POST["fecha_horarios"];
        $hora_inicial   = $_POST["hora_inicial"];
        $hora_final     = $_POST["hora_final"];
        $quirofano      = $_POST["quirofano"];
        $cedula_p       = $_POST["cedula_p"];
        $paciente       = $_POST["paciente"];
        $paciente       = $_POST["paciente"];
        $intervencion   = $_POST["intervencion"];
        $observacion    = $_POST["observacion"];
        $fecha          = $_POST["fecha"];
        $fechaF         = $_POST["fechaF"];
        mysqli_query($mysqli, "UPDATE `horarios` SET `paciente`='$paciente',`intervencion`='$intervencion',`observacion`='$observacion',`cedula_p`='$cedula_p' WHERE `quirofano`='$quirofano' AND `fecha_horarios`='$fecha_horarios' AND `hora_inicial`>='$hora_inicial' AND `hora_final`<='$hora_final'") or
        die("Problemas en el select:" . mysqli_error($mysqli));
        $alerta ="<script>alertify.alert('Mensaje de alerta','Paciente modificado con exito', function (e) {
        if (e) {
             window.location.href='table.php?fecha=$fecha&fechaF=$fechaF';
            return true;
            }
        }).set({transition:'fade'}).set('closable', false).show();</script>";
        $html->assign("alerta", $alerta);
        $html->display("index.html");
    }
}
