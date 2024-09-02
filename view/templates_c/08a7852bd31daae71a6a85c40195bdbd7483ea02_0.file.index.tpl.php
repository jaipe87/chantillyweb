<?php
/* Smarty version 3.1.34-dev-7, created on 2024-06-25 12:48:20
  from 'C:\xampp\htdocs\chantilly_smarty\admin\view\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_667b02e4b55cc6_51128450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08a7852bd31daae71a6a85c40195bdbd7483ea02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly_smarty\\admin\\view\\templates\\index.tpl',
      1 => 1719337699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_667b02e4b55cc6_51128450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_681525940667b02e4b3fd51_61542927', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1011387381667b02e4b54d58_03900547', "scripts");
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_681525940667b02e4b3fd51_61542927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_681525940667b02e4b3fd51_61542927',
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
                        <form action="#" method="post" target="_self">
                            <input type="search" id="searchInput" name="busquedaproductos"
                                placeholder="Buscar productos">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
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
                    <div id="items" class="item" category="leches">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta1.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta tres leches de Vainilla</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200</b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="001">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="leches">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta2.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta tres leches de Vainilla</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="002">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="leches">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta3.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta tres leches de Guanábana</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card  agregar-producto" data-id="003">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="leches">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta4.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta tres leches de Guanábana</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="004">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="leches">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta5.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta tres leches de Coco </div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="005">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="leches">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta6.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta tres leches de Coco</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="006">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="leches">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta7.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta tres leches de Chocolate</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="007">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="leches">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta8.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta tres leches de Chocolate</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="008">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="chocolate">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta9.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta Sublime</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="009">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="chocolate">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta10.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta Sublime</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="009">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="chocolate">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta11.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta Moca</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="009">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="chocolate">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta12.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta Moca</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="009">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="leches">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta13.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta de tres leches Chantilly</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="009">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="leches">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta14.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta de tres leches Chantilly</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="009">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="chocolate">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta15.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta de Chocolate</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="009">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="chocolate">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta16.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta de Chocolate</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="009">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="chocolate">
                        <div class="cuerpo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta17.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta Crocante</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="009">Agregar al
                                Carrito</button>
                        </div>
                    </div>
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
                <div id="items" class="item-cards">
                    <div class="cuerpo">
                        <a href="#">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta1.jpg" alt="imagen" width="20%">
                        </a>
                        <div class="titulo">
                            Torta Clásica
                        </div>
                        <div class="descripcion">
                            Lorem ipsum dolor sit amets adipisicing.
                        </div>
                        <div class="precio">
                            <b>S/.200 </b>- S/.500
                        </div>
                    </div>
                    <div class="pie">
                        <button id="boton-agregar" class="btn-card agregar-producto" data-id="23">
                            Agregar al Carrito</button>
                    </div>
                </div>
                <div id="items" class="item-cards">
                    <div class="cuerpo">
                        <a href="#">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta17.jpg" alt="imagen" width="20%">
                        </a>
                        <div class="titulo">
                            Torta de fresas
                        </div>
                        <div class="descripcion">
                            Lorem ipsum dolor sit amets adipisicing.
                        </div>
                        <div class="precio">
                            <b>S/.200 </b>- S/.500
                        </div>
                    </div>
                    <div class="pie">
                        <button id="boton-agregar" class="btn-card agregar-producto" data-id="24">Agregar al
                            Carrito</button>
                    </div>
                </div>
                <div id="items" class="item-cards">
                    <div class="cuerpo">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta5.jpg" alt="imagen" width="20%">
                        </a>
                        <div class="titulo">
                            Torta Clásica
                        </div>
                        <div class="descripcion">
                            Lorem ipsum dolor sit amets adipisicing.
                        </div>
                        <div class="precio">
                            <b>S/.200 </b>- S/.500
                        </div>
                    </div>
                    <div class="pie">
                        <button id="boton-agregar" class="btn-card agregar-producto" data-id="25">Agregar al
                            Carrito</button>
                    </div>
                </div>
                <div id="items" class="item-cards">
                    <div class="cuerpo">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta7.jpg" alt="imagen" width="20%">
                        </a>
                        <div class="titulo">
                            Torta Clásica
                        </div>
                        <div class="descripcion">
                            Lorem ipsum dolor sit amets adipisicing.
                        </div>
                        <div class="precio">
                            <b>S/.200 </b>- S/.500
                        </div>
                    </div>
                    <div class="pie">
                        <button id="boton-agregar" class="btn-card agregar-producto" data-id="26">Agregar al
                            Carrito</button>
                    </div>
                </div>
                <div id="items" class="item-cards">
                    <div class="cuerpo">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta9.jpg" alt="imagen" width="20%">
                        </a>
                        <div class="titulo">
                            Torta Clásica
                        </div>
                        <div class="descripcion">
                            Lorem ipsum dolor sit amets adipisicing.
                        </div>
                        <div class="precio">
                            <b>S/.200 </b>- S/.500
                        </div>
                    </div>
                    <div class="pie">
                        <button id="boton-agregar" class="btn-card agregar-producto" data-id="27">Agregar al
                            Carrito</button>
                    </div>
                </div>
                <div id="items" class="item-cards">
                    <div class="cuerpo">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta11.jpg" alt="imagen" width="20%">
                        </a>
                        <div class="titulo">
                            Torta Clásica
                        </div>
                        <div class="descripcion">
                            Lorem ipsum dolor sit amets adipisicing.
                        </div>
                        <div class="precio">
                            <b>S/.200 </b>- S/.500
                        </div>
                    </div>
                    <div class="pie">
                        <button id="boton-agregar" class="btn-card agregar-producto" data-id="71">Agregar al
                            Carrito</button>
                    </div>
                </div>
                <div id="items" class="item-cards">
                    <div class="cuerpo">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta13.jpg" alt="imagen" width="20%">
                        </a>
                        <div class="titulo">
                            Torta Clásica
                        </div>
                        <div class="descripcion">
                            Lorem ipsum dolor sit amets adipisicing.
                        </div>
                        <div class="precio">
                            <b>S/.200 </b>- S/.500
                        </div>
                    </div>
                    <div class="pie">
                        <button id="boton-agregar" class="btn-card agregar-producto" data-id="72">Agregar al
                            Carrito</button>
                    </div>
                </div>
                <div id="items" class="item-cards">
                    <div class="cuerpo">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/producto.html">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta15.jpg" alt="imagen" width="20%">
                        </a>
                        <div class="titulo">
                            Torta Clásica
                        </div>
                        <div class="descripcion">
                            Lorem ipsum dolor sit amets adipisicing.
                        </div>
                        <div class="precio">
                            <b>S/.200 </b>- S/.500
                        </div>
                    </div>
                    <div class="pie">
                        <button id="boton-agregar" class="btn-card agregar-producto" data-id="73">Agregar al
                            Carrito</button>
                    </div>
                </div>
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
                <div class="card-section-local">
                    <div class="cuerpo">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/local2.jpg" alt="imagen">
                        <br><br>
                        <div class="titulo">
                            La Casa del Chantilly - San Martín de Porres
                        </div>
                        <div class="descripcion" style="font-family: 'Poppins' !important; font-size: 13px">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Quasi nesciunt, fugiat id perferendis odit ab
                            cum culpa ullam itaque sunt sed dolorem quaerat
                        </div>
                    </div>
                    <br>
                    <div class="pie">
                        <a href="https://maps.app.goo.gl/y37JbYxxP3Re9S8w7">Más información &#62;</a>
                    </div>
                </div>
                <div class="card-section-local">
                    <div class="cuerpo">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/local2.jpg" alt="imagen">
                        <br><br>
                        <div class="titulo">
                            La Casa del Chantilly - Comas
                        </div>
                        <div class="descripcion" style="font-family: 'Poppins' !important; font-size: 13px">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Quasi nesciunt, fugiat id perferendis odit ab
                            cum culpa ullam itaque sunt sed dolorem quaerat
                        </div>
                    </div>
                    <br>
                    <div class="pie">
                        <a href="https://maps.app.goo.gl/UY2t22Wcroyckn2y8">Más información &#62;</a>
                    </div>
                </div>
                <div class="card-section-local">
                    <div class="cuerpo">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/local2.jpg" alt="imagen">
                        <br><br>
                        <div class="titulo">
                            La Casa del Chantilly - San Félipe
                        </div>
                        <div class="descripcion" style="font-family: 'Poppins' !important; font-size: 13px">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Quasi nesciunt, fugiat id perferendis odit ab
                            cum culpa ullam itaque sunt sed dolorem quaerat
                        </div>
                    </div>
                    <br>
                    <div class="pie">
                        <a href="https://maps.app.goo.gl/H6SHKQ2h9MA2psyL9">Más información &#62;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    
    <!--Me faltaria como cambiar los bloques. 
    Agregando la ruta y sus indexes.
    Crear las rutas en los controllers

    Agregar los js-->
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_1011387381667b02e4b54d58_03900547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1011387381667b02e4b54d58_03900547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/chantillyjs/slider.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
