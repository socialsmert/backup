<div class="admin-addnews">
<form method="POST" action="/admin/addvideo">

    <input required type="text" placeholder="Заголовок" name="title"/>
    <input required type="text" placeholder="Зображення" value="" name="image"/>
    <input required   type="link" placeholder="Посилання" name="link"/>
    <input type="submit" value="Додати">

</form>


{foreach $videos as $item name=videos}
   {$item["title"]}<br>
    <a href="/admin/deletevideo/{$item["id"]}">Видалити</a><br>
    <img src="{$item["image"]}" alt="">
    <br><br>

{/foreach}

</div>