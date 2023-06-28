<?php
/* Smarty version 4.3.1, created on 2023-06-28 17:30:59
  from 'C:\xampp\htdocs\prestashop\adminMt\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649c52337342c6_46068058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5794fef2f5ef7770ec7b029d2a5b3ec068ffa89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\adminMt\\themes\\default\\template\\content.tpl',
      1 => 1681819498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649c52337342c6_46068058 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
