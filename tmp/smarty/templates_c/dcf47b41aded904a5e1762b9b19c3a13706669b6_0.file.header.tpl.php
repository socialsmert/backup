<?php
/* Smarty version 3.1.30, created on 2017-09-30 18:23:46
  from "W:\domains\backup\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cfb7026a3694_80609875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf47b41aded904a5e1762b9b19c3a13706669b6' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\header.tpl',
      1 => 1506785023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cfb7026a3694_80609875 (Smarty_Internal_Template $_smarty_tpl) {
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
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">

        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    </head>

    
    <?php echo '<script'; ?>
>


        function showteamadd(){
            document.getElementById("team-menu").style.display="block";
            document.getElementById("team-li").style.background="#e5e5e5";
        }
        function hideteamadd(){
            document.getElementById("team-menu").style.display="none";
            document.getElementById("team-li").style.background="white";
        }

        function showclubadd(){
            document.getElementById("club-menu").style.display="block";
            document.getElementById("club-li").style.background="#e5e5e5";
        }
        function hideclubadd(){
            document.getElementById("club-menu").style.display="none";
            document.getElementById("club-li").style.background="white";
        }

        function showmediaadd(){
            document.getElementById("media-menu").style.display="block";
            document.getElementById("media-li").style.background="#e5e5e5";
        }
        function hidemediaadd(){
            document.getElementById("media-menu").style.display="none";
            document.getElementById("media-li").style.background="white";
        }




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



    <div class="menu-area">

        <img src="/images/logoindex.png" alt="">

        <ul class="main-menu">
            <li><a href="/">ГОЛОВНА</a></li>
            <li><a href="/news">НОВИНИ</a></li>
            <li id="team-li" onmouseover="showteamadd()" onmouseout="hideteamadd()"><a href="/team">КОМАНДА</a></li>
            <li><a href="/school">ШК. ФУТБОЛУ</a></li>
            <li id="club-li" onmouseover="showclubadd()" onmouseout="hideclubadd()"><a href="/club">КЛУБ</a></li>
            <li><a href="/matches">МАТЧІ</a></li>

            <li id="media-li" onmouseover="showmediaadd()" onmouseout="hidemediaadd()"><a href="/media">МЕДІА</a></li>
            <li><a href="/contacts">КОНТАКТИ</a></li>
        </ul>


        <ul class="bottom-menu">
            <li>МОВА</li>
            <li><a href="/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="/"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            </li>
        </ul>


        <div onmouseover="showteamadd()" onmouseout="hideteamadd()" id="team-menu" class="add-menu">



            <ul>
                <li><i class="fa fa-users" aria-hidden="true"></i></li>
                <li><a href="/team/1">АРСЕНАЛ-КИЇВ</a></li>
                <li><a href="/team/2">U-19</a></li>
            </ul>
        </div>

        <div  onmouseover="showclubadd()" onmouseout="hideclubadd()" id="club-menu" class="add-menu">



            <ul>
                <li><i class="fa fa-shield" aria-hidden="true"></i></li>
                <li><a href="/club/history">ІСТОРІЯ</a></li>
                <li><a href="/club/achievments">ДОСЯГНЕННЯ</a></li>
                <li><a href="/club/philosophy">ФІЛОСОФІЯ</a></li>
                <li><a href="/club/management">МЕНЕДЖМЕНТ</a></li>
            </ul>
        </div>

        <div  onmouseover="showmediaadd()" onmouseout="hidemediaadd()" id="media-menu" class="add-menu">



            <ul>
                <li><i class="fa fa-youtube-play" aria-hidden="true"></i></li>
                <li><a href="/media/photo">ФОТО</a></li>
                <li><a href="/media/video">ВІДЕО</a></li>
            </ul>
        </div>

    </div>
    <div class="content-area">







<?php }
}
