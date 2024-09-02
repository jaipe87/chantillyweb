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
    <link rel="stylesheet" href="{$asset}/css/respuesta.css">

    <script src="{$asset}/js/lib/jquery/jquery-3.5.1.min.js"></script>
    <script>
        const urlpath = "{$RUTA_HTTP}";
        const assets = "{$asset}";
    </script>
</head>

<body>
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
        <div class="container">

            <div class="header-cards pt-20">
                <h1>{$titulo}</h1>
            </div>

            <div class="terminos">
                {if !empty(data_transaction)}
                    {if $data_transaction["statusCode"] == $HTTP_CODE_OK  &&  $data_transaction["data"]["actionCode"]=="000"}
                        <h3 class="mb-20 success">{$data_transaction["data"]["actionDescripcion"]}</h3>
                        <div class="table">
                            <div class="table-body">
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Nro. Pedido</div>
                                    <div class="table-item text-left border-left">
                                        {$data_transaction["data"]["body"]["nroPedido"]} </div>

                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Tarjeta Habiente</div>
                                    <div class="table-item text-left border-left">
                                        {$data_transaction["data"]["body"]["usuario"]} </div>

                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Fecha y hora de la transacción</div>
                                    <div class="table-item text-left border-left"> {$data_transaction["data"]["body"]["Fecha"]}
                                    </div>

                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Importe Pagado</div>
                                    <div class="table-item text-left border-left">
                                        {$data_transaction["data"]["body"]["amount"]|number_format:2} </div>

                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Moneda</div>
                                    <div class="table-item text-left border-left">
                                        {$data_transaction["data"]["body"]["currency"]} </div>

                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Productos</div>
                                    <div class="table-item text-left border-left">


                                        {foreach $data_transaction["data"]["body"]["productos"] as $row}

                                            <div class="detalle_item">
                                                <div class="descri">
                                                    <i class="fa fa-check"></i> {$row->descri_corta}
                                                </div>
                                                <ul>
                                                    {if $row->porcion!=''}
                                                        <li>Porciones: {$row->porcion}</li>
                                                    {/if}

                                                    {if $row->medidas!=''}
                                                        <li>Medidas: {$row->medidas}</li>
                                                    {/if}

                                                    {if $row->keke!=''}
                                                        <li>Keke: {$row->keke}</li>
                                                    {/if}
                                                    {if $row->relleno!=''}
                                                        <li>Relleno: {$row->relleno}</li>
                                                    {/if}
                                                    {if $row->diarecojo!=''}
                                                        <li>Recojo: {$row->diarecojo}</li>
                                                    {/if}
                                                    {if $row->dedicatoria!=''}
                                                        <li>Dedicatoria: {$row->dedicatoria}</li>
                                                    {/if}
                                                </ul>
                                            </div>
                                        {/foreach}
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Tarjeta</div>
                                    <div class="table-item text-left border-left"> {$data_transaction["data"]["body"]["card"]}
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Marca de Tarjeta</div>
                                    <div class="table-item text-left border-left"> {$data_transaction["data"]["body"]["marca"] }
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="respuesta_button buttons-save">
                            <button type="button" onclick="ImprimirTrans()"><b class="">Imprimir</b></button>
                            <button type="button" onclick="SeguirComprando()"><b class="">Seguir comprando</b></button>
                        </div>

                    {elseif $data_transaction["statusCode"] == $HTTP_CODE_BAD_REQUEST  }
                        <h3 class="mb-20 error">{$data_transaction["data"]["errorMessage"]}</h3>
                        <div class="table">
                            <div class="table-body">
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Nro. Pedido</div>
                                    <div class="table-item text-left border-left">
                                        {$data_transaction["data"]["nropedido"]} </div>
                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Fecha de la Transacción</div>
                                    <div class="table-item text-left border-left"> {$data_transaction["data"]["fecha"]}
                                    </div>

                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Motivo de Rechazo</div>
                                    <div class="table-item text-left border-left">
                                        {$data_transaction["data"]["actionDescripcion"]}
                                    </div>

                                </div>

                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Tarjeta</div>
                                    <div class="table-item text-left border-left"> {$data_transaction["data"]["card"]}
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Marca de Tarjeta</div>
                                    <div class="table-item text-left border-left"> {$data_transaction["data"]["marca"] }
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="respuesta_button buttons-save">
                            <button type="button" onclick="RegresarCheckOut()"><b class="">Regresar al Checkout</b></button>

                        </div>
                    {else}
                        <h3 class="mb-20 error">{$data_transaction["data"]["errorMessage"]}</h3>
                        <div class="table">
                            <div class="table-body">
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Nro. Pedido</div>
                                    <div class="table-item text-left border-left">
                                        {$data_transaction["data"]["body"]["nropedido"]} </div>
                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Motivo de Rechazo</div>
                                    <div class="table-item text-left border-left">{$data_transaction["data"]["errorMessage"]}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="respuesta_button buttons-save">
                            <button type="button" onclick="RegresarCheckOut()"><b class="">Regresar al Checkout</b></button>

                        </div>
                    {/if}
                {/if}



            </div>


        </div>
    </div>

    <script type="text/javascript" src="{$asset}/js/form/respuesta.js?v={0|rand:100}"></script>
</body>

</html>