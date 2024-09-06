{extends file="layout/master.tpl"}
{block name="content"}
    <br>
    <div class="container-producto">

        <div id="producto" data-wb="{$producto->codart_web}" data-wb-cd="{$producto->cod_categoria}"
            pc="{$producto->mostrar_porciones}" kk="{$producto->mostrar_kekes}" rr="{$producto->mostrar_relleno}"
            dr="{$producto->mostrar_dia_recojo}" dd="{$producto->mostrar_dedicatoria}">
            <div class="vertical-images">
                <img id="vertical-image" style="visibility: hidden;" src="{$asset}{$producto->url}" alt="{$producto->descri_corta}" width="100%">
            </div>
            <div class="image-producto">
                <img id="image-producto" src="{$asset}{$producto->url}" alt="{$producto->descri_corta}" width="100%">
            </div>
            <div class="datos-producto">
                <div class="info-producto">
                    <div class="titulo">
                        <h3 id="title-product">{$producto->descri_corta}</h3>
                    </div>
                    <div class="precio">
                        {if $producto->precio_max == 0 }
                            <h2 id="price-product">S/ {$producto->precio_min}</h2>
                        {else}
                            <h2 id="price-product">S/ {$producto->precio_min} - S/ {$producto->precio_max} </h2>
                        {/if}

                    </div>
                    <div class="descripcion_larga">
                        <p> {$producto->descri_larga}</p>
                    </div>
                    {if $producto->tipo_producto == 1  || $producto->tipo_producto == 2   }
                        {if $producto->mostrar_porciones != 0}
                            <div class="elaboracion">
                                <img src="{$asset}/images/icons/check.png" alt="" width="4.5%">
                                <p>Tiempo elaboración: <span id="tiempo_elaboracion">-</span> horas </p>
                            </div>
                        {/if}
                    {/if}
                </div>
                <br>
                <div class="detalle-producto">

                    {if $producto->mostrar_porciones != 0 }
                        <div class="porciones">
                            <h5>Porciones</h5>
                            <select name="porciones" id="porciones">
                                <option selected value="0">Elige una opción</option>
                                {if !empty($lista_porciones)}
                                    {foreach $lista_porciones as $row}
                                        <option value="{$row->codart}" data-porcion="{$row->descri}">
                                            {$row->porciones} ({$row->porciones_detalle})</option>
                                    {/foreach}
                                {/if}
                            </select>
                        </div>
                    {/if}
                    {if $producto->mostrar_kekes != 0 }
                        <div class="cakes">
                            <h5>Opciones de cake</h5>
                            <select name="cakes" id="cakes">
                                <option selected value="0">Elige una opción</option>
                                {if !empty($lista_kekes)}
                                    {foreach $lista_kekes as $row}
                                        <option value="{$row->id_keke}">{$row->keke}</option>
                                    {/foreach}
                                {/if}
                            </select>
                        </div>
                    {/if}
                    {if $producto->mostrar_relleno != 0 }

                        <div class="relleno">
                            <h5>Opciones de relleno</h5>
                            <select name="relleno" id="relleno">
                                <option selected value="0">Elige una opción</option>

                            </select>
                        </div>
                    {/if}
                    {if $producto->mostrar_dia_recojo != 0 }
                        <div class="recojo">
                            <h5>Día de recojo</h5>
                            <input type="date" id="recojo" name="recojo" required pattern="\d{2}-\d{2}-\d{4}" />
                        </div>
                    {/if}
                    {if $producto->mostrar_dedicatoria != 0 }
                        <div class="dedicatoria">
                            <div>
                                <h5>Nombre o Dedicatoria</h5>
                                <!--  <p>(Tarjeta dentro del sobre adicional a la torta) + S/ <span id="adicional">{$impdedicatoria}</span> </p>-->
                            </div>


                            <textarea id="dedicatoria" cols="5" rows="5" placeholder="Escribe tu dedicatoria"
                                data-ok="0"></textarea>

                        </div>
                    {/if}

                    <div class="footer-detalle">


                        {if $producto_unico->precio!=0}
                            <div class="total">
                                <h2 id="total-product" data-precio="{$producto_unico->precio}"> S/
                                    <span>{$producto_unico->precio}</span> </h2>
                            </div>
                            <button id="btnProducto" data-id="{$producto_unico->codart}" data-k="0" data-r="0" data-f=""
                                data-d="">Agregar al carrito</button>
                        {else}
                            <div class="total">
                                <h2 id="total-product" data-precio="0.00">S/<span>-</span> </h2>
                            </div>
                            <button id="btnProducto" data-id="" data-k="0" data-r="0" data-f="" data-d="">Agregar al
                                carrito</button>
                        {/if}
                    </div>

                    <div class="note_footer">
                        <p>
                            <i class="fa-solid fa-square-check"></i> Si tiene alguna duda o consulta lo puede realizar en
                            nuestro chat en línea y si tiene algún pedido especial lo puede realizar mediante nuestro
                            WhatsApp
                        </p>

                    </div>
                </div>
            </div>

            {if !empty($lista_accesorios) }
                <div class="scroll-accesorios">
                    <h2>Accesorios</h2>
                    <div class="container-accesorios">
                        <div class="images-accesorio">

                            {foreach $lista_accesorios as $row}
                                <div class="item detalle-accesorio">
                                    <img id="imgAcce" src="{$asset}{$row->url}" alt="imagen" width="100%">
                                    <p class="titulo">{$row->descri_corta}</p>
                                    <div class="info precio">
                                        <b>S/ {$row->precio}</b>
                                        <button class="agregar-accesorio" data-wb="{$row->codart_web}" data-id="{$row->codart}"
                                            data-k="0" data-r="0" data-f="" data-d="" onclick="addAccesorio(this)">Agregar</button>
                                    </div>
                                </div>
                            {/foreach}
                        </div>
                    </div>
                </div>

            {/if}





        </div>
        <br>
        <br>
        <hr>
        <br>




        <section id="producto-cards">
            <div class="container">
                <div class="header-cards">
                    <h1>Bocaditos para acompañar</h1>
                </div>
                <br>
                <div class="pagination-grid-cards">
                    <div class="pagination-cards"></div>
                </div>
                <br>
                <div class="grid-pagination-cards">

                </div>


            </div>
        </section>
    </div>
    <br>
    <br>
{/block}
{block name="scripts"}
    <script src="{$asset}/js/lib/chosen/chosen.jquery.min.js"></script>
    <script src="{$asset}/js/lib/datepicker/datepicker.min.js"></script>
    <script src="{$asset}/js/lib/datepicker/datepicker.es-ES.js"></script>
    <script src="{$asset}/js/form/detalle.js?v={0|rand:100}"></script>
{/block}