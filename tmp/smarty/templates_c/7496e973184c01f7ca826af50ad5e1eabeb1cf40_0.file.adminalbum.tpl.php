<?php
/* Smarty version 3.1.30, created on 2017-09-30 05:14:59
  from "W:\domains\backup\views\default\adminalbum.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cefe23755bb7_92882370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7496e973184c01f7ca826af50ad5e1eabeb1cf40' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\adminalbum.tpl',
      1 => 1506737698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cefe23755bb7_92882370 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="admin-addnews">

    <form method="POST" action="/admin/addalbum">

        <input required type="text" placeholder="Заголовок" name="title"/>
        <input required type="text" placeholder="Головне фото" value="" name="mainphoto"/>
        <input type="submit" value="Додати"/>

    </form>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'item', false, NULL, 'albums', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <a  class="alb-item" href="/admin/editalbum/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">

            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['mainphoto'];?>
" alt="">  <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>


        </a>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



</div><?php }
}
