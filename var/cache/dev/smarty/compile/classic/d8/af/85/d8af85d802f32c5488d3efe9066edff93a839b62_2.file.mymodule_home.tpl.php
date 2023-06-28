<?php
/* Smarty version 4.3.1, created on 2023-06-28 14:43:50
  from 'C:\xampp\htdocs\prestashop\modules\mymodule\views\templates\front\mymodule_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649c2b06280925_83978820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8af85d802f32c5488d3efe9066edff93a839b62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mymodule\\views\\templates\\front\\mymodule_home.tpl',
      1 => 1687949421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649c2b06280925_83978820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('mymoduleCssPath', ($_smarty_tpl->tpl_vars['module_dir']->value).("views/css/mymodule.css"));?>

<head>
    <link rel="stylesheet" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mymoduleCssPath']->value, ENT_QUOTES, 'UTF-8');?>
">

</head>



<?php if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && $_smarty_tpl->tpl_vars['errors']->value) {?>
    <div class="alert alert-danger">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
    <div class="alert alert-success">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'confirmation');
$_smarty_tpl->tpl_vars['confirmation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['confirmation']->value) {
$_smarty_tpl->tpl_vars['confirmation']->do_else = false;
?>
            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['confirmation']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['mymodule_text']->value)) && $_smarty_tpl->tpl_vars['mymodule_text']->value) {?>
    <div class="mymodule-content">
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mymodule_text']->value, ENT_QUOTES, 'UTF-8');?>

    </div>
<?php }
}
}
