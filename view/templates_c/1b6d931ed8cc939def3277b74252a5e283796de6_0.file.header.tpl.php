<?php
/* Smarty version 3.1.34-dev-7, created on 2024-06-25 12:20:09
  from 'C:\xampp\htdocs\chantilly_smarty\admin\view\templates\layout\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_667afc49302544_20996817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b6d931ed8cc939def3277b74252a5e283796de6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly_smarty\\admin\\view\\templates\\layout\\header.tpl',
      1 => 1719335975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667afc49302544_20996817 (Smarty_Internal_Template $_smarty_tpl) {
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
/icons/icono.png">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/style.css">
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
><a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;
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
                <button id="whatsappLink2" class="btn-1"
                    onclick="window.open('https://api.whatsapp.com/send?phone=+51955122100&text=Quisiera%20hacer%20un%20pedido...', '_blank');">
                    ¡Pide aquí!
                </button>

                <div class="contenedor">
                    <a class="btn-carrito" href="carrito.html"><img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/carrito.png" alt="" width="50px"></a>
                    <div class="contador">0</div>
                </div>
            </div>
        </nav>
    </header>
    <div class="scrollmenu">
        <div id="grid">
            <div class="name-section">
                <div href="#" class="content-grid">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/Iconos-02.png" alt="" width="50%" height="45%">
                    <p>Packs <br>Cumpleaños</p>
                </div>
            </div>
            <div class="name-section">
                <a href="#" class="content-grid">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/Iconos-03.png" alt="" width="50%" height="45%">
                    <p>Tortas de <br> octubre</p>
                </a>
            </div>
            <div class="name-section">
                <a href="#" class="content-grid">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/Iconos-04.png" alt="" width="50%" height="45%">
                    <p>Tortas <br>baby shower</p>
                </a>
            </div>
            <div class="name-section">
                <a href="#" class="content-grid">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/Iconos-05.png" alt="" width="50%" height="45%">
                    <p>Tortas 1er<br> añito</p>
                </a>
            </div>
            <div class="name-section">
                <a href="#" class="content-grid">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/Iconos-06.png" alt="" width="50%" height="45%">
                    <p>Tortas <br>infantiles</p>
                </a>
            </div>
            <div class="name-section">
                <a href="#" class="content-grid">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/Iconos-07.png" alt="" width="50%" height="45%">
                    <p>Tortas de <br> bautizo</p>
                </a>
            </div>
            <div class="name-section">
                <a href="#" class="content-grid">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/Iconos-08.png" alt="" width="50%" height="45%">
                    <p>Tortas de <br>comunión</p>
                </a>
            </div>
            <div class="name-section">
                <a href="#" class="content-grid">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/Iconos-09.png" alt="" width="50%" height="45%">
                    <p>Tortas de <br>confirmación</p>
                </a>
            </div>
            <div class="name-section">
                <a href="#" class="content-grid">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/Iconos-10.png" alt="" width="50%" height="50%">
                    <p>Tortas de <br>graduación</p>
                </a>
            </div>
            <div class="name-section">
                <a href="#" class="content-grid">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/Iconos-11.png" alt="" width="50%" height="60%">
                    <p>Tortas de <br>15 años</p>
                </a>
            </div>
            <div class="name-section">
                <a href="#" class="content-grid">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/Iconos-12.png" alt="" width="50%" height="60%">
                    <p>Tortas de <br>18 años</p>
                </a>
            </div>
            <div class="name-section">
                <a href="#" class="content-grid">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/Iconos-13.png" alt="" width="50%" height="60%">
                    <p>Tortas de <br>matrimonio</p>
                </a>
            </div>
            <div class="name-section">
                <a href="#" class="content-grid">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/Iconos-14.png" alt="" width="50%" height="60%">
                    <p>Tortas de <br>50 años y más</p>
                </a>
            </div>
        </div>
    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_702244289667afc49301354_28421350', "content");
?>

    
    <?php }
/* {block "content"} */
class Block_702244289667afc49301354_28421350 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_702244289667afc49301354_28421350',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                               


    <?php
}
}
/* {/block "content"} */
}
