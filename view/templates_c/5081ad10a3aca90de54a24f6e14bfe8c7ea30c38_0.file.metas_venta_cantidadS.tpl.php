<?php
/* Smarty version 3.1.34-dev-7, created on 2024-06-18 10:43:08
  from 'C:\xampp\htdocs\chantilly\admin\view\templates\metas_venta_cantidadS.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6671ab0c5ebf45_13683695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5081ad10a3aca90de54a24f6e14bfe8c7ea30c38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\admin\\view\\templates\\metas_venta_cantidadS.tpl',
      1 => 1718725366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6671ab0c5ebf45_13683695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_571052536671ab0c5ddb74_21559029', "estilos");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6820638266671ab0c5e70d2_43290702', "breadcrumbs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8329555926671ab0c5e7d27_80298016', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19693350276671ab0c5e9174_76762003', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_571052536671ab0c5ddb74_21559029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_571052536671ab0c5ddb74_21559029',
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
class Block_6820638266671ab0c5e70d2_43290702 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs' => 
  array (
    0 => 'Block_6820638266671ab0c5e70d2_43290702',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "breadcrumbs"} */
/* {block "content"} */
class Block_8329555926671ab0c5e7d27_80298016 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8329555926671ab0c5e7d27_80298016',
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
                                                    class="form-check-input"># Venta
                                            </label>
                                            <label for="ordporcmeta" class="form-check-label">
                                                <input type="radio" id="ordporcmeta" name="ordernarPor" value="0" checked
                                                    class="form-check-input">% Avance
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
                            <div class="table-responsive">
                                <table id="RelacionReporte" class="table table-striped table-bordered table-hover table-sm"
                                    style="width: 100%;">
                                    <thead class="thead-center">
                                        <tr>
                                            <!-- <th class="w-2 text-center">RANKING</th>-->
                                            <th class="w-20 text-center">SEDES</th>
                                            <th class="w-10 text-center">VENTA</th>
                                            <th class="w-10 text-center">META</th>
                                            <th class="w-10 text-center">AVANCE %</th>
                                            <th class="w-10 text-center">DIFERENCIA</th>
                                            <th id="fechaAnterior" class="w-10 text-center"></th>
                                            <th class="w-10 text-center">META %</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--Aqui se muestran todos los datos-->
                                    </tbody>
                                </table>
                                .
                            </div>
                            <br>
                            <!--Este es el gráfico de barras-->
                            <div class="mx-auto col-lg-10" id="graficBar">
                                <div class="">
                                    <div class="">
                                        <h4 class="mb-3 text-center">
                                            REPORTE DE METAS - VENTAS
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
class Block_19693350276671ab0c5e9174_76762003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_19693350276671ab0c5e9174_76762003',
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
/js/form/metas_ventas_cantidad_s.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>


<?php
}
}
/* {/block "scripts"} */
}
