<?php
/* Smarty version 3.1.34-dev-7, created on 2024-04-05 12:25:44
  from 'C:\xampp\htdocs\chantilly\admin\view\templates\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_661034189d1a02_49311588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f78e92b4428c52538bc70cf9d9ae022752cac81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\admin\\view\\templates\\dashboard.tpl',
      1 => 1712337938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661034189d1a02_49311588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1320933250661034189ce245_03488871', "estilos");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1181724917661034189ceb39_99274175', "breadcrumbs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1010336893661034189cf0b2_70840248', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_552763050661034189d15f3_37906022', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_1320933250661034189ce245_03488871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_1320933250661034189ce245_03488871',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   
<?php
}
}
/* {/block "estilos"} */
/* {block "breadcrumbs"} */
class Block_1181724917661034189ceb39_99274175 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs' => 
  array (
    0 => 'Block_1181724917661034189ceb39_99274175',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "breadcrumbs"} */
/* {block "content"} */
class Block_1010336893661034189cf0b2_70840248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1010336893661034189cf0b2_70840248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4><strong class="card-title"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</strong></h4>  
                    </div>

                    <div class="card-body">
                    
                    </div>

                </div>
            </div>


        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_552763050661034189d15f3_37906022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_552763050661034189d15f3_37906022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   
<?php
}
}
/* {/block "scripts"} */
}
