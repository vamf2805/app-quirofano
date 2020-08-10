<?php
session_start();
if($_SESSION['logueado'] != "SI" and  $_SESSION['admin']!=2){

    header("location:../page/acceder.php");
}else{
include("smarty/libs/Smarty.class.php");
$html = new smarty;
$admin = $_SESSION['admin'];
$html->assign('privilegios', array('0','1','2',array('medico','admisión','administrador')));
$html->assign("admin",$admin);
$rif = $_POST['rif'];
$privilegio = $_POST['privilegio'];
include("controller/conect.php");
$mysqli=conectar();

    if ($rif != "") {
        $query= ("select rif from `usuarios` where rif='$rif'");
            $resultado = $mysqli->query($query);
            if ($mysqli->affected_rows == 0) {
                mysqli_query($mysqli, "INSERT INTO usuarios (rif,is_admin) VALUES ('$rif', '$privilegio')") or
                die("Problemas en el select:" . mysqli_error($mysqli));
                $alerta ="<script>alertify.alert('Mensaje de alerta','Usuario registrado, debe activar su cuenta', function (e) {
                 if (e) {
                window.location.href='registerU.php';
                return true;
                }
                }).set({transition:'fade'}).set('closable', false).show();</script>";
                $html->assign("alerta", $alerta);
                $html->display("registerU.html");
            } else {
                $alerta ="<script>alertify.alert('Mensaje de alerta','El usuario ya se encuentra registrado, activar su cuenta', function (e) {
                 if (e) {
                window.location.href='registerU.php';
                return true;
                }
                }).set({transition:'fade'}).set('closable', false).show();</script>";
                $html->assign("alerta", $alerta);
                $html->display("registerU.html");
            }

        } else {
           $alerta ="<script>alertify.alert('Mensaje de alerta','Todos los campos son obligatorios', function (e) {
                 if (e) {
                window.location.href='registerU.php';
                return true;
                }
                }).set({transition:'fade'}).set('closable', false).show();</script>";
                $html->assign("alerta", $alerta);
                $html->display("registerU.html");
        }
}
?>