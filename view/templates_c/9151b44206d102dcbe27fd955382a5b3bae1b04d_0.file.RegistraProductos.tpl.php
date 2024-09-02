<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 15:32:16
  from 'C:\xampp\htdocs\admin_amk\view\templates\RegistraProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eed20d0be3817_93223854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9151b44206d102dcbe27fd955382a5b3bae1b04d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin_amk\\view\\templates\\RegistraProductos.tpl',
      1 => 1592598703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eed20d0be3817_93223854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9441605295eed20d0bc74d3_01541469', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "content"} */
class Block_9441605295eed20d0bc74d3_01541469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9441605295eed20d0bc74d3_01541469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Detalle de Productos</strong>
                    </div>

                    <div class="card-body">
                        <div class="header-form">
                            <button class="btn btn-primary btn-sm" id="btnNuevo" data-toggle="modal"
                                    data-target="#FrmMantProducto"><span class="fa fa-product-hunt"></span> Nuevo
                                Producto
                            </button>
                            <hr>
                        </div>

                        <table id="RelacionProducto" class="table table-striped table-bordered table-hover "
                               style="width: 100%;">
                            <thead class="thead-center">

                            <tr>
                                <th class="w-5">Código</th>
                                <th class="w-24">Producto</th>
                                <th class="w-30">Descripción</th>
                                <th class="w-15">Categoría</th>
                                <th class="w-10">Precio</th>
                                <th class="w-5">Estado</th>
                                <th class="w-11"></th>
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
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->codart;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nombre;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->descri;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_categoria;?>
</td>
                                        <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value->precio;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_estado;?>
</td>
                                        <td class="text-center">
                                            <button class="btn btn-success btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->codart;?>
"
                                                    data-name="<?php echo $_smarty_tpl->tpl_vars['row']->value->nombre;?>
"
                                                    onclick="GetImagen(this)" title="Carga Imágenes"><span
                                                        class="fa fa-image"></span></button>
                                            <button class="btn btn-warning btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->codart;?>
"
                                                    onclick="Modificar(this)" title="Modifica Producto"><span
                                                        class="fa fa-pencil"></span></button>
                                            <button class="btn btn-danger btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->codart;?>
"
                                                    onclick="Desactivar(this)" title="Desactiva Producto"><span
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
    <!-- .animated -->
    <div class="modal fade" id="FrmMantProducto" tabindex="-1" role="dialog" aria-labelledby="FrmMantProductoLabel"
         aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card-header">
                    <h5 class="modal-title" id="FrmMantProductoLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body card-block">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txtCodigo" class=" form-control-label">Código</label>
                                <input type="text" id="txtCodigo" placeholder=""
                                       class="form-control text-center text-uppercase"
                                       value="?" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="txtNombre" class=" form-control-label">Nombre Producto</label>
                                <input type="text" id="txtNombre" placeholder="" class="form-control text-uppercase">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="txtDescri" class=" form-control-label">Descripción</label>
                                <textarea id="txtDescri" name="textarea-input" id="textarea-input" rows="5"
                                          placeholder="Describa al producto..."
                                          class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txtPrecio" class=" form-control-label">Precio (S/)</label>
                                <input type="text" id="txtPrecio" placeholder=""
                                       class="form-control text-right text-uppercase"
                                       value="">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="cboCategoria" class="form-control-label">Categoría</label>
                            <select id="cboCategoria" data-placeholder="Seleccione la categoría"
                                    class="standardSelect form-control">
                                <option value=""></option>
                                <?php if (!empty($_smarty_tpl->tpl_vars['list_categoria']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_categoria']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->codcat;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nombre;?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>

                            </select>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="cboEstado" class="form-control-label">Estado</label>
                                <select id="cboEstado" data-placeholder="Seleccionar"
                                        class="standardSelect form-control">
                                    <option value="0">ACTIVO</option>
                                    <option value="1">INACTIVO</option>
                                </select>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="card-footer text-center">
                    <button type="button" id="btnGraba" class="btn btn-primary btn-sm" data-mode=""><i
                                class="fa fa-floppy-o"></i>
                        Grabar
                    </button>
                    <button type="button" id="btnSalir" class="btn btn-secondary btn-sm" data-dismiss="modal"><i
                                class="fa fa-close"></i> Cerrar
                    </button>

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
}
