<?php
/* Smarty version 3.1.30, created on 2017-09-29 23:29:17
  from "W:\domains\backup\views\default\adminaddnews.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cead1d200140_54761182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ba177c7fa4bec4c2462dfc321770ba31d0bd9ff' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\adminaddnews.tpl',
      1 => 1506716955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cead1d200140_54761182 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="admin-addnews">

    <form method="POST" action="/admin/addnews">

        <input required type="text" placeholder="title" name="title"/>
        <input required type="text" placeholder="image" value="" name="image"/>
        <input required   type="text" placeholder="date" name="date"/>
        <textarea name="text"></textarea>
        
        
        <?php echo '<script'; ?>
>
        
            CKEDITOR.replace("text");
            
        <?php echo '</script'; ?>
>
        
        <input type="submit" name="submit" value="+">

    </form>
</div>
</body>
</html>

<?php }
}
