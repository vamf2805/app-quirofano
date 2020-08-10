<?php
/* Smarty version 3.1.30, created on 2017-10-25 23:34:47
  from "C:\xampp\htdocs\ccvc-quirofano\templates\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f10377371750_68770390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eabf9f4c1ddf67078c252694c6aca1edaaf4dd43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ccvc-quirofano\\templates\\login.html',
      1 => 1508967285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f10377371750_68770390 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link href="res/css/bootstrap.min.css" rel="stylesheet">
    <link href="res/css/style.css" rel="stylesheet">
    <link href="res/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="res/css/alertify.min.css"/>
    <link rel="stylesheet" href="res/css/themes/bootstrap.min.css"/>
    <?php echo '<script'; ?>
 src="res/js/alertify.min.js"><?php echo '</script'; ?>
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
        <form method="post" action="ingresar.php" role="login">
          <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

          <img id="profile-img" class="profile-img-card" src="res/img/user-lock.png" />
           <h3 class="welcome">Clinica Canabal</h3>
          <input type="text" name="user" placeholder="Usuario" required class="form-control  input-sm" />
          <input type="password" name="pass" class="form-control  input-sm" id="password" placeholder="Rif" required="" />
          <div class="pwstrength_viewport_progress"></div>
          <button type="submit" name="ingresar" class="btn btn-primary btn-block">Iniciar sesión</button>
          <a class="btn btn-success btn-block" href="../index.html">Regresar</a>
          <div class="link">
            <a href="register.php" class="link">Activar cuenta</a>
          </div>
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
