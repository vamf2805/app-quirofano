<?php
session_start();
$usuario = $_SESSION['usuario'];
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=2){

    header("location:../page/acceder.php");

} else {

    include "smarty/libs/Smarty.class.php";
    $html      = new smarty;
    include("controller/conect.php");
    $admin=$_SESSION['admin'];
    $mysqli=conectar();
    $alerta ="";
    $html->assign("admin",$admin);
    $usuarios  = array();
    $id = $_GET["id"];
    $query     = ("SELECT id FROM `usuarios` WHERE id='$id'"); //CHEQUEAR CONSULTA
    $resultado = $mysqli->query($query);
    if ($mysqli->affected_rows == 1) {
            mysqli_query($mysqli,"DELETE FROM `usuarios` WHERE id='$id'") or
        die("Problemas en el select:".mysqli_error($mysqli));
        $alerta ="<script>alertify.alert('Mensaje de alerta','El usuario fue eliminado con exito', function (e) {
        if (e) {
             window.location.href='updateU.php';
            return true;
            }
        }).set({transition:'fade'}).set('closable', false).show();</script>";
        $html->assign("alerta", $alerta);
        $html->display("index.html");
        }
            else {
        $alerta ="<script>alertify.alert('Mensaje de alerta','No existen el usuario', function (e) {
        if (e) {
             window.location.href='updateU.php';
            return true;
            }
        }).set({transition:'fade'}).set('closable', false).show();</script>";
        $html->assign("alerta", $alerta);
        $html->display("index.html");
    }

}
