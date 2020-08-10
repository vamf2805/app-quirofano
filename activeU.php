<?php
session_start();
include("smarty/libs/Smarty.class.php");
$html= new smarty;
$usuario=$_POST["name"];
$cedula=$_POST["cedula"];
$rif=$_POST["rif"];
include("page/controller/conect.php");
$mysqli=conectar();
    if ($usuario!="" && $cedula!="") {
        $query= ("select cedula, usuario from `usuarios` where rif='$rif'");
            $resultado = $mysqli->query($query);
            if ($mysqli->affected_rows ==1) {
                mysqli_query($mysqli, "UPDATE `usuarios`set cedula='$cedula', usuario='$usuario' where rif='$rif'") or
                die("Problemas en el select:" . mysqli_error($mysqli));
                $alerta ="<script>alertify.alert('Mensaje de alerta','Cuenta activa', function (e) {
                 if (e) {
                window.location.href='acceder.php';
                return true;
                }
                }).set({transition:'fade'}).set('closable', false).show();</script>";
                $html->assign("alerta", $alerta);
                $html->display("login.html");
            } else {
                $alerta ="<script>alertify.alert('Mensaje de alerta','La cuenta no existe', function (e) {
                 if (e) {
                window.location.href='acceder.php';
                return true;
                }
                }).set({transition:'fade'}).set('closable', false).show();</script>";
                $html->assign("alerta", $alerta);
                $html->display("login.html");
            }

        } else {
           $alerta ="<script>alertify.alert('Mensaje de alerta','Cuenta activa', function (e) {
                 if (e) {
                window.location.href='activar.php';
                return true;
                }
                }).set({transition:'fade'}).set('closable', false).show();</script>";
                $html->assign("alerta", $alerta);
                $html->display("active.html");
        }
