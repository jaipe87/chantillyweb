{extends file="layout/master.tpl"}
{block name="tematicas"}
    {include file="layout/sections/scroll_tematica.tpl"}
{/block}

{block name="content"}
    <div class="container-slider">
        <div class="slider" id="slider">

            {if !empty( $lista_banner)}
                {foreach $lista_banner as $row}
                    <div class="slider-content">
                        <img async src="{$asset}{$row->url}" alt="{$row->titulo}" data-link="{$row->link}" class="slider_img"
                            width="100%">
                    </div>
                {/foreach}
            {/if}
        </div>
    </div>
    <div class="indicators" id="indicators"></div>
  

    <section id="tortas">
        <div class="container">
            <div class="header-cards">
                <h1>Productos destacados</h1>
                <h5>Los mejores postres en la Casa del Chantilly, calidad y amor.</h5>
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
                <div class="grid-pagination" id="items-index">
                    <!---->
                </div>
                
                
            </div>
            <br>
        </div>
    </section>
    <br>
    <br>
     {include file="layout/sections/banner_estatico.tpl"}
    <br>
    <br>



    <section id="tortas-cards" class="lista-productos-cards">
        <div class="container">
            <div class="header-cards">
                <h1>Tortas Temáticas</h1>
                <h5>Los mejores postres en la Casa del Chantilly, calidad y amor.</h5>
            </div>
            <br>
            <div class="pagination-grid-cards">
                <div class="pagination-cards"></div>
            </div>
            <br>
            <div class="grid-pagination-cards">
                <!--Aqui van los datos de las cards-->
            </div>
           
            
        </div>
    </section>


    <br>
    <br>


    {include file="layout/sections/locales.tpl"}


    <br>
    <br>

{/block}
{block name="scripts"}
    <script src="{$asset}/js/lib/chosen/chosen.jquery.min.js"></script>
    <script src="{$asset}/js/lib/datepicker/datepicker.min.js"></script>
    <script src="{$asset}/js/lib/datepicker/datepicker.es-ES.js"></script>
    <script src="{$asset}/js/form/slider.js?v={0|rand:100}"></script>
    <script src="{$asset}/js/form/index.js?v={0|rand:100}"></script>

    <script>
    {if !empty($msg)}
        const mensaje = '{$msg}';
        if (mensaje) {
            msg.Alert("::" + tittlemsg + "::", mensaje, () => {
                location.replace(urlpath);
            });
        }
    {/if}
</script>
{/block}