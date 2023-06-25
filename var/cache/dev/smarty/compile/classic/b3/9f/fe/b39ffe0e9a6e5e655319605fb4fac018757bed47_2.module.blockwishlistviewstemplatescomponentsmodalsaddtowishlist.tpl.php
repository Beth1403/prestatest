<?php
/* Smarty version 4.3.1, created on 2023-06-25 17:19:56
  from 'module:blockwishlistviewstemplatescomponentsmodalsaddtowishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64985b1c24e0e1_78118431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b39ffe0e9a6e5e655319605fb4fac018757bed47' => 
    array (
      0 => 'module:blockwishlistviewstemplatescomponentsmodalsaddtowishlist.tpl',
      1 => 1677144460,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64985b1c24e0e1_78118431 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\xampp\htdocs\prestashop/modules/blockwishlist/views/templates/components/modals/add-to-wishlist.tpl -->
<div
  class="wishlist-add-to"
  data-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
"
>
  <div
    class="wishlist-modal modal fade"
    
      :class="{show: !isHidden}"
    
    tabindex="-1"
    role="dialog"
    aria-modal="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to wishlist','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>

          </h5>
          <button
            type="button"
            class="close"
            @click="toggleModal"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body">
          <choose-list
            @hide="toggleModal"
            :product-id="productId"
            :product-attribute-id="productAttributeId"
            :quantity="quantity"
            url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
"
            add-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addUrl']->value, ENT_QUOTES, 'UTF-8');?>
"
            empty-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No list found.','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
          ></choose-list>
        </div>

        <div class="modal-footer">
          <a @click="openNewWishlistModal" class="wishlist-add-to-new text-primary">
            <i class="material-icons">add_circle_outline</i> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['newWishlistCTA']->value, ENT_QUOTES, 'UTF-8');?>

          </a>
        </div>
      </div>
    </div>
  </div>

  <div 
    class="modal-backdrop fade"
    
      :class="{in: !isHidden}"
    
  >
  </div>
</div>


<!-- end C:\xampp\htdocs\prestashop/modules/blockwishlist/views/templates/components/modals/add-to-wishlist.tpl --><?php }
}
