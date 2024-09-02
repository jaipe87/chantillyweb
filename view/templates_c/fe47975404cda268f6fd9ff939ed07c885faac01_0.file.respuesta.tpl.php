<?php
/* Smarty version 3.1.34-dev-7, created on 2024-09-02 13:23:56
  from 'C:\xampp\htdocs\chantilly\web\view\templates\respuesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66d602bc1e65d3_65362637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe47975404cda268f6fd9ff939ed07c885faac01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\respuesta.tpl',
      1 => 1725301339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d602bc1e65d3_65362637 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/respuesta.css">

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
        <div class="container">

            <div class="header-cards pt-20">
                <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            </div>

            <div class="terminos">
                <?php if (!empty('data_transaction')) {?>
                    <?php if ($_smarty_tpl->tpl_vars['data_transaction']->value["statusCode"] == $_smarty_tpl->tpl_vars['HTTP_CODE_OK']->value && $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["actionCode"] == "000") {?>
                        <h3 class="mb-20 success"><?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["actionDescripcion"];?>
</h3>
                        <div class="table">
                            <div class="table-body">
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Nro. Pedido</div>
                                    <div class="table-item text-left border-left">
                                        <?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["body"]["nroPedido"];?>
 </div>

                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Tarjeta Habiente</div>
                                    <div class="table-item text-left border-left">
                                        <?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["body"]["usuario"];?>
 </div>

                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Fecha y hora de la transacción</div>
                                    <div class="table-item text-left border-left"> <?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["body"]["Fecha"];?>

                                    </div>

                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Importe Pagado</div>
                                    <div class="table-item text-left border-left">
                                        <?php echo number_format($_smarty_tpl->tpl_vars['data_transaction']->value["data"]["body"]["amount"],2);?>
 </div>

                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Moneda</div>
                                    <div class="table-item text-left border-left">
                                        <?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["body"]["currency"];?>
 </div>

                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Productos</div>
                                    <div class="table-item text-left border-left">


                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["body"]["productos"], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>

                                            <div class="detalle_item">
                                                <div class="descri">
                                                    <i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['row']->value->descri_corta;?>

                                                </div>
                                                <ul>
                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value->porcion != '') {?>
                                                        <li>Porciones: <?php echo $_smarty_tpl->tpl_vars['row']->value->porcion;?>
</li>
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value->medidas != '') {?>
                                                        <li>Medidas: <?php echo $_smarty_tpl->tpl_vars['row']->value->medidas;?>
</li>
                                                    <?php }?>

                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value->keke != '') {?>
                                                        <li>Keke: <?php echo $_smarty_tpl->tpl_vars['row']->value->keke;?>
</li>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value->relleno != '') {?>
                                                        <li>Relleno: <?php echo $_smarty_tpl->tpl_vars['row']->value->relleno;?>
</li>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value->diarecojo != '') {?>
                                                        <li>Recojo: <?php echo $_smarty_tpl->tpl_vars['row']->value->diarecojo;?>
</li>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value->dedicatoria != '') {?>
                                                        <li>Dedicatoria: <?php echo $_smarty_tpl->tpl_vars['row']->value->dedicatoria;?>
</li>
                                                    <?php }?>
                                                </ul>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Tarjeta</div>
                                    <div class="table-item text-left border-left"> <?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["body"]["card"];?>

                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Marca de Tarjeta</div>
                                    <div class="table-item text-left border-left"> <?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["body"]["marca"];?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="respuesta_button buttons-save">
                            <button type="button" onclick="ImprimirTrans()"><b class="">Imprimir</b></button>
                            <button type="button" onclick="SeguirComprando()"><b class="">Seguir comprando</b></button>
                        </div>

                    <?php } elseif ($_smarty_tpl->tpl_vars['data_transaction']->value["statusCode"] == $_smarty_tpl->tpl_vars['HTTP_CODE_BAD_REQUEST']->value) {?>
                        <h3 class="mb-20 error"><?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["errorMessage"];?>
</h3>
                        <div class="table">
                            <div class="table-body">
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Nro. Pedido</div>
                                    <div class="table-item text-left border-left">
                                        <?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["nropedido"];?>
 </div>
                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Fecha de la Transacción</div>
                                    <div class="table-item text-left border-left"> <?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["fecha"];?>

                                    </div>

                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Motivo de Rechazo</div>
                                    <div class="table-item text-left border-left">
                                        <?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["actionDescripcion"];?>

                                    </div>

                                </div>

                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Tarjeta</div>
                                    <div class="table-item text-left border-left"> <?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["card"];?>

                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Marca de Tarjeta</div>
                                    <div class="table-item text-left border-left"> <?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["marca"];?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="respuesta_button buttons-save">
                            <button type="button" onclick="RegresarCheckOut()"><b class="">Regresar al Checkout</b></button>

                        </div>
                    <?php } else { ?>
                        <h3 class="mb-20 error"><?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["errorMessage"];?>
</h3>
                        <div class="table">
                            <div class="table-body">
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Nro. Pedido</div>
                                    <div class="table-item text-left border-left">
                                        <?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["body"]["nropedido"];?>
 </div>
                                </div>
                                <div class="table-row">
                                    <div class="table-item text-left background-grey">Motivo de Rechazo</div>
                                    <div class="table-item text-left border-left"><?php echo $_smarty_tpl->tpl_vars['data_transaction']->value["data"]["errorMessage"];?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="respuesta_button buttons-save">
                            <button type="button" onclick="RegresarCheckOut()"><b class="">Regresar al Checkout</b></button>

                        </div>
                    <?php }?>
                <?php }?>



            </div>


        </div>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/respuesta.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
