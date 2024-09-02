<?php
/* Smarty version 3.1.34-dev-7, created on 2024-06-25 12:19:21
  from 'C:\xampp\htdocs\chantilly_smarty\admin\view\templates\bocaditos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_667afc190703f7_38230781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e22e83b7e56891491805e6a07375593a331cd5dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly_smarty\\admin\\view\\templates\\bocaditos.tpl',
      1 => 1719335956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_667afc190703f7_38230781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_572479000667afc19068d72_10940148', "content");
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_572479000667afc19068d72_10940148 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_572479000667afc19068d72_10940148',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <hr id="separacion2">
    <br>
    <section id="">
        <div class="container">
            <div class="header-cards">
                <h1>BOCADITOS EN LÍNEA</h1>
                <h5>Los mejores bocaditos en la Casa del Chantilly, calidad y amor.</h5>
            </div>
            <br>
            <div class="section-card">
                <div class="rango-resultados">
                    <p>Mostrando 1 - 8 de 100 resultados</p>
                </div>
                <div class="section-busqueda">
                    <div class="busqueda">
                        <form action="#" method="post" target="_self">
                            <input type="search" id="searchInput" name="busquedaproductos" placeholder="Buscar productos">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
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
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito1.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Alfajor Grande
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="47">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito2.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Alfajor Grande
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="48">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito3.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Alfajor Grande
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="49">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="dulces">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito4.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Bocaditos Dulces
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="50">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="dulces">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito5.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Bocaditos Dulces
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="51">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="dulces">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito6.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Bocaditos Dulces
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="52">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="salados">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito7.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Bocaditos Salados
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="53">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="salados">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito8.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Bocaditos Salados
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="54">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="compartir">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito9.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Crema Volteada
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="55">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="compartir">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito10.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Crema Volteada
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="56">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito11.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Empanada de Carne
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="57">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito12.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Empanada de Carne
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="58">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito13.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Empanada de Coco
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="59">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito14.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Empanada de Coco
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="60">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito15.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Empanada de Pollo
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="61">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito16.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Empanada de Pollo
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="62">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito17.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Empanada de Pollo
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="63">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito18.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Empanada Dulce
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="64">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito19.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Empanada Dulce
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="65">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito20.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Empanada Dulce
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="66">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito21.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Empanada de Carne
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="67">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito22.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Galleta de Chocolate
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="68">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito23.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Galleta de Chocolate
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="69">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito24.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Galleta de Chocolate
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="70">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="compartir">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito25.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Mil Hojas
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="70">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="compartir">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito26.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Mil Hojas
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="70">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="compartir">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito27.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Milhojas
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="70">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito28.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Oreja Dulce
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="70">Agregar al
                                Carrito</button>
                        </div>
                    </div>
                    <div id="items" class="item" category="antojito">
                        <div class="cuerpo">
                            <a href="#">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/bocaditos/bocadito29.jpg" alt="imagen" width="20%">
                            </a>
                            <div class="titulo">
                                Oreja Dulce
                            </div>
                            <div class="descripcion">
                                Lorem ipsum dolor sit amets adipisicing.
                            </div>
                            <div class="precio">
                                <b>S/.200 </b>- S/.500
                            </div>
                        </div>
                        <div class="pie">
                            <button id="boton-agregar" class="btn-card agregar-producto" data-id="70">Agregar al
                                Carrito</button>
                        </div>
                    </div>

                </div>

            </div>
            <br>
            <div class="pagination-grid">
                <div class="pagination"></div>
            </div>
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
