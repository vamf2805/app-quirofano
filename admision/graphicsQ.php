<?php
session_start();
$usuario = $_SESSION['usuario'];
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=1 and $_SESSION['admin']!=2){

    header("location:../page/acceder.php");

} else {

    include "smarty/libs/Smarty.class.php";
    $html      = new smarty;
    include("controller/conect.php");
    $admin=$_SESSION['admin'];
    $mysqli=conectar();
    $alerta ="";
    $fechaI = $_GET["fechaI"];
    $fechaF = $_GET["fechaF"];
    $html->assign("admin",$admin);
    $horarios  = array();

    if($fechaI > $fechaF){
        $alerta ="<script>alertify.alert('Mensaje de alerta','Ingrese una fecha valida', function (e) {
        if (e) {
             window.location.href='graphics.php';
            return true;
            }
        }).set({transition:'fade'}).set('closable', false).show();</script>";
        $html->assign("alerta", $alerta);
        $html->display("graphics.html");
    }else{
        if($fechaI != "" and $fechaF != ""){
            $query     = ("SELECT estado FROM horarios  WHERE `quirofano`='quirofano A' AND `estado`='ocupado' AND fecha_horarios >= '$fechaI' AND fecha_horarios <= '$fechaF' ");
            $query2    = ("SELECT estado FROM horarios  WHERE `quirofano`='quirofano B' AND `estado`='ocupado' AND fecha_horarios >= '$fechaI' AND fecha_horarios <= '$fechaF' ");
            $query3    = ("SELECT estado FROM horarios  WHERE `quirofano`='quirofano C' AND `estado`='ocupado' AND fecha_horarios >= '$fechaI' AND fecha_horarios <= '$fechaF' ");
            $query4    = ("SELECT estado FROM horarios  WHERE `quirofano`='quirofano D' AND `estado`='ocupado' AND fecha_horarios >= '$fechaI' AND fecha_horarios <= '$fechaF' ");

            $resultado = $mysqli->query($query);
            $resultado2 = $mysqli->query($query2);
            $resultado3 = $mysqli->query($query3);
            $resultado4 = $mysqli->query($query4);


            $a = $resultado->num_rows;
            $b = $resultado2->num_rows;
            $c = $resultado3->num_rows;
            $d = $resultado4->num_rows;

            $html->assign("fechaI", $fechaI);
            $html->assign("fechaF", $fechaF);
            $html->assign("a", $a);
            $html->assign("b", $b);
            $html->assign("c", $c);
            $html->assign("d", $d);
            $html->display("graphicsQ.html");
            }else{
                $alerta ="<script>alertify.alert('Mensaje de alerta','Todos los campos son obligatorios', function (e) {
                if (e) {
                window.location.href='graphics.php';
                return true;
                }
                }).set({transition:'fade'}).set('closable', false).show();</script>";
                $html->assign("alerta", $alerta);
                $html->display("graphics.html");
            }
        }
    }

?>