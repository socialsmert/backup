<?php
/* Smarty version 3.1.30, created on 2017-09-29 20:07:21
  from "W:\domains\backup\views\default\admineditnews.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ce7dc952dd16_55099126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3e5de017c6264935c024b9223a209c5d2ead196' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\admineditnews.tpl',
      1 => 1506704840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ce7dc952dd16_55099126 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="admin-addnews">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'item', false, NULL, 'news', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <form method="POST" action="/admin/updatenews/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">

        <input required type="text" placeholder="title" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" name="title"/><br>
        <input required type="text" placeholder="image" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" name="image"/><br>
        <input required   type="text" placeholder="date" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
" name="date"/><br>
        <textarea name="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</textarea>


        <?php echo '<script'; ?>
>

            CKEDITOR.replace("text");

        <?php echo '</script'; ?>
>

        <input type="submit" name="submit" value="+">
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </form>
</div>
</body>
</html>
<?php }
}
