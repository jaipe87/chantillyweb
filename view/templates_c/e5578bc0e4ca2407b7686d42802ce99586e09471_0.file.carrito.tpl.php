<?php
/* Smarty version 3.1.34-dev-7, created on 2024-08-01 18:58:48
  from 'C:\xampp\htdocs\chantilly\web\view\templates\carrito.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66ac2138ad2014_37095952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5578bc0e4ca2407b7686d42802ce99586e09471' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\carrito.tpl',
      1 => 1722556663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac2138ad2014_37095952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182032881266ac2138acb619_45966895', "styles");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131673319666ac2138acdb82_82202042', "tematicas");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63716944466ac2138ace0f1_79299651', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104278090066ac2138ace8a3_91704596', "scripts");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master.tpl");
}
/* {block "styles"} */
class Block_182032881266ac2138acb619_45966895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_182032881266ac2138acb619_45966895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/form/cart-style.css">
<?php
}
}
/* {/block "styles"} */
/* {block "tematicas"} */
class Block_131673319666ac2138acdb82_82202042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tematicas' => 
  array (
    0 => 'Block_131673319666ac2138acdb82_82202042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   
<?php
}
}
/* {/block "tematicas"} */
/* {block "content"} */
class Block_63716944466ac2138ace0f1_79299651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_63716944466ac2138ace0f1_79299651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="cart-section">
        <div class="container">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            <br>
            <div class="carrito-header">
                <h3 id="title-producto">Producto</h3>
                <h3 id="title-precio">Precio</h3>
                <h3 id="title-cantidad">Cantidad</h3>
                <h3 id="title-subtotal">Subtotal</h3>
            </div>
            <hr id="separacion1">
            <div id="cart-productos">
                <h4 class="carrito-vacio" style="font-weight: 400; text-align:center; padding-top:20px;">El carrito se
                    encuentra vacio.</h4>
                <!-- Aqui va todo el contenido del carrito que agregamos con JS -->
            </div>
            <div class="resultados">
                <div class="total">
                    <!--<h4>Total:</h4>-->
                </div>
                <div class="resultado-subtotal">
                    <div class="subtotal">
                        <h4>Subtotal:</h4>
                    </div>
                    <div id="monto-total" class="monto">
                        <h3></h3>
                    </div>
                </div>
                <div class="btn-comprar">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['RUTA_HTTP']->value;?>
/CheckOut"><button>Comprar</button></a>

                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section id="carrito-cards">
        <div class="container">
            <div class="header-cards">
                <h1>Bocaditos para acompañar</h1>
            </div>
            <br>
            <div class="grid-pagination-cards">
                <div id="items" class="item-cards" category="dulces">

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
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_104278090066ac2138ace8a3_91704596 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_104278090066ac2138ace8a3_91704596',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/cardCarrito.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/carrito.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
