<?php
/* Smarty version 3.1.30, created on 2017-03-19 04:50:11
  from "C:\xampp\htdocs\citas_medicas\page\templates\tablas.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cdfff382ddc9_89272596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a77b294f45317794f7a9c561fd4bc0499077ea2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\citas_medicas\\page\\templates\\tablas.html',
      1 => 1489895408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cdfff382ddc9_89272596 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link href="../res/css/jquery.dataTables.min.css" rel="stylesheet" >
    <link href="../res/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../res/css/dataTables.responsive.css" rel="stylesheet">
    <link href="../res/css/sb-admin-2.css" rel="stylesheet">
    <link href="../res/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="principal.php">Sistema de Reservación</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="principal.php"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> Lista de solicitudes</a>
                        </li>
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Formulario</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Verificar horarios disponibles</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Verificar citas disponibles
                        </div>
                        <div class="panel-body">
                         <div class="row">
                            <form role="form" action="" method="post">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Seleccionar una fecha:</label>
                                        <input type="date" class="form-control" name="fecha">
                                    </div>
                                     <div class="form-group">
                                        <label>Seleccionar quirofano:</label>
                                        <select name="quirofano" class="form-control">
                                            <option value="Seleccionar" selected="selected">Seleccionar</option>
                                        </select>
                                    </div>
                                </div>
                                <label for="" class="control-label">Verificar horarios disponibles:</label>
                                <button type="submit" class="btn btn-default" name="verificar">Verificar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lista de horarios disponibles</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Quirofano</th>
                                        <th>Horario</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr> 
                                </tbody>
                            </table>
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
 src="../res/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../res/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../res/js/dataTables.responsive.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../res/js/sb-admin-2.js"><?php echo '</script'; ?>
>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <?php echo '<script'; ?>
>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    <?php echo '</script'; ?>
>

</body>
</html><?php }
}
