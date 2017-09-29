{foreach $albums as $item name=albums}
    <form method="POST" action="/admin/editalbum/{$item['id']}">

        <input required  class="inpt" type="text" placeholder="title" value="{$item['title']}" name="title"/>
        <input required  class="inpt" type="text" placeholder="mainphoto" value="{$item['mainphoto']}" name="mainphoto"/>
        <input type="submit" name="submit" value="+">

    </form>








<form method="POST" action="/admin/addalbumphoto/{$item['id']}">
    {/foreach}
    <input required  class="inpt" type="text" placeholder="title" name="name"/>
    <input type="submit" name="submit" value="+">

</form>

{foreach $photos as $item name=photos}
    <a href="/admin/deletealbumphoto/{$item['id']}">qq<img src="{$item['photo']}" alt=""></a><br>
{/foreach}



