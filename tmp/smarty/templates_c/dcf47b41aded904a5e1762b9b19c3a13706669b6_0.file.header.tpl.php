<?php
/* Smarty version 3.1.30, created on 2017-09-30 04:36:11
  from "W:\domains\backup\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cef50bcb0c42_30311217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf47b41aded904a5e1762b9b19c3a13706669b6' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\header.tpl',
      1 => 1506735226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cef50bcb0c42_30311217 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
font-awesome/css/font-awesome.min.css">

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/modernizr.js"><?php echo '</script'; ?>
> <!-- Modernizr -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/photoswipe.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/default-skin/default-skin.css">
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/jquery-3.2.1.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/functions.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/photoswipe.min.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/photoswipe-ui-default.min.js">
        <?php echo '</script'; ?>
>
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">

        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    </head>

    
    <?php echo '<script'; ?>
>
        var vh = document.documentElement.clientHeight;
        console.log(vh);

        window.onscroll = function() {
            var scrolled = window.pageYOffset || document.documentElement.scrollTop;
            console.log(scrolled);
            document.getElementById("s-1-background").style.transform = "translateY(-"+scrolled/6+"px)";
            document.getElementById("s-1-content").style.transform = "translateY("+scrolled/6+"px)";



            if (scrolled >= 0.4*vh){
                document.getElementById("s-2-content-scroll").style.visibility="hidden";
                document.getElementById("s-2-content-left").style.opacity="1";
                document.getElementById("s-2-content-left").style.transform="translateX(0px)";
                document.getElementById("section-2-content-divider").style.opacity="1";
            }

            if (scrolled >= 0.5*vh){
                document.getElementById("s-2-content-right").style.opacity="1";
                document.getElementById("s-2-content-right").style.transform="translateX(0px)";
            }

            if (scrolled >= 0.5*vh){
                document.getElementById("s-2-content-item-2").style.transform="translateY(0px)";
            }

            if (scrolled >= 0.5*vh){
                document.getElementById("s-2-content-item-1").style.transform="translateY(0px)";
            }





            if (scrolled >= 0.4*vh){
                document.getElementById("header-adaptive").style.height="100px";
            }else{
                document.getElementById("header-adaptive").style.height="0px";
            }

        }
		
		$(document).ready(function(){
			$('#h_logo').mousedown(function (e) {
  if(e.button == 2) { // right click
    return false; // do nothing!
  }
});
		});
    <?php echo '</script'; ?>
>
    

    <body>

        <div id="header-adaptive" class="header noselect">
            <div class="header-left">
                <a href="/" class="header-left-item-current">UA</a>
                <a href="/" class="header-left-item">EN</a>
            </div>
            <div class="header-center">

                <ul>
                    <li><a href="/news">новини</a></li>
                    <li><a href="/team">команда</a></li>
                    <li><a href="/stadium">стадіон</a></li>
                    <li class="li-logo"><a href="/"><img id="h_logo" src="/images/header_logo.png" alt=""></a></li>
                    <li><a href="/club">клуб</a></li>
                    <li><a href="/media">медіа</a></li>
                    <li><a href="/contacts">контакти</a></li>
                </ul>

            </div>
            <div class="header-right">
                <a href="https://www.youtube.com/channel/UClesqzZshJuZDXOqD1LFzMA" target="_blank" class="header-right-item"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/arsenal1925kyiv" target="_blank" class="header-right-item"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/arsenal_kyiv_official/" target="_blank" class="header-right-item"><i class="fa fa-instagram" aria-hidden="true"></i></a>


            </div>
        </div>

        <div id="header" class="header noselect">
            <div class="header-left">
                <a href="/" class="header-left-item-current">UA</a>
                <a href="/" class="header-left-item">EN</a>
            </div>
            <div class="header-center">

                <ul>
                    <li><a href="/news">новини</a></li>
                    <li><a href="/team">команда</a></li>
                    <li><a href="/stadium">стадіон</a></li>
                    <li class="li-logo"><a href="/"><img id="h_logo" src="/images/header_logo.png" alt=""></a></li>
                    <li><a href="/club">клуб</a></li>
                    <li><a href="/media">медіа</a></li>
                    <li><a href="/contacts">контакти</a></li>
                </ul>

            </div>
            <div class="header-right">
                <a href="https://www.youtube.com/channel/UClesqzZshJuZDXOqD1LFzMA" target="_blank" class="header-right-item"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/arsenal1925kyiv" target="_blank" class="header-right-item"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/arsenal_kyiv_official/" target="_blank" class="header-right-item"><i class="fa fa-instagram" aria-hidden="true"></i></a>


            </div>
        </div>
<?php }
}
