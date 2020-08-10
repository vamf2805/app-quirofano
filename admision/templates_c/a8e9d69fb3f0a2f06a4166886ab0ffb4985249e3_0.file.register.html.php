<?php
/* Smarty version 3.1.30, created on 2017-05-19 19:00:57
  from "C:\xampp\htdocs\citas_medicas\page\templates\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591f24c9efbfb0_49370720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8e9d69fb3f0a2f06a4166886ab0ffb4985249e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\citas_medicas\\page\\templates\\register.html',
      1 => 1495213233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591f24c9efbfb0_49370720 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form method="post" action="activar.php" role="login">
        <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

          <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
          <h4 class="welcome">Clinica Canabal</h4>
          <input type="text" name="pass" class="form-control  input-sm" placeholder="Rif" required="" />
          <button type="submit" name="siguiente" class="btn btn-primary btn-block">Siguiente</button>
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
