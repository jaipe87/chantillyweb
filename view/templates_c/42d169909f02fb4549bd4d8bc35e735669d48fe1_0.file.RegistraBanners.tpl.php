<?php
/* Smarty version 3.1.34-dev-7, created on 2024-04-02 13:21:34
  from 'C:\xampp\htdocs\web\admin\view\templates\RegistraBanners.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_660c4cae82aa55_55401983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42d169909f02fb4549bd4d8bc35e735669d48fe1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\admin\\view\\templates\\RegistraBanners.tpl',
      1 => 1711984556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660c4cae82aa55_55401983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1407467306660c4cae7f2575_76262701', "estilos");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1397374926660c4cae803d68_33994061', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_702887614660c4cae8220a3_66885313', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_1407467306660c4cae7f2575_76262701 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_1407467306660c4cae7f2575_76262701',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/datatable/datatables.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/datatable/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/datatable/buttons/buttons.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/chosen/chosen.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/form/banner.css">
<?php
}
}
/* {/block "estilos"} */
/* {block "content"} */
class Block_1397374926660c4cae803d68_33994061 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1397374926660c4cae803d68_33994061',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"
                        <strong class="card-title">Relación de Banners <span class="text-warning">(Tamaño de la imágenes deben ser de 2469 x 800 px) | Peso Máx 5MB</span>
                        </strong>
                    </div>

                    <div class="card-body">
                        <div class="header-form">
                            <div class="row">
                                <div class="col-md-2 d-flex flex-row align-items-center  justify-content-center  justify-content-md-start">
                                    <button class="btn btn-primary btn-sm" id="BtnNuevo"><span class="fa fa-sliders"></span> Banner</button>
                                    <button class="btn btn-primary btn-sm ml-1" id="btnConsultar"
                                    ><span class="fa fa-refresh"></span> Refrescar
                                    </button>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="txtcriterio" class="form-control-label">Búsqueda</label>
                                        <input class="form-control text-uppercase" type="text" id="txtcriterio" placeholder="Ingrese su criterio de búsqueda">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="cboCategoriaFiltro" class="form-control-label">Categoría</label>
                                        <select id="cboCategoriaFiltro" data-placeholder="Todos"
                                                class="standardSelect form-control">
                                            <option value="0"></option>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['list_categorias']->value)) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_categorias']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->des;?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="cboMarcaFiltro" class="form-control-label">Marca</label>
                                        <select id="cboMarcaFiltro" data-placeholder="Todos"
                                                class="standardSelect form-control">
                                            <option value="0"></option>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['list_marca']->value)) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_marca']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->des;?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="cboEstadoFiltro" class="form-control-label">Estado</label>
                                        <select id="cboEstadoFiltro" data-placeholder="Todos"
                                                class="standardSelect form-control">
                                            <option value="0"></option>
                                            <option value="1">ACTIVO</option>
                                            <option value="2">INACTIVO</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <table id="RelacionBanner" class="table table-striped table-bordered table-hover table-sm"
                               style="width: 100%;">
                            <thead class="thead-center">

                            <tr>
                                <th class="w-5">Código</th>
                                <th class="w-50">Nombre</th>
                                <th class="w-5">Ubicación</th>
                                <th class="w-5">Asociado</th>
                                <th class="w-10">Categoría ó Marca</th>
                                <th class="w-5">Siempre Mostrar</th>
                                <th class="w-5">Orden</th>
                                <th class="w-5">Estado</th>
                                <th class="w-10"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($_smarty_tpl->tpl_vars['list_Banner']->value)) {?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_Banner']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                    <tr>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->flag;?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_tipo;?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_asociado;?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_codigo_asociado;?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_mostrar_home;?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value->orden;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_estado;?>
</td>
                                        <td class="text-center">
                                            <button class="btn btn-warning btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
"
                                                    data-name="<?php echo $_smarty_tpl->tpl_vars['row']->value->flag;?>
"
                                                    onclick="Modificar(this)" title="Modifica"><span
                                                        class="fa fa-pencil"></span></button>
                                            <button class="btn btn-danger btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
"
                                                    data-name="<?php echo $_smarty_tpl->tpl_vars['row']->value->des;?>
"
                                                    onclick="Desactivar(this)" title="Desactivar"><span
                                                        class="fa fa-trash"></span></button>
                                        </td>
                                    </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>

                            </tbody>
                        </table>


                    </div>

                </div>
            </div>


        </div>
    </div>
    <div class="modal fade" id="FrmUploadImagen" tabindex="-1" role="dialog" aria-labelledby="FrmUploadImagenLabel"
         aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="card-header">
                    <h5 class="modal-title " id="FrmUploadImagenLabel">Registra Banners</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body card-block">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="txtCodigo" class=" form-control-label">Código</label>
                                <input type="text" id="txtCodigo" placeholder=""
                                       class="form-control text-center text-uppercase"
                                       value="?" disabled>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="txtFlag" class=" form-control-label">Nombre</label>
                                <input type="text" id="txtFlag" placeholder="Pon un nombre al banner para identificarlo"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="tipo" class="col-md-4">
                            <div class="form-group">
                                <label for="cboTipo" class="form-control-label">Ubicación</label>
                                <select id="cboTipo"
                                        class="standardSelect form-control">
                                    <option value="1">HEADER</option>
                                    <option value="2">FOOTER</option>
                                </select>
                            </div>
                        </div>
                        <div id="asociado" class="col-md-4">
                            <div class="form-group">
                                <label for="cboAsociado" class="form-control-label">El banner se asocia a</label>
                                <select id="cboAsociado"
                                        class="standardSelect form-control">
                                    <option value="0">LIBRE</option>
                                    <option value="1">CATEGORÍA</option>
                                    <option value="2">MARCA</option>
                                </select>
                            </div>
                        </div>
                        <div id="asociadoCate" class="col-md-4 d-none">
                            <div class="form-group">
                                <label for="cboCategoria" class="form-control-label">Categoría</label>
                                <select id="cboCategoria" data-placeholder="SELECCIONAR"
                                        class="standardSelect form-control">
                                    <option value="0"></option>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['list_categorias']->value)) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_categorias']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->des;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div id="asociadoMarca" class="col-md-4 d-none">
                            <div class="form-group">
                                <label for="cboMarca" class="form-control-label">Marca</label>
                                <select id="cboMarca" data-placeholder="SELECCIONAR"
                                        class="standardSelect form-control">
                                    <option value="0"></option>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['list_marca']->value)) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_marca']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->des;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-check">
                                <input id="chkHome" placeholder=""
                                       type="checkbox" class="form-check-input"
                                       value="0">
                                <label class="form-check-label" for="chkHome">Mostrar siempre</label>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="txtLink" class=" form-control-label">¿A dónde va linkear el
                                        banner?</label>
                                    <input type="text" id="txtLink"
                                           placeholder="al dar click en el banner te lleva a otra página"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="txtOrden" class=" form-control-label">Nro.Orden</label>
                                    <input type="text" id="txtOrden"
                                           placeholder="Orden"
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="cboEstado" class="form-control-label">Estado</label>
                                <select id="cboEstado" data-placeholder="Todos"
                                        class="standardSelect form-control">
                                    <option value="1">ACTIVO</option>
                                    <option value="0">INACTIVO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <button id="btnRegistra" type="button" class="btn btn-primary btn-sm" data-mode=""><i
                                        class="fa fa-save"></i> Registra
                            </button>
                            <button id="btnClose" type="button" class="btn btn-secondary btn-sm" data-mode=""><i
                                        class="fa fa-close"></i> Salir
                            </button>
                        </div>

                    </div>

                    <div class="row">
                        <div id="imagenload" class="col-md-12  mt-3 d-none">
                            <div id="dropzone" class="dropzone">
                                Arrastra la imágen aquí para subirla
                            </div>

                            <div id="uploads">

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_702887614660c4cae8220a3_66885313 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_702887614660c4cae8220a3_66885313',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/data-table/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/data-table/dataTables.responsive.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/data-table/buttons/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/data-table/buttons/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/data-table/buttons/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/data-table/buttons/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/data-table/buttons/buttons.html5.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/data-table/buttons/buttons.print.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/chosen/chosen.jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/banner.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
