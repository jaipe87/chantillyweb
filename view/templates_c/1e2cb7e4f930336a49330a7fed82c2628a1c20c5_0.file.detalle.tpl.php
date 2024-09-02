<?php
/* Smarty version 3.1.34-dev-7, created on 2024-07-18 12:10:39
  from 'C:\xampp\htdocs\chantilly_smarty\chantilly\view\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66994c8f46c688_37481443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e2cb7e4f930336a49330a7fed82c2628a1c20c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly_smarty\\chantilly\\view\\templates\\detalle.tpl',
      1 => 1721322637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_66994c8f46c688_37481443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189315507266994c8f411554_09307827', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94772654066994c8f4222e7_80022426', "scripts");
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_189315507266994c8f411554_09307827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_189315507266994c8f411554_09307827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <br>
    <div class="container-producto">
        <div id="producto">
            <div class="vertical-images">
                <img id="vertical-image" src="" alt="" width="100%">
            </div>
            <div class="image-producto">
                <img id="image-producto" src="" alt="" width="100%">
            </div>
            <div class="datos-producto">
                <div class="info-producto">
                    <div class="titulo">
                        <h3 id="title-product"></h3>
                        <p id="descripcion">72 horas</p>
                        <div class="elaboracion">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/check.png" alt="" width="4.5%">
                            <p>Tiempo elaboracion: <span id="tiempo_elaboracion"></span> </p>
                        </div>
                    </div>
                    <div class="precio">
                        Desde
                        <h2 id="price-product"></h2>
                    </div>
                </div>
                <br>
                <div class="detalle-producto">
                    <!-- Select de porciones -->
                    <div class="porciones">
                        <h5>Porciones</h5>
                        <select name="porciones" id="porciones">
                            <option disabled selected>Elige una opción</option>
                            <option value="10">10 porciones</option>
                            <option value="20">20 porciones</option>
                            <option value="30">30 porciones</option>
                        </select>
                    </div>
                    
                    <div class="cakes">
                        <h5>Opciones de cake</h5>
                        <select name="cakes" id="cakes">
                            <option disabled selected>Elige una opción</option>
                            <option value="Plátano">Plátano</option>
                            <option value="Chocolate">Chocolate</option>
                            <option value="Keke Ingles">Keke Ingles</option>
                            <option value="Vainilla">Vainilla</option>
                        </select>
                    </div>
                    <div class="relleno">
                        <h5>Opciones de relleno</h5>
                        <select name="relleno" id="relleno">
                            <option disabled selected>Elige una opción</option>
                            <option value="Fudge de Olla">Fudge a la Olla</option>
                            <option value="Chocolate">Chocolate</option>
                            <option value="Nutella">Nutella</option>
                            <option value="Crema de frutas">Crema de frutas</option>
                        </select>
                    </div>
                    <div class="recojo">
                        <h5>Día de recojo</h5>
                        <input type="date" id="recojo" name="recojo" required pattern="\d<?php echo 2;?>
-\d<?php echo 2;?>
-\d<?php echo 4;?>
" />
                    </div>
                    <div class="dedicatoria">
                        <h5>Dedicatoria</h5>
                        <br>
                        <p>(Tarjeta dentro del sobre adicional a la torta) + S/5.00</p>
                        <input type="text" id="dedicatoria" placeholder="Escribe tu dedicatoria">
                    </div>
                    <div class="footer-detalle">
                        <div class="total">
                            <h2 id="total-product"></h2>
                        </div>
                        <button id="btnProducto">Agregar al carrito</button>
                    </div>
                </div>
            </div>


            <div class="scroll-accesorios">
                <h2>Accesorios</h2>
                <div class="container-accesorios">
                    <div class="images-accesorio">
                        <div class="item detalle-accesorio">
                            <img id="imgAcce" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/accesorios/acce1.png" alt="imagen" width="100%">
                            <p class="titulo">Vela 0</p>
                            <div class="info precio">
                                <b>S/.4.50</b>
                                <button class="agregar-accesorio" data-id="41">Agregar</button>
                            </div>
                        </div>
                        <div class="item detalle-accesorio">
                            <img id="imgAcce" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/accesorios/acce3.png" alt="imagen" width="100%">
                            <p class="titulo">Vela 1</p>
                            <div class="info precio">
                                <b>S/.4.50</b>
                                <button class="agregar-accesorio" data-id="42">Agregar</button>
                            </div>
                        </div>
                        <div class="item detalle-accesorio">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/accesorios/acce4.png" alt="imagen" width="100%">
                            <p class="titulo">Vela 9</p>
                            <div class="info precio">
                                <b>S/.4.50</b>
                                <button class="agregar-accesorio" data-id="43">Agregar</button>
                            </div>
                        </div>
                        <div class="item detalle-accesorio">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/accesorios/acce6.png" alt="" width="100%">
                            <p class="titulo">Velitas</p>
                            <div class="info precio">
                                <b>S/.9.50</b>
                                <button class="agregar-accesorio" data-id="44">Agregar</button>
                            </div>
                        </div>
                        <div class="item detalle-accesorio">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/accesorios/acce5.png" alt="" width="100%">
                            <p class="titulo">Letra</p>
                            <div class="info precio">
                                <b>S/.7.20</b>
                                <button class="agregar-accesorio" data-id="45">Agregar</button>
                            </div>
                        </div>
                        <div class="item detalle-accesorio">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/accesorios/acce2.png" alt="imagen" width="100%">
                            <p class="titulo">Corona</p>
                            <div class="info precio">
                                <b>S/.9.50</b>
                                <button class="agregar-accesorio" data-id="46">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <hr>
        <br>
        <section id="producto-cards">
            <div class="container">
                <div class="header-cards">
                    <h1>Bocaditos para acompañar</h1>
                </div>
                <br>
                <div class="grid-pagination-cards">

                </div>
                <br>
                <div class="pagination-grid-cards">
                    <div class="pagination-cards"></div>
                </div>
            </div>
        </section>
    </div>
    <br>
    <br>
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_94772654066994c8f4222e7_80022426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_94772654066994c8f4222e7_80022426',
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
/js/form/cardCarrito.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/producto.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/detalle.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
