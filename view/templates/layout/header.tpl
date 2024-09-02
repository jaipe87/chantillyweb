<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{$asset}/images/icons/icono.png">

    <title>{$empresa->des}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mystery+Quest&family=Poppins&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Gabarito:wght@600&family=Mystery+Quest&family=Poppins&family=Raleway:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{$asset}/css/lib/alertify/alertify.min.css" />
    <link rel="stylesheet" href="{$asset}/css/lib/alertify/themes/default.min.css" />
    <link rel="stylesheet" href="{$asset}/css/style.css">
    <link rel="stylesheet" href="{$asset}/css/login.css">
    <link rel="stylesheet" href="{$asset}/css/media-queries.css">
    <link rel="stylesheet" href="{$asset}/css/chat-style.css">

    {block name="styles"}


    {/block}

    <script src="{$asset}/js/lib/jquery/jquery-3.5.1.min.js"></script>
    <script>
        const urlpath = "{$RUTA_HTTP}";
        const assets = "{$asset}";
    </script>
</head>

<body>
    <header>
        <nav class="modal-navbar" id="menu-header">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa-solid fa-bars"></i>
            </label>
            <a href="{$RUTA_HTTP}"><img src="{$asset}/images/{$empresa->logo_header}" alt="" href="index.html"
                    width="320px"></a>

            <ul class="modal-navbar-items">

                {if !empty( $lista_menus)}
                    {foreach $lista_menus as $row}

                        <li><a href="{$RUTA_HTTP}{$row->link_view}" data-id="{$row->id_pagina}">{$row->pagina}</a></li>

                    {/foreach}
                {/if}



            </ul>
            <div class="header-buttons">
                <div class="contenedor">
                    {if !empty($token)}
                        <a id="btnLogIn" class="button-login">
                            {if !empty($letra_sesion)}
                                <i class="fa fa-{$letra_sesion} letra_sesion"></i>
                            {else}
                                <i class="fa fa-user"></i>
                            {/if}
                        </a>
                        <ul class="lista_sesion">

                            <li class="lista_sesion_li"> <a class="link_sesion" href="#"> <i class="fa fa-user"></i> Mi
                                    Cuenta</a> </li>
                            <li class="lista_sesion_li"> <a class="link_sesion" href="{$RUTA_HTTP}/Auth/LogOut"><i
                                        class="fa-solid fa-up-right-from-square "></i> Cerrar Sesión</a></li>
                        </ul>
                    {else}
                        <a id="btnLogIn" class="button-login">
                            <i class="fa fa-user"></i>
                        </a>
                    {/if}
                </div>

                <div class="contenedor">
                    <!--<a class="btn-carrito" href="{$RUTA_HTTP}/Carrito">-->
                    <a class="btn-carrito" href="#" onclick="toggleSidebar()">
                        <img src="{$asset}/images/carrito.png" alt="" width="50px"></a>
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
                                        {if !empty($token)}
                                            <button id="btn-ordenar" data-href='{$RUTA_HTTP}/Checkout'
                                                onClick="locationdatahref(this,false)"> Procesar Compra <div> S/ <span></span>
                                                </div>
                                            </button>
                                        {else}
                                            <button id="btn-ordenar"
                                                onClick="ValidacioncheckOut('No has iniciado Sesión !!')"> Procesar Compra <div> S/ <span></span>
                                                </div>
                                            </button>
                                        {/if}
                                    </div>

                                </div>



                            </div>
                        </div>





                    </div>
                </div>

            </div>

            {if empty($token)}
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
                                        <img class="align-content pl-3 pr-3" src="{$asset}/images/logo.png?v={0|rand:100}"
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
                                                data-href="{$login_url}" onClick="locationdatahref(this,false)"
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
                                        <img class="align-content pl-3 pr-3" src="{$asset}/images/logo.png?v={0|rand:100}"
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

            {/if}
        </nav>
    </header>

    {block name="tematicas"}

{/block}