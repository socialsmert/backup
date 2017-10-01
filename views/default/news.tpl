<style>

    #news-li{
        background: #f2f2f2;
    }

</style>

<div class="add-content-menu">



    <ul>
        <li class="head-img"><i class="fa fa-newspaper-o" aria-hidden="true"></i></li>
        <li><a href="/media/photo">ГОЛОВНА ПОДІЯ</a></li>
        <li><a href="/media/video">НОВИНИ</a></li>
    </ul>
</div>


<div class="news-page">

    <div class="news-page-content">
 {foreach $mainnews1 as $item name=mainnews1}
        <a href="/article/{$item['id']}" class="content-news-item-main-1">

            <img src='{$item['image']}' alt=''>


            <div class="content-news-item-main-1-content">
                <div class="content-news-item-main-1-title">
                ГОЛОВНА ПОДІЯ</div>
                <div class="content-news-item-main-1-spacer"></div>
                <div class="content-news-item-main-1-news-title">{$item['title']}</div>
                <div class="content-news-item-main-1-news-date">{$item['date']}</div>

            </div>
        </a>

        {/foreach}
 {foreach $mainnews2 as $item name=mainnews2}
        <a href="/article/{$item['id']}" class="content-news-item-main-2">

            <img src='{$item['image']}' alt=''>

            <div class="content-news-item-main-1-content">


                <div class="content-news-item-main-1-news-title">{$item['title']}</div>
                <div class="content-news-item-main-1-news-date">{$item['date']}</div>

            </div>
        </a>
            {/foreach}
 {foreach $mainnews3 as $item name=mainnews3}
        <a href="/article/{$item['id']}" class="content-news-item-main-3">

            <img src='{$item['image']}' alt=''>


            <div class="content-news-item-main-1-content">

                <div class="content-news-item-main-1-news-title">{$item['title']}</div>
                <div class="content-news-item-main-1-news-date">{$item['date']}</div>

            </div>
        </a>

    {/foreach}


    </div>

    <div class="news-page-left">

        Останні новини

    </div>


    <div id="news-page-gallery">

        {foreach $news as $item name=news}







        <a class='news-block' href='/article/{$item['id']}'>

            <img src='{$item['image']}' alt=''>


            <div class='news-block-content'>


                <div class='title'>{$item['title']}</div>
                <div class='date'>{$item['date']}</div>

            </div>

        </a>

        {/foreach}





    </div>





    <div id="show-more">
        <a class="show-more-button" onclick="loadnews(); return false;" href="/">ПОКАЗАТИ &nbsp;БІЛЬШЕ</a>
    </div>

    <script>
    var pagenumber = 2;
    var pagetotal = {$pages};

    if (pagetotal == 1){

    document.getElementById("show-more").style.display="none";

    }
</script>


</div>
</div>






















