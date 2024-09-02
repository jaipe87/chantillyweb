{extends file="layout/master.tpl"}
{block name="tematicas"}
    {include file="layout/sections/scroll_tematica.tpl"}
{/block}

{block name="content"}
    <hr id="separacion2">
    <br>
    <section>
    <div id="container-section-locales" class="container">
        <div class="header-section-locales">
            <h1>{$titulo}</h1>
            <h5>{$subtitulo}</h5>
        </div>
        <br>
        <br>
        <div class="cards-section-locales">
            <!---->
        </div>
        <br>
    </div>
    <br>
    <br>
</section>
{/block}
{block name="scripts"}
    <script src="{$asset}/js/lib/chosen/chosen.jquery.min.js"></script>
    <script src="{$asset}/js/lib/datepicker/datepicker.min.js"></script>
    <script src="{$asset}/js/lib/datepicker/datepicker.es-ES.js"></script>
    <script src="{$asset}/js/form/contacto.js?v={0|rand:100}"></script>
{/block}
