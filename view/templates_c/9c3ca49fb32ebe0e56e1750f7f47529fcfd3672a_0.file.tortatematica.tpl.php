<?php
/* Smarty version 3.1.34-dev-7, created on 2024-08-01 18:01:06
  from 'C:\xampp\htdocs\chantilly\web\view\templates\tortatematica.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66ac13b26af410_60123120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c3ca49fb32ebe0e56e1750f7f47529fcfd3672a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\tortatematica.tpl',
      1 => 1722553147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/sections/scroll_tematica.tpl' => 1,
    'file:layout/sections/banner_estatico.tpl' => 1,
  ),
),false)) {
function content_66ac13b26af410_60123120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52672971866ac13b2697a29_86244629', "tematicas");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118534422766ac13b269d7b1_69404056', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123472116766ac13b26a4369_95244701', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master.tpl");
}
/* {block "tematicas"} */
class Block_52672971866ac13b2697a29_86244629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tematicas' => 
  array (
    0 => 'Block_52672971866ac13b2697a29_86244629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:layout/sections/scroll_tematica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "tematicas"} */
/* {block "content"} */
class Block_118534422766ac13b269d7b1_69404056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_118534422766ac13b269d7b1_69404056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <hr id="separacion2">
    <br>
    <section id="tortas" data-tm="<?php echo $_smarty_tpl->tpl_vars['idtematica']->value;?>
">
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
class Block_123472116766ac13b26a4369_95244701 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_123472116766ac13b26a4369_95244701',
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
/js/form/tortastematicas.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
