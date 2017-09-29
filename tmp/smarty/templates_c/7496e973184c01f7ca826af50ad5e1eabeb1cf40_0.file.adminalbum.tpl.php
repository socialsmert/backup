<?php
/* Smarty version 3.1.30, created on 2017-09-29 20:36:31
  from "W:\domains\backup\views\default\adminalbum.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ce849f589522_08636979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7496e973184c01f7ca826af50ad5e1eabeb1cf40' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\adminalbum.tpl',
      1 => 1506706453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ce849f589522_08636979 (Smarty_Internal_Template $_smarty_tpl) {
?>




<div class="admin-fullpage">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value, 'item', false, NULL, 'album', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <form method="POST" action="/admin/editalbum/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">

        <input required  class="inpt" type="text" placeholder="title" name="title"/>
        <input required  class="inpt" type="text" placeholder="mainphoto" name="mainphoto"/>
        <input type="submit" name="submit" value="+">

    </form>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>








</div><?php }
}
