<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-10 15:12:56
  from 'C:\xampp\htdocs\admin_web\view\templates\RegistraProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd28148d3f264_40761999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4b30d042a1b4850e79a5d688be153dd05897a3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin_web\\view\\templates\\RegistraProductos.tpl',
      1 => 1607631174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd28148d3f264_40761999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2294720615fd28148b707a6_75349449', "estilos");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9762111345fd28148bee4e6_65671511', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1449903795fd28148d085e1_44489054', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_2294720615fd28148b707a6_75349449 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_2294720615fd28148b707a6_75349449',
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
/css/form/producto.css">
<?php
}
}
/* {/block "estilos"} */
/* {block "content"} */
class Block_9762111345fd28148bee4e6_65671511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9762111345fd28148bee4e6_65671511',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Relación de Productos </strong>
                    </div>

                    <div class="card-body">
                        <div class="header-form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="txtcriterio" class="form-control-label">Búsqueda</label>
                                        <input class="form-control" type="text" id="txtcriterio" placeholder="Ingrese su criterio de búsqueda">
                                    </div>
                                </div>
                                <div class="col-md-3">
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
                                <div class="col-md-3">
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
                                                    data-name="<?php echo $_smarty_tpl->tpl_vars['row']->value->desart;?>
"
                                                    onclick="GetImagen(this)" title="Carga Imágenes"><span
                                                        class="fa fa-image"></span></button>
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
                    <h5 class="modal-title" id="FrmUploadImagenLabel"></h5>
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
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_1449903795fd28148d085e1_44489054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1449903795fd28148d085e1_44489054',
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
/js/form/producto.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
