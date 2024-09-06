{extends file="layout/master.tpl"}
{block name="styles"}
    <link rel="stylesheet" href="{$asset}/css/form/pedido.css">

{/block}
{block name="tematicas"}
    {include file="layout/sections/scroll_tematica.tpl"}
{/block}



{block name="content"}
    <div class="jm-cargaTemp"></div>
    <hr id="separacion2">
    <br>
    <section id="informacion">

        <div class="container">
            <div class="header-cards">
                <h1>{$titulo}</h1>
            </div>
            <br>
            <div class="info_usuario">


                <div class="header_compras">
                    <div class="buscador_compras">
                        <label for=""> <small>Filtrar por N° Pedido : </small> </label>
                        <div class="buscador">

                            <div class="input-group">
                                <input type="text" required class="form-control" placeholder="..." id="txtBuscar"
                                    autocomplete="off">
                                <div class="input-group-addon" onclick="" id="btnsearch">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="filtro_compras">
                        <label for=""> <small>Filtrar por fecha : </small> </label>
                        <select name="" id="cboFiltroCompras">
                            {if !empty($lista_fechas)}
                                {foreach $lista_fechas as $row}
                                    <option  data-t="{$row->tipo}" value="{$row->id}">{$row->descri}</option>
                                {/foreach}
                            {/if}
                        </select>
                    </div>

                </div>
                <hr>
                <div class="items_compras">
                    <!--
                    <div class="items">
                        <div class="compra">
                            <div class="header_item">
                                <div class="fecha_compra">
                                    <p class="">
                                       <b class=""> 24 de Junio 2024</b>
                                    </p>
                                </div>
                                <div class="importe_compra">
                                    <p class="">
                                       <b class="">S/ 100.00</b> 
                                    </p>
                                </div>
                            </div>
                            <div class="body_item">
                                <div class="detalle_item">
                                    <div class="producto">
                                        <div class="nropedido">
                                            <div class="pedido">
                                                <p> <b class="">Compra Nº 2556476327</b></p>

                                            </div>

                                        </div>
                                        <div class="item_estado">
                                            <div class="imagen">
                                                <img src="{$asset}/images/producto/postre/PG051.jpg" alt="" class="">
                                            </div>
                                            <div class="datos_pedido">
                                                <div class="situcion">
                                                    <div class="name_product">
                                                        <p> <b class=""><span class="">1 x</span> TORTA MOKA</b> </p>
                                                    </div>

                                                    <div class="toping_product">

                                                        <p>Porciones: 8 porciones</p>
                                                        <p>Medidas: Diámetro 18cm</p>
                                                        <p>Recojo: 2024-09-12</p>

                                                    </div>
                                                    <div class="neto_product">
                                                        <p> <b class=""> S/ <span class="">50.00</span></b> </p>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="item_estado">
                                            <div class="imagen">
                                                <img src="{$asset}/images/producto/postre/PG051.jpg" alt="" class="">
                                            </div>
                                            <div class="datos_pedido">
                                                <div class="situcion">

                                                    <div class="name_product">
                                                        <p> <b class=""><span class="">1 x</span> TORTA MOKA</b> </p>

                                                    </div>

                                                    <div class="toping_product">

                                                        <p>Porciones: 8 porciones</p>
                                                        <p>Medidas: Diámetro 18cm</p>
                                                        <p>Recojo: 2024-09-12</p>

                                                    </div>
                                                    <div class="neto_product">
                                                        <p> <b class=""> S/ <span class="">50.00</span></b> </p>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="detalle">
                                        <div class="grid_pedido">

                                            <div>
                                                <p class="title"> <i class="fa fa-check-square"></i>
                                                    <b class="">Tipo de Entrega</b> </p>
                                            </div>
                                            <div>
                                                <p  class="label">RECOJO EN TIENDA</p>
                                            </div>
                                            <div>
                                                <p class="title"><i class="fa fa-home"></i>  <b class="">Tienda</b></p>
                                            </div>
                                            <div>
                                                <p class="label">SAN FELIPE</p>
                                                <p class="label">Urb. SanFelipe Av.Universitaria Norte 10614 Comas Lima</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

-->

                </div>

                <div class="form_button row_buttons">
                    <button type="button" class="btn btn-danger btn-flat m-b-30 mt-30" id="btnvolver"
                        data-href='{$RUTA_HTTP}/Cuenta' onclick="locationdatahref(this,false)"> <i
                            class="fa-solid fa-arrow-left"></i> Volver a mi
                        Cuenta
                    </button>
                </div>
            </div>
        </div>
    </section>

{/block}

{block name="scripts"}
    <script src="{$asset}/js/lib/chosen/chosen.jquery.min.js"></script>
    <script src="{$asset}/js/lib/datepicker/datepicker.min.js"></script>
    <script src="{$asset}/js/lib/datepicker/datepicker.es-ES.js"></script>
    <script src="{$asset}/js/form/pedido.js?v={0|rand:100}"></script>
{/block}