<?php
/* Smarty version 3.1.30, created on 2017-05-19 19:39:27
  from "C:\xampp\htdocs\citas_medicas\page\templates\active.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591f2dcfef0bf2_40561353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1d2de5ea7fb3f97630dfb5935cf1fc69b6e7f24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\citas_medicas\\page\\templates\\active.html',
      1 => 1495215556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591f2dcfef0bf2_40561353 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registro de cuenta</title>
    <link href="../res/css/bootstrap.min.css" rel="stylesheet">
    <link href="../res/css/style.css" rel="stylesheet">
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
<div class="container">
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="activeU.php" role="login">
          <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

          <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
          <h4 class="welcome">Clinica Canabal</h4>
          <label for="name" class="cols-sm-2 control-label">Ingrese su nombre:</label>
          <input type="text" name="name" class="form-control  input-sm" placeholder="Nombre" required="" />
          <label for="cedula" class="cols-sm-2 control-label">Ingrese su numero de cedula:</label>
          <input type="text" class="form-control" name="cedula" placeholder="Cedula"/>
          <input type="hidden" class="form-control" name="rif" placeholder="" value=<?php echo $_smarty_tpl->tpl_vars['rif']->value;?>
 />
            
           
          <button type="submit" name="siguiente" class="btn btn-primary btn-block">Activar cuenta</button>
          <a class="btn btn-danger btn-block" href="acceder.php">Regresar</a>
        </form>
      </section>  
      </div>
      <div class="col-md-4"></div>
  </div>    
</div>
<?php echo '<script'; ?>
 src="../res/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../res/js/login.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../res/js/waypoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../res/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
