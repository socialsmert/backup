<?php
/* Smarty version 3.1.30, created on 2017-09-29 20:13:01
  from "W:\domains\backup\views\default\news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ce7f1d8c60b0_05165224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc6714d6e0c82e406c5444fc107038e859e2093c' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\news.tpl',
      1 => 1506705180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ce7f1d8c60b0_05165224 (Smarty_Internal_Template $_smarty_tpl) {
?>



<div class="news-page">

    <div class="news-page-content">
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainnews1']->value, 'item', false, NULL, 'mainnews1', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <a href="/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="content-news-item-main-1">

            <img src='<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
' alt=''>


            <div class="content-news-item-main-1-content">
                <div class="content-news-item-main-1-title">
                ГОЛОВНІ НОВИНИ</div>
                <div class="content-news-item-main-1-spacer"></div>
                <div class="content-news-item-main-1-news-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                <div class="content-news-item-main-1-news-date"><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</div>

            </div>
        </a>
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainnews2']->value, 'item', false, NULL, 'mainnews2', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <a href="/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="content-news-item-main-2">

            <img src='<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
' alt=''>

            <div class="content-news-item-main-1-content">


                <div class="content-news-item-main-1-news-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                <div class="content-news-item-main-1-news-date"><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</div>

            </div>
        </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainnews3']->value, 'item', false, NULL, 'mainnews3', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <a href="/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="content-news-item-main-3">

            <img src='<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
' alt=''>


            <div class="content-news-item-main-1-content">

                <div class="content-news-item-main-1-news-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                <div class="content-news-item-main-1-news-date"><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</div>

            </div>
        </a>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



    </div>
    
   
    <div id="news-page-gallery">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'item', false, NULL, 'news', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>







        <a class='news-block' href='/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'>

            <img src='<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
' alt=''>


            <div class='news-block-content'>


                <div class='title'><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                <div class='date'><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</div>

            </div>

        </a>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>






    </div>





    <div id="show-more">
        <a class="show-more-button" onclick="loadnews(); return false;" href="/">ПОКАЗАТИ &nbsp;БІЛЬШЕ</a>
    </div>
    
    <?php echo '<script'; ?>
>
    var pagenumber = 2;
    var pagetotal = <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
;

    if (pagetotal == 1){
    
    document.getElementById("show-more").style.display="none";
    
    }
<?php echo '</script'; ?>
>


</div>























<?php }
}
