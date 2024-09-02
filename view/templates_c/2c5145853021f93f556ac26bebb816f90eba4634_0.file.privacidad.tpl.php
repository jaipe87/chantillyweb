<?php
/* Smarty version 3.1.34-dev-7, created on 2024-08-22 14:52:58
  from 'C:\xampp\htdocs\chantilly\web\view\templates\privacidad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66c7971a544817_72343055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c5145853021f93f556ac26bebb816f90eba4634' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\privacidad.tpl',
      1 => 1724356365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c7971a544817_72343055 (Smarty_Internal_Template $_smarty_tpl) {
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
                <p>En COMERCIALIZADORA AR LA CASA DEL CHANTILLY S.A.C., nos comprometemos a proteger la privacidad de
                    nuestros clientes y usuarios. Esta Política de Privacidad describe cómo recopilamos, utilizamos y
                    protegemos tu información personal, en cumplimiento con la Ley de Protección de Datos Personales
                    (Ley N° 29733) y su reglamento.</p>

                <p><strong>2. Información que Recopilamos</strong></p>
                <ul>
                    <li><strong>Datos de contacto:</strong> nombres y apellidos, dirección, correo electrónico, número de teléfono.
                    </li>
                    <li><strong>Información de pago:</strong> detalles de la tarjeta de crédito o débito, información de
                        facturación.</li>
                    <li><strong>Datos de navegación:</strong> dirección IP, tipo de navegador, páginas visitadas, tiempo
                        de navegación.</li>
                </ul>

                <p><strong>3. Uso de la Información</strong></p>
                <ul>
                    <li>Procesar y gestionar tus pedidos.</li>
                    <li>Mejorar nuestro sitio web y servicios.</li>
                    <li>Enviar comunicaciones promocionales (solo si has dado tu consentimiento).</li>
                    <li>Cumplir con obligaciones legales y regulatorias.</li>
                </ul>

                <p><strong>4. Compartir Información</strong></p>
                <p>No vendemos, alquilamos ni compartimos tu información personal con terceros, excepto en los
                    siguientes casos:</p>
                <ul>
                    <li><strong>Proveedores de servicios:</strong> compartimos información con terceros que nos ayudan a
                        operar nuestro sitio web y procesar tus pedidos.</li>
                    <li><strong>Cumplimiento legal:</strong> podemos divulgar información si es requerido por la ley o
                        en respuesta a solicitudes legales.</li>
                </ul>

                <p><strong>5. Seguridad de la Información</strong></p>
                <p>Implementamos medidas de seguridad adecuadas para proteger tu información personal contra el acceso
                    no autorizado, la alteración, divulgación o destrucción, en cumplimiento con las normas de seguridad
                    establecidas por la Ley N° 29733.</p>

                <p><strong>6. Cookies</strong></p>
                <p>Utilizamos cookies y tecnologías similares para mejorar tu experiencia en nuestro sitio web. Puedes
                    configurar tu navegador para rechazar cookies, pero esto puede afectar la funcionalidad del sitio.
                </p>

                <p><strong>7. Derechos del Usuario</strong></p>
                <p>Tienes derecho a acceder, rectificar, cancelar y oponerte al tratamiento de tus datos personales.
                    Para ejercer estos derechos, por favor contáctanos a través de <a
                        href="mailto:comercializadora.chantilly@gmail.com">comercializadora.chantilly@gmail.com</a>.
                    Responderemos a tu solicitud en los plazos establecidos por la ley.</p>

                <p><strong>8. Cambios en la Política de Privacidad</strong></p>
                <p>Nos reservamos el derecho de modificar esta Política de Privacidad en cualquier momento. Las
                    modificaciones entrarán en vigor inmediatamente después de su publicación en el sitio web. Te
                    notificaremos sobre cualquier cambio significativo.</p>

                <p><strong>9. Contacto</strong></p>
                <p>Si tienes alguna pregunta o inquietud sobre nuestra Política de Privacidad, no dudes en contactarnos
                    a través de <a
                        href="mailto:comercializadora.chantilly@gmail.com">comercializadora.chantilly@gmail.com</a>.</p>

            </div>


        </div>
    </div>


</body>

</html><?php }
}
