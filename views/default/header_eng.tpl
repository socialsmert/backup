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
                <a href="/index/ua" class="header-left-item">UA</a>
                <a href="/index/en" class="header-left-item-current">EN</a>
            </div>
            <div class="header-center">

                <ul>
                    <li><a href="/news">news</a></li>
                    <li><a href="/team">team</a></li>
                    <li><a href="/stadium">stadium</a></li>
                    <li class="li-logo"><a href="/"><img id="h_logo" src="/images/header_logo.png" alt=""></a></li>
                    <li><a href="/club">club</a></li>
                    <li><a href="/media">media</a></li>
                    <li><a href="/contacts">contacts</a></li>
                </ul>

            </div>
            <div class="header-right">
                <a href="https://www.youtube.com/channel/UCDmbGqu-YvtT7hjVJt2JQZg" class="header-right-item"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/arsenal1925kyiv" class="header-right-item"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/arsenal_kyiv_official/" class="header-right-item"><i class="fa fa-instagram" aria-hidden="true"></i></a>


            </div>
        </div>

        <div id="header" class="header noselect">
            <div class="header-left">
                <a href="/index/ua" class="header-left-item">UA</a>
                <a href="/index/en" class="header-left-item-current">EN</a>
            </div>
            <div class="header-center">

                <ul>
                    <li><a href="/news">news</a></li>
                    <li><a href="/team">team</a></li>
                    <li><a href="/stadium">stadium</a></li>
                    <li class="li-logo"><a href="/"><img src="/images/header_logo.png" alt=""></a></li>
                    <li><a href="/club">club</a></li>
                    <li><a href="/media">media</a></li>
                    <li><a href="/contacts">contacts</a></li>
                </ul>

            </div>
            <div class="header-right">
                <a href="https://www.youtube.com/channel/UCDmbGqu-YvtT7hjVJt2JQZg" class="header-right-item"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/arsenal1925kyiv" class="header-right-item"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/arsenal_kyiv_official/" class="header-right-item"><i class="fa fa-instagram" aria-hidden="true"></i></a>

            </div>
        </div>
