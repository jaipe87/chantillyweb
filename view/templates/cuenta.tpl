{extends file="layout/master.tpl"}
{block name="tematicas"}
    {include file="layout/sections/scroll_tematica.tpl"}
{/block}

{block name="styles"}
    <link rel="stylesheet" href="{$asset}/css/form/cuenta.css">

{/block}

{block name="content"}
    <hr id="separacion2">
    <br>
    <section id="informacion">
        <div class="container">

            <div class="info_usuario">



                <div class="row_info">
                    <a id="identity-link" href="{$RUTA_HTTP}/Cuenta/mis_datos" class="">
                        <span class="link-item"><i class="fa-solid fa-user"></i>INFORMACIÓN</span>
                    </a>
                    <a id="history-link" class="" href="{$RUTA_HTTP}/Cuenta/mis_pedidos">
                        <span class="link-item"><i class="fa fa-calendar"></i>HISTORIAL Y DETALLES DE MIS PEDIDOS</span>
                    </a>
                </div>
                <div class="row_info">

                    <button type="button" id="BtnCerrarSesion"> <i class="fa-solid fa-up-right-from-square "></i> <b
                            class="">CERRAR SESIÓN</b></button>

                </div>



            </div>



        </div>
    </section>
{/block}

{block name="scripts"}
    <script src="{$asset}/js/lib/chosen/chosen.jquery.min.js"></script>
    <script src="{$asset}/js/lib/datepicker/datepicker.min.js"></script>
    <script src="{$asset}/js/lib/datepicker/datepicker.es-ES.js"></script>
    <script src="{$asset}/js/form/cuenta.js?v={0|rand:100}"></script>
{/block}