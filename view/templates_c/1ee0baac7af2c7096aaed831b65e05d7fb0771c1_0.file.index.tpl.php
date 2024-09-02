<?php
/* Smarty version 3.1.34-dev-7, created on 2024-07-17 10:35:23
  from 'C:\xampp\htdocs\chantilly_smarty\chantilly\view\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6697e4bb812241_54576772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ee0baac7af2c7096aaed831b65e05d7fb0771c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly_smarty\\chantilly\\view\\templates\\index.tpl',
      1 => 1721230508,
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
function content_6697e4bb812241_54576772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:layout/headerMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7977739366697e4bb8057f4_64335284', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5487169876697e4bb80ab89_67644498', "scripts");
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_7977739366697e4bb8057f4_64335284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7977739366697e4bb8057f4_64335284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-slider">
        <div class="slider" id="slider">
            <div class="slider-content">
                <img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/slider1.jpg" alt="" class="slider_img" width="100%">
            </div>
            <div class="slider-content">
                <img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/slider2.jpg" alt="" class="slider_img" width="100%">
            </div>
            <div class="slider-content">
                <img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/slider3.jpg" alt="" class="slider_img" width="100%">
            </div>
        </div>
    </div>
    <div class="indicators" id="indicators"></div>

    <section id="tortas">
        <div class="container">
            <div class="header-cards">
                <h1>Productos destacados</h1>
                <h5>Los mejores postres en la Casa del Chantilly, calidad y amor.</h5>
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
                <div class="grid-pagination" id="items-index">
                    <!---->
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
    <br>
    <section>
        <div class="banner-2">
            <figure class="fondo"></figure>
            <figure class="foto">
                <div class="banner-content">
                    <div class="banner-title">
                        <h1><b>Pedidos Personalizados!!</b></h1>
                        <h5>Personaliza tu producto con nosotros, mandanos tu diseño y descripción de lo que
                            necesites,
                            nuestro equipo te ayudará con la cotización del producto.</h5>
                    </div>
                    <br>
                    <button class="btn-banner"
                        onclick="location.href='https://api.whatsapp.com/send?phone=+51955122100&text=Quisiera%20hacer%20un%20pedido...'">
                        <h3>¡pide aquí! <i class="fa-brands fa-whatsapp"></i></h3>
                    </button>
                </div>
            </figure>
        </div>
    </section>
    <br>
    <br>
    <section id="tortas-cards" class="lista-productos-cards">
        <div class="container">
            <div class="header-cards">
                <h1>Tortas Personalizadas</h1>
                <h5>Los mejores postres en la Casa del Chantilly, calidad y amor.</h5>
            </div>
            <br>
            <div class="grid-pagination-cards">
                <!--Aqui van los datos de las cards-->
            </div>
            <br>
            <div class="pagination-grid-cards">
                <div class="pagination-cards"></div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section>
        <div id="container-locales" class="container">
            <div class="header-locales">
                <h1>Nuestros Locales</h1>
                <h5>Conoce un poco más de nuestros locales a nivel nacional</h5>
            </div>
            <br>
            <br>
            <div class="cards-locales">

            </div>
        </div>
    </section>
    <br>
    <br>

    <!--
    -Me faltaria agregar los banners a la base de datos y modificar el js
    -Realizar la selección de productos mediante bloques - TERMINADO
    -Agregarlo al carrito
    -Integrar el chat
    -Integrar los filtros de categoria y por busqueda
    -->
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_5487169876697e4bb80ab89_67644498 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_5487169876697e4bb80ab89_67644498',
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
/js/form/index.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/slider.js?v=<?php echo rand(0,100);?>
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
