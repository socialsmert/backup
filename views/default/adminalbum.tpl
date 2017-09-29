<div class="admin-fullpage">

    <form method="POST" action="/admin/addalbum">

        <input required type="text" placeholder="title" name="title"/>
        <input required type="text" placeholder="mainphoto" value="" name="mainphoto"/>
        <input type="submit" value="+"/>

    </form>

    {foreach $albums as $item name=albums}
        <a href="/admin/editalbum/{$item['id']}">

            <img src="{$item['mainphoto']}" alt=""> - {$item['title']}

        </a>

    {/foreach}


</div>