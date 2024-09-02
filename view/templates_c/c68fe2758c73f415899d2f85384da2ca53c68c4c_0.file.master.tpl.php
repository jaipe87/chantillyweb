<?php
/* Smarty version 3.1.34-dev-7, created on 2024-07-31 14:13:23
  from 'C:\xampp\htdocs\chantilly\web\view\templates\layout\master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66aa8cd3925535_25698518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c68fe2758c73f415899d2f85384da2ca53c68c4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\layout\\master.tpl',
      1 => 1722453185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_66aa8cd3925535_25698518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135883122366aa8cd3924990_86763272', "content");
?>



<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_135883122366aa8cd3924990_86763272 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_135883122366aa8cd3924990_86763272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




   
     
<?php
}
}
/* {/block "content"} */
}
