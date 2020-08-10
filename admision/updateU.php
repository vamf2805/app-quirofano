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
    $query     = ("SELECT * FROM `usuarios`"); //CHEQUEAR CONSULTA
    $resultado = $mysqli->query($query);
    if ($mysqli->affected_rows > 0) {
        while ($fila = $resultado->fetch_array()) {
            //Mostrar los valores para la tabla, valor unico cedula del paciente
            $usuarios[$fila['id']]= array('id' => $fila['id'], 'rif' => $fila['rif'], 'cedula' => $fila['cedula'], 'usuario' => $fila['usuario'],'is_admin' => $fila['is_admin']);
        }

        $html->assign("usuarios", $usuarios);
        $html->display("updateU.html");
    } else {
        $alerta ="<script>alertify.alert('Mensaje de alerta','No existen usuarios registrados', function (e) {
        if (e) {
             window.location.href='updateU.php';
            return true;
            }
        }).set({transition:'fade'}).set('closable', false).show();</script>";
        $html->assign("alerta", $alerta);
        $html->display("updateU.html");
    }

}
