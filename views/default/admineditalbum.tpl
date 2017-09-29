{foreach $albums as $item name=albums}
<form method="POST" action="/admin/editalbum/{$item['id']}">

    <input required  class="inpt" type="text" placeholder="title" value="{$item['title']}" name="title"/>
    <input required  class="inpt" type="text" placeholder="mainphoto" value="{$item['mainphoto']}" name="mainphoto"/>
    <input type="submit" name="submit" value="+">

</form>





{/foreach}

{foreach $photos as $item name=photos}
    {$item['photo']}<br>
{/foreach}



