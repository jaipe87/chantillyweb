<?php
/* Smarty version 3.1.34-dev-7, created on 2024-04-03 15:05:41
  from 'C:\xampp\htdocs\web\admin\view\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_660db695198ed8_86050212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8186a6c3bbb41f2c03b79846140b1c203688ad4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\admin\\view\\templates\\home.tpl',
      1 => 1712174738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660db695198ed8_86050212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_233850408660db695193055_31579954', "estilos");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_739094757660db695196fe2_13724981', "breadcrumbs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1673121657660db695197926_10074972', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1337162621660db695198343_88255186', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_233850408660db695193055_31579954 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_233850408660db695193055_31579954',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/chartist.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/jqvmap.min.css" rel="stylesheet">
<?php
}
}
/* {/block "estilos"} */
/* {block "breadcrumbs"} */
class Block_739094757660db695196fe2_13724981 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs' => 
  array (
    0 => 'Block_739094757660db695196fe2_13724981',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "breadcrumbs"} */
/* {block "content"} */
class Block_1673121657660db695197926_10074972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1673121657660db695197926_10074972',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!--
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-cash"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text">$<span class="count">23569</span></div>
                                <div class="stat-heading">Revenue</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-2">
                            <i class="pe-7s-cart"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">3435</span></div>
                                <div class="stat-heading">Sales</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-3">
                            <i class="pe-7s-browser"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">349</span></div>
                                <div class="stat-heading">Templates</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-4">
                            <i class="pe-7s-users"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">2986</span></div>
                                <div class="stat-heading">Clients</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- <div class="row">

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Single Bar Chart </h4>
                    <canvas id="singelBarChart"></canvas>
                </div>
            </div>
        </div>-->

    <!--Este no
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Doughut Chart </h4>
                    <canvas id="doughutChart"></canvas>
                </div>
            </div>
        </div>
    </div> -->
    <div class="mx-auto col-lg-10 ">
        <button>Descargar en PDF</button>
    </div>
    <br>
    <div class="row">
        <!--Este es el diagrama que es necesario-->
        <div class="mx-auto col-lg-10">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Reporte de Metas - Ventas</h4>
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>

        <div class="mx-auto col-lg-10">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Reporte de Metas - Ventas - Mes: Marzo </h4>
                    <canvas id="barChartMes"></canvas>
                </div>
            </div>
        </div>


        <!--
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Pie Chart </h4>
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>-->

    </div>
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_1337162621660db695198343_88255186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1337162621660db695198343_88255186',
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
/js/init/chartjs-init.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}
