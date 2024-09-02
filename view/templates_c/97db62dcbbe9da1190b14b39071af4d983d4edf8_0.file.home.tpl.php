<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-22 14:52:24
  from 'C:\xampp\htdocs\reyfam\public\admin_web\view\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65fde1786b9469_91945568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97db62dcbbe9da1190b14b39071af4d983d4edf8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reyfam\\public\\admin_web\\view\\templates\\home.tpl',
      1 => 1711136956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fde1786b9469_91945568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64822025565fde1786b5340_16339957', "estilos");
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42773572865fde1786b8242_07322156', "breadcrumbs");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152206759465fde1786b87e0_95943138', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2142923665fde1786b8de8_85088424', "scripts");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/master_dshbrd.tpl");
}
/* {block "estilos"} */
class Block_64822025565fde1786b5340_16339957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_64822025565fde1786b5340_16339957',
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
class Block_42773572865fde1786b8242_07322156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumbs' => 
  array (
    0 => 'Block_42773572865fde1786b8242_07322156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "breadcrumbs"} */
/* {block "content"} */
class Block_152206759465fde1786b87e0_95943138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_152206759465fde1786b87e0_95943138',
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
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Doughut Chart </h4>
                        <canvas id="doughutChart"></canvas>
                    </div>
                </div>
            </div>


    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Bar chart </h4>
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Pie Chart </h4>
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>

    </div>
<?php
}
}
/* {/block "content"} */
/* {block "scripts"} */
class Block_2142923665fde1786b8de8_85088424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_2142923665fde1786b8de8_85088424',
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
