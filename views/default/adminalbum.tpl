



<div class="admin-fullpage">
    {foreach $album as $item name=album}
    <form method="POST" action="/admin/editalbum/{$item['id']}">

        <input required  class="inpt" type="text" placeholder="title" name="title"/>
        <input required  class="inpt" type="text" placeholder="mainphoto" name="mainphoto"/>
        <input type="submit" name="submit" value="+">

    </form>
    {/foreach}







</div>