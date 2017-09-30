<div class="admin-addnews">

    <form method="POST" action="/admin/addalbum">

        <input required type="text" placeholder="Заголовок" name="title"/>
        <input required type="text" placeholder="Головне фото" value="" name="mainphoto"/>
        <input type="submit" value="Додати"/>

    </form>

    {foreach $albums as $item name=albums}
        <a  class="alb-item" href="/admin/editalbum/{$item['id']}">

            <img src="{$item['mainphoto']}" alt="">  {$item['title']}

        </a>

    {/foreach}


</div>