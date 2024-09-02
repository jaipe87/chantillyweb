<?php
/* Smarty version 3.1.34-dev-7, created on 2024-07-17 16:41:02
  from 'C:\xampp\htdocs\chantilly_smarty\chantilly\view\templates\tortas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66983a6e7fda33_05437279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '577633e504c8a60b2b37fd434a44230974d9239d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly_smarty\\chantilly\\view\\templates\\tortas.tpl',
      1 => 1721230479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/headerMenu.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_66983a6e7fda33_05437279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:layout/headerMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91713107966983a6e7f2d24_84286008', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208873923966983a6e7f71b2_73548729', "scripts");
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_91713107966983a6e7f2d24_84286008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_91713107966983a6e7f2d24_84286008',
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
                    <p>Mostrando 1 - 8 de 40 resultados</p>
                </div>
                <div class="section-busqueda">
                    <div class="busqueda">
                        <form action="#" method="post" target="_self" id="searchForm">
                            <input type="search" id="searchInput" name="busquedaproductos" placeholder="Buscar productos">
                            <button type="submit" id="searchButton"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="ordenar">
                        <form method="post" action="">
                            <select class="category_list" id="categoryFilter">
                                <option disabled selected>Ordenar por...</option>
                                <option class="category_item" value="all">Todo</option>
                                <optgroup label="Por Sabores">
                                    <option class="category_item" value="chocolate">Chocolate</option>
                                    <option class="category_item" value="leches">Tres leches</option>
                                </optgroup>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div id="lista-productos">
                <div class="grid-pagination">
                    <!--Aqui van todos los datos-->
                </div>
                <br>
                <div class="pagination-grid">
                    <div class="pagination"></div>
                </div>
            </div>
            <br>
        </div>
    </section>
    <br>

    <section>
        <div class="banner-2">
            <figure class="fondo"></figure>
            <figure class="foto">
                <div class="banner-content">
                    <div class="banner-title">
                        <h1><b>Pedidos Personalizados!!</b></h1>
                        <h5>Personaliza tu producto con nosotros, mandanos tu diseño y descripción de lo que necesites,
                            nuestro equipo te ayudará con la cotización del producto.</h5>
                    </div>
                    <br>
                    <button class="btn-banner" onclick="location.href='https://wa.pe/chantilly'">
                        <h3>¡pide aquí! <i class="fa-brands fa-whatsapp"></i></h3>
                    </button>
                </div>
            </figure>
        </div>
    </section>
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_208873923966983a6e7f71b2_73548729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_208873923966983a6e7f71b2_73548729',
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
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/chantillyjs/searchCategory.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block "scripts"} */
}
