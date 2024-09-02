<?php
/* Smarty version 3.1.34-dev-7, created on 2024-05-09 13:25:24
  from 'C:\xampp\htdocs\chantilly\admin\view\templates\metas_venta_dia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_663d1514217610_29738863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b752ade0a6079c6f64ab6d77790ad1048ffb4508' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\admin\\view\\templates\\metas_venta_dia.tpl',
      1 => 1715279121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663d1514217610_29738863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1702192696663d15142068e3_20073192', "estilos");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_861202096663d15142133f6_82856782', "breadcrumbs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_242101904663d1514213fd8_44522611', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1412892681663d1514215001_86618131', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_1702192696663d15142068e3_20073192 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_1702192696663d15142068e3_20073192',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/chartist.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/jqvmap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/datatable/datatables.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/datatable/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/datatable/buttons/buttons.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/lib/datepicker/datepicker.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/form/metas_ventas_cantidad.css?v=<?php echo rand(0,100);?>
">

<?php
}
}
/* {/block "estilos"} */
/* {block "breadcrumbs"} */
class Block_861202096663d15142133f6_82856782 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs' => 
  array (
    0 => 'Block_861202096663d15142133f6_82856782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "breadcrumbs"} */
/* {block "content"} */
class Block_242101904663d1514213fd8_44522611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_242101904663d1514213fd8_44522611',
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
                                        <label for="txtFecha" class=" form-control-label">Fecha de Generación</label>

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
                                        <label class=" form-control-label mr-2">Ordenar por</label>


                                        <div class="form-check-inline form-check">
                                            <label for="ordventa" class="form-check-label mr-2">
                                                <input type="radio" id="ordventa" name="ordernarPor" value="1"
                                                    class="form-check-input"># ID
                                            </label>
                                            <label for="ordporcmeta" class="form-check-label">
                                                <input type="radio" id="ordporcmeta" name="ordernarPor" value="0" checked
                                                    class="form-check-input">% Sede
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
                                        <th class="w-10 text-center">RANKING</th>
                                        <th class="w-20 text-center">SEDES</th>
                                        <th class="w-5 text-center">DIA 1</th>
                                        <th class="w-5 text-center">DIA 2</th>
                                        <th class="w-5 text-center">DIA 3</th>
                                        <th class="w-5 text-center">DIA 4</th>
                                        <th class="w-5 text-center">DIA 5</th>
                                        <th class="w-5 text-center">DIA 6</th>
                                        <th class="w-5 text-center">DIA >=7</th>
                                        <th class="w-10 text-center">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Aqui se muestran todos los datos-->
                                </tbody>
                            </table>

                            <br>
                            <!--Este es el gráfico de barras-->
                            <div class="mx-auto col-lg-10" id="graficBar">
                                <div class="">
                                    <div class="">
                                        <h4 class="mb-3 text-center">
                                            REPORTE DE METAS - VENTAS X DIA
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
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_1412892681663d1514215001_86618131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1412892681663d1514215001_86618131',
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
/js/form/metas_ventas_dia.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>


<?php
}
}
/* {/block "scripts"} */
}
