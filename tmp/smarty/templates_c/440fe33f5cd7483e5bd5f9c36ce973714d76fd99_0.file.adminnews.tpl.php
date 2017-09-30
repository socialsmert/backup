<?php
/* Smarty version 3.1.30, created on 2017-09-30 04:58:01
  from "W:\domains\backup\views\default\adminnews.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cefa2993bce4_50350267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '440fe33f5cd7483e5bd5f9c36ce973714d76fd99' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\adminnews.tpl',
      1 => 1506736680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cefa2993bce4_50350267 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="shown-news">
    <h1>НОВИНИ</h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'item', false, NULL, 'news', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div class="news-item">
        <img src=" <?php echo $_smarty_tpl->tpl_vars['item']->value["image"];?>
" alt=""> <?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
  <a href="/admin/editnews/<?php echo $_smarty_tpl->tpl_vars['item']->value["id"];?>
">Редагувати</a>  <a href="/admin/shownews/<?php echo $_smarty_tpl->tpl_vars['item']->value["id"];?>
">Показати</a> <a href="/admin/hidenews/<?php echo $_smarty_tpl->tpl_vars['item']->value["id"];?>
">Приховати</a> <a href="/admin/deletenews/<?php echo $_smarty_tpl->tpl_vars['item']->value["id"];?>
">Видалити</a>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>


<div class="shown-news">
    <h1>ПРИХОВАНІ НОВИНИ</h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hiddennews']->value, 'item', false, NULL, 'hiddennews', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

    <div class="news-item">
        <img src=" <?php echo $_smarty_tpl->tpl_vars['item']->value["image"];?>
" alt=""> <?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>
  <a href="/admin/editnews/<?php echo $_smarty_tpl->tpl_vars['item']->value["id"];?>
">Редагувати</a>  <a href="/admin/hidenews/<?php echo $_smarty_tpl->tpl_vars['item']->value["id"];?>
">Приховати</a> <a href="/admin/shownews/<?php echo $_smarty_tpl->tpl_vars['item']->value["id"];?>
">Показати</a> <a href="/admin/deletenews/<?php echo $_smarty_tpl->tpl_vars['item']->value["id"];?>
">Видалити</a>
    </div>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<?php }
}
