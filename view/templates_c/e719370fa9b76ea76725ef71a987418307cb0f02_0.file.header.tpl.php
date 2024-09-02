<?php
/* Smarty version 3.1.34-dev-7, created on 2024-08-22 15:36:45
  from 'C:\xampp\htdocs\chantilly\web\view\templates\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66c7a15d9abdf2_09842152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e719370fa9b76ea76725ef71a987418307cb0f02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\layout\\header.tpl',
      1 => 1724358998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c7a15d9abdf2_09842152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/icono.png">

    <title><?php echo $_smarty_tpl->tpl_vars['empresa']->value->des;?>
</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mystery+Quest&family=Poppins&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Gabarito:wght@600&family=Mystery+Quest&family=Poppins&family=Raleway:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/alertify/alertify.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/alertify/themes/default.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/login.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/media-queries.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/chat-style.css">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148278172866c7a15d99f456_50986457', "styles");
?>


    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/jquery/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        const urlpath = "<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
";
        const assets = "<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
";
    <?php echo '</script'; ?>
>
</head>

<body>
    <header>
        <nav class="modal-navbar" id="menu-header">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa-solid fa-bars"></i>
            </label>
            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['empresa']->value->logo_header;?>
" alt="" href="index.html"
                    width="320px"></a>

            <ul class="modal-navbar-items">

                <?php if (!empty($_smarty_tpl->tpl_vars['lista_menus']->value)) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_menus']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;
echo $_smarty_tpl->tpl_vars['row']->value->link_view;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_pagina;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->pagina;?>
</a></li>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>



            </ul>
            <div class="header-buttons">
                <div class="contenedor">
                    <?php if (!empty($_smarty_tpl->tpl_vars['token']->value)) {?>
                        <a id="btnLogIn" class="button-login">
                            <?php if (!empty($_smarty_tpl->tpl_vars['letra_sesion']->value)) {?>
                                <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['letra_sesion']->value;?>
 letra_sesion"></i>
                            <?php } else { ?>
                                <i class="fa fa-user"></i>
                            <?php }?>
                        </a>
                        <ul class="lista_sesion">

                            <li class="lista_sesion_li"> <a class="link_sesion" href="#"> <i class="fa fa-user"></i> Mi
                                    Cuenta</a> </li>
                            <li class="lista_sesion_li"> <a class="link_sesion" href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/Auth/LogOut"><i
                                        class="fa-solid fa-up-right-from-square "></i> Cerrar Sesión</a></li>
                        </ul>
                    <?php } else { ?>
                        <a id="btnLogIn" class="button-login">
                            <i class="fa fa-user"></i>
                        </a>
                    <?php }?>
                </div>

                <div class="contenedor">
                    <!--<a class="btn-carrito" href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/Carrito">-->
                    <a class="btn-carrito" href="#" onclick="toggleSidebar()">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/carrito.png" alt="" width="50px"></a>
                    <div class="contador">0</div>

                    <div class="siderbar-manta" onclick="toggleSidebar()"></div>
                    <div class="sidebar" id="mySidebar">

                        <div class="cart-header">
                            <span class="close-button" onclick="toggleSidebar()">&times;</span>
                            <div class="cart-header-titulo">
                                MI CARRITO
                            </div>
                        </div>

                        <div style="flex: 1 1 0%;">
                            <div class="cart-body">
                                <div class="cart-items">


                                </div>

                                <div class="cart-footer">

                                    <div class="cart-footer-order">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['token']->value)) {?>
                                            <button id="btn-ordenar" data-href='<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/Checkout'
                                                onClick="locationdatahref(this,false)"> Procesar Compra <div> S/ <span></span>
                                                </div>
                                            </button>
                                        <?php } else { ?>
                                            <button id="btn-ordenar"
                                                onClick="ValidacioncheckOut('No has iniciado Sesión !!')"> Procesar Compra <div> S/ <span></span>
                                                </div>
                                            </button>
                                        <?php }?>
                                    </div>

                                </div>



                            </div>
                        </div>





                    </div>
                </div>

            </div>

            <?php if (empty($_smarty_tpl->tpl_vars['token']->value)) {?>
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
                                    <form autocomplete="false">
                                        <div class="form-group">
                                            <label>Correo Electrónico</label>
                                            <input type="text" required autocomplete="off" name="usuario"
                                                class="form-control text-uppercase" placeholder="Ingrese su Usuario"
                                                id="txtUsuario" maxlength="150">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control"
                                                    placeholder="Ingrese su Contraseña" id="txtPwd" maxlength="100" required
                                                    name="pwd" autocomplete="off">
                                                <div class="input-group-addon" onclick="mostrar_password()">
                                                    <i class="fa fa-eye-slash"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_button_login">
                                            <button type="button" class="btn btn-danger btn-flat m-b-30 m-t-30"
                                                id="btnIngresar">Iniciar Sesión
                                            </button>
                                            <button type="button" class="btn btn-primary btn-flat m-b-30 m-t-30"
                                                data-href="<?php echo $_smarty_tpl->tpl_vars['login_url']->value;?>
" onClick="locationdatahref(this,false)"
                                                id="btnGoogle"><i class="fa-brands fa-google" aria-hidden="true"></i>
                                                Inicia sesión con Google
                                            </button>
                                        </div>
                                        <div class="login_register">

                                            <a class="link-to-register" id="linkRecuperar" href="#">¿Olvidó su contraseña?
                                            </a>
                                            <!-- Enlace para ir al modal de registro -->
                                            <span class="link-to-register" id="linkToRegister">¿No tienes una cuenta? <a
                                                    style="color: blue; cursor: pointer">Cree una aquí </a>
                                            </span>


                                        </div>

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
                                    <form autocomplete="false">
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input type="text" required autocomplete="off" name="nombres"
                                                class="form-control text-uppercase" placeholder="Ingrese su(s) Nombre(s)"
                                                id="txtNombre" maxlength="100">
                                        </div>
                                        <div class="form_lastname">
                                            <div class="form-group">
                                                <label for="txtApPaterno">Apellidos</label>
                                                <input type="text" required autocomplete="off" name="apellidos"
                                                    class="form-control text-uppercase" placeholder="Ingrese sus Apellidos"
                                                    id="txtApPaterno" maxlength="100">
                                            </div>
                                        </div>
                                        <div class="form_numbers">
                                            <div class="form-group-nrodoc">

                                                <div class="form-group-nrodoc-container">
                                                    <label>Documento Identidad</label>
                                                    <div class="form-datos-nrodoc">
                                                        <select name="tipdoc" id="cboTipdoc">

                                                        </select>
                                                        <input type="text" required autocomplete="off"
                                                            class="form-control text-uppercase" name="nrodoc"
                                                            placeholder="Documento de Identidad" id="txtNroDoc"
                                                            maxlength="8">

                                                    </div>


                                                </div>

                                            </div>

                                            <div class="form-group-celular">
                                                <label>Nro. Celular</label>
                                                <input type="text" required autocomplete="off" name="celular"
                                                    class="form-control text-uppercase" placeholder="Ingrese su Celular"
                                                    id="txtCelularUsuario" maxlength="11">
                                            </div>
                                        </div>
                                        <div style="form_correo">
                                            <div class="form-group">
                                                <label>Correo Electrónico</label>
                                                <input type="text" required autocomplete="off" class="form-control"
                                                    placeholder="Ingrese su correo electrónico" id="txtEmail" name="email"
                                                    maxlength="150">
                                            </div>
                                        </div>
                                        <div style="form_direccion">
                                            <div class="form-group">
                                                <label>Dirección</label>
                                                <input type="text" required autocomplete="off"
                                                    class="form-control text-uppercase" placeholder="Ingrese su Dirección"
                                                    name="direccion" id="txtDireccionUsuario" maxlength="300">
                                            </div>
                                        </div>
                                        <div class="form_password">

                                            <div class="form-group pwd1">
                                                <label>Contraseña</label>
                                                <div class="input-group">
                                                    <input type="password" required class="form-control"
                                                        placeholder="Ingrese su contraseña" id="txtPWD1" maxlength="100"
                                                        name="pwd1" autocomplete="off">
                                                    <div class="input-group-addon input-group-register"
                                                        onclick="mostrar_password_register()">
                                                        <i class="fa fa-eye-slash"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group pwd2">
                                                <label>Confirmar Contraseña</label>
                                                <div class="input-group">
                                                    <input type="password" required class="form-control"
                                                        placeholder="Confirme su contraseña" id="txtPWD2" maxlength="100"
                                                        name="pwd2" autocomplete="off">
                                                    <div class="input-group-addon input-group-confirm"
                                                        onclick="mostrar_password_confirm()">
                                                        <i class="fa fa-eye-slash"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form_button">
                                            <button type="button" class="btn btn-danger btn-flat m-b-30 m-t-30"
                                                id="btnGraba">Registrarse
                                            </button>

                                        </div>

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

            <?php }?>
        </nav>
    </header>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35877324766c7a15d9ab6c8_86843692', "tematicas");
}
/* {block "styles"} */
class Block_148278172866c7a15d99f456_50986457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_148278172866c7a15d99f456_50986457',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php
}
}
/* {/block "styles"} */
/* {block "tematicas"} */
class Block_35877324766c7a15d9ab6c8_86843692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tematicas' => 
  array (
    0 => 'Block_35877324766c7a15d9ab6c8_86843692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "tematicas"} */
}
