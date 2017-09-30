<div class="admin-addnews">

    <input id="image" type="file" /><input type="submit" onclick="addimage()" value="Завантажити"><br>



{foreach $images as $item name=images}
    <img src="{$item['name']}" alt=""><br>
   {$item['name']}<br><br>

{/foreach}

</div>