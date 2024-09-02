<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 12:20:07
  from 'C:\xampp\htdocs\admin_amk\view\templates\layout\master_dshbrd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee7adc7423d92_51603014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28936b186152df6ebc1bbd6190f4c557cd83d47d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin_amk\\view\\templates\\layout\\master_dshbrd.tpl',
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
function content_5ee7adc7423d92_51603014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/header_dshbrd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15456963895ee7adc736be59_89308708', "breadcrumbs");
?>


<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2655838935ee7adc7422f14_10782648', "content");
?>

    </div>
    <!-- .animated -->
</div>
<!-- /.content -->

<div class="clearfix"></div>






<?php $_smarty_tpl->_subTemplateRender("file:layout/footer_dshbrd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "opciones"} */
class Block_5756322325ee7adc7421d97_83141333 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





                                <?php
}
}
/* {/block "opciones"} */
/* {block "breadcrumbs"} */
class Block_15456963895ee7adc736be59_89308708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs' => 
  array (
    0 => 'Block_15456963895ee7adc736be59_89308708',
  ),
  'opciones' => 
  array (
    0 => 'Block_5756322325ee7adc7421d97_83141333',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5756322325ee7adc7421d97_83141333', "opciones", $this->tplIndex);
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
class Block_2655838935ee7adc7422f14_10782648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2655838935ee7adc7422f14_10782648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





        <?php
}
}
/* {/block "content"} */
}
