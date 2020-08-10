<?php
/* Smarty version 3.1.30, created on 2017-08-18 17:07:57
  from "C:\xampp\htdocs\citas_medicas\admision\templates\table.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_599702cd93d037_84475861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6823deb95fca2525c16ec00a56280f2be9976503' => 
    array (
      0 => 'C:\\xampp\\htdocs\\citas_medicas\\admision\\templates\\table.html',
      1 => 1502746860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599702cd93d037_84475861 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h2 class="page-header">Lista de solicitudes de las reservaciones de quirófanos</h2>
                    <h4><center>Fecha inicial: <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
 - Fecha final: <?php echo $_smarty_tpl->tpl_vars['fechaF']->value;?>
</center></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Lista de solicitudes pendientes
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Quirófano</th>
                                        <th>Médico</th>
                                        <th>Paciente</th>
                                        <th>Horario</th>
                                        <th>Estado</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horarios']->value, 'horario', false, NULL, 'horarios', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['horario']->value) {
?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $_smarty_tpl->tpl_vars['horario']->value['fecha_horarios'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['horario']->value['quirofano'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['horario']->value['medico'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['horario']->value['paciente'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['horario']->value['hora_inicial'];?>
 - <?php echo $_smarty_tpl->tpl_vars['horario']->value['hora_final'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['horario']->value['estado'];?>
</td>
                                        <td><center><a id="positivo" class="btn btn-warning btn-sm <?php if ($_smarty_tpl->tpl_vars['horario']->value['estado'] == "ocupado") {?>disabled <?php }?>"  href="etable.php?cedula_p=<?php echo $_smarty_tpl->tpl_vars['horario']->value['cedula_p'];?>
&id_horario=<?php echo $_smarty_tpl->tpl_vars['horario']->value['id_horario'];?>
&quirofano=<?php echo $_smarty_tpl->tpl_vars['horario']->value['quirofano'];?>
&fecha_horarios=<?php echo $_smarty_tpl->tpl_vars['horario']->value['fecha_horarios'];?>
&hora_inicial=<?php echo $_smarty_tpl->tpl_vars['horario']->value['hora_inicial'];?>
&hora_final=<?php echo $_smarty_tpl->tpl_vars['horario']->value['hora_final'];?>
&intervencion=<?php echo $_smarty_tpl->tpl_vars['horario']->value['intervencion'];?>
&observacion=<?php echo $_smarty_tpl->tpl_vars['horario']->value['observacion'];?>
&paciente=<?php echo $_smarty_tpl->tpl_vars['horario']->value['paciente'];?>
&fecha=<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
&fechaF=<?php echo $_smarty_tpl->tpl_vars['fechaF']->value;?>
" ><i class="fa fa-cog"></i> Modificar</a> <a href="confirmedR.php?cedula_p=<?php echo $_smarty_tpl->tpl_vars['horario']->value['cedula_p'];?>
&quirofano=<?php echo $_smarty_tpl->tpl_vars['horario']->value['quirofano'];?>
&fecha_horarios=<?php echo $_smarty_tpl->tpl_vars['horario']->value['fecha_horarios'];?>
&hora_inicial=<?php echo $_smarty_tpl->tpl_vars['horario']->value['hora_inicial'];?>
&hora_final=<?php echo $_smarty_tpl->tpl_vars['horario']->value['hora_final'];?>
&paciente=<?php echo $_smarty_tpl->tpl_vars['horario']->value['paciente'];?>
&fecha=<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
&fechaF=<?php echo $_smarty_tpl->tpl_vars['fechaF']->value;?>
" class="btn btn-primary btn-sm <?php if ($_smarty_tpl->tpl_vars['horario']->value['estado'] == "ocupado") {?>disabled <?php }?>"><i class="glyphicon glyphicon-ok"></i> Confirmar</a> <a href="#" data-href="deleteR.php?usuario=<?php echo $_SESSION['usuario'];?>
&medico=<?php echo $_smarty_tpl->tpl_vars['horario']->value['medico'];?>
&cedula_p=<?php echo $_smarty_tpl->tpl_vars['horario']->value['cedula_p'];?>
&quirofano=<?php echo $_smarty_tpl->tpl_vars['horario']->value['quirofano'];?>
&fecha_horarios=<?php echo $_smarty_tpl->tpl_vars['horario']->value['fecha_horarios'];?>
&hora_inicial=<?php echo $_smarty_tpl->tpl_vars['horario']->value['hora_inicial'];?>
&hora_final=<?php echo $_smarty_tpl->tpl_vars['horario']->value['hora_final'];?>
&intervencion=<?php echo $_smarty_tpl->tpl_vars['horario']->value['intervencion'];?>
&observacion=<?php echo $_smarty_tpl->tpl_vars['horario']->value['observacion'];?>
&paciente=<?php echo $_smarty_tpl->tpl_vars['horario']->value['paciente'];?>
&fecha=<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
&fechaF=<?php echo $_smarty_tpl->tpl_vars['fechaF']->value;?>
" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i> Eliminar</a></center></td>
                                    </tr> 
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </tbody>
                            </table>
                            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                                    
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Eliminar reservación</h4>
                                        </div>
                                                    
                                        <div class="modal-body">
                                            ¿Desea eliminar esta reservación?
                                        </div>    
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <a class="btn btn-danger btn-ok">Eliminar</a>
                                        </div>
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
        $('#dataTables').DataTable({
             order: [[0, "desc"]],
            responsive: true,
            language:{
                "lengthMenu": "Mostrar _MENU_ registros",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrada de _MAX_ registros)",
                "loadingRecords": "Cargando...",
                "processing":     "Procesando...",
                "search": "Buscar:",
                "zeroRecords":    "No se encontraron registros coincidentes",
                "paginate": {
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                    },                  
                }
        });
    });
    <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
            });
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
