<?php
/* Smarty version 3.1.34-dev-7, created on 2024-06-06 15:15:43
  from 'C:\xampp\htdocs\chantilly\admin\view\templates\layout\master_dshbrd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_666218ef194aa6_02168889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f2a71b8c8870c7639789ef73071530481030afd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\admin\\view\\templates\\layout\\master_dshbrd.tpl',
      1 => 1717704929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header_dshbrd.tpl' => 1,
    'file:layout/footer_dshbrd.tpl' => 1,
  ),
),false)) {
function content_666218ef194aa6_02168889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/header_dshbrd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><!--Llama a la cabecera del dashboard header_dsbrd.tpl-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1611652449666218ef1935f0_01097498', "breadcrumbs");
?>


<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
    
    <div id="logoPDF" width="1%" style="display:none">
        <img src="view/templates/assets/images/nuevologo.png">
    </div>
    
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_772651332666218ef194404_96562155', "content");
?>

    </div>
    <!-- .animated -->
</div>
<!-- /.content -->

<div class="clearfix"></div>






<?php $_smarty_tpl->_subTemplateRender("file:layout/footer_dshbrd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "opciones"} */
class Block_1096839553666218ef193c26_83713512 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                               


                                <?php
}
}
/* {/block "opciones"} */
/* {block "breadcrumbs"} */
class Block_1611652449666218ef1935f0_01097498 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs' => 
  array (
    0 => 'Block_1611652449666218ef1935f0_01097498',
  ),
  'opciones' => 
  array (
    0 => 'Block_1096839553666218ef193c26_83713512',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1096839553666218ef193c26_83713512', "opciones", $this->tplIndex);
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
class Block_772651332666218ef194404_96562155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_772651332666218ef194404_96562155',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





        <?php
}
}
/* {/block "content"} */
}
