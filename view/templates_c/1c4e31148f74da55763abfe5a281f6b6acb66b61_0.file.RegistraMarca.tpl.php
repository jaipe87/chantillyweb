<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-27 15:40:38
  from 'C:\xampp\htdocs\web\admin\view\templates\RegistraMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66048446dd8418_69319858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c4e31148f74da55763abfe5a281f6b6acb66b61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\admin\\view\\templates\\RegistraMarca.tpl',
      1 => 1621113538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66048446dd8418_69319858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209649042066048446dab553_17911726', "estilos");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147237122166048446db4b03_55595136', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181667736966048446dcc871_20028434', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_209649042066048446dab553_17911726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_209649042066048446dab553_17911726',
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
/css/form/marca.css">
<?php
}
}
/* {/block "estilos"} */
/* {block "content"} */
class Block_147237122166048446db4b03_55595136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_147237122166048446db4b03_55595136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Relación de Marcas <span class="text-warning">(Tamaño de la imágenes deben ser de 250 x 250 px) | Peso Máx 5MB</span>  </strong>
                    </div>

                    <div class="card-body">
                        <div class="header-form text-right">
                            <button class="btn btn-primary btn-sm" id="BtnConsultar"
                            ><span class="fa fa-refresh"></span> Refrescar
                            </button>
                            <hr>
                        </div>

                        <table id="RelacionMarca" class="table table-striped table-bordered table-hover table-sm"  style="width: 100%;">
                            <thead class="thead-center">

                            <tr>
                                <th class="w-5">Código</th>
                                <th class="w-65">Descripción</th>
                                <th class="w-5" >Estado</th>
                                <th class="w-5" >En Pie Página</th>
                                <th class="w-10" >Imagen</th>
                                <th class="w-10"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($_smarty_tpl->tpl_vars['list_Marca']->value)) {?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_Marca']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                    <tr>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->des;?>
</td>
                                        <td ><?php echo $_smarty_tpl->tpl_vars['row']->value->nom_estado;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->en_piepagina;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value->conimagen;?>
</td>
                                        <td class="text-center">
                                            <button class="btn btn-warning btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['row']->value->des;?>
"
                                                    onclick="GetPiePagina(this)" title="Marca en pie de página"><span
                                                        class="fa fa-futbol-o"></span></button>
                                            <button class="btn btn-danger btn-sm" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['row']->value->des;?>
"
                                                    onclick="GetImagen(this)" title="Carga Imagen"><span
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

                        Arrastra la imágen aquí para subirla
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
class Block_181667736966048446dcc871_20028434 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_181667736966048446dcc871_20028434',
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
/js/form/marca.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
