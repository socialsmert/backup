<?php
/* Smarty version 3.1.30, created on 2017-09-29 19:41:32
  from "W:\domains\backup\views\default\adminimage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ce77bc44bb65_26427870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d6cf874b8a2da9b315fac73eb8c08d5ad4a3962' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\adminimage.tpl',
      1 => 1506702689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ce77bc44bb65_26427870 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input id="image" type="file" />
<button onclick="addimage()">+</button>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'item', false, NULL, 'images', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <img src="/images/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" alt="">
    /images/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>


<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
