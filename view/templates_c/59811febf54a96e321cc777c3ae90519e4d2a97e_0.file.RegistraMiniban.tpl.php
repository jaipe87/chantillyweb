<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-22 15:59:08
  from 'C:\xampp\htdocs\web\admin\view\templates\RegistraMiniban.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65fdf11c6ac448_87056999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59811febf54a96e321cc777c3ae90519e4d2a97e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\admin\\view\\templates\\RegistraMiniban.tpl',
      1 => 1614111351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fdf11c6ac448_87056999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103919550665fdf11c6862d3_23071508', "estilos");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18786980565fdf11c68b0b0_66086243', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115486287465fdf11c6a7226_63389722', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_103919550665fdf11c6862d3_23071508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_103919550665fdf11c6862d3_23071508',
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
class Block_18786980565fdf11c68b0b0_66086243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18786980565fdf11c68b0b0_66086243',
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
class Block_115486287465fdf11c6a7226_63389722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_115486287465fdf11c6a7226_63389722',
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
