<?php
/* Smarty version 3.1.34-dev-7, created on 2024-06-25 12:17:48
  from 'C:\xampp\htdocs\chantilly_smarty\admin\view\templates\tortas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_667afbbc5edf80_33160019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0567fc76af79b36de2d0f4a74a3e172b143e89da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly_smarty\\admin\\view\\templates\\tortas.tpl',
      1 => 1719335864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_667afbbc5edf80_33160019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2139630314667afbbc5e8285_15625548', "content");
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_2139630314667afbbc5e8285_15625548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2139630314667afbbc5e8285_15625548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <hr id="separacion2">
    <br>
    <section id="tortas">
        <div class="container">
            <div class="header-cards">
                <h1>TORTAS EN LINEA</h1>
                <h5>Las mejores tortas en la Casa del Chantilly, calidad y amor.</h5>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/tortas/torta8.jpg" alt="imagen"
                                    width="20%"></a>
                            <div class="titulo">Torta tres leches de Chocolate</div>
                            <div class="descripcion">Lorem ipsum dolor sit amets adipisicing.</div>
                            <div class="precio"><b>S/.200 </b>- S/.500</div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="008">Agregar al
                                Carrito
                            </button>
                        </div>
                    </div>
                    <div id="items" class="item" category="chocolate">
                        <div class="cuerpo">
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
                            <a href="producto.html"><img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
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
}
