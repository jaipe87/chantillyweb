<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-09 17:21:35
  from 'C:\xampp\htdocs\admin_web\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd14def4f46c0_63361132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a7e10663fe0a64fd479c986b398785e1fd4acdb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin_web\\view\\templates\\login.tpl',
      1 => 1607552493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd14def4f46c0_63361132 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['descia']->value;?>
</title>
    <meta name="description" content="Hard System Peru SAC">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/favicon.png?v=<?php echo rand(0,100);?>
">
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/favicon.png?v=<?php echo rand(0,100);?>
">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/normalize.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/alertify/alertify.min.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/alertify/themes/default.min.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/chosen/chosen.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/form/login.css?v=<?php echo rand(0,100);?>
">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
> -->
</head>
<body class="bg-white-bone">

<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="./">
                    <img class="align-content pl-3 pr-3" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/logo.png?v=<?php echo rand(0,100);?>
" alt="">
                </a>
            </div>
            <div class="login-form">
                <form>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" autocomplete="off" class="form-control" placeholder="Ingrese su Usuario" id="txtUsuario" maxlength="20">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" placeholder="Ingrese su Contraseña" id="txtPwd" maxlength="20">
                    </div>
                    <button type="button" class="btn btn-primary btn-flat m-b-30 m-t-30" id="btnIngresar">Iniciar
                        Sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/jquery.matchHeight.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/chosen/chosen.jquery.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/alertify/alertify.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/util.js?v=<?php echo rand(0,100);?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/login.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
