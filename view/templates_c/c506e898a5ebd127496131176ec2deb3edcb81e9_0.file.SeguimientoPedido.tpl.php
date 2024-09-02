<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-24 20:39:56
  from 'C:\xampp\htdocs\admin_amk\view\templates\SeguimientoPedido.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef4006c7e8e40_58062650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c506e898a5ebd127496131176ec2deb3edcb81e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin_amk\\view\\templates\\SeguimientoPedido.tpl',
      1 => 1593049151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef4006c7e8e40_58062650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14694320335ef4006c7d9185_94374513', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "content"} */
class Block_14694320335ef4006c7d9185_94374513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14694320335ef4006c7d9185_94374513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Detalle de Pedidos</strong>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="txtFecha" class=" form-control-label">Desde</label>

                                    <div class="input-group">
                                        <input type="text" id="txtFecha" placeholder="dd/mm/yyyy"
                                               class="form-control text-center text-uppercase" maxlength="10"
                                               value="" data-toggle="datepicker">
                                        <div class="input-group-append">
                                            <button type="button"
                                                    class="btn btn-outline-secondary docs-datepicker-trigger"
                                                    disabled="">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="txtFecha1" class="form-control-label">Hasta</label>

                                    <div class="input-group">
                                        <input type="text" id="txtFecha1" placeholder="dd/mm/yyyy"
                                               class="form-control text-center text-uppercase" maxlength="10"
                                               value="" data-toggle="datepicker">
                                        <div class="input-group-append">
                                            <button type="button"
                                                    class="btn btn-outline-secondary docs-datepicker-trigger"
                                                    disabled="">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="cboEstado" class="form-control-label">Situación</label>
                                    <select id="cboEstado" data-placeholder="Todos"
                                            class="standardSelect form-control">
                                        <option value=""></option>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['list_estado']->value)) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_estado']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_tabla;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_tabla;?>
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
                                    <label for="cboCliente" class="form-control-label">Cliente</label>
                                    <select id="cboCliente" data-placeholder="Todos"
                                            class="standardSelect form-control">
                                        <option value=""></option>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['list_cliente']->value)) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_cliente']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nombres;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->apellidos;?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex flex-row align-items-center  justify-content-center  justify-content-md-start">
                                <button class="btn btn-primary btn-sm m-1" id="btnConsulta"><span
                                            class="fa fa-refresh"></span> Refrescar
                                </button>

                            <!--    <button class="btn btn-success btn-sm m-l" id="btnReporte"><span
                                            class="fa fa-file-text"></span> Reporte
                                </button>-->
                            </div>
                        </div>

                         <div class="row">

                         </div>
                        <table id="RelacionPedido" class="table table-striped table-bordered table-hover table-sm"
                               style="width: 100%;">
                            <thead class="thead-center">

                            <tr>
                                <th class="w-2 d-sm-none"></th>
                                <th class="details-control w-2" ></th>
                                <th class="w-12">Fecha</th>
                                <th class="w-5">#Pedido</th>
                                <th class="w-15">Cliente</th>
                                <th class="w-15">Dirección</th>
                                <th class="w-7">Teléfono</th>
                                <th class="w-7">F.Pago</th>
                                <th class="w-5">Total</th>
                                <th class="w-7">Paga con</th>
                                <th class="w-5">Vuelto</th>
                                <th class="details-list w-7">Situación</th>
                            </tr>
                            </thead>

                        </table>


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
