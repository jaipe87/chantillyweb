<?php
/* Smarty version 3.1.34-dev-7, created on 2024-08-09 16:35:30
  from 'C:\xampp\htdocs\chantilly\web\view\templates\layout\sections\scroll_tematica.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66b68ba204b0a1_88480994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae0f25c4bb7a99a60d01ac93e88d17a738834885' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\layout\\sections\\scroll_tematica.tpl',
      1 => 1723239217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b68ba204b0a1_88480994 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="scrollmenu">
    <div id="grid">


        <?php if (!empty($_smarty_tpl->tpl_vars['lista_tematica']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_tematica']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>

                <div class="name-section">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/TortasTematicas/Tematica/?tm=<?php echo $_smarty_tpl->tpl_vars['row']->value->id_tematica;?>
" class="content-grid" data-tematica=<?php echo $_smarty_tpl->tpl_vars['row']->value->id_tematica;?>
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
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['id_pagina']->value)) {?>
    <input type="hidden" id="page" value="<?php echo $_smarty_tpl->tpl_vars['id_pagina']->value;?>
">
<?php } else { ?>
    <input type="hidden" id="page" value="0">
<?php }
}
}
