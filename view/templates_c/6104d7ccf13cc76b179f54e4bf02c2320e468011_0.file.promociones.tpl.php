<?php
/* Smarty version 3.1.34-dev-7, created on 2024-08-09 16:56:40
  from 'C:\xampp\htdocs\chantilly\web\view\templates\promociones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66b690987c9207_86009845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6104d7ccf13cc76b179f54e4bf02c2320e468011' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\promociones.tpl',
      1 => 1723240586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/sections/scroll_tematica.tpl' => 1,
    'file:layout/sections/banner_estatico.tpl' => 1,
  ),
),false)) {
function content_66b690987c9207_86009845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129234688966b690986e2ab7_47306165', "tematicas");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103776671066b690987bd698_06439418', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126653468666b690987c2691_63062000', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master.tpl");
}
/* {block "tematicas"} */
class Block_129234688966b690986e2ab7_47306165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tematicas' => 
  array (
    0 => 'Block_129234688966b690986e2ab7_47306165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:layout/sections/scroll_tematica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "tematicas"} */
/* {block "content"} */
class Block_103776671066b690987bd698_06439418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_103776671066b690987bd698_06439418',
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
        </div>
    </section>
    <br>
    <br>
    <?php $_smarty_tpl->_subTemplateRender("file:layout/sections/banner_estatico.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_126653468666b690987c2691_63062000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_126653468666b690987c2691_63062000',
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
/js/form/promociones.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
