<?php
/* Smarty version 3.1.34-dev-7, created on 2024-06-14 14:16:47
  from 'C:\xampp\htdocs\chantilly\admin\view\templates\motivo_salida_productos_det.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_666c971fe16fc1_39520400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60dddf47a65ddfc19fac5fd5862eff71bd2bf48b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\admin\\view\\templates\\motivo_salida_productos_det.tpl',
      1 => 1718392548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c971fe16fc1_39520400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2048597534666c971fe09777_08528884', "estilos");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1017312839666c971fe13563_20715553', "breadcrumbs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1135805362666c971fe13dc2_54852069', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2075301325666c971fe152a0_34418951', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_2048597534666c971fe09777_08528884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_2048597534666c971fe09777_08528884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/chartist.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/chosen/chosen.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/datatable/datatables.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/datatable/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/datatable/buttons/buttons.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/datepicker/datepicker.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/form/salida_producto_detalle.css?v=<?php echo rand(0,100);?>
">
<?php
}
}
/* {/block "estilos"} */
/* {block "breadcrumbs"} */
class Block_1017312839666c971fe13563_20715553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs' => 
  array (
    0 => 'Block_1017312839666c971fe13563_20715553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "breadcrumbs"} */
/* {block "content"} */
class Block_1135805362666c971fe13dc2_54852069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1135805362666c971fe13dc2_54852069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12" id="ContenidoReportes">
                <div class="card">
                    <div class="card-header">
                        <h4><strong class="card-title">   <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <span class="text-danger" id="titulo_mot"><?php echo $_smarty_tpl->tpl_vars['titulomot']->value;?>
</span> <br> SUCURSAL - <span class="text-danger" id="titulo_suc"><?php echo $_smarty_tpl->tpl_vars['titulosub']->value;?>
</span>
                            </strong></h4>
                    </div>

                    <div class="card-body">
                        <div class="header-form mb-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-danger" onclick="window.history.back();"> <i class="fa fa-arrow-left"></i>   Atrás</button>
                                    <button id="generatePDF" class="btn btn-warning btn-sm text-white ml-10">
                                        <span class="fa fa-file"></span> Generar PDF
                                    </button>
                                </div>
                            </div>

                             <input type="hidden" id="codsuc" value="<?php echo $_smarty_tpl->tpl_vars['codsuc']->value;?>
">
                             <input type="hidden" id="codmot" value="<?php echo $_smarty_tpl->tpl_vars['codmot']->value;?>
">
                             <input type="hidden" id="fecha_ini" value="<?php echo $_smarty_tpl->tpl_vars['fecha_ini']->value;?>
">
                             <input type="hidden" id="fecha_fin" value="<?php echo $_smarty_tpl->tpl_vars['fecha_fin']->value;?>
">
                        </div>
                        <div id="printPDF">
                            <div id="mensajeCarga" class="text-center"
                                style="display: none; font-size:25px; text-transform:capitalize; font-weight:bold">Cargando
                                ...</div>

                            <table id="RelacionReporte" class="table table-striped table-bordered table-hover table-sm"
                                style="width: 100%;">
                                <thead class="thead-center">
                                    <tr>
                                        <th class="w-5 text-center align-middle">FECHAS</th>
                                        <th class="w-20 text-center align-middle">OBSERVACIÓN</th>
                                        <th class="w-10 text-center align-middle">AUTORIZACIÓN</th>
                                        <th class="w-5 text-center align-middle">COD.ARTICULO</th>
                                        <th class="w-20 text-center align-middle">ARTÍCULO</th>
                                        <th class="w-5 text-center align-middle">CANT.</th>
                                        <th class="w-5 text-center align-middle">P/U S/</th>
                                        <th class="w-5 text-center align-middle">TOTAL S/</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Aqui se muestran todos los datos-->
                                </tbody>
                            </table>
                        </div>
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
class Block_2075301325666c971fe152a0_34418951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_2075301325666c971fe152a0_34418951',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!--  Chart js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/Chart.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/data-table/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/data-table/dataTables.responsive.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/chosen/chosen.jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/pdf/jspdf.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/pdf/html2canvas.min.js"><?php echo '</script'; ?>
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
/js/form/salida_producto_detalle.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block "scripts"} */
}
