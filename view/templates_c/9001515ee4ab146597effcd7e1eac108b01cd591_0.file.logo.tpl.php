<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-11 15:20:19
  from 'C:\xampp\htdocs\reyfam\public\admin_web\view\templates\logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_609ae703e0c5c9_63394523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9001515ee4ab146597effcd7e1eac108b01cd591' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reyfam\\public\\admin_web\\view\\templates\\logo.tpl',
      1 => 1608610585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609ae703e0c5c9_63394523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174282928609ae703bfebe8_32302889', "estilos");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1117248409609ae703c052a2_73936085', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_906367487609ae703e06021_16386976', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_174282928609ae703bfebe8_32302889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_174282928609ae703bfebe8_32302889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/form/logo.css">
<?php
}
}
/* {/block "estilos"} */
/* {block "content"} */
class Block_1117248409609ae703c052a2_73936085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1117248409609ae703c052a2_73936085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Carga tu Logo <span class="text-warning">(Tamaño de la imágenes deben ser de 3894 x 761 px)</span>  </strong>
                    </div>

                    <div class="card-body">
                        <div id="dropzone" class="dropzone">

                            Arrastra la imágen aquí para subirla
                        </div>

                        <div id="uploads">

                            <?php if (!empty($_smarty_tpl->tpl_vars['list_logo']->value)) {?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_logo']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                    <?php $_smarty_tpl->_assignInScope('cod', $_smarty_tpl->tpl_vars['row']->value->cod);?>
                                    <div>

                                        <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value->url;?>
"
                                             alt="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
"><a  class="delete"
                                                                   data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
"  data-name="<?php echo $_smarty_tpl->tpl_vars['row']->value->name;?>
"  onclick="imgdel(this)" title="Elimina la imagen">×</a>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('cod', 1);?>
                                <div>


                                </div>
                            <?php }?>

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
class Block_906367487609ae703e06021_16386976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_906367487609ae703e06021_16386976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        var $cod_Logo = <?php echo $_smarty_tpl->tpl_vars['cod']->value;?>
 ;
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/logo.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
