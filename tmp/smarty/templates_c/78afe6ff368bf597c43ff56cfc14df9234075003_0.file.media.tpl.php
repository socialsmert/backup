<?php
/* Smarty version 3.1.30, created on 2017-09-29 20:21:05
  from "W:\domains\backup\views\default\media.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ce8101ec0762_33973426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78afe6ff368bf597c43ff56cfc14df9234075003' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\media.tpl',
      1 => 1506705660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ce8101ec0762_33973426 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>

</style>


<div class="album-page">
    <div class="content-album-item-main-1-title">фото галерея</div>
    <div class="content-album-item-main-1-spacer"></div>
    
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['albums']->value, 'item', false, NULL, 'albums', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <a href="/album/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="album-item">
        
        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['mainphoto'];?>
" alt="">
        <div class="album-item-info">
            
            <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

            
        </div>
        

        
    </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    <div class="content-album-item-main-1-title-2">Відео галерея</div>
    <div class="content-album-item-main-1-spacer"></div>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['videos']->value, 'item', false, NULL, 'videos', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <a href="/video/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="album-item">
        
        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="">
        <div class="album-item-info-video">
            <i class="fa fa-youtube-play" aria-hidden="true"></i><br>
            <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

            
        </div>
        

        
    </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    








</div>
</div><?php }
}
