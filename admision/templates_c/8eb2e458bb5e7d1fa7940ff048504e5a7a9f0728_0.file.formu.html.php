<?php
/* Smarty version 3.1.30, created on 2017-03-19 04:48:49
  from "C:\xampp\htdocs\citas_medicas\page\templates\formu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cdffa13f1ba2_89129328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8eb2e458bb5e7d1fa7940ff048504e5a7a9f0728' => 
    array (
      0 => 'C:\\xampp\\htdocs\\citas_medicas\\page\\templates\\formu.html',
      1 => 1489895325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cdffa13f1ba2_89129328 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="page-header">Registro de cita</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                <div class="panel-body">
                <div class="row">
                <form role="form" method="post">
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
                        <label for="" class="control-label">Verificar horarios disponibles:</label>
                        <button type="submit" class="btn btn-default" name="verificar">Verificar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="" class="control-label">Medico:</label>
                            <input type="text" class="form-control" name="doctor">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Paciente:</label>
                            <input type="text" class="form-control" name="paciente">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Anestesiologo:</label>
                            <input type="text" class="form-control" name="anestesiologo">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Ayudante:</label>
                            <input type="text" class="form-control" name="ayudante_1">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Ayudante:</label>
                            <input type="text" class="form-control" name="ayudante_2">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Ayudante:</label>
                            <input type="text" class="form-control" name="ayudante_3">
                        </div>
                    </div>
                    <div class="col-lg-6">
                    
                        <div class="form-group">
                            <label>Hora inicial:</label>
                            <select class="form-control" name="hora_inicial">
                                <option>Seleccionar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Hora final:</label>
                            <select class="form-control" name="hora_final">
                                <option>Seleccionar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Tipo de intervención:</label>
                            <input type="text" class="form-control" name="intervencion">
                        </div>
                         <div class="form-group">
                            <label>Procedencia de la cirugia:</label>
                            <select class="form-control" name="procedencia">
                                <option>Contado</option>
                                <option>Credito</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Enviar</button>
                        <button type="reset" class="btn btn-default">Regresar</button>
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
</body>
</html>
<?php }
}
