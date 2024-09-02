<?php
/* Smarty version 3.1.34-dev-7, created on 2024-07-31 14:46:22
  from 'C:\xampp\htdocs\chantilly\web\view\templates\tortas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66aa948ebc75d5_51325360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9819fb1f52b6efb0df25e63075c26ac25cc1eae4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\tortas.tpl',
      1 => 1722455123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/sections/scroll_tematica.tpl' => 1,
    'file:layout/sections/banner_estatico.tpl' => 1,
  ),
),false)) {
function content_66aa948ebc75d5_51325360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97069021166aa948ebbeb30_26937256', "tematicas");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30980411666aa948ebc14b0_07381841', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143974057966aa948ebc3fa3_52202057', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master.tpl");
}
/* {block "tematicas"} */
class Block_97069021166aa948ebbeb30_26937256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tematicas' => 
  array (
    0 => 'Block_97069021166aa948ebbeb30_26937256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:layout/sections/scroll_tematica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "tematicas"} */
/* {block "content"} */
class Block_30980411666aa948ebc14b0_07381841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_30980411666aa948ebc14b0_07381841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <hr id="separacion2">
    <br>
    <section id="tortas">
        <div class="container">
            <div class="header-cards">
                <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
                <h5><?php echo $_smarty_tpl->tpl_vars['subtitulo']->value;?>
</h5>
            </div>
            <br>
            <div class="section-card">
                <div class="rango-resultados">
                    <p>Mostrando <label class="label_pagina"></label> de <label class="label_total_items"></label>
                        resultados</p>
                </div>

                <div class="section-busqueda">
                    <div class="busqueda">
                        <div id="searchForm">
                            <input type="text" id="searchInput" placeholder="Buscar productos">
                            <button type="button" id="searchButton"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="pagination-grid">
                <div class="pagination"></div>
            </div>
            <br>
            <div id="lista-productos">
                <div class="grid-pagination">
                    <!--Aqui van todos los datos-->
                </div>
            </div>
            <br>
        </div>
    </section>
    <br>

    <?php $_smarty_tpl->_subTemplateRender("file:layout/sections/banner_estatico.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_143974057966aa948ebc3fa3_52202057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_143974057966aa948ebc3fa3_52202057',
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
/js/form/tortas.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
