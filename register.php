<?php
session_start();
include("smarty/libs/Smarty.class.php");
$html=new smarty;
$alerta ="";
$html->assign("alerta", $alerta);
$html->display("register.html");
 ?>