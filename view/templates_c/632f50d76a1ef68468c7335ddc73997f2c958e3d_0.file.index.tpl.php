<?php
/* Smarty version 3.1.34-dev-7, created on 2024-08-27 15:41:43
  from 'C:\xampp\htdocs\chantilly\web\view\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_66ce3a070ca475_05020982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '632f50d76a1ef68468c7335ddc73997f2c958e3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\web\\view\\templates\\index.tpl',
      1 => 1724791298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/sections/scroll_tematica.tpl' => 1,
    'file:layout/sections/banner_estatico.tpl' => 1,
    'file:layout/sections/locales.tpl' => 1,
  ),
),false)) {
function content_66ce3a070ca475_05020982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211969331566ce3a070b15b8_64935284', "tematicas");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74645835166ce3a070b7637_18293744', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155920668966ce3a070c3c10_44699647', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master.tpl");
}
/* {block "tematicas"} */
class Block_211969331566ce3a070b15b8_64935284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tematicas' => 
  array (
    0 => 'Block_211969331566ce3a070b15b8_64935284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:layout/sections/scroll_tematica.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "tematicas"} */
/* {block "content"} */
class Block_74645835166ce3a070b7637_18293744 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_74645835166ce3a070b7637_18293744',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-slider">
        <div class="slider" id="slider">

            <?php if (!empty($_smarty_tpl->tpl_vars['lista_banner']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_banner']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <div class="slider-content">
                        <img async src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;
echo $_smarty_tpl->tpl_vars['row']->value->url;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value->titulo;?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['row']->value->link;?>
" class="slider_img"
                            width="100%">
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
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
                    <p>Mostrando <label class="label_pagina"></label> de <label class="label_total_items"></label>
                        resultados</p>
                </div>
                
                <div class="section-busqueda">
                    <div class="busqueda">
                        <div id="searchForm">
                            <input type="text" id="searchInput" placeholder="Buscar productos">
                            <button type="button" id="searchButton"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                  
                </div>
            </div>
            <br>
            <div class="pagination-grid">
                    <div class="pagination"></div>
                </div>
            <br>
            <div id="lista-productos">
                <div class="grid-pagination" id="items-index">
                    <!---->
                </div>
                
                
            </div>
            <br>
        </div>
    </section>
    <br>
    <br>
     <?php $_smarty_tpl->_subTemplateRender("file:layout/sections/banner_estatico.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <br>
    <br>



    <section id="tortas-cards" class="lista-productos-cards">
        <div class="container">
            <div class="header-cards">
                <h1>Tortas Temáticas</h1>
                <h5>Los mejores postres en la Casa del Chantilly, calidad y amor.</h5>
            </div>
            <br>
            <div class="pagination-grid-cards">
                <div class="pagination-cards"></div>
            </div>
            <br>
            <div class="grid-pagination-cards">
                <!--Aqui van los datos de las cards-->
            </div>
           
            
        </div>
    </section>


    <br>
    <br>


    <?php $_smarty_tpl->_subTemplateRender("file:layout/sections/locales.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <br>
    <br>

<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_155920668966ce3a070c3c10_44699647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_155920668966ce3a070c3c10_44699647',
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
/js/form/slider.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/form/index.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
    <?php if (!empty($_smarty_tpl->tpl_vars['msg']->value)) {?>
        const mensaje = '<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
';
        if (mensaje) {
            msg.Alert("::" + tittlemsg + "::", mensaje, () => {
                location.replace(urlpath);
            });
        }
    <?php }
echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
