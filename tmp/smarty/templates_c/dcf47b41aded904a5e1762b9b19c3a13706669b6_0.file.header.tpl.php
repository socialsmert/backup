<?php
/* Smarty version 3.1.30, created on 2017-10-01 11:14:31
  from "W:\domains\backup\views\default\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d0a3e7420f06_29449073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf47b41aded904a5e1762b9b19c3a13706669b6' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\header.tpl',
      1 => 1506845666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d0a3e7420f06_29449073 (Smarty_Internal_Template $_smarty_tpl) {
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
        <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    </head>

    
    <?php echo '<script'; ?>
>

        function shownewsadd(){
            document.getElementById("news-menu").style.display="block";
            document.getElementById("news-li").style.background="#f2f2f2";
        }
        function hidenewsadd(){
            document.getElementById("news-menu").style.display="none";
            document.getElementById("news-li").style.background="white";
        }

        function showteamadd(){
            document.getElementById("team-menu").style.display="block";
            document.getElementById("team-li").style.background="#f2f2f2";
        }
        function hideteamadd(){
            document.getElementById("team-menu").style.display="none";
            document.getElementById("team-li").style.background="white";
        }

        function showclubadd(){
            document.getElementById("club-menu").style.display="block";
            document.getElementById("club-li").style.background="#f2f2f2";
        }
        function hideclubadd(){
            document.getElementById("club-menu").style.display="none";
            document.getElementById("club-li").style.background="white";
        }

        function showmediaadd(){
            document.getElementById("media-menu").style.display="block";
            document.getElementById("media-li").style.background="#f2f2f2";
        }
        function hidemediaadd(){
            document.getElementById("media-menu").style.display="none";
            document.getElementById("media-li").style.background="white";
        }

        function showlangadd(){
            document.getElementById("lang-li").style.width="100%";
            document.getElementById("lang-li").style.opacity="1";
            document.getElementById("lang-li").style.border="none";
            document.getElementById("lang-li").style.lineHeight="27px";
            document.getElementById("lang-menu").style.display="block";
            document.getElementById("lang-li").style.background="#f2f2f2";
        }
        function hidelangadd(){
            document.getElementById("lang-li").style.width="auto";
            document.getElementById("lang-li").style.opacity="0.8";
            document.getElementById("lang-li").style.border="1px solid rgba(0,0,0,0.25)";
            document.getElementById("lang-li").style.lineHeight="25px";
            document.getElementById("lang-menu").style.display="none";
            document.getElementById("lang-li").style.background="white";
        }




        var vh = document.documentElement.clientHeight;



		
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

        <img src="/images/menu-logo.png" alt="">

        <ul class="main-menu">
            <li><a href="/">ГОЛОВНА</a></li>
            <li id="news-li" onmouseover="shownewsadd()" onmouseout="hidenewsadd()"><a href="/news">НОВИНИ</a></li>
            <li id="team-li" onmouseover="showteamadd()" onmouseout="hideteamadd()"><a href="/team">КОМАНДА</a></li>
            <li id="macthes-li"><a href="/matches">МАТЧІ</a></li>
            <li><a href="/stadium">СТАДІОН</a></li>
            <li id="school-li"><a href="/school">ДЮФШ</a></li>
            <li id="club-li" onmouseover="showclubadd()" onmouseout="hideclubadd()"><a href="/club">КЛУБ</a></li>


            <li id="media-li" onmouseover="showmediaadd()" onmouseout="hidemediaadd()"><a href="/media">МЕДІА</a></li>
            <li id="contacts-li"><a href="/contacts">КОНТАКТИ</a></li>
        </ul>


        <ul class="bottom-menu">
            <li onmouseover="showlangadd()" onmouseout="hidelangadd()"  id="lang-li" class="lang">УКРАЇНСЬКА</li>
            <li> <a href="/"><i class="fa fa-instagram" aria-hidden="true"></i></a>

                <a href="/"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                <a href="/"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            </li>
        </ul>



    </div>
    <div class="content-area">


        <?php echo '<script'; ?>
>
            
            var togg = 0;
            function togglemenu() {
                if (togg == 0){
                var x = document.getElementsByClassName("hidden");
                var i;

                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "block";
                }

                togg = 1;
            }else if (togg == 1){


                    var x = document.getElementsByClassName("hidden");
                    var i;

                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }

                    togg = 0;

                }
            }
            
        <?php echo '</script'; ?>
>


        <div class="mobile-menu">

            <ul>
                <li class="head"><a href="/" onclick="togglemenu(); return false;"><i class="fa fa-bars" aria-hidden="true"></i></a> <img src="/images/logoindex.png" alt="">
                    <a id="lang1" href="/index/ua">UA</a> <a id="lang2" href="/index/en">EN</a></li>
                <li class="hidden"><a href="/">ГОЛОВНА</a></li>
                <li class="hidden"><a href="/news">НОВИНИ</a></li>
                <li class="hidden"><a href="/team">КОМАНДА</a></li>
                <li class="hidden"><a href="/matches">МАТЧІ</a></li>
                <li class="hidden"><a href="/stadium">СТАДІОН</a></li>
                <li class="hidden"><a href="/school">ДЮФШ</a></li>
                <li class="hidden"><a href="/club">КЛУБ</a></li>
                <li class="hidden"><a href="/media">МЕДІА</a></li>
                <li class="hidden"><a href="/contacts">КОНТАКТИ</a></li>
            </ul>

        </div>



        <div onmouseover="showteamadd()" onmouseout="hideteamadd()" id="team-menu" class="add-menu">



            <ul>
                <li class="head-img"><i class="fa fa-users" aria-hidden="true"></i></li>
                <li><a href="/team/1">АРСЕНАЛ-КИЇВ</a></li>
                <li><a href="/team/2">U-19</a></li>
            </ul>
        </div>

        <div  onmouseover="showclubadd()" onmouseout="hideclubadd()" id="club-menu" class="add-menu">



            <ul>
                <li class="head-img"><i class="fa fa-shield" aria-hidden="true"></i></li>
                <li><a href="/club">ІСТОРІЯ</a></li>
                <li><a href="/club">ДОСЯГНЕННЯ</a></li>
                <li><a href="/club">ФІЛОСОФІЯ</a></li>
            </ul>
        </div>

        <div  onmouseover="showmediaadd()" onmouseout="hidemediaadd()" id="media-menu" class="add-menu">



            <ul>
                <li class="head-img"><i class="fa fa-youtube-play" aria-hidden="true"></i></li>
                <li><a href="/media">АЛЬБОМИ</a></li>
                <li><a href="/media">ВІДЕО</a></li>
            </ul>
        </div>

        <div  onmouseover="shownewsadd()" onmouseout="hidenewsadd()" id="news-menu" class="add-menu">



            <ul>
                <li class="head-img"><i class="fa fa-newspaper-o" aria-hidden="true"></i></li>
                <li><a href="/news">ГОЛОВНА ПОДІЯ</a></li>
                <li><a href="/news">НОВИНИ</a></li>
            </ul>
        </div>


        <div  onmouseover="showlangadd()" onmouseout="hidelangadd()" id="lang-menu" class="add-menu">



            <ul>
                <li class="head-img"><i class="fa fa-globe" aria-hidden="true"></i></li>
                <li><a href="/index/ua">УКРАЇНСЬКА</a></li>
                <li><a href="/index/en">ENGLISH</a></li>
            </ul>
        </div>




<?php }
}
