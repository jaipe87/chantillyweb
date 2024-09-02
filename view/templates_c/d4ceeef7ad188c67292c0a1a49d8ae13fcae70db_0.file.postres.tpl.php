<?php
/* Smarty version 3.1.34-dev-7, created on 2024-07-17 10:33:05
  from 'C:\xampp\htdocs\chantilly_smarty\chantilly\view\templates\postres.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6697e4316e90b4_20986233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4ceeef7ad188c67292c0a1a49d8ae13fcae70db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly_smarty\\chantilly\\view\\templates\\postres.tpl',
      1 => 1721230280,
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
function content_6697e4316e90b4_20986233 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:layout/headerMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16827540986697e4316db315_39237393', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18901413456697e4316e1504_29994775', "scripts");
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_16827540986697e4316db315_39237393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16827540986697e4316db315_39237393',
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
                    <p>Mostrando 1 - 19 de 180 resultados</p>
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
                                <option class="category_item" value="compartir">Para compartir</option>
                                <option class="category_item" value="antojito">Antojito</option>
                                <option class="category_item" value="dulces">Para fiesta - Dulce</option>
                                <option class="category_item" value="salados">Para fiesta - Salado</option>
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
        </div>
    </section>
    <br>
    </br>
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
class Block_18901413456697e4316e1504_29994775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_18901413456697e4316e1504_29994775',
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
/js/form/postres.js?v=<?php echo rand(0,100);?>
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
