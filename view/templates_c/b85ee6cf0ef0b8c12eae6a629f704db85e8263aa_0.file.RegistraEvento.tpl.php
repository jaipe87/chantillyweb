<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-27 21:47:37
  from 'C:\xampp\htdocs\TiendaOnline\public\admin_web\view\templates\RegistraEvento.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_601225c9c12b99_47890338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b85ee6cf0ef0b8c12eae6a629f704db85e8263aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TiendaOnline\\public\\admin_web\\view\\templates\\RegistraEvento.tpl',
      1 => 1611802020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601225c9c12b99_47890338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1688665910601225c9bf6a53_27123094', "estilos");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_629268494601225c9bfdfe2_74624002', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_867824868601225c9c0ceb8_30871216', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_1688665910601225c9bf6a53_27123094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_1688665910601225c9bf6a53_27123094',
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
/css/form/Evento.css">
<?php
}
}
/* {/block "estilos"} */
/* {block "content"} */
class Block_629268494601225c9bfdfe2_74624002 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_629268494601225c9bfdfe2_74624002',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Relación de Videos YouTube </strong>
                    </div>

                    <div class="card-body">
                        <div class="header-form">
                            <button class="btn btn-primary btn-sm" id="BtnNuevo"
                            ><span class="fa fa-sliders"></span> Nuevo Evento
                            </button>
                            <button class="btn btn-primary btn-sm" id="btnConsultar"
                            ><span class="fa fa-refresh"></span> Refrescar
                            </button>
                            <hr>
                        </div>

                        <table id="RelacionEvento" class="table table-striped table-bordered table-hover table-sm"  style="width: 100%;">
                            <thead class="thead-center">

                            <tr>
                                <th class="w-5">Código</th>
                                <th class="w-30">Título</th>
                                <th class="w-30" >Descripción</th>
                                <th class="w-20" >Frame</th>
                                <th class="w-5">Estado</th>
                                <th class="w-10"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($_smarty_tpl->tpl_vars['list_Evento']->value)) {?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_Evento']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                    <tr>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->titulo;?>
</td>
                                        <td class="text-left" ><?php echo $_smarty_tpl->tpl_vars['row']->value->caption;?>
</td>
                                        <td class="text-center FrameGrilla"><?php echo $_smarty_tpl->tpl_vars['row']->value->frame;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_estado;?>
</td>
                                        <td class="text-center">
                                            <button class="btn btn-warning btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['row']->value->titulo;?>
"
                                                    onclick="Modificar(this)" title="Modifica"><span
                                                        class="fa fa-pencil"></span></button>
                                            <button class="btn btn-danger btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['row']->value->titulo;?>
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
    <div class="modal fade" id="FrmEvento" tabindex="-1" role="dialog" aria-labelledby="FrmEventoLabel"
         aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="card-header">
                    <h5 class="modal-title " id="FrmEventoLabel">Registra Eventos</h5>
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
                                <label for="txtTitulo" class=" form-control-label">Título</label>
                                <input type="text" id="txtTitulo" placeholder="Pon un título al Evento" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="txtCaption" class=" form-control-label">Descripción</label>

                                <textarea type="text" id="txtCaption" placeholder="Escribe una pequeña descripción del video" class="form-control" rows="2" cols="50"> </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="txtFrame" class=" form-control-label">Frame</label>
                                <textarea type="text" id="txtFrame" placeholder="Pegue acá el código de YouTube" class="form-control" rows="4" cols="50"> </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input  id="chkHome" placeholder=""
                                       type="checkbox" class="form-check-input"
                                       value="0">
                                <label class="form-check-label" for="chkHome">Mostrar en Pie de Página</label>
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
                            <button id="btnRegistra" type="button" class="btn btn-primary btn-sm" data-mode=""   >  <i class="fa fa-save"></i>  Registra</button>
                            <button id="btnClose" type="button" class="btn btn-secondary btn-sm" data-mode=""   >  <i class="fa fa-close"></i>  Salir</button>
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
class Block_867824868601225c9c0ceb8_30871216 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_867824868601225c9c0ceb8_30871216',
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
/js/form/Evento.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
