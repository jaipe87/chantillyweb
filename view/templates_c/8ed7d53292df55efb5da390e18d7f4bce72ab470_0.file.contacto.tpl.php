<?php
/* Smarty version 3.1.34-dev-7, created on 2024-08-08 11:28:31
  from 'C:\xampp\htdocs\chantilly\web\view\templates\contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66b4f22f919cc0_33498191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ed7d53292df55efb5da390e18d7f4bce72ab470' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\contacto.tpl',
      1 => 1723134474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/sections/scroll_tematica.tpl' => 1,
  ),
),false)) {
function content_66b4f22f919cc0_33498191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83917153966b4f22f911331_84889736', "tematicas");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26621871866b4f22f913f73_81538273', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120528528766b4f22f916559_88694695', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master.tpl");
}
/* {block "tematicas"} */
class Block_83917153966b4f22f911331_84889736 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tematicas' => 
  array (
    0 => 'Block_83917153966b4f22f911331_84889736',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:layout/sections/scroll_tematica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "tematicas"} */
/* {block "content"} */
class Block_26621871866b4f22f913f73_81538273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_26621871866b4f22f913f73_81538273',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <hr id="separacion2">
    <br>
    <section>
    <div id="container-section-locales" class="container">
        <div class="header-section-locales">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            <h5><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</h5>
        </div>
        <br>
        <br>
        <div class="cards-section-locales">
            <!---->
        </div>
        <br>
    </div>
    <br>
    <br>
</section>
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_120528528766b4f22f916559_88694695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_120528528766b4f22f916559_88694695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/chosen/chosen.jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/datepicker/datepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/datepicker/datepicker.es-ES.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/contacto.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
