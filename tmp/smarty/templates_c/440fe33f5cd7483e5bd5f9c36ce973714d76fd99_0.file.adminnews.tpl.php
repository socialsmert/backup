<?php
/* Smarty version 3.1.30, created on 2017-09-29 19:34:37
  from "W:\domains\backup\views\default\adminnews.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ce761db7a9d9_66923161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '440fe33f5cd7483e5bd5f9c36ce973714d76fd99' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\adminnews.tpl',
      1 => 1506697628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ce761db7a9d9_66923161 (Smarty_Internal_Template $_smarty_tpl) {
?>
видно
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'item', false, NULL, 'news', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
<a href="/admin/editnews/<?php echo $_smarty_tpl->tpl_vars['item']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</a>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



не видно
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hiddennews']->value, 'item', false, NULL, 'hiddennews', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
<a href="/admin/editnews/<?php echo $_smarty_tpl->tpl_vars['item']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
</a>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
