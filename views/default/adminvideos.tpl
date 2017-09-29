<form method="POST" action="/admin/addvideo">

    <input required type="text" placeholder="title" name="title"/>
    <input required type="text" placeholder="image" value="" name="image"/>
    <input required   type="link" placeholder="link" name="link"/>
    <input type="submit" value="+">

</form>


{foreach $videos as $item name=videos}
   {$item["title"]}
    {$item["image"]}
    <a href="/admin/deletevideo/{$item["id"]}">-</a>

{/foreach}