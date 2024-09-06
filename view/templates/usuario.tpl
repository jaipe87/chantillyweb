{extends file="layout/master.tpl"}
{block name="tematicas"}
    {include file="layout/sections/scroll_tematica.tpl"}
{/block}

{block name="styles"}
    <link rel="stylesheet" href="{$asset}/css/form/usuario.css">

{/block}

{block name="content"}
    <hr id="separacion2">
    <br>
    <section id="informacion">

        <div class="container">
            <div class="header-cards">
                <h1>{$titulo}</h1>
            </div>
            <br>
            <div class="info_usuario">
                <div class="login-form">
                    <form autocomplete="false">
                        <div class="form-group">

                            <label>Nombres <small>(Obligatorio)</small></label>
                            <input type="text" required autocomplete="off" name="nombres" value="{$cliente->nom_usuario}"
                                class="form-control text-uppercase" placeholder="Ingrese su(s) Nombre(s)" id="txtNombre"
                                maxlength="100">
                        </div>
                        <div class="form_lastname">
                            <div class="form-group">
                                <label for="txtApPaterno">Apellidos <small>(Obligatorio)</small></label>
                                <input type="text" required autocomplete="off" name="apellidos"
                                    value="{$cliente->ape_usuario}" class="form-control text-uppercase"
                                    placeholder="Ingrese sus Apellidos" id="txtApPaterno" maxlength="100">
                            </div>
                        </div>
                        <div class="form_numbers">
                            <div class="form-group-nrodoc">

                                <div class="form-group-nrodoc-container">
                                    <label>Documento Identidad</label>
                                    <div class="form-datos-nrodoc">
                                        <select name="tipdoc" id="cboTipdoc" class="usuario_select">
                                            {if !empty($lstDocumentos)}
                                                {assign var="lodoc" value=8}
                                                {foreach $lstDocumentos as $row}
                                                    {if $row->cod==$cliente->tipdoc_usuario }
                                                        {assign var="lodoc" value=$row->lo}
                                                        <option value="{$row->cod}" selected>{$row->desabr} </option>
                                                    {else}
                                                        <option value="{$row->cod}">{$row->desabr}</option>
                                                    {/if}
                                                {/foreach}
                                            {/if}
                                        </select>
                                        <input type="text" required autocomplete="off" class="form-control text-uppercase"
                                            name="nrodoc" placeholder="Documento de Identidad" id="txtNroDoc" maxlength="8"
                                            value="{$cliente->nrodoc_usuario}">

                                    </div>


                                </div>

                            </div>

                            <div class="form-group-celular">
                                <label>Nro. Celular <small>(Obligatorio)</small></label>
                                <input type="text" required autocomplete="off" name="celular"
                                    value="{$cliente->cel_usuario}" class="form-control text-uppercase"
                                    placeholder="Ingrese su Celular" id="txtCelularUsuario" maxlength="11">
                            </div>
                        </div>
                        <div style="form_correo">
                            <div class="form-group">
                                <label>Correo Electrónico <small>(Obligatorio)</small></label>
                                <input type="text" required autocomplete="off" class="form-control"
                                    value="{$cliente->email}" placeholder="Ingrese su correo electrónico" id="txtEmail"
                                    name="email" maxlength="150">
                            </div>
                        </div>
                        <div style="form_direccion">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input type="text" required autocomplete="off" class="form-control text-uppercase"
                                    value="{$cliente->direc_usuario}" placeholder="Ingrese su Dirección" name="direccion"
                                    id="txtDireccionUsuario" maxlength="300">
                            </div>
                        </div>
                        <div class="form_password">

                            <div class="form-group pwd1">
                                <label>Contraseña</label>
                                <div class="input-group">
                                    <input type="password" required class="form-control" placeholder="Ingrese su contraseña"
                                        id="txtPWD1" maxlength="100" name="pwd1" autocomplete="off">
                                    <div class="input-group-addon input-group-register"
                                        onclick="usuario.mostrar_password_register()">
                                        <i class="fa fa-eye-slash register"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pwd2">
                                <label>Confirmar Contraseña</label>
                                <div class="input-group">
                                    <input type="password" required class="form-control"
                                        placeholder="Confirme su contraseña" id="txtPWD2" maxlength="100" name="pwd2"
                                        autocomplete="off">
                                    <div class="input-group-addon input-group-confirm"
                                        onclick="usuario.mostrar_password_confirm()">
                                        <i class="fa fa-eye-slash confirm"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form_button row_buttons">
                            <button type="button" class="btn btn-danger btn-flat m-b-30 mt-30" id="btnvolver"
                                data-href='{$RUTA_HTTP}/Cuenta' onclick="locationdatahref(this,false)"> <i
                                    class="fa-solid fa-arrow-left"></i> Volver a mi
                                Cuenta
                            </button>
                            <button type="button" class="btn btn-danger btn-flat m-b-30 mt-30" id="btnActualiza"> <i
                                    class="fa-solid fa-save"></i> Actualiza
                                tus
                                Datos
                            </button>

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>
    <br>
{/block}

{block name="scripts"}
    <script src="{$asset}/js/lib/chosen/chosen.jquery.min.js"></script>
    <script src="{$asset}/js/lib/datepicker/datepicker.min.js"></script>
    <script src="{$asset}/js/lib/datepicker/datepicker.es-ES.js"></script>
    <script src="{$asset}/js/form/usuario.js?v={0|rand:100}"></script>
{/block}