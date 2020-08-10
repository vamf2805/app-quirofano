<?php
include("smarty/libs/Smarty.class.php");
$html=new smarty;
$alerta ="";
$html->assign("alerta", $alerta);
$html->display("login.html");
 ?>
