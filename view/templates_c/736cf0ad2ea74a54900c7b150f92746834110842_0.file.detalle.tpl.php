<?php
/* Smarty version 3.1.34-dev-7, created on 2024-08-27 19:28:15
  from 'C:\xampp\htdocs\chantilly\web\view\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66ce6f1ff162e3_85340172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '736cf0ad2ea74a54900c7b150f92746834110842' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\detalle.tpl',
      1 => 1724804894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ce6f1ff162e3_85340172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62932352266ce6f1fef6913_37495863', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55088451866ce6f1ff11360_71366489', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master.tpl");
}
/* {block "content"} */
class Block_62932352266ce6f1fef6913_37495863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_62932352266ce6f1fef6913_37495863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <br>
    <div class="container-producto">

        <div id="producto" data-wb="<?php echo $_smarty_tpl->tpl_vars['producto']->value->codart_web;?>
" data-wb-cd="<?php echo $_smarty_tpl->tpl_vars['producto']->value->cod_categoria;?>
"
         pc="<?php echo $_smarty_tpl->tpl_vars['producto']->value->mostrar_porciones;?>
" kk="<?php echo $_smarty_tpl->tpl_vars['producto']->value->mostrar_kekes;?>
" rr="<?php echo $_smarty_tpl->tpl_vars['producto']->value->mostrar_relleno;?>
" dr="<?php echo $_smarty_tpl->tpl_vars['producto']->value->mostrar_dia_recojo;?>
" dd="<?php echo $_smarty_tpl->tpl_vars['producto']->value->mostrar_dedicatoria;?>
">
            <div class="vertical-images">
                <img id="vertical-image" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;
echo $_smarty_tpl->tpl_vars['producto']->value->url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['producto']->value->descri_corta;?>
" width="100%">
            </div>
            <div class="image-producto">
                <img id="image-producto" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;
echo $_smarty_tpl->tpl_vars['producto']->value->url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['producto']->value->descri_corta;?>
" width="100%">
            </div>
            <div class="datos-producto">
                <div class="info-producto">
                    <div class="titulo">
                        <h3 id="title-product"><?php echo $_smarty_tpl->tpl_vars['producto']->value->descri_corta;?>
</h3>
                    </div>
                    <div class="precio">
                        <?php if ($_smarty_tpl->tpl_vars['producto']->value->precio_max == 0) {?>
                            <h2 id="price-product">S/ <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio_min;?>
</h2>
                        <?php } else { ?>
                            <h2 id="price-product">S/ <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio_min;?>
 - S/ <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio_max;?>
 </h2>
                        <?php }?>

                    </div>
                    <div class="descripcion_larga">
                        <p> <?php echo $_smarty_tpl->tpl_vars['producto']->value->descri_larga;?>
</p>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['producto']->value->tipo_producto == 1 || $_smarty_tpl->tpl_vars['producto']->value->tipo_producto == 2) {?>
                        <?php if ($_smarty_tpl->tpl_vars['producto']->value->mostrar_porciones != 0) {?>
                            <div class="elaboracion">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/images/icons/check.png" alt="" width="4.5%">
                                <p>Tiempo elaboración: <span id="tiempo_elaboracion">-</span> horas </p>
                            </div>
                        <?php }?>
                    <?php }?>
                </div>
                <br>
                <div class="detalle-producto">

                    <?php if ($_smarty_tpl->tpl_vars['producto']->value->mostrar_porciones != 0) {?>
                        <div class="porciones">
                            <h5>Porciones</h5>
                            <select name="porciones" id="porciones">
                                <option selected value="0">Elige una opción</option>
                                <?php if (!empty($_smarty_tpl->tpl_vars['lista_porciones']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_porciones']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->codart;?>
" data-porcion ="<?php echo $_smarty_tpl->tpl_vars['row']->value->descri;?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['row']->value->porciones;?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value->porciones_detalle;?>
)</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['producto']->value->mostrar_kekes != 0) {?>
                        <div class="cakes">
                            <h5>Opciones de cake</h5>
                            <select name="cakes" id="cakes">
                                <option selected value="0">Elige una opción</option>
                                <?php if (!empty($_smarty_tpl->tpl_vars['lista_kekes']->value)) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_kekes']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id_keke;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->keke;?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['producto']->value->mostrar_relleno != 0) {?>

                        <div class="relleno">
                            <h5>Opciones de relleno</h5>
                            <select name="relleno" id="relleno">
                                <option selected value="0">Elige una opción</option>

                            </select>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['producto']->value->mostrar_dia_recojo != 0) {?>
                        <div class="recojo">
                            <h5>Día de recojo</h5>
                            <input type="date" id="recojo" name="recojo" required pattern="\d<?php echo 2;?>
-\d<?php echo 2;?>
-\d<?php echo 4;?>
" />
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['producto']->value->mostrar_dedicatoria != 0) {?>
                        <div class="dedicatoria">
                            <div>
                                <h5>Nombre o Dedicatoria</h5>
                              <!--  <p>(Tarjeta dentro del sobre adicional a la torta) + S/ <span id="adicional"><?php echo $_smarty_tpl->tpl_vars['impdedicatoria']->value;?>
</span> </p>-->
                            </div>


                            <textarea id="dedicatoria" cols="5" rows="5" placeholder="Escribe tu dedicatoria" data-ok="0"></textarea>

                        </div>
                    <?php }?>

                    <div class="footer-detalle">


                        <?php if ($_smarty_tpl->tpl_vars['producto_unico']->value->precio != 0) {?>
                            <div class="total">
                                <h2 id="total-product" data-precio="<?php echo $_smarty_tpl->tpl_vars['producto_unico']->value->precio;?>
"> S/ <span><?php echo $_smarty_tpl->tpl_vars['producto_unico']->value->precio;?>
</span> </h2>
                            </div>
                            <button id="btnProducto" data-id="<?php echo $_smarty_tpl->tpl_vars['producto_unico']->value->codart;?>
" data-k="0" data-r="0" data-f="" data-d="">Agregar al carrito</button>
                        <?php } else { ?>
                            <div class="total">
                                <h2 id="total-product" data-precio="0.00">S/<span>-</span> </h2>
                            </div>
                            <button id="btnProducto" data-id="" data-k="0" data-r="0" data-f="" data-d="">Agregar al carrito</button>
                        <?php }?>
                    </div>

                    <div class="note_footer">   
                            <p >
                              <i class="fa-solid fa-square-check"></i>     Si tiene alguna duda o consulta lo puede realizar en nuestro chat en línea y si tiene algún pedido especial lo puede realizar mediante nuestro WhatsApp  
                            </p>
                        
                    </div>
                </div>
            </div>

            <?php if (!empty($_smarty_tpl->tpl_vars['lista_accesorios']->value)) {?>
                <div class="scroll-accesorios">
                    <h2>Accesorios</h2>
                    <div class="container-accesorios">
                        <div class="images-accesorio">

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_accesorios']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                <div class="item detalle-accesorio">
                                    <img id="imgAcce" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;
echo $_smarty_tpl->tpl_vars['row']->value->url;?>
" alt="imagen" width="100%">
                                    <p class="titulo"><?php echo $_smarty_tpl->tpl_vars['row']->value->descri_corta;?>
</p>
                                    <div class="info precio">
                                        <b>S/ <?php echo $_smarty_tpl->tpl_vars['row']->value->precio;?>
</b>
                                        <button  class="agregar-accesorio"  data-wb  ="<?php echo $_smarty_tpl->tpl_vars['row']->value->codart_web;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value->codart;?>
" data-k="0" data-r="0" data-f="" data-d="" onclick="addAccesorio(this)">Agregar</button>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>

            <?php }?>





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
                <div class="pagination-grid-cards">
                    <div class="pagination-cards"></div>
                </div>
                <br>
                <div class="grid-pagination-cards">

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
class Block_55088451866ce6f1ff11360_71366489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_55088451866ce6f1ff11360_71366489',
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
/js/form/detalle.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
