<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-27 12:30:34
  from 'C:\xampp\htdocs\web\admin\view\templates\layout\master_dshbrd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_660457bad55003_49134594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7230fd1164bc389216e9f457b06ac29a64edc381' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\admin\\view\\templates\\layout\\master_dshbrd.tpl',
      1 => 1711559501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header_dshbrd.tpl' => 1,
    'file:layout/footer_dshbrd.tpl' => 1,
  ),
),false)) {
function content_660457bad55003_49134594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/header_dshbrd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><!--Llama a la cabecera del dashboard header_dsbrd.tpl-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1935296658660457bacb4023_39764652', "breadcrumbs");
?>


<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1344117137660457bad54222_92432873', "content");
?>

    </div>
    <!-- .animated -->
</div>
<!-- /.content -->

<div class="clearfix"></div>






<?php $_smarty_tpl->_subTemplateRender("file:layout/footer_dshbrd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "opciones"} */
class Block_1688754287660457bad52ed4_89240848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





                                <?php
}
}
/* {/block "opciones"} */
/* {block "breadcrumbs"} */
class Block_1935296658660457bacb4023_39764652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs' => 
  array (
    0 => 'Block_1935296658660457bacb4023_39764652',
  ),
  'opciones' => 
  array (
    0 => 'Block_1688754287660457bad52ed4_89240848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!--Crea el bloque breadcrumbs y agrega el contenido-->
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-6">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1><!--Se llama desde la base-->
                        </div>
                    </div>
                </div>
                <div class="d-none d-sm-block   col-sm-6">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-sm-center text-right">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1688754287660457bad52ed4_89240848', "opciones", $this->tplIndex);
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
class Block_1344117137660457bad54222_92432873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1344117137660457bad54222_92432873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





        <?php
}
}
/* {/block "content"} */
}
