<?php
/* Smarty version 3.1.34-dev-7, created on 2024-08-27 15:42:42
  from 'C:\xampp\htdocs\chantilly\web\view\templates\layout\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66ce3a42b5cdc0_52882807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb87fe21dc82299a8bb1d199192990e71472a44a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\layout\\footer.tpl',
      1 => 1724791359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ce3a42b5cdc0_52882807 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="chat">
    <div class="content-chat" style="display: none; z-index: 3;">
        <div class="wrapper">
            <div class="title">La Casa del Chantilly</div>
            <div class="form">
                <div class="bot-inbox inbox">
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="msg-header">
                        <p>Hola, ¿cómo puedo ayudarte?</p>
                    </div>
                </div>
            </div>
            <div class="typing-field">
                <div class="input-data">
                    <input id="data" type="text" placeholder="Escribe algo aquí.." required>
                    <button id="send-btn">Enviar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="btnchat">
        <div class="btn-chat">
            <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/image_chat2.png" alt="" width="50">
        </div>
    </div>
</div>

<div class="chatwhatsapp">
    <div class="content-chatWspp" style="display: none; z-index: 2;">
        <div class="wrapper-wspp">
            <div class="title">
                <i class="fa-brands fa-whatsapp" style="color: #fff;"></i>

                Whatsapp
            </div>

            <div class="formWspp">
                <div class="wspp-inbox inbox">
                    <div class="msg-header">
                        <p>Buen día, de clic en "Abrir Chat" para ponerse en contacto con nosotros vía Whatsapp.</p>
                    </div>
                </div>
            </div>
            <div class="typing-field">
                <div class="send-wspp">
                    <button id="sendwspp">
                        <a id="whatsappLink" style="color: #fff;" href="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->whatsapp1;?>
" target="_blank">
                            Abrir Chat
                            <i class="fa fa-angle-double-right fa-beat"
                                style="--fa-animation-duration: 0.7s; color: #fff;"></i>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="btnwspp">
        <div class="btn-wspp">
            <i class="fa-brands fa-whatsapp" style="color: #fff;"></i>
        </div>
    </div>
</div>
<footer>
    <div id="container-info">
        <div class="footer-nosotros">
            <div class="title-footer">
                <h1>Nosotros</h1>
                <p><?php echo $_smarty_tpl->tpl_vars['empresa']->value->nosotros;?>

                </p>
            </div>
        </div>
        <div class="footer-links">
            <div class="title-footer">
                <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/<?php echo $_smarty_tpl->tpl_vars['empresa']->value->logo_footer;?>
" alt="" width="20%"
                        height="20%"></a>
                <h1>Redes sociales</h1>
                <div class="icons-redesSociales">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->facebook;?>
"><i class="fa-brands fa-facebook"></i></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->instagram;?>
"><i class="fa-brands fa-instagram"></i></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->twitter;?>
"><i class="fa-brands fa-twitter"></i></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->tiktok;?>
"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['empresa']->value->whatsapp1;?>
" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-metodos-pago">
            <div class="title-footer">
                <h1>Métodos de Pago</h1>
            </div>
            <div class="icons-footer">
                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/icon-plin.png" alt="" width="16%">
                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/icon-yape.png" alt="" width="15%">
                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/icon-mastercard.png" alt="" width="25%">
                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/icon-visa.png" alt="" width="23%">
            </div>
        </div>
    </div>

    <body>
</footer>



<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/alertify/alertify.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/util.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/main.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/login.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/chantillyjs/sticky-chat.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179857636266ce3a42b5c475_16881726', "scripts");
?>


</body>

</html><?php }
/* {block "scripts"} */
class Block_179857636266ce3a42b5c475_16881726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_179857636266ce3a42b5c475_16881726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<?php
}
}
/* {/block "scripts"} */
}
