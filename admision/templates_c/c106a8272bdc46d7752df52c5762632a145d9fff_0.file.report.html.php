<?php
/* Smarty version 3.1.30, created on 2017-08-01 17:02:52
  from "C:\xampp\htdocs\citas_medicas\admision\templates\report.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5980981c685675_97370182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c106a8272bdc46d7752df52c5762632a145d9fff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\citas_medicas\\admision\\templates\\report.html',
      1 => 1500668638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5980981c685675_97370182 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="../res/css/jquery-ui.css">
    <link rel="stylesheet" href="../res/css/jquery-ui.theme.css">
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
                                <li>
                                    <a href="report.php"><i class="fa fa-newspaper-o"></i> Prueba</a>
                                </li>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="graphics.php"><i class="fa fa-area-chart"></i> Graficas</a>
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
                    <h2 class="page-header">Generar reporte diario de las reservaciones de los quirófanos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Generar reporte
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form role="form" method="get" autocomplete="off" action="report_q.php">
                            <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                         <label for="" class="control-label">Seleccionar una fecha:</label>
                                        <input type="text" class="form-control" name="fecha" id="datepicker" placeholder="yyyy-mm-dd">
                                    </div>
                                    <label for="" class="control-label">Verificar reportes:</label>
                                    <button type="submit" class="btn btn-primary" name="verificar">Verificar</button>
                                </div>
                            </form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
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
    <?php echo '<script'; ?>
 src="../res/js/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $( function() {
            $( "#datepicker" ).datepicker({ minDate: 0, maxDate:"0D",dateFormat: 'yy-mm-dd' });
        } );
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
