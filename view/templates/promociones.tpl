{extends file="layout/master.tpl"}
{block name="tematicas"}
    {include file="layout/sections/scroll_tematica.tpl"}
{/block}


{block name="content"}
    <hr id="separacion2">
    <br>
    <section id="tortas">
        <div class="container">
            <div class="header-cards">
                <h1>{$titulo}</h1>
                <h5>{$subtitulo}</h5>
            </div>
            <br>
            <div class="section-card">
                <div class="rango-resultados">
                    <p>Mostrando <label class="label_pagina"></label> de <label class="label_total_items"></label>
                        resultados</p>
                </div>
                
                <div class="section-busqueda">
                    <div class="busqueda">
                        <div id="searchForm">
                            <input type="text" id="searchInput" placeholder="Buscar productos">
                            <button type="button" id="searchButton"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="pagination-grid">
                    <div class="pagination"></div>
                </div>
            <br>
            <div id="lista-productos">
                <div class="grid-pagination">
                    <!--Aqui van todos los datos-->
                </div>


            </div>
        </div>
    </section>
    <br>
    <br>
    {include file="layout/sections/banner_estatico.tpl"}
{/block}

{block name="scripts"}
    <script src="{$asset}/js/lib/chosen/chosen.jquery.min.js"></script>
    <script src="{$asset}/js/lib/datepicker/datepicker.min.js"></script>
    <script src="{$asset}/js/lib/datepicker/datepicker.es-ES.js"></script>
    <script src="{$asset}/js/form/promociones.js?v={0|rand:100}"></script>
{/block}