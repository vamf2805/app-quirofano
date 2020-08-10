<?php
/* Smarty version 3.1.30, created on 2017-05-19 20:43:10
  from "C:\xampp\htdocs\citas_medicas\page\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591f3cbe1c80d6_86714064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01727cb19b37c3e628be43042feb522b3e352473' => 
    array (
      0 => 'C:\\xampp\\htdocs\\citas_medicas\\page\\templates\\index.html',
      1 => 1495219387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591f3cbe1c80d6_86714064 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistema de Reservación</title>
    <link href="../res/css/bootstrap.min.css" rel="stylesheet">
    <link href="../res/css/metisMenu.min.css" rel="stylesheet">
    <link href="../res/css/sb-admin-2.css" rel="stylesheet">
    <link href="../res/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../res/css/alertify.min.css"/>
    <link rel="stylesheet" href="../res/css/themes/bootstrap.min.css"/>
    <?php echo '<script'; ?>
 src="../res/js/alertify.min.js"><?php echo '</script'; ?>
>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" id="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Sistema de Reservación</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['usuario'];?>
 <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php" accesskey="i"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="forms.php" accesskey="v"><i class="fa fa-edit fa-fw"></i> Reservación de quirófano</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Listas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="table.php" accesskey="t"><i class="fa fa-table fa-fw"></i> Lista de solicitudes</a>
                                </li>
                                <li>
                                    <a href="listHours.php"><i class="glyphicon glyphicon-time"></i> Lista de horarios</a>
                                </li>
                            </ul>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

                    <img src="../res/img/canabal.png" class="img-responsive" alt="">
                    <h1 class="page-header">Bienvenido al sistema de reservación</h1>

                </div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="../res/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../res/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../res/js/metisMenu.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../res/js/sb-admin-2.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
