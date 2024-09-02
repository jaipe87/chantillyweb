<?php
/* Smarty version 3.1.34-dev-7, created on 2024-04-05 13:22:18
  from 'C:\xampp\htdocs\chantilly\admin\view\templates\PermisosUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6610415a6b3eb2_28638262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '829815f0a20486de92c3531f55d296674a5ed4df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\admin\\view\\templates\\PermisosUsuario.tpl',
      1 => 1712341321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6610415a6b3eb2_28638262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16207521666610415a6a3bb7_08173514', "estilos");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14883032526610415a6a65f7_91876288', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2263084926610415a6ae4f4_73005505', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_16207521666610415a6a3bb7_08173514 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_16207521666610415a6a3bb7_08173514',
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
/css/form/usuario.css">


<?php
}
}
/* {/block "estilos"} */
/* {block "content"} */
class Block_14883032526610415a6a65f7_91876288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14883032526610415a6a65f7_91876288',
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
                                            <button class="btn btn-info btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_usuario;?>
" onclick="Permisos(this)"><span
                                                        class="fa fa-check-circle-o"  title="Modifica Accesos"></span></button>
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
    <div class="modal fade" id="FrmPermisoUsuario" tabindex="-1" role="dialog" aria-labelledby="FrmPermisoUsuarioLabel"
         aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="card-header">
                    <h5 class="modal-title" id="FrmPermisoUsuarioLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body card-block">

                    <div class="row">
                        <div class="d-none d-md-block col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="txtCodigo" class=" form-control-label">Código</label>
                                        <input type="text" id="txtCodigo" placeholder=""
                                               class="form-control text-center text-uppercase"
                                               disabled>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="txtDNI" class=" form-control-label">DNI</label>
                                        <input type="text" id="txtDNI" placeholder="" disabled
                                               class="form-control text-uppercase"
                                               value="" maxlength="8">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group"><label for="txtNombre"
                                                                   class=" form-control-label">Nombres</label>
                                        <input type="text" id="txtNombre" placeholder="" disabled
                                               class="form-control text-uppercase">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="txtApPaterno" class=" form-control-label">Ape.Paterno</label>
                                        <input type="text" id="txtApPaterno" disabled placeholder=""
                                               class="form-control text-uppercase">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label for="txtApMaterno" class=" form-control-label">Ap.Materno</label>
                                        <input type="text" id="txtApMaterno" disabled placeholder=""
                                               class="form-control text-uppercase">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check list_permisos">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="card-footer text-center">
                    <button type="button" id="btnGrabaPermisos" class="btn btn-danger btn-sm"><i
                                class="fa fa-floppy-o"></i>
                        Grabar
                    </button>
                    <button type="button" id="btnSalirPermisos" class="btn btn-secondary btn-sm" data-dismiss="modal"><i
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
/* {block "scripts"} */
class Block_2263084926610415a6ae4f4_73005505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_2263084926610415a6ae4f4_73005505',
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
/js/form/usuario.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">

        $(document).ready(function () {
                $('#RelacionUsuario').DataTable({
                    language: {
                        url: UrlLang
                    },
                    responsive: true,
                    pagingType: "full_numbers",
                    lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]],
                    <?php if ($_smarty_tpl->tpl_vars['view']->value == "Usuario") {?>

                    "dom": '<"row"<"d-flex  justify-content-start   col-ms-12 col-md-4"f><"d-flex  justify-content-center col-ms-12 col-md-4"B>\n\
                   <" d-flex  justify-content-end  col-ms-12 col-md-4"l> >t<"row"<"col-ms-12 col-md-6"i><"col-ms-12 col-md-6"p>>',

                    buttons: [
                        'pdf', 'excel', 'print'
                    ]
                    <?php } else { ?>
                    "dom": '<"row"<"d-flex  justify-content-start   col-ms-12 col-md-6"f><" d-flex  justify-content-end  col-ms-12 col-md-6"l> >tip',

                    <?php }?>

                });

                $("#cboEstado").chosen({
                    disable_search_threshold: 0,
                    no_results_text: "Oops, Ningún Resultado!",
                    width: "100%"
                });
            }
        );

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
