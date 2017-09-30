<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" type="text/css" href="{$templateWebPath}css/main.css">
        <link rel="stylesheet" href="{$templateWebPath}font-awesome/css/font-awesome.min.css">

        <script src="{$templateWebPath}js/modernizr.js"></script> <!-- Modernizr -->
        <link rel="stylesheet" href="{$templateWebPath}css/photoswipe.css">
        <link rel="stylesheet" href="{$templateWebPath}css/default-skin/default-skin.css">
        <script src="{$templateWebPath}js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="{$templateWebPath}js/functions.js" type="text/javascript"></script>
        <script src="{$templateWebPath}js/photoswipe.min.js"></script> 
        <script src="{$templateWebPath}js/photoswipe-ui-default.min.js">
        </script>
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

        <title>{$pageTitle}</title>
    </head>

    {literal}
    <script>
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
    </script>
    {/literal}

    <body>

        <div id="header-adaptive" class="header noselect">
            <div class="header-left">
                <a href="/index/ua" class="header-left-item-current">UA</a>
                <a href="/index/en" class="header-left-item">EN</a>
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
                <a href="/index/ua" class="header-left-item-current">UA</a>
                <a href="/index/en" class="header-left-item">EN</a>
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
