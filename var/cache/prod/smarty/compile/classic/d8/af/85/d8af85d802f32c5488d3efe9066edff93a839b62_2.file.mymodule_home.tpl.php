<?php
/* Smarty version 4.3.1, created on 2023-06-24 14:27:05
  from 'C:\xampp\htdocs\prestashop\modules\mymodule\views\templates\front\mymodule_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6496e119611706_41052473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8af85d802f32c5488d3efe9066edff93a839b62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mymodule\\views\\templates\\front\\mymodule_home.tpl',
      1 => 1687609459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6496e119611706_41052473 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>My Module Template</title>
   
</head>

<body>
    <header>

    </header>
    <nav>

    </nav>
    <main>
        <?php if ((isset($_smarty_tpl->tpl_vars['mymodule_text']->value)) && $_smarty_tpl->tpl_vars['mymodule_text']->value) {?>
            <div class="mymodule-content">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mymodule_text']->value, ENT_QUOTES, 'UTF-8');?>

            </div>
        <?php }?>
    </main>
    <footer>

    </footer>
</body>

</html><?php }
}
