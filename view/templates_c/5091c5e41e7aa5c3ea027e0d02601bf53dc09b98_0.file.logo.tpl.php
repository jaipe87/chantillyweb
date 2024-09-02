<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-22 15:57:38
  from 'C:\xampp\htdocs\web\admin\view\templates\logo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65fdf0c2ef1c01_97347442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5091c5e41e7aa5c3ea027e0d02601bf53dc09b98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\admin\\view\\templates\\logo.tpl',
      1 => 1608610585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fdf0c2ef1c01_97347442 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151121939865fdf0c2e76693_87673024', "estilos");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12065414065fdf0c2e7ac81_78727388', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197497088265fdf0c2eeb166_13512027', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_151121939865fdf0c2e76693_87673024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_151121939865fdf0c2e76693_87673024',
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
class Block_12065414065fdf0c2e7ac81_78727388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12065414065fdf0c2e7ac81_78727388',
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
class Block_197497088265fdf0c2eeb166_13512027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_197497088265fdf0c2eeb166_13512027',
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
