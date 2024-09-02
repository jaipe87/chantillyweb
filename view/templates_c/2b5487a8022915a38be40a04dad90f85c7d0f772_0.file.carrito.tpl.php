<?php
/* Smarty version 3.1.34-dev-7, created on 2024-07-18 11:14:55
  from 'C:\xampp\htdocs\chantilly_smarty\chantilly\view\templates\carrito.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66993f7f2bdbd1_14664021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b5487a8022915a38be40a04dad90f85c7d0f772' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly_smarty\\chantilly\\view\\templates\\carrito.tpl',
      1 => 1721319294,
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
function content_66993f7f2bdbd1_14664021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:layout/headerMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60879501566993f7f2b2a60_35899766', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80990248266993f7f2b6b20_48069610', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160784882066993f7f2b7959_55218762', "scripts");
?>

<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "styles"} */
class Block_60879501566993f7f2b2a60_35899766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_60879501566993f7f2b2a60_35899766',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/cart-style.css">
<?php
}
}
/* {/block "styles"} */
/* {block "content"} */
class Block_80990248266993f7f2b6b20_48069610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_80990248266993f7f2b6b20_48069610',
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
class Block_160784882066993f7f2b7959_55218762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_160784882066993f7f2b7959_55218762',
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
