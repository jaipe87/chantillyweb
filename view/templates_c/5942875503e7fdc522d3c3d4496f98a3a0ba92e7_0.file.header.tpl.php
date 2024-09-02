<?php
/* Smarty version 3.1.34-dev-7, created on 2024-07-18 10:55:36
  from 'C:\xampp\htdocs\chantilly_smarty\chantilly\view\templates\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66993af8c5b287_95155285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5942875503e7fdc522d3c3d4496f98a3a0ba92e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly_smarty\\chantilly\\view\\templates\\layout\\header.tpl',
      1 => 1721318111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66993af8c5b287_95155285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>La Casa del Chantilly</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mystery+Quest&family=Poppins&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Gabarito:wght@600&family=Mystery+Quest&family=Poppins&family=Raleway:wght@700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/icono.png">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/login.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/media-queries.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/chat-style.css">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="floating-wpp.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="floating-wpp.min.css">
</head>

<body>
    <header>
        <nav class="modal-navbar" id="menu-header">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa-solid fa-bars"></i>
            </label>
            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/Index"><img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/logo.png" alt="" href="index.html" width="320px"></a>

            <ul class="modal-navbar-items">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/Index">Novedades</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/Tortas">Tortas en linea</a></li>
                <?php if (!empty($_smarty_tpl->tpl_vars['lista_menu']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_menu']->value, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['menu']->value->nivel_menu == 0) {?>
                            <li class="menu-title" data-menu=<?php echo $_smarty_tpl->tpl_vars['menu']->value->id_menu;?>
><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;
echo $_smarty_tpl->tpl_vars['menu']->value->link_view;?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value->nombre_menu;?>
</a></li>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/Postres">Postres</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/Bocaditos">Bocaditos</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/Contacto">Contáctanos</a></li>
            </ul>
            <div class="header-buttons">
                <h2 id="AccesoConfirmado"></h2>
                <button id="btnLogIn" class="btn-1">
                    Iniciar Sesión
                </button>
                <div class="contenedor">
                    <a class="btn-carrito" href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/Carrito"><img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/carrito.png" alt=""
                            width="50px"></a>
                    <div class="contador">0</div>
                </div>
            </div>
            <!--Login-->
            <div id="loginModal" class="modal">
                <div class="modal-content">
                    <!-- Botón de cierre -->
                    <span class="close" id="closeLoginModal">&times;</span>
                    <!--Contenido-->
                    <div class="sufee-login">
                        <div class="login-content">
                            <div class="login-logo">
                                <a href="./">
                                    <img class="align-content pl-3 pr-3" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/logo.png?v=<?php echo rand(0,100);?>
"
                                        alt="" width="100%">
                                </a>
                            </div>
                            <div class="login-form">
                                <form autocomplete="off">
                                    <div class="form-group">
                                        <label>Usuario</label>
                                        <input type="text" required autocomplete="off"
                                            class="form-control text-uppercase" placeholder="Ingrese su Usuario"
                                            id="txtUsuario" maxlength="20">
                                    </div>
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control"
                                                placeholder="Ingrese su Contraseña" id="txtPwd" maxlength="20" required
                                                autocomplete="off">
                                            <div class="input-group-addon" onclick="mostrar_password()">
                                                <i class="fa fa-eye-slash"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger btn-flat m-b-30 m-t-30"
                                        id="btnIngresar">Iniciar Sesión
                                    </button>
                                    <br>
                                    <br>
                                    <!-- Enlace para ir al modal de registro -->
                                    <span class="link-to-register" id="linkToRegister">¿No tienes una cuenta? <a
                                            style="color: blue; cursor: pointer"> Regístrate
                                            aquí </a>
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal de registro -->
            <div id="registerModal" class="modal">
                <div class="modal-content-register">
                    <!-- Botón de cierre -->
                    <span class="close" id="closeRegisterModal">&times;</span>
                    <!--Contenido del modal-->
                    <div class="sufee-login">
                        <div class="login-content">
                            <div class="login-logo">
                                <a href="./">
                                    <img class="align-content pl-3 pr-3" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/logo.png?v=<?php echo rand(0,100);?>
"
                                        alt="" width="100%">
                                </a>
                            </div>
                            <div class="login-form">
                                <form autocomplete="off">
                                    <div class="form-group">
                                        <label>Nombres:</label>
                                        <input type="text" required autocomplete="off"
                                            class="form-control text-uppercase" placeholder="Ingrese su Nombre"
                                            id="txtNombre" maxlength="20">
                                    </div>
                                    <div style="display: flex; gap:15px">
                                        <div class="form-group">
                                            <label for="txtApPaterno">Apellido Paterno:</label>
                                            <input type="text" required autocomplete="off"
                                                class="form-control text-uppercase"
                                                placeholder="Ingrese su Apellido Paterno" id="txtApPaterno"
                                                maxlength="20">
                                        </div>
                                        &nbsp;
                                        <div class="form-group">
                                            <label for="txtApMaterno">Apellido Materno:</label>
                                            <input type="text" required autocomplete="off"
                                                class="form-control text-uppercase"
                                                placeholder="Ingrese su Apellido Materno" id="txtApMaterno"
                                                maxlength="20">
                                        </div>
                                    </div>
                                    <div style="display: flex; gap:15px; width:100%">
                                        <div class="form-group">
                                            <select name="select">
                                                <option value="value1" selected>DNI</option>
                                                <option value="value2">Carnet de Extranjeria</option>
                                                <option value="value3">Pasaporte</option>
                                            </select>

                                        </div>
                                        &nbsp;
                                        <div class="form-group">
                                            <input type="text" required autocomplete="off"
                                                class="form-control text-uppercase"
                                                placeholder="Ingrese su Nro" id="txtNroDoc"
                                                maxlength="20">
                                        </div>
                                    </div>

                                    <div style="display: flex; gap:15px">
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <input type="text" required autocomplete="off"
                                                class="form-control text-uppercase" placeholder="Ingrese su Dirección"
                                                id="txtDireccionUsuario" maxlength="20">
                                        </div>
                                        &nbsp;
                                        <div class="form-group">
                                            <label>Nro. Celular</label>
                                            <input type="text" required autocomplete="off"
                                                class="form-control text-uppercase" placeholder="Ingrese su Celular"
                                                id="txtCelularUsuario" maxlength="20">
                                        </div>
                                    </div>
                                    <div style="display: flex; gap:15px">

                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <div class="input-group">
                                                <input type="password" required class="form-control"
                                                    placeholder="Ingrese su contraseña" id="txtPWD" maxlength="20"
                                                    autocomplete="off">
                                                <div class="input-group-addon input-group-register"
                                                    onclick="mostrar_password_register()">
                                                    <i class="fa fa-eye-slash"></i>
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div class="form-group">
                                            <label>Confirmar Contraseña</label>
                                            <div class="input-group">
                                                <input type="password" required class="form-control"
                                                    placeholder="Confirme su contraseña" id="txtPWD1" maxlength="20"
                                                    autocomplete="off">
                                                <div class="input-group-addon input-group-confirm"
                                                    onclick="mostrar_password_confirm()">
                                                    <i class="fa fa-eye-slash"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger btn-flat m-b-30 m-t-30"
                                        id="btnGraba">Registrarse
                                    </button>
                                    <button type="button" class="btn btn-primary btn-flat m-b-30 m-t-30"
                                        id="btnGoogle"><i class="fa fa-google" aria-hidden="true"></i>
                                        Registrarse con Google
                                    </button>
                                    <br>
                                    <br>
                                    <!-- Enlace para ir al modal de registro -->
                                    <span class="link-" id="linkToLogin">¿Ya tienes una cuenta? <a
                                            style="color: blue; cursor: pointer"> Inicia Sesión
                                            aquí</a>
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </nav>
    </header>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47948014966993af8c578e4_80374047', "content");
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167052280466993af8c58327_26101090', "scripts");
?>



<!---
Lo que me falta es obtener las categorias en las opciones
Que el producto se añada al carrito
Me falta confirmar la autenticación del login
Me falta hacer que funcione el registro de usuarios
---><?php }
/* {block "content"} */
class Block_47948014966993af8c578e4_80374047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_47948014966993af8c578e4_80374047',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_167052280466993af8c58327_26101090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_167052280466993af8c58327_26101090',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/usuario.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/contador.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
    <?php
}
}
/* {/block "scripts"} */
}
