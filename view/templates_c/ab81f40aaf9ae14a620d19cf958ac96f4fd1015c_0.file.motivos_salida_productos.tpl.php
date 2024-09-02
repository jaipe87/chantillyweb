<?php
/* Smarty version 3.1.34-dev-7, created on 2024-06-14 10:54:18
  from 'C:\xampp\htdocs\chantilly\admin\view\templates\motivos_salida_productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_666c67aa9d2a96_72909709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab81f40aaf9ae14a620d19cf958ac96f4fd1015c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\admin\\view\\templates\\motivos_salida_productos.tpl',
      1 => 1718380062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c67aa9d2a96_72909709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1117956272666c67aa81cdd8_86013746', "estilos");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1798256479666c67aa826764_06821585', "breadcrumbs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1310967321666c67aa827019_86825203', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1318107355666c67aa9d0668_10066626', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_1117956272666c67aa81cdd8_86013746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_1117956272666c67aa81cdd8_86013746',
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
/css/form/salida_productos.css?v=<?php echo rand(0,100);?>
">
<?php
}
}
/* {/block "estilos"} */
/* {block "breadcrumbs"} */
class Block_1798256479666c67aa826764_06821585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs' => 
  array (
    0 => 'Block_1798256479666c67aa826764_06821585',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "breadcrumbs"} */
/* {block "content"} */
class Block_1310967321666c67aa827019_86825203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1310967321666c67aa827019_86825203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12" id="ContenidoReportes">
                <div class="card">
                    <div class="card-header">
                        <h4><strong class="card-title"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</strong></h4>
                    </div>

                    <div class="card-body">
                        <div class="header-form">

                            <div class="row">

                                <div class="col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="cboMotivos" class="form-control-label">Motivos Salida</label>
                                        <select id="cboMotivos" data-placeholder="Seleccionar"
                                            class="standardSelect form-control">

                                            <?php if (!empty($_smarty_tpl->tpl_vars['list_motivos_salida']->value)) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_motivos_salida']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->des;?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="txtFecha" class=" form-control-label">Desde</label>

                                        <div class="input-group">
                                            <input type="text" id="txtFecha" placeholder="dd/mm/yyyy"
                                                class="form-control text-center text-uppercase" maxlength="10" value=""
                                                data-toggle="datepicker">
                                            <div class="input-group-append">
                                                <button type="button"
                                                    class="btn btn-outline-secondary docs-datepicker-trigger" disabled="">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label for="txtFecha1" class=" form-control-label">Hasta</label>

                                        <div class="input-group">
                                            <input type="text" id="txtFecha1" placeholder="dd/mm/yyyy"
                                                class="form-control text-center text-uppercase" maxlength="10" value=""
                                                data-toggle="datepicker">
                                            <div class="input-group-append">
                                                <button type="button"
                                                    class="btn btn-outline-secondary docs-datepicker-trigger" disabled="">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="form-group">
                                        <label class=" form-control-label mr-2">Ordenar por</label>

                                        <br>
                                        <div class="form-check-inline form-check">
                                           <!-- <label for="annio_anterior" class="form-check-label mr-2">
                                                <input type="radio" id="annio_anterior" name="ordernarPor" value="1"
                                                    class="form-check-input">Año Anterior
                                            </label>-->
                                            <label for="annio_actual" class="form-check-label mr-2">
                                                <input type="radio" id="annio_actual" name="ordernarPor" value="0" checked
                                                    class="form-check-input">Año Actual
                                            </label>

                                        </div>

                                    </div>
                                </div>

                                <div
                                    class="col-sm-12  col-md-2 text-center d-flex align-items-center justify-content-center">

                                    <button class="btn btn-danger btn-sm" id="btnRefrescar"><span
                                            class="fa fa-refresh"></span>
                                        Refrescar
                                    </button>
                                    <button id="generatePDF" class="btn btn-warning btn-sm text-white ml-10"><span
                                            class="fa fa-file"></span> Generar PDF</button>
                                </div>

                            </div>
                        </div>

                        <!--Tabla de contenido-->
                        <div id="printPDF">
                            <div id="mensajeCarga" class="text-center"
                                style="display: none; font-size:25px; text-transform:capitalize; font-weight:bold">Cargando
                                ...</div>

                            <table id="RelacionReporte" class="table table-striped table-bordered table-hover table-sm"
                                style="width: 100%;">
                                <thead class="thead-center">
                                    <tr>

                                        <th class="w-20 text-center align-middle">SEDES</th>
                                        <th class="w-5 text-center align-middle" ><span id="anterior"></span> S/</th>
                                        <th class="w-5 text-center align-middle"><span id="actual"></span> S/</th>
                                        <th class="w-5 text-center align-middle">DIFERENCIAS S/</th>
                                        <th class="w-5 text-center align-middle">PORCENTAJES</th>
                                        <th class="w-2 text-center align-middle">DETALLE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Aqui se muestran todos los datos-->
                                </tbody>

                            </table>

                        </div>
                        <br>
                        <!--Este es el gráfico de barras-->
                        <div class="mx-auto col-lg-10" id="graficBar">
                            <div class="">
                                <div class="">
                                    <h4 class="mb-3 text-center">
                                        REPORTE DE MOTIVOS DE SALIDA DE PRODUCTOS
                                    </h4>
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
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
class Block_1318107355666c67aa9d0668_10066626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1318107355666c67aa9d0668_10066626',
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
    <!--<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/pdf/html2canvas.min.js"><?php echo '</script'; ?>
>-->
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
/js/form/salida_productos.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>


<?php
}
}
/* {/block "scripts"} */
}
