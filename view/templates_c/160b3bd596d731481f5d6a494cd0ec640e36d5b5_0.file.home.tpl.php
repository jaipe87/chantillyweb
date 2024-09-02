<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 19:34:58
  from 'C:\xampp\htdocs\admin_amk\view\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eed59b22606a6_99826741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '160b3bd596d731481f5d6a494cd0ec640e36d5b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\admin_amk\\view\\templates\\home.tpl',
      1 => 1592613292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eed59b22606a6_99826741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15859078975eed59b225ea20_48271180', "breadcrumbs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18997642395eed59b225fc91_61048010', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "breadcrumbs"} */
class Block_15859078975eed59b225ea20_48271180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs' => 
  array (
    0 => 'Block_15859078975eed59b225ea20_48271180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "breadcrumbs"} */
/* {block "content"} */
class Block_18997642395eed59b225fc91_61048010 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18997642395eed59b225fc91_61048010',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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
    </div>
    <div class="row">

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Single Bar Chart </h4>
                        <canvas id="singelBarChart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Doughut Chart </h4>
                        <canvas id="doughutChart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->


    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Bar chart </h4>
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div><!-- /# column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Pie Chart </h4>
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div><!-- /# column -->

    </div>
<?php
}
}
/* {/block "content"} */
}
