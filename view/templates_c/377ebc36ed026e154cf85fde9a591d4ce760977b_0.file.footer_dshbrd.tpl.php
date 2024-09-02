<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-26 14:45:27
  from 'C:\xampp\htdocs\web\admin\view\templates\layout\footer_dshbrd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_660325d7a0cfb3_37555988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '377ebc36ed026e154cf85fde9a591d4ce760977b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\admin\\view\\templates\\layout\\footer_dshbrd.tpl',
      1 => 1711482301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660325d7a0cfb3_37555988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web\\admin\\lib\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- Footer -->
<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-12 col-md-6 text-center text-md-left">
                Copyright &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 HsPerú
            </div>
            <div class="col-12 col-md-6 text-center text-md-right">
                Designed by <a href="http://www.hsperu.pe/">Hard System Perú S.A.C.</a>
            </div>
        </div>
    </div>
</footer>


<!-- /.site-footer -->
</div>
<!-- /#right-panel -->

<!-- Scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/jquery.matchHeight.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/lib/alertify/alertify.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/util.js?v=<?php echo rand(0,100);?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_407220613660325d7a07a81_50973326', "scripts");
?>

<?php echo '<script'; ?>
 type="text/javascript">

    $(document).ready(function () {

        $(".jm-loadingpage").fadeOut(1000);

        window.addEventListener('dragover', function (e) {
            e = e || event
            e.preventDefault()
        }, false)
        window.addEventListener('drop', function (e) {
            e = e || event
            e.preventDefault()
        }, false)

    });

<?php echo '</script'; ?>
>



</body>
</html>
<?php }
/* {block "scripts"} */
class Block_407220613660325d7a07a81_50973326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_407220613660325d7a07a81_50973326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "scripts"} */
}
