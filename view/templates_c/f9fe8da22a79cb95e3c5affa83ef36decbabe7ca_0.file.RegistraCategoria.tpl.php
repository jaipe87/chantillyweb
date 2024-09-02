<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-17 16:10:29
  from 'C:\xampp\htdocs\admin_amk\view\templates\RegistraCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eea86c55b06c7_26974231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9fe8da22a79cb95e3c5affa83ef36decbabe7ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin_amk\\view\\templates\\RegistraCategoria.tpl',
      1 => 1592427713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eea86c55b06c7_26974231 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4644719935eea86c55a35f8_75631249', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "content"} */
class Block_4644719935eea86c55a35f8_75631249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4644719935eea86c55a35f8_75631249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Detalle de Categorias</strong>
                    </div>

                    <div class="card-body">
                        <div class="header-form">
                            <button class="btn btn-primary btn-sm" id="btnNuevo" data-toggle="modal"
                                    data-target="#FrmMantCategoria"><span class="fa fa-cogs"></span> Nueva Categoría
                            </button>
                            <hr>
                        </div>

                        <table id="RelacionCategoria" class="table table-striped table-bordered table-hover table-sm"  style="width: 100%;">
                            <thead class="thead-center">

                            <tr>
                                <th class="w-5">Código</th>
                                <th class="w-80">Descripción</th>
                                <th class="w-5" >Estado</th>
                                <th class="w-10"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($_smarty_tpl->tpl_vars['list_Categoria']->value)) {?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_Categoria']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->codcat;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nombre;?>
</td>
                                        <td ><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_estado;?>
</td>
                                        <td class="text-center">
                                            <button class="btn btn-warning btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->codcat;?>
"
                                                    onclick="Modificar(this)" title="Modifica Categoría"><span
                                                        class="fa fa-pencil"></span></button>
                                            <button class="btn btn-danger btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->codcat;?>
"
                                                    onclick="Desactivar(this)" title="Desactiva Categoría"><span
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
    <div class="modal fade" id="FrmMantCategoria" tabindex="-1" role="dialog" aria-labelledby="FrmMantCategoriaLabel"
         aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card-header">
                    <h5 class="modal-title" id="FrmMantCategoriaLabel"></h5>
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
                                <label for="txtDescri" class=" form-control-label">Descripción</label>
                                <input type="text" id="txtDescri" placeholder="" class="form-control text-uppercase">
                            </div>
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
<?php
}
}
/* {/block "content"} */
}
