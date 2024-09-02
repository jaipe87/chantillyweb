<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-17 16:04:59
  from 'C:\xampp\htdocs\admin_amk\view\templates\RegistroUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eea857b69cb52_06453546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea381de40898cd563108f60c370fc846a0068663' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin_amk\\view\\templates\\RegistroUsuario.tpl',
      1 => 1592427842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eea857b69cb52_06453546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197844145eea857b68dc58_53460953', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "content"} */
class Block_197844145eea857b68dc58_53460953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_197844145eea857b68dc58_53460953',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Detalle de Usuarios</strong>
                    </div>

                    <div class="card-body">
                        <div class="header-form">
                            <button class="btn btn-primary btn-sm" id="btnNuevo" data-toggle="modal"
                                    data-target="#FrmMantUsuario"><span class="fa fa-user-plus"></span> Nuevo Usuario
                            </button>
                            <hr>
                        </div>

                        <table id="RelacionUsuario" class="table table-striped table-bordered table-hover table-sm"
                               style="width: 100%;">
                            <thead class="thead-center">

                            <tr>
                                <th class="w-5">Código</th>
                                <th>Nombre</th>
                                <th>Ape. Paterno</th>
                                <th>Ape. Materno</th>
                                <th>Nro.Doc</th>
                                <th>Sucursal</th>
                                <th class="w-5">Estado</th>
                                <th class="w-10"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($_smarty_tpl->tpl_vars['ListaUsuario']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListaUsuario']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->id_usuario;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_usuario;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->ape_paterno;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->ape_materno;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_doc;?>
 - <?php echo $_smarty_tpl->tpl_vars['row']->value->dni;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_suc;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_estado;?>
</td>
                                        <td class="text-center">
                                            <button class="btn btn-warning btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_usuario;?>
"
                                                    onclick="Modificar(this)"  title="Modifica Usuario"><span
                                                        class="fa fa-pencil"></span></button>
                                            <button class="btn btn-danger btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_usuario;?>
"
                                                    onclick="Desactivar(this)"  title="Desactiva Usuario"><span
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
    <div class="modal fade" id="FrmMantUsuario" tabindex="-1" role="dialog" aria-labelledby="FrmMantUsuarioLabel"
         aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="card-header">
                    <h5 class="modal-title" id="FrmMantUsuarioLabel"></h5>
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
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txtDNI" class=" form-control-label">DNI</label>
                                <div class="input-group">
                                    <input type="text" id="txtDNI" placeholder="" class="form-control text-uppercase"
                                           value="" maxlength="8">
                                    <div class="input-group-btn">
                                        <button class="btn btn-success" id="btnReniec"><i class="fa fa-cloud"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group"><label for="txtNombre" class=" form-control-label">Nombres</label>
                                <input type="text" id="txtNombre" placeholder="" class="form-control text-uppercase">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="txtApPaterno" class=" form-control-label">Ape.Paterno</label>
                                <input type="text" id="txtApPaterno" placeholder="" class="form-control text-uppercase">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="txtApMaterno" class=" form-control-label">Ap.Materno</label>
                                <input type="text" id="txtApMaterno" placeholder="" class="form-control text-uppercase">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="txtNick" class=" form-control-label">Usuario</label>
                                <input type="text" id="txtNick" placeholder="" class="form-control text-uppercase"
                                       maxlength="10">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="txtPWD" class=" form-control-label">Contraseña</label>
                                <input type="password" id="txtPWD" placeholder="" class="form-control text-uppercase"
                                       value="" maxlength="20">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="txtPWD1" class=" form-control-label">Repite Contraseña</label>
                                <input type="password" id="txtPWD1" placeholder="" class="form-control text-uppercase"
                                       value="" maxlength="20">
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
