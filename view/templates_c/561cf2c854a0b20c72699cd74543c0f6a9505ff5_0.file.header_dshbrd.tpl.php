<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-28 15:59:21
  from 'C:\xampp\htdocs\TiendaOnline\public\admin_web\view\templates\layout\header_dshbrd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_601325a9c96ef3_17170006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '561cf2c854a0b20c72699cd74543c0f6a9505ff5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TiendaOnline\\public\\admin_web\\view\\templates\\layout\\header_dshbrd.tpl',
      1 => 1611867475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601325a9c96ef3_17170006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
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
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
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

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_229126000601325a9c86189_41721778', "estilos");
?>

</head>

<body data-key="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
">
<div class="jm-loadingpage"></div>
<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php if (!empty($_smarty_tpl->tpl_vars['lista_menu']->value)) {?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_menu']->value, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['menu']->value->nivel_menu == 0) {?>
                            <li class="menu-title" data-menu=<?php echo $_smarty_tpl->tpl_vars['menu']->value->id_menu;?>
><?php echo $_smarty_tpl->tpl_vars['menu']->value->nombre_menu;?>
</li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['menu']->value->nivel_menu == 1) {?>
                            <li class="menu-item-has-children dropdown" data-menu="<?php echo $_smarty_tpl->tpl_vars['menu']->value->id_menu;?>
">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false"> <i
                                            class="menu-icon fa <?php echo $_smarty_tpl->tpl_vars['menu']->value->icon_menu;?>
"></i><?php echo $_smarty_tpl->tpl_vars['menu']->value->nombre_menu;?>
</a>

                                <ul class="sub-menu children dropdown-menu">

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value->submenu, 'sbm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sbm']->value) {
?>
                                        <li><i class="fa  <?php echo $_smarty_tpl->tpl_vars['sbm']->value->icon_menu;?>
"></i><a
                                                    href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;
echo $_smarty_tpl->tpl_vars['sbm']->value->link_view;?>
"><?php echo $_smarty_tpl->tpl_vars['sbm']->value->nombre_menu;?>
</a></li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </ul>

                            </li>
                        <?php }?>



                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
                <a class="navbar-brand" href="?a=Home"><img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/logo.png?v=<?php echo rand(0,100);?>
"
                                                            alt="Logo"></a>

                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="header-left">
                    <div class="dropdown for-notification">
                        <strong style="font-size: 14px;"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</strong>
                    </div>
                </div>

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/admin.jpg?v=<?php echo rand(0,100);?>
"
                             alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">


                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/Login/LogOut"><i class="fa fa-power -off"></i>Cerra
                            Sesión</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- /#header --><?php }
/* {block "estilos"} */
class Block_229126000601325a9c86189_41721778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_229126000601325a9c86189_41721778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "estilos"} */
}
