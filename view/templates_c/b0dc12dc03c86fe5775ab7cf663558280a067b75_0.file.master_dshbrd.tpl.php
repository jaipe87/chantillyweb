<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-11 15:20:20
  from 'C:\xampp\htdocs\reyfam\public\admin_web\view\templates\layout\master_dshbrd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_609ae704111d67_02811276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0dc12dc03c86fe5775ab7cf663558280a067b75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reyfam\\public\\admin_web\\view\\templates\\layout\\master_dshbrd.tpl',
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
function content_609ae704111d67_02811276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/header_dshbrd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205956488609ae70410de74_11185322', "breadcrumbs");
?>


<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1218581743609ae7041107e1_51048477', "content");
?>

    </div>
    <!-- .animated -->
</div>
<!-- /.content -->

<div class="clearfix"></div>






<?php $_smarty_tpl->_subTemplateRender("file:layout/footer_dshbrd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "opciones"} */
class Block_1342950674609ae70410f116_87311781 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





                                <?php
}
}
/* {/block "opciones"} */
/* {block "breadcrumbs"} */
class Block_205956488609ae70410de74_11185322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs' => 
  array (
    0 => 'Block_205956488609ae70410de74_11185322',
  ),
  'opciones' => 
  array (
    0 => 'Block_1342950674609ae70410f116_87311781',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1342950674609ae70410f116_87311781', "opciones", $this->tplIndex);
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
class Block_1218581743609ae7041107e1_51048477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1218581743609ae7041107e1_51048477',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





        <?php
}
}
/* {/block "content"} */
}
