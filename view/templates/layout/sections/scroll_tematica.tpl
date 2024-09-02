<div class="scrollmenu">
    <div id="grid">


        {if !empty( $lista_tematica)}
            {foreach $lista_tematica as $row}

                <div class="name-section">
                    <a href="{$RUTA_HTTP}/TortasTematicas/Tematica/?tm={$row->id_tematica}" class="content-grid" data-tematica={$row->id_tematica}>
                        <img src="{$asset}{$row->url}" alt="">
                        <p>{$row->tematica}</p>
                    </a>
                </div>
            {/foreach}
        {/if}


    </div>
</div>
{if !empty( $id_pagina)}
    <input type="hidden" id="page" value="{$id_pagina}">
{else}
    <input type="hidden" id="page" value="0">
{/if}