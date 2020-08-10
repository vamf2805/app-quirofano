<?php
/* Smarty version 3.1.30, created on 2017-06-25 18:26:46
  from "C:\xampp\htdocs\citas_medicas\admision\templates\prueba.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594fe446668b76_04871011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c6d60344944b20a2085abc5f511aba5865cf217' => 
    array (
      0 => 'C:\\xampp\\htdocs\\citas_medicas\\admision\\templates\\prueba.html',
      1 => 1498408002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594fe446668b76_04871011 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Graficas</title>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"><?php echo '</script'; ?>
>
</head>
<body>
	<h1>GRAFICA <?php echo $_smarty_tpl->tpl_vars['r']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['m']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['n']->value;?>
</h1>
	<div id="myfirstchart" style="height: 250px;"></div>
	<?php echo '<script'; ?>
>
		Morris.Bar({
  element: 'myfirstchart',
  data: [
    { y: '0', a: <?php echo $_smarty_tpl->tpl_vars['r']->value;?>
,  b: <?php echo $_smarty_tpl->tpl_vars['m']->value;?>
, c:<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b', 'c'],
  labels: ['Quirofano A', 'Quirofano B']
});
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
