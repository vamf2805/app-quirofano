<?php
/* Smarty version 3.1.30, created on 2017-05-19 18:30:04
  from "C:\xampp\htdocs\citas_medicas\page\acceder.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591f1d8c2a3b30_79284684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9e047824e455c28881b9d0bde02aa488ca5f384' => 
    array (
      0 => 'C:\\xampp\\htdocs\\citas_medicas\\page\\acceder.php',
      1 => 1495207040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591f1d8c2a3b30_79284684 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>include("smarty/libs/Smarty.class.php");
$html=new smarty;
$alerta ="";
$html->assign("alerta", $alerta);
$html->display("login.html");
 <?php echo '?>';
}
}
