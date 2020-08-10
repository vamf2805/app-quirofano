<?php
session_start();
$usuario = $_SESSION['usuario'];
if($_SESSION['logueado'] != "SI" and $_SESSION['admin']!=2){

    header("location:../page/acceder.php");

} else {
    include("controller/conect.php");
    $mysqli=conectar();
        include "smarty/libs/Smarty.class.php";
        $admin=$_SESSION['admin'];
        $html           = new smarty;
        $alerta ="";
        $usuarios  = array();
        $html->assign("admin",$admin);
    if (empty($_POST)) {

        $id         = $_GET["id"];
        $rif        = $_GET["rif"];
        $cedula     = $_GET["cedula"];
        $usuario    = $_GET["usuario"];
        $privilegio = $_GET["privilegio"];

        $query          = ("SELECT rif, cedula, usuario, is_admin FROM usuarios WHERE id='$id'");
        $resultado      = $mysqli->query($query);
        if ($mysqli->affected_rows > 0) {
            $fila = $resultado->fetch_array();
            while ($fila = $resultado->fetch_array()) {
                //Mostrar los valores para la tabla, valor unico cedula del paciente
                $id         = $fila["id"];
                $rif        = $fila["rif"];
                $cedula     = $fila["cedula"];
                $usuario    = $fila["usuario"];
                $privilegio = $fila["privilegio"];
            }
            
            $html->assign("alerta", $alerta);
            $html->assign("id", $id);
            $html->assign("rif", $rif);
            $html->assign("cedula", $cedula);
            $html->assign("usuario", $usuario);
            $html->assign("privilegio", $privilegio);
            
            $html->display("update.html");
        } else {
        $alerta ="<script>alertify.alert('Mensaje de alerta','El usuario no existe', function (e) {
        if (e) {
             window.location.href='index.php;
            return true;
            }
        }).set({transition:'fade'}).set('closable', false).show();</script>";
        $html->assign("alerta", $alerta);
        $html->display("index.html");
        }
    } else {
        $id         = $_POST["id"];
        $rif        = $_POST["rif"];
        $cedula     = $_POST["cedula"];
        $usuario    = $_POST["usuario"];
        $privilegio = $_POST["privilegio"];

        mysqli_query($mysqli, "UPDATE `usuarios` SET `rif`='$rif',`cedula`='$cedula',`usuario`='$usuario', `is_admin`='$privilegio' WHERE `id`='$id'") or
        die("Problemas en el select:" . mysqli_error($mysqli));
        $alerta ="<script>alertify.alert('Mensaje de alerta','El usuario $usuario fue modificado con exito', function (e) {
        if (e) {
             window.location.href='updateU.php';
            return true;
            }
        }).set({transition:'fade'}).set('closable', false).show();</script>";
        $html->assign("alerta", $alerta);
        $html->display("index.html");
    }
}
