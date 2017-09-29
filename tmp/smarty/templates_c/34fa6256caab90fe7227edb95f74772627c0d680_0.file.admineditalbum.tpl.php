<?php
/* Smarty version 3.1.30, created on 2017-09-30 00:54:22
  from "W:\domains\backup\views\default\admineditalbum.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cec10e97fb48_05677073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34fa6256caab90fe7227edb95f74772627c0d680' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\admineditalbum.tpl',
      1 => 1506721781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cec10e97fb48_05677073 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'item', false, NULL, 'albums', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <form method="POST" action="/admin/editalbum/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">

        <input required  class="inpt" type="text" placeholder="title" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" name="title"/>
        <input required  class="inpt" type="text" placeholder="mainphoto" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['mainphoto'];?>
" name="mainphoto"/>
        <input type="submit" name="submit" value="+">

    </form>








<form method="POST" action="/admin/addalbumphoto/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <input required  class="inpt" type="text" placeholder="title" name="name"/>
    <input type="submit" name="submit" value="+">

</form>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photos']->value, 'item', false, NULL, 'photos', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <a href="/admin/deletealbumphoto/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">qq<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
" alt=""></a><br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




<?php }
}
