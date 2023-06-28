<?php
/* Smarty version 4.3.1, created on 2023-06-28 14:14:10
  from 'C:\xampp\htdocs\prestashop\adminMt\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649c2412de34e9_52331553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e146ffa86823754907f91755d1ff4e2777a3042a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\adminMt\\themes\\new-theme\\template\\content.tpl',
      1 => 1681819498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649c2412de34e9_52331553 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
