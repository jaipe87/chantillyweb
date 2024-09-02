<?php
/* Smarty version 3.1.34-dev-7, created on 2024-09-02 15:31:38
  from 'C:\xampp\htdocs\chantilly\web\view\templates\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66d620aae80f41_97350715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcf285241cac009858c97cf9e9e563d2eaf29134' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\checkout.tpl',
      1 => 1725308963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d620aae80f41_97350715 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
/css/media-queries.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/checkout.css">
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
    <div class="jm-loadingpage"></div>
    <div class="jm-cargaTemp"></div>
    <header class="header_checkout">
        <nav class="nav_checkout">


            <div class="logo_checkout">
                <a href="./">
                    <img class="align-content pl-3 pr-3" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['empresa']->value->logo_header;?>
?v=<?php echo rand(0,100);?>
"
                        alt="" width="320" height="50">
                </a>
            </div>

            <div class="contacto_checkout">
                <p class="">¿Necesitas ayuda?
                    Escríbenos al <a href="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->whatsapp1;?>
" target="_blank" class=""> <b
                            class=""><?php echo $_smarty_tpl->tpl_vars['empresa']->value->whatsapp;?>
</b> </a></p>
            </div>


        </nav>
    </header>

    <div id="checkout-container">
        <div class="wrapcheckout">
            <div class="form1">
                <h2>Confirma y paga tu compra </h2>

                <div class="confirma_datos">

                    <div class="seleccion">
                        <div id="btndatos">
                            <h4>Datos del Cliente</h4>
                        </div>

                    </div>
                    <div class="datos titulo_seccion">
                        <h3>DATOS PERSONALES</h3>
                        <hr>

                        <div class="form_cliente" data-info="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->verified_checkout;?>
">

                            <div class="datos_cliente">
                                <div class="form_control">
                                    <div class="control">
                                        <label for="">Nombres</label>
                                        <?php if ($_smarty_tpl->tpl_vars['cliente']->value->verified_checkout == 0) {?>
                                            <input type="text" id="txtNombre" name="nombres" placeholder="Nombre" required
                                                value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->nom_usuario;?>
" />
                                        <?php } else { ?>
                                            <input type="text" id="txtNombre" name="nombres" placeholder="Nombre" required
                                                value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->nom_usuario;?>
" disabled />
                                        <?php }?>

                                    </div>

                                    <div class="control">
                                        <label for="">Apellidos</label>
                                        <?php if ($_smarty_tpl->tpl_vars['cliente']->value->verified_checkout == 0) {?>
                                            <input type="text" id="txtApPaterno" name="apellidos" placeholder="Apellidos"
                                                value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->ape_usuario;?>
" required />
                                        <?php } else { ?>
                                            <input type="text" id="txtApPaterno" name="apellidos" placeholder="Apellidos"
                                                value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->ape_usuario;?>
" required disabled />
                                        <?php }?>

                                    </div>
                                </div>
                                <div class="form_control">
                                    <div class="control">
                                        <label for="">Dirección</label>

                                        <?php if ($_smarty_tpl->tpl_vars['cliente']->value->verified_checkout == 0) {?>
                                            <input type="text" id="direccion" name="direccion"
                                                value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->direc_usuario;?>
" placeholder="Dirección" required />
                                        <?php } else { ?>
                                            <input type="text" id="direccion" name="direccion"
                                                value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->direc_usuario;?>
" placeholder="Dirección" required
                                                disabled />
                                        <?php }?>



                                    </div>
                                    <div class="control">
                                        <label for="">Celular</label>

                                        <?php if ($_smarty_tpl->tpl_vars['cliente']->value->verified_checkout == 0) {?>
                                            <input type="tel" id="telefono" name="celular" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->cel_usuario;?>
"
                                                placeholder="Teléfono" maxlength="11" required />
                                        <?php } else { ?>
                                            <input type="tel" id="telefono" name="celular" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->cel_usuario;?>
"
                                                placeholder="Teléfono" maxlength="11" required disabled />
                                        <?php }?>


                                    </div>
                                </div>
                                <div class="form_control">
                                    <div class="control">
                                        <label for="">Documento de Identidad</label>


                                        <?php if ($_smarty_tpl->tpl_vars['cliente']->value->verified_checkout == 0) {?>
                                            <select name="tipdoc" id="sltctipodocumento">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['lstDocumentos']->value)) {?>
                                                    <?php $_smarty_tpl->_assignInScope('lodoc', 8);?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstDocumentos']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['row']->value->cod == $_smarty_tpl->tpl_vars['cliente']->value->tipdoc_usuario) {?>
                                                            <?php $_smarty_tpl->_assignInScope('lodoc', $_smarty_tpl->tpl_vars['row']->value->lo);?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
" selected><?php echo $_smarty_tpl->tpl_vars['row']->value->descri;?>
 </option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->descri;?>
</option>
                                                        <?php }?>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                            </select>
                                        <?php } else { ?>
                                            <select name="tipdoc" id="sltctipodocumento" disabled>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['lstDocumentos']->value)) {?>
                                                    <?php $_smarty_tpl->_assignInScope('lodoc', 8);?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstDocumentos']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['row']->value->cod == $_smarty_tpl->tpl_vars['cliente']->value->tipdoc_usuario) {?>
                                                            <?php $_smarty_tpl->_assignInScope('lodoc', $_smarty_tpl->tpl_vars['row']->value->lo);?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
" selected><?php echo $_smarty_tpl->tpl_vars['row']->value->descri;?>
 </option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->descri;?>
</option>
                                                        <?php }?>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php }?>
                                            </select>
                                        <?php }?>

                                    </div>

                                    <div class="control">
                                        <label for="">N° de Documento de Identidad</label>


                                        <?php if ($_smarty_tpl->tpl_vars['cliente']->value->verified_checkout == 0) {?>
                                            <input type="input" id="txtdocumento" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->nrodoc_usuario;?>
"
                                                name="nrodoc" placeholder="Documento" maxlength="<?php echo $_smarty_tpl->tpl_vars['lodoc']->value;?>
">
                                        <?php } else { ?>
                                            <input type="input" id="txtdocumento" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->nrodoc_usuario;?>
"
                                                name="nrodoc" placeholder="Documento" maxlength="<?php echo $_smarty_tpl->tpl_vars['lodoc']->value;?>
" disabled>
                                        <?php }?>



                                    </div>
                                </div>
                            </div>
                            <div class="botones-checkout">
                                <?php if ($_smarty_tpl->tpl_vars['cliente']->value->verified_checkout == 0) {?>
                                    <button type="button" class="button_checkout" id="btnUpdatecliente"
                                        onclick="actualizacliente()">Confirma tus
                                        datos</button>
                                <?php } else { ?>
                                    <div class="mt-10">
                                        <small class="edit_cart"><a onclick="EditarDatos()" class=""><i
                                                    class="fa-solid fa-pencil"></i>
                                                Editar Datos</a> </small>
                                    </div>

                                <?php }?>

                            </div>

                        </div>
                    </div>
                    <div class="seleccion">

                        <div id="btnentrega">
                            <h4>Datos para la Entrega</h4>
                        </div>

                    </div>
                    <div class="entrega titulo_seccion">
                        <h3>TIPO DE ENTREGA</h3>
                        <hr>
                        <div class="form_entrega">
                            <input type="hidden" id="idlocal" value="0">
                            <div class="datos_tipo_entrega">
                                <div class="form_control">

                                    <label class="content-input" for="recojoRadio">
                                        <input type="radio" id="recojoRadio" name="entrega" checked>Recoger <b
                                            class="">GRATIS</b> en tienda
                                    </label>
                                    <?php if ($_smarty_tpl->tpl_vars['delivery']->value) {?>
                                        <label class="content-input" for="deliveryRadio">
                                            <input type="radio" id="deliveryRadio" name="entrega">Delivery
                                        </label>
                                    <?php }?>
                                </div>


                            </div>

                            <div class="datos_detalle_entrega">

                                <div id="recojo-tienda">
                                    <div class="detalle_recojo_tienda">
                                        <h4 id="eligeTienda">Elige el local más cercano a ti: </h4>
                                        <div class="tiendas">

                                        </div>
                                        <div class="direccionTienda">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstLocales']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                                <div class="direccion tienda<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
">
                                                    <div class="direccionGroup">
                                                        <h3><?php echo $_smarty_tpl->tpl_vars['row']->value->nombre_local;?>
</h3>
                                                        <button id="btnTienda" onclick="EsconderTienda()"><u>Cambiar
                                                                tienda</u></button>
                                                    </div>
                                                    <div class="direccion_tienda_datos">
                                                        <h5><?php echo $_smarty_tpl->tpl_vars['row']->value->direccion;?>
 </h5>
                                                        <small><?php echo $_smarty_tpl->tpl_vars['row']->value->dias_atencion;?>
 de <?php echo $_smarty_tpl->tpl_vars['row']->value->horario_ini;?>
 a
                                                            <?php echo $_smarty_tpl->tpl_vars['row']->value->horario_fin;?>
 horas</small>
                                                    </div>
                                                    <div class="mapa">
                                                        <?php echo $_smarty_tpl->tpl_vars['row']->value->frame_google;?>

                                                    </div>
                                                </div>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['delivery']->value) {?>
                                    <div id="delivery">
                                        <div class="delivery_detalle">

                                            <h4>Datos para la entrega</h4>
                                            <hr>
                                            <div class="datos_delivery">

                                                <div class="form_control">
                                                    <div class="control">
                                                        <label for="">Departamento</label>
                                                        <select name="departamento" id="sltcDepartamento"
                                                            placeholder="Departamento">

                                                            <option value="0" selected>Seleccionar</option>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lstDepartamento']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>


                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->coddep;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nomdep;?>
</option>

                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </select>
                                                    </div>
                                                    <div class="control">
                                                        <label for="">Provincia</label>
                                                        <select name="provincia" id="sltcProvincia" placeholder="Provincia">
                                                            <option value="0">Seleccionar</option>

                                                        </select>

                                                    </div>
                                                    <div class="control">
                                                        <label for="">Distrito</label>
                                                        <select name="distrito" id="sltcDistrito" placeholder="Distrito">
                                                            <option value="0">Seleccionar</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form_control">



                                                    <div class="control">
                                                        <label for="">Dirección de entrega</label>
                                                        <input type="text" id="calle" name="calle"
                                                            value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->direc_usuario;?>
"
                                                            placeholder="Nro/Piso/Mz/Lt" />
                                                    </div>
                                                </div>
                                                <div class="form_control">
                                                    <div class="control">
                                                        <label for="">Referencia de la dirección</label>
                                                        <input type="text" id="referencia" name="referencia" value=""
                                                            placeholder="Referencia" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="datos-pago-delivery">
                                                <h4>Servicio de envío</h4>
                                                <div class="pago-delivery">
                                                    <h4>S/<span id="precioEnvio"> 0.00</span></h4>
                                                </div>

                                            </div>

                                        </div>


                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form2" action="">
                <div class="sumary">
                    <div class="sumary_header">
                        <h2>Resumen de la compra </h2>
                        <small class="edit_cart"><a onclick="EditCart('<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
')" class=""><i
                                    class="fa-solid fa-pencil"></i> Editar carrito</a> </small>
                    </div>

                    <div class="table">
                        <div class="table-header">

                            <div class="header-item">Imagen</div>
                            <div class="header-item">Producto</div>
                            <div class="header-item">Cantidad</div>
                            <div class="header-item">Precio S/</div>
                            <div class="header-item">Total S/</div>
                        </div>
                        <div class="table-body">
                            <input type="hidden" id="pm" value="<?php echo $_smarty_tpl->tpl_vars['numpedido']->value;?>
">
                            <?php $_smarty_tpl->_assignInScope('total', "0.00");?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['cart']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                    <?php $_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['row']->value['neto']*$_smarty_tpl->tpl_vars['row']->value['quantity']));?>
                                    <div class="table-row">
                                        <div class="table-item text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['img'];?>
"
                                                alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['descri_corta'];?>
"></div>
                                        <div class="table-item text-left">
                                            <div class="detalle_item">
                                                <div class="descri">
                                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['descri_corta'];?>

                                                </div>
                                                <div class="detalle_torta">
                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['porcion'] != '') {?>
                                                        <p>Porciones: <?php echo $_smarty_tpl->tpl_vars['row']->value['porcion'];?>
</p>
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['medidas'] != '') {?>
                                                        <p>Medidas: <?php echo $_smarty_tpl->tpl_vars['row']->value['medidas'];?>
</p>
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['keke'] != '') {?>
                                                        <p>Keke: <?php echo $_smarty_tpl->tpl_vars['row']->value['keke'];?>
</p>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['relleno'] != '') {?>
                                                        <p>Relleno: <?php echo $_smarty_tpl->tpl_vars['row']->value['relleno'];?>
</p>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['diarecojo'] != '') {?>
                                                        <p>Recojo: <?php echo $_smarty_tpl->tpl_vars['row']->value['diarecojo'];?>
</p>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['tiene_dedicatoria'] != '0') {?>
                                                        <p>Dedicatoria: <?php echo $_smarty_tpl->tpl_vars['row']->value['tiene_dedicatoria'];?>
</p>
                                                    <?php }?>

                                                </div>
                                            </div>



                                        </div>
                                        <div class="table-item text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value['quantity'];?>
</div>
                                        <div class="table-item text-right"><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['neto'],2);?>
</div>
                                        <div class="table-item text-right itemtotal">
                                            <?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['neto']*$_smarty_tpl->tpl_vars['row']->value['quantity']),2);?>

                                        </div>
                                    </div>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </div>
                    </div>
                    <hr>
                    <div class="totales_compra">
                        <div class="subtotal">
                            <div class="subtotalCheckout">
                                <p>Sub-Total : </p>
                                <p>S/ <span id="montoSubT">0.00</span></p>
                            </div>
                            <div class="envioCheckout">
                                <p>Envio : </p>
                                <p>S/<span id="envio">0.00</span></p>
                            </div>
                            <hr>
                        </div>
                        <div class="totalCheckout">
                            <p>TOTAL : </p>
                            <p>S/ <span id="total">0.00</span></p>
                        </div>
                    </div>

                    <div class="buttons-save">
                        <div class="check_terms">
                            <input type="checkbox" id="privacidad">
                            <label for="terms">
                                <span></span>
                                Acepta nuestras <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/PoliticasPrivacidad" target="_blank">políticas de
                                    privacidad y tratamientos de datos </a>
                            </label>
                        </div>
                        <div class="check_terms">
                            <input type="checkbox" id="terms">
                            <label for="terms">
                                <span></span>
                                Acepta nuestros <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/TerminosCondiciones" target="_blank">términos &
                                    condiciones</a>
                            </label>
                        </div>
                        <div class="paganomas">
                            <button type="button" id="GrabaCompra" onclick="ClickOrderButton()"><b
                                    class="">PAGAR</b></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/alertify/alertify.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/util.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/checkout.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['urlwebpay']->value;?>
"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
