<?php
/* Smarty version 3.1.30, created on 2017-05-19 20:02:59
  from "C:\xampp\htdocs\citas_medicas\page\templates\formsv.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591f3353ab9a19_01785452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a63327904c82c99f6379eb8b261fc5eda345caf6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\citas_medicas\\page\\templates\\formsv.html',
      1 => 1495216626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591f3353ab9a19_01785452 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h2 class="page-header">Reservación de quirófano <small>Dia: <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['quirofano']->value;?>
</small></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Formulario de reservación
                        </div>
                <div class="panel-body">
                <div class="row">
                <form role="form" action="formsr.php" method="post">
                <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

                     <input type="hidden" name="medico" value="<?php echo $_SESSION['usuario'];?>
">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <strong>Advertencia</strong> todos los campos son obligatorios.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="" class="control-label">Cedula del paciente:</label>
                            <input type="text" class="form-control" name="cedula_p" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Paciente:</label>
                            <input type="text" class="form-control" name="paciente" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Hora inicial:</label>
                            <select class="form-control" name="hora_inicial">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horarios']->value, 'horario', false, NULL, 'horarios', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['horario']->value) {
?>
                                <option><?php echo $_smarty_tpl->tpl_vars['horario']->value['hora'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Hora final:</label>
                            <select class="form-control" name="hora_final">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horarios']->value, 'horario', false, NULL, 'horarios', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['horario']->value) {
?>
                                <option><?php echo $_smarty_tpl->tpl_vars['horario']->value['hora'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Tipo de intervención:</label>
                            <input type="text" class="form-control" name="intervencion" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Observación:</label>
                            <textarea name="observacion" class="form-control" cols="30" rows="3" required></textarea>
                        </div>
                        <input type="hidden" class="form-control" name="fecha" value="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
">
                        <input type="hidden" class="form-control" name="quirofano" value="<?php echo $_smarty_tpl->tpl_vars['quirofano']->value;?>
">
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <a class="btn btn-danger" href="forms.php">Regresar</a>
                        <button type="reset" class="btn btn-warning">Borrar campos</button>    
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
            $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+1M" });
        } );
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
