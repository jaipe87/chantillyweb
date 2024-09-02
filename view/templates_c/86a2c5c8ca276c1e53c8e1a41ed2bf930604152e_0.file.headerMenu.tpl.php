<?php
/* Smarty version 3.1.34-dev-7, created on 2024-07-19 17:40:25
  from 'C:\xampp\htdocs\chantilly\web\view\templates\layout\headerMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_669aeb59523286_00706379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a2c5c8ca276c1e53c8e1a41ed2bf930604152e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\layout\\headerMenu.tpl',
      1 => 1721427994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669aeb59523286_00706379 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="scrollmenu">
    <div id="grid">


        <?php if (!empty($_smarty_tpl->tpl_vars['lista_tematica']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_tematica']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>

                <div class="name-section">
                    <a href="#" class="content-grid" data-tematica=<?php echo $_smarty_tpl->tpl_vars['row']->value->id_tematica;?>
>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;
echo $_smarty_tpl->tpl_vars['row']->value->url;?>
" alt="">
                        <p><?php echo $_smarty_tpl->tpl_vars['row']->value->tematica;?>
</p>
                    </a>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>


    </div>
</div><?php }
}
