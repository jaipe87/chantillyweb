<?php
/* Smarty version 3.1.34-dev-7, created on 2024-06-25 12:12:04
  from 'C:\xampp\htdocs\chantilly_smarty\admin\view\templates\layout\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_667afa64b6ea94_16496374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7056a84b30e74e378cf276f3f77ead58c58c537' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly_smarty\\admin\\view\\templates\\layout\\footer.tpl',
      1 => 1719335522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667afa64b6ea94_16496374 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <a href="https://api.whatsapp.com/send?phone=+51955122100&text=Quisiera%20hacer%20un%20pedido..."
                                id="whatsappLink" style="color: #fff;">
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
                    <p>Somos una empresa apasionada en elaboracion y venta de tortas, postres y bocaditos.
                        Así mismo ofrecemos la mejor calidad entre otros.
                    </p>
                </div>
            </div>
            <div class="footer-links">
                <div class="title-footer">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTTP']->value;?>
/index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/icon-wthout-fondo.png" alt="" width="20%" height="20%"></a>
                    <h1>Redes sociales</h1>
                    <div class="icons-redesSociales">
                        <a href="https://www.facebook.com/LaCasadelChantillyOficial"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/lacasadelchantilly/?hl=es"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                        <a
                            href="https://api.whatsapp.com/send?phone=+51955122100&text=Quisiera%20hacer%20un%20pedido..."><i
                                class="fa-brands fa-whatsapp"></i></a>
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
 src="js/slider.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/search-category.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/pagination.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/sticky-chat.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/send-message.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/send-wspp.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
