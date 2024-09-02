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
    <link rel="stylesheet" href="{$asset}/css/media-queries.css">
    <link rel="stylesheet" href="{$asset}/css/checkout.css">
    <script src="{$asset}/js/lib/jquery/jquery-3.5.1.min.js"></script>
    <script>
        const urlpath = "{$RUTA_HTTP}";
        const assets = "{$asset}";
    </script>
</head>

<body>
    <div class="jm-loadingpage"></div>
    <div class="jm-cargaTemp"></div>
    <header class="header_checkout">
        <nav class="nav_checkout">


            <div class="logo_checkout">
                <a href="./">
                    <img class="align-content pl-3 pr-3" src="{$asset}/images/{$empresa->logo_header}?v={0|rand:100}"
                        alt="" width="320" height="50">
                </a>
            </div>

            <div class="contacto_checkout">
                <p class="">¿Necesitas ayuda?
                    Escríbenos al <a href="{$empresa->whatsapp1}" target="_blank" class=""> <b
                            class="">{$empresa->whatsapp}</b> </a></p>
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

                        <div class="form_cliente" data-info="{$cliente->verified_checkout}">

                            <div class="datos_cliente">
                                <div class="form_control">
                                    <div class="control">
                                        <label for="">Nombres</label>
                                        {if $cliente->verified_checkout==0}
                                            <input type="text" id="txtNombre" name="nombres" placeholder="Nombre" required
                                                value="{$cliente->nom_usuario}" />
                                        {else}
                                            <input type="text" id="txtNombre" name="nombres" placeholder="Nombre" required
                                                value="{$cliente->nom_usuario}" disabled />
                                        {/if}

                                    </div>

                                    <div class="control">
                                        <label for="">Apellidos</label>
                                        {if $cliente->verified_checkout==0}
                                            <input type="text" id="txtApPaterno" name="apellidos" placeholder="Apellidos"
                                                value="{$cliente->ape_usuario}" required />
                                        {else}
                                            <input type="text" id="txtApPaterno" name="apellidos" placeholder="Apellidos"
                                                value="{$cliente->ape_usuario}" required disabled />
                                        {/if}

                                    </div>
                                </div>
                                <div class="form_control">
                                    <div class="control">
                                        <label for="">Dirección</label>

                                        {if $cliente->verified_checkout==0}
                                            <input type="text" id="direccion" name="direccion"
                                                value="{$cliente->direc_usuario}" placeholder="Dirección" required />
                                        {else}
                                            <input type="text" id="direccion" name="direccion"
                                                value="{$cliente->direc_usuario}" placeholder="Dirección" required
                                                disabled />
                                        {/if}



                                    </div>
                                    <div class="control">
                                        <label for="">Celular</label>

                                        {if $cliente->verified_checkout==0}
                                            <input type="tel" id="telefono" name="celular" value="{$cliente->cel_usuario}"
                                                placeholder="Teléfono" maxlength="11" required />
                                        {else}
                                            <input type="tel" id="telefono" name="celular" value="{$cliente->cel_usuario}"
                                                placeholder="Teléfono" maxlength="11" required disabled />
                                        {/if}


                                    </div>
                                </div>
                                <div class="form_control">
                                    <div class="control">
                                        <label for="">Documento de Identidad</label>


                                        {if $cliente->verified_checkout==0}
                                            <select name="tipdoc" id="sltctipodocumento">
                                                {if !empty($lstDocumentos)}
                                                    {assign var="lodoc" value=8}
                                                    {foreach $lstDocumentos as $row}
                                                        {if $row->cod==$cliente->tipdoc_usuario }
                                                            {assign var="lodoc" value=$row->lo}
                                                            <option value="{$row->cod}" selected>{$row->descri} </option>
                                                        {else}
                                                            <option value="{$row->cod}">{$row->descri}</option>
                                                        {/if}
                                                    {/foreach}
                                                {/if}
                                            </select>
                                        {else}
                                            <select name="tipdoc" id="sltctipodocumento" disabled>
                                                {if !empty($lstDocumentos)}
                                                    {assign var="lodoc" value=8}
                                                    {foreach $lstDocumentos as $row}
                                                        {if $row->cod==$cliente->tipdoc_usuario }
                                                            {assign var="lodoc" value=$row->lo}
                                                            <option value="{$row->cod}" selected>{$row->descri} </option>
                                                        {else}
                                                            <option value="{$row->cod}">{$row->descri}</option>
                                                        {/if}
                                                    {/foreach}
                                                {/if}
                                            </select>
                                        {/if}

                                    </div>

                                    <div class="control">
                                        <label for="">N° de Documento de Identidad</label>


                                        {if $cliente->verified_checkout==0}
                                            <input type="input" id="txtdocumento" value="{$cliente->nrodoc_usuario}"
                                                name="nrodoc" placeholder="Documento" maxlength="{$lodoc}">
                                        {else}
                                            <input type="input" id="txtdocumento" value="{$cliente->nrodoc_usuario}"
                                                name="nrodoc" placeholder="Documento" maxlength="{$lodoc}" disabled>
                                        {/if}



                                    </div>
                                </div>
                            </div>
                            <div class="botones-checkout">
                                {if $cliente->verified_checkout==0}
                                    <button type="button" class="button_checkout" id="btnUpdatecliente"
                                        onclick="actualizacliente()">Confirma tus
                                        datos</button>
                                {else}
                                    <div class="mt-10">
                                        <small class="edit_cart"><a onclick="EditarDatos()" class=""><i
                                                    class="fa-solid fa-pencil"></i>
                                                Editar Datos</a> </small>
                                    </div>

                                {/if}

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
                                    {if $delivery}
                                        <label class="content-input" for="deliveryRadio">
                                            <input type="radio" id="deliveryRadio" name="entrega">Delivery
                                        </label>
                                    {/if}
                                </div>


                            </div>

                            <div class="datos_detalle_entrega">

                                <div id="recojo-tienda">
                                    <div class="detalle_recojo_tienda">
                                        <h4 id="eligeTienda">Elige el local más cercano a ti: </h4>
                                        <div class="tiendas">

                                        </div>
                                        <div class="direccionTienda">
                                            {foreach $lstLocales as $row}
                                                <div class="direccion tienda{$row->id}" data-id="{$row->id}">
                                                    <div class="direccionGroup">
                                                        <h3>{$row->nombre_local}</h3>
                                                        <button id="btnTienda" onclick="EsconderTienda()"><u>Cambiar
                                                                tienda</u></button>
                                                    </div>
                                                    <div class="direccion_tienda_datos">
                                                        <h5>{$row->direccion} </h5>
                                                        <small>{$row->dias_atencion} de {$row->horario_ini} a
                                                            {$row->horario_fin} horas</small>
                                                    </div>
                                                    <div class="mapa">
                                                        {$row->frame_google}
                                                    </div>
                                                </div>
                                            {/foreach}
                                        </div>
                                    </div>
                                </div>
                                {if $delivery}
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
                                                            {foreach $lstDepartamento as $row}


                                                                <option value="{$row->coddep}">{$row->nomdep}</option>

                                                            {/foreach}
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
                                                            value="{$cliente->direc_usuario}"
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
                                {/if}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form2" action="">
                <div class="sumary">
                    <div class="sumary_header">
                        <h2>Resumen de la compra </h2>
                        <small class="edit_cart"><a onclick="EditCart('{$RUTA_HTTP}')" class=""><i
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
                            <input type="hidden" id="pm" value="{$numpedido}">
                            {assign var="total" value="0.00"}
                            {if !empty($cart)}
                                {foreach $cart as $row}
                                    {assign var="total" value=$total+($row['neto']*$row['quantity'])}
                                    <div class="table-row">
                                        <div class="table-item text-center"><img src="{$asset}/{$row['img']}"
                                                alt="{$row['descri_corta']}"></div>
                                        <div class="table-item text-left">
                                            <div class="detalle_item">
                                                <div class="descri">
                                                    {$row['descri_corta']}
                                                </div>
                                                <div class="detalle_torta">
                                                    {if $row['porcion']!=''}
                                                        <p>Porciones: {$row['porcion']}</p>
                                                    {/if}

                                                    {if $row['medidas']!=''}
                                                        <p>Medidas: {$row['medidas']}</p>
                                                    {/if}

                                                    {if $row['keke']!=''}
                                                        <p>Keke: {$row['keke']}</p>
                                                    {/if}
                                                    {if $row['relleno']!=''}
                                                        <p>Relleno: {$row['relleno']}</p>
                                                    {/if}
                                                    {if $row['diarecojo']!=''}
                                                        <p>Recojo: {$row['diarecojo']}</p>
                                                    {/if}
                                                    {if $row['tiene_dedicatoria']!='0'}
                                                        <p>Dedicatoria: {$row['tiene_dedicatoria']}</p>
                                                    {/if}

                                                </div>
                                            </div>



                                        </div>
                                        <div class="table-item text-center">{$row['quantity']}</div>
                                        <div class="table-item text-right">{$row['neto']|number_format:2}</div>
                                        <div class="table-item text-right itemtotal">
                                            {($row['neto']*$row['quantity'])|number_format:2}
                                        </div>
                                    </div>

                                {/foreach}
                            {/if}
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
                                Acepta nuestras <a href="{$RUTA_HTTP}/PoliticasPrivacidad" target="_blank">políticas de
                                    privacidad y tratamientos de datos </a>
                            </label>
                        </div>
                        <div class="check_terms">
                            <input type="checkbox" id="terms">
                            <label for="terms">
                                <span></span>
                                Acepta nuestros <a href="{$RUTA_HTTP}/TerminosCondiciones" target="_blank">términos &
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

    <script type="text/javascript" src="{$asset}/js/lib/alertify/alertify.min.js"></script>
    <script type="text/javascript" src="{$asset}/js/util.js?v={0|rand:100}"></script>
    <script type="text/javascript" src="{$asset}/js/form/checkout.js?v={0|rand:100}"></script>
    <script type="text/javascript" src="{$urlwebpay}"></script>
</body>

</html>