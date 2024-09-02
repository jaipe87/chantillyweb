<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-09 20:38:01
  from 'C:\xampp\htdocs\admin_web\view\templates\layout\master_dshbrd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd17bf9357302_39604775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bbd90fc9b3e9bb6969c87417e295e45f1353dbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin_web\\view\\templates\\layout\\master_dshbrd.tpl',
      1 => 1585431785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header_dshbrd.tpl' => 1,
    'file:layout/footer_dshbrd.tpl' => 1,
  ),
),false)) {
function content_5fd17bf9357302_39604775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/header_dshbrd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3522475655fd17bf9352f97_33115680', "breadcrumbs");
?>


<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9551833335fd17bf9356477_49971737', "content");
?>

    </div>
    <!-- .animated -->
</div>
<!-- /.content -->

<div class="clearfix"></div>






<?php $_smarty_tpl->_subTemplateRender("file:layout/footer_dshbrd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "opciones"} */
class Block_2669564935fd17bf9355393_95893137 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





                                <?php
}
}
/* {/block "opciones"} */
/* {block "breadcrumbs"} */
class Block_3522475655fd17bf9352f97_33115680 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs' => 
  array (
    0 => 'Block_3522475655fd17bf9352f97_33115680',
  ),
  'opciones' => 
  array (
    0 => 'Block_2669564935fd17bf9355393_95893137',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-6">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
                        </div>
                    </div>
                </div>
                <div class="d-none d-sm-block   col-sm-6">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-sm-center text-right">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2669564935fd17bf9355393_95893137', "opciones", $this->tplIndex);
?>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "breadcrumbs"} */
/* {block "content"} */
class Block_9551833335fd17bf9356477_49971737 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9551833335fd17bf9356477_49971737',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





        <?php
}
}
/* {/block "content"} */
}
