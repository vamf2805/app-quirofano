<?php
/* Smarty version 3.1.30, created on 2017-05-01 02:49:59
  from "C:\xampp\htdocs\victor_respaldo\page\templates\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590686375549a7_61561285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '335ad22eaef4969be947db8d38ba603833660630' => 
    array (
      0 => 'C:\\xampp\\htdocs\\victor_respaldo\\page\\templates\\login.html',
      1 => 1491428945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590686375549a7_61561285 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Iniciar Sesión</title>
    <link href="../res/css/bootstrap.min.css" rel="stylesheet">
    <link href="../res/css/style.css" rel="stylesheet">
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
<div class="container">
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="ingresar.php" role="login">
         <!--  <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" /> -->
         <h4><i class="fa fa-user-md fa-4x" aria-hidden="true"></i> Medical appointments</h4>
          <input type="text" name="user" placeholder="Username" required class="form-control input-lg" />
          <input type="password" name="pass" class="form-control input-lg" id="password" placeholder="Password" required="" />
          <div class="pwstrength_viewport_progress"></div>
          <button type="submit" name="ingresar" class="btn btn-lg btn-primary btn-block">Iniciar sesión</button>
          <a class="btn btn-lg btn-success btn-block" href="../index.html">Regresar</a>
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
