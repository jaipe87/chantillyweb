

<footer>
    <div id="container-info">
        <div class="footer-nosotros">
            <div class="title-footer">
                <h1>Nosotros</h1>
                <p>{$empresa->nosotros}
                </p>
            </div>
        </div>
        <div class="footer-links">
            <div class="title-footer">
                <a href="{$RUTA_HTTP}"><img src="{$asset}/images/icons/{$empresa->logo_footer}" alt="" width="20%"
                        height="20%"></a>
                <h1>Redes sociales</h1>
                <div class="icons-redesSociales">
                    <a href="{$empresa->facebook}"><i class="fa-brands fa-facebook"></i></a>
                    <a href="{$empresa->instagram}"><i class="fa-brands fa-instagram"></i></a>
                    <a href="{$empresa->twitter}"><i class="fa-brands fa-twitter"></i></a>
                    <a href="{$empresa->tiktok}"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="{$empresa->whatsapp1}" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-metodos-pago">
            <div class="title-footer">
                <h1>Métodos de Pago</h1>
            </div>
            <div class="icons-footer">
                <img src="{$asset}/images/icons/icon-plin.png" alt="" width="16%">
                <img src="{$asset}/images/icons/icon-yape.png" alt="" width="15%">
                <img src="{$asset}/images/icons/icon-mastercard.png" alt="" width="25%">
                <img src="{$asset}/images/icons/icon-visa.png" alt="" width="23%">
            </div>
        </div>
    </div>

    <body>
</footer>
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
            <img src="{$asset}/images/image_chat2.png" alt="" width="50">
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
                        <a id="whatsappLink" style="color: #fff;" href="{$empresa->whatsapp1}" target="_blank">
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

<script src="{$asset}/js/lib/alertify/alertify.min.js"></script>
<script src="{$asset}/js/util.js?v={0|rand:100}"></script>
<script src="{$asset}/js/main.js?v={0|rand:100}"></script>


<script src="{$asset}/js/form/login.js?v={0|rand:100}"></script>



<script src="{$asset}/js/chantillyjs/sticky-chat.js?v={0|rand:100}"></script>
{block name="scripts"}


{/block}

</body>

</html>