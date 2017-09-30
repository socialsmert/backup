<div class="shown-news">
    <h1>НОВИНИ</h1>
{foreach $news as $item name=news}
    <div class="news-item">
        <img src=" {$item["image"]}" alt=""> {$item["title"]}  <a href="/admin/editnews/{$item["id"]}">Редагувати</a>  <a href="/admin/shownews/{$item["id"]}">Показати</a> <a href="/admin/hidenews/{$item["id"]}">Приховати</a> <a href="/admin/deletenews/{$item["id"]}">Видалити</a>
    </div>
{/foreach}
</div>


<div class="shown-news">
    <h1>ПРИХОВАНІ НОВИНИ</h1>
{foreach $hiddennews as $item name=hiddennews}

    <div class="news-item">
        <img src=" {$item["image"]}" alt=""> {$item["title"]}  <a href="/admin/editnews/{$item["id"]}">Редагувати</a>  <a href="/admin/hidenews/{$item["id"]}">Приховати</a> <a href="/admin/shownews/{$item["id"]}">Показати</a> <a href="/admin/deletenews/{$item["id"]}">Видалити</a>
    </div>

{/foreach}
</div>
