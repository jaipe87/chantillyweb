<?php
/* Smarty version 3.1.34-dev-7, created on 2024-08-27 19:06:45
  from 'C:\xampp\htdocs\chantilly\web\view\templates\terminos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66ce6a15db3733_60528647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd264f16f37bbca9fd91ed38aa83010cc6e58312e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\terminos.tpl',
      1 => 1724356371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ce6a15db3733_60528647 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style>
        h1,
        h2 {
            color: #333;
        }

        p {
            margin: 10px 0;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin: 5px 0;
        }

        .section-title {
            font-weight: bold;
            margin-top: 20px;
        }

        .container {
            width: 80%;
            margin: auto;
        }

        .mt-10 {
            margin-top: 10px;
        }

        .mt-20 {
            margin-top: 20px;
        }

        .pt-20 {
            padding-top: 20px;
        }

        .terminos {
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
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

                <p><strong>1. Introducción</strong></p>
                <p>Bienvenido a COMERCIALIZADORA AR LA CASA DEL CHANTILLY S.A.C. identificada con RUC N° 20552150148,
                    desde
                    ahora LA CASA DEL CHANTILLY, con domicilio fiscal en LOTE. 176 INT. 2B FND. CHACRA CERRO (A 3 CDRAS
                    PARAD ACUARIO AV UNIVERSITARIA) LIMA - LIMA - COMAS. Al utilizar nuestro sitio web, aceptas cumplir
                    y estar sujeto a los siguientes términos y condiciones. Por favor, léelos detenidamente antes de
                    realizar cualquier compra.</p>

                <p><strong>2. Definiciones</strong></p>
                <ul>
                    <li><strong>Cliente:</strong> Persona que realiza una compra en nuestro sitio web.</li>
                    <li><strong>Tienda:</strong> LA CASA DEL CHANTILLY, el sitio web donde se realizan las compras.</li>
                    <li><strong>Productos:</strong> Bienes ofrecidos para la venta en nuestro sitio web.</li>
                </ul>

                <p><strong>3. Uso del Sitio Web</strong></p>
                <p>Al acceder a nuestro sitio web, garantizas que tienes al menos 18 años o que utilizas el sitio bajo
                    la supervisión de un adulto. Te comprometes a proporcionar información veraz y actualizada en todo
                    momento.</p>

                <p><strong>4. Proceso de Compra</strong></p>
                <ul>
                    <li><strong>Selección de Productos:</strong> Navega por nuestro catálogo y selecciona los productos
                        que deseas comprar.</li>
                    <li><strong>Carrito de Compras:</strong> Revisa tu selección en el carrito de compras y procede al
                        pago.</li>
                    <li><strong>Pago:</strong> Aceptamos varios métodos de pago, incluyendo tarjetas de crédito, débito
                        y billeteras digitales.</li>
                    <li><strong>Confirmación:</strong> Recibirás un correo electrónico de confirmación una vez que tu
                        pedido haya sido procesado.</li>
                </ul>

                <p><strong>5. Precios y Disponibilidad</strong></p>
                <p>Todos los precios están en SOLES e incluyen impuestos aplicables. Nos reservamos el derecho de
                    modificar los precios en cualquier momento. La disponibilidad de los productos está sujeta a cambios
                    sin previo aviso.</p>

                <p><strong>6. Envío y Entrega</strong></p>
                <ul>
                    <li><strong>Plazos de Entrega:</strong> Los tiempos de entrega varían según la ubicación y el método
                        de envío seleccionado.</li>
                    <li><strong>Costos de Envío:</strong> Los costos de envío se calcularán al finalizar la compra.</li>
                    <li><strong>Seguimiento:</strong> Proporcionaremos un número de seguimiento para que puedas rastrear
                        tu pedido.</li>
                </ul>

                <p><strong>7. Devoluciones y Reembolsos</strong></p>
                <ul>
                    <li><strong>Política de Devoluciones:</strong> Sólo se aceptan cambios y/o devoluciones dentro de
                        los 30 primeros minutos después de realizada la compra siempre y cuando el producto no haya sido
                        retirado de tienda. Solo se aceptan cambios y/o devoluciones de un producto que haya sido
                        retirado de tienda dentro de las 03 primeras horas después de realizada la compra con el
                        sustento correspondiente.</li>
                    <li><strong>Condiciones:</strong> Los productos deben estar en su estado original y sin usar.</li>
                    <li><strong>Reembolsos:</strong> Los reembolsos se procesarán a través del método de pago original.
                    </li>
                </ul>

                <p><strong>8. Privacidad</strong></p>
                <p>Nos comprometemos a proteger tu privacidad. Consulta nuestra <a
                        href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/PoliticasPrivacidad" target="_blank">Política de Privacidad</a>
                    para obtener más información sobre cómo recopilamos y utilizamos tus datos personales.</p>

                <p><strong>9. Propiedad Intelectual</strong></p>
                <p>Todo el contenido de este sitio web, incluyendo textos, gráficos, logotipos, imágenes y software, es
                    propiedad de COMERCIALIZADORA AR LA CASA DEL CHANTILLY S.A.C. y está protegido por las leyes de
                    propiedad intelectual.</p>

                <p><strong>10. Modificaciones de los Términos</strong></p>
                <p>Nos reservamos el derecho de modificar estos términos y condiciones en cualquier momento. Las
                    modificaciones entrarán en vigor inmediatamente después de su publicación en el sitio web.</p>

                <p><strong>11. Contacto</strong></p>
                <p>Si tienes alguna pregunta o inquietud, no dudes en contactarnos a través de <a
                        href="mailto:comercializadora.chantilly@gmail.com">comercializadora.chantilly@gmail.com</a>.</p>
            </div>


        </div>
    </div>


</body>

</html><?php }
}
