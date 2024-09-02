<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-23 15:15:53
  from 'C:\xampp\htdocs\TiendaOnline\public\admin_web\view\templates\RegistraMiniban.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60356279d4f7c0_19425097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbf98a24bc280a14f0825f712683b403def228dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TiendaOnline\\public\\admin_web\\view\\templates\\RegistraMiniban.tpl',
      1 => 1614111351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60356279d4f7c0_19425097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133651925160356279d2b932_61935755', "estilos");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33899724560356279d2fb75_58199331', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177769370960356279d4a8f9_18539280', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_133651925160356279d2b932_61935755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_133651925160356279d2b932_61935755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/form/minibanner.css">
<?php
}
}
/* {/block "estilos"} */
/* {block "content"} */
class Block_33899724560356279d2fb75_58199331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_33899724560356279d2fb75_58199331',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Carga los Banner Estáticos </strong>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListaMniBan1']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->id == 1) {?>
                                    <div class="col-md-4">
                                        <div class="dropzone">
                                            <img class="lazyloaded" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
" >
                                            <a class="imagen" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" onclick="EditaMiniBan(this)"
                                               title="Editar Imagen" size="1000x269 px"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->id == 2) {?>
                                    <div class="col-md-4">
                                        <div class="dropzone">
                                            <img class="lazyloaded" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
">
                                            <a class="imagen" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" onclick="EditaMiniBan(this)"
                                               title="Editar Imagen" size="1000x269 px"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->id == 3) {?>
                                    <div class="col-md-4">
                                        <div class="dropzone">
                                            <img class="lazyloaded"  data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
">
                                            <a class="imagen" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" onclick="EditaMiniBan(this)"
                                               title="Editar Imagen" size="1000x269 px"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="row mt-5">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListaMniBan2']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->id == 4) {?>
                                    <div class="col-md-6">
                                        <div class="dropzone">
                                            <img class="lazyloaded" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
">
                                            <a class="imagen" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" onclick="EditaMiniBan(this)"
                                               title="Editar Imagen" size="1411x300 px"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->id == 5) {?>
                                    <div class="col-md-6">
                                        <div class="dropzone">
                                            <img class="lazyloaded" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
">
                                            <a class="imagen" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" onclick="EditaMiniBan(this)"
                                               title="Editar Imagen" size="1411x300 px"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                <?php }?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </div>
                        <div class="row mt-5">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListaMniBan3']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->id == 6) {?>
                                    <div class="col-md-4">
                                        <div class="dropzone">
                                            <img class="lazyloaded" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
">
                                            <a class="imagen" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" onclick="EditaMiniBan(this)"
                                               title="Editar Imagen" size="1000x269 px"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->id == 7) {?>
                                    <div class="col-md-4">
                                        <div class="dropzone">
                                            <img class="lazyloaded" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
">
                                            <a class="imagen" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" onclick="EditaMiniBan(this)"
                                               title="Editar Imagen" size="1000x269 px"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->id == 8) {?>
                                    <div class="col-md-4">
                                        <div class="dropzone">
                                            <img class="lazyloaded" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
">
                                            <a class="imagen" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" onclick="EditaMiniBan(this)"
                                               title="Editar Imagen" size="1000x269 px"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="row mt-5">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListaMniBan4']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->id == 9) {?>
                                    <div class="col-md-6">
                                        <div class="dropzone">
                                            <img class="lazyloaded" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
">
                                            <a class="imagen" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" onclick="EditaMiniBan(this)"
                                               title="Editar Imagen" size="1275x576 px"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->id == 10) {?>
                                    <div class="col-md-6">
                                        <div class="dropzone">
                                            <img class="lazyloaded" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->url;?>
">
                                            <a class="imagen" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" onclick="EditaMiniBan(this)"
                                               title="Editar Imagen"  size="1275x576 px"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                <?php }?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <div class="modal fade" id="FrmRegistraImagen" tabindex="-1" role="dialog" aria-labelledby="FrmRegistraImagenLabel"
         aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card-header">
                    <h5 class="modal-title " id="FrmRegistraImagenLabel">Carga el Banner Estático | Tamaño de la imagen [ <b class="medida" style="color:#e9d009; font-size: 16px;"></b> ]</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body card-block">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                               <div class="uploadimage">
                                   <span class="name_image"></span>
                                   <button id="btnSetImagen" class="btn btn-warning btn-sm"><i class="fa fa-upload"></i> Carga Imagen </button>

                               </div>

                        </div>
                        <input type="hidden" id="hdid" value="">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="txtLink" class="">Link</label>
                                <input type="text" id="txtLink" placeholder="Pega un link para direccionar"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txtOrden" class="form-control-label">Orden</label>
                                <input type="text" id="txtOrden" placeholder=""
                                       class="form-control">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer text-center">
                    <button id="btnGrabarImg" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Grabar</button>
                    <button id="btnCerrarImg" class="btn btn-secondary btn-sm"><i class="fa fa-close"></i> Cerrar</button>
                </div>
            </div>
        </div>
    </div>



<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_177769370960356279d4a8f9_18539280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_177769370960356279d4a8f9_18539280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/minibanner.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
