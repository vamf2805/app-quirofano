<?php
/* Smarty version 3.1.30, created on 2017-09-25 23:03:55
  from "C:\xampp\htdocs\citas_medicas\admision\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c96f3bd04ae2_36911444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ae9b57d69f969fa5cbaf8cfb315528105264652' => 
    array (
      0 => 'C:\\xampp\\htdocs\\citas_medicas\\admision\\templates\\index.html',
      1 => 1506373430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c96f3bd04ae2_36911444 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="../res/css/carousel.css">
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
                <a class="navbar-brand" href="index.php">Sistema de Reservación de quirófano</a>
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
                            <a href="#"><i class="fa fa-clock-o"></i> Horarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="createhours.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Crear horarios</a>
                                </li>
                                <li>
                                    <a href="deletehours.php"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i> Eliminar horarios</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Listas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="listHours.php" accesskey="t"><i class="fa fa-table fa-fw"></i> Lista de solicitudes</a>
                                </li>
                                <li>
                                    <a href="hourslist.php"><i class="glyphicon glyphicon-book"></i> Lista de horarios</a>
                                </li>
                                <li>
                                    <a href="listQuirofano.php"><i class="glyphicon glyphicon-list-alt"></i> Lista de horarios por quirófano</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Reservación de quirófano</a>
                        </li>
                       <li>
                        <a href="#"><i class="fa fa-newspaper-o"></i> Reportes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="reporte_diario.php"><i class="fa fa-newspaper-o"></i> Diario</a>
                                </li>
                                <li>
                                    <a href="reporte_f.php"><i class="fa fa-newspaper-o"></i> Rango de fechas</a>
                                </li>
<!--                                 <li>
                                    <a href="report.php"><i class="fa fa-newspaper-o"></i> Prueba</a>
                                </li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="graphics.php"><i class="fa fa-area-chart"></i> Gráficas</a>
                        </li>
                        <li>
                            <a href="../manual/manual de usuario.pdf" target="_blank" accesskey="i"><i class="fa fa-dashboard fa-fw"></i> Ayuda</a>
                        </li> 
                        <?php if ($_smarty_tpl->tpl_vars['admin']->value == 2) {?>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Mantenimiento<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="registerU.php"><i class="glyphicon glyphicon-user"></i> Crear usuario</a>
                                </li>
                                <li>
                                    <a href="updateU.php"><i class="glyphicon glyphicon-pencil"></i> Actualizar usuarios</a>
                                </li>
                                <li>
                                    <a href="restoreBD.php"><i class="fa fa-database"></i> Respaldar y restaurar BD</a>
                                </li>
                            </ul>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

                    <img src="../res/img/canabal.png" class="img-responsive" alt="">
                    <h1 class="page-header">Bienvenido al sistema de reservación - admisión</h1>
                    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
    <li data-target="#bs-carousel" data-slide-to="3"></li>
    <li data-target="#bs-carousel" data-slide-to="4"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>Horarios</h1>        
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>Listas</h1>        
        </hgroup>       
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>Reservación de quirófano</h1>        
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-4"></div>
      <div class="hero">        
        <hgroup>
            <h1>Reportes</h1>        
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-5"></div>
      <div class="hero">        
        <hgroup>
            <h1>Gráficas</h1>        
        </hgroup>
      </div>
    </div>
  </div> 
</div>
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
