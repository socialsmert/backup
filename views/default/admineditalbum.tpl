<div class="admin-addnews">

{foreach $albums as $item name=albums}
    <form method="POST" action="/admin/updatealbum/{$item['id']}">

        <input required  class="inpt" type="text" placeholder="Заголовок" value="{$item['title']}" name="title"/>
        <input required  class="inpt" type="text" placeholder="Посилання на головне фото" value="{$item['mainphoto']}" name="mainphoto"/>
        <input type="submit" name="submit" value="Оновити дані">

    </form>








<form method="POST" action="/admin/addalbumphoto/{$item['id']}">
    {/foreach}
    <input required  class="inpt" type="text" placeholder="Посилання на фото" name="name"/>
    <input type="submit" name="submit" value="Додати фото у альбом">

</form>
    Натиснути на фото щоб видалити з альбому.<br><br>
{foreach $photos as $item name=photos}
    <a href="/admin/deletealbumphoto/{$item['id']}"><img src="{$item['photo']}" alt=""></a><br>
{/foreach}
</div>



