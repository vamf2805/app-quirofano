<?php
/* Smarty version 3.1.30, created on 2017-08-24 21:16:35
  from "C:\xampp\htdocs\citas_medicas\admision\templates\restoreBD.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599f26135d52a7_82066474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0809392f85e1137e62c0b3bf8287defa2b0492b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\citas_medicas\\admision\\templates\\restoreBD.html',
      1 => 1502746916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599f26135d52a7_82066474 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h2 class="page-header">Respaldo y restauración de la base de datos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Respaldo y restauración de la base de datos
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form role="form" method="post" action="restore.php" autocomplete="off" enctype="multipart/form-data">
                            <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Respaldar base de datos:</label>
                                        <a href="backup.php" class="btn btn-primary btn-block"><i class="fa fa-database"></i> Respaldar base de datos</a>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="control-label">Restaurar base de datos:</label>
                                        <input type="file" name="restaurar"><br>
                                        <button class="btn btn-success btn-block" type="submit">Restaurar base de datos</button>
                                    </div>
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
            $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+1M",dateFormat: 'yy-mm-dd' });
        } );
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}