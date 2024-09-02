<?php
/* Smarty version 3.1.34-dev-7, created on 2024-06-05 17:45:33
  from 'C:\xampp\htdocs\chantilly\admin\view\templates\rotacion_productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6660ea8d6b9ff0_28850253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da56575c247f2046c7ff440f1dfcac9f743f34d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chantilly\\admin\\view\\templates\\rotacion_productos.tpl',
      1 => 1717626843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6660ea8d6b9ff0_28850253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21345479146660ea8d6a6b52_38033951', "estilos");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9012903466660ea8d6afc89_63424021', "breadcrumbs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3311777776660ea8d6b0297_18184174', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9782818696660ea8d6b8b00_66388841', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_21345479146660ea8d6a6b52_38033951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_21345479146660ea8d6a6b52_38033951',
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
/css/form/rotacion_productos.css?v=<?php echo rand(0,100);?>
">
<?php
}
}
/* {/block "estilos"} */
/* {block "breadcrumbs"} */
class Block_9012903466660ea8d6afc89_63424021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs' => 
  array (
    0 => 'Block_9012903466660ea8d6afc89_63424021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "breadcrumbs"} */
/* {block "content"} */
class Block_3311777776660ea8d6b0297_18184174 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3311777776660ea8d6b0297_18184174',
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
                                        <label for="cboCategoria" class="form-control-label">Categoría</label>
                                        <select id="cboCategoria" data-placeholder="Todos"
                                            class="standardSelect form-control">

                                            <?php if (!empty($_smarty_tpl->tpl_vars['list_categorias']->value)) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_categorias']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->cod;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->descri;?>
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
                                <div class="col-sm-12 col-md-5">
                                    <div class="form-group">
                                        <label class=" form-control-label mr-2">Ordenar por</label>

                                         <br>
                                        <div class="form-check-inline form-check">
                                            <label for="dia01" class="form-check-label mr-2">
                                                <input type="radio" id="dia01" name="ordernarPor" value="1" checked
                                                    class="form-check-input">Día 01
                                            </label>
                                            <label for="dia02" class="form-check-label mr-2">
                                                <input type="radio" id="dia02" name="ordernarPor" value="2" 
                                                    class="form-check-input">Día 02
                                            </label>
                                            <label for="dia03" class="form-check-label mr-2">
                                                <input type="radio" id="dia03" name="ordernarPor" value="3" 
                                                    class="form-check-input">Día 03
                                            </label>
                                            <label for="dia04" class="form-check-label mr-2">
                                                <input type="radio" id="dia04" name="ordernarPor" value="4" 
                                                    class="form-check-input">Día 04
                                            </label>
                                            <label for="dia05" class="form-check-label mr-2">
                                                <input type="radio" id="dia05" name="ordernarPor" value="5" 
                                                    class="form-check-input">Día 05
                                            </label>
                                            <label for="dia06" class="form-check-label mr-2">
                                                <input type="radio" id="dia06" name="ordernarPor" value="6" 
                                                    class="form-check-input">Día 06
                                            </label>
                                            <label for="dia07" class="form-check-label mr-2">
                                                <input type="radio" id="dia07" name="ordernarPor" value="7" 
                                                    class="form-check-input">Día 07
                                            </label>
                                            <label for="total" class="form-check-label mr-2">
                                            <input type="radio" id="total" name="ordernarPor" value="0" 
                                                class="form-check-input">Total &nbsp;
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

                                        <th class="w-20 text-center">SUCURSALES</th>
                                        <th class="w-5 text-center">DIA 1</th>
                                        <th class="w-5 text-center">DIA 2</th>
                                        <th class="w-5 text-center">DIA 3</th>
                                        <th class="w-5 text-center">DIA 4</th>
                                        <th class="w-5 text-center">DIA 5</th>
                                        <th class="w-5 text-center">DIA 6</th>
                                        <th class="w-5 text-center">>=7</th>
                                        <th class="w-5 text-center">TOTAL</th>
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
class Block_9782818696660ea8d6b8b00_66388841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_9782818696660ea8d6b8b00_66388841',
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
/js/form/rotacion_productos.js?v=<?php echo rand(0,100);?>
"><?php echo '</script'; ?>
>


<?php
}
}
/* {/block "scripts"} */
}
