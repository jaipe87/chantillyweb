<?php
/* Smarty version 3.1.34-dev-7, created on 2021-08-24 15:15:30
  from 'C:\xampp\htdocs\reyfam\public\admin_web\view\templates\RegistraProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6125536258d1a4_85332716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b70716b5059eec511438c22fc622709c26f6105' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reyfam\\public\\admin_web\\view\\templates\\RegistraProductos.tpl',
      1 => 1621113510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6125536258d1a4_85332716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62864126061255362544fa9_15758638', "estilos");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8704764416125536254e0c1_57154258', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5746701506125536257ff26_64828419', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_62864126061255362544fa9_15758638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_62864126061255362544fa9_15758638',
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
/css/lib/quill/monokai-sublime.min.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/quill/quill.snow.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/form/producto.css">
<?php
}
}
/* {/block "estilos"} */
/* {block "content"} */
class Block_8704764416125536254e0c1_57154258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8704764416125536254e0c1_57154258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Relación de Productos <span class="text-warning">(Tamaño de la imágenes deben ser de 500 x 500 px) | Peso Máx 5MB</span>
                        </strong>
                    </div>

                    <div class="card-body">
                        <div class="header-form">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="txtcriterio" class="form-control-label">Búsqueda</label>
                                        <input class="form-control text-uppercase" type="text" id="txtcriterio"
                                               placeholder="Ingrese su criterio de búsqueda">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="cboCategoria" class="form-control-label">Categoría</label>
                                        <select id="cboCategoria" data-placeholder="Todos"
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
                                        <label for="cboMarca" class="form-control-label">Marca</label>
                                        <select id="cboMarca" data-placeholder="Todos"
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
                                        <label for="cboEstado" class="form-control-label">Estado</label>
                                        <select id="cboEstado" data-placeholder="Todos"
                                                class="standardSelect form-control">
                                            <option value="0"></option>
                                            <option value="1">ACTIVO</option>
                                            <option value="2">INACTIVO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="cboConImagen" class="form-control-label">Imagen</label>
                                        <select id="cboConImagen" data-placeholder="Todos"
                                                class="standardSelect form-control">
                                            <option value="0"></option>
                                            <option value="1">CON IMAGEN</option>
                                            <option value="2">SIN IMAGEN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex flex-row align-items-center  justify-content-center  justify-content-md-start">
                                    <button class="btn btn-primary btn-sm m-1" id="btnConsulta"><span
                                                class="fa fa-refresh"></span> Refrescar
                                    </button>

                                    <!--    <button class="btn btn-success btn-sm m-l" id="btnReporte"><span
                                                    class="fa fa-file-text"></span> Reporte
                                        </button>-->
                                </div>

                            </div>

                        </div>

                        <table id="RelacionProducto" class="table table-striped table-bordered table-hover "
                               style="width: 100%;">
                            <thead class="thead-center">

                            <tr>
                                <th class="w-10">Categoría</th>
                                <th class="w-10">Código</th>
                                <th class="w-50">Descripción</th>
                                <th class="w-10">Marca</th>
                                <th class="w-5">Estado</th>
                                <th class="w-5">Nro. Imágenes</th>
                                <th class="w-10"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($_smarty_tpl->tpl_vars['list_Producto']->value)) {?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_Producto']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_categoria;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->codart;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->descri;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_marca;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_estado;?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value->totalimagen;?>
</td>
                                        <td class="text-center">
                                            <button class="btn btn-success btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->codart;?>
"
                                                    data-name="<?php echo $_smarty_tpl->tpl_vars['row']->value->descri;?>
"
                                                    onclick="GetImagen(this)" title="Carga Imágenes"><span
                                                        class="fa fa-image"></span></button>
                                            <button class="btn btn-info btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->codart;?>
"
                                                    data-name="<?php echo $_smarty_tpl->tpl_vars['row']->value->descri;?>
"
                                                    onclick="GetDescripcion(this)"
                                                    title="Registra Especificaciones"><span
                                                        class="fa fa-archive"></span></button>
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
    <!-- .animated -->
    <div class="modal fade" id="FrmUploadImagen" tabindex="-1" role="dialog" aria-labelledby="FrmUploadImagenLabel"
         aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="card-header">
                    <h5 class="modal-title " id="FrmUploadImagenLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body card-block">

                    <div id="dropzone" class="dropzone">

                        Arrastra las imágenes aquí para subirlos
                    </div>

                    <div id="uploads">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="FrmEspecificacion" tabindex="-1" role="dialog" aria-labelledby="FrmEspecificacionLabel"
         aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="card-header">
                    <h5 class="modal-title " id="FrmEspecificacionLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body card-block">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <label for="txtObs" class="form-control-label font-weight-bold" style="font-size: 16px;"><u>Especificaciones  del Producto</u>  </label>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <input id="hdcorrel" type="hidden" value="0">


                        <div class="col-md-6">
                            <div class="form-group">
                               <!-- <label for="txtPropiedad" class="form-control-label">Propiedad</label>-->
                                <input class="form-control" type="text" id="txtPropiedad"
                                       placeholder="Ingrese la propiedad">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <!--  <label for="txtValor" class="form-control-label">Valor</label>-->
                                <input class="form-control" type="text" id="txtValor"
                                       placeholder="Ingrese el valor">
                            </div>
                        </div>


                    </div>
                    <div class="row mb-2">

                        <div class="col-md-12  d-flex justify-content-center">
                            <button class="btn btn-info mr-1" id="BtnNuevo"><i class="fa fa-eraser"></i> Nuevo
                            </button>
                            <button class="btn btn-success mr-1" id="BtnRegistra"><i class="fa fa-save"></i> Registrar
                            </button>
                            <button class="btn btn-warning" id="BtnModificar"><i class="fa fa-edit"></i> Modificar
                            </button>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="RelacionEspecificaciones" class="table  table-bordered table-hover"
                                   style="width: 100%;">
                                <thead class="thead-center">

                                <tr>
                                    <th class="w-5">It.</th>
                                    <th class="w-40">Propiedad</th>
                                    <th class="w-40">Valor</th>
                                    <th class="w-15">

                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($_smarty_tpl->tpl_vars['list_propiedades']->value)) {?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_propiedades']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->propiedad;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->valor;?>
</td>
                                            <td class="text-center">
                                                <button class="btn btn-warning btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
"

                                                        onclick="EditaDes(this)" title="Registrar"><span
                                                            class="fa fa-eye"></span></button>
                                                <button class="btn btn-danger btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
"

                                                        onclick="EliminaDes(this)"
                                                        title="Eliminar"><span
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
                    <hr>
                    <div class="row">
                        <div class="col-md-12 mb-2">
                                <label for="txtObs" class="form-control-label font-weight-bold" style="font-size: 16px;"><u>Descripción del Producto </u> </label>
                                <button class="btn btn-primary btn-sm pull-right" id="btnRegistraDescri"><i class="fa fa-paragraph"></i> Registra Descripción</button>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div id="standalone-container">
                                    <div id="editor-container"></div>
                                </div>
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
class Block_5746701506125536257ff26_64828419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_5746701506125536257ff26_64828419',
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
/js/lib/quill/highlight.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/quill/quill.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/quill/quill.image-resize.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/quill/image-drop.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/producto.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
